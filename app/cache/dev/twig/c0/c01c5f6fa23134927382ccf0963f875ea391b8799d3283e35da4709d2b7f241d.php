<?php

/* @AdminViews/Default\index.html.twig */
class __TwigTemplate_60e99f6e65556792d1e82316e2319337af8bd9a43db29a59739f2211692de956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@AdminViews/Default\\index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_34fb1b2ba7e29668a916819d3e3559ba42d391df679085a425bf1c9cfb5c6c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fb1b2ba7e29668a916819d3e3559ba42d391df679085a425bf1c9cfb5c6c00->enter($__internal_34fb1b2ba7e29668a916819d3e3559ba42d391df679085a425bf1c9cfb5c6c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminViews/Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34fb1b2ba7e29668a916819d3e3559ba42d391df679085a425bf1c9cfb5c6c00->leave($__internal_34fb1b2ba7e29668a916819d3e3559ba42d391df679085a425bf1c9cfb5c6c00_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a91fb5e3d70973121d149b8b53974a0662234c8996989484f488b1d3c1095df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a91fb5e3d70973121d149b8b53974a0662234c8996989484f488b1d3c1095df->enter($__internal_6a91fb5e3d70973121d149b8b53974a0662234c8996989484f488b1d3c1095df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6a91fb5e3d70973121d149b8b53974a0662234c8996989484f488b1d3c1095df->leave($__internal_6a91fb5e3d70973121d149b8b53974a0662234c8996989484f488b1d3c1095df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18eb4ac4c73c6de89fe122536cd75dbd5b18e9caf7141c40b13739efa6f90cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eb4ac4c73c6de89fe122536cd75dbd5b18e9caf7141c40b13739efa6f90cad->enter($__internal_18eb4ac4c73c6de89fe122536cd75dbd5b18e9caf7141c40b13739efa6f90cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

        // line 6
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/topStat.html.twig", "@AdminViews/Default\\index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/mainStat.html.twig", "@AdminViews/Default\\index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/bottomStat.html.twig", "@AdminViews/Default\\index.html.twig", 8)->display($context);
        
        $__internal_18eb4ac4c73c6de89fe122536cd75dbd5b18e9caf7141c40b13739efa6f90cad->leave($__internal_18eb4ac4c73c6de89fe122536cd75dbd5b18e9caf7141c40b13739efa6f90cad_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bea32b8789c03ca87c2cc5b875b272d473832ce24d698d0b0da3f86daf9f49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bea32b8789c03ca87c2cc5b875b272d473832ce24d698d0b0da3f86daf9f49a->enter($__internal_5bea32b8789c03ca87c2cc5b875b272d473832ce24d698d0b0da3f86daf9f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

        echo "            
    ";
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5bea32b8789c03ca87c2cc5b875b272d473832ce24d698d0b0da3f86daf9f49a->leave($__internal_5bea32b8789c03ca87c2cc5b875b272d473832ce24d698d0b0da3f86daf9f49a_prof);

    }

    public function getTemplateName()
    {
        return "@AdminViews/Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  72 => 10,  64 => 8,  61 => 7,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% block body %}
    {% include \"@AdminViews/Home/topStat.html.twig\" %}
    {% include \"@AdminViews/Home/mainStat.html.twig\" %}
    {% include \"@AdminViews/Home/bottomStat.html.twig\" %}
{% endblock %}
{% block javascripts %}            
    {{ parent() }}
    <script src=\"{{ asset('js/themes/admin/morris/morris-data.js') }}\"></script>
{% endblock %}", "@AdminViews/Default\\index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
