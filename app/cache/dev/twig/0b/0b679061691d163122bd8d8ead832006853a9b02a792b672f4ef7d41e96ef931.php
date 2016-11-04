<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_8c0852f932467426c36ebfcba9c07d9c67d96d3964963323e734ceec79a81cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331b6802a84e5c85b5b50ee4b6eb4703bc97d12bef903a80c0272c5180322f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331b6802a84e5c85b5b50ee4b6eb4703bc97d12bef903a80c0272c5180322f20->enter($__internal_331b6802a84e5c85b5b50ee4b6eb4703bc97d12bef903a80c0272c5180322f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_331b6802a84e5c85b5b50ee4b6eb4703bc97d12bef903a80c0272c5180322f20->leave($__internal_331b6802a84e5c85b5b50ee4b6eb4703bc97d12bef903a80c0272c5180322f20_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7b6a095896f4b081a7bfb5b117d8d6159d7a10a2af3a676bb702072a81cf0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b6a095896f4b081a7bfb5b117d8d6159d7a10a2af3a676bb702072a81cf0c4->enter($__internal_d7b6a095896f4b081a7bfb5b117d8d6159d7a10a2af3a676bb702072a81cf0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_d7b6a095896f4b081a7bfb5b117d8d6159d7a10a2af3a676bb702072a81cf0c4->leave($__internal_d7b6a095896f4b081a7bfb5b117d8d6159d7a10a2af3a676bb702072a81cf0c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
