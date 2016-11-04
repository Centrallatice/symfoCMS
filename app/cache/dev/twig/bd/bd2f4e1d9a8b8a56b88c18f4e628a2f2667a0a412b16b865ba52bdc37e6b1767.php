<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_601b9a2ef4cc6550c056f393892befcc4be7d61b8ea9a7da66d0aa21fea328bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b6db45bfab486ccafcf77c16b28673273e1ae57227ac07a3e2ce306f67a4c08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6db45bfab486ccafcf77c16b28673273e1ae57227ac07a3e2ce306f67a4c08d->enter($__internal_b6db45bfab486ccafcf77c16b28673273e1ae57227ac07a3e2ce306f67a4c08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6db45bfab486ccafcf77c16b28673273e1ae57227ac07a3e2ce306f67a4c08d->leave($__internal_b6db45bfab486ccafcf77c16b28673273e1ae57227ac07a3e2ce306f67a4c08d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_be7a00c4bca522429f3a2d252318d4723f83131f02408083f531fb5843b6721d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a00c4bca522429f3a2d252318d4723f83131f02408083f531fb5843b6721d->enter($__internal_be7a00c4bca522429f3a2d252318d4723f83131f02408083f531fb5843b6721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

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
        
        $__internal_be7a00c4bca522429f3a2d252318d4723f83131f02408083f531fb5843b6721d->leave($__internal_be7a00c4bca522429f3a2d252318d4723f83131f02408083f531fb5843b6721d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
