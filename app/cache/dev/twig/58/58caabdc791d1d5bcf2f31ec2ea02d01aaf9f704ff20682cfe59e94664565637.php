<?php

/* @PageViews/col\new.html.twig */
class __TwigTemplate_a49c75e9a99eabc0bca9aa503af2c41c92623fdcdbc08f9dd190c4033c6be9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/col\\new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b030902714500645840851c61516148d196b101dc08ec286af27375e3c3aabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b030902714500645840851c61516148d196b101dc08ec286af27375e3c3aabf->enter($__internal_2b030902714500645840851c61516148d196b101dc08ec286af27375e3c3aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/col\\new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b030902714500645840851c61516148d196b101dc08ec286af27375e3c3aabf->leave($__internal_2b030902714500645840851c61516148d196b101dc08ec286af27375e3c3aabf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8fd7924ca46868eb06c5b4a2fadd3f3fd8f953ccd4b62f32d552d365e8df284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fd7924ca46868eb06c5b4a2fadd3f3fd8f953ccd4b62f32d552d365e8df284->enter($__internal_d8fd7924ca46868eb06c5b4a2fadd3f3fd8f953ccd4b62f32d552d365e8df284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/col\\new.html.twig"));

        // line 4
        echo "    <h1>Col creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d8fd7924ca46868eb06c5b4a2fadd3f3fd8f953ccd4b62f32d552d365e8df284->leave($__internal_d8fd7924ca46868eb06c5b4a2fadd3f3fd8f953ccd4b62f32d552d365e8df284_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/col\\new.html.twig";
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
        return new Twig_Source("{% extends \"::admin.html.twig\" %}

{% block body %}
    <h1>Col creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('col_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@PageViews/col\\new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\col\\new.html.twig");
    }
}
