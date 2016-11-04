<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b2384d9c0cd19ed1496d3909443893c7a5de2359c13a824788adb95425d26306 extends Twig_Template
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
        $__internal_17d56a5d265c66fada5c3d9b87a8c2455ea4f1330fcc1da14e2296ace2bf5c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d56a5d265c66fada5c3d9b87a8c2455ea4f1330fcc1da14e2296ace2bf5c6c->enter($__internal_17d56a5d265c66fada5c3d9b87a8c2455ea4f1330fcc1da14e2296ace2bf5c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17d56a5d265c66fada5c3d9b87a8c2455ea4f1330fcc1da14e2296ace2bf5c6c->leave($__internal_17d56a5d265c66fada5c3d9b87a8c2455ea4f1330fcc1da14e2296ace2bf5c6c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5064056f810275600c946320edba1e639116e546b35755912945be8c31642ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064056f810275600c946320edba1e639116e546b35755912945be8c31642ddb->enter($__internal_5064056f810275600c946320edba1e639116e546b35755912945be8c31642ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_5064056f810275600c946320edba1e639116e546b35755912945be8c31642ddb->leave($__internal_5064056f810275600c946320edba1e639116e546b35755912945be8c31642ddb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
