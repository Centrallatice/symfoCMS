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
        $__internal_bc6fff451acac728da0d7beff65df2105983b1c48ccca3346407e041b91526a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6fff451acac728da0d7beff65df2105983b1c48ccca3346407e041b91526a5->enter($__internal_bc6fff451acac728da0d7beff65df2105983b1c48ccca3346407e041b91526a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6fff451acac728da0d7beff65df2105983b1c48ccca3346407e041b91526a5->leave($__internal_bc6fff451acac728da0d7beff65df2105983b1c48ccca3346407e041b91526a5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d37c97fb0f058b4b4877e645a65d8f09d19f19ab5b0eb1d6e9e6aa1af061640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d37c97fb0f058b4b4877e645a65d8f09d19f19ab5b0eb1d6e9e6aa1af061640->enter($__internal_3d37c97fb0f058b4b4877e645a65d8f09d19f19ab5b0eb1d6e9e6aa1af061640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        
        $__internal_3d37c97fb0f058b4b4877e645a65d8f09d19f19ab5b0eb1d6e9e6aa1af061640->leave($__internal_3d37c97fb0f058b4b4877e645a65d8f09d19f19ab5b0eb1d6e9e6aa1af061640_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f8eda830b21bd8af58d09e14c6bc5ab4e4838dbb2ccc8f5afaaed4d4247ff26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eda830b21bd8af58d09e14c6bc5ab4e4838dbb2ccc8f5afaaed4d4247ff26e->enter($__internal_f8eda830b21bd8af58d09e14c6bc5ab4e4838dbb2ccc8f5afaaed4d4247ff26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_f8eda830b21bd8af58d09e14c6bc5ab4e4838dbb2ccc8f5afaaed4d4247ff26e->leave($__internal_f8eda830b21bd8af58d09e14c6bc5ab4e4838dbb2ccc8f5afaaed4d4247ff26e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e51f43337e84fa8d8cd12144d67487cccc58a5a7a304b6b2dd16a14b8ad0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e51f43337e84fa8d8cd12144d67487cccc58a5a7a304b6b2dd16a14b8ad0a3->enter($__internal_c2e51f43337e84fa8d8cd12144d67487cccc58a5a7a304b6b2dd16a14b8ad0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        $this->loadTemplate("::formback.html.twig", "@Article/article/new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
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
        
        $__internal_c2e51f43337e84fa8d8cd12144d67487cccc58a5a7a304b6b2dd16a14b8ad0a3->leave($__internal_c2e51f43337e84fa8d8cd12144d67487cccc58a5a7a304b6b2dd16a14b8ad0a3_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39e3effd7b042ee4308f2285e8546d3e6c1742944051c87ab2f2ddaf2e3f5071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e3effd7b042ee4308f2285e8546d3e6c1742944051c87ab2f2ddaf2e3f5071->enter($__internal_39e3effd7b042ee4308f2285e8546d3e6c1742944051c87ab2f2ddaf2e3f5071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/new.html.twig"));

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
        
        $__internal_39e3effd7b042ee4308f2285e8546d3e6c1742944051c87ab2f2ddaf2e3f5071->leave($__internal_39e3effd7b042ee4308f2285e8546d3e6c1742944051c87ab2f2ddaf2e3f5071_prof);

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
{% endblock %}", "@Article/article/new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\new.html.twig");
    }
}
