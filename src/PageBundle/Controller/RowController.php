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
        $form = $this->createForm('PageBundle\Form\RowType', $row);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $colGenerator = explode("-",$row->getDisposition()->getNom());
            $em = $this->getDoctrine()->getManager();
            $pageEnCours = $this->getDoctrine()->getManager()->getRepository('PageBundle:Page')->find($request->get("pageID"));
            if($pageEnCours!==null):
                $pageEnCours->addRow($row);
                $em->persist($pageEnCours);
            else:
                return new JsonResponse(array("success"=>false,"id"=>null,"disposition"=>null,"message"=>"Page introuvable"));
            endif;
            
            foreach($colGenerator as $v):
                $C = new Col();
                $C->setCssClass("col-xs-".$v);
                $row->addCol($C);
                $em->persist($C);
                unset($C);
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
     * @Route("/{id}/edit", name="row_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Row $row)
    {
        $deleteForm = $this->createDeleteForm($row);
        $editForm = $this->createForm('PageBundle\Form\RowType', $row);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('row_edit', array('id' => $row->getId()));
        }

        return $this->render('row/edit.html.twig', array(
            'row' => $row,
            'edit_form' => $editForm->createView(),
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
//        $deleteForm = $this->createDeleteForm($row);
        $editForm = $this->createForm('PageBundle\Form\RowType', $row);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return new JsonResponse(array("success"=>true));
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
