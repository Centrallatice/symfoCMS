<?php

namespace PageBundle\Controller;

use PageBundle\Entity\Page;
use PageBundle\Entity\Row;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


class PageController extends Controller
{
    /**
     * Lists all page entities.
     *
     * @Route("/list", name="page_list")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PageBundle:Page')->findAll();
        return $this->render('PageBundle:page:index.html.twig', array(
            'pages' => $pages,
        ));
    }

    /**
     * Creates a new page entity.
     *
     * @Route("/new", name="page_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm('PageBundle\Form\PageType', $page);
        $form->handleRequest($request);
        $user = $this->getUser();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $page->setAuteur($user->getUsername());
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush($page);
            $this->addFlash('success', 'Votre page a bien été créé, vous pouvez a présent la personnaliser');
            return $this->redirectToRoute('page_edit', array('id' => $page->getId()));
        }

        return $this->render('PageBundle:page:new.html.twig', array(
            'page' => $page,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a page entity.
     *
     * @Route("/{id}", name="page_show")
     * @Method("GET")
     */
    public function showAction(Page $page)
    {
        $deleteForm = $this->createDeleteForm($page);

        return $this->render('PageBundle:page:show.html.twig', array(
            'page' => $page,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing page entity.
     *
     * @Route("/{id}/edit", name="page_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Page $page)
    {
//        $deleteForm = $this->createDeleteForm($page);
        $editForm = $this->createForm('PageBundle\Form\PageType', $page);
        $editForm->handleRequest($request);
        
        $row = new Row();
        $rowForm = $this->createForm('PageBundle\Form\RowType', $row);
        
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('page_edit', array('id' => $page->getId()));
        }

        return $this->render('PageBundle:page:edit.html.twig', array(
            'page' => $page,
            'form' => $editForm->createView(),
            'row_form' => $rowForm->createView()
        ));
    }

    /**
     * Deletes a page entity.
     *
     * @Route("/{id}", name="page_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Page $page)
    {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush($page);
        }

        return $this->redirectToRoute('page_index');
    }

    /**
     * Creates a form to delete a page entity.
     *
     * @param Page $page The page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('page_delete', array('id' => $page->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
