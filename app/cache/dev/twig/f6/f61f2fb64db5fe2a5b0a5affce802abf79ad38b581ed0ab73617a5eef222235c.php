<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6af8eaec032dc57de6bb0b8aa9b5e3de75faaebd7143f447c99932ce90d740b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_51a2bfd75f9fb48bfc9c7f73b0d874d7d064a575d5a956e659373aa2a23d116f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a2bfd75f9fb48bfc9c7f73b0d874d7d064a575d5a956e659373aa2a23d116f->enter($__internal_51a2bfd75f9fb48bfc9c7f73b0d874d7d064a575d5a956e659373aa2a23d116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a2bfd75f9fb48bfc9c7f73b0d874d7d064a575d5a956e659373aa2a23d116f->leave($__internal_51a2bfd75f9fb48bfc9c7f73b0d874d7d064a575d5a956e659373aa2a23d116f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e3ccb193d3da0fb0f2806cd07044852bf5460ce2aa3aa5e72d24ff27862b38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3ccb193d3da0fb0f2806cd07044852bf5460ce2aa3aa5e72d24ff27862b38c->enter($__internal_5e3ccb193d3da0fb0f2806cd07044852bf5460ce2aa3aa5e72d24ff27862b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5e3ccb193d3da0fb0f2806cd07044852bf5460ce2aa3aa5e72d24ff27862b38c->leave($__internal_5e3ccb193d3da0fb0f2806cd07044852bf5460ce2aa3aa5e72d24ff27862b38c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
