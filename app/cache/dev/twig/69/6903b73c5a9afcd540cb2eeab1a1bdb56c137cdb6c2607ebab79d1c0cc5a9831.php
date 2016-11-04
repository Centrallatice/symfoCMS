<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_849d9df5acd415cef35af59fc9c3ffb07062abe1a849a217ce13c0e363644ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d857d134fdf189cfe62b1f766c11024d0ad1ea2635ba7501451b5e8956e539bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857d134fdf189cfe62b1f766c11024d0ad1ea2635ba7501451b5e8956e539bc->enter($__internal_d857d134fdf189cfe62b1f766c11024d0ad1ea2635ba7501451b5e8956e539bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d857d134fdf189cfe62b1f766c11024d0ad1ea2635ba7501451b5e8956e539bc->leave($__internal_d857d134fdf189cfe62b1f766c11024d0ad1ea2635ba7501451b5e8956e539bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ff9d3d6d4a42f86a476c385c8bfbd3dc1bb0d3112dc22de3f49531dd0a4e530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff9d3d6d4a42f86a476c385c8bfbd3dc1bb0d3112dc22de3f49531dd0a4e530->enter($__internal_2ff9d3d6d4a42f86a476c385c8bfbd3dc1bb0d3112dc22de3f49531dd0a4e530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_2ff9d3d6d4a42f86a476c385c8bfbd3dc1bb0d3112dc22de3f49531dd0a4e530->leave($__internal_2ff9d3d6d4a42f86a476c385c8bfbd3dc1bb0d3112dc22de3f49531dd0a4e530_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_565617481fa2f2f629d22470c6d7bca64ae8087ba1f3b52c9bc400744161ea5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565617481fa2f2f629d22470c6d7bca64ae8087ba1f3b52c9bc400744161ea5d->enter($__internal_565617481fa2f2f629d22470c6d7bca64ae8087ba1f3b52c9bc400744161ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_565617481fa2f2f629d22470c6d7bca64ae8087ba1f3b52c9bc400744161ea5d->leave($__internal_565617481fa2f2f629d22470c6d7bca64ae8087ba1f3b52c9bc400744161ea5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27fa66169d3253e706aae5b85e467010347a0d82c545f6df0ce2e4d3309dfd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fa66169d3253e706aae5b85e467010347a0d82c545f6df0ce2e4d3309dfd17->enter($__internal_27fa66169d3253e706aae5b85e467010347a0d82c545f6df0ce2e4d3309dfd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27fa66169d3253e706aae5b85e467010347a0d82c545f6df0ce2e4d3309dfd17->leave($__internal_27fa66169d3253e706aae5b85e467010347a0d82c545f6df0ce2e4d3309dfd17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
