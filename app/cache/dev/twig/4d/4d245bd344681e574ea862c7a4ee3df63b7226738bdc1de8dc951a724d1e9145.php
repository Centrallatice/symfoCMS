<?php

/* ArticleBundle:Default:index.html.twig */
class __TwigTemplate_45cb45320ca18aa14c38f15fcb60950784d32fcae63a0754232b0e43878c82de extends Twig_Template
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
        $__internal_ac670b30992a8eef7a252e6062625d738d24d2a534b11c0b582cf0eac906edad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac670b30992a8eef7a252e6062625d738d24d2a534b11c0b582cf0eac906edad->enter($__internal_ac670b30992a8eef7a252e6062625d738d24d2a534b11c0b582cf0eac906edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ac670b30992a8eef7a252e6062625d738d24d2a534b11c0b582cf0eac906edad->leave($__internal_ac670b30992a8eef7a252e6062625d738d24d2a534b11c0b582cf0eac906edad_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Default:index.html.twig";
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
", "ArticleBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/Default/index.html.twig");
    }
}
