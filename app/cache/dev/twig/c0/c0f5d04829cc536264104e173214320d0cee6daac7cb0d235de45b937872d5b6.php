<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70282a3fc9dce33f7a0899e6b99e0cd10b85671d9ee57782289042ed1f7b30de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_847e77333420e6d7384625ca3c7a30acf52d5f4daa00fae0e71ed5e990c840d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847e77333420e6d7384625ca3c7a30acf52d5f4daa00fae0e71ed5e990c840d8->enter($__internal_847e77333420e6d7384625ca3c7a30acf52d5f4daa00fae0e71ed5e990c840d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847e77333420e6d7384625ca3c7a30acf52d5f4daa00fae0e71ed5e990c840d8->leave($__internal_847e77333420e6d7384625ca3c7a30acf52d5f4daa00fae0e71ed5e990c840d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c65d7329c18f787df0bcef9c2ae7f9fda65dbea52a4cf6aeb30bbdc2f5afdcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65d7329c18f787df0bcef9c2ae7f9fda65dbea52a4cf6aeb30bbdc2f5afdcd9->enter($__internal_c65d7329c18f787df0bcef9c2ae7f9fda65dbea52a4cf6aeb30bbdc2f5afdcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c65d7329c18f787df0bcef9c2ae7f9fda65dbea52a4cf6aeb30bbdc2f5afdcd9->leave($__internal_c65d7329c18f787df0bcef9c2ae7f9fda65dbea52a4cf6aeb30bbdc2f5afdcd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61051b3552c5c21d1e059e38c694cf66b6c7d3c90d4e0936e083d3f2e82ccadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61051b3552c5c21d1e059e38c694cf66b6c7d3c90d4e0936e083d3f2e82ccadf->enter($__internal_61051b3552c5c21d1e059e38c694cf66b6c7d3c90d4e0936e083d3f2e82ccadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61051b3552c5c21d1e059e38c694cf66b6c7d3c90d4e0936e083d3f2e82ccadf->leave($__internal_61051b3552c5c21d1e059e38c694cf66b6c7d3c90d4e0936e083d3f2e82ccadf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e686d86ea6a3c0bb34819d8600201559004d8926fd2d83b8d2ca4ba2b7636ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e686d86ea6a3c0bb34819d8600201559004d8926fd2d83b8d2ca4ba2b7636ed7->enter($__internal_e686d86ea6a3c0bb34819d8600201559004d8926fd2d83b8d2ca4ba2b7636ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e686d86ea6a3c0bb34819d8600201559004d8926fd2d83b8d2ca4ba2b7636ed7->leave($__internal_e686d86ea6a3c0bb34819d8600201559004d8926fd2d83b8d2ca4ba2b7636ed7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
