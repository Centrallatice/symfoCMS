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
        $__internal_cf8df97248a7c0768c65da265e3115368220364eeff365359964514a84105093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8df97248a7c0768c65da265e3115368220364eeff365359964514a84105093->enter($__internal_cf8df97248a7c0768c65da265e3115368220364eeff365359964514a84105093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf8df97248a7c0768c65da265e3115368220364eeff365359964514a84105093->leave($__internal_cf8df97248a7c0768c65da265e3115368220364eeff365359964514a84105093_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cf2fe7a9d766f82131bdbfd24153a7f767bf2ec07ad962add62e27b9066afae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf2fe7a9d766f82131bdbfd24153a7f767bf2ec07ad962add62e27b9066afae->enter($__internal_1cf2fe7a9d766f82131bdbfd24153a7f767bf2ec07ad962add62e27b9066afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1cf2fe7a9d766f82131bdbfd24153a7f767bf2ec07ad962add62e27b9066afae->leave($__internal_1cf2fe7a9d766f82131bdbfd24153a7f767bf2ec07ad962add62e27b9066afae_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6e6713c70a48958b971a6cf99cdc1898232b15fc183b0abb448dd8dfad48f3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6713c70a48958b971a6cf99cdc1898232b15fc183b0abb448dd8dfad48f3e0->enter($__internal_6e6713c70a48958b971a6cf99cdc1898232b15fc183b0abb448dd8dfad48f3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Ajout d'une nouvelle page";
        
        $__internal_6e6713c70a48958b971a6cf99cdc1898232b15fc183b0abb448dd8dfad48f3e0->leave($__internal_6e6713c70a48958b971a6cf99cdc1898232b15fc183b0abb448dd8dfad48f3e0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e9a86c4c81f42d1203da12023807d2c451f6ced688b6f15671678b378c9a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e9a86c4c81f42d1203da12023807d2c451f6ced688b6f15671678b378c9a9f->enter($__internal_f1e9a86c4c81f42d1203da12023807d2c451f6ced688b6f15671678b378c9a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 12
        $this->loadTemplate("::formback.html.twig", "PageBundle:page:new.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 15
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:new.html.twig", 15)->display($context);
        // line 16
        echo "        </div>
    </div>
";
        
        $__internal_f1e9a86c4c81f42d1203da12023807d2c451f6ced688b6f15671678b378c9a9f->leave($__internal_f1e9a86c4c81f42d1203da12023807d2c451f6ced688b6f15671678b378c9a9f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d31e9042111bbaf07ae9a776e1fd8170ed99f14b874d461f81ae5b7c021679ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31e9042111bbaf07ae9a776e1fd8170ed99f14b874d461f81ae5b7c021679ab->enter($__internal_d31e9042111bbaf07ae9a776e1fd8170ed99f14b874d461f81ae5b7c021679ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:new.html.twig"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_d31e9042111bbaf07ae9a776e1fd8170ed99f14b874d461f81ae5b7c021679ab->leave($__internal_d31e9042111bbaf07ae9a776e1fd8170ed99f14b874d461f81ae5b7c021679ab_prof);

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
        return array (  111 => 21,  106 => 20,  100 => 19,  91 => 16,  89 => 15,  85 => 13,  83 => 12,  77 => 9,  73 => 7,  67 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% include \"@PageViews/page/tabs/seo.html.twig\" %}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/admin/page/generator.js')}}'></script>
{% endblock %}", "PageBundle:page:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/new.html.twig");
    }
}
