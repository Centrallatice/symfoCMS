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
        $__internal_b16c7c93ae131a91c06842adde15b6246e59fe2e37c165cae83f7cb5e3ac71dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16c7c93ae131a91c06842adde15b6246e59fe2e37c165cae83f7cb5e3ac71dc->enter($__internal_b16c7c93ae131a91c06842adde15b6246e59fe2e37c165cae83f7cb5e3ac71dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16c7c93ae131a91c06842adde15b6246e59fe2e37c165cae83f7cb5e3ac71dc->leave($__internal_b16c7c93ae131a91c06842adde15b6246e59fe2e37c165cae83f7cb5e3ac71dc_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07167d5de538e70110eca0a6ac1bb4aaa31daddd7eb869091d27667307a44751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07167d5de538e70110eca0a6ac1bb4aaa31daddd7eb869091d27667307a44751->enter($__internal_07167d5de538e70110eca0a6ac1bb4aaa31daddd7eb869091d27667307a44751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

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
        
        $__internal_07167d5de538e70110eca0a6ac1bb4aaa31daddd7eb869091d27667307a44751->leave($__internal_07167d5de538e70110eca0a6ac1bb4aaa31daddd7eb869091d27667307a44751_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_48891aef43f3b64d78173e5258aec66b8478f4e5c6389aea18850f55bc42052f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48891aef43f3b64d78173e5258aec66b8478f4e5c6389aea18850f55bc42052f->enter($__internal_48891aef43f3b64d78173e5258aec66b8478f4e5c6389aea18850f55bc42052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Modifier une page";
        
        $__internal_48891aef43f3b64d78173e5258aec66b8478f4e5c6389aea18850f55bc42052f->leave($__internal_48891aef43f3b64d78173e5258aec66b8478f4e5c6389aea18850f55bc42052f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1c969f2de2a30e6a9d96a7f272beb90fe5c5a9168497d08a0088d79d12eb87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c969f2de2a30e6a9d96a7f272beb90fe5c5a9168497d08a0088d79d12eb87c->enter($__internal_d1c969f2de2a30e6a9d96a7f272beb90fe5c5a9168497d08a0088d79d12eb87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

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
        // line 22
        echo "    
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
        // line 34
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:edit.html.twig", 34)->display($context);
        echo "</div>
                <div class=\"tab-pane fade\" id=\"ihm\" role=\"tabpanel\">";
        // line 35
        $this->loadTemplate("@PageViews/page/tabs/ihm.html.twig", "PageBundle:page:edit.html.twig", 35)->display($context);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_d1c969f2de2a30e6a9d96a7f272beb90fe5c5a9168497d08a0088d79d12eb87c->leave($__internal_d1c969f2de2a30e6a9d96a7f272beb90fe5c5a9168497d08a0088d79d12eb87c_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36e99fa5cda3d26e79aef825c6534cd13558a2dfe849851aaa6edc8ed738b69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e99fa5cda3d26e79aef825c6534cd13558a2dfe849851aaa6edc8ed738b69e->enter($__internal_36e99fa5cda3d26e79aef825c6534cd13558a2dfe849851aaa6edc8ed738b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:edit.html.twig"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_36e99fa5cda3d26e79aef825c6534cd13558a2dfe849851aaa6edc8ed738b69e->leave($__internal_36e99fa5cda3d26e79aef825c6534cd13558a2dfe849851aaa6edc8ed738b69e_prof);

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
        return array (  162 => 46,  156 => 43,  152 => 42,  147 => 41,  141 => 40,  129 => 35,  125 => 34,  111 => 22,  102 => 20,  96 => 16,  92 => 15,  86 => 12,  82 => 10,  76 => 9,  62 => 8,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           {{ flash_message }}
       </div>
    {% endfor %}    
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
