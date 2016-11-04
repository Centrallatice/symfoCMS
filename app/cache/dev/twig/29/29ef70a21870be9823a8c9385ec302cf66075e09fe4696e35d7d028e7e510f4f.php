<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9c624eaa78525b70e2348b93248e856280e4cc07238f97493be91eca4c645c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3dc1667bfdc608b45626bf93732c2c39b85713546c51e313fcd120fe5ebd0680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc1667bfdc608b45626bf93732c2c39b85713546c51e313fcd120fe5ebd0680->enter($__internal_3dc1667bfdc608b45626bf93732c2c39b85713546c51e313fcd120fe5ebd0680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc1667bfdc608b45626bf93732c2c39b85713546c51e313fcd120fe5ebd0680->leave($__internal_3dc1667bfdc608b45626bf93732c2c39b85713546c51e313fcd120fe5ebd0680_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b475de0f29f5c660f4d492b4b3b5db125ac1b2d09d2ce06afc7748593910d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b475de0f29f5c660f4d492b4b3b5db125ac1b2d09d2ce06afc7748593910d39->enter($__internal_4b475de0f29f5c660f4d492b4b3b5db125ac1b2d09d2ce06afc7748593910d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4b475de0f29f5c660f4d492b4b3b5db125ac1b2d09d2ce06afc7748593910d39->leave($__internal_4b475de0f29f5c660f4d492b4b3b5db125ac1b2d09d2ce06afc7748593910d39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
