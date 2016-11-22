<?php

/* ArticleBundle:category:index.html.twig */
class __TwigTemplate_4c6dcc7ef6030b788509dc3b97fd408afd2773f5231e7589ec5a2e3efdab5e29 extends Twig_Template
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
        $__internal_7f50751d80d0009a100e78ae37412bde4a97d81374236b9bff2c8fcf3e15d6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f50751d80d0009a100e78ae37412bde4a97d81374236b9bff2c8fcf3e15d6b1->enter($__internal_7f50751d80d0009a100e78ae37412bde4a97d81374236b9bff2c8fcf3e15d6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f50751d80d0009a100e78ae37412bde4a97d81374236b9bff2c8fcf3e15d6b1->leave($__internal_7f50751d80d0009a100e78ae37412bde4a97d81374236b9bff2c8fcf3e15d6b1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8620bcc92d151b66eb84d203b8d786cd03b237b1326766e1c31dc77e7ee9528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8620bcc92d151b66eb84d203b8d786cd03b237b1326766e1c31dc77e7ee9528->enter($__internal_e8620bcc92d151b66eb84d203b8d786cd03b237b1326766e1c31dc77e7ee9528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e8620bcc92d151b66eb84d203b8d786cd03b237b1326766e1c31dc77e7ee9528->leave($__internal_e8620bcc92d151b66eb84d203b8d786cd03b237b1326766e1c31dc77e7ee9528_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f418e759a624b6e9c8c153fe03d4308475ee64ec2f829ffa8d60b32ad8258890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f418e759a624b6e9c8c153fe03d4308475ee64ec2f829ffa8d60b32ad8258890->enter($__internal_f418e759a624b6e9c8c153fe03d4308475ee64ec2f829ffa8d60b32ad8258890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégories</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes catégories</a>
";
        
        $__internal_f418e759a624b6e9c8c153fe03d4308475ee64ec2f829ffa8d60b32ad8258890->leave($__internal_f418e759a624b6e9c8c153fe03d4308475ee64ec2f829ffa8d60b32ad8258890_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4218d72be696096f7852658bd8185d140f6735e36c9ef7ebcfac4489e6720ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4218d72be696096f7852658bd8185d140f6735e36c9ef7ebcfac4489e6720ca->enter($__internal_c4218d72be696096f7852658bd8185d140f6735e36c9ef7ebcfac4489e6720ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-effect waves-light green pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_new");
        echo "\"><i class=\"material-icons left medium\">add</i> Créer une catégorie</a>
        </div>
    </div>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
       </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    <hr />      
    
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <table class=\"table striped bordered responsive-table\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th>
                            <input type=\"checkbox\" name=\"selected_category_master\" id=\"selected_category_master\" onclick=\"checkUncheckAll()\">
                            <label for=\"selected_category_master\"></label>
                        </th>
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
        // line 46
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
            // line 47
            echo "                    ";
            if (($this->getAttribute($context["category"], "depth", array()) == 0)) {
                // line 48
                echo "                        <tr id=\"cat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">
                            <td>
                                <input class=\"set_selection\" type=\"checkbox\" id=\"chk_";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" name=\"selected_category[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">
                                <label for=\"chk_";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\"></label>
                            </td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                if (($this->getAttribute($context["category"], "getCategoryParente", array(), "method") != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], "getCategoryParente", array(), "method"), "getNom", array(), "method"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "auteur", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td class=\"text-left\">
                                ";
                // line 58
                if ($this->getAttribute($context["category"], "isActive", array())) {
                    // line 59
                    echo "                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                ";
                } else {
                    // line 61
                    echo "                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                ";
                }
                // line 63
                echo "                            </td>
                            <td class=\"text-right\">
                                <td class=\"text-right\">
                                    <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "'><i class=\"material-icons\">build</i></a>
                                    <ul id='dropdown-action-";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "' class='dropdown-content'>
                                        <li><a class=\"\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons left\">search</i> Afficher</a></li>
                                        <li><a class=\"action-blue\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons left\">mode_edit</i> Modifier</a></li>
                                        <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxCategory(";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "')\"><i class=\"material-icons left\">delete</i> Supprimer</a></li>
                                    </ul>
                                </td>
                                
                            </td>
                        </tr>
                        ";
                // line 76
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "getCategoryEnfants", array(), "method")) > 0)) {
                    // line 77
                    echo "                            ";
                    $this->loadTemplate("ArticleBundle:article:subCategory.html.twig", "ArticleBundle:category:index.html.twig", 77)->display(array_merge($context, array("Parent" => $context["category"], "Depth" => 1)));
                    // line 78
                    echo "                        ";
                }
                // line 79
                echo "                    ";
            }
            // line 80
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
        // line 81
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"10\">
                            <a data-hover=\"true\" data-beloworigin=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue' href='#' data-activates='dropdown-action-group'>Pour la sélection</a>
                            <ul id='dropdown-action-group' class='dropdown-content'>
                                <li><a class=\"action-purple\" href=\"#\" onclick=\"changeStateAjaxCategories('";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_change_state");
        echo "',false)\"><i class=\"material-icons left\">cancel</i> Désactiver la sélection</a></li>
                                <li><a class=\"action-green\" href=\"#\" onclick=\"changeStateAjaxCategories('";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_change_state");
        echo "',true)\"><i class=\"material-icons left\">done</i> Activer la sélection</a></li>
                                <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxCategories('";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_ajax_delete", array("id" => 0));
        echo "')\"><i class=\"material-icons left\">delete</i> Supprimer la sélection</a></li>
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
";
        
        $__internal_c4218d72be696096f7852658bd8185d140f6735e36c9ef7ebcfac4489e6720ca->leave($__internal_c4218d72be696096f7852658bd8185d140f6735e36c9ef7ebcfac4489e6720ca_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cba703a71659ddad80e3147d54a97548dd5413555f4a096908c9ee27f5cf61fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba703a71659ddad80e3147d54a97548dd5413555f4a096908c9ee27f5cf61fc->enter($__internal_cba703a71659ddad80e3147d54a97548dd5413555f4a096908c9ee27f5cf61fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/category/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_cba703a71659ddad80e3147d54a97548dd5413555f4a096908c9ee27f5cf61fc->leave($__internal_cba703a71659ddad80e3147d54a97548dd5413555f4a096908c9ee27f5cf61fc_prof);

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
        return array (  305 => 102,  301 => 101,  296 => 100,  290 => 99,  273 => 89,  269 => 88,  265 => 87,  257 => 81,  243 => 80,  240 => 79,  237 => 78,  234 => 77,  232 => 76,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  205 => 66,  200 => 63,  196 => 61,  192 => 59,  190 => 58,  185 => 56,  181 => 55,  175 => 54,  171 => 53,  166 => 51,  160 => 50,  154 => 48,  151 => 47,  134 => 46,  111 => 25,  102 => 23,  95 => 18,  91 => 17,  85 => 14,  81 => 12,  75 => 11,  64 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('admin_category_index') }}\">Catégories</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes catégories</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-effect waves-light green pull-right\" href=\"{{ path('admin_category_new') }}\"><i class=\"material-icons left medium\">add</i> Créer une catégorie</a>
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
        <div class=\"col s12 m12 l12\">
            <table class=\"table striped bordered responsive-table\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th>
                            <input type=\"checkbox\" name=\"selected_category_master\" id=\"selected_category_master\" onclick=\"checkUncheckAll()\">
                            <label for=\"selected_category_master\"></label>
                        </th>
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
                            <td>
                                <input class=\"set_selection\" type=\"checkbox\" id=\"chk_{{category.id}}\" name=\"selected_category[]\" value=\"{{category.id}}\">
                                <label for=\"chk_{{category.id}}\"></label>
                            </td>
                            <td>{{ category.nom }}</td>
                            <td>{% if category.getCategoryParente() != null %}{{ category.getCategoryParente().getNom() }}{% endif %}</td>
                            <td>{{ category.auteur }}</td>
                            <td>{{ category.dateCreation| date('d/m/Y') }}</td>
                            <td class=\"text-left\">
                                {% if category.isActive %}
                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                {% else %}
                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                {% endif %}
                            </td>
                            <td class=\"text-right\">
                                <td class=\"text-right\">
                                    <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-{{category.id}}'><i class=\"material-icons\">build</i></a>
                                    <ul id='dropdown-action-{{category.id}}' class='dropdown-content'>
                                        <li><a class=\"\" href=\"{{ path('admin_category_show', { 'id': category.id }) }}\"><i class=\"material-icons left\">search</i> Afficher</a></li>
                                        <li><a class=\"action-blue\" href=\"{{ path('admin_category_edit', { 'id': category.id }) }}\"><i class=\"material-icons left\">mode_edit</i> Modifier</a></li>
                                        <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxCategory({{category.id}},'{{ path('category_ajax_delete', { 'id': category.id }) }}')\"><i class=\"material-icons left\">delete</i> Supprimer</a></li>
                                    </ul>
                                </td>
                                
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
                            <a data-hover=\"true\" data-beloworigin=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue' href='#' data-activates='dropdown-action-group'>Pour la sélection</a>
                            <ul id='dropdown-action-group' class='dropdown-content'>
                                <li><a class=\"action-purple\" href=\"#\" onclick=\"changeStateAjaxCategories('{{path('category_ajax_change_state')}}',false)\"><i class=\"material-icons left\">cancel</i> Désactiver la sélection</a></li>
                                <li><a class=\"action-green\" href=\"#\" onclick=\"changeStateAjaxCategories('{{path('category_ajax_change_state')}}',true)\"><i class=\"material-icons left\">done</i> Activer la sélection</a></li>
                                <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxCategories('{{path('category_ajax_delete', { 'id': 0 })}}')\"><i class=\"material-icons left\">delete</i> Supprimer la sélection</a></li>
                            </ul>
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
