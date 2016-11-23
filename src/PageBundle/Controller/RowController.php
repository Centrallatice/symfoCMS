<?php

namespace PageBundle\Controller;

use PageBundle\Entity\Row;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PageBundle\Entity\Col;
/**
 * Row controller.
 *
 * @Route("row")
 */
class RowController extends Controller
{
    /**
     * Lists all row entities.
     *
     * @Route("/", name="row_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rows = $em->getRepository('PageBundle:Row')->findAll();

        return $this->render('row/index.html.twig', array(
            'rows' => $rows,
        ));
    }

    /**
     * Creates a new row entity.
     *
     * @Route("/new", name="row_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $row = new Row();
        $row->setEtat(false);
        
        $form = $this->createForm('PageBundle\Form\RowType', $row,array('dispositions'=>$this->getParameter("dispositions")));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $colGenerator = explode("-",$row->getDisposition());
            $em = $this->getDoctrine()->getManager();
            $rows = $em->getRepository('PageBundle:Row')->findAll();
            $row->setOrdre(count($rows)+1);
            $i=1;
            foreach($colGenerator as $v):
                $C = new Col();
                $C->setCssClass("col s".$v);
                $C->setRow($row);
                $C->setOrdre($i);
                $C->setEtat(false);
                $row->addCol($C);
                $em->persist($C);
                unset($C);
                $i++;
            endforeach;
            
            
            $em->persist($row);
            $em->flush();
            
            $idCols = array();
            foreach($row->getCols() as $v):
                array_push($idCols,array("id"=>$v->getId(),"cssClass"=>$v->getCssClass()));
            endforeach;
            
            return new JsonResponse(array(
                "success"=>true,
                "idPage"=>$request->get("pageID"),
                "id"=>$row->getId(),
                "idCols"=>$idCols
            ));
        }
        else return new JsonResponse(array(
            "success"=>false,
            "id"=>null,
            "idPage"=>null,
            "idCols"=>null));
    }

    /**
     * Finds and displays a row entity.
     *
     * @Route("/{id}", name="row_show")
     * @Method("GET")
     */
    public function showAction(Row $row)
    {
        $deleteForm = $this->createDeleteForm($row);

        return $this->render('row/show.html.twig', array(
            'row' => $row,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing row entity.
     *
     * @Route("/Ajax/{id}/edit", name="row_ajax_edit")
     * @Method({"GET", "POST"})
     */
    public function editAjaxAction(Request $request, Row $row)
    {
        $dispo = $row->getDisposition();
        $editForm = $this->createForm('PageBundle\Form\RowType', $row,array('dispositions'=>$this->getParameter("dispositions")));
        $editForm->handleRequest($request);
        $updatedRow = false ;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $colGenerator = explode("-",$row->getDisposition());
            $em = $this->getDoctrine()->getManager();
            if($row->getDisposition()!=$dispo):
                $updatedRow = true ;
                $cols = $em->getRepository('PageBundle:Col')->findBy(array("row"=>$row));
                foreach($cols as $c):
                    $em->remove($c);
                endforeach;
                
                $i=1;
                foreach($colGenerator as $v):
                    $C = new Col();
                    $C->setCssClass("col s".$v);
                    $C->setRow($row);
                    $C->setOrdre($i);
                    $C->setEtat(false);
                    $row->addCol($C);
                    $em->persist($C);
                    unset($C);
                    $i++;
                endforeach;
            endif;
            
            $em->persist($row);
            $em->flush();
            
            $idCols = array();
            foreach($row->getCols() as $v):
                array_push($idCols,array("id"=>$v->getId(),"cssClass"=>$v->getCssClass()));
            endforeach;
            return new JsonResponse(array("success"=>true,"idCols"=>$idCols,"updatedRow"=>$updatedRow));
        }
        else return new JsonResponse(
                array(
                    "form"=>$this->renderView('PageBundle:row:edit.html.twig', 
                    array(
                        'row' => $row,
                        'edit_form' => $editForm->createView()
                    ))
        ));
        
    }

    /**
     * Deletes a row entity.
     *
     * @Route("/{id}", name="row_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Row $row)
    {
        $form = $this->createDeleteForm($row);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($row);
            $em->flush($row);
        }

        return $this->redirectToRoute('row_index');
    }
    /**
     * Deletes a row entity by Ajax.
     *
     * @Route("/Ajax/{id}", name="row_ajax_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $row = $em->getRepository('PageBundle:Row')->find($request->get("idRow"));
        $page = $em->getRepository('PageBundle:Page')->find($request->get("idPage"));
        
        if ($row!==null && $page!==null) {
            $page->removeRow($row);
            $em->persist($page);
            $em->flush($page);
            
            foreach($row->getCols() as $v):
                $row->removeCol($v);
                $em->flush($row);
                $em->remove($v);
                $em->flush($v);
            endforeach;
            
            $em->remove($row);
            $em->flush($row);
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
    }
    /**
     * Deletes a row entity by Ajax.
     *
     * @Route("/Ajax/setEtat/{id}", name="row_ajax_setetat")
     * @Method("POST")
     */
    public function setEtatAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $row = $em->getRepository('PageBundle:Row')->find($request->get("idRow"));
        
        if ($row!==null) {
            $row->setEtat(!$row->getEtat());
            $em->persist($row);
            $em->flush($row);
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
    }

    /**
     * Creates a form to delete a row entity.
     *
     * @param Row $row The row entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Row $row)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('row_delete', array('id' => $row->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
