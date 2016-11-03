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
        $__internal_e940b3968c4bdc4744571b4e2fe00b24a3a5a5a1b4c4e15455442c0254413f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e940b3968c4bdc4744571b4e2fe00b24a3a5a5a1b4c4e15455442c0254413f9c->enter($__internal_e940b3968c4bdc4744571b4e2fe00b24a3a5a5a1b4c4e15455442c0254413f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e940b3968c4bdc4744571b4e2fe00b24a3a5a5a1b4c4e15455442c0254413f9c->leave($__internal_e940b3968c4bdc4744571b4e2fe00b24a3a5a5a1b4c4e15455442c0254413f9c_prof);

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
