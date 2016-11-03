<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_52bc067aad13abd8ab7fc56fc79031693de99fb342f65bd2269d537924abe3ab extends Twig_Template
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
        $__internal_e5fe0deaaf06522e288f8dfeca50a8f2b9eb0ee8a93825b0a3af8588dca169a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fe0deaaf06522e288f8dfeca50a8f2b9eb0ee8a93825b0a3af8588dca169a7->enter($__internal_e5fe0deaaf06522e288f8dfeca50a8f2b9eb0ee8a93825b0a3af8588dca169a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e5fe0deaaf06522e288f8dfeca50a8f2b9eb0ee8a93825b0a3af8588dca169a7->leave($__internal_e5fe0deaaf06522e288f8dfeca50a8f2b9eb0ee8a93825b0a3af8588dca169a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
