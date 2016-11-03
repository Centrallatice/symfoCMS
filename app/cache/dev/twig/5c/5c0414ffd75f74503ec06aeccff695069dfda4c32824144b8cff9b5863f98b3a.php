<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3fda1ca1c1abe7560fcf99696d1aafc0741f610a9799e94501c3c8d45b437506 extends Twig_Template
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
        $__internal_23301e68bfe45ef61fd0fbcf14666d44d9cae2fd5fcc8b30630a9c8ca29bc211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23301e68bfe45ef61fd0fbcf14666d44d9cae2fd5fcc8b30630a9c8ca29bc211->enter($__internal_23301e68bfe45ef61fd0fbcf14666d44d9cae2fd5fcc8b30630a9c8ca29bc211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_23301e68bfe45ef61fd0fbcf14666d44d9cae2fd5fcc8b30630a9c8ca29bc211->leave($__internal_23301e68bfe45ef61fd0fbcf14666d44d9cae2fd5fcc8b30630a9c8ca29bc211_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
