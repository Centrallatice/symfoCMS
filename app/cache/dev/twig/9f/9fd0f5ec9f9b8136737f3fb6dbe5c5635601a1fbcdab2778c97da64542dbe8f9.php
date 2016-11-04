<?php

/* @Module/module/new.html.twig */
class __TwigTemplate_06a1b908f691769439ff6672596f2692af7a3b531393fe6954d9979dbe765b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Module/module/new.html.twig", 1);
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
        $__internal_bf8aac216367ee1730254617b9e92eee90ecb3a393b830999c7befbe29f3c082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8aac216367ee1730254617b9e92eee90ecb3a393b830999c7befbe29f3c082->enter($__internal_bf8aac216367ee1730254617b9e92eee90ecb3a393b830999c7befbe29f3c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Module/module/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8aac216367ee1730254617b9e92eee90ecb3a393b830999c7befbe29f3c082->leave($__internal_bf8aac216367ee1730254617b9e92eee90ecb3a393b830999c7befbe29f3c082_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc97fbd35638020b81578c33db6d1622a4432c69d69c5910f0a505d6e66251b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc97fbd35638020b81578c33db6d1622a4432c69d69c5910f0a505d6e66251b->enter($__internal_cbc97fbd35638020b81578c33db6d1622a4432c69d69c5910f0a505d6e66251b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Module/module/new.html.twig"));

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
        
        $__internal_cbc97fbd35638020b81578c33db6d1622a4432c69d69c5910f0a505d6e66251b->leave($__internal_cbc97fbd35638020b81578c33db6d1622a4432c69d69c5910f0a505d6e66251b_prof);

    }

    public function getTemplateName()
    {
        return "@Module/module/new.html.twig";
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
", "@Module/module/new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle\\Resources\\views\\module\\new.html.twig");
    }
}
