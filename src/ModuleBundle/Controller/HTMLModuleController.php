<?php

namespace ModuleBundle\Controller;

use ModuleBundle\Entity\HTMLModule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


class HTMLModuleController extends Controller
{
    /**
     * Lists all hTMLModule entities.
     *
     * @Route("/module/html", name="admin_module_html_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hTMLModules = $em->getRepository('ModuleBundle:HTMLModule')->findAll();

        return $this->render('ModuleBundle:htmlmodule:index.html.twig', array(
            'hTMLModules' => $hTMLModules,
        ));
    }
    /**
     * Finds and displays a hTMLModule entity.
     *
     * @Route("/module/html/{id}", name="module_html_show")
     * @Method("GET")
     */
    public function showAction(HTMLModule $hTMLModule)
    {
        $deleteForm = $this->createDeleteForm($hTMLModule);

        return $this->render('ModuleBundle:htmlmodule:show.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Creates a new hTMLModule entity.
     *
     * @Route("/admin/module/html/new", name="admin_module_html_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hTMLModule = new Htmlmodule();
        $form = $this->createForm('ModuleBundle\Form\HTMLModuleType', $hTMLModule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hTMLModule);
            $em->flush($hTMLModule);
            $this->addFlash('success', 'Votre module a bien été créé');
            return $this->redirectToRoute('admin_htmlmodule_new');
        }

        return $this->render('ModuleBundle:htmlmodule:new.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'form' => $form->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing hTMLModule entity.
     *
     * @Route("/admin/module/html/{id}/edit", name="admin_module_html_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HTMLModule $hTMLModule)
    {
        $deleteForm = $this->createDeleteForm($hTMLModule);
        $editForm = $this->createForm('ModuleBundle\Form\HTMLModuleType', $hTMLModule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('htmlmodule_edit', array('id' => $hTMLModule->getId()));
        }

        return $this->render('ModuleBundle:htmlmodule:edit.html.twig', array(
            'hTMLModule' => $hTMLModule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hTMLModule entity.
     *
     * @Route("/admin/module/html/{id}", name="admin_module_html_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HTMLModule $hTMLModule)
    {
        $form = $this->createDeleteForm($hTMLModule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hTMLModule);
            $em->flush($hTMLModule);
        }

        return $this->redirectToRoute('htmlmodule_index');
    }

    /**
     * Creates a form to delete a hTMLModule entity.
     *
     * @param HTMLModule $hTMLModule The hTMLModule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HTMLModule $hTMLModule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('htmlmodule_delete', array('id' => $hTMLModule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
