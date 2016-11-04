<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_69a34704d7a973e0dec8f5e6155809eee526017d8bc130f2d454b137cb2476a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_a0000d072e55978c35c52b6643bd0ddf540883da2044d3c52c19e943820b0c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0000d072e55978c35c52b6643bd0ddf540883da2044d3c52c19e943820b0c07->enter($__internal_a0000d072e55978c35c52b6643bd0ddf540883da2044d3c52c19e943820b0c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0000d072e55978c35c52b6643bd0ddf540883da2044d3c52c19e943820b0c07->leave($__internal_a0000d072e55978c35c52b6643bd0ddf540883da2044d3c52c19e943820b0c07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856c6b50181dec6adc851c84faff113f70ea6b762b9ecd67df3ce351c9c08637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856c6b50181dec6adc851c84faff113f70ea6b762b9ecd67df3ce351c9c08637->enter($__internal_856c6b50181dec6adc851c84faff113f70ea6b762b9ecd67df3ce351c9c08637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_856c6b50181dec6adc851c84faff113f70ea6b762b9ecd67df3ce351c9c08637->leave($__internal_856c6b50181dec6adc851c84faff113f70ea6b762b9ecd67df3ce351c9c08637_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
