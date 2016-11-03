<?php

/* @Article/Default/index.html.twig */
class __TwigTemplate_e0a35f5767d42359fa60913eee051ccf0bb8ead05c332f29e77849d2d3833047 extends Twig_Template
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
        $__internal_808660213a6caa3344f1b2b3650a5ad8e80b0e3789e447a2b23be4bb199552af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808660213a6caa3344f1b2b3650a5ad8e80b0e3789e447a2b23be4bb199552af->enter($__internal_808660213a6caa3344f1b2b3650a5ad8e80b0e3789e447a2b23be4bb199552af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_808660213a6caa3344f1b2b3650a5ad8e80b0e3789e447a2b23be4bb199552af->leave($__internal_808660213a6caa3344f1b2b3650a5ad8e80b0e3789e447a2b23be4bb199552af_prof);

    }

    public function getTemplateName()
    {
        return "@Article/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@Article/Default/index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
