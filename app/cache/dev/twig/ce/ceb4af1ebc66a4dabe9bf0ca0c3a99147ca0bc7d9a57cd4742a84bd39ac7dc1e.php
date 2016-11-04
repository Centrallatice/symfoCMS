<?php

/* @AdminViews/Home\mainStat.html.twig */
class __TwigTemplate_ea961621cdef18c94bd9e3c3441ab4f27d36fb36695e41e27f5fc8597f5bdb15 extends Twig_Template
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
        $__internal_3b940fb820cd1d3fa1992aa9f147db76681245d458c0c9409907f619393055dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b940fb820cd1d3fa1992aa9f147db76681245d458c0c9409907f619393055dc->enter($__internal_3b940fb820cd1d3fa1992aa9f147db76681245d458c0c9409907f619393055dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminViews/Home\\mainStat.html.twig"));

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
        
        $__internal_3b940fb820cd1d3fa1992aa9f147db76681245d458c0c9409907f619393055dc->leave($__internal_3b940fb820cd1d3fa1992aa9f147db76681245d458c0c9409907f619393055dc_prof);

    }

    public function getTemplateName()
    {
        return "@AdminViews/Home\\mainStat.html.twig";
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
</div>", "@AdminViews/Home\\mainStat.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\AdminBundle\\Resources\\views\\Home\\mainStat.html.twig");
    }
}
