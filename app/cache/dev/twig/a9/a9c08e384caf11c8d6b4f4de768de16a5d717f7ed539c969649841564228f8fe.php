<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e562bd55f8d99cea309431916ba572a699f7b81997fb9954a7a51b81f0bd8ae extends Twig_Template
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
        $__internal_c0279e7c47f7bcfe3f36091198b5e596c0e033a1096aca991a9e66e8e0abcd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0279e7c47f7bcfe3f36091198b5e596c0e033a1096aca991a9e66e8e0abcd13->enter($__internal_c0279e7c47f7bcfe3f36091198b5e596c0e033a1096aca991a9e66e8e0abcd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c0279e7c47f7bcfe3f36091198b5e596c0e033a1096aca991a9e66e8e0abcd13->leave($__internal_c0279e7c47f7bcfe3f36091198b5e596c0e033a1096aca991a9e66e8e0abcd13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}