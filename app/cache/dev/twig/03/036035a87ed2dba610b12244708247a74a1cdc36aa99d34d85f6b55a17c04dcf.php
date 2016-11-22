<?php

/* ArticleBundle:Article:new.html.twig */
class __TwigTemplate_94f3a4fceeea11a2eb4a168950b6a52fc47d4019f41a1856aefba1e6c2ad27a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:Article:new.html.twig", 1);
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
        $__internal_84b253d05f9631066e926aeadec8bd23a92ad7918977944636c1ab8a4d9ecaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b253d05f9631066e926aeadec8bd23a92ad7918977944636c1ab8a4d9ecaf4->enter($__internal_84b253d05f9631066e926aeadec8bd23a92ad7918977944636c1ab8a4d9ecaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b253d05f9631066e926aeadec8bd23a92ad7918977944636c1ab8a4d9ecaf4->leave($__internal_84b253d05f9631066e926aeadec8bd23a92ad7918977944636c1ab8a4d9ecaf4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af501229f809fbde20327be708a67b4fc81d49b75beeed9f96bf2c8fd869c00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af501229f809fbde20327be708a67b4fc81d49b75beeed9f96bf2c8fd869c00c->enter($__internal_af501229f809fbde20327be708a67b4fc81d49b75beeed9f96bf2c8fd869c00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_af501229f809fbde20327be708a67b4fc81d49b75beeed9f96bf2c8fd869c00c->leave($__internal_af501229f809fbde20327be708a67b4fc81d49b75beeed9f96bf2c8fd869c00c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_485a1087b986b3b79562e7d59eba38f8912eece33be838e1ebb6ec9d56644253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a1087b986b3b79562e7d59eba38f8912eece33be838e1ebb6ec9d56644253->enter($__internal_485a1087b986b3b79562e7d59eba38f8912eece33be838e1ebb6ec9d56644253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a>
    <a class=\"breadcrumb\" href=\"#\">Créer un article</a>
";
        
        $__internal_485a1087b986b3b79562e7d59eba38f8912eece33be838e1ebb6ec9d56644253->leave($__internal_485a1087b986b3b79562e7d59eba38f8912eece33be838e1ebb6ec9d56644253_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0831cb470e16c89af758769d275c81728a65692929feebf1c69c1fce0ec1adbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0831cb470e16c89af758769d275c81728a65692929feebf1c69c1fce0ec1adbf->enter($__internal_0831cb470e16c89af758769d275c81728a65692929feebf1c69c1fce0ec1adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 17
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:Article:new.html.twig", 17)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 18
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
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
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
        
";
        
        $__internal_0831cb470e16c89af758769d275c81728a65692929feebf1c69c1fce0ec1adbf->leave($__internal_0831cb470e16c89af758769d275c81728a65692929feebf1c69c1fce0ec1adbf_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2a4d1384eb13cdd44bb25fb20d8c10769487728b729c5d9dcc8a023a3af5301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a4d1384eb13cdd44bb25fb20d8c10769487728b729c5d9dcc8a023a3af5301->enter($__internal_f2a4d1384eb13cdd44bb25fb20d8c10769487728b729c5d9dcc8a023a3af5301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_f2a4d1384eb13cdd44bb25fb20d8c10769487728b729c5d9dcc8a023a3af5301->leave($__internal_f2a4d1384eb13cdd44bb25fb20d8c10769487728b729c5d9dcc8a023a3af5301_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 44,  143 => 41,  139 => 40,  134 => 39,  128 => 38,  116 => 33,  101 => 21,  97 => 20,  93 => 18,  91 => 17,  85 => 14,  81 => 12,  75 => 11,  64 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('admin_article_index') }}\">Article</a>
    <a class=\"breadcrumb\" href=\"#\">Créer un article</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
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
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
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
{% endblock %}", "ArticleBundle:Article:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/Article/new.html.twig");
    }
}
