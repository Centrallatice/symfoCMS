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
        $__internal_ae9019ce0fe4906cfb62b9cffe0e8f90bb0d28e8127d0e1c5b29283086ced50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9019ce0fe4906cfb62b9cffe0e8f90bb0d28e8127d0e1c5b29283086ced50b->enter($__internal_ae9019ce0fe4906cfb62b9cffe0e8f90bb0d28e8127d0e1c5b29283086ced50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9019ce0fe4906cfb62b9cffe0e8f90bb0d28e8127d0e1c5b29283086ced50b->leave($__internal_ae9019ce0fe4906cfb62b9cffe0e8f90bb0d28e8127d0e1c5b29283086ced50b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_530291681064f6d4e7396e746f54c2197a6c5d40c9d8303874a84da7383d235a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530291681064f6d4e7396e746f54c2197a6c5d40c9d8303874a84da7383d235a->enter($__internal_530291681064f6d4e7396e746f54c2197a6c5d40c9d8303874a84da7383d235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_530291681064f6d4e7396e746f54c2197a6c5d40c9d8303874a84da7383d235a->leave($__internal_530291681064f6d4e7396e746f54c2197a6c5d40c9d8303874a84da7383d235a_prof);

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
