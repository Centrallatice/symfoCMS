<?php

namespace PageBundle\Controller;

use PageBundle\Entity\Page;
use PageBundle\Entity\Row;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


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
        $user = $this->getUser();
        $form = $this->createForm('PageBundle\Form\PageType', $page);
        $form->handleRequest($request);
        
        
        if ($form->isValid() && $form->isSubmitted()) {
            $keyWords = explode(";",$request->get("pagebundle_page_keywords_final"));
            $em = $this->getDoctrine()->getManager();
            $page->setAuteur($user->getUsername());
            $em->persist($page);
            $em->flush();
            
        
            foreach($keyWords as $k=>$v):
                if(trim($v)!=""):
                    $k = new \PageBundle\Entity\keyWordsPage();
                    $k->setValue($v);
                    $k->setAssociationType("page");
                    $k->setAssociationId($page);
                    $page->addKeyword($k);
                    $em->persist($k);
                endif;
            endforeach;
           
            if($page->getIsHomepage()):
                $pages = $em->getRepository('PageBundle:Page')->findAll();
                foreach($pages as $p):
                    $p->setIsHomepage(false);
                    $em->persist($p);
                endforeach;
                $page->setIsHomepage(true);
            endif;
            
            $em->persist($page);
            $em->flush();
            
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
        $editForm = $this->createForm('PageBundle\Form\PageType', $page);
        $editForm->handleRequest($request);
        
        $row = new Row();
        $rowForm = $this->createForm('PageBundle\Form\RowType', $row,array('dispositions'=>$this->getParameter("dispositions")));
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach($page->getKeywords() as $actualKW):
                $page->removeKeyword($actualKW);
                $em->remove($actualKW);
            endforeach;
            $em->persist($page);
            
            $keyWords = explode(";",$request->get("pagebundle_page_keywords_final"));
            foreach($keyWords as $k=>$v):
                if(trim($v)!=""):
                    $k = new \PageBundle\Entity\keyWordsPage();
                    $k->setValue($v);
                    $k->setAssociationType("page");
                    $k->setAssociationId($page);
                    $page->addKeyword($k);
                    $em->persist($k);
                endif;
            endforeach;
            
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Votre page a bien été modifiée');
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
        
        $isHomePage = $page->getIsHomepage();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach($page->getRows() as $r):
                $page->removeRow($r);
                $em->persist($page);
                $em->flush($page);
                foreach($r->getCols() as $c):
                    $r->removeCol($c);
                    $em->flush($r);
                    $em->remove($c);
                    $em->flush($c);
                endforeach;
                $em->remove($r);
                $em->flush($r);
            endforeach;
            $em->remove($page);
            $em->flush($page);
            
            if($isHomePage):
                $firstPage = $em->getRepository('PageBundle:Page')->findAll();
                if(count($firstPage)>0):
                    $firstPage[0]->setIsHomepage(true);
                    $em->persist($firstPage[0]);
                    $em->flush($firstPage[0]);
                endif;
            endif;
        }

        return $this->redirectToRoute('page_list');
    }
    /**
     * Deletes a page entity.
     *
     * @Route("/Ajax/{id}", name="page_ajax_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PageBundle:Page')->find($request->get("idPage"));
        
        if ($page!==null) {
            $isHomePage = $page->getIsHomepage();
            foreach($page->getRows() as $r):
                $page->removeRow($r);
                $em->persist($page);
                $em->flush($page);
                foreach($r->getCols() as $c):
                    $r->removeCol($c);
                    $em->flush($r);
                    $em->remove($c);
                    $em->flush($c);
                endforeach;
                $em->remove($r);
                $em->flush($r);
            endforeach;
            
            $em->remove($page);
            $em->flush($page);
            
            if($isHomePage):
                $firstPage = $em->getRepository('PageBundle:Page')->findAll();
                if(count($firstPage)>0):
                    $firstPage[0]->setIsHomepage(true);
                    $em->remove($firstPage[0]);
                    $em->flush($firstPage[0]);
                endif;
            endif;
            
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
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
