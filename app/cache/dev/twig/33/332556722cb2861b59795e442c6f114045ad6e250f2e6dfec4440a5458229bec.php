<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2b71cee654f8dd3a853b13858cd1a6b34ebd4b199c9388b56862636a2f83acec extends Twig_Template
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
        $__internal_5b7f52b15b0a1f7879c4c0813359559e54efdfd3d4b83948adfe5c5ca7bd1481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7f52b15b0a1f7879c4c0813359559e54efdfd3d4b83948adfe5c5ca7bd1481->enter($__internal_5b7f52b15b0a1f7879c4c0813359559e54efdfd3d4b83948adfe5c5ca7bd1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5b7f52b15b0a1f7879c4c0813359559e54efdfd3d4b83948adfe5c5ca7bd1481->leave($__internal_5b7f52b15b0a1f7879c4c0813359559e54efdfd3d4b83948adfe5c5ca7bd1481_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
