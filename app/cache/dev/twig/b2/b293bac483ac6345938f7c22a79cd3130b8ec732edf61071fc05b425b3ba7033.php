<?php

/* @Article/article/edit.html.twig */
class __TwigTemplate_6ae529815ae497a2b35d2f8109939ce9c509651df71ed5542581a4f9beb36774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/article/edit.html.twig", 1);
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
        $__internal_86ce25e8692a19999c2399d25390f6c72d319dd9be89f5baae99e094999c5fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ce25e8692a19999c2399d25390f6c72d319dd9be89f5baae99e094999c5fcb->enter($__internal_86ce25e8692a19999c2399d25390f6c72d319dd9be89f5baae99e094999c5fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ce25e8692a19999c2399d25390f6c72d319dd9be89f5baae99e094999c5fcb->leave($__internal_86ce25e8692a19999c2399d25390f6c72d319dd9be89f5baae99e094999c5fcb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca76ecb8e274c5e744e6ae47173f81ca94a392906d5fd3b062c41224628ac7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76ecb8e274c5e744e6ae47173f81ca94a392906d5fd3b062c41224628ac7ef->enter($__internal_ca76ecb8e274c5e744e6ae47173f81ca94a392906d5fd3b062c41224628ac7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/froala/froala.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
";
        
        $__internal_ca76ecb8e274c5e744e6ae47173f81ca94a392906d5fd3b062c41224628ac7ef->leave($__internal_ca76ecb8e274c5e744e6ae47173f81ca94a392906d5fd3b062c41224628ac7ef_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_85cf6cd5967380c72a3cf56d0c4663333797aa4780666df7dc740865617b4c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cf6cd5967380c72a3cf56d0c4663333797aa4780666df7dc740865617b4c23->enter($__internal_85cf6cd5967380c72a3cf56d0c4663333797aa4780666df7dc740865617b4c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Modification d'un article";
        
        $__internal_85cf6cd5967380c72a3cf56d0c4663333797aa4780666df7dc740865617b4c23->leave($__internal_85cf6cd5967380c72a3cf56d0c4663333797aa4780666df7dc740865617b4c23_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd99df3afc816130b125e0458b6ecc9e67ca53c4eb8cc8fe5c1f4ad1bfe5afcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd99df3afc816130b125e0458b6ecc9e67ca53c4eb8cc8fe5c1f4ad1bfe5afcb->enter($__internal_cd99df3afc816130b125e0458b6ecc9e67ca53c4eb8cc8fe5c1f4ad1bfe5afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">    
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <div class='text-center'>
                    <input class='btn btn-success' type=\"submit\" value=\"Enregister\" />
                </div>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_cd99df3afc816130b125e0458b6ecc9e67ca53c4eb8cc8fe5c1f4ad1bfe5afcb->leave($__internal_cd99df3afc816130b125e0458b6ecc9e67ca53c4eb8cc8fe5c1f4ad1bfe5afcb_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_190988661988556843e604185b08e6c6ceed6e45c7b38947e9a902a446c32ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190988661988556843e604185b08e6c6ceed6e45c7b38947e9a902a446c32ab9->enter($__internal_190988661988556843e604185b08e6c6ceed6e45c7b38947e9a902a446c32ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_190988661988556843e604185b08e6c6ceed6e45c7b38947e9a902a446c32ab9->leave($__internal_190988661988556843e604185b08e6c6ceed6e45c7b38947e9a902a446c32ab9_prof);

    }

    public function getTemplateName()
    {
        return "@Article/article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  127 => 28,  123 => 27,  118 => 26,  112 => 25,  101 => 21,  94 => 17,  90 => 16,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/froala/froala.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Article</a> /  Modification d'un article{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <div class='text-center'>
                    <input class='btn btn-success' type=\"submit\" value=\"Enregister\" />
                </div>
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/vendor/bootbox/bootbox.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/vendor/froala/froala.min.js')}}'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='{{asset('js/admin/article/init.js')}}'></script>
{% endblock %}
", "@Article/article/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\edit.html.twig");
    }
}
