<?php

/* PageBundle:page:edit.html.twig */
class __TwigTemplate_359892fe2321bdb961770dfe3560ed55e375f0d378578f0410bcb0e727156906 extends Twig_Template
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
        $__internal_ade27dced598554a46ff764f999105e6ff6fceaffd1bfe9f69beda14a6a47727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade27dced598554a46ff764f999105e6ff6fceaffd1bfe9f69beda14a6a47727->enter($__internal_ade27dced598554a46ff764f999105e6ff6fceaffd1bfe9f69beda14a6a47727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade27dced598554a46ff764f999105e6ff6fceaffd1bfe9f69beda14a6a47727->leave($__internal_ade27dced598554a46ff764f999105e6ff6fceaffd1bfe9f69beda14a6a47727_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef97582b77a940078d3e55c2f504d940f9acc8b0ae60db6f7bb56230286308f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97582b77a940078d3e55c2f504d940f9acc8b0ae60db6f7bb56230286308f5->enter($__internal_ef97582b77a940078d3e55c2f504d940f9acc8b0ae60db6f7bb56230286308f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ef97582b77a940078d3e55c2f504d940f9acc8b0ae60db6f7bb56230286308f5->leave($__internal_ef97582b77a940078d3e55c2f504d940f9acc8b0ae60db6f7bb56230286308f5_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_623ac32b62af3f9a0c11507e89dfd9c2c8d773c6929ce8c907e55b7ae2887b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623ac32b62af3f9a0c11507e89dfd9c2c8d773c6929ce8c907e55b7ae2887b61->enter($__internal_623ac32b62af3f9a0c11507e89dfd9c2c8d773c6929ce8c907e55b7ae2887b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a>  
    <a class=\"breadcrumb\" href=\"#!\">Modifier une page</a>";
        
        $__internal_623ac32b62af3f9a0c11507e89dfd9c2c8d773c6929ce8c907e55b7ae2887b61->leave($__internal_623ac32b62af3f9a0c11507e89dfd9c2c8d773c6929ce8c907e55b7ae2887b61_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eae25e6caef5cff4e546d349cf21f1cc9e94ea267452e2af9d2577236d9d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eae25e6caef5cff4e546d349cf21f1cc9e94ea267452e2af9d2577236d9d560->enter($__internal_1eae25e6caef5cff4e546d349cf21f1cc9e94ea267452e2af9d2577236d9d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"row\">
        <div class=\"col s12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"material-icons left\">skip_previous</i>Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 16
        $this->loadTemplate("::formback.html.twig", "PageBundle:page:edit.html.twig", 16)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col s12\">
            <ul class=\"tabs\">
                <li class=\"tab col s3\">
                  <a class=\"active\" href=\"#seo\">Titre / Description</a>
                </li>
                <li class=\"tab col s3\">
                  <a href=\"#ihm\">Mise en page</a>
                </li>
            </ul>
            <div class=\"col s12\" style=\"padding-top: 20px\" id=\"seo\">";
        // line 27
        $this->loadTemplate("@PageViews/page/tabs/seo.html.twig", "PageBundle:page:edit.html.twig", 27)->display($context);
        echo "</div>
            <div class=\"col s12\" style=\"padding-top: 20px\" id=\"ihm\">";
        // line 28
        $this->loadTemplate("@PageViews/page/tabs/ihm.html.twig", "PageBundle:page:edit.html.twig", 28)->display($context);
        echo "</div>
        </div>
    </div>
";
        
        $__internal_1eae25e6caef5cff4e546d349cf21f1cc9e94ea267452e2af9d2577236d9d560->leave($__internal_1eae25e6caef5cff4e546d349cf21f1cc9e94ea267452e2af9d2577236d9d560_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5c193417de636da5c33fda50dabc52a80ac02730bb4cd795694b161f783eae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c193417de636da5c33fda50dabc52a80ac02730bb4cd795694b161f783eae7->enter($__internal_d5c193417de636da5c33fda50dabc52a80ac02730bb4cd795694b161f783eae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_d5c193417de636da5c33fda50dabc52a80ac02730bb4cd795694b161f783eae7->leave($__internal_d5c193417de636da5c33fda50dabc52a80ac02730bb4cd795694b161f783eae7_prof);

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
        return array (  143 => 38,  137 => 35,  133 => 34,  128 => 33,  122 => 32,  111 => 28,  107 => 27,  95 => 17,  93 => 16,  87 => 13,  83 => 11,  77 => 10,  62 => 8,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %} <a class=\"breadcrumb\" href=\"{{ path('page_list') }}\">Pages</a>  
    <a class=\"breadcrumb\" href=\"#!\">Modifier une page</a>{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('page_list') }}\"><i class=\"material-icons left\">skip_previous</i>Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    <div class=\"row\">
        <div class=\"col s12\">
            <ul class=\"tabs\">
                <li class=\"tab col s3\">
                  <a class=\"active\" href=\"#seo\">Titre / Description</a>
                </li>
                <li class=\"tab col s3\">
                  <a href=\"#ihm\">Mise en page</a>
                </li>
            </ul>
            <div class=\"col s12\" style=\"padding-top: 20px\" id=\"seo\">{% include \"@PageViews/page/tabs/seo.html.twig\" %}</div>
            <div class=\"col s12\" style=\"padding-top: 20px\" id=\"ihm\">{% include \"@PageViews/page/tabs/ihm.html.twig\" %}</div>
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
