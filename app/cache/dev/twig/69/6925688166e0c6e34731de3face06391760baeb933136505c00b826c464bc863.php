<?php

/* @Module/module/edit.html.twig */
class __TwigTemplate_021595082f1ea05ba4cb400a8a7a227e4e6331d0753f30fa04d39be951d15c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Module/module/edit.html.twig", 1);
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
        $__internal_529c4b06d12bf75e34c153d8b712fcdf16c32f142df2d73c617d77b014d428c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529c4b06d12bf75e34c153d8b712fcdf16c32f142df2d73c617d77b014d428c5->enter($__internal_529c4b06d12bf75e34c153d8b712fcdf16c32f142df2d73c617d77b014d428c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Module/module/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529c4b06d12bf75e34c153d8b712fcdf16c32f142df2d73c617d77b014d428c5->leave($__internal_529c4b06d12bf75e34c153d8b712fcdf16c32f142df2d73c617d77b014d428c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcb7d112f5559b6623ce156a246842b52c8f18a70fc7019b8187efd0c8c2675c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb7d112f5559b6623ce156a246842b52c8f18a70fc7019b8187efd0c8c2675c->enter($__internal_bcb7d112f5559b6623ce156a246842b52c8f18a70fc7019b8187efd0c8c2675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Module/module/edit.html.twig"));

        // line 4
        echo "    <h1>Module edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bcb7d112f5559b6623ce156a246842b52c8f18a70fc7019b8187efd0c8c2675c->leave($__internal_bcb7d112f5559b6623ce156a246842b52c8f18a70fc7019b8187efd0c8c2675c_prof);

    }

    public function getTemplateName()
    {
        return "@Module/module/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Module edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_module_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Module/module/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle\\Resources\\views\\module\\edit.html.twig");
    }
}
