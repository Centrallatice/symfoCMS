<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b69dbadba4f8f607ab848d45233017db6660b0d153c9783130695fb63346bd18 extends Twig_Template
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
        $__internal_6ba8c90340ce66f11dbcb1e1ea9ba28bf8e016010c558c0bfdc1951b3ed4c3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba8c90340ce66f11dbcb1e1ea9ba28bf8e016010c558c0bfdc1951b3ed4c3fa->enter($__internal_6ba8c90340ce66f11dbcb1e1ea9ba28bf8e016010c558c0bfdc1951b3ed4c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6ba8c90340ce66f11dbcb1e1ea9ba28bf8e016010c558c0bfdc1951b3ed4c3fa->leave($__internal_6ba8c90340ce66f11dbcb1e1ea9ba28bf8e016010c558c0bfdc1951b3ed4c3fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
