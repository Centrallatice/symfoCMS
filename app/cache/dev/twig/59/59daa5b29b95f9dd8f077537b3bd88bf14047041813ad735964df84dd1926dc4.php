<?php

/* ModuleBundle:module:edit.html.twig */
class __TwigTemplate_c5573d06e518615b2173612f9cfee9c87bb5546b6f9cf44f3b260a046e53f4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ModuleBundle:module:edit.html.twig", 1);
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
        $__internal_a2f84852ca55b6031e630d9efee6e84855537892d05de99d943a315b303bf665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f84852ca55b6031e630d9efee6e84855537892d05de99d943a315b303bf665->enter($__internal_a2f84852ca55b6031e630d9efee6e84855537892d05de99d943a315b303bf665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleBundle:module:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f84852ca55b6031e630d9efee6e84855537892d05de99d943a315b303bf665->leave($__internal_a2f84852ca55b6031e630d9efee6e84855537892d05de99d943a315b303bf665_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8a55d92c05d513ace6f8c7ba6908712b4b35b76bd0a972dbeebe382358f0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8a55d92c05d513ace6f8c7ba6908712b4b35b76bd0a972dbeebe382358f0a8->enter($__internal_3f8a55d92c05d513ace6f8c7ba6908712b4b35b76bd0a972dbeebe382358f0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ModuleBundle:module:edit.html.twig"));

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
        
        $__internal_3f8a55d92c05d513ace6f8c7ba6908712b4b35b76bd0a972dbeebe382358f0a8->leave($__internal_3f8a55d92c05d513ace6f8c7ba6908712b4b35b76bd0a972dbeebe382358f0a8_prof);

    }

    public function getTemplateName()
    {
        return "ModuleBundle:module:edit.html.twig";
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
", "ModuleBundle:module:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle/Resources/views/module/edit.html.twig");
    }
}
