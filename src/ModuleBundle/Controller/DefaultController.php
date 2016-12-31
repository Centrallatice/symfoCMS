<?php

namespace ModuleBundle\Controller;

use ModuleBundle\Entity\Module;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Module controller.
 *
 * @Route("admin/module")
 */
class DefaultController extends Controller
{
    /**
     * Lists all module entities.
     *
     * @Route("/", name="admin_module_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modules = $em->getRepository('ModuleBundle:Module')->findAll();

        return $this->render('ModuleBundle:module:index.html.twig', array(
            'modules' => $modules,
        ));
    }

    /**
     * Creates a new module entity.
     *
     * @Route("/new", name="admin_module_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $module = new Module();
        $form = $this->createForm('ModuleBundle\Form\ModuleType', $module,  array('moduleService'=>$this->get('module_service')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($module);
            $em->flush($module);
            $this->addFlash('success', 'Votre module a bien été créé, vous pouvez a présent le paramètrer');
            return $this->redirectToRoute('admin_module_'.strtolower($module->getType()).'_new');
        }

        return $this->render('ModuleBundle:module:new.html.twig', array(
            'module' => $module,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a module entity.
     *
     * @Route("/{id}", name="admin_module_show")
     * @Method("GET")
     */
    public function showAction(Module $module)
    {
        $deleteForm = $this->createDeleteForm($module);

        return $this->render('ModuleBundle:module:show.html.twig', array(
            'module' => $module,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing module entity.
     *
     * @Route("/{id}/edit", name="admin_module_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Module $module)
    {
        $deleteForm = $this->createDeleteForm($module);
        $editForm = $this->createForm('ModuleBundle\Form\ModuleType', $module,  array('moduleType'=>$this->getParameter('moduleType')));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_module_edit', array('id' => $module->getId()));
        }

        return $this->render('ModuleBundle:module:edit.html.twig', array(
            'module' => $module,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a module entity.
     * 
     * @Route("/{id}", name="admin_module_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Module $module)
    {
        $form = $this->createDeleteForm($module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($module);
            $em->flush($module);
        }

        return $this->redirectToRoute('admin_module_index');
    }

    /**
     * Deletes a page entity.
     *
     * @Route("/Ajax/{id}", name="module_ajax_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $module = $em->getRepository('ModuleBundle:Module')->find($request->get("idModule"));
        if ($module!==null) {
            $em->remove($module);
            $em->flush();
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
    }
    /**
     * Creates a form to delete a module entity.
     *
     * @param Module $module The module entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Module $module)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_module_delete', array('id' => $module->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Get module entity by type.
     *
     * @Route("/Ajax/{type}", name="module_ajax_get_by_type")
     * @Method("GET")
     */
    public function getByTypeAction($type)
    {
        $em = $this->getDoctrine()->getManager();
        
        $modules = $em->getRepository('ModuleBundle:'.ucfirst(strtolower($type)).'Module')->findAll();
        if ($modules!==null) {
            return new JsonResponse(array("success"=>true,"donnees"=>$modules));
        }

        return new JsonResponse(array("success"=>false,"donnees"=>null));
    }
}
