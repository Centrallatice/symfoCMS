<?php

/* PageBundle:page:new.html.twig */
class __TwigTemplate_caccf4a53e5a0279d3570152f33960205805dbb103301248055739d94a49d457 extends Twig_Template
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
        $__internal_cc2071421e9ab9daa8ff9e862c00415675d801c5155aafa9719d5a5c91ea624b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2071421e9ab9daa8ff9e862c00415675d801c5155aafa9719d5a5c91ea624b->enter($__internal_cc2071421e9ab9daa8ff9e862c00415675d801c5155aafa9719d5a5c91ea624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2071421e9ab9daa8ff9e862c00415675d801c5155aafa9719d5a5c91ea624b->leave($__internal_cc2071421e9ab9daa8ff9e862c00415675d801c5155aafa9719d5a5c91ea624b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02111749a07f36c0f27d0844404c023109729e7db258114c6412866224f149fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02111749a07f36c0f27d0844404c023109729e7db258114c6412866224f149fa->enter($__internal_02111749a07f36c0f27d0844404c023109729e7db258114c6412866224f149fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_02111749a07f36c0f27d0844404c023109729e7db258114c6412866224f149fa->leave($__internal_02111749a07f36c0f27d0844404c023109729e7db258114c6412866224f149fa_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a1c467d59b9723914915dd48debe8645769a6f07c707a3e9acd9579379555590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c467d59b9723914915dd48debe8645769a6f07c707a3e9acd9579379555590->enter($__internal_a1c467d59b9723914915dd48debe8645769a6f07c707a3e9acd9579379555590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Ajout d'une nouvelle page</a>
";
        
        $__internal_a1c467d59b9723914915dd48debe8645769a6f07c707a3e9acd9579379555590->leave($__internal_a1c467d59b9723914915dd48debe8645769a6f07c707a3e9acd9579379555590_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b69f3dd5fe8a51b0caebff8b0004053fac876ebb65769d1b4a5543e62c45cdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69f3dd5fe8a51b0caebff8b0004053fac876ebb65769d1b4a5543e62c45cdbc->enter($__internal_b69f3dd5fe8a51b0caebff8b0004053fac876ebb65769d1b4a5543e62c45cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"cols12\">
           <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 15
        $this->loadTemplate("::formback.html.twig", "PageBundle:page:new.html.twig", 15)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 16
        echo "    
    <div class=\"row\">
        <div class=\"col s12\">
            ";
        // line 19
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:new.html.twig", 19)->display($context);
        // line 20
        echo "        </div>
    </div>
";
        
        $__internal_b69f3dd5fe8a51b0caebff8b0004053fac876ebb65769d1b4a5543e62c45cdbc->leave($__internal_b69f3dd5fe8a51b0caebff8b0004053fac876ebb65769d1b4a5543e62c45cdbc_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1c6a1cf73c9cab551ce9754c60259f467307e740004977213424e1504c9a697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c6a1cf73c9cab551ce9754c60259f467307e740004977213424e1504c9a697->enter($__internal_f1c6a1cf73c9cab551ce9754c60259f467307e740004977213424e1504c9a697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_f1c6a1cf73c9cab551ce9754c60259f467307e740004977213424e1504c9a697->leave($__internal_f1c6a1cf73c9cab551ce9754c60259f467307e740004977213424e1504c9a697_prof);

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
        return array (  115 => 25,  110 => 24,  104 => 23,  95 => 20,  93 => 19,  88 => 16,  86 => 15,  80 => 12,  76 => 10,  70 => 9,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('page_list') }}\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Ajout d'une nouvelle page</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"cols12\">
           <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('page_list') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    
    <div class=\"row\">
        <div class=\"col s12\">
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
