<?php

/* @Article/article/show.html.twig */
class __TwigTemplate_4bed12c6733cb9c95e519dbb1478a9aa439aaaa35035a086ba00c5cb943b39ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/article/show.html.twig", 1);
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
        $__internal_6419c01254e407b4645ffd19b5eca78af966824c71430176eb1e67451fc467bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6419c01254e407b4645ffd19b5eca78af966824c71430176eb1e67451fc467bf->enter($__internal_6419c01254e407b4645ffd19b5eca78af966824c71430176eb1e67451fc467bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6419c01254e407b4645ffd19b5eca78af966824c71430176eb1e67451fc467bf->leave($__internal_6419c01254e407b4645ffd19b5eca78af966824c71430176eb1e67451fc467bf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd6800bb98e902eedc653ebe19d2855ab757764d26029d0ee1e69f38ae9668ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6800bb98e902eedc653ebe19d2855ab757764d26029d0ee1e69f38ae9668ad->enter($__internal_bd6800bb98e902eedc653ebe19d2855ab757764d26029d0ee1e69f38ae9668ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_bd6800bb98e902eedc653ebe19d2855ab757764d26029d0ee1e69f38ae9668ad->leave($__internal_bd6800bb98e902eedc653ebe19d2855ab757764d26029d0ee1e69f38ae9668ad_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_773df7e1bc07190e4c8a82e1856664206372d84f02d465783767ba147f8b3356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773df7e1bc07190e4c8a82e1856664206372d84f02d465783767ba147f8b3356->enter($__internal_773df7e1bc07190e4c8a82e1856664206372d84f02d465783767ba147f8b3356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_773df7e1bc07190e4c8a82e1856664206372d84f02d465783767ba147f8b3356->leave($__internal_773df7e1bc07190e4c8a82e1856664206372d84f02d465783767ba147f8b3356_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66cd072b35d6db88808dbec969361017dbdf59272c88712d5c87cffcbadde6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cd072b35d6db88808dbec969361017dbdf59272c88712d5c87cffcbadde6e2->enter($__internal_66cd072b35d6db88808dbec969361017dbdf59272c88712d5c87cffcbadde6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

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
        
        $__internal_66cd072b35d6db88808dbec969361017dbdf59272c88712d5c87cffcbadde6e2->leave($__internal_66cd072b35d6db88808dbec969361017dbdf59272c88712d5c87cffcbadde6e2_prof);

    }

    public function getTemplateName()
    {
        return "@Article/article/show.html.twig";
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
", "@Article/article/show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\show.html.twig");
    }
}
