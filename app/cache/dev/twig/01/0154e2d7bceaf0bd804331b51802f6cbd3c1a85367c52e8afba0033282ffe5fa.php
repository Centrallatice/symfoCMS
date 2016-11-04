<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ac131da420bae859414458fb4fdf086279190e363d6a523912981ea8e8ba81d6 extends Twig_Template
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
        $__internal_2bce9310cc99f849823f02d7370c1633bcf3bc084e65a8ec0b0cfc2f405402ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bce9310cc99f849823f02d7370c1633bcf3bc084e65a8ec0b0cfc2f405402ed->enter($__internal_2bce9310cc99f849823f02d7370c1633bcf3bc084e65a8ec0b0cfc2f405402ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2bce9310cc99f849823f02d7370c1633bcf3bc084e65a8ec0b0cfc2f405402ed->leave($__internal_2bce9310cc99f849823f02d7370c1633bcf3bc084e65a8ec0b0cfc2f405402ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1c28d32b6d53206aa86fbeac6235509f1b8b350c019b00802bf42cd9da94de1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c28d32b6d53206aa86fbeac6235509f1b8b350c019b00802bf42cd9da94de1a->enter($__internal_1c28d32b6d53206aa86fbeac6235509f1b8b350c019b00802bf42cd9da94de1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1c28d32b6d53206aa86fbeac6235509f1b8b350c019b00802bf42cd9da94de1a->leave($__internal_1c28d32b6d53206aa86fbeac6235509f1b8b350c019b00802bf42cd9da94de1a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46e49e369adfc53e77c4a5071869e84d53a50aad733913c7584c6129e0ccd88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e49e369adfc53e77c4a5071869e84d53a50aad733913c7584c6129e0ccd88e->enter($__internal_46e49e369adfc53e77c4a5071869e84d53a50aad733913c7584c6129e0ccd88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_46e49e369adfc53e77c4a5071869e84d53a50aad733913c7584c6129e0ccd88e->leave($__internal_46e49e369adfc53e77c4a5071869e84d53a50aad733913c7584c6129e0ccd88e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_928b9650844e5dfc2064aa2353d0d4587b6fa4a2807364fa74d1de624811e465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928b9650844e5dfc2064aa2353d0d4587b6fa4a2807364fa74d1de624811e465->enter($__internal_928b9650844e5dfc2064aa2353d0d4587b6fa4a2807364fa74d1de624811e465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_928b9650844e5dfc2064aa2353d0d4587b6fa4a2807364fa74d1de624811e465->leave($__internal_928b9650844e5dfc2064aa2353d0d4587b6fa4a2807364fa74d1de624811e465_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
