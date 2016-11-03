<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_631b6f45692006ac40b6d3bec547afac1b01d9aefd71c636dfb7a268c95d0637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f66610c1833c87e73f6711a51457e921eace219577e50c99de18d33efa50d799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66610c1833c87e73f6711a51457e921eace219577e50c99de18d33efa50d799->enter($__internal_f66610c1833c87e73f6711a51457e921eace219577e50c99de18d33efa50d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66610c1833c87e73f6711a51457e921eace219577e50c99de18d33efa50d799->leave($__internal_f66610c1833c87e73f6711a51457e921eace219577e50c99de18d33efa50d799_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd61e7180c7637bdc7ed01f5682c59231c06e70a67f5ffc1cf213b22292fa6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd61e7180c7637bdc7ed01f5682c59231c06e70a67f5ffc1cf213b22292fa6d9->enter($__internal_fd61e7180c7637bdc7ed01f5682c59231c06e70a67f5ffc1cf213b22292fa6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fd61e7180c7637bdc7ed01f5682c59231c06e70a67f5ffc1cf213b22292fa6d9->leave($__internal_fd61e7180c7637bdc7ed01f5682c59231c06e70a67f5ffc1cf213b22292fa6d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
