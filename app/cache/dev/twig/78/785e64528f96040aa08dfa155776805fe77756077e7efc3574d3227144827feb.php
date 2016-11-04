<?php

/* ArticleBundle:article:show.html.twig */
class __TwigTemplate_388d64e0cfec539c4cbe82c17f14b3e96f42946215e9d298c0c84f1dc99697c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:article:show.html.twig", 1);
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
        $__internal_7ac89369fbf4763e7b0373e621af086a6ca8a9f64808eb3d8ce2038abc0a5d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac89369fbf4763e7b0373e621af086a6ca8a9f64808eb3d8ce2038abc0a5d8d->enter($__internal_7ac89369fbf4763e7b0373e621af086a6ca8a9f64808eb3d8ce2038abc0a5d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac89369fbf4763e7b0373e621af086a6ca8a9f64808eb3d8ce2038abc0a5d8d->leave($__internal_7ac89369fbf4763e7b0373e621af086a6ca8a9f64808eb3d8ce2038abc0a5d8d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cd1660e92be99123fe1aaa158ecada2c31e1f56afd5a63a0873149151ea1a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd1660e92be99123fe1aaa158ecada2c31e1f56afd5a63a0873149151ea1a58->enter($__internal_1cd1660e92be99123fe1aaa158ecada2c31e1f56afd5a63a0873149151ea1a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:show.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_1cd1660e92be99123fe1aaa158ecada2c31e1f56afd5a63a0873149151ea1a58->leave($__internal_1cd1660e92be99123fe1aaa158ecada2c31e1f56afd5a63a0873149151ea1a58_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17418649c7ea635274a455f4e436e95589dc3ffad14993d205b823c34daf20e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17418649c7ea635274a455f4e436e95589dc3ffad14993d205b823c34daf20e2->enter($__internal_17418649c7ea635274a455f4e436e95589dc3ffad14993d205b823c34daf20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:show.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_17418649c7ea635274a455f4e436e95589dc3ffad14993d205b823c34daf20e2->leave($__internal_17418649c7ea635274a455f4e436e95589dc3ffad14993d205b823c34daf20e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19b8642fda7203bf1a7e850af30e06cf3b446ec4582d9e369d7a2a5e7134d916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b8642fda7203bf1a7e850af30e06cf3b446ec4582d9e369d7a2a5e7134d916->enter($__internal_19b8642fda7203bf1a7e850af30e06cf3b446ec4582d9e369d7a2a5e7134d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:show.html.twig"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"btn-group pull-right\" role=\"group\">
                <a role=\"button\" class=\"btn btn-info\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Éditer</a>
                <a role=\"button\" class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>";
        // line 28
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array()), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Résumé</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "resume", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Contenu</th>
                        <td>";
        // line 40
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method")) > 0)) {
            // line 46
            echo "                                <ul>
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 48
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                </ul>
                            ";
        }
        // line 52
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Etat</th>
                        <td>";
        // line 56
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "etat", array())) {
            echo "<span class=\"tag tag-success\">Publié</span>";
        } else {
            echo "<span class=\"tag tag-danger\">Dépublié</span>";
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
             <div class=\"form-inline\">
                                ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer cet article\">
                                ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            </div><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i> Modifier</a>

                
         </div>
    </div>
";
        
        $__internal_19b8642fda7203bf1a7e850af30e06cf3b446ec4582d9e369d7a2a5e7134d916->leave($__internal_19b8642fda7203bf1a7e850af30e06cf3b446ec4582d9e369d7a2a5e7134d916_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 68,  186 => 67,  181 => 65,  165 => 56,  159 => 52,  155 => 50,  146 => 48,  142 => 47,  139 => 46,  137 => 45,  129 => 40,  122 => 36,  115 => 32,  106 => 28,  99 => 24,  92 => 20,  79 => 10,  75 => 9,  70 => 6,  64 => 5,  50 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::admin.html.twig' %}
{% block stylesheets %}
    {{ parent() }}{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Article</a> /  Créer un article{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"btn-group pull-right\" role=\"group\">
                <a role=\"button\" class=\"btn btn-info\" href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\"><i class=\"fa fa-edit\"></i> Éditer</a>
                <a role=\"button\" class=\"btn btn-warning\" href=\"{{ path('admin_article_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ article.id }}</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>{{ article.titre }}</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>{% if article.dateCreation %}{{ article.dateCreation|date('d-m-Y H:i:s') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>{{ article.auteur }}</td>
                    </tr>
                    <tr>
                        <th>Résumé</th>
                        <td>{{ article.resume}}</td>
                    </tr>
                    <tr>
                        <th>Contenu</th>
                        <td>{{ article.contenu|raw}}</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            {% if article.getKeywords()|length >0 %}
                                <ul>
                                    {% for k in article.getKeywords() %}
                                        <li>{{k.value}}</li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Etat</th>
                        <td>{% if article.etat %}<span class=\"tag tag-success\">Publié</span>{% else %}<span class=\"tag tag-danger\">Dépublié</span>{% endif %}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
             <div class=\"form-inline\">
                                {{ form_start(delete_form) }}
                                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer cet article\">
                                {{ form_end(delete_form) }}
                            </div><a href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i> Modifier</a>

                
         </div>
    </div>
{% endblock %}
", "ArticleBundle:article:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/article/show.html.twig");
    }
}
