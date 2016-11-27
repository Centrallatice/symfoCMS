<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
	$em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PageBundle:Page')->findAll();
        $articles = $em->getRepository('ArticleBundle:Article')->findAll();
        $modules = $em->getRepository('ModuleBundle:Module')->findAll();
        return $this->render('AdminBundle:Default:index.html.twig',array("pages"=>$pages,"articles"=>$articles,"modules"=>$modules));
    }
}
