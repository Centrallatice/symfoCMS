<?php

/* @PageViews/page/tabs/ihm.html.twig */
class __TwigTemplate_185d2e8c6cf36c0e81a850d95917332435d0710bc5eef4e169d8cdcd7e18038a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aad80608b9b6c481d5a6799f24891a3042b809ed77a35f17d38a29c549029d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aad80608b9b6c481d5a6799f24891a3042b809ed77a35f17d38a29c549029d6->enter($__internal_3aad80608b9b6c481d5a6799f24891a3042b809ed77a35f17d38a29c549029d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page/tabs/ihm.html.twig"));

        // line 1
        echo "<div class=\"containerPageCreation\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getRows", array(), "method")) == 0)) {
            // line 3
            echo "        <div class=\"alert alert-warning alert-dismissible fade in norowcreated\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            Vous n'avez pas encore créé de ligne
        </div>
    ";
        } else {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getRows", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 11
                echo "            <div id=\"newRow-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"row demoRow\">
                <div class=\"col s12 col-remove\">
                    <span class=\"titleAdminRow\">";
                // line 13
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["r"], "getTitreAdmin", array()), 0, 50), "html", null, true);
                echo "</span>
                    <a onclick=\"getModalEdit(";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_edit", array("id" => $this->getAttribute($context["r"], "getId", array(), "method"))), "html", null, true);
                echo "','modalEditRow')\" class=\"add-addon\" id=\"editRow\" title=\"Modifier\"><i class=\"fa fa-cog fa-opaciteme\"></i></a>
                    <a onclick=\"deleteRow(";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId", array(), "method"), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_delete", array("id" => $this->getAttribute($context["r"], "getId", array(), "method"))), "html", null, true);
                echo "')\" class=\"add-addon\" id=\"deleteRow\" title=\"Supprimer\"><i class=\"fa fa-remove fa-opaciteme\"></i></a>
                </div>
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "getCols", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 18
                    echo "                    <div class=\"demoCol ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getCssClass", array(), "method"), "html", null, true);
                    echo "\">
                        <div class=\"column ui-sortable\" onclick=\"getModalEdit(";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                    echo ",'";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_ajax_edit", array("id" => $this->getAttribute($context["c"], "getId", array(), "method"))), "html", null, true);
                    echo "','modalEditCol')\">      
                            <span class=\"titleAdminCell\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["c"], "getTitreAdmin", array()), 0, 20), "html", null, true);
                    echo "</span>
                        </div>
                        <div class=\"col-settings\">
                            <a class=\"add-addon\" onclick=\"getModalEdit(";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                    echo ",'";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_ajax_edit", array("id" => $this->getAttribute($context["c"], "getId", array(), "method"))), "html", null, true);
                    echo "','modalEditCol')\"><i class=\"fa fa-edit\"></i> Editer</a>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "</div>
<div class=\"fixed-action-btn \">
    <a href=\"#modalAddRow\"
       class=\"btn-floating btn-large green tooltipped\" data-position=\"left\" data-delay=\"50\" 
       data-tooltip=\"Créer une nouvelle ligne\">
        <i class=\"large material-icons\">add</i>
    </a>
</div>    
          
";
        // line 39
        $this->loadTemplate("@PageViews/page/modal/modalAddRow.html.twig", "@PageViews/page/tabs/ihm.html.twig", 39)->display($context);
        // line 40
        $this->loadTemplate("@PageViews/page/modal/modalEditCol.html.twig", "@PageViews/page/tabs/ihm.html.twig", 40)->display($context);
        // line 41
        $this->loadTemplate("@PageViews/page/modal/modalEditRow.html.twig", "@PageViews/page/tabs/ihm.html.twig", 41)->display($context);
        
        $__internal_3aad80608b9b6c481d5a6799f24891a3042b809ed77a35f17d38a29c549029d6->leave($__internal_3aad80608b9b6c481d5a6799f24891a3042b809ed77a35f17d38a29c549029d6_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page/tabs/ihm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  122 => 40,  120 => 39,  109 => 30,  106 => 29,  99 => 27,  87 => 23,  81 => 20,  75 => 19,  70 => 18,  66 => 17,  57 => 15,  51 => 14,  47 => 13,  41 => 11,  36 => 10,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"containerPageCreation\">
    {% if page.getRows()|length == 0 %}
        <div class=\"alert alert-warning alert-dismissible fade in norowcreated\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            Vous n'avez pas encore créé de ligne
        </div>
    {% else %}
        {% for r in page.getRows() %}
            <div id=\"newRow-{{r.getId()}}\" class=\"row demoRow\">
                <div class=\"col s12 col-remove\">
                    <span class=\"titleAdminRow\">{{r.getTitreAdmin|raw|slice(0,50)}}</span>
                    <a onclick=\"getModalEdit({{r.getId()}},'{{path('row_ajax_edit',{id:r.getId()})}}','modalEditRow')\" class=\"add-addon\" id=\"editRow\" title=\"Modifier\"><i class=\"fa fa-cog fa-opaciteme\"></i></a>
                    <a onclick=\"deleteRow({{page.getId()}},{{r.getId()}},'{{path('row_ajax_delete',{id:r.getId()})}}')\" class=\"add-addon\" id=\"deleteRow\" title=\"Supprimer\"><i class=\"fa fa-remove fa-opaciteme\"></i></a>
                </div>
                {% for c in r.getCols() %}
                    <div class=\"demoCol {{c.getCssClass()}}\">
                        <div class=\"column ui-sortable\" onclick=\"getModalEdit({{r.getId()}},'{{path('col_ajax_edit',{id:c.getId()})}}','modalEditCol')\">      
                            <span class=\"titleAdminCell\">{{c.getTitreAdmin|raw|slice(0,20)}}</span>
                        </div>
                        <div class=\"col-settings\">
                            <a class=\"add-addon\" onclick=\"getModalEdit({{r.getId()}},'{{path('col_ajax_edit',{id:c.getId()})}}','modalEditCol')\"><i class=\"fa fa-edit\"></i> Editer</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    {% endif %}
</div>
<div class=\"fixed-action-btn \">
    <a href=\"#modalAddRow\"
       class=\"btn-floating btn-large green tooltipped\" data-position=\"left\" data-delay=\"50\" 
       data-tooltip=\"Créer une nouvelle ligne\">
        <i class=\"large material-icons\">add</i>
    </a>
</div>    
          
{% include \"@PageViews/page/modal/modalAddRow.html.twig\" %}
{% include \"@PageViews/page/modal/modalEditCol.html.twig\" %}
{% include \"@PageViews/page/modal/modalEditRow.html.twig\" %}
", "@PageViews/page/tabs/ihm.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\tabs\\ihm.html.twig");
    }
}
