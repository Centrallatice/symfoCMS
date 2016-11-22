<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_313621dfda20dea79aa34336f779887ecfa9d5eba4f4bd528d952c3dc15d6ba5 extends Twig_Template
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
        $__internal_487578ec209cc066fc1a2a83e49195c8a68d1f8b7e8fd48d91ca3ddcdf475f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487578ec209cc066fc1a2a83e49195c8a68d1f8b7e8fd48d91ca3ddcdf475f37->enter($__internal_487578ec209cc066fc1a2a83e49195c8a68d1f8b7e8fd48d91ca3ddcdf475f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487578ec209cc066fc1a2a83e49195c8a68d1f8b7e8fd48d91ca3ddcdf475f37->leave($__internal_487578ec209cc066fc1a2a83e49195c8a68d1f8b7e8fd48d91ca3ddcdf475f37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15941da09e65254796436ceb6226060fa1e7727a4783999f005cc860693a9592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15941da09e65254796436ceb6226060fa1e7727a4783999f005cc860693a9592->enter($__internal_15941da09e65254796436ceb6226060fa1e7727a4783999f005cc860693a9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15941da09e65254796436ceb6226060fa1e7727a4783999f005cc860693a9592->leave($__internal_15941da09e65254796436ceb6226060fa1e7727a4783999f005cc860693a9592_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e51e393cafb533b1a785cdeb33bd04cf04970f3e19ab1ed95c1d0c3d922870b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e51e393cafb533b1a785cdeb33bd04cf04970f3e19ab1ed95c1d0c3d922870b->enter($__internal_2e51e393cafb533b1a785cdeb33bd04cf04970f3e19ab1ed95c1d0c3d922870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e51e393cafb533b1a785cdeb33bd04cf04970f3e19ab1ed95c1d0c3d922870b->leave($__internal_2e51e393cafb533b1a785cdeb33bd04cf04970f3e19ab1ed95c1d0c3d922870b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc75733ba01ed5835263699d460fd6b29f58d4e1a4136acb9c8d9fd4bf3fc1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc75733ba01ed5835263699d460fd6b29f58d4e1a4136acb9c8d9fd4bf3fc1bf->enter($__internal_bc75733ba01ed5835263699d460fd6b29f58d4e1a4136acb9c8d9fd4bf3fc1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc75733ba01ed5835263699d460fd6b29f58d4e1a4136acb9c8d9fd4bf3fc1bf->leave($__internal_bc75733ba01ed5835263699d460fd6b29f58d4e1a4136acb9c8d9fd4bf3fc1bf_prof);

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
