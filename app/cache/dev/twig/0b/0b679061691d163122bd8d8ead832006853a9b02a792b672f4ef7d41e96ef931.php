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
        $__internal_d3fa426ade83a58879c5e16184a71ee9399f624aef75e1378acdde1e2d439f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fa426ade83a58879c5e16184a71ee9399f624aef75e1378acdde1e2d439f3b->enter($__internal_d3fa426ade83a58879c5e16184a71ee9399f624aef75e1378acdde1e2d439f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3fa426ade83a58879c5e16184a71ee9399f624aef75e1378acdde1e2d439f3b->leave($__internal_d3fa426ade83a58879c5e16184a71ee9399f624aef75e1378acdde1e2d439f3b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5f48232169251239a99710e357ed70ffdeb5028debcaa5f296d1a18b86c10fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f48232169251239a99710e357ed70ffdeb5028debcaa5f296d1a18b86c10fc->enter($__internal_a5f48232169251239a99710e357ed70ffdeb5028debcaa5f296d1a18b86c10fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_a5f48232169251239a99710e357ed70ffdeb5028debcaa5f296d1a18b86c10fc->leave($__internal_a5f48232169251239a99710e357ed70ffdeb5028debcaa5f296d1a18b86c10fc_prof);

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
