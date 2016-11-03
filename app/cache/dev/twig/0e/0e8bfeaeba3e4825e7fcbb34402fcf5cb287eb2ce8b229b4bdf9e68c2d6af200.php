<?php

/* PageBundle:page/tabs:seo.html.twig */
class __TwigTemplate_bc83f3fbedace5176b1338e5a308bd9624feaf438d713fbdaa170e9d300edae4 extends Twig_Template
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
        $__internal_d9e4b42412f2f956055d5230b30c202aa40181f6148c8fe25937a7ed7147f29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e4b42412f2f956055d5230b30c202aa40181f6148c8fe25937a7ed7147f29a->enter($__internal_d9e4b42412f2f956055d5230b30c202aa40181f6148c8fe25937a7ed7147f29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page/tabs:seo.html.twig"));

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
        
        $__internal_d9e4b42412f2f956055d5230b30c202aa40181f6148c8fe25937a7ed7147f29a->leave($__internal_d9e4b42412f2f956055d5230b30c202aa40181f6148c8fe25937a7ed7147f29a_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page/tabs:seo.html.twig";
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
{{ form_end(form) }}", "PageBundle:page/tabs:seo.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/tabs/seo.html.twig");
    }
}
