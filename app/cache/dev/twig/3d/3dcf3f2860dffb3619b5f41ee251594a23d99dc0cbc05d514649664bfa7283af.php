<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_17b2c611cab600b416c8828e519232738adba5977f30e954d94b7907de1f8b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c26ab96a4a887c361dd060f6fb2b25b3affd046be48f75ecc7bf27bee0236c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26ab96a4a887c361dd060f6fb2b25b3affd046be48f75ecc7bf27bee0236c58->enter($__internal_c26ab96a4a887c361dd060f6fb2b25b3affd046be48f75ecc7bf27bee0236c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26ab96a4a887c361dd060f6fb2b25b3affd046be48f75ecc7bf27bee0236c58->leave($__internal_c26ab96a4a887c361dd060f6fb2b25b3affd046be48f75ecc7bf27bee0236c58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42e2c3fe54c785d98431409bd25be3fc286ea2f1c10882dd9e6c46ac3a60ce0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e2c3fe54c785d98431409bd25be3fc286ea2f1c10882dd9e6c46ac3a60ce0b->enter($__internal_42e2c3fe54c785d98431409bd25be3fc286ea2f1c10882dd9e6c46ac3a60ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_42e2c3fe54c785d98431409bd25be3fc286ea2f1c10882dd9e6c46ac3a60ce0b->leave($__internal_42e2c3fe54c785d98431409bd25be3fc286ea2f1c10882dd9e6c46ac3a60ce0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
