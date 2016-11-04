<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_f5eef8ec5750772a3180cac27f0e797966aa923e6f655d5ae64728e285be4e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_db3881a51207da5a3ab06ed3c6c996b124cd0de681a3e3ff94f88a42a949f8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3881a51207da5a3ab06ed3c6c996b124cd0de681a3e3ff94f88a42a949f8f0->enter($__internal_db3881a51207da5a3ab06ed3c6c996b124cd0de681a3e3ff94f88a42a949f8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db3881a51207da5a3ab06ed3c6c996b124cd0de681a3e3ff94f88a42a949f8f0->leave($__internal_db3881a51207da5a3ab06ed3c6c996b124cd0de681a3e3ff94f88a42a949f8f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a0237d9f26013cdafd7c55d4c2c0cb6437d3d09c00041e021d485fa9fa56c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0237d9f26013cdafd7c55d4c2c0cb6437d3d09c00041e021d485fa9fa56c59->enter($__internal_3a0237d9f26013cdafd7c55d4c2c0cb6437d3d09c00041e021d485fa9fa56c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_3a0237d9f26013cdafd7c55d4c2c0cb6437d3d09c00041e021d485fa9fa56c59->leave($__internal_3a0237d9f26013cdafd7c55d4c2c0cb6437d3d09c00041e021d485fa9fa56c59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
