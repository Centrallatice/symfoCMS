<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_9cf194750613b5565cbf5dd84d3f7413f4c6637a00953ce0c5b74df528c189e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_aba0ae6e3210ac52c18da1bae30d5dfdc721c56b4db0472601ac0fba2cc2a22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba0ae6e3210ac52c18da1bae30d5dfdc721c56b4db0472601ac0fba2cc2a22d->enter($__internal_aba0ae6e3210ac52c18da1bae30d5dfdc721c56b4db0472601ac0fba2cc2a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba0ae6e3210ac52c18da1bae30d5dfdc721c56b4db0472601ac0fba2cc2a22d->leave($__internal_aba0ae6e3210ac52c18da1bae30d5dfdc721c56b4db0472601ac0fba2cc2a22d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c34445562fd8f41b26705ca9c4007a73ea2d10b2ae8e305fa6bf3b05e0e12c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c34445562fd8f41b26705ca9c4007a73ea2d10b2ae8e305fa6bf3b05e0e12c9->enter($__internal_0c34445562fd8f41b26705ca9c4007a73ea2d10b2ae8e305fa6bf3b05e0e12c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0c34445562fd8f41b26705ca9c4007a73ea2d10b2ae8e305fa6bf3b05e0e12c9->leave($__internal_0c34445562fd8f41b26705ca9c4007a73ea2d10b2ae8e305fa6bf3b05e0e12c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
