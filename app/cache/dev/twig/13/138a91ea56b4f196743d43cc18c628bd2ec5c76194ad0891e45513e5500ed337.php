<?php

/* AdminBundle:Home:mainStat.html.twig */
class __TwigTemplate_8fdf75cb5b08565331b3e53cda1f0e767f3eeffe509a6e67a19f54994a99ae12 extends Twig_Template
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
        $__internal_9b21cf9fee0534bfdecb97ffa21481fbcbfe2be19a84e9470618967bd39d350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b21cf9fee0534bfdecb97ffa21481fbcbfe2be19a84e9470618967bd39d350a->enter($__internal_9b21cf9fee0534bfdecb97ffa21481fbcbfe2be19a84e9470618967bd39d350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Home:mainStat.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart
            </div>
            <div class=\"card-block\">
                <div id=\"morris-area-chart\"></div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_9b21cf9fee0534bfdecb97ffa21481fbcbfe2be19a84e9470618967bd39d350a->leave($__internal_9b21cf9fee0534bfdecb97ffa21481fbcbfe2be19a84e9470618967bd39d350a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Home:mainStat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart
            </div>
            <div class=\"card-block\">
                <div id=\"morris-area-chart\"></div>
            </div>
        </div>
    </div>
</div>", "AdminBundle:Home:mainStat.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\AdminBundle/Resources/views/Home/mainStat.html.twig");
    }
}
