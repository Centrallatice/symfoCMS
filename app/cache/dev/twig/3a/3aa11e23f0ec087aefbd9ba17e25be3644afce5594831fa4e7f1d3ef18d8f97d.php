<?php

/* @PageViews/Default\index.html.twig */
class __TwigTemplate_0bfa232b828483c1eb64b71af931b214708a53186e63fd66885bd6deea7c2be1 extends Twig_Template
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
        $__internal_bf084806bf5cf3b3be4aa11c7da6819b4cd6338eb7f6413a84bd16f2346f2e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf084806bf5cf3b3be4aa11c7da6819b4cd6338eb7f6413a84bd16f2346f2e51->enter($__internal_bf084806bf5cf3b3be4aa11c7da6819b4cd6338eb7f6413a84bd16f2346f2e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/Default\\index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bf084806bf5cf3b3be4aa11c7da6819b4cd6338eb7f6413a84bd16f2346f2e51->leave($__internal_bf084806bf5cf3b3be4aa11c7da6819b4cd6338eb7f6413a84bd16f2346f2e51_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/Default\\index.html.twig";
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
", "@PageViews/Default\\index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
