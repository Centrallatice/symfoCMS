<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a37688ad7799458ba0a916b215a3e2aab98e0c5b3dced5064f37f18f04c6b209 extends Twig_Template
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
        $__internal_1da117bcc3974b7ff4ed6a3a7d26fa5466af353e86fcf3968d4d3fd01b9ee6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da117bcc3974b7ff4ed6a3a7d26fa5466af353e86fcf3968d4d3fd01b9ee6bf->enter($__internal_1da117bcc3974b7ff4ed6a3a7d26fa5466af353e86fcf3968d4d3fd01b9ee6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1da117bcc3974b7ff4ed6a3a7d26fa5466af353e86fcf3968d4d3fd01b9ee6bf->leave($__internal_1da117bcc3974b7ff4ed6a3a7d26fa5466af353e86fcf3968d4d3fd01b9ee6bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
