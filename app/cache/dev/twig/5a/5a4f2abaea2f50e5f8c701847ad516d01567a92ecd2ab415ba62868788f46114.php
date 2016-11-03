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
        $__internal_d382180714f8e872c9dfddd6a04eef7efe34380fa96886320510711c50a60ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d382180714f8e872c9dfddd6a04eef7efe34380fa96886320510711c50a60ffd->enter($__internal_d382180714f8e872c9dfddd6a04eef7efe34380fa96886320510711c50a60ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d382180714f8e872c9dfddd6a04eef7efe34380fa96886320510711c50a60ffd->leave($__internal_d382180714f8e872c9dfddd6a04eef7efe34380fa96886320510711c50a60ffd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8dc799389d64099c9dd21b1ee12755eb3929ccefd5f65933acad3dcfe8e3215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dc799389d64099c9dd21b1ee12755eb3929ccefd5f65933acad3dcfe8e3215->enter($__internal_c8dc799389d64099c9dd21b1ee12755eb3929ccefd5f65933acad3dcfe8e3215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_c8dc799389d64099c9dd21b1ee12755eb3929ccefd5f65933acad3dcfe8e3215->leave($__internal_c8dc799389d64099c9dd21b1ee12755eb3929ccefd5f65933acad3dcfe8e3215_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7064fb1ef59c724a6baed39b2393b22b738ddbff9fa2b331eede627598d4f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7064fb1ef59c724a6baed39b2393b22b738ddbff9fa2b331eede627598d4f34->enter($__internal_c7064fb1ef59c724a6baed39b2393b22b738ddbff9fa2b331eede627598d4f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7064fb1ef59c724a6baed39b2393b22b738ddbff9fa2b331eede627598d4f34->leave($__internal_c7064fb1ef59c724a6baed39b2393b22b738ddbff9fa2b331eede627598d4f34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cca3a99c1379ce8a47d2f3436644694a9a831c36b812345f380640e35677a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cca3a99c1379ce8a47d2f3436644694a9a831c36b812345f380640e35677a7c->enter($__internal_3cca3a99c1379ce8a47d2f3436644694a9a831c36b812345f380640e35677a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cca3a99c1379ce8a47d2f3436644694a9a831c36b812345f380640e35677a7c->leave($__internal_3cca3a99c1379ce8a47d2f3436644694a9a831c36b812345f380640e35677a7c_prof);

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
