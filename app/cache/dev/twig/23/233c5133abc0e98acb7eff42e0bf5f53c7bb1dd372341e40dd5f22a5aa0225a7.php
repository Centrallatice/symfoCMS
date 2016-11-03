<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_badf537d9d46e78dc20667da01a6068b61f5c95855d576ddcad53eeec7d28c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_caa7df296c2c5f57728510a895fe0b35c1996c601182a30b521302f2b29c1322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa7df296c2c5f57728510a895fe0b35c1996c601182a30b521302f2b29c1322->enter($__internal_caa7df296c2c5f57728510a895fe0b35c1996c601182a30b521302f2b29c1322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa7df296c2c5f57728510a895fe0b35c1996c601182a30b521302f2b29c1322->leave($__internal_caa7df296c2c5f57728510a895fe0b35c1996c601182a30b521302f2b29c1322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f025f20f4404aa12246d8eac85274bf7429537912c6a3823a12d5cc91f907d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f025f20f4404aa12246d8eac85274bf7429537912c6a3823a12d5cc91f907d71->enter($__internal_f025f20f4404aa12246d8eac85274bf7429537912c6a3823a12d5cc91f907d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f025f20f4404aa12246d8eac85274bf7429537912c6a3823a12d5cc91f907d71->leave($__internal_f025f20f4404aa12246d8eac85274bf7429537912c6a3823a12d5cc91f907d71_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
