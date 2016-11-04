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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa71cead3f7915730bef3cb798707becd38ebb68969bec24ed8efc84fa705b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa71cead3f7915730bef3cb798707becd38ebb68969bec24ed8efc84fa705b8->enter($__internal_9fa71cead3f7915730bef3cb798707becd38ebb68969bec24ed8efc84fa705b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa71cead3f7915730bef3cb798707becd38ebb68969bec24ed8efc84fa705b8->leave($__internal_9fa71cead3f7915730bef3cb798707becd38ebb68969bec24ed8efc84fa705b8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7bc735333cbb139baccb097a053ca4b3830e56ca0a8adf0901c34c3bbe1db59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc735333cbb139baccb097a053ca4b3830e56ca0a8adf0901c34c3bbe1db59f->enter($__internal_7bc735333cbb139baccb097a053ca4b3830e56ca0a8adf0901c34c3bbe1db59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

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
        
        $__internal_7bc735333cbb139baccb097a053ca4b3830e56ca0a8adf0901c34c3bbe1db59f->leave($__internal_7bc735333cbb139baccb097a053ca4b3830e56ca0a8adf0901c34c3bbe1db59f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b7ce7121527281b6281abd3c9e1decbdf32532b2fd70a2b825882ef2db86c631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ce7121527281b6281abd3c9e1decbdf32532b2fd70a2b825882ef2db86c631->enter($__internal_b7ce7121527281b6281abd3c9e1decbdf32532b2fd70a2b825882ef2db86c631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Mes pages";
        
        $__internal_b7ce7121527281b6281abd3c9e1decbdf32532b2fd70a2b825882ef2db86c631->leave($__internal_b7ce7121527281b6281abd3c9e1decbdf32532b2fd70a2b825882ef2db86c631_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b3ddab2b085a465e43a0030d192db184274e108a0cfb28f74c57a7ce702fa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3ddab2b085a465e43a0030d192db184274e108a0cfb28f74c57a7ce702fa01->enter($__internal_1b3ddab2b085a465e43a0030d192db184274e108a0cfb28f74c57a7ce702fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

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
            <table class=\"table table-striped table-bordered table-sm\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th>Page d'accueil</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 30
            echo "                        <tr id=\"page-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "description", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-right\">";
            // line 34
            if ($this->getAttribute($context["page"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "creationDate", array()), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 35
            if ($this->getAttribute($context["page"], "isHomePage", array())) {
                echo "<center><i class=\"fa-2x fa fa-home\"></i></center>";
            }
            echo "</td>
                            <td class=\"text-right\">
                               <div class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                          Actions
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i> Voir</a>
                                        <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxPage(";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_ajax_delete", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "')\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div>       
    </div>
";
        
        $__internal_1b3ddab2b085a465e43a0030d192db184274e108a0cfb28f74c57a7ce702fa01->leave($__internal_1b3ddab2b085a465e43a0030d192db184274e108a0cfb28f74c57a7ce702fa01_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5e5671f817b1b82d38c0dda32c425cd7a977491ef99b64488a6247816b6f3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e5671f817b1b82d38c0dda32c425cd7a977491ef99b64488a6247816b6f3b2->enter($__internal_b5e5671f817b1b82d38c0dda32c425cd7a977491ef99b64488a6247816b6f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/page\\index.html.twig"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_b5e5671f817b1b82d38c0dda32c425cd7a977491ef99b64488a6247816b6f3b2->leave($__internal_b5e5671f817b1b82d38c0dda32c425cd7a977491ef99b64488a6247816b6f3b2_prof);

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
        return array (  196 => 59,  192 => 58,  187 => 57,  181 => 56,  170 => 51,  157 => 44,  151 => 43,  147 => 42,  135 => 35,  129 => 34,  125 => 33,  121 => 32,  115 => 31,  110 => 30,  106 => 29,  85 => 11,  81 => 9,  75 => 8,  61 => 7,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
            <table class=\"table table-striped table-bordered table-sm\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th>Page d'accueil</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for page in pages %}
                        <tr id=\"page-{{page.id}}\">
                            <td><a href=\"{{ path('page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                            <td>{{ page.titre }}</td>
                            <td>{{ page.description }}</td>
                            <td class=\"text-right\">{% if page.creationDate %}{{ page.creationDate|date('d/m/Y H:i') }}{% endif %}</td>
                            <td>{% if page.isHomePage %}<center><i class=\"fa-2x fa fa-home\"></i></center>{% endif %}</td>
                            <td class=\"text-right\">
                               <div class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                          Actions
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path('page_show', { 'id': page.id }) }}\"><i class=\"fa fa-search\"></i> Voir</a>
                                        <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxPage({{page.id}},'{{ path('page_ajax_delete', { 'id': page.id }) }}')\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('page_edit', { 'id': page.id }) }}\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>       
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/vendor/bootbox/bootbox.min.js')}}'>
    </script><script type='text/javascript' src='{{asset('js/admin/page/generator.js')}}'></script>
{% endblock %}
", "@PageViews/page\\index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\index.html.twig");
    }
}
