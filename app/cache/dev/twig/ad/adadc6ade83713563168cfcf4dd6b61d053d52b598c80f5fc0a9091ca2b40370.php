<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_631b6f45692006ac40b6d3bec547afac1b01d9aefd71c636dfb7a268c95d0637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e9b39dc74b53471c091a5f4cdcf5ed0d2b3c099af392d4bc2bbdf0785645063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9b39dc74b53471c091a5f4cdcf5ed0d2b3c099af392d4bc2bbdf0785645063->enter($__internal_1e9b39dc74b53471c091a5f4cdcf5ed0d2b3c099af392d4bc2bbdf0785645063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9b39dc74b53471c091a5f4cdcf5ed0d2b3c099af392d4bc2bbdf0785645063->leave($__internal_1e9b39dc74b53471c091a5f4cdcf5ed0d2b3c099af392d4bc2bbdf0785645063_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8f309f571e7b47dbadc02e01ecf0147e712fb319cf4043e01452abb9e14e012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f309f571e7b47dbadc02e01ecf0147e712fb319cf4043e01452abb9e14e012->enter($__internal_c8f309f571e7b47dbadc02e01ecf0147e712fb319cf4043e01452abb9e14e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c8f309f571e7b47dbadc02e01ecf0147e712fb319cf4043e01452abb9e14e012->leave($__internal_c8f309f571e7b47dbadc02e01ecf0147e712fb319cf4043e01452abb9e14e012_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
