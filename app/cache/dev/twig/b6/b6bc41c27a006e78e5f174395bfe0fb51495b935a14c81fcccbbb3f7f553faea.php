<?php

/* @PageViews/page\tabs\seo.html.twig */
class __TwigTemplate_8122e6ede1e11ceffca525b3ce2c842c71d8ab8d2a0e49f4fa9cbc37ac74355c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_471d96627139cb4548f5348834e30cf49f51073945f94aee5f1deb60bfa20483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471d96627139cb4548f5348834e30cf49f51073945f94aee5f1deb60bfa20483->enter($__internal_471d96627139cb4548f5348834e30cf49f51073945f94aee5f1deb60bfa20483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\tabs\\seo.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_471d96627139cb4548f5348834e30cf49f51073945f94aee5f1deb60bfa20483->leave($__internal_471d96627139cb4548f5348834e30cf49f51073945f94aee5f1deb60bfa20483_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page\\tabs\\seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
{{ form_end(form) }}", "@PageViews/page\\tabs\\seo.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\tabs\\seo.html.twig");
    }
}
