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
        $__internal_74754012126bb2dd4fc23c8ad51b1da0f94ff7d04d469f05e8224b3c35c741de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74754012126bb2dd4fc23c8ad51b1da0f94ff7d04d469f05e8224b3c35c741de->enter($__internal_74754012126bb2dd4fc23c8ad51b1da0f94ff7d04d469f05e8224b3c35c741de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminViews/Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74754012126bb2dd4fc23c8ad51b1da0f94ff7d04d469f05e8224b3c35c741de->leave($__internal_74754012126bb2dd4fc23c8ad51b1da0f94ff7d04d469f05e8224b3c35c741de_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1de8307a2bf6e9836968d5770a3e787789cc14ebc617ebc3b3e67a607df9dcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de8307a2bf6e9836968d5770a3e787789cc14ebc617ebc3b3e67a607df9dcdd->enter($__internal_1de8307a2bf6e9836968d5770a3e787789cc14ebc617ebc3b3e67a607df9dcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1de8307a2bf6e9836968d5770a3e787789cc14ebc617ebc3b3e67a607df9dcdd->leave($__internal_1de8307a2bf6e9836968d5770a3e787789cc14ebc617ebc3b3e67a607df9dcdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5df97d8e964d0beb14b8fc010f59b7a88f238323159797525afbb86334ec835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5df97d8e964d0beb14b8fc010f59b7a88f238323159797525afbb86334ec835->enter($__internal_f5df97d8e964d0beb14b8fc010f59b7a88f238323159797525afbb86334ec835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

        // line 6
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/topStat.html.twig", "@AdminViews/Default\\index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/mainStat.html.twig", "@AdminViews/Default\\index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/bottomStat.html.twig", "@AdminViews/Default\\index.html.twig", 8)->display($context);
        
        $__internal_f5df97d8e964d0beb14b8fc010f59b7a88f238323159797525afbb86334ec835->leave($__internal_f5df97d8e964d0beb14b8fc010f59b7a88f238323159797525afbb86334ec835_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9b2490799f6db98efedeb2efd30ff6622914ba2f09cc341b2fea872f9331921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b2490799f6db98efedeb2efd30ff6622914ba2f09cc341b2fea872f9331921->enter($__internal_d9b2490799f6db98efedeb2efd30ff6622914ba2f09cc341b2fea872f9331921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AdminViews/Default\\index.html.twig"));

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
        
        $__internal_d9b2490799f6db98efedeb2efd30ff6622914ba2f09cc341b2fea872f9331921->leave($__internal_d9b2490799f6db98efedeb2efd30ff6622914ba2f09cc341b2fea872f9331921_prof);

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
