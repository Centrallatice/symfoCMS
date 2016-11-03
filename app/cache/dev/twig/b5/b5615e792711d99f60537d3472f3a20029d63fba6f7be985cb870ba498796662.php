<?php

/* @Article/article/index.html.twig */
class __TwigTemplate_319ba3a3503d61b68279ef888e6036411a1a28c20796ef95597c2b09f77d7c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/article/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_462311b1630d7edf4ab01ea5ced73af6dda90bf00bb886e89170296a633f17ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462311b1630d7edf4ab01ea5ced73af6dda90bf00bb886e89170296a633f17ef->enter($__internal_462311b1630d7edf4ab01ea5ced73af6dda90bf00bb886e89170296a633f17ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462311b1630d7edf4ab01ea5ced73af6dda90bf00bb886e89170296a633f17ef->leave($__internal_462311b1630d7edf4ab01ea5ced73af6dda90bf00bb886e89170296a633f17ef_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a9ff3372fb127b81f540645d0481f8f881dfc57c1048fdbb839029ab1476c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9ff3372fb127b81f540645d0481f8f881dfc57c1048fdbb839029ab1476c18->enter($__internal_9a9ff3372fb127b81f540645d0481f8f881dfc57c1048fdbb839029ab1476c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

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
        
        $__internal_9a9ff3372fb127b81f540645d0481f8f881dfc57c1048fdbb839029ab1476c18->leave($__internal_9a9ff3372fb127b81f540645d0481f8f881dfc57c1048fdbb839029ab1476c18_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2d7ebf34ddec2fd1d79937c69b719c9cf07a302683eef68d1b0c9b6c22e314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2d7ebf34ddec2fd1d79937c69b719c9cf07a302683eef68d1b0c9b6c22e314->enter($__internal_0d2d7ebf34ddec2fd1d79937c69b719c9cf07a302683eef68d1b0c9b6c22e314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_new");
        echo "\"><i class=\"fa fa-plus\"></i> Créer un article</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class='table table-responsive'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Datecreation</th>
                        <th>Auteur</th>
                        <th>Catégorie</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 29
            echo "                    <tr>
                        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            if (($this->getAttribute($context["article"], "category", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "nom", array()), "html", null, true);
            } else {
                echo "Non catégorisé";
            }
            echo "</td>
                        <td>";
            // line 35
            if ($this->getAttribute($context["article"], "etat", array())) {
                echo "<span class=\"tag tag-success\">Publié</span>";
            } else {
                echo "<span class=\"tag tag-danger\">Dépublié</span>";
            }
            echo "</td>
                        <td>
                            
                            <a role=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-search\"></i> Afficher</a>
                               
                                    <a role=\"button\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-edit\"></i> Modifier</a>
                                
                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_0d2d7ebf34ddec2fd1d79937c69b719c9cf07a302683eef68d1b0c9b6c22e314->leave($__internal_0d2d7ebf34ddec2fd1d79937c69b719c9cf07a302683eef68d1b0c9b6c22e314_prof);

    }

    public function getTemplateName()
    {
        return "@Article/article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  137 => 40,  132 => 38,  122 => 35,  114 => 34,  110 => 33,  104 => 32,  100 => 31,  94 => 30,  91 => 29,  87 => 28,  66 => 10,  62 => 8,  56 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"{{ path('admin_article_new') }}\"><i class=\"fa fa-plus\"></i> Créer un article</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class='table table-responsive'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Datecreation</th>
                        <th>Auteur</th>
                        <th>Catégorie</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for article in articles %}
                    <tr>
                        <td><a href=\"{{ path('admin_article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                        <td>{{ article.titre }}</td>
                        <td>{% if article.dateCreation %}{{ article.dateCreation|date('d-m-Y H:i:s') }}{% endif %}</td>
                        <td>{{ article.auteur }}</td>
                        <td>{% if article.category != null %}{{article.category.nom}}{% else %}Non catégorisé{% endif %}</td>
                        <td>{% if article.etat %}<span class=\"tag tag-success\">Publié</span>{% else %}<span class=\"tag tag-danger\">Dépublié</span>{% endif %}</td>
                        <td>
                            
                            <a role=\"button\" href=\"{{ path('admin_article_show', { 'id': article.id }) }}\" class=\"btn btn-info\"><i class=\"fa fa-search\"></i> Afficher</a>
                               
                                    <a role=\"button\" href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\" class=\"btn btn-primary\"><i class=\"fa fa-edit\"></i> Modifier</a>
                                
                            
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "@Article/article/index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\index.html.twig");
    }
}
