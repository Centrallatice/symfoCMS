<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_136f56abe1dcf233a840a1bb3163c1fdef105569490ed73a3c4164cf60b11b9c extends Twig_Template
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
        $__internal_032ab0e038ca6e041a7557f8d8dc070baa4dfc2e22c75dbec0e4a51529edee5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032ab0e038ca6e041a7557f8d8dc070baa4dfc2e22c75dbec0e4a51529edee5d->enter($__internal_032ab0e038ca6e041a7557f8d8dc070baa4dfc2e22c75dbec0e4a51529edee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_032ab0e038ca6e041a7557f8d8dc070baa4dfc2e22c75dbec0e4a51529edee5d->leave($__internal_032ab0e038ca6e041a7557f8d8dc070baa4dfc2e22c75dbec0e4a51529edee5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
