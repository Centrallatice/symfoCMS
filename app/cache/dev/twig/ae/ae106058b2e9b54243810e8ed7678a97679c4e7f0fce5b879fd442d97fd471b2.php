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
        $__internal_185bd6eb1c5ca3c8927935ada9201e59079f339e25357d8d823aa87ae0865058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185bd6eb1c5ca3c8927935ada9201e59079f339e25357d8d823aa87ae0865058->enter($__internal_185bd6eb1c5ca3c8927935ada9201e59079f339e25357d8d823aa87ae0865058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185bd6eb1c5ca3c8927935ada9201e59079f339e25357d8d823aa87ae0865058->leave($__internal_185bd6eb1c5ca3c8927935ada9201e59079f339e25357d8d823aa87ae0865058_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3b64d7c921fd8aa8e8758ea52ad31aa7f78b83ff455353b16e33ee6e594524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3b64d7c921fd8aa8e8758ea52ad31aa7f78b83ff455353b16e33ee6e594524->enter($__internal_2f3b64d7c921fd8aa8e8758ea52ad31aa7f78b83ff455353b16e33ee6e594524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_2f3b64d7c921fd8aa8e8758ea52ad31aa7f78b83ff455353b16e33ee6e594524->leave($__internal_2f3b64d7c921fd8aa8e8758ea52ad31aa7f78b83ff455353b16e33ee6e594524_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_efeae5e50b75d54612142694e6fb261d0edd00d2c5d7a0582b8830afdaa4cb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efeae5e50b75d54612142694e6fb261d0edd00d2c5d7a0582b8830afdaa4cb7a->enter($__internal_efeae5e50b75d54612142694e6fb261d0edd00d2c5d7a0582b8830afdaa4cb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_efeae5e50b75d54612142694e6fb261d0edd00d2c5d7a0582b8830afdaa4cb7a->leave($__internal_efeae5e50b75d54612142694e6fb261d0edd00d2c5d7a0582b8830afdaa4cb7a_prof);

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
