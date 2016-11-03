<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_38cc14dcc1eca72373e4c078d80dc9b1d3eecc666783666f5a293e3aa7edf63c extends Twig_Template
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
        $__internal_0413e44adc881e42742f94cf0f96a3e5ff88394ddfbd470ef787b1445e6cde7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0413e44adc881e42742f94cf0f96a3e5ff88394ddfbd470ef787b1445e6cde7e->enter($__internal_0413e44adc881e42742f94cf0f96a3e5ff88394ddfbd470ef787b1445e6cde7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0413e44adc881e42742f94cf0f96a3e5ff88394ddfbd470ef787b1445e6cde7e->leave($__internal_0413e44adc881e42742f94cf0f96a3e5ff88394ddfbd470ef787b1445e6cde7e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3bf81739a1479e137829ce53193295db92cc3376e089bbca62d4fd6debd36e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf81739a1479e137829ce53193295db92cc3376e089bbca62d4fd6debd36e4d->enter($__internal_3bf81739a1479e137829ce53193295db92cc3376e089bbca62d4fd6debd36e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3bf81739a1479e137829ce53193295db92cc3376e089bbca62d4fd6debd36e4d->leave($__internal_3bf81739a1479e137829ce53193295db92cc3376e089bbca62d4fd6debd36e4d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_769fe417ba383d0def3fed8e824d091ee8cdd01902c4fc34d2e8c0115ad1b275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769fe417ba383d0def3fed8e824d091ee8cdd01902c4fc34d2e8c0115ad1b275->enter($__internal_769fe417ba383d0def3fed8e824d091ee8cdd01902c4fc34d2e8c0115ad1b275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_769fe417ba383d0def3fed8e824d091ee8cdd01902c4fc34d2e8c0115ad1b275->leave($__internal_769fe417ba383d0def3fed8e824d091ee8cdd01902c4fc34d2e8c0115ad1b275_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49e0d5e34cd5fe0c1d1ca46979e8c5627d9b53344690864b6278b0f27d15a260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e0d5e34cd5fe0c1d1ca46979e8c5627d9b53344690864b6278b0f27d15a260->enter($__internal_49e0d5e34cd5fe0c1d1ca46979e8c5627d9b53344690864b6278b0f27d15a260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_49e0d5e34cd5fe0c1d1ca46979e8c5627d9b53344690864b6278b0f27d15a260->leave($__internal_49e0d5e34cd5fe0c1d1ca46979e8c5627d9b53344690864b6278b0f27d15a260_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
