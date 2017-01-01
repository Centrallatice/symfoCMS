<?php

namespace ModuleBundle\CustomModules\HtmlModule\Controller;

use ModuleBundle\CustomModules\HtmlModule\Entity\HtmlModule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Lists all hTMLModule entities.
     *
     * @Route("/module/html", name="custom_module_html_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hTMLModules = $em->getRepository('ModuleBundle:HtmlModule')->findAll();

        return $this->render('HtmlBundle::index.html.twig', array(
            'hTMLModules' => $hTMLModules,
        ));
    }
    /**
     * Finds and displays a hTMLModule entity.
     *
     * @Route("/module/html/{id}", name="custom_module_html_show")
     * @Method("GET")
     */
    public function showAction(HtmlModule $hTMLModule)
    {
        $deleteForm = $this->createDeleteForm($hTMLModule);

        return $this->render('HtmlBundle::show.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Creates a new hTMLModule entity.
     *
     * @Route("/admin/module/html/new", name="custom_module_html_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hTMLModule = new Htmlmodule();
        $form = $this->createForm('ModuleBundle\CustomModules\HtmlModule\Form\HtmlModuleType', $hTMLModule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hTMLModule);
            $em->flush($hTMLModule);
            $this->addFlash('success', 'Votre module a bien été créé');
            return $this->redirectToRoute('custom_module_html_new');
        }

        return $this->render('HtmlBundle::new.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'form' => $form->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing hTMLModule entity.
     *
     * @Route("/admin/module/html/{id}/edit", name="custom_module_html_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HtmlModule $hTMLModule)
    {
        $deleteForm = $this->createDeleteForm($hTMLModule);
        $editForm = $this->createForm('ModuleBundle\CustomModules\HtmlModule\Form\HtmlModuleType', $hTMLModule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('custom_module_html_edit', array('id' => $hTMLModule->getId()));
        }

        return $this->render('HtmlBundle::edit.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hTMLModule entity.
     *
     * @Route("/admin/module/html/{id}", name="custom_module_html_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HtmlModule $hTMLModule)
    {
        $form = $this->createDeleteForm($hTMLModule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hTMLModule);
            $em->flush($hTMLModule);
        }

        return $this->redirectToRoute('custom_module_html_index');
    }

    /**
     * Creates a form to delete a hTMLModule entity.
     *
     * @param HtmlModule $hTMLModule The hTMLModule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HtmlModule $hTMLModule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('custom_module_html_delete', array('id' => $hTMLModule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
