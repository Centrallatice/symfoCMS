<?php

namespace ModuleBundle\CustomModules\ImageModule\Controller;

use ModuleBundle\CustomModules\ImageModule\Entity\ImageModule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * Lists all image entities.
     *
     * @Route("/module/image", name="custom_module_image_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageModules = $em->getRepository('ModuleBundle\CustomModules\ImageModule\Entity\ImageModule')->findAll();

        return $this->render('ImageBundle::index.html.twig', array(
            'imageModules' => $imageModules,
        ));
    }
   
    /**
     * Finds and displays a imageModule entity.
     *
     * @Route("/module/image/{id}", name="custom_module_image_show")
     * @Method("GET")
     */
    public function showAction(ImageModule $imageModule)
    {
        $deleteForm = $this->createDeleteForm($imageModule);

        return $this->render('ImageBundle::show.html.twig', array(
            'imageModule' => $imageModule,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Creates a new imageModule entity.
     *
     * @Route("/admin/module/image/new", name="custom_module_image_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imageModule = new Imagemodule();
        $form = $this->createForm('ModuleBundle\CustomModules\ImageModule\Form\ImageModuleType', $imageModule);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageModule);
            $em->flush();

            return $this->redirectToRoute('admin_module_index');
        }

        return $this->render('ImageBundle::new.html.twig', array(
            'imageModule' => $imageModule,
            'form' => $form->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing imageModule entity.
     *
     * @Route("/admin/module/image/{id}/edit", name="custom_module_image_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImageModule $imageModule)
    {
        $deleteForm = $this->createDeleteForm($imageModule);
        $editForm = $this->createForm('ModuleBundle\CustomModules\ImageModule\Form\ImageModuleType', $imageModule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            return $this->redirectToRoute('custom_module_image_edit', array('id' => $imageModule->getId()));
        }

        return $this->render('ImageBundle::edit.html.twig', array(
            'imageModule' => $imageModule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a imageModule entity Ajax.
     *
     * @Route("/admin/module/image/{id}", name="custom_module_image_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $imageModules = $em->getRepository('ModuleBundle\CustomModules\ImageModule\Entity\ImageModule')->find($id);
        if($imageModules!==null):
            $em->remove($imageModules);
            $em->flush();
            return new JsonResponse(array("success"=>true));
        else:
            return new JsonResponse(array("success"=>false));
        endif;
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
            ->setAction($this->generateUrl('custom_module_image_delete', array('id' => $imageModule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
