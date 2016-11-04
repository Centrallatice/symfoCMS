<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ca67c8d18691eeacd5ddc63eb3da5a23de570b98f0001c855bd9d1ae7eca8cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2bf5b7cb72affcab765cc8a00060fa5cdd152f71bc22564c892357667eb9372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bf5b7cb72affcab765cc8a00060fa5cdd152f71bc22564c892357667eb9372->enter($__internal_f2bf5b7cb72affcab765cc8a00060fa5cdd152f71bc22564c892357667eb9372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2bf5b7cb72affcab765cc8a00060fa5cdd152f71bc22564c892357667eb9372->leave($__internal_f2bf5b7cb72affcab765cc8a00060fa5cdd152f71bc22564c892357667eb9372_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fb990a18964111a0fcbd0480c13bb3a178e3f78f9dadccaa26f731f44e46931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb990a18964111a0fcbd0480c13bb3a178e3f78f9dadccaa26f731f44e46931->enter($__internal_7fb990a18964111a0fcbd0480c13bb3a178e3f78f9dadccaa26f731f44e46931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7fb990a18964111a0fcbd0480c13bb3a178e3f78f9dadccaa26f731f44e46931->leave($__internal_7fb990a18964111a0fcbd0480c13bb3a178e3f78f9dadccaa26f731f44e46931_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
