<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1de6493adda60fbfe7c15d12e6a4a43249ac7d56db1fddfa6fd4a5c1eaa36648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_57bb04c3f9190a35acda9c939d75ab31e781d9d8ff2f3ed6646397439d828dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bb04c3f9190a35acda9c939d75ab31e781d9d8ff2f3ed6646397439d828dd1->enter($__internal_57bb04c3f9190a35acda9c939d75ab31e781d9d8ff2f3ed6646397439d828dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bb04c3f9190a35acda9c939d75ab31e781d9d8ff2f3ed6646397439d828dd1->leave($__internal_57bb04c3f9190a35acda9c939d75ab31e781d9d8ff2f3ed6646397439d828dd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79c5bb4dfcf5fc2bb54ed2eb4791fb3965068882d48761e1038074646263fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79c5bb4dfcf5fc2bb54ed2eb4791fb3965068882d48761e1038074646263fda->enter($__internal_f79c5bb4dfcf5fc2bb54ed2eb4791fb3965068882d48761e1038074646263fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_f79c5bb4dfcf5fc2bb54ed2eb4791fb3965068882d48761e1038074646263fda->leave($__internal_f79c5bb4dfcf5fc2bb54ed2eb4791fb3965068882d48761e1038074646263fda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c3a86ec6ac48e9801aee87ee3c1b4aad89e895dd0d4a148c0533dcd10237d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3a86ec6ac48e9801aee87ee3c1b4aad89e895dd0d4a148c0533dcd10237d69->enter($__internal_6c3a86ec6ac48e9801aee87ee3c1b4aad89e895dd0d4a148c0533dcd10237d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6c3a86ec6ac48e9801aee87ee3c1b4aad89e895dd0d4a148c0533dcd10237d69->leave($__internal_6c3a86ec6ac48e9801aee87ee3c1b4aad89e895dd0d4a148c0533dcd10237d69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
