<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a7f4df5d455db481e1194a6f9dca88146c1e80d29057bf5be16e9b0debee403a extends Twig_Template
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
        $__internal_35b35668417a237780bbc93596dea8c00dc6814f628a35f8855989ba17b51d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b35668417a237780bbc93596dea8c00dc6814f628a35f8855989ba17b51d51->enter($__internal_35b35668417a237780bbc93596dea8c00dc6814f628a35f8855989ba17b51d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_35b35668417a237780bbc93596dea8c00dc6814f628a35f8855989ba17b51d51->leave($__internal_35b35668417a237780bbc93596dea8c00dc6814f628a35f8855989ba17b51d51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}