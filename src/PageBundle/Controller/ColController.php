<?php

namespace PageBundle\Controller;

use PageBundle\Entity\Col;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PageBundle\Entity\ColsModules;
/**
 * Col controller.
 *
 * @Route("col")
 */
class ColController extends Controller
{
    /**
     * Lists all col entities.
     *
     * @Route("/", name="col_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cols = $em->getRepository('PageBundle:Col')->findAll();

        return $this->render('PageBundle:col:index.html.twig', array(
            'cols' => $cols,
        ));
    }

    /**
     * Creates a new col entity.
     *
     * @Route("/new", name="col_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $col = new Col();
        $form = $this->createForm('PageBundle\Form\ColType', $col,  array('moduleType'=>$this->getParameter('moduleType')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($col);
            $em->flush($col);

            return $this->redirectToRoute('col_show', array('id' => $col->getId()));
        }

        return $this->render('PageBundle:col:new.html.twig', array(
            'col' => $col,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a col entity.
     *
     * @Route("/{id}", name="col_show")
     * @Method("GET")
     */
    public function showAction(Col $col)
    {
        $deleteForm = $this->createDeleteForm($col);

        return $this->render('PageBundle:col:show.html.twig', array(
            'col' => $col,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing col entity.
     *
     * @Route("/{id}/edit", name="col_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Col $col)
    {
       
        $editForm = $this->createForm('PageBundle\Form\ColType', $col,  array('moduleService'=>$this->get('module_service')));
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted()) {
            $this->getDoctrine()->getManager()->persist($col);
            $ColModule = new ColsModules();
            $ColModule->setModuleId($request->request->get('pagebundle_col')["modules"]);
            $ColModule->setModuleType($request->request->get('pagebundle_col')["typemodule"]);
            $ColModule->setColId($col);
            $this->getDoctrine()->getManager()->persist($ColModule);
            $this->getDoctrine()->getManager()->flush();
            return new JsonResponse(array("success"=>true));
        }
    }
    
    /**
     * Displays a form to edit an existing col entity.
     *
     * @Route("/Ajax/{id}/edit", name="col_ajax_edit")
     * @Method({"GET"})
     */
    public function ajaxEditAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $col = $em->getRepository('PageBundle:Col')->find($id);
        $editForm = $this->createForm('PageBundle\Form\ColType', $col,  array('moduleService'=>$this->get('module_service')));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('col_edit', array('id' => $col->getId()));
        }

        return new JsonResponse( array("form"=>$this->renderView('PageBundle:col:edit.html.twig', array(
            'col' => $col,
            'edit_form' => $editForm->createView()
        ))));
    }
    
    /**
     * Remove a module entity from colonne.
     *
     * @Route("/Ajax/{type}/{id}", name="col_remove_custom")
     * @Method("DELETE")
     */
    public function removeColAction($type,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $colsModules = $em->getRepository('PageBundle\Entity\ColsModules')->findBy(array("moduleType"=>$type,"moduleId"=>$id));
        if($colsModules!==null):
            foreach($colsModules as $m):
                $em->remove($m);
            endforeach;
            $em->flush();
            return new JsonResponse(array("success"=>true));
        else:
            return new JsonResponse(array("success"=>false));
        endif;
    }
    
    /**
     * Deletes a col entity.
     *
     * @Route("/{id}", name="col_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Col $col)
    {
        $form = $this->createDeleteForm($col);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($col);
            $em->flush($col);
        }

        return $this->redirectToRoute('col_index');
    }

    /**
     * Creates a form to delete a col entity.
     *
     * @param Col $col The col entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Col $col)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('col_delete', array('id' => $col->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
