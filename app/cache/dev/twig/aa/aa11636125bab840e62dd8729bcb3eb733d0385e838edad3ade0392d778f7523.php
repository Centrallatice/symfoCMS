<?php

/* PageBundle:Default:index.html.twig */
class __TwigTemplate_b889ccb37f841fb2720afb95045f69868f2a15152c2c7a677c380fb2e301b1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25de654899875291a55cb8d866348127b3adb49935011df187a3d4d6576bfd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25de654899875291a55cb8d866348127b3adb49935011df187a3d4d6576bfd23->enter($__internal_25de654899875291a55cb8d866348127b3adb49935011df187a3d4d6576bfd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_25de654899875291a55cb8d866348127b3adb49935011df187a3d4d6576bfd23->leave($__internal_25de654899875291a55cb8d866348127b3adb49935011df187a3d4d6576bfd23_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "PageBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/Default/index.html.twig");
    }
}
