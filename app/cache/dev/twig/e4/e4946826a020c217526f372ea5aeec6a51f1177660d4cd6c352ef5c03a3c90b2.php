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
        $__internal_14bef216b8166127e2e8e506a40fa3633e15058e2c4da264f1a58a3e2498ea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bef216b8166127e2e8e506a40fa3633e15058e2c4da264f1a58a3e2498ea44->enter($__internal_14bef216b8166127e2e8e506a40fa3633e15058e2c4da264f1a58a3e2498ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14bef216b8166127e2e8e506a40fa3633e15058e2c4da264f1a58a3e2498ea44->leave($__internal_14bef216b8166127e2e8e506a40fa3633e15058e2c4da264f1a58a3e2498ea44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e96b61f964ee8f3c414d9cd7dce42399ff30b692616faa7d14313af6e78c71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e96b61f964ee8f3c414d9cd7dce42399ff30b692616faa7d14313af6e78c71a->enter($__internal_4e96b61f964ee8f3c414d9cd7dce42399ff30b692616faa7d14313af6e78c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4e96b61f964ee8f3c414d9cd7dce42399ff30b692616faa7d14313af6e78c71a->leave($__internal_4e96b61f964ee8f3c414d9cd7dce42399ff30b692616faa7d14313af6e78c71a_prof);

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
