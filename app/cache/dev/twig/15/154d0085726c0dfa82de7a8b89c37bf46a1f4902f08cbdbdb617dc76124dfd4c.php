<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_add87ee67a6f7c542a77496740ff43faaa14426c6257d842b955ccceefedd883 extends Twig_Template
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
        $__internal_1e30fb1552272b0ac67b3c01787d699e1ffbd3250fade670c420f4c179a2a822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e30fb1552272b0ac67b3c01787d699e1ffbd3250fade670c420f4c179a2a822->enter($__internal_1e30fb1552272b0ac67b3c01787d699e1ffbd3250fade670c420f4c179a2a822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1e30fb1552272b0ac67b3c01787d699e1ffbd3250fade670c420f4c179a2a822->leave($__internal_1e30fb1552272b0ac67b3c01787d699e1ffbd3250fade670c420f4c179a2a822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
