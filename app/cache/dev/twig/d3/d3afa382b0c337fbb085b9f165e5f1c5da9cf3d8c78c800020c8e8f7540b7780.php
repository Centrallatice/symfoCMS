<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_69a34704d7a973e0dec8f5e6155809eee526017d8bc130f2d454b137cb2476a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_063bed5edf96d795e4be80129e6befadd0eb113f14d1a721fab2ed884807c56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063bed5edf96d795e4be80129e6befadd0eb113f14d1a721fab2ed884807c56f->enter($__internal_063bed5edf96d795e4be80129e6befadd0eb113f14d1a721fab2ed884807c56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063bed5edf96d795e4be80129e6befadd0eb113f14d1a721fab2ed884807c56f->leave($__internal_063bed5edf96d795e4be80129e6befadd0eb113f14d1a721fab2ed884807c56f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72cbc3af8bf4eb47ecd226110c13668e19e9944f9a599dfaf0d010b1d7c77199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cbc3af8bf4eb47ecd226110c13668e19e9944f9a599dfaf0d010b1d7c77199->enter($__internal_72cbc3af8bf4eb47ecd226110c13668e19e9944f9a599dfaf0d010b1d7c77199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_72cbc3af8bf4eb47ecd226110c13668e19e9944f9a599dfaf0d010b1d7c77199->leave($__internal_72cbc3af8bf4eb47ecd226110c13668e19e9944f9a599dfaf0d010b1d7c77199_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
