<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_81511f64eaa6fd576e4395744868c36b146323374bbecc2e552140efa12bbcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0d03d6ad531da0008571800c9cffa8975e9031f77ad00cc06847422ac4eef832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d03d6ad531da0008571800c9cffa8975e9031f77ad00cc06847422ac4eef832->enter($__internal_0d03d6ad531da0008571800c9cffa8975e9031f77ad00cc06847422ac4eef832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d03d6ad531da0008571800c9cffa8975e9031f77ad00cc06847422ac4eef832->leave($__internal_0d03d6ad531da0008571800c9cffa8975e9031f77ad00cc06847422ac4eef832_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82464da35fb93ac7dd2ba378371d785109809fe1f1424df5619aa64407cbf5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82464da35fb93ac7dd2ba378371d785109809fe1f1424df5619aa64407cbf5a7->enter($__internal_82464da35fb93ac7dd2ba378371d785109809fe1f1424df5619aa64407cbf5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82464da35fb93ac7dd2ba378371d785109809fe1f1424df5619aa64407cbf5a7->leave($__internal_82464da35fb93ac7dd2ba378371d785109809fe1f1424df5619aa64407cbf5a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f706cb625f1ad8758b970f5ad5f77ef07a271258fce45a1645b5c449d3ed4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f706cb625f1ad8758b970f5ad5f77ef07a271258fce45a1645b5c449d3ed4df->enter($__internal_1f706cb625f1ad8758b970f5ad5f77ef07a271258fce45a1645b5c449d3ed4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f706cb625f1ad8758b970f5ad5f77ef07a271258fce45a1645b5c449d3ed4df->leave($__internal_1f706cb625f1ad8758b970f5ad5f77ef07a271258fce45a1645b5c449d3ed4df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4366c48528507e4d4930930c1480b27aa4746227bdc4256fc1c0f461582525f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4366c48528507e4d4930930c1480b27aa4746227bdc4256fc1c0f461582525f5->enter($__internal_4366c48528507e4d4930930c1480b27aa4746227bdc4256fc1c0f461582525f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4366c48528507e4d4930930c1480b27aa4746227bdc4256fc1c0f461582525f5->leave($__internal_4366c48528507e4d4930930c1480b27aa4746227bdc4256fc1c0f461582525f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
