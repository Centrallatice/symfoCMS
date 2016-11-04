<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1007ed93eee30780151b9ea12b54f768c395f8a08a3086cb2a5b5a58a18fd7fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68777d867f47ed24e6fd0a72a4835312d5c31cdbef3bdba46800caec22b20115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68777d867f47ed24e6fd0a72a4835312d5c31cdbef3bdba46800caec22b20115->enter($__internal_68777d867f47ed24e6fd0a72a4835312d5c31cdbef3bdba46800caec22b20115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68777d867f47ed24e6fd0a72a4835312d5c31cdbef3bdba46800caec22b20115->leave($__internal_68777d867f47ed24e6fd0a72a4835312d5c31cdbef3bdba46800caec22b20115_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_557687ee8ef8c6aaf201c419b6edcd0b29ac5ed3385758aacaef450e398c41a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557687ee8ef8c6aaf201c419b6edcd0b29ac5ed3385758aacaef450e398c41a0->enter($__internal_557687ee8ef8c6aaf201c419b6edcd0b29ac5ed3385758aacaef450e398c41a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_557687ee8ef8c6aaf201c419b6edcd0b29ac5ed3385758aacaef450e398c41a0->leave($__internal_557687ee8ef8c6aaf201c419b6edcd0b29ac5ed3385758aacaef450e398c41a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5debc6be899f9d191d14a1bc1c706f3ecc130c1d7416931af3c54d3257dc441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5debc6be899f9d191d14a1bc1c706f3ecc130c1d7416931af3c54d3257dc441->enter($__internal_b5debc6be899f9d191d14a1bc1c706f3ecc130c1d7416931af3c54d3257dc441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5debc6be899f9d191d14a1bc1c706f3ecc130c1d7416931af3c54d3257dc441->leave($__internal_b5debc6be899f9d191d14a1bc1c706f3ecc130c1d7416931af3c54d3257dc441_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d35797bef7195b9acf7102aad49abac678a37e532be23bba8a5abb2b348d7c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35797bef7195b9acf7102aad49abac678a37e532be23bba8a5abb2b348d7c04->enter($__internal_d35797bef7195b9acf7102aad49abac678a37e532be23bba8a5abb2b348d7c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d35797bef7195b9acf7102aad49abac678a37e532be23bba8a5abb2b348d7c04->leave($__internal_d35797bef7195b9acf7102aad49abac678a37e532be23bba8a5abb2b348d7c04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
