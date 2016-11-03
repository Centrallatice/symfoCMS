<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_33222338a1de401027e5b023672d131944ed5a457d8e3691f2d999993eeee958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_f4d1889cb2a21ced60af374047a8b8c2da2e9a14cfaa37da6ef40153ab5c1ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d1889cb2a21ced60af374047a8b8c2da2e9a14cfaa37da6ef40153ab5c1ae6->enter($__internal_f4d1889cb2a21ced60af374047a8b8c2da2e9a14cfaa37da6ef40153ab5c1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d1889cb2a21ced60af374047a8b8c2da2e9a14cfaa37da6ef40153ab5c1ae6->leave($__internal_f4d1889cb2a21ced60af374047a8b8c2da2e9a14cfaa37da6ef40153ab5c1ae6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd355a135d299371ef6fa8bda7c9811687b911c13dcc9dd5c0810d1bbeeb3a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd355a135d299371ef6fa8bda7c9811687b911c13dcc9dd5c0810d1bbeeb3a61->enter($__internal_bd355a135d299371ef6fa8bda7c9811687b911c13dcc9dd5c0810d1bbeeb3a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bd355a135d299371ef6fa8bda7c9811687b911c13dcc9dd5c0810d1bbeeb3a61->leave($__internal_bd355a135d299371ef6fa8bda7c9811687b911c13dcc9dd5c0810d1bbeeb3a61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
