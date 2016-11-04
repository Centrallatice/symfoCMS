<?php

/* @PageViews/page\new.html.twig */
class __TwigTemplate_d6f9771cd9e18a8ea42ee519667bd27bbf1442b64ee8b105c2b352ece9d35e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/page\\new.html.twig", 1);
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
        $__internal_f723e49345cbcfc5a4262b28cb7a3a70426b555b47d93e8bd4c50234bc088126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f723e49345cbcfc5a4262b28cb7a3a70426b555b47d93e8bd4c50234bc088126->enter($__internal_f723e49345cbcfc5a4262b28cb7a3a70426b555b47d93e8bd4c50234bc088126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f723e49345cbcfc5a4262b28cb7a3a70426b555b47d93e8bd4c50234bc088126->leave($__internal_f723e49345cbcfc5a4262b28cb7a3a70426b555b47d93e8bd4c50234bc088126_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cf0abce78c63111c402d0dfc816c7467c4f728ec1c7f58ed9d357d4f50091bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf0abce78c63111c402d0dfc816c7467c4f728ec1c7f58ed9d357d4f50091bd->enter($__internal_6cf0abce78c63111c402d0dfc816c7467c4f728ec1c7f58ed9d357d4f50091bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6cf0abce78c63111c402d0dfc816c7467c4f728ec1c7f58ed9d357d4f50091bd->leave($__internal_6cf0abce78c63111c402d0dfc816c7467c4f728ec1c7f58ed9d357d4f50091bd_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6a9ce76c8d0bc17c5ed810abed88a2ce1bf70336dfd098ea88acbf07417958fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9ce76c8d0bc17c5ed810abed88a2ce1bf70336dfd098ea88acbf07417958fb->enter($__internal_6a9ce76c8d0bc17c5ed810abed88a2ce1bf70336dfd098ea88acbf07417958fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Ajout d'une nouvelle page";
        
        $__internal_6a9ce76c8d0bc17c5ed810abed88a2ce1bf70336dfd098ea88acbf07417958fb->leave($__internal_6a9ce76c8d0bc17c5ed810abed88a2ce1bf70336dfd098ea88acbf07417958fb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12b1044d430325a529eec3cd93e8a67fdd49333bbbe11662d45ceddafe3f4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12b1044d430325a529eec3cd93e8a67fdd49333bbbe11662d45ceddafe3f4bb->enter($__internal_e12b1044d430325a529eec3cd93e8a67fdd49333bbbe11662d45ceddafe3f4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

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
        $this->loadTemplate("::formback.html.twig", "@PageViews/page\\new.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 15
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "@PageViews/page\\new.html.twig", 15)->display($context);
        // line 16
        echo "        </div>
    </div>
";
        
        $__internal_e12b1044d430325a529eec3cd93e8a67fdd49333bbbe11662d45ceddafe3f4bb->leave($__internal_e12b1044d430325a529eec3cd93e8a67fdd49333bbbe11662d45ceddafe3f4bb_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe1cdbc3b9ad4a4d104f2a05be811105cef3996ee33b7f8c9ae68c0293b9a2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1cdbc3b9ad4a4d104f2a05be811105cef3996ee33b7f8c9ae68c0293b9a2de->enter($__internal_fe1cdbc3b9ad4a4d104f2a05be811105cef3996ee33b7f8c9ae68c0293b9a2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\new.html.twig"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_fe1cdbc3b9ad4a4d104f2a05be811105cef3996ee33b7f8c9ae68c0293b9a2de->leave($__internal_fe1cdbc3b9ad4a4d104f2a05be811105cef3996ee33b7f8c9ae68c0293b9a2de_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page\\new.html.twig";
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
{% endblock %}", "@PageViews/page\\new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\new.html.twig");
    }
}
