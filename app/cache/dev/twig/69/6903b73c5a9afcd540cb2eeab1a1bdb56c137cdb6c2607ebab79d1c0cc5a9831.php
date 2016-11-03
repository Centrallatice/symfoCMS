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
        $__internal_ff856f99bbc321ce53cc4ffae3b1439c6dfd9029c473c34a66fb2b79114f0a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff856f99bbc321ce53cc4ffae3b1439c6dfd9029c473c34a66fb2b79114f0a8c->enter($__internal_ff856f99bbc321ce53cc4ffae3b1439c6dfd9029c473c34a66fb2b79114f0a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff856f99bbc321ce53cc4ffae3b1439c6dfd9029c473c34a66fb2b79114f0a8c->leave($__internal_ff856f99bbc321ce53cc4ffae3b1439c6dfd9029c473c34a66fb2b79114f0a8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b32ab23754f733bdccbf9d3d804c3b7cf863e0e50cd9552a99d25b09bbffa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b32ab23754f733bdccbf9d3d804c3b7cf863e0e50cd9552a99d25b09bbffa1e->enter($__internal_8b32ab23754f733bdccbf9d3d804c3b7cf863e0e50cd9552a99d25b09bbffa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_8b32ab23754f733bdccbf9d3d804c3b7cf863e0e50cd9552a99d25b09bbffa1e->leave($__internal_8b32ab23754f733bdccbf9d3d804c3b7cf863e0e50cd9552a99d25b09bbffa1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7760b4f1f864dde57104a87b8a100b29ef39cc637c4c21c3fff6343faf512ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7760b4f1f864dde57104a87b8a100b29ef39cc637c4c21c3fff6343faf512ff1->enter($__internal_7760b4f1f864dde57104a87b8a100b29ef39cc637c4c21c3fff6343faf512ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7760b4f1f864dde57104a87b8a100b29ef39cc637c4c21c3fff6343faf512ff1->leave($__internal_7760b4f1f864dde57104a87b8a100b29ef39cc637c4c21c3fff6343faf512ff1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2db113e7518d2936bacced264db096f11aee1382c66fab4394c884af830bc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2db113e7518d2936bacced264db096f11aee1382c66fab4394c884af830bc64->enter($__internal_d2db113e7518d2936bacced264db096f11aee1382c66fab4394c884af830bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2db113e7518d2936bacced264db096f11aee1382c66fab4394c884af830bc64->leave($__internal_d2db113e7518d2936bacced264db096f11aee1382c66fab4394c884af830bc64_prof);

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
