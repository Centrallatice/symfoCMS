<?php

/* @PageViews/page\new.html.twig */
class __TwigTemplate_d6f9771cd9e18a8ea42ee519667bd27bbf1442b64ee8b105c2b352ece9d35e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/page\\new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a9f19522e012f9d66a44919f90bb85d3a16d882dc056ca42af027e8f0643a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9f19522e012f9d66a44919f90bb85d3a16d882dc056ca42af027e8f0643a47->enter($__internal_1a9f19522e012f9d66a44919f90bb85d3a16d882dc056ca42af027e8f0643a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9f19522e012f9d66a44919f90bb85d3a16d882dc056ca42af027e8f0643a47->leave($__internal_1a9f19522e012f9d66a44919f90bb85d3a16d882dc056ca42af027e8f0643a47_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b5552198e21b113b26ebb8a05f896ed8a331ae184e66eb48e0d10d11e951b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5552198e21b113b26ebb8a05f896ed8a331ae184e66eb48e0d10d11e951b41->enter($__internal_5b5552198e21b113b26ebb8a05f896ed8a331ae184e66eb48e0d10d11e951b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5b5552198e21b113b26ebb8a05f896ed8a331ae184e66eb48e0d10d11e951b41->leave($__internal_5b5552198e21b113b26ebb8a05f896ed8a331ae184e66eb48e0d10d11e951b41_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bd7c9f6dab36a2281e2cb98dbfe6256d11911e7c110b586a8d81533e8ba264b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7c9f6dab36a2281e2cb98dbfe6256d11911e7c110b586a8d81533e8ba264b9->enter($__internal_bd7c9f6dab36a2281e2cb98dbfe6256d11911e7c110b586a8d81533e8ba264b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Ajout d'une nouvelle page";
        
        $__internal_bd7c9f6dab36a2281e2cb98dbfe6256d11911e7c110b586a8d81533e8ba264b9->leave($__internal_bd7c9f6dab36a2281e2cb98dbfe6256d11911e7c110b586a8d81533e8ba264b9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d7ffba0cd2c1f5bb065abef17f2f7cd12829db5737c14f5712da7a8d593eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d7ffba0cd2c1f5bb065abef17f2f7cd12829db5737c14f5712da7a8d593eba->enter($__internal_08d7ffba0cd2c1f5bb065abef17f2f7cd12829db5737c14f5712da7a8d593eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 14
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "@PageViews/page\\new.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
    </div>
";
        
        $__internal_08d7ffba0cd2c1f5bb065abef17f2f7cd12829db5737c14f5712da7a8d593eba->leave($__internal_08d7ffba0cd2c1f5bb065abef17f2f7cd12829db5737c14f5712da7a8d593eba_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94363d83730a04928dfcff3113749605cc990cc23e40d90814e240cd6074fa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94363d83730a04928dfcff3113749605cc990cc23e40d90814e240cd6074fa34->enter($__internal_94363d83730a04928dfcff3113749605cc990cc23e40d90814e240cd6074fa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_94363d83730a04928dfcff3113749605cc990cc23e40d90814e240cd6074fa34->leave($__internal_94363d83730a04928dfcff3113749605cc990cc23e40d90814e240cd6074fa34_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page\\new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  96 => 18,  87 => 15,  85 => 14,  77 => 9,  73 => 7,  67 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::admin.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('page_list') }}\">Pages</a> /  Ajout d'une nouvelle page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('page_list') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% include \"@PageViews/page/tabs/seo.html.twig\" %}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "@PageViews/page\\new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\new.html.twig");
    }
}
