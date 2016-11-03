<?php

/* @Article/article/new.html.twig */
class __TwigTemplate_1a9da81cf983d006f41971b7f89c1d3753df37a54f19b98039fd7f9ecc1e844d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/article/new.html.twig", 1);
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
        $__internal_e91e4ce2f7e188e75d2146559dc5ef3f7deb4c02914c8f5ae300d2ed447fedeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91e4ce2f7e188e75d2146559dc5ef3f7deb4c02914c8f5ae300d2ed447fedeb->enter($__internal_e91e4ce2f7e188e75d2146559dc5ef3f7deb4c02914c8f5ae300d2ed447fedeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91e4ce2f7e188e75d2146559dc5ef3f7deb4c02914c8f5ae300d2ed447fedeb->leave($__internal_e91e4ce2f7e188e75d2146559dc5ef3f7deb4c02914c8f5ae300d2ed447fedeb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a411dbd6e912de534f7b9d0fb02e524940a3cee1c32b5a3a2417127ed2472a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a411dbd6e912de534f7b9d0fb02e524940a3cee1c32b5a3a2417127ed2472a5->enter($__internal_4a411dbd6e912de534f7b9d0fb02e524940a3cee1c32b5a3a2417127ed2472a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        
        $__internal_4a411dbd6e912de534f7b9d0fb02e524940a3cee1c32b5a3a2417127ed2472a5->leave($__internal_4a411dbd6e912de534f7b9d0fb02e524940a3cee1c32b5a3a2417127ed2472a5_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c5c15e93602447f5d87d140dac5feb91326ef17c12bbfebc4bd9b24a591d3405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c15e93602447f5d87d140dac5feb91326ef17c12bbfebc4bd9b24a591d3405->enter($__internal_c5c15e93602447f5d87d140dac5feb91326ef17c12bbfebc4bd9b24a591d3405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_c5c15e93602447f5d87d140dac5feb91326ef17c12bbfebc4bd9b24a591d3405->leave($__internal_c5c15e93602447f5d87d140dac5feb91326ef17c12bbfebc4bd9b24a591d3405_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_efcb93e6c73effb14a1b68ca92d0d394a7eb702a81061fd26a216cfcb82182df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcb93e6c73effb14a1b68ca92d0d394a7eb702a81061fd26a216cfcb82182df->enter($__internal_efcb93e6c73effb14a1b68ca92d0d394a7eb702a81061fd26a216cfcb82182df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        
        $__internal_efcb93e6c73effb14a1b68ca92d0d394a7eb702a81061fd26a216cfcb82182df->leave($__internal_efcb93e6c73effb14a1b68ca92d0d394a7eb702a81061fd26a216cfcb82182df_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a389ed755e1160079d0362a332ea05358d81f99d893f9fdd58b431c26088a397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a389ed755e1160079d0362a332ea05358d81f99d893f9fdd58b431c26088a397->enter($__internal_a389ed755e1160079d0362a332ea05358d81f99d893f9fdd58b431c26088a397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        
        $__internal_a389ed755e1160079d0362a332ea05358d81f99d893f9fdd58b431c26088a397->leave($__internal_a389ed755e1160079d0362a332ea05358d81f99d893f9fdd58b431c26088a397_prof);

    }

    public function getTemplateName()
    {
        return "@Article/article/new.html.twig";
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
{% endblock %}", "@Article/article/new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\new.html.twig");
    }
}
