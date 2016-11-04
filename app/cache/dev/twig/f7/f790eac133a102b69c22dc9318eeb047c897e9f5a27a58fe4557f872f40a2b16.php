<?php

/* ModuleBundle:Default:index.html.twig */
class __TwigTemplate_02a3ed0951b9750caa0b499e55d4b1a2171fcd3340925c817b2646e6cc8f7734 extends Twig_Template
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
        $__internal_a6404c9bbad9f6df8960c31c344be9bcb9c39e55fcadb46f43c21087972e1901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6404c9bbad9f6df8960c31c344be9bcb9c39e55fcadb46f43c21087972e1901->enter($__internal_a6404c9bbad9f6df8960c31c344be9bcb9c39e55fcadb46f43c21087972e1901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a6404c9bbad9f6df8960c31c344be9bcb9c39e55fcadb46f43c21087972e1901->leave($__internal_a6404c9bbad9f6df8960c31c344be9bcb9c39e55fcadb46f43c21087972e1901_prof);

    }

    public function getTemplateName()
    {
        return "ModuleBundle:Default:index.html.twig";
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
", "ModuleBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle/Resources/views/Default/index.html.twig");
    }
}
