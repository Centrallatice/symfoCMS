<?php

/* @Article/category/edit.html.twig */
class __TwigTemplate_deae6ba22c64de1e9b03a512557538005258aa470c47f845d9cc9954093cd014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/category/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c401ca629ab8b367e1af8c68c8218d843155e2531382bd13c984fd2b2eee2f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c401ca629ab8b367e1af8c68c8218d843155e2531382bd13c984fd2b2eee2f42->enter($__internal_c401ca629ab8b367e1af8c68c8218d843155e2531382bd13c984fd2b2eee2f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c401ca629ab8b367e1af8c68c8218d843155e2531382bd13c984fd2b2eee2f42->leave($__internal_c401ca629ab8b367e1af8c68c8218d843155e2531382bd13c984fd2b2eee2f42_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a29f23976e2e4a22cf78c7c867df1891df6162a7fe52d4e71a2e9a112ee6c79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29f23976e2e4a22cf78c7c867df1891df6162a7fe52d4e71a2e9a112ee6c79b->enter($__internal_a29f23976e2e4a22cf78c7c867df1891df6162a7fe52d4e71a2e9a112ee6c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/edit.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a29f23976e2e4a22cf78c7c867df1891df6162a7fe52d4e71a2e9a112ee6c79b->leave($__internal_a29f23976e2e4a22cf78c7c867df1891df6162a7fe52d4e71a2e9a112ee6c79b_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_eca57a95e3183dfb5654d9df56f53ad9d88e582a5d4c5c90a6a459100b973ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca57a95e3183dfb5654d9df56f53ad9d88e582a5d4c5c90a6a459100b973ad8->enter($__internal_eca57a95e3183dfb5654d9df56f53ad9d88e582a5d4c5c90a6a459100b973ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Catégorie</a> /  Modification d'une catégorie";
        
        $__internal_eca57a95e3183dfb5654d9df56f53ad9d88e582a5d4c5c90a6a459100b973ad8->leave($__internal_eca57a95e3183dfb5654d9df56f53ad9d88e582a5d4c5c90a6a459100b973ad8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_642fae4a339498fe96d002a0386c62b8251b1e99660bb59984fbe36ad0a047f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642fae4a339498fe96d002a0386c62b8251b1e99660bb59984fbe36ad0a047f0->enter($__internal_642fae4a339498fe96d002a0386c62b8251b1e99660bb59984fbe36ad0a047f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/edit.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 12
        $this->loadTemplate("::formback.html.twig", "@Article/category/edit.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
        // line 13
        echo "     <div class=\"row\">
        <div class=\"col-xs-12\">    
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_642fae4a339498fe96d002a0386c62b8251b1e99660bb59984fbe36ad0a047f0->leave($__internal_642fae4a339498fe96d002a0386c62b8251b1e99660bb59984fbe36ad0a047f0_prof);

    }

    public function getTemplateName()
    {
        return "@Article/category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  92 => 16,  88 => 15,  84 => 13,  82 => 12,  76 => 9,  72 => 7,  66 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Catégorie</a> /  Modification d'une catégorie{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":edit_form} %}
     <div class=\"row\">
        <div class=\"col-xs-12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
", "@Article/category/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\category\\edit.html.twig");
    }
}
