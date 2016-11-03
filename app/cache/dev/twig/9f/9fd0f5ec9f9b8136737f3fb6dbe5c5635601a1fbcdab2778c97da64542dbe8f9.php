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
        $__internal_5a64cc67261fdf0f382d0542c12137fb0c689fd5d401a0f4d6ac0fb1aa776d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a64cc67261fdf0f382d0542c12137fb0c689fd5d401a0f4d6ac0fb1aa776d2d->enter($__internal_5a64cc67261fdf0f382d0542c12137fb0c689fd5d401a0f4d6ac0fb1aa776d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Module/module/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a64cc67261fdf0f382d0542c12137fb0c689fd5d401a0f4d6ac0fb1aa776d2d->leave($__internal_5a64cc67261fdf0f382d0542c12137fb0c689fd5d401a0f4d6ac0fb1aa776d2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_618327e490270e7792e8d594d8b58cbd894a618c7c01144c683a7535251b6662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618327e490270e7792e8d594d8b58cbd894a618c7c01144c683a7535251b6662->enter($__internal_618327e490270e7792e8d594d8b58cbd894a618c7c01144c683a7535251b6662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Module/module/new.html.twig"));

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
        
        $__internal_618327e490270e7792e8d594d8b58cbd894a618c7c01144c683a7535251b6662->leave($__internal_618327e490270e7792e8d594d8b58cbd894a618c7c01144c683a7535251b6662_prof);

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
