<?php

namespace ModuleBundle\Controller;

use ModuleBundle\Entity\ImageModule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


class ImageModuleController extends Controller
{
    /**
     * Lists all imageModule entities.
     *
     * @Route("/module/image", name="admin_module_image_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageModules = $em->getRepository('ModuleBundle:ImageModule')->findAll();

        return $this->render('ModuleBundle:imagemodule:index.html.twig', array(
            'imageModules' => $imageModules,
        ));
    }
    
    /**
     * Finds and displays a imageModule entity.
     *
     * @Route("/module/image/{id}", name="admin_module_image_show")
     * @Method("GET")
     */
    public function showAction(ImageModule $imageModule)
    {
        $deleteForm = $this->createDeleteForm($imageModule);

        return $this->render('ModuleBundle:imagemodule:show.html.twig', array(
            'imageModule' => $imageModule,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Creates a new imageModule entity.
     *
     * @Route("/admin/module/image/new", name="admin_module_image_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageModule = new Imagemodule();
        $form = $this->createForm('ModuleBundle\Form\ImageModuleType', $imageModule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageModule);
            $em->flush($imageModule);

            return $this->redirectToRoute('admin_module_image_show', array('id' => $imageModule->getId()));
        }

        return $this->render('ModuleBundle:imagemodule:new.html.twig', array(
            'imageModule' => $imageModule,
            'form' => $form->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing imageModule entity.
     *
     * @Route("/admin/module/image/{id}/edit", name="admin_module_image_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageModule $imageModule)
    {
        $deleteForm = $this->createDeleteForm($imageModule);
        $editForm = $this->createForm('ModuleBundle\Form\ImageModuleType', $imageModule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_module_image_edit', array('id' => $imageModule->getId()));
        }

        return $this->render('ModuleBundle:imagemodule:edit.html.twig', array(
            'imageModule' => $imageModule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a imageModule entity.
     *
     * @Route("/admin/module/image/{id}", name="admin_module_image_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImageModule $imageModule)
    {
        $form = $this->createDeleteForm($imageModule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageModule);
            $em->flush($imageModule);
        }

        return $this->redirectToRoute('admin_module_image_index');
    }

    /**
     * Creates a form to delete a imageModule entity.
     *
     * @param ImageModule $imageModule The imageModule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageModule $imageModule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_module_image_delete', array('id' => $imageModule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
