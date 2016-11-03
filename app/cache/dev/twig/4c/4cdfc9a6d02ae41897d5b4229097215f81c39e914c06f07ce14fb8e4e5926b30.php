<?php

/* PageBundle:page:new.html.twig */
class __TwigTemplate_244a9b91a18059be857a264dfe45ff75cd5bb32a14c0ca23d81a02a65734fa6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:page:new.html.twig", 1);
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
        $__internal_30a0ee18b7de823f12f9893e4f46a155275ee7876edfbfd639a38f050e054a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a0ee18b7de823f12f9893e4f46a155275ee7876edfbfd639a38f050e054a12->enter($__internal_30a0ee18b7de823f12f9893e4f46a155275ee7876edfbfd639a38f050e054a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a0ee18b7de823f12f9893e4f46a155275ee7876edfbfd639a38f050e054a12->leave($__internal_30a0ee18b7de823f12f9893e4f46a155275ee7876edfbfd639a38f050e054a12_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4ddef5b395dac74268acf7e546a2414c266a55c8a6589f284044e4ebdebb4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ddef5b395dac74268acf7e546a2414c266a55c8a6589f284044e4ebdebb4ee->enter($__internal_f4ddef5b395dac74268acf7e546a2414c266a55c8a6589f284044e4ebdebb4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f4ddef5b395dac74268acf7e546a2414c266a55c8a6589f284044e4ebdebb4ee->leave($__internal_f4ddef5b395dac74268acf7e546a2414c266a55c8a6589f284044e4ebdebb4ee_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_95525a339f1f92c4f3c31d2356785b92c46de7c115ca5a5e82a1d35de1425932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95525a339f1f92c4f3c31d2356785b92c46de7c115ca5a5e82a1d35de1425932->enter($__internal_95525a339f1f92c4f3c31d2356785b92c46de7c115ca5a5e82a1d35de1425932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Ajout d'une nouvelle page";
        
        $__internal_95525a339f1f92c4f3c31d2356785b92c46de7c115ca5a5e82a1d35de1425932->leave($__internal_95525a339f1f92c4f3c31d2356785b92c46de7c115ca5a5e82a1d35de1425932_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_38ca178c11b3b008fee62f15243d25f0bd5b66ca5609e7a2453422ed3ea688af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ca178c11b3b008fee62f15243d25f0bd5b66ca5609e7a2453422ed3ea688af->enter($__internal_38ca178c11b3b008fee62f15243d25f0bd5b66ca5609e7a2453422ed3ea688af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

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
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:new.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
    </div>
";
        
        $__internal_38ca178c11b3b008fee62f15243d25f0bd5b66ca5609e7a2453422ed3ea688af->leave($__internal_38ca178c11b3b008fee62f15243d25f0bd5b66ca5609e7a2453422ed3ea688af_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_431f31327f7d4db00f58494f9f50aed3c52e56c503f13ad8bb6c74d469ba54db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431f31327f7d4db00f58494f9f50aed3c52e56c503f13ad8bb6c74d469ba54db->enter($__internal_431f31327f7d4db00f58494f9f50aed3c52e56c503f13ad8bb6c74d469ba54db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_431f31327f7d4db00f58494f9f50aed3c52e56c503f13ad8bb6c74d469ba54db->leave($__internal_431f31327f7d4db00f58494f9f50aed3c52e56c503f13ad8bb6c74d469ba54db_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page:new.html.twig";
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
{% endblock %}", "PageBundle:page:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/new.html.twig");
    }
}
