<?php

namespace CategoryBundle\Controller;

use CategoryBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Category controller.
 *
 * @Route("admin/category")
 */
class CategoryController extends Controller
{
    /**
     * Lists all category entities.
     *
     * @Route("/{type}", name="admin_category_index")
     * @Method("GET")
     */
    public function indexAction($type)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('CategoryBundle:Category')->findAllOrdered($type,"depth","ASC"); 
        
        return $this->render('CategoryBundle:category:index.html.twig', array(
            'categories' => $categories,
            'type' => $type
        ));
    }

    /**
     * Creates a new category entity.
     *
     * @Route("/new/{type}", name="admin_category_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$type)
    {
        $category = new Category();
        $category->setType($type);
        $form = $this->createForm('CategoryBundle\Form\CategoryType', $category , array("type"=>$type));
        $form->handleRequest($request);
        $user = $this->getUser();
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $category->setAuteur($user->getUsername());
            $em = $this->getDoctrine()->getManager();
            
            if($category->getCategoryParente()!=null):
                $cParent = $category->getCategoryParente();
                $cParent->addCategoryEnfant($category);
                $em->persist($cParent);
                $em->flush($cParent);
                $category->setDepth($cParent->getDepth()+1);
            endif;
            
            $em->persist($category);
            $em->flush($category);
           
            $this->addFlash('success', 'Votre catégorie a bien été créé');
            
            return $this->redirectToRoute('admin_category_new', array(
                'id' => $category->getId(),
                'type' => $type
            ));
        }
        
        return $this->render('CategoryBundle:category:new.html.twig', array(
            'category' => $category,
            'type' => $type,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     * @Route("/{id}", name="admin_category_show")
     * @Method("GET")
     */
    public function showAction(Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('CategoryBundle:category:show.html.twig', array(
            'category' => $category,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     * @Route("/{id}/edit", name="admin_category_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('CategoryBundle\Form\CategoryType', $category, array("type"=>$category->getType(),"notId"=>$category->getId()));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Votre catégorie a bien été modifié');
            return $this->redirectToRoute('admin_category_edit', array('id' => $category->getId()));
        }

        return $this->render('CategoryBundle:category:edit.html.twig', array(
            'category' => $category,
            'type' => $category->getType(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    /**
     * Deletes a category entity.
     *
     * @Route("/Ajax/{id}", name="category_ajax_delete")
     * @Method("DELETE")
     */
    public function deleteAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository('CategoryBundle:Category')->find($request->get("idCategory"));
        if ($c!==null) {
            $isParent =  $em->getRepository('CategoryBundle:Category')->findBy(array("categoryParente"=>$c));
            
            if($c->getType()=="article"):
                $articleDirects =  $em->getRepository('ArticleBundle:Article')->findBy(array("category"=>$c));
                foreach($articleDirects as $a):
                    $a->setCategory(null);
                    $em->persist($a);
                    $em->flush($a);
                endforeach;

                
                if($isParent != null):
                    foreach($isParent as $cFils):
                        $articleEnfants =  $em->getRepository('ArticleBundle:Article')->findBy(array("category"=>$cFils));
                        foreach($articleEnfants as $a):
                            $a->setCategory(null);
                            $em->persist($a);
                            $em->flush($a);
                        endforeach;

                        $em->remove($cFils);
                        $em->flush($cFils);
                    endforeach;
                endif;
            endif;
            if($c->getType()=="page"):
                $pageDirects =  $em->getRepository('PageBundle:Page')->findBy(array("category"=>$c));
                foreach($pageDirects as $p):
                    $p->setCategory(null);
                    $em->persist($p);
                    $em->flush($p);
                endforeach;

                
                if($isParent != null):
                    foreach($isParent as $cFils):
                        $pageeEnfants =  $em->getRepository('PageBundle:Page')->findBy(array("category"=>$cFils));
                        foreach($pageeEnfants as $p):
                            $p->setCategory(null);
                            $em->persist($p);
                            $em->flush($p);
                        endforeach;

                        $em->remove($cFils);
                        $em->flush($cFils);
                    endforeach;
                endif;
            endif;
            
            $em->remove($c);
            $em->flush();
            return new JsonResponse(array("success"=>true));
        }

        return new JsonResponse(array("success"=>false));
    }
    /**
     * Activate/ Desactivate a category entity.
     *
     * @Route("/Ajax/ChangeState", name="category_ajax_change_state")
     * @Method("POST")
     */
    public function changeStateAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $idCategories = $request->get("idCategories");
        foreach($idCategories as $v):
            $c = $em->getRepository('CategoryBundle:Category')->find($v);
            $c->setIsActive(($request->get("etat")==1) ? true : false);
            $em->persist($c);
            $em->flush($c);
        endforeach;
        return new JsonResponse(array("success"=>true));
    }
    

    /**
     * Creates a form to delete a category entity.
     *
     * @param Category $category The category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Category $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_category_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
