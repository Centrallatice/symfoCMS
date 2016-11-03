<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_303c681aef82d7ffd521b8af23afafe57db6892ed13a0b2e9764940cf99cd573 extends Twig_Template
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
        $__internal_beb3ef3f0fda6ab05c522e01a6c101ad0b3aa5e8a4a644bcd0853d35ef201d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb3ef3f0fda6ab05c522e01a6c101ad0b3aa5e8a4a644bcd0853d35ef201d13->enter($__internal_beb3ef3f0fda6ab05c522e01a6c101ad0b3aa5e8a4a644bcd0853d35ef201d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_beb3ef3f0fda6ab05c522e01a6c101ad0b3aa5e8a4a644bcd0853d35ef201d13->leave($__internal_beb3ef3f0fda6ab05c522e01a6c101ad0b3aa5e8a4a644bcd0853d35ef201d13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
