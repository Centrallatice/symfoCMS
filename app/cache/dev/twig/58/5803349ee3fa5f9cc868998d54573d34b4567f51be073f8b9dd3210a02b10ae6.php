<?php

/* PageBundle:Default:index.html.twig */
class __TwigTemplate_403991ecafb7dac022d36b7e8681d2248d2590a8e841bdfb98a3f183a672e7f6 extends Twig_Template
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
        $__internal_ebbb701ab0279faf3a2062b6f94e61313decd34124851979af668f0662e69cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbb701ab0279faf3a2062b6f94e61313decd34124851979af668f0662e69cba->enter($__internal_ebbb701ab0279faf3a2062b6f94e61313decd34124851979af668f0662e69cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ebbb701ab0279faf3a2062b6f94e61313decd34124851979af668f0662e69cba->leave($__internal_ebbb701ab0279faf3a2062b6f94e61313decd34124851979af668f0662e69cba_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:index.html.twig";
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
", "PageBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/Default/index.html.twig");
    }
}
