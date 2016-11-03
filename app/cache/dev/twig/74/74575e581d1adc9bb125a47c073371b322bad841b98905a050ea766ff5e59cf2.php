<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a77ab476a8c65d5d92840d1247fd8e3a98cfd8c613d0b50f95d085b1361ea9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db4580f2c16e010cc5266240a2268d5fae26af2807bc3300c229d5bbc844efdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4580f2c16e010cc5266240a2268d5fae26af2807bc3300c229d5bbc844efdc->enter($__internal_db4580f2c16e010cc5266240a2268d5fae26af2807bc3300c229d5bbc844efdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4580f2c16e010cc5266240a2268d5fae26af2807bc3300c229d5bbc844efdc->leave($__internal_db4580f2c16e010cc5266240a2268d5fae26af2807bc3300c229d5bbc844efdc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_64d4c9f15206b49318964ef580c4c344c7c5aee9bcd8f98de2e4831f49b3c8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d4c9f15206b49318964ef580c4c344c7c5aee9bcd8f98de2e4831f49b3c8a3->enter($__internal_64d4c9f15206b49318964ef580c4c344c7c5aee9bcd8f98de2e4831f49b3c8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 5
        echo "    <div class=\"fos_user_user_show\">
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    </div>
";
        
        $__internal_64d4c9f15206b49318964ef580c4c344c7c5aee9bcd8f98de2e4831f49b3c8a3->leave($__internal_64d4c9f15206b49318964ef580c4c344c7c5aee9bcd8f98de2e4831f49b3c8a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    <div class=\"fos_user_user_show\">
        <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    </div>
{% endblock body %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
