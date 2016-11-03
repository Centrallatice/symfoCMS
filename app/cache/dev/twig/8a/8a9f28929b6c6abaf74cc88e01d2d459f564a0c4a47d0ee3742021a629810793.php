<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bbd0da538015363ccb6bea9eb918bfb927fe1457042b96786fb903deed03b13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ffa1e840554ecbebdbc91414b769e5ed88dc9636b8d75534c152e54e98d4b194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa1e840554ecbebdbc91414b769e5ed88dc9636b8d75534c152e54e98d4b194->enter($__internal_ffa1e840554ecbebdbc91414b769e5ed88dc9636b8d75534c152e54e98d4b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa1e840554ecbebdbc91414b769e5ed88dc9636b8d75534c152e54e98d4b194->leave($__internal_ffa1e840554ecbebdbc91414b769e5ed88dc9636b8d75534c152e54e98d4b194_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_548640a68d336cae325041d51082a5b1270b54cdd73ae744b12fac63c6c48f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548640a68d336cae325041d51082a5b1270b54cdd73ae744b12fac63c6c48f95->enter($__internal_548640a68d336cae325041d51082a5b1270b54cdd73ae744b12fac63c6c48f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_548640a68d336cae325041d51082a5b1270b54cdd73ae744b12fac63c6c48f95->leave($__internal_548640a68d336cae325041d51082a5b1270b54cdd73ae744b12fac63c6c48f95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
