<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_88d2b4852620ca2d9eeda2aad7af7601db10825af3d39c8cdfb5411ea6e6b8ac extends Twig_Template
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
        $__internal_70cd02871e6b156ade07aa5c3dbacafe20839f5d7e493a0a3ad3ca1a35c52a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cd02871e6b156ade07aa5c3dbacafe20839f5d7e493a0a3ad3ca1a35c52a57->enter($__internal_70cd02871e6b156ade07aa5c3dbacafe20839f5d7e493a0a3ad3ca1a35c52a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_70cd02871e6b156ade07aa5c3dbacafe20839f5d7e493a0a3ad3ca1a35c52a57->leave($__internal_70cd02871e6b156ade07aa5c3dbacafe20839f5d7e493a0a3ad3ca1a35c52a57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
