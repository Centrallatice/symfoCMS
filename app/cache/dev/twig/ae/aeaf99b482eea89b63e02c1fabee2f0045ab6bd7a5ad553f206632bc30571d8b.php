<?php

/* PageBundle:page:edit.html.twig */
class __TwigTemplate_eeb933bd03036db0faa909ddbd08fafe43abfeb22ce467141a85db4160b937b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:page:edit.html.twig", 1);
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
        $__internal_4177bc8e66a0d2dfd008f323328388ac650e8148fc3c1417aee28eba57d49a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4177bc8e66a0d2dfd008f323328388ac650e8148fc3c1417aee28eba57d49a7f->enter($__internal_4177bc8e66a0d2dfd008f323328388ac650e8148fc3c1417aee28eba57d49a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4177bc8e66a0d2dfd008f323328388ac650e8148fc3c1417aee28eba57d49a7f->leave($__internal_4177bc8e66a0d2dfd008f323328388ac650e8148fc3c1417aee28eba57d49a7f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acfc9e09c6fb5e7c1a42006e606364651900ad95cc0f690279eeb2520258560e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfc9e09c6fb5e7c1a42006e606364651900ad95cc0f690279eeb2520258560e->enter($__internal_acfc9e09c6fb5e7c1a42006e606364651900ad95cc0f690279eeb2520258560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/generator.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/froala/froala.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
";
        
        $__internal_acfc9e09c6fb5e7c1a42006e606364651900ad95cc0f690279eeb2520258560e->leave($__internal_acfc9e09c6fb5e7c1a42006e606364651900ad95cc0f690279eeb2520258560e_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_09c0d6bb3a167eb057f50e06d9885c690ba2168cdb6675086733b1eab426e7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c0d6bb3a167eb057f50e06d9885c690ba2168cdb6675086733b1eab426e7cb->enter($__internal_09c0d6bb3a167eb057f50e06d9885c690ba2168cdb6675086733b1eab426e7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Modifier une page";
        
        $__internal_09c0d6bb3a167eb057f50e06d9885c690ba2168cdb6675086733b1eab426e7cb->leave($__internal_09c0d6bb3a167eb057f50e06d9885c690ba2168cdb6675086733b1eab426e7cb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9abfc0b10adf8c8d8990eb2cb68276f414839cdcc02a3f31bc2111500ba0c4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abfc0b10adf8c8d8990eb2cb68276f414839cdcc02a3f31bc2111500ba0c4bc->enter($__internal_9abfc0b10adf8c8d8990eb2cb68276f414839cdcc02a3f31bc2111500ba0c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 21
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
    <hr />      
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <ul class=\"nav nav-pills nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#seo\" role=\"tab\">Titre / Description</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ihm\" role=\"tab\">Mise en page</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade in active\" id=\"seo\" role=\"tabpanel\">";
        // line 36
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:edit.html.twig", 36)->display($context);
        echo "</div>
                <div class=\"tab-pane fade\" id=\"ihm\" role=\"tabpanel\">";
        // line 37
        $this->loadTemplate("@PageViews/page/tabs/ihm.html.twig", "PageBundle:page:edit.html.twig", 37)->display($context);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_9abfc0b10adf8c8d8990eb2cb68276f414839cdcc02a3f31bc2111500ba0c4bc->leave($__internal_9abfc0b10adf8c8d8990eb2cb68276f414839cdcc02a3f31bc2111500ba0c4bc_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b7fea031cf9bc62950e04abff4c9b0b9abb15b52a2d083242d5b8c247ee0a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7fea031cf9bc62950e04abff4c9b0b9abb15b52a2d083242d5b8c247ee0a39->enter($__internal_1b7fea031cf9bc62950e04abff4c9b0b9abb15b52a2d083242d5b8c247ee0a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_1b7fea031cf9bc62950e04abff4c9b0b9abb15b52a2d083242d5b8c247ee0a39->leave($__internal_1b7fea031cf9bc62950e04abff4c9b0b9abb15b52a2d083242d5b8c247ee0a39_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  158 => 45,  154 => 44,  149 => 43,  143 => 42,  131 => 37,  127 => 36,  112 => 23,  103 => 21,  96 => 16,  92 => 15,  86 => 12,  82 => 10,  76 => 9,  62 => 8,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/generator.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/froala/froala.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('page_list') }}\">Pages</a> /  Modifier une page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('page_list') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    {% for flash_message in app.session.flashBag.get('success') %}
        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           {{ flash_message }}
       </div>
    {% endfor %}    
    <hr />      
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <ul class=\"nav nav-pills nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#seo\" role=\"tab\">Titre / Description</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ihm\" role=\"tab\">Mise en page</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade in active\" id=\"seo\" role=\"tabpanel\">{% include \"@PageViews/page/tabs/seo.html.twig\" %}</div>
                <div class=\"tab-pane fade\" id=\"ihm\" role=\"tabpanel\">{% include \"@PageViews/page/tabs/ihm.html.twig\" %}</div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/vendor/bootbox/bootbox.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/vendor/froala/froala.min.js')}}'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='{{asset('js/admin/page/generator.js')}}'></script>
{% endblock %}", "PageBundle:page:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/edit.html.twig");
    }
}
