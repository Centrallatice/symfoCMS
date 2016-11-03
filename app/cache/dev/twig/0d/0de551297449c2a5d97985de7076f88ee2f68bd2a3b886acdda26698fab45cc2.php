<?php

/* PageBundle:page/tabs:ihm.html.twig */
class __TwigTemplate_660769776d4dd8bd5b53a8cff5dc469450abf0d9f5198ce0360230c0d432162e extends Twig_Template
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
        $__internal_d9a09a66eda72526b5343187e131856c20e9ffb6b6e4c0de22a68f7cf0e11c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a09a66eda72526b5343187e131856c20e9ffb6b6e4c0de22a68f7cf0e11c33->enter($__internal_d9a09a66eda72526b5343187e131856c20e9ffb6b6e4c0de22a68f7cf0e11c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page/tabs:ihm.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <button id=\"add-row\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#modalAddRow\">
            <i class=\"fa fa-plus\"></i> Ajouter une nouvelle ligne
        </button>
    </div>
</div>
<hr />
<div class=\"containerPageCreation\">
    
    ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getRows", array(), "method")) == 0)) {
            // line 12
            echo "        <div class=\"alert alert-warning alert-dismissible fade in norowcreated\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            Vous n'avez pas encore créé de ligne
        </div>
    ";
        } else {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getRows", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 20
                echo "            <div id=\"newRow-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"row demoRow\">
                <div class=\"col-xs-12 col-remove\">
                    <span class=\"titleAdminRow\">";
                // line 22
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["r"], "getTitreAdmin", array()), 0, 50), "html", null, true);
                echo "</span>
                    <a onclick=\"getModalEdit(";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_edit", array("id" => $this->getAttribute($context["r"], "getId", array(), "method"))), "html", null, true);
                echo "','modalEditRow')\" class=\"add-addon\" id=\"editRow\" title=\"Modifier\"><i class=\"fa fa-cog fa-opaciteme\"></i></a>
                    <a onclick=\"deleteRow(";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId", array(), "method"), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_delete", array("id" => $this->getAttribute($context["r"], "getId", array(), "method"))), "html", null, true);
                echo "')\" class=\"add-addon\" id=\"deleteRow\" title=\"Supprimer\"><i class=\"fa fa-remove fa-opaciteme\"></i></a>
                </div>
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "getCols", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 27
                    echo "                    <div class=\"demoCol ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getCssClass", array(), "method"), "html", null, true);
                    echo "\">
                        <div class=\"column ui-sortable\" onclick=\"getModalEdit(";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getId", array(), "method"), "html", null, true);
                    echo ",'";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_ajax_edit", array("id" => $this->getAttribute($context["c"], "getId", array(), "method"))), "html", null, true);
                    echo "','modalEditCol')\">      
                            <span class=\"titleAdminCell\">";
                    // line 29
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["c"], "getTitreAdmin", array()), 0, 20), "html", null, true);
                    echo "</span>
                        </div>
                        <div class=\"col-settings\">
                            <a class=\"add-addon\" onclick=\"getModalEdit(";
                    // line 32
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
                // line 36
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        // line 39
        echo "</div>
";
        // line 40
        $this->loadTemplate("@PageViews/page/modal/modalAddRow.html.twig", "PageBundle:page/tabs:ihm.html.twig", 40)->display($context);
        // line 41
        $this->loadTemplate("@PageViews/page/modal/modalEditCol.html.twig", "PageBundle:page/tabs:ihm.html.twig", 41)->display($context);
        // line 42
        $this->loadTemplate("@PageViews/page/modal/modalEditRow.html.twig", "PageBundle:page/tabs:ihm.html.twig", 42)->display($context);
        
        $__internal_d9a09a66eda72526b5343187e131856c20e9ffb6b6e4c0de22a68f7cf0e11c33->leave($__internal_d9a09a66eda72526b5343187e131856c20e9ffb6b6e4c0de22a68f7cf0e11c33_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page/tabs:ihm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  123 => 41,  121 => 40,  118 => 39,  115 => 38,  108 => 36,  96 => 32,  90 => 29,  84 => 28,  79 => 27,  75 => 26,  66 => 24,  60 => 23,  56 => 22,  50 => 20,  45 => 19,  36 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-xs-12\">
        <button id=\"add-row\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#modalAddRow\">
            <i class=\"fa fa-plus\"></i> Ajouter une nouvelle ligne
        </button>
    </div>
</div>
<hr />
<div class=\"containerPageCreation\">
    
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
                <div class=\"col-xs-12 col-remove\">
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
{% include \"@PageViews/page/modal/modalAddRow.html.twig\" %}
{% include \"@PageViews/page/modal/modalEditCol.html.twig\" %}
{% include \"@PageViews/page/modal/modalEditRow.html.twig\" %}
", "PageBundle:page/tabs:ihm.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/tabs/ihm.html.twig");
    }
}
