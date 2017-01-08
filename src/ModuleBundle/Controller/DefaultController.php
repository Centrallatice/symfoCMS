<?php
namespace ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Module controller.
 *
 * @Route("admin/module")
 */
class DefaultController extends Controller
{
    /**
     * Lists all module entities.
     *
     * @Route("/", name="admin_module_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        
        $modules = $this->get('module_service')->getModulesType();
        $em = $this->getDoctrine()->getManager();
        foreach($modules as $k=>$v):
            $modules[$k]['details']=$em->getRepository('ModuleBundle\CustomModules\\'.$v['EntityPrefixe'].'Module\Entity\\'.$v['EntityPrefixe'].'Module')->findAll();
        endforeach;
        return $this->render('ModuleBundle:module:index.html.twig', array(
            'modules' => $modules,
        ));
    }

    /**
     * Creates a new module entity.
     *
     * @Route("/new", name="admin_module_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        
        $form = $this->createForm('ModuleBundle\Form\ModuleType', null,  array('moduleService'=>$this->get('module_service')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datas = $form->getData();
            return $this->redirectToRoute('custom_module_'.strtolower($datas['type']).'_new');
        }

        return $this->render('ModuleBundle:module:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Get module entity by type.
     *
     * @Route("/Ajax/{type}", name="module_ajax_get_by_type")
     * @Method("GET")
     */
    public function getByTypeAction($type)
    {
        $em = $this->getDoctrine()->getManager();
        $serializer = $this->container->get('jms_serializer');
        
        $modules = $em->getRepository('ModuleBundle\CustomModules\\'.ucfirst(strtolower($type)).'Module\Entity\\'.ucfirst(strtolower($type)).'Module')->findAll();
        if ($modules!==null) {
            $datas = $serializer->serialize($modules, "json");
            return new JsonResponse(array("success"=>true,"donnees"=>$datas));
        }

        return new JsonResponse(array("success"=>false,"donnees"=>null));
    }
}
