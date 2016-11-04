<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d0fd2c30d5a2b60dfe2f9d93e9c6ca888e0978e98347b225b0278dbdb32bb74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3273a51937168664e4abe399c7c6ff03e8c80d3767633cc6890e310fb721df7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3273a51937168664e4abe399c7c6ff03e8c80d3767633cc6890e310fb721df7a->enter($__internal_3273a51937168664e4abe399c7c6ff03e8c80d3767633cc6890e310fb721df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3273a51937168664e4abe399c7c6ff03e8c80d3767633cc6890e310fb721df7a->leave($__internal_3273a51937168664e4abe399c7c6ff03e8c80d3767633cc6890e310fb721df7a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b8e07ba1def2a34fc3954779dd1924c7c5fa481714fd84a21e7c765439947bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e07ba1def2a34fc3954779dd1924c7c5fa481714fd84a21e7c765439947bbb->enter($__internal_b8e07ba1def2a34fc3954779dd1924c7c5fa481714fd84a21e7c765439947bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b8e07ba1def2a34fc3954779dd1924c7c5fa481714fd84a21e7c765439947bbb->leave($__internal_b8e07ba1def2a34fc3954779dd1924c7c5fa481714fd84a21e7c765439947bbb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_04b3f9f39c16f8f362a9d972369f3c95ff72faaf51928b1bb25c25ca1f9015fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b3f9f39c16f8f362a9d972369f3c95ff72faaf51928b1bb25c25ca1f9015fc->enter($__internal_04b3f9f39c16f8f362a9d972369f3c95ff72faaf51928b1bb25c25ca1f9015fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_04b3f9f39c16f8f362a9d972369f3c95ff72faaf51928b1bb25c25ca1f9015fc->leave($__internal_04b3f9f39c16f8f362a9d972369f3c95ff72faaf51928b1bb25c25ca1f9015fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e10eb6b7e170286c618ba1907f01ad49803329f8821b7a66b7e69b9a12263adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10eb6b7e170286c618ba1907f01ad49803329f8821b7a66b7e69b9a12263adf->enter($__internal_e10eb6b7e170286c618ba1907f01ad49803329f8821b7a66b7e69b9a12263adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_e10eb6b7e170286c618ba1907f01ad49803329f8821b7a66b7e69b9a12263adf->leave($__internal_e10eb6b7e170286c618ba1907f01ad49803329f8821b7a66b7e69b9a12263adf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
