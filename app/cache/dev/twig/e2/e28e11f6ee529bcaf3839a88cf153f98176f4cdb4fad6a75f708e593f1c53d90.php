<?php

/* ArticleBundle:article:new.html.twig */
class __TwigTemplate_2d831c82bb793e9cc69028635c5062a83547b7c7cec410f6a7293c782b7195a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:article:new.html.twig", 1);
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
        $__internal_9e5fc667b6cfc6da0454691274414c25671578c5b5b9c3a20696c8046a2e83c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5fc667b6cfc6da0454691274414c25671578c5b5b9c3a20696c8046a2e83c5->enter($__internal_9e5fc667b6cfc6da0454691274414c25671578c5b5b9c3a20696c8046a2e83c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5fc667b6cfc6da0454691274414c25671578c5b5b9c3a20696c8046a2e83c5->leave($__internal_9e5fc667b6cfc6da0454691274414c25671578c5b5b9c3a20696c8046a2e83c5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb64c7f3a6f681752d77a18ba5e598ef98570bb64aced984ab851e07c6dd211c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb64c7f3a6f681752d77a18ba5e598ef98570bb64aced984ab851e07c6dd211c->enter($__internal_eb64c7f3a6f681752d77a18ba5e598ef98570bb64aced984ab851e07c6dd211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

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
        
        $__internal_eb64c7f3a6f681752d77a18ba5e598ef98570bb64aced984ab851e07c6dd211c->leave($__internal_eb64c7f3a6f681752d77a18ba5e598ef98570bb64aced984ab851e07c6dd211c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3762c0b696251a823983c8e1f5f1a495c1d7121101bc2ce67ae89f51ab5a5e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3762c0b696251a823983c8e1f5f1a495c1d7121101bc2ce67ae89f51ab5a5e36->enter($__internal_3762c0b696251a823983c8e1f5f1a495c1d7121101bc2ce67ae89f51ab5a5e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_3762c0b696251a823983c8e1f5f1a495c1d7121101bc2ce67ae89f51ab5a5e36->leave($__internal_3762c0b696251a823983c8e1f5f1a495c1d7121101bc2ce67ae89f51ab5a5e36_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2dcf0ee2ee11d69f9c6c0847c78f61759ce88edfc99fdcf337a0403c4a07506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dcf0ee2ee11d69f9c6c0847c78f61759ce88edfc99fdcf337a0403c4a07506->enter($__internal_c2dcf0ee2ee11d69f9c6c0847c78f61759ce88edfc99fdcf337a0403c4a07506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input  class=\"btn btn-success\" type=\"submit\" value=\"Enregistrer\" />
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
        
";
        
        $__internal_c2dcf0ee2ee11d69f9c6c0847c78f61759ce88edfc99fdcf337a0403c4a07506->leave($__internal_c2dcf0ee2ee11d69f9c6c0847c78f61759ce88edfc99fdcf337a0403c4a07506_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5041b873e8308df80f63239c6410838edd9852ab8be7fe0bd9b234336a31362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5041b873e8308df80f63239c6410838edd9852ab8be7fe0bd9b234336a31362c->enter($__internal_5041b873e8308df80f63239c6410838edd9852ab8be7fe0bd9b234336a31362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_5041b873e8308df80f63239c6410838edd9852ab8be7fe0bd9b234336a31362c->leave($__internal_5041b873e8308df80f63239c6410838edd9852ab8be7fe0bd9b234336a31362c_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 30,  126 => 27,  122 => 26,  117 => 25,  111 => 24,  99 => 19,  94 => 17,  90 => 16,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Article</a> /  Créer un article{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input  class=\"btn btn-success\" type=\"submit\" value=\"Enregistrer\" />
            {{ form_end(form) }}
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
{% endblock %}", "ArticleBundle:article:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/article/new.html.twig");
    }
}
