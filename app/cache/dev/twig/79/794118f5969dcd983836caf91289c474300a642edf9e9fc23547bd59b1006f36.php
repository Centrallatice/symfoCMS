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
        $__internal_6e510cbf64e8597295a6203bf9e95b15c0f67bc68df8715e7a0fadf1a1a8e4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e510cbf64e8597295a6203bf9e95b15c0f67bc68df8715e7a0fadf1a1a8e4e0->enter($__internal_6e510cbf64e8597295a6203bf9e95b15c0f67bc68df8715e7a0fadf1a1a8e4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6e510cbf64e8597295a6203bf9e95b15c0f67bc68df8715e7a0fadf1a1a8e4e0->leave($__internal_6e510cbf64e8597295a6203bf9e95b15c0f67bc68df8715e7a0fadf1a1a8e4e0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_270ce2fea35e4ec90c683d9ba5832b699801a13bcb84803a90484842ab1d1f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270ce2fea35e4ec90c683d9ba5832b699801a13bcb84803a90484842ab1d1f6f->enter($__internal_270ce2fea35e4ec90c683d9ba5832b699801a13bcb84803a90484842ab1d1f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_270ce2fea35e4ec90c683d9ba5832b699801a13bcb84803a90484842ab1d1f6f->leave($__internal_270ce2fea35e4ec90c683d9ba5832b699801a13bcb84803a90484842ab1d1f6f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cfaa439e5a3836a7e94ea68fe24144b4424811751f0417810a4edc202901d433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaa439e5a3836a7e94ea68fe24144b4424811751f0417810a4edc202901d433->enter($__internal_cfaa439e5a3836a7e94ea68fe24144b4424811751f0417810a4edc202901d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cfaa439e5a3836a7e94ea68fe24144b4424811751f0417810a4edc202901d433->leave($__internal_cfaa439e5a3836a7e94ea68fe24144b4424811751f0417810a4edc202901d433_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd8aed730b59cbc83dcb6be4c420bed3526af8113f1668cb837f4b83c31feac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8aed730b59cbc83dcb6be4c420bed3526af8113f1668cb837f4b83c31feac0->enter($__internal_fd8aed730b59cbc83dcb6be4c420bed3526af8113f1668cb837f4b83c31feac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_fd8aed730b59cbc83dcb6be4c420bed3526af8113f1668cb837f4b83c31feac0->leave($__internal_fd8aed730b59cbc83dcb6be4c420bed3526af8113f1668cb837f4b83c31feac0_prof);

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
