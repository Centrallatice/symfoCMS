<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_cc688991e1df03b4fbcecee769d19487e08ea2f3891f92008483e2d66cee95e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6b621595e0f5ba49ee1c9f7aad598d89e535d0ee386cd57c4882f627fe90bf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b621595e0f5ba49ee1c9f7aad598d89e535d0ee386cd57c4882f627fe90bf9a->enter($__internal_6b621595e0f5ba49ee1c9f7aad598d89e535d0ee386cd57c4882f627fe90bf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b621595e0f5ba49ee1c9f7aad598d89e535d0ee386cd57c4882f627fe90bf9a->leave($__internal_6b621595e0f5ba49ee1c9f7aad598d89e535d0ee386cd57c4882f627fe90bf9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_646ae1b93b767c779dd43a9489ff8458fc643b805bb9f4182b492119f78afd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646ae1b93b767c779dd43a9489ff8458fc643b805bb9f4182b492119f78afd04->enter($__internal_646ae1b93b767c779dd43a9489ff8458fc643b805bb9f4182b492119f78afd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_646ae1b93b767c779dd43a9489ff8458fc643b805bb9f4182b492119f78afd04->leave($__internal_646ae1b93b767c779dd43a9489ff8458fc643b805bb9f4182b492119f78afd04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}