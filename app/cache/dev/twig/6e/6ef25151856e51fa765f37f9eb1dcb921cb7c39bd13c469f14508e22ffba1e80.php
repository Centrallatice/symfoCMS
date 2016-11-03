<?php

/* PageBundle:col:new.html.twig */
class __TwigTemplate_92ed5d4b66092c223f97c8460408ec14dc807432e1b298ac8715d5c536d4a870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:col:new.html.twig", 1);
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
        $__internal_0e6d34e4ce340a49c579340f36a6510aff318ab89dcdbd4725211849a18dca7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6d34e4ce340a49c579340f36a6510aff318ab89dcdbd4725211849a18dca7c->enter($__internal_0e6d34e4ce340a49c579340f36a6510aff318ab89dcdbd4725211849a18dca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:col:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6d34e4ce340a49c579340f36a6510aff318ab89dcdbd4725211849a18dca7c->leave($__internal_0e6d34e4ce340a49c579340f36a6510aff318ab89dcdbd4725211849a18dca7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b8223b5a1604c28cdf1b14a56b2e919433e3d95f82156841109b229bce5a974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8223b5a1604c28cdf1b14a56b2e919433e3d95f82156841109b229bce5a974->enter($__internal_6b8223b5a1604c28cdf1b14a56b2e919433e3d95f82156841109b229bce5a974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:col:new.html.twig"));

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
        
        $__internal_6b8223b5a1604c28cdf1b14a56b2e919433e3d95f82156841109b229bce5a974->leave($__internal_6b8223b5a1604c28cdf1b14a56b2e919433e3d95f82156841109b229bce5a974_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:col:new.html.twig";
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
", "PageBundle:col:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/col/new.html.twig");
    }
}
