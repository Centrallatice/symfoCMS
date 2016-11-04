<?php

/* ModuleBundle:module:new.html.twig */
class __TwigTemplate_47bc99928a51ced194e9ec0dcb0ae17c4bcafe291044a49382b2e60161fa0e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ModuleBundle:module:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bc3a3bc300240a6933e87dfe4bd041343cf8251001d69387598c7cb75be0be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc3a3bc300240a6933e87dfe4bd041343cf8251001d69387598c7cb75be0be1->enter($__internal_6bc3a3bc300240a6933e87dfe4bd041343cf8251001d69387598c7cb75be0be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleBundle:module:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc3a3bc300240a6933e87dfe4bd041343cf8251001d69387598c7cb75be0be1->leave($__internal_6bc3a3bc300240a6933e87dfe4bd041343cf8251001d69387598c7cb75be0be1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6db3372b8cf64c231832444f857f32ba4c1ef45b20ae56a7073752c5b19d4343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db3372b8cf64c231832444f857f32ba4c1ef45b20ae56a7073752c5b19d4343->enter($__internal_6db3372b8cf64c231832444f857f32ba4c1ef45b20ae56a7073752c5b19d4343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ModuleBundle:module:new.html.twig"));

        // line 4
        echo "    <h1>Module creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6db3372b8cf64c231832444f857f32ba4c1ef45b20ae56a7073752c5b19d4343->leave($__internal_6db3372b8cf64c231832444f857f32ba4c1ef45b20ae56a7073752c5b19d4343_prof);

    }

    public function getTemplateName()
    {
        return "ModuleBundle:module:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Module creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_module_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ModuleBundle:module:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle/Resources/views/module/new.html.twig");
    }
}
