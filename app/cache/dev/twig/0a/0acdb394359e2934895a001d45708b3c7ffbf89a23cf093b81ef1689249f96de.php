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
        $__internal_90c8e87a72caefd8d573293c8b04ad9ede42e6fa7f1fbf40afebf9567714699d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c8e87a72caefd8d573293c8b04ad9ede42e6fa7f1fbf40afebf9567714699d->enter($__internal_90c8e87a72caefd8d573293c8b04ad9ede42e6fa7f1fbf40afebf9567714699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_90c8e87a72caefd8d573293c8b04ad9ede42e6fa7f1fbf40afebf9567714699d->leave($__internal_90c8e87a72caefd8d573293c8b04ad9ede42e6fa7f1fbf40afebf9567714699d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc05f43026d5b88773767c716734979427482e09342e0508a7bbe91386a5653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc05f43026d5b88773767c716734979427482e09342e0508a7bbe91386a5653c->enter($__internal_cc05f43026d5b88773767c716734979427482e09342e0508a7bbe91386a5653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cc05f43026d5b88773767c716734979427482e09342e0508a7bbe91386a5653c->leave($__internal_cc05f43026d5b88773767c716734979427482e09342e0508a7bbe91386a5653c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_59d5ea91365f58dd99a5cadca7d5044e27c52649efdbc4c2b4b020e8a8df3859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d5ea91365f58dd99a5cadca7d5044e27c52649efdbc4c2b4b020e8a8df3859->enter($__internal_59d5ea91365f58dd99a5cadca7d5044e27c52649efdbc4c2b4b020e8a8df3859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_59d5ea91365f58dd99a5cadca7d5044e27c52649efdbc4c2b4b020e8a8df3859->leave($__internal_59d5ea91365f58dd99a5cadca7d5044e27c52649efdbc4c2b4b020e8a8df3859_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99d746b56b1ae0f251d68fcb1ebe2f9b12661545a59ffabb2e9d188eb8af14d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d746b56b1ae0f251d68fcb1ebe2f9b12661545a59ffabb2e9d188eb8af14d9->enter($__internal_99d746b56b1ae0f251d68fcb1ebe2f9b12661545a59ffabb2e9d188eb8af14d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_99d746b56b1ae0f251d68fcb1ebe2f9b12661545a59ffabb2e9d188eb8af14d9->leave($__internal_99d746b56b1ae0f251d68fcb1ebe2f9b12661545a59ffabb2e9d188eb8af14d9_prof);

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
