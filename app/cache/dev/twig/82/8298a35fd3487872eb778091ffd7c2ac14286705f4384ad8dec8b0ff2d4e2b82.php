<?php

/* @Home/Default/index.html.twig */
class __TwigTemplate_309a62356237aa2a00928465ee09e5acafa603aad045b318f88c6eec3b274d4c extends Twig_Template
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
        $__internal_2c24767d2796e637ccd94a6594aa3fb07da7835949722da1e92c1ec89821823e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c24767d2796e637ccd94a6594aa3fb07da7835949722da1e92c1ec89821823e->enter($__internal_2c24767d2796e637ccd94a6594aa3fb07da7835949722da1e92c1ec89821823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Home/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2c24767d2796e637ccd94a6594aa3fb07da7835949722da1e92c1ec89821823e->leave($__internal_2c24767d2796e637ccd94a6594aa3fb07da7835949722da1e92c1ec89821823e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/Default/index.html.twig";
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
", "@Home/Default/index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\HomeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
