<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_677764612b320c17149a1e85915bfcd72b2b45ff0c3b0acc6dad17c2aaf6a3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_974142bbe4551a46b255e6d3a5d94acfd8294acced724e482deb9d0aff93d5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974142bbe4551a46b255e6d3a5d94acfd8294acced724e482deb9d0aff93d5b9->enter($__internal_974142bbe4551a46b255e6d3a5d94acfd8294acced724e482deb9d0aff93d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974142bbe4551a46b255e6d3a5d94acfd8294acced724e482deb9d0aff93d5b9->leave($__internal_974142bbe4551a46b255e6d3a5d94acfd8294acced724e482deb9d0aff93d5b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e637f1a93e442f4f98363eed4c3ffe0e5ff2d678d497bd421fcad972d3d2403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e637f1a93e442f4f98363eed4c3ffe0e5ff2d678d497bd421fcad972d3d2403->enter($__internal_1e637f1a93e442f4f98363eed4c3ffe0e5ff2d678d497bd421fcad972d3d2403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_1e637f1a93e442f4f98363eed4c3ffe0e5ff2d678d497bd421fcad972d3d2403->leave($__internal_1e637f1a93e442f4f98363eed4c3ffe0e5ff2d678d497bd421fcad972d3d2403_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0a2c126c9fbcc247f1973b724339674daabf4bf55dbecb4907ea052ee95c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0a2c126c9fbcc247f1973b724339674daabf4bf55dbecb4907ea052ee95c55->enter($__internal_6b0a2c126c9fbcc247f1973b724339674daabf4bf55dbecb4907ea052ee95c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_6b0a2c126c9fbcc247f1973b724339674daabf4bf55dbecb4907ea052ee95c55->leave($__internal_6b0a2c126c9fbcc247f1973b724339674daabf4bf55dbecb4907ea052ee95c55_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
