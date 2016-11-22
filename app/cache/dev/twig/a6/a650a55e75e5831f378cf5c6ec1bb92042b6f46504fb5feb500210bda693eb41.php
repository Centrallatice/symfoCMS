<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29462a5fe3a35c11375146a8647c01e1d19b72c58c4070a2fb9d5ac45feb7f92 extends Twig_Template
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
        $__internal_2246312f04d0b93f476222a04dd28a25b7c4bcf170f8c3c796ae20d03f6095f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2246312f04d0b93f476222a04dd28a25b7c4bcf170f8c3c796ae20d03f6095f5->enter($__internal_2246312f04d0b93f476222a04dd28a25b7c4bcf170f8c3c796ae20d03f6095f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2246312f04d0b93f476222a04dd28a25b7c4bcf170f8c3c796ae20d03f6095f5->leave($__internal_2246312f04d0b93f476222a04dd28a25b7c4bcf170f8c3c796ae20d03f6095f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7f8b32f4e8bde72d74507dd1e267a335c6b2f6bd36e83a05a147984ba0586e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f8b32f4e8bde72d74507dd1e267a335c6b2f6bd36e83a05a147984ba0586e4->enter($__internal_c7f8b32f4e8bde72d74507dd1e267a335c6b2f6bd36e83a05a147984ba0586e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7f8b32f4e8bde72d74507dd1e267a335c6b2f6bd36e83a05a147984ba0586e4->leave($__internal_c7f8b32f4e8bde72d74507dd1e267a335c6b2f6bd36e83a05a147984ba0586e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bdea58977a8ae8ae0ef290652fe87104e932e9c3d56f544fb4dc7b12a666613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdea58977a8ae8ae0ef290652fe87104e932e9c3d56f544fb4dc7b12a666613->enter($__internal_9bdea58977a8ae8ae0ef290652fe87104e932e9c3d56f544fb4dc7b12a666613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9bdea58977a8ae8ae0ef290652fe87104e932e9c3d56f544fb4dc7b12a666613->leave($__internal_9bdea58977a8ae8ae0ef290652fe87104e932e9c3d56f544fb4dc7b12a666613_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dd805587d23eb6ba10a6c81793b810153d138039d1f091cffe4b188ddf748a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd805587d23eb6ba10a6c81793b810153d138039d1f091cffe4b188ddf748a3->enter($__internal_6dd805587d23eb6ba10a6c81793b810153d138039d1f091cffe4b188ddf748a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6dd805587d23eb6ba10a6c81793b810153d138039d1f091cffe4b188ddf748a3->leave($__internal_6dd805587d23eb6ba10a6c81793b810153d138039d1f091cffe4b188ddf748a3_prof);

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
