<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e8fd470a9fbd88a14591425f3cb4661064a93e17fa0106f35fa8147ccce64792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_1bd4f9f38b58f1c1d235131ac11b4920913ffbd1671d35bd0385fb0378a6d96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd4f9f38b58f1c1d235131ac11b4920913ffbd1671d35bd0385fb0378a6d96f->enter($__internal_1bd4f9f38b58f1c1d235131ac11b4920913ffbd1671d35bd0385fb0378a6d96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd4f9f38b58f1c1d235131ac11b4920913ffbd1671d35bd0385fb0378a6d96f->leave($__internal_1bd4f9f38b58f1c1d235131ac11b4920913ffbd1671d35bd0385fb0378a6d96f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7f8c93bcd4cd9ebb24fe7f1289a4d0e32f6d97ae83fb09431435731a39f0ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f8c93bcd4cd9ebb24fe7f1289a4d0e32f6d97ae83fb09431435731a39f0ed8->enter($__internal_b7f8c93bcd4cd9ebb24fe7f1289a4d0e32f6d97ae83fb09431435731a39f0ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/confirmed.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b7f8c93bcd4cd9ebb24fe7f1289a4d0e32f6d97ae83fb09431435731a39f0ed8->leave($__internal_b7f8c93bcd4cd9ebb24fe7f1289a4d0e32f6d97ae83fb09431435731a39f0ed8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
