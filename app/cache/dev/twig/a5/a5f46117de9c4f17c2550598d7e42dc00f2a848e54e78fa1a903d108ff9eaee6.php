<?php

/* PageBundle:page:index.html.twig */
class __TwigTemplate_b0a25657a3b561b266a744f22d16305dc17c3b659996d595e6a5d434571b98ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:page:index.html.twig", 1);
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
        $__internal_6c436d9224b2c7c1384f2e01d4a6b2b614c90af7a58eadb90f9cde969b6fe700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c436d9224b2c7c1384f2e01d4a6b2b614c90af7a58eadb90f9cde969b6fe700->enter($__internal_6c436d9224b2c7c1384f2e01d4a6b2b614c90af7a58eadb90f9cde969b6fe700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c436d9224b2c7c1384f2e01d4a6b2b614c90af7a58eadb90f9cde969b6fe700->leave($__internal_6c436d9224b2c7c1384f2e01d4a6b2b614c90af7a58eadb90f9cde969b6fe700_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69f22ec045555e3c3f7f793b0789ecfcdc41d97d54aa65085dda7973970ff7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f22ec045555e3c3f7f793b0789ecfcdc41d97d54aa65085dda7973970ff7c8->enter($__internal_69f22ec045555e3c3f7f793b0789ecfcdc41d97d54aa65085dda7973970ff7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_69f22ec045555e3c3f7f793b0789ecfcdc41d97d54aa65085dda7973970ff7c8->leave($__internal_69f22ec045555e3c3f7f793b0789ecfcdc41d97d54aa65085dda7973970ff7c8_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f47a6a751f5460118eeece81464f5b6380297bb0319c0266285483de6bda4389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47a6a751f5460118eeece81464f5b6380297bb0319c0266285483de6bda4389->enter($__internal_f47a6a751f5460118eeece81464f5b6380297bb0319c0266285483de6bda4389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <a class=\"breadcrumb\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes pages</a>
";
        
        $__internal_f47a6a751f5460118eeece81464f5b6380297bb0319c0266285483de6bda4389->leave($__internal_f47a6a751f5460118eeece81464f5b6380297bb0319c0266285483de6bda4389_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc84d97faacbf5ead689f7415dacc010f11ce60e353d18816e0d0a3a95f71092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc84d97faacbf5ead689f7415dacc010f11ce60e353d18816e0d0a3a95f71092->enter($__internal_bc84d97faacbf5ead689f7415dacc010f11ce60e353d18816e0d0a3a95f71092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light green pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_new");
        echo "\"><i class=\"material-icons left medium\">add</i> Créer une page</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class=\"striped bordered table responsive-table\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th class=\"text-right\">#</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            echo "                        <tr id=\"page-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "description", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-right\">";
            // line 37
            if ($this->getAttribute($context["page"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "creationDate", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 38
            if ($this->getAttribute($context["page"], "isHomePage", array())) {
                echo "<center><i class=\"fa-2x fa fa-home\"></i></center>";
            }
            echo "</td>
                            <td class=\"text-right\">
                                <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "'>Actions</a>
                                <ul id='dropdown-action-";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "' class='dropdown-content'>
                                    <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">search</i>Afficher</a></li>
                                    <li><a class=\"action-blue\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i>Modifier</a></li>
                                    <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxPage(";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_ajax_delete", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "')\"><i class=\"material-icons left\">delete</i>Supprimer</a></li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>
        </div>       
    </div>
";
        
        $__internal_bc84d97faacbf5ead689f7415dacc010f11ce60e353d18816e0d0a3a95f71092->leave($__internal_bc84d97faacbf5ead689f7415dacc010f11ce60e353d18816e0d0a3a95f71092_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d3e2f1f674e59fde438061d4680e287282215e8082e095286eb264b1265698f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e2f1f674e59fde438061d4680e287282215e8082e095286eb264b1265698f->enter($__internal_0d3e2f1f674e59fde438061d4680e287282215e8082e095286eb264b1265698f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/page/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_0d3e2f1f674e59fde438061d4680e287282215e8082e095286eb264b1265698f->leave($__internal_0d3e2f1f674e59fde438061d4680e287282215e8082e095286eb264b1265698f_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 57,  197 => 56,  192 => 55,  186 => 54,  175 => 49,  162 => 44,  158 => 43,  154 => 42,  150 => 41,  146 => 40,  139 => 38,  133 => 37,  129 => 36,  125 => 35,  119 => 34,  114 => 33,  110 => 32,  89 => 14,  85 => 12,  79 => 11,  69 => 8,  61 => 7,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %} 
    <a class=\"breadcrumb\" href=\"{{ path('page_list') }}\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes pages</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light green pull-right\" href=\"{{ path('page_new') }}\"><i class=\"material-icons left medium\">add</i> Créer une page</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class=\"striped bordered table responsive-table\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th class=\"text-right\">#</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Créé le</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for page in pages %}
                        <tr id=\"page-{{page.id}}\">
                            <td><a href=\"{{ path('page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                            <td>{{ page.titre }}</td>
                            <td>{{ page.description }}</td>
                            <td class=\"text-right\">{% if page.creationDate %}{{ page.creationDate|date('d/m/Y') }}{% endif %}</td>
                            <td>{% if page.isHomePage %}<center><i class=\"fa-2x fa fa-home\"></i></center>{% endif %}</td>
                            <td class=\"text-right\">
                                <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-{{page.id}}'>Actions</a>
                                <ul id='dropdown-action-{{page.id}}' class='dropdown-content'>
                                    <li><a href=\"{{ path('page_show', { 'id': page.id }) }}\"><i class=\"material-icons left\">search</i>Afficher</a></li>
                                    <li><a class=\"action-blue\" href=\"{{ path('page_edit', { 'id': page.id }) }}\"><i class=\"material-icons left\">mode_edit</i>Modifier</a></li>
                                    <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxPage({{page.id}},'{{ path('page_ajax_delete', { 'id': page.id }) }}')\"><i class=\"material-icons left\">delete</i>Supprimer</a></li>
                                </ul>
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
", "PageBundle:page:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/index.html.twig");
    }
}
