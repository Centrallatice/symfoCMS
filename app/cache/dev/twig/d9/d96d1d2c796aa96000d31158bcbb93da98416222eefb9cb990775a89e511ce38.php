<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e941dd382edecf918297e21f645b8c957b3b1f9f3bdb134be7f5de666c3278c8 extends Twig_Template
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
        $__internal_ee583a2dcbc2e02a4c196f4e7fad1a4249d66a5e3f5550fa2fbf07d8e8449687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee583a2dcbc2e02a4c196f4e7fad1a4249d66a5e3f5550fa2fbf07d8e8449687->enter($__internal_ee583a2dcbc2e02a4c196f4e7fad1a4249d66a5e3f5550fa2fbf07d8e8449687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ee583a2dcbc2e02a4c196f4e7fad1a4249d66a5e3f5550fa2fbf07d8e8449687->leave($__internal_ee583a2dcbc2e02a4c196f4e7fad1a4249d66a5e3f5550fa2fbf07d8e8449687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}