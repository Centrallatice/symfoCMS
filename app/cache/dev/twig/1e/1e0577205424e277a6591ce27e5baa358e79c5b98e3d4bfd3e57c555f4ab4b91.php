<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5461ddc7966b20907964f57881c1b8a69f6b506ab9e3cb9805303966287215af extends Twig_Template
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
        $__internal_e31d1df75f918a618284f87c5e384cd9948789c70c28f56f4ad20c4c33d32a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31d1df75f918a618284f87c5e384cd9948789c70c28f56f4ad20c4c33d32a34->enter($__internal_e31d1df75f918a618284f87c5e384cd9948789c70c28f56f4ad20c4c33d32a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e31d1df75f918a618284f87c5e384cd9948789c70c28f56f4ad20c4c33d32a34->leave($__internal_e31d1df75f918a618284f87c5e384cd9948789c70c28f56f4ad20c4c33d32a34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
