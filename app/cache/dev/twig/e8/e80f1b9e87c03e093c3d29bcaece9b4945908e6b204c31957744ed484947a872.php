<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a1d703b0bd4e1271d4a195ed0da7a5560d69c7b881b7b4ea1c7f48a993401484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_2731664bf1f557a3286c4a4ab26a895ed852d7df6a651b1600694afd4eacea09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2731664bf1f557a3286c4a4ab26a895ed852d7df6a651b1600694afd4eacea09->enter($__internal_2731664bf1f557a3286c4a4ab26a895ed852d7df6a651b1600694afd4eacea09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2731664bf1f557a3286c4a4ab26a895ed852d7df6a651b1600694afd4eacea09->leave($__internal_2731664bf1f557a3286c4a4ab26a895ed852d7df6a651b1600694afd4eacea09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20ffe3762cdb6774f93f07693527a5c2ad3cb6f6d720739b2c97ff65d65e7bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ffe3762cdb6774f93f07693527a5c2ad3cb6f6d720739b2c97ff65d65e7bd5->enter($__internal_20ffe3762cdb6774f93f07693527a5c2ad3cb6f6d720739b2c97ff65d65e7bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_20ffe3762cdb6774f93f07693527a5c2ad3cb6f6d720739b2c97ff65d65e7bd5->leave($__internal_20ffe3762cdb6774f93f07693527a5c2ad3cb6f6d720739b2c97ff65d65e7bd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
