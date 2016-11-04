<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_7ecc081247cd9ecfba709495d00ff0c4889e6904a2e3d38566855dccc52e3dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b6c3a57c2917014cdf51df444e04f5cb5300204c51f58d9629f049e98687d175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c3a57c2917014cdf51df444e04f5cb5300204c51f58d9629f049e98687d175->enter($__internal_b6c3a57c2917014cdf51df444e04f5cb5300204c51f58d9629f049e98687d175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c3a57c2917014cdf51df444e04f5cb5300204c51f58d9629f049e98687d175->leave($__internal_b6c3a57c2917014cdf51df444e04f5cb5300204c51f58d9629f049e98687d175_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd84b38e03b013725a9f9e2aec284132909e02a276d79c037c6ac873732e20b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd84b38e03b013725a9f9e2aec284132909e02a276d79c037c6ac873732e20b4->enter($__internal_cd84b38e03b013725a9f9e2aec284132909e02a276d79c037c6ac873732e20b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cd84b38e03b013725a9f9e2aec284132909e02a276d79c037c6ac873732e20b4->leave($__internal_cd84b38e03b013725a9f9e2aec284132909e02a276d79c037c6ac873732e20b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
