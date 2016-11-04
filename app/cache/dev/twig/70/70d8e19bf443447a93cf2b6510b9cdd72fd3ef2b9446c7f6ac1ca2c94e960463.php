<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_97e9d7aa4a2803d72bf9302ca956478ad611032031de2f812fffb097774b11ca extends Twig_Template
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
        $__internal_6ed1e161d08c202685bd0ed8481f7c0fe5ef00ba02b9ecb2e741ef1b4453df26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed1e161d08c202685bd0ed8481f7c0fe5ef00ba02b9ecb2e741ef1b4453df26->enter($__internal_6ed1e161d08c202685bd0ed8481f7c0fe5ef00ba02b9ecb2e741ef1b4453df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6ed1e161d08c202685bd0ed8481f7c0fe5ef00ba02b9ecb2e741ef1b4453df26->leave($__internal_6ed1e161d08c202685bd0ed8481f7c0fe5ef00ba02b9ecb2e741ef1b4453df26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
