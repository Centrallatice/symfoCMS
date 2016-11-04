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
        $__internal_161ec9a3234cf82fb22f6348c7f154bb9936d13e1fc92cbcad4ff0822c8313a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161ec9a3234cf82fb22f6348c7f154bb9936d13e1fc92cbcad4ff0822c8313a6->enter($__internal_161ec9a3234cf82fb22f6348c7f154bb9936d13e1fc92cbcad4ff0822c8313a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161ec9a3234cf82fb22f6348c7f154bb9936d13e1fc92cbcad4ff0822c8313a6->leave($__internal_161ec9a3234cf82fb22f6348c7f154bb9936d13e1fc92cbcad4ff0822c8313a6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e5973fc0a3441789fe95ec416e5fef58d3c2c4cec09fce6ab1fe13afafa126c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5973fc0a3441789fe95ec416e5fef58d3c2c4cec09fce6ab1fe13afafa126c->enter($__internal_9e5973fc0a3441789fe95ec416e5fef58d3c2c4cec09fce6ab1fe13afafa126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

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
        
        $__internal_9e5973fc0a3441789fe95ec416e5fef58d3c2c4cec09fce6ab1fe13afafa126c->leave($__internal_9e5973fc0a3441789fe95ec416e5fef58d3c2c4cec09fce6ab1fe13afafa126c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e643aadda073af5e4b13291621806a260323f765038a89c10bb07dfeb8c93417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e643aadda073af5e4b13291621806a260323f765038a89c10bb07dfeb8c93417->enter($__internal_e643aadda073af5e4b13291621806a260323f765038a89c10bb07dfeb8c93417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Articles</a> /  Mes articles";
        
        $__internal_e643aadda073af5e4b13291621806a260323f765038a89c10bb07dfeb8c93417->leave($__internal_e643aadda073af5e4b13291621806a260323f765038a89c10bb07dfeb8c93417_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f3450104b18acc7d72851743143502d46e5089e21817f6defe287c05972c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f3450104b18acc7d72851743143502d46e5089e21817f6defe287c05972c66->enter($__internal_a4f3450104b18acc7d72851743143502d46e5089e21817f6defe287c05972c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

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
        
        $__internal_a4f3450104b18acc7d72851743143502d46e5089e21817f6defe287c05972c66->leave($__internal_a4f3450104b18acc7d72851743143502d46e5089e21817f6defe287c05972c66_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_902440155d5e9485eae673a2b7ce80747abf2d9ce4e28fe380d7375bfb604ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902440155d5e9485eae673a2b7ce80747abf2d9ce4e28fe380d7375bfb604ab3->enter($__internal_902440155d5e9485eae673a2b7ce80747abf2d9ce4e28fe380d7375bfb604ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:index.html.twig"));

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
        
        $__internal_902440155d5e9485eae673a2b7ce80747abf2d9ce4e28fe380d7375bfb604ab3->leave($__internal_902440155d5e9485eae673a2b7ce80747abf2d9ce4e28fe380d7375bfb604ab3_prof);

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
{% endblock %}", "ArticleBundle:article:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/article/index.html.twig");
    }
}
