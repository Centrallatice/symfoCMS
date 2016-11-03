<?php

/* ArticleBundle:article:index.html.twig */
class __TwigTemplate_053856191b1aef7d27c09f6e023d0b4d012d527489e5571776c4c010d44c567e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:article:index.html.twig", 1);
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
        $__internal_90f488b8fcdf224e83552286017984553f3528dee2c908f9525bf0a595895825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f488b8fcdf224e83552286017984553f3528dee2c908f9525bf0a595895825->enter($__internal_90f488b8fcdf224e83552286017984553f3528dee2c908f9525bf0a595895825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f488b8fcdf224e83552286017984553f3528dee2c908f9525bf0a595895825->leave($__internal_90f488b8fcdf224e83552286017984553f3528dee2c908f9525bf0a595895825_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08ebc67a35fd89126447fa65706c88145aed769c958a747d7429dc22e0e9a7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ebc67a35fd89126447fa65706c88145aed769c958a747d7429dc22e0e9a7ae->enter($__internal_08ebc67a35fd89126447fa65706c88145aed769c958a747d7429dc22e0e9a7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

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
        
        $__internal_08ebc67a35fd89126447fa65706c88145aed769c958a747d7429dc22e0e9a7ae->leave($__internal_08ebc67a35fd89126447fa65706c88145aed769c958a747d7429dc22e0e9a7ae_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d916ae4b2d35471c98129bcfe188f75a371df67c30f26375797034958f47607e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d916ae4b2d35471c98129bcfe188f75a371df67c30f26375797034958f47607e->enter($__internal_d916ae4b2d35471c98129bcfe188f75a371df67c30f26375797034958f47607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

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
        
        $__internal_d916ae4b2d35471c98129bcfe188f75a371df67c30f26375797034958f47607e->leave($__internal_d916ae4b2d35471c98129bcfe188f75a371df67c30f26375797034958f47607e_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:article:index.html.twig";
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
", "ArticleBundle:article:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/article/index.html.twig");
    }
}
