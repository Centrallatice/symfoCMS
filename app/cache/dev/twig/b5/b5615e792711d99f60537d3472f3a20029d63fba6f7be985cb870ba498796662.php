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
        $__internal_0db0f96b527094536512f49591a3f70754be776e66e49a84800aa3889eb3e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db0f96b527094536512f49591a3f70754be776e66e49a84800aa3889eb3e862->enter($__internal_0db0f96b527094536512f49591a3f70754be776e66e49a84800aa3889eb3e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db0f96b527094536512f49591a3f70754be776e66e49a84800aa3889eb3e862->leave($__internal_0db0f96b527094536512f49591a3f70754be776e66e49a84800aa3889eb3e862_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_774de8d16e0f2deac68d6ac6eae482a87c4b886397d629e2441ff66a68d75f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774de8d16e0f2deac68d6ac6eae482a87c4b886397d629e2441ff66a68d75f37->enter($__internal_774de8d16e0f2deac68d6ac6eae482a87c4b886397d629e2441ff66a68d75f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

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
        
        $__internal_774de8d16e0f2deac68d6ac6eae482a87c4b886397d629e2441ff66a68d75f37->leave($__internal_774de8d16e0f2deac68d6ac6eae482a87c4b886397d629e2441ff66a68d75f37_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8dfd0f1cadfc9b4dfa71ec7c0f332ef2f0abcdfd2d2bd6df6b0b5368b5400274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfd0f1cadfc9b4dfa71ec7c0f332ef2f0abcdfd2d2bd6df6b0b5368b5400274->enter($__internal_8dfd0f1cadfc9b4dfa71ec7c0f332ef2f0abcdfd2d2bd6df6b0b5368b5400274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Articles</a> /  Mes articles";
        
        $__internal_8dfd0f1cadfc9b4dfa71ec7c0f332ef2f0abcdfd2d2bd6df6b0b5368b5400274->leave($__internal_8dfd0f1cadfc9b4dfa71ec7c0f332ef2f0abcdfd2d2bd6df6b0b5368b5400274_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af2ad5fe639fe3171870d56de8ffd9efcc57b065d97deb0b53cdf7645175068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af2ad5fe639fe3171870d56de8ffd9efcc57b065d97deb0b53cdf7645175068->enter($__internal_7af2ad5fe639fe3171870d56de8ffd9efcc57b065d97deb0b53cdf7645175068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-lg-8\">
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'form_start');
        echo "
                <div class=\"input-group input-group-sm\">
                    <span class=\"input-group-addon\">
                        Filtrer par catégorie :
                    </span>
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'widget', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                    <span class=\"input-group-addon\">
                        <input class='btn btn-success btn-sm' type=\"submit\" value=\"Enregister\" />
                    </span>
                </div>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'form_end');
        echo "
        </div>
        <div class=\"col-lg-4\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_new");
        echo "\"><i class=\"fa fa-plus\"></i> Créer un article</a>
        </div>
    </div>
    
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
       </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
    <hr />       
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <table class=\"table table-striped table-bordered table-sm\">
                <thead class=\"thead-inverse\">
                    <tr>
                        <th class=\"text-right\">#</th>
                        <th>Titre</th>
                        <th>Créé le</th>
                        <th>Auteur</th>
                        <th>Catégorie</th>
                        <th>Etat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 54
            echo "                    <tr id=\"art-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                        <td class=\"text-right\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-right\">";
            // line 57
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            if (($this->getAttribute($context["article"], "category", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "nom", array()), "html", null, true);
            } else {
                echo "Non catégorisé";
            }
            echo "</td>
                        <td class=\"text-center ";
            // line 60
            if ($this->getAttribute($context["article"], "etat", array())) {
                echo "bg-success";
            } else {
                echo "bg-danger";
            }
            echo "\">
                            ";
            // line 61
            if ($this->getAttribute($context["article"], "etat", array())) {
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
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-search\"></i> Voir</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxArticle(";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_ajax_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "')\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_7af2ad5fe639fe3171870d56de8ffd9efcc57b065d97deb0b53cdf7645175068->leave($__internal_7af2ad5fe639fe3171870d56de8ffd9efcc57b065d97deb0b53cdf7645175068_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a85d4d5faf3df1d400428cfa240cf02315e8e51cf199794e75498d3fde19fc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85d4d5faf3df1d400428cfa240cf02315e8e51cf199794e75498d3fde19fc1d->enter($__internal_a85d4d5faf3df1d400428cfa240cf02315e8e51cf199794e75498d3fde19fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/index.html.twig"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_a85d4d5faf3df1d400428cfa240cf02315e8e51cf199794e75498d3fde19fc1d->leave($__internal_a85d4d5faf3df1d400428cfa240cf02315e8e51cf199794e75498d3fde19fc1d_prof);

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
        return array (  257 => 84,  253 => 83,  248 => 82,  242 => 81,  231 => 76,  219 => 70,  213 => 69,  209 => 68,  195 => 61,  187 => 60,  179 => 59,  175 => 58,  169 => 57,  165 => 56,  159 => 55,  154 => 54,  150 => 53,  131 => 36,  122 => 34,  115 => 29,  111 => 28,  104 => 24,  98 => 21,  90 => 16,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Articles</a> /  Mes articles{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-8\">
            {{ form_start(form_category) }}
                <div class=\"input-group input-group-sm\">
                    <span class=\"input-group-addon\">
                        Filtrer par catégorie :
                    </span>
                    {{ form_widget(form_category,{ 'attr': {'class': 'form-control form-control-sm'} }) }}
                    <span class=\"input-group-addon\">
                        <input class='btn btn-success btn-sm' type=\"submit\" value=\"Enregister\" />
                    </span>
                </div>
            {{ form_end(form_category) }}
        </div>
        <div class=\"col-lg-4\">
            <a role=\"button\" class=\"btn btn-success pull-right\" href=\"{{ path('admin_article_new') }}\"><i class=\"fa fa-plus\"></i> Créer un article</a>
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
                        <th class=\"text-right\">#</th>
                        <th>Titre</th>
                        <th>Créé le</th>
                        <th>Auteur</th>
                        <th>Catégorie</th>
                        <th>Etat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% for article in articles %}
                    <tr id=\"art-{{article.id}}\">
                        <td class=\"text-right\"><a href=\"{{ path('admin_article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                        <td>{{ article.titre }}</td>
                        <td class=\"text-right\">{% if article.dateCreation %}{{ article.dateCreation|date('d-m-Y H:i:s') }}{% endif %}</td>
                        <td>{{ article.auteur }}</td>
                        <td>{% if article.category != null %}{{article.category.nom}}{% else %}Non catégorisé{% endif %}</td>
                        <td class=\"text-center {% if article.etat %}bg-success{% else %}bg-danger{% endif %}\">
                            {% if article.etat %}Publié{% else %}Non publié{% endif %}</td>
                        <td class=\"text-right\">
                            <div class=\"input-group-btn input-group-sm\">
                                <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                      Actions
                                </button>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_article_show', { 'id': article.id }) }}\"><i class=\"fa fa-search\"></i> Voir</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAjaxArticle({{article.id}},'{{ path('article_ajax_delete', { 'id': article.id }) }}')\"><i class=\"fa fa-remove\"></i> Supprimer</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\"><i class=\"fa fa-cog\"></i> Modifier</a>
                                </div>
                            </div>
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
    </script><script type='text/javascript' src='{{asset('js/admin/article/generator.js')}}'></script>
{% endblock %}", "@Article/article/index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\index.html.twig");
    }
}
