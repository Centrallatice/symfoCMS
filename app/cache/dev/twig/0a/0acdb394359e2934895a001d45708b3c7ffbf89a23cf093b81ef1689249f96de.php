<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a97d707cbbf9b4b5c712efd1acb812102bdc73277fbe024895317b42305adfc5 extends Twig_Template
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
        $__internal_7d3808b248264a1f1be19c8c7405dc9f0f3dace756e58110782591f995ec222e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3808b248264a1f1be19c8c7405dc9f0f3dace756e58110782591f995ec222e->enter($__internal_7d3808b248264a1f1be19c8c7405dc9f0f3dace756e58110782591f995ec222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d3808b248264a1f1be19c8c7405dc9f0f3dace756e58110782591f995ec222e->leave($__internal_7d3808b248264a1f1be19c8c7405dc9f0f3dace756e58110782591f995ec222e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4341d8b0dd38b15492cf988ceceedfbe28f1fb60ef623d460a53fbfba0996435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4341d8b0dd38b15492cf988ceceedfbe28f1fb60ef623d460a53fbfba0996435->enter($__internal_4341d8b0dd38b15492cf988ceceedfbe28f1fb60ef623d460a53fbfba0996435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4341d8b0dd38b15492cf988ceceedfbe28f1fb60ef623d460a53fbfba0996435->leave($__internal_4341d8b0dd38b15492cf988ceceedfbe28f1fb60ef623d460a53fbfba0996435_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9a4e27327385a02af35d992f2b854db31508a20621e2a8192874096cc4da531c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4e27327385a02af35d992f2b854db31508a20621e2a8192874096cc4da531c->enter($__internal_9a4e27327385a02af35d992f2b854db31508a20621e2a8192874096cc4da531c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9a4e27327385a02af35d992f2b854db31508a20621e2a8192874096cc4da531c->leave($__internal_9a4e27327385a02af35d992f2b854db31508a20621e2a8192874096cc4da531c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d1683d41c857f648dd2530606ea3467be9f7aeb2fa095de0e9df28c74b43cfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1683d41c857f648dd2530606ea3467be9f7aeb2fa095de0e9df28c74b43cfb8->enter($__internal_d1683d41c857f648dd2530606ea3467be9f7aeb2fa095de0e9df28c74b43cfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_d1683d41c857f648dd2530606ea3467be9f7aeb2fa095de0e9df28c74b43cfb8->leave($__internal_d1683d41c857f648dd2530606ea3467be9f7aeb2fa095de0e9df28c74b43cfb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
