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
        $__internal_b026f5f32a726dd6009a708af8e96377b1aef1937e1f30cee62451777683f3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b026f5f32a726dd6009a708af8e96377b1aef1937e1f30cee62451777683f3ec->enter($__internal_b026f5f32a726dd6009a708af8e96377b1aef1937e1f30cee62451777683f3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b026f5f32a726dd6009a708af8e96377b1aef1937e1f30cee62451777683f3ec->leave($__internal_b026f5f32a726dd6009a708af8e96377b1aef1937e1f30cee62451777683f3ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8f14a44c518f945833ee7230f4d9134b0777f0a9bf2fc96d0bf9f92032b2a22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f14a44c518f945833ee7230f4d9134b0777f0a9bf2fc96d0bf9f92032b2a22b->enter($__internal_8f14a44c518f945833ee7230f4d9134b0777f0a9bf2fc96d0bf9f92032b2a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8f14a44c518f945833ee7230f4d9134b0777f0a9bf2fc96d0bf9f92032b2a22b->leave($__internal_8f14a44c518f945833ee7230f4d9134b0777f0a9bf2fc96d0bf9f92032b2a22b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_769bb811eac78a0151c0fa7e668b49428fa7c17769a3fa30da2331b6e2da7e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769bb811eac78a0151c0fa7e668b49428fa7c17769a3fa30da2331b6e2da7e80->enter($__internal_769bb811eac78a0151c0fa7e668b49428fa7c17769a3fa30da2331b6e2da7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_769bb811eac78a0151c0fa7e668b49428fa7c17769a3fa30da2331b6e2da7e80->leave($__internal_769bb811eac78a0151c0fa7e668b49428fa7c17769a3fa30da2331b6e2da7e80_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a6356f48b07c1d444d1d38e5c876fce093ca60762e8d0fe46249142d69415f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6356f48b07c1d444d1d38e5c876fce093ca60762e8d0fe46249142d69415f6->enter($__internal_7a6356f48b07c1d444d1d38e5c876fce093ca60762e8d0fe46249142d69415f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_7a6356f48b07c1d444d1d38e5c876fce093ca60762e8d0fe46249142d69415f6->leave($__internal_7a6356f48b07c1d444d1d38e5c876fce093ca60762e8d0fe46249142d69415f6_prof);

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
