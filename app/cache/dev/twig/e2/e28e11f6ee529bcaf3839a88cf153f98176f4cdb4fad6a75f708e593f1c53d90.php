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
        $__internal_dcdad8c85f427bff92f23446780662084c0465348a5e2f102a894abb1a4e784d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdad8c85f427bff92f23446780662084c0465348a5e2f102a894abb1a4e784d->enter($__internal_dcdad8c85f427bff92f23446780662084c0465348a5e2f102a894abb1a4e784d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcdad8c85f427bff92f23446780662084c0465348a5e2f102a894abb1a4e784d->leave($__internal_dcdad8c85f427bff92f23446780662084c0465348a5e2f102a894abb1a4e784d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8df2416cba62a235abb108af58d85a238f95786918ae9c3ba8a200f29d323201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df2416cba62a235abb108af58d85a238f95786918ae9c3ba8a200f29d323201->enter($__internal_8df2416cba62a235abb108af58d85a238f95786918ae9c3ba8a200f29d323201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

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
        
        $__internal_8df2416cba62a235abb108af58d85a238f95786918ae9c3ba8a200f29d323201->leave($__internal_8df2416cba62a235abb108af58d85a238f95786918ae9c3ba8a200f29d323201_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_89da6b752aba9781cc3844de0f94c5999ea84665c3b763d637f2ba72dced494d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89da6b752aba9781cc3844de0f94c5999ea84665c3b763d637f2ba72dced494d->enter($__internal_89da6b752aba9781cc3844de0f94c5999ea84665c3b763d637f2ba72dced494d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_89da6b752aba9781cc3844de0f94c5999ea84665c3b763d637f2ba72dced494d->leave($__internal_89da6b752aba9781cc3844de0f94c5999ea84665c3b763d637f2ba72dced494d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf585e823dddc9634253109041776c9716ecf0b069e525ffc8f1c2989f34074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf585e823dddc9634253109041776c9716ecf0b069e525ffc8f1c2989f34074->enter($__internal_4cf585e823dddc9634253109041776c9716ecf0b069e525ffc8f1c2989f34074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 14
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:article:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                
                <label class=\"control-label required\" for=\"articlebundle_page_kw\">Mots-clés</label>  
                <div class=\"tagify-container\">
                    <input type=\"text\" id=\"articlebundle_page_kw_fake\" class=\"form-control\">
                </div>
                <input type=\"hidden\" 
                    name=\"articlebundle_page_final\" 
                    id=\"articlebundle_page_final\">
                <br />
                <input class=\"btn btn-success pull-right\" type=\"submit\" value=\"Enregistrer\" />
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
        
";
        
        $__internal_4cf585e823dddc9634253109041776c9716ecf0b069e525ffc8f1c2989f34074->leave($__internal_4cf585e823dddc9634253109041776c9716ecf0b069e525ffc8f1c2989f34074_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_197a56b9141683f007bb29f6163c36807220e818af37c8ca5f54eae5a07cd380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197a56b9141683f007bb29f6163c36807220e818af37c8ca5f54eae5a07cd380->enter($__internal_197a56b9141683f007bb29f6163c36807220e818af37c8ca5f54eae5a07cd380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:new.html.twig"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_197a56b9141683f007bb29f6163c36807220e818af37c8ca5f54eae5a07cd380->leave($__internal_197a56b9141683f007bb29f6163c36807220e818af37c8ca5f54eae5a07cd380_prof);

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
        return array (  145 => 40,  139 => 37,  135 => 36,  130 => 35,  124 => 34,  112 => 29,  98 => 18,  94 => 17,  90 => 15,  88 => 14,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                
                <label class=\"control-label required\" for=\"articlebundle_page_kw\">Mots-clés</label>  
                <div class=\"tagify-container\">
                    <input type=\"text\" id=\"articlebundle_page_kw_fake\" class=\"form-control\">
                </div>
                <input type=\"hidden\" 
                    name=\"articlebundle_page_final\" 
                    id=\"articlebundle_page_final\">
                <br />
                <input class=\"btn btn-success pull-right\" type=\"submit\" value=\"Enregistrer\" />
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
