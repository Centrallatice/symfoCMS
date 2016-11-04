<?php

namespace MenuBundle\Controller;

use MenuBundle\Entity\lienMenu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Lienmenu controller.
 *
 * @Route("lienmenu")
 */
class lienMenuController extends Controller
{
    /**
     * Lists all lienMenu entities.
     *
     * @Route("/", name="lienmenu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lienMenus = $em->getRepository('MenuBundle:lienMenu')->findAll();

        return $this->render('lienmenu/index.html.twig', array(
            'lienMenus' => $lienMenus,
        ));
    }

    /**
     * Creates a new lienMenu entity.
     *
     * @Route("/new", name="lienmenu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lienMenu = new Lienmenu();
        $form = $this->createForm('MenuBundle\Form\lienMenuType', $lienMenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lienMenu);
            $em->flush($lienMenu);

            return $this->redirectToRoute('lienmenu_show', array('id' => $lienMenu->getId()));
        }

        return $this->render('lienmenu/new.html.twig', array(
            'lienMenu' => $lienMenu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lienMenu entity.
     *
     * @Route("/{id}", name="lienmenu_show")
     * @Method("GET")
     */
    public function showAction(lienMenu $lienMenu)
    {
        $deleteForm = $this->createDeleteForm($lienMenu);

        return $this->render('lienmenu/show.html.twig', array(
            'lienMenu' => $lienMenu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lienMenu entity.
     *
     * @Route("/{id}/edit", name="lienmenu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, lienMenu $lienMenu)
    {
        $deleteForm = $this->createDeleteForm($lienMenu);
        $editForm = $this->createForm('MenuBundle\Form\lienMenuType', $lienMenu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lienmenu_edit', array('id' => $lienMenu->getId()));
        }

        return $this->render('lienmenu/edit.html.twig', array(
            'lienMenu' => $lienMenu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lienMenu entity.
     *
     * @Route("/{id}", name="lienmenu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, lienMenu $lienMenu)
    {
        $form = $this->createDeleteForm($lienMenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lienMenu);
            $em->flush($lienMenu);
        }

        return $this->redirectToRoute('lienmenu_index');
    }

    /**
     * Creates a form to delete a lienMenu entity.
     *
     * @param lienMenu $lienMenu The lienMenu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(lienMenu $lienMenu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lienmenu_delete', array('id' => $lienMenu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
