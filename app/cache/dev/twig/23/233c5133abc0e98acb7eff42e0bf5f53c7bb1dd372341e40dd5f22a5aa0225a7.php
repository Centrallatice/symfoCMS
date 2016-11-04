<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_badf537d9d46e78dc20667da01a6068b61f5c95855d576ddcad53eeec7d28c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_74251a47e9d5d334fbbb1cabf822f9cc83a93e7908d3d1653fb8e578d9414ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74251a47e9d5d334fbbb1cabf822f9cc83a93e7908d3d1653fb8e578d9414ff0->enter($__internal_74251a47e9d5d334fbbb1cabf822f9cc83a93e7908d3d1653fb8e578d9414ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74251a47e9d5d334fbbb1cabf822f9cc83a93e7908d3d1653fb8e578d9414ff0->leave($__internal_74251a47e9d5d334fbbb1cabf822f9cc83a93e7908d3d1653fb8e578d9414ff0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8b94822e3d11d146088c914c93360d15e0be1e6429fa1d417cc27bcdea82cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b94822e3d11d146088c914c93360d15e0be1e6429fa1d417cc27bcdea82cfd->enter($__internal_d8b94822e3d11d146088c914c93360d15e0be1e6429fa1d417cc27bcdea82cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d8b94822e3d11d146088c914c93360d15e0be1e6429fa1d417cc27bcdea82cfd->leave($__internal_d8b94822e3d11d146088c914c93360d15e0be1e6429fa1d417cc27bcdea82cfd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
