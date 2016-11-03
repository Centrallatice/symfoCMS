<?php

/* @PageViews/page\edit.html.twig */
class __TwigTemplate_c9129666989c0072437e04d9574c48c5b156f54d0d18eeb76b87b1deff81e926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/page\\edit.html.twig", 1);
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
        $__internal_7d1427a82ce987f6cf463b10112bdd66175b8bf431dc0cb79eab42c7102102e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1427a82ce987f6cf463b10112bdd66175b8bf431dc0cb79eab42c7102102e7->enter($__internal_7d1427a82ce987f6cf463b10112bdd66175b8bf431dc0cb79eab42c7102102e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1427a82ce987f6cf463b10112bdd66175b8bf431dc0cb79eab42c7102102e7->leave($__internal_7d1427a82ce987f6cf463b10112bdd66175b8bf431dc0cb79eab42c7102102e7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdd241c25e80723d21df933b1cc2f0b81d27d382369042269e39738193af14d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd241c25e80723d21df933b1cc2f0b81d27d382369042269e39738193af14d7->enter($__internal_cdd241c25e80723d21df933b1cc2f0b81d27d382369042269e39738193af14d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\edit.html.twig"));

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
        
        $__internal_cdd241c25e80723d21df933b1cc2f0b81d27d382369042269e39738193af14d7->leave($__internal_cdd241c25e80723d21df933b1cc2f0b81d27d382369042269e39738193af14d7_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f0ee13bd96c9f936db7e7643240c65536545ccbd66e6b7baa73ac5637ca21cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ee13bd96c9f936db7e7643240c65536545ccbd66e6b7baa73ac5637ca21cc8->enter($__internal_f0ee13bd96c9f936db7e7643240c65536545ccbd66e6b7baa73ac5637ca21cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Modifier une page";
        
        $__internal_f0ee13bd96c9f936db7e7643240c65536545ccbd66e6b7baa73ac5637ca21cc8->leave($__internal_f0ee13bd96c9f936db7e7643240c65536545ccbd66e6b7baa73ac5637ca21cc8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b03ee4f62e2cf6082d08c87b323d59435d74186e44b173584eb1055b882d0a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03ee4f62e2cf6082d08c87b323d59435d74186e44b173584eb1055b882d0a49->enter($__internal_b03ee4f62e2cf6082d08c87b323d59435d74186e44b173584eb1055b882d0a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\edit.html.twig"));

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
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "@PageViews/page\\edit.html.twig", 34)->display($context);
        echo "</div>
                <div class=\"tab-pane fade\" id=\"ihm\" role=\"tabpanel\">";
        // line 35
        $this->loadTemplate("@PageViews/page/tabs/ihm.html.twig", "@PageViews/page\\edit.html.twig", 35)->display($context);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_b03ee4f62e2cf6082d08c87b323d59435d74186e44b173584eb1055b882d0a49->leave($__internal_b03ee4f62e2cf6082d08c87b323d59435d74186e44b173584eb1055b882d0a49_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74236ecfc7ebe3fb9d046880026112fcd48169db25d2b157193bfc367768368c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74236ecfc7ebe3fb9d046880026112fcd48169db25d2b157193bfc367768368c->enter($__internal_74236ecfc7ebe3fb9d046880026112fcd48169db25d2b157193bfc367768368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\edit.html.twig"));

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
        
        $__internal_74236ecfc7ebe3fb9d046880026112fcd48169db25d2b157193bfc367768368c->leave($__internal_74236ecfc7ebe3fb9d046880026112fcd48169db25d2b157193bfc367768368c_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page\\edit.html.twig";
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
{% endblock %}", "@PageViews/page\\edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\edit.html.twig");
    }
}
