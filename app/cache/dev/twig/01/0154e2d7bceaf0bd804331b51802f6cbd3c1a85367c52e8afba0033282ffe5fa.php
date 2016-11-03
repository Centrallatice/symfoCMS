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
        $__internal_1b3f966225756dde0d62f344e74dc11f9a5314d425f05e05020b22afa8e0d1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3f966225756dde0d62f344e74dc11f9a5314d425f05e05020b22afa8e0d1c8->enter($__internal_1b3f966225756dde0d62f344e74dc11f9a5314d425f05e05020b22afa8e0d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1b3f966225756dde0d62f344e74dc11f9a5314d425f05e05020b22afa8e0d1c8->leave($__internal_1b3f966225756dde0d62f344e74dc11f9a5314d425f05e05020b22afa8e0d1c8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_befabc98a2688d132ff480d32f1214435fd57f38ccf602eefefd9e3a6f842111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befabc98a2688d132ff480d32f1214435fd57f38ccf602eefefd9e3a6f842111->enter($__internal_befabc98a2688d132ff480d32f1214435fd57f38ccf602eefefd9e3a6f842111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_befabc98a2688d132ff480d32f1214435fd57f38ccf602eefefd9e3a6f842111->leave($__internal_befabc98a2688d132ff480d32f1214435fd57f38ccf602eefefd9e3a6f842111_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b551f7f72c966dd6d5e64713f50cd4a317cf64a0254bb0b011532f3d417b1362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b551f7f72c966dd6d5e64713f50cd4a317cf64a0254bb0b011532f3d417b1362->enter($__internal_b551f7f72c966dd6d5e64713f50cd4a317cf64a0254bb0b011532f3d417b1362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b551f7f72c966dd6d5e64713f50cd4a317cf64a0254bb0b011532f3d417b1362->leave($__internal_b551f7f72c966dd6d5e64713f50cd4a317cf64a0254bb0b011532f3d417b1362_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dcdce7219718ebca88794025fdd91a72b5d3e15ac2be9a99a971c9e283417dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdce7219718ebca88794025fdd91a72b5d3e15ac2be9a99a971c9e283417dd1->enter($__internal_dcdce7219718ebca88794025fdd91a72b5d3e15ac2be9a99a971c9e283417dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_dcdce7219718ebca88794025fdd91a72b5d3e15ac2be9a99a971c9e283417dd1->leave($__internal_dcdce7219718ebca88794025fdd91a72b5d3e15ac2be9a99a971c9e283417dd1_prof);

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
