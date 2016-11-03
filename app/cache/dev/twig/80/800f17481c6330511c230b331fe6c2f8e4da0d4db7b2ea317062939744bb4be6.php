<?php

/* @PageViews/page\index.html.twig */
class __TwigTemplate_247aec69a38cdac761ab4bd7592459352b06ca70d4a5df6eae8f330bab1d0a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/page\\index.html.twig", 1);
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
        $__internal_349186025165f96b95dcf62de9262cdfc2ba980d8de38dc9e3ffca47ab5acfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349186025165f96b95dcf62de9262cdfc2ba980d8de38dc9e3ffca47ab5acfcf->enter($__internal_349186025165f96b95dcf62de9262cdfc2ba980d8de38dc9e3ffca47ab5acfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_349186025165f96b95dcf62de9262cdfc2ba980d8de38dc9e3ffca47ab5acfcf->leave($__internal_349186025165f96b95dcf62de9262cdfc2ba980d8de38dc9e3ffca47ab5acfcf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fc6dac3227b26417d1c3ec2305ec7a0bd310d9350925a940b5482f2b3a30bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc6dac3227b26417d1c3ec2305ec7a0bd310d9350925a940b5482f2b3a30bd4->enter($__internal_5fc6dac3227b26417d1c3ec2305ec7a0bd310d9350925a940b5482f2b3a30bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

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
";
        
        $__internal_5fc6dac3227b26417d1c3ec2305ec7a0bd310d9350925a940b5482f2b3a30bd4->leave($__internal_5fc6dac3227b26417d1c3ec2305ec7a0bd310d9350925a940b5482f2b3a30bd4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2b9b42930972ec0f78cdc92a6cfb4bb55f98106a5e9e2b62bcb30a67a6a0b128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9b42930972ec0f78cdc92a6cfb4bb55f98106a5e9e2b62bcb30a67a6a0b128->enter($__internal_2b9b42930972ec0f78cdc92a6cfb4bb55f98106a5e9e2b62bcb30a67a6a0b128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Mes pages";
        
        $__internal_2b9b42930972ec0f78cdc92a6cfb4bb55f98106a5e9e2b62bcb30a67a6a0b128->leave($__internal_2b9b42930972ec0f78cdc92a6cfb4bb55f98106a5e9e2b62bcb30a67a6a0b128_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7eafe6d78c6ce49272d2813870519cadd0cd9a575d39fd8c578a6509f38bf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eafe6d78c6ce49272d2813870519cadd0cd9a575d39fd8c578a6509f38bf54->enter($__internal_e7eafe6d78c6ce49272d2813870519cadd0cd9a575d39fd8c578a6509f38bf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_new");
        echo "\"><i class=\"fa fa-plus\"></i> Créer une nouvelle page</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 29
            echo "                        <tr>
                            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "description", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            if ($this->getAttribute($context["page"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "creationDate", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                            <td>
                                <a role=\"button\" class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_delete", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                <a role=\"button\" class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cog\"></i> Modifier</a>    
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
        </div>       
    </div>
";
        
        $__internal_e7eafe6d78c6ce49272d2813870519cadd0cd9a575d39fd8c578a6509f38bf54->leave($__internal_e7eafe6d78c6ce49272d2813870519cadd0cd9a575d39fd8c578a6509f38bf54_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  136 => 36,  132 => 35,  125 => 33,  121 => 32,  117 => 31,  111 => 30,  108 => 29,  104 => 28,  84 => 11,  80 => 9,  74 => 8,  60 => 7,  51 => 5,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('page_list') }}\">Pages</a> /  Mes pages{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"{{ path('page_new') }}\"><i class=\"fa fa-plus\"></i> Créer une nouvelle page</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for page in pages %}
                        <tr>
                            <td><a href=\"{{ path('page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                            <td>{{ page.titre }}</td>
                            <td>{{ page.description }}</td>
                            <td>{% if page.creationDate %}{{ page.creationDate|date('d-m-Y H:i') }}{% endif %}</td>
                            <td>
                                <a role=\"button\" class=\"btn btn-danger\" href=\"{{ path('page_delete', { 'id': page.id }) }}\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                <a role=\"button\" class=\"btn btn-primary\" href=\"{{ path('page_edit', { 'id': page.id }) }}\"><i class=\"fa fa-cog\"></i> Modifier</a>    
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>       
    </div>
{% endblock %}
", "@PageViews/page\\index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\index.html.twig");
    }
}
