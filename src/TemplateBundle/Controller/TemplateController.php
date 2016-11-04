<?php

namespace TemplateBundle\Controller;

use TemplateBundle\Entity\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Template controller.
 *
 * @Route("template")
 */
class TemplateController extends Controller
{
    /**
     * Lists all template entities.
     *
     * @Route("/", name="template_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $templates = $em->getRepository('TemplateBundle:Template')->findAll();

        return $this->render('template/index.html.twig', array(
            'templates' => $templates,
        ));
    }

    /**
     * Creates a new template entity.
     *
     * @Route("/new", name="template_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $template = new Template();
        $form = $this->createForm('TemplateBundle\Form\TemplateType', $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($template);
            $em->flush($template);

            return $this->redirectToRoute('template_show', array('id' => $template->getId()));
        }

        return $this->render('template/new.html.twig', array(
            'template' => $template,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a template entity.
     *
     * @Route("/{id}", name="template_show")
     * @Method("GET")
     */
    public function showAction(Template $template)
    {
        $deleteForm = $this->createDeleteForm($template);

        return $this->render('template/show.html.twig', array(
            'template' => $template,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing template entity.
     *
     * @Route("/{id}/edit", name="template_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Template $template)
    {
        $deleteForm = $this->createDeleteForm($template);
        $editForm = $this->createForm('TemplateBundle\Form\TemplateType', $template);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('template_edit', array('id' => $template->getId()));
        }

        return $this->render('template/edit.html.twig', array(
            'template' => $template,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a template entity.
     *
     * @Route("/{id}", name="template_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Template $template)
    {
        $form = $this->createDeleteForm($template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($template);
            $em->flush($template);
        }

        return $this->redirectToRoute('template_index');
    }

    /**
     * Creates a form to delete a template entity.
     *
     * @param Template $template The template entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Template $template)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('template_delete', array('id' => $template->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
