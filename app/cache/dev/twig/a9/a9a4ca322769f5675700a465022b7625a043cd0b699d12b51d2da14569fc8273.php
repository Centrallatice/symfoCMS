<?php

/* HomeBundle:Default:index.html.twig */
class __TwigTemplate_5319ecc29798d93f0307a168a137918cde639cd7ca81540ed53e79de3c4b865f extends Twig_Template
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
        $__internal_2996f2899e4ab8548567c82507540a1235395753c0d274f098811f6fdc5c9632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996f2899e4ab8548567c82507540a1235395753c0d274f098811f6fdc5c9632->enter($__internal_2996f2899e4ab8548567c82507540a1235395753c0d274f098811f6fdc5c9632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2996f2899e4ab8548567c82507540a1235395753c0d274f098811f6fdc5c9632->leave($__internal_2996f2899e4ab8548567c82507540a1235395753c0d274f098811f6fdc5c9632_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Default:index.html.twig";
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
", "HomeBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\HomeBundle/Resources/views/Default/index.html.twig");
    }
}
