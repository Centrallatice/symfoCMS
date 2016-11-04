<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_069752483b60b9040c5875f5a8e0bc95a53025b247cdcd872aec0aa1a54880c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f024ae408a9c5028d8b3c7d12b5cb3230dcfc2851b273a8f41302e35963f73f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f024ae408a9c5028d8b3c7d12b5cb3230dcfc2851b273a8f41302e35963f73f0->enter($__internal_f024ae408a9c5028d8b3c7d12b5cb3230dcfc2851b273a8f41302e35963f73f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f024ae408a9c5028d8b3c7d12b5cb3230dcfc2851b273a8f41302e35963f73f0->leave($__internal_f024ae408a9c5028d8b3c7d12b5cb3230dcfc2851b273a8f41302e35963f73f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de0f948cd51cdfeab496b974aef0f2712339bf497ae5fc08b1d430891741bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0f948cd51cdfeab496b974aef0f2712339bf497ae5fc08b1d430891741bd9c->enter($__internal_de0f948cd51cdfeab496b974aef0f2712339bf497ae5fc08b1d430891741bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_de0f948cd51cdfeab496b974aef0f2712339bf497ae5fc08b1d430891741bd9c->leave($__internal_de0f948cd51cdfeab496b974aef0f2712339bf497ae5fc08b1d430891741bd9c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
