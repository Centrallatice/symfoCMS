<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fa68d6e5601074a93c81c841e8616695c004b334beed725f05098358601dcb39 extends Twig_Template
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
        $__internal_bafa81226f83d6e13c56c9a9739d1fe9bebf7ed7d50fef472a3af3a3df60a1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafa81226f83d6e13c56c9a9739d1fe9bebf7ed7d50fef472a3af3a3df60a1c1->enter($__internal_bafa81226f83d6e13c56c9a9739d1fe9bebf7ed7d50fef472a3af3a3df60a1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bafa81226f83d6e13c56c9a9739d1fe9bebf7ed7d50fef472a3af3a3df60a1c1->leave($__internal_bafa81226f83d6e13c56c9a9739d1fe9bebf7ed7d50fef472a3af3a3df60a1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
