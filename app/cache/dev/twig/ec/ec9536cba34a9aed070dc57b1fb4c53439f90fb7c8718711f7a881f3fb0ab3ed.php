<?php

/* @Article/category/new.html.twig */
class __TwigTemplate_25d44cd093cfd288342de41c981565d94b08ba1736c0e0bd4efd44a4c1974db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/category/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd4cbeb5a2baf55f67c373a77cebe3e8b94b252c18e8a53d3ed008e6ddbad729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4cbeb5a2baf55f67c373a77cebe3e8b94b252c18e8a53d3ed008e6ddbad729->enter($__internal_fd4cbeb5a2baf55f67c373a77cebe3e8b94b252c18e8a53d3ed008e6ddbad729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4cbeb5a2baf55f67c373a77cebe3e8b94b252c18e8a53d3ed008e6ddbad729->leave($__internal_fd4cbeb5a2baf55f67c373a77cebe3e8b94b252c18e8a53d3ed008e6ddbad729_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6a764a38d20b16e5ccb0bfabdc474366b48c7873643cc4885fcbc542acd5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a764a38d20b16e5ccb0bfabdc474366b48c7873643cc4885fcbc542acd5dc3->enter($__internal_d6a764a38d20b16e5ccb0bfabdc474366b48c7873643cc4885fcbc542acd5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/new.html.twig"));

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
        
        $__internal_d6a764a38d20b16e5ccb0bfabdc474366b48c7873643cc4885fcbc542acd5dc3->leave($__internal_d6a764a38d20b16e5ccb0bfabdc474366b48c7873643cc4885fcbc542acd5dc3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_698843ede19f833d723722e7bd62a3ce7723ee5fbff62f626d9945b5468187c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698843ede19f833d723722e7bd62a3ce7723ee5fbff62f626d9945b5468187c8->enter($__internal_698843ede19f833d723722e7bd62a3ce7723ee5fbff62f626d9945b5468187c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégorie </a> /  Créer une catégorie";
        
        $__internal_698843ede19f833d723722e7bd62a3ce7723ee5fbff62f626d9945b5468187c8->leave($__internal_698843ede19f833d723722e7bd62a3ce7723ee5fbff62f626d9945b5468187c8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_18fe2fe801c76e6bbc0c7e82f08fdde13a62fe5ef8cdf6243e928cdb09f26d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fe2fe801c76e6bbc0c7e82f08fdde13a62fe5ef8cdf6243e928cdb09f26d5c->enter($__internal_18fe2fe801c76e6bbc0c7e82f08fdde13a62fe5ef8cdf6243e928cdb09f26d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/category/new.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
       </div>
    </div> 
       
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer cette catégorie\" />
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>        
    
";
        
        $__internal_18fe2fe801c76e6bbc0c7e82f08fdde13a62fe5ef8cdf6243e928cdb09f26d5c->leave($__internal_18fe2fe801c76e6bbc0c7e82f08fdde13a62fe5ef8cdf6243e928cdb09f26d5c_prof);

    }

    public function getTemplateName()
    {
        return "@Article/category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  116 => 27,  112 => 26,  107 => 23,  98 => 20,  92 => 16,  88 => 15,  81 => 11,  77 => 9,  71 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_category_index') }}\">Catégorie </a> /  Créer une catégorie{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
       </div>
    </div> 
       
    {% for flash_message in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           {{ flash_message }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer cette catégorie\" />
            {{ form_end(form) }}
        </div>
    </div>        
    
{% endblock %}
", "@Article/category/new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\category\\new.html.twig");
    }
}
