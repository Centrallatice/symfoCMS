<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c0e83c292ae93c3ac4e952fb8add6942cb9f87a1ccaa7d56bee3af2100ed046d extends Twig_Template
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
        $__internal_b661fb4f1ea9f3c5b83a6a35673cde1edc7022ae1f2043cd581e143a85bd0320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b661fb4f1ea9f3c5b83a6a35673cde1edc7022ae1f2043cd581e143a85bd0320->enter($__internal_b661fb4f1ea9f3c5b83a6a35673cde1edc7022ae1f2043cd581e143a85bd0320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b661fb4f1ea9f3c5b83a6a35673cde1edc7022ae1f2043cd581e143a85bd0320->leave($__internal_b661fb4f1ea9f3c5b83a6a35673cde1edc7022ae1f2043cd581e143a85bd0320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
