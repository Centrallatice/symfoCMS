<?php

/* ArticleBundle:category:index.html.twig */
class __TwigTemplate_8a139518bc9195106e6cb7437a8428db231a7dde73d048e981aef243d94b0cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:index.html.twig", 1);
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
        $__internal_2ae19d5cc6e5954419eb76398e74d30ada7fdb3ffd7fb72808f6b8111c57c4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae19d5cc6e5954419eb76398e74d30ada7fdb3ffd7fb72808f6b8111c57c4f7->enter($__internal_2ae19d5cc6e5954419eb76398e74d30ada7fdb3ffd7fb72808f6b8111c57c4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae19d5cc6e5954419eb76398e74d30ada7fdb3ffd7fb72808f6b8111c57c4f7->leave($__internal_2ae19d5cc6e5954419eb76398e74d30ada7fdb3ffd7fb72808f6b8111c57c4f7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26dec3e366a4752538ae7ed526332accf9f525b8a3021ff4c11d5d5ab8891b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dec3e366a4752538ae7ed526332accf9f525b8a3021ff4c11d5d5ab8891b7a->enter($__internal_26dec3e366a4752538ae7ed526332accf9f525b8a3021ff4c11d5d5ab8891b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:index.html.twig"));

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
        
        $__internal_26dec3e366a4752538ae7ed526332accf9f525b8a3021ff4c11d5d5ab8891b7a->leave($__internal_26dec3e366a4752538ae7ed526332accf9f525b8a3021ff4c11d5d5ab8891b7a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3b87811daee1df8c6e104761206628571f8796733997c428adc9bb76fdab6685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b87811daee1df8c6e104761206628571f8796733997c428adc9bb76fdab6685->enter($__internal_3b87811daee1df8c6e104761206628571f8796733997c428adc9bb76fdab6685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:index.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégories</a> /  Mes catégories";
        
        $__internal_3b87811daee1df8c6e104761206628571f8796733997c428adc9bb76fdab6685->leave($__internal_3b87811daee1df8c6e104761206628571f8796733997c428adc9bb76fdab6685_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0354f7efef62d28b03d56a8e00b7d3fdf7f2d73212bc53524ea0a1eb0ba60b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0354f7efef62d28b03d56a8e00b7d3fdf7f2d73212bc53524ea0a1eb0ba60b7->enter($__internal_d0354f7efef62d28b03d56a8e00b7d3fdf7f2d73212bc53524ea0a1eb0ba60b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:index.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_new");
        echo "\"><i class=\"fa fa-plus\"></i> Créer une nouvelle catégorie</a>
        </div>
    </div>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
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
    <hr />      
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table table-striped table-bordered table-sm\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th><input type=\"checkbox\" name=\"selected_category_master\" onclick=\"checkUncheckAll()\"></th>
                        <th class=\"text-right\">#</th>
                        <th>Nom</th>
                        <th>Parent</th>
                        <th>Auteur</th>
                        <th>Créée le</th>
                        <th>Etat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "                    ";
            if (($this->getAttribute($context["category"], "depth", array()) == 0)) {
                // line 43
                echo "                        <tr id=\"cat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">
                            <td><input class=\"set_selection\" type=\"checkbox\" name=\"selected_category[]\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\"></td>
                            <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                if (($this->getAttribute($context["category"], "getCategoryParente", array(), "method") != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], "getCategoryParente", array(), "method"), "getNom", array(), "method"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "auteur", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "dateCreation", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                            <td class=\"text-center ";
                // line 50
                if ($this->getAttribute($context["category"], "isActive", array())) {
                    echo "bg-success";
                } else {
                    echo "bg-danger";
                }
                echo "\">
                                ";
                // line 51
                if ($this->getAttribute($context["category"], "isActive", array())) {
                    echo "Publié";
                } else {
                    echo "Non publié";
                }
                echo "</td>
                            <td class=\"text-right\">
                                <div class=\"input-group-btn input-group-sm\">
                                    <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                          Actions
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-search\"></i> Voir</a>
                                        <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxCategory(";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "',true)\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                        <a class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
                // line 65
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "getCategoryEnfants", array(), "method")) > 0)) {
                    // line 66
                    echo "                            ";
                    $this->loadTemplate("ArticleBundle:article:subCategory.html.twig", "ArticleBundle:category:index.html.twig", 66)->display(array_merge($context, array("Parent" => $context["category"], "Depth" => 1)));
                    // line 67
                    echo "                        ";
                }
                // line 68
                echo "                    ";
            }
            // line 69
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"10\">
                            <div class=\"input-group-btn input-group-sm\">
                                <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                      Pour la sélection
                                </button>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxCategories('";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_delete", array("id" => 0));
        echo "')\"><i class=\"fa fa-remove\"></i> Supprimer la sélection</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"changeStateAjaxCategories('";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_change_state");
        echo "',true)\"><i class=\"fa fa-power-off greenme\"></i> Activer la sélection</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"changeStateAjaxCategories('";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_change_state");
        echo "',false)\"><i class=\"fa fa-power-off redme\"></i> Désactiver la sélection</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
";
        
        $__internal_d0354f7efef62d28b03d56a8e00b7d3fdf7f2d73212bc53524ea0a1eb0ba60b7->leave($__internal_d0354f7efef62d28b03d56a8e00b7d3fdf7f2d73212bc53524ea0a1eb0ba60b7_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e118274448d6c188a0b956114d738b7dec790cfc7ea410f7ef1c6c4f42070b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e118274448d6c188a0b956114d738b7dec790cfc7ea410f7ef1c6c4f42070b8->enter($__internal_1e118274448d6c188a0b956114d738b7dec790cfc7ea410f7ef1c6c4f42070b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:index.html.twig"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/category/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_1e118274448d6c188a0b956114d738b7dec790cfc7ea410f7ef1c6c4f42070b8->leave($__internal_1e118274448d6c188a0b956114d738b7dec790cfc7ea410f7ef1c6c4f42070b8_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 95,  295 => 94,  290 => 93,  284 => 92,  266 => 81,  262 => 80,  258 => 79,  247 => 70,  233 => 69,  230 => 68,  227 => 67,  224 => 66,  222 => 65,  214 => 60,  208 => 59,  204 => 58,  190 => 51,  182 => 50,  178 => 49,  174 => 48,  168 => 47,  164 => 46,  158 => 45,  154 => 44,  149 => 43,  146 => 42,  129 => 41,  108 => 22,  99 => 20,  92 => 15,  88 => 14,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_category_index') }}\">Catégories</a> /  Mes catégories{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"{{ path('admin_category_new') }}\"><i class=\"fa fa-plus\"></i> Créer une nouvelle catégorie</a>
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
            <table class=\"table table-striped table-bordered table-sm\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th><input type=\"checkbox\" name=\"selected_category_master\" onclick=\"checkUncheckAll()\"></th>
                        <th class=\"text-right\">#</th>
                        <th>Nom</th>
                        <th>Parent</th>
                        <th>Auteur</th>
                        <th>Créée le</th>
                        <th>Etat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% for category in categories %}
                    {% if category.depth==0 %}
                        <tr id=\"cat-{{category.id}}\">
                            <td><input class=\"set_selection\" type=\"checkbox\" name=\"selected_category[]\" value=\"{{category.id}}\"></td>
                            <td><a href=\"{{ path('admin_category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                            <td>{{ category.nom }}</td>
                            <td>{% if category.getCategoryParente() != null %}{{ category.getCategoryParente().getNom() }}{% endif %}</td>
                            <td>{{ category.auteur }}</td>
                            <td>{{ category.dateCreation| date('d/m/Y H:i') }}</td>
                            <td class=\"text-center {% if category.isActive %}bg-success{% else %}bg-danger{% endif %}\">
                                {% if category.isActive %}Publié{% else %}Non publié{% endif %}</td>
                            <td class=\"text-right\">
                                <div class=\"input-group-btn input-group-sm\">
                                    <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                          Actions
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path('admin_category_show', { 'id': category.id }) }}\"><i class=\"fa fa-search\"></i> Voir</a>
                                        <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxCategory({{category.id}},'{{ path('category_ajax_delete', { 'id': category.id }) }}',true)\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('admin_category_edit', { 'id': category.id }) }}\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% if category.getCategoryEnfants()|length>0%}
                            {% include 'ArticleBundle:article:subCategory.html.twig' with {'Parent': category,'Depth':1} %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"10\">
                            <div class=\"input-group-btn input-group-sm\">
                                <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                      Pour la sélection
                                </button>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxCategories('{{path('category_ajax_delete', { 'id': 0 })}}')\"><i class=\"fa fa-remove\"></i> Supprimer la sélection</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"changeStateAjaxCategories('{{path('category_ajax_change_state')}}',true)\"><i class=\"fa fa-power-off greenme\"></i> Activer la sélection</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"changeStateAjaxCategories('{{path('category_ajax_change_state')}}',false)\"><i class=\"fa fa-power-off redme\"></i> Désactiver la sélection</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/vendor/bootbox/bootbox.min.js')}}'>
    </script><script type='text/javascript' src='{{asset('js/admin/category/generator.js')}}'></script>
{% endblock %}", "ArticleBundle:category:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/index.html.twig");
    }
}
