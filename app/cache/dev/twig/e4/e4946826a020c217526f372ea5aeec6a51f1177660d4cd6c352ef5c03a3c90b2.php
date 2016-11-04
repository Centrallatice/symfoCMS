<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c10d57520c97a625db5d2b05e951108f7e0decd569083da013cedaee173880c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_56531539d28437753c5f11aa8faaa077da8e4c99a4c2b0bdead7c2806380e9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56531539d28437753c5f11aa8faaa077da8e4c99a4c2b0bdead7c2806380e9e1->enter($__internal_56531539d28437753c5f11aa8faaa077da8e4c99a4c2b0bdead7c2806380e9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56531539d28437753c5f11aa8faaa077da8e4c99a4c2b0bdead7c2806380e9e1->leave($__internal_56531539d28437753c5f11aa8faaa077da8e4c99a4c2b0bdead7c2806380e9e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6ab755721272863918566d27ba53f51e7206e659ca6ccd9b4240e9c5519a283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ab755721272863918566d27ba53f51e7206e659ca6ccd9b4240e9c5519a283->enter($__internal_b6ab755721272863918566d27ba53f51e7206e659ca6ccd9b4240e9c5519a283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b6ab755721272863918566d27ba53f51e7206e659ca6ccd9b4240e9c5519a283->leave($__internal_b6ab755721272863918566d27ba53f51e7206e659ca6ccd9b4240e9c5519a283_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
