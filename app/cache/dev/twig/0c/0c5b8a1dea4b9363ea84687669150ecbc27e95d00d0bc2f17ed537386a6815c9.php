<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_08ab78515ad3f43b1bbcd2d4a4e096b2597b43855444f740c40aca7bb0882119 extends Twig_Template
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
        $__internal_9f1b6890941773ae59ad450a7d9ca6689fd4b957d75da20aab2af8c76b526117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1b6890941773ae59ad450a7d9ca6689fd4b957d75da20aab2af8c76b526117->enter($__internal_9f1b6890941773ae59ad450a7d9ca6689fd4b957d75da20aab2af8c76b526117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9f1b6890941773ae59ad450a7d9ca6689fd4b957d75da20aab2af8c76b526117->leave($__internal_9f1b6890941773ae59ad450a7d9ca6689fd4b957d75da20aab2af8c76b526117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}