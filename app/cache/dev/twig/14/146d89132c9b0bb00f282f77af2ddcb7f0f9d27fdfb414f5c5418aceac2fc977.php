<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a0ba2994c34d5a7075ee78c098734a6272f046a77208f7cd425640d0a5917000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_40cdd390471a02c803ee8965713d54c73267391d60ee5cba6b170371fa6a9499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cdd390471a02c803ee8965713d54c73267391d60ee5cba6b170371fa6a9499->enter($__internal_40cdd390471a02c803ee8965713d54c73267391d60ee5cba6b170371fa6a9499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40cdd390471a02c803ee8965713d54c73267391d60ee5cba6b170371fa6a9499->leave($__internal_40cdd390471a02c803ee8965713d54c73267391d60ee5cba6b170371fa6a9499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e8d9762ac95f7b1e947371f4bcc8ee96841d17b08981f491dbcdc0ab94e0065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8d9762ac95f7b1e947371f4bcc8ee96841d17b08981f491dbcdc0ab94e0065->enter($__internal_1e8d9762ac95f7b1e947371f4bcc8ee96841d17b08981f491dbcdc0ab94e0065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1e8d9762ac95f7b1e947371f4bcc8ee96841d17b08981f491dbcdc0ab94e0065->leave($__internal_1e8d9762ac95f7b1e947371f4bcc8ee96841d17b08981f491dbcdc0ab94e0065_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
