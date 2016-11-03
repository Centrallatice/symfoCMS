<?php

namespace ArticleBundle\Controller;

use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Article controller.
 *
 * @Route("admin/article")
 */
class ArticleController extends Controller
{
    /**
     * Lists all article entities.
     *
     * @Route("/", name="admin_article_index")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        $data = array();
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('ArticleBundle:Category')->findAll();
        $catArray = array();
        foreach($categories as $c):
            $catArray[$c->getID()]=$c->getNom();
        endforeach;
        
        $form = $this->createFormBuilder($data)
                ->add('category', 'choice',array(
                    'choices' => $catArray,
                    'placeholder' => '-- Toutes les catégories --',
                    'empty_data'  => null,
                    'required' => false,
                    'label' => false
                 ))
                ->getForm();
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $data = $form->getData();
            if(!is_null($data['category'])):
                $catChoisie = $em->getRepository('ArticleBundle:Category')->find($data['category']);
                if($catChoisie!=null):
                    $articles = $em->getRepository('ArticleBundle:Article')->findBy(array("category"=>$catChoisie));
                endif;
            else:
                $articles = $em->getRepository('ArticleBundle:Article')->findAll();
            endif;
        }
        else{
            $articles = $em->getRepository('ArticleBundle:Article')->findAll();
        }
        
        
        return $this->render('ArticleBundle:Article:index.html.twig', array(
            'articles' => $articles,
            'form_category' => $form->createView()
        ));
    }

    /**
     * Creates a new article entity.
     *
     * @Route("/new", name="admin_article_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('ArticleBundle\Form\ArticleType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $u = $this->getUser();
            $article->setAuteur($u->getUsername());
            $em->persist($article);
            $em->flush($article);
            $this->addFlash('success', 'Votre article a bien été créé');
            return $this->redirectToRoute('admin_article_index', array('id' => $article->getId()));
        }

        return $this->render('ArticleBundle:Article:new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a article entity.
     *
     * @Route("/{id}", name="admin_article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('ArticleBundle:Article:show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     * @Route("/{id}/edit", name="admin_article_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('ArticleBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_article_edit', array('id' => $article->getId()));
        }

        return $this->render('ArticleBundle:Article:edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a article entity.
     *
     * @Route("/{id}", name="admin_article_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush($article);
        }

        return $this->redirectToRoute('admin_article_index');
    }
    
    /**
     * Deletes a page entity.
     *
     * @Route("/Ajax/{id}", name="article_ajax_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('ArticleBundle:Article')->find($request->get("idArticle"));
        if ($article!==null) {
            $em->remove($article);
            $em->flush();
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
    }
    
    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
