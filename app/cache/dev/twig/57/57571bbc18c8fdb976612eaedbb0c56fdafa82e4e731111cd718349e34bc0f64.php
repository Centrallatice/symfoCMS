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
        $__internal_baa3fb795c874e04b458af52ee6bcbd96adcc613a8037e225a4cde8652f8b02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa3fb795c874e04b458af52ee6bcbd96adcc613a8037e225a4cde8652f8b02e->enter($__internal_baa3fb795c874e04b458af52ee6bcbd96adcc613a8037e225a4cde8652f8b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa3fb795c874e04b458af52ee6bcbd96adcc613a8037e225a4cde8652f8b02e->leave($__internal_baa3fb795c874e04b458af52ee6bcbd96adcc613a8037e225a4cde8652f8b02e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7699edcac1030c92b60953aafc2d16d1798e3e0f061b7bcc1316913ba743acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7699edcac1030c92b60953aafc2d16d1798e3e0f061b7bcc1316913ba743acb->enter($__internal_e7699edcac1030c92b60953aafc2d16d1798e3e0f061b7bcc1316913ba743acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_e7699edcac1030c92b60953aafc2d16d1798e3e0f061b7bcc1316913ba743acb->leave($__internal_e7699edcac1030c92b60953aafc2d16d1798e3e0f061b7bcc1316913ba743acb_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f3f589cdfb7765a355743546902954c0f72aff96ce3606a9d498745bf2e4d146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f589cdfb7765a355743546902954c0f72aff96ce3606a9d498745bf2e4d146->enter($__internal_f3f589cdfb7765a355743546902954c0f72aff96ce3606a9d498745bf2e4d146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Créer un article";
        
        $__internal_f3f589cdfb7765a355743546902954c0f72aff96ce3606a9d498745bf2e4d146->leave($__internal_f3f589cdfb7765a355743546902954c0f72aff96ce3606a9d498745bf2e4d146_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f4cd036afc954b7054c2d1fa44d9e1e91379903770211ea911ab49efbd0522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f4cd036afc954b7054c2d1fa44d9e1e91379903770211ea911ab49efbd0522->enter($__internal_24f4cd036afc954b7054c2d1fa44d9e1e91379903770211ea911ab49efbd0522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/show.html.twig"));

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
                        <th>Etat</th>
                        <td>";
        // line 44
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
        <div class=\"col-xs-12 text-center\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> Supprimer</button>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
         </div>
    </div>
";
        
        $__internal_24f4cd036afc954b7054c2d1fa44d9e1e91379903770211ea911ab49efbd0522->leave($__internal_24f4cd036afc954b7054c2d1fa44d9e1e91379903770211ea911ab49efbd0522_prof);

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
        return array (  157 => 55,  152 => 53,  136 => 44,  129 => 40,  122 => 36,  115 => 32,  106 => 28,  99 => 24,  92 => 20,  79 => 10,  75 => 9,  70 => 6,  64 => 5,  50 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
                        <th>Etat</th>
                        <td>{% if article.etat %}<span class=\"tag tag-success\">Publié</span>{% else %}<span class=\"tag tag-danger\">Dépublié</span>{% endif %}</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 text-center\">
            {{ form_start(delete_form) }}
                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> Supprimer</button>
            {{ form_end(delete_form) }}
         </div>
    </div>
{% endblock %}
", "@Article/article/show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\show.html.twig");
    }
}
