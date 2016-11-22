<?php

/* ArticleBundle:Article:index.html.twig */
class __TwigTemplate_4153943a2b8d77017d3cf6194b453d9a6b293de37c643301b58190dfa0f70378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:Article:index.html.twig", 1);
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
        $__internal_87d096dc2b20e64cec9e67415874e47d9ac379a2f2ae7b3d139d249aec70779a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d096dc2b20e64cec9e67415874e47d9ac379a2f2ae7b3d139d249aec70779a->enter($__internal_87d096dc2b20e64cec9e67415874e47d9ac379a2f2ae7b3d139d249aec70779a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d096dc2b20e64cec9e67415874e47d9ac379a2f2ae7b3d139d249aec70779a->leave($__internal_87d096dc2b20e64cec9e67415874e47d9ac379a2f2ae7b3d139d249aec70779a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b95cc4f29b3de90a08b1e3b9fa2919027dac5ae3217af193000f28672b6090c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95cc4f29b3de90a08b1e3b9fa2919027dac5ae3217af193000f28672b6090c0->enter($__internal_b95cc4f29b3de90a08b1e3b9fa2919027dac5ae3217af193000f28672b6090c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b95cc4f29b3de90a08b1e3b9fa2919027dac5ae3217af193000f28672b6090c0->leave($__internal_b95cc4f29b3de90a08b1e3b9fa2919027dac5ae3217af193000f28672b6090c0_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22715748b670fae2dbd106291c200a9c893c961723b2881670fac84059e43a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22715748b670fae2dbd106291c200a9c893c961723b2881670fac84059e43a4f->enter($__internal_22715748b670fae2dbd106291c200a9c893c961723b2881670fac84059e43a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Articles</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes articles</a>
";
        
        $__internal_22715748b670fae2dbd106291c200a9c893c961723b2881670fac84059e43a4f->leave($__internal_22715748b670fae2dbd106291c200a9c893c961723b2881670fac84059e43a4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ff56307e20803f135a19e31e2a0d422e9c2958b458268797c29206cfd08fed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff56307e20803f135a19e31e2a0d422e9c2958b458268797c29206cfd08fed2->enter($__internal_5ff56307e20803f135a19e31e2a0d422e9c2958b458268797c29206cfd08fed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"col s12\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'form_start');
        echo "
                <div class=\"row valign-wrapper no-marg-bottom\">
                    <div class=\"col s8 l6 valign\">
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'widget', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                    </div>
                    <div class=\"col s2 l1 valign\">
                        <button class='btn blue waves-effect waves-light contraintwidth' type=\"submit\" title=\"filter\"><i class=\"material-icons  \">tune</i></button>
                    </div>
                    <div class=\"col s2 l5 valign\">
                        <a role=\"button\" class=\"btn waves-effect waves-light green pull-right contraintwidth-s contraintwidth-m\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_new");
        echo "\"><i class=\"material-icons left medium\">add</i><span class=\"hide-on-med-and-down\">Créer un article</span></a>
                    </div>
                </div>
            ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form_category"]) ? $context["form_category"] : $this->getContext($context, "form_category")), 'form_end');
        echo "
        </div>
        
    </div>
    
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
       </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
    <hr />       
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <table class=\"table striped bordered responsive-table\">
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 57
            echo "                    <tr id=\"art-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                        <td class=\"text-right\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-right\">";
            // line 60
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            if (($this->getAttribute($context["article"], "category", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "nom", array()), "html", null, true);
            } else {
                echo "Non catégorisé";
            }
            echo "</td>
                        <td class=\"text-left\">
                                ";
            // line 64
            if ($this->getAttribute($context["article"], "etat", array())) {
                // line 65
                echo "                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                ";
            } else {
                // line 67
                echo "                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                ";
            }
            // line 69
            echo "                            </td>
                        <td class=\"text-right\">
                            <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "'><i class=\"material-icons\">build</i></a>
                            <ul id='dropdown-action-";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "' class='dropdown-content'>
                                <li><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">search</i>Afficher</a></li>
                                <li><a class=\"action-blue\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">mode_edit</i>Modifier</a></li>
                                <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxArticle(";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_ajax_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "')\"><i class=\"material-icons left\">delete</i>Supprimer</a></li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_5ff56307e20803f135a19e31e2a0d422e9c2958b458268797c29206cfd08fed2->leave($__internal_5ff56307e20803f135a19e31e2a0d422e9c2958b458268797c29206cfd08fed2_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddc7fead319009787acfd52462a8146583a9a8ddf5023206c24b798a52f643b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc7fead319009787acfd52462a8146583a9a8ddf5023206c24b798a52f643b5->enter($__internal_ddc7fead319009787acfd52462a8146583a9a8ddf5023206c24b798a52f643b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'>
    </script><script type='text/javascript' src='";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/generator.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_ddc7fead319009787acfd52462a8146583a9a8ddf5023206c24b798a52f643b5->leave($__internal_ddc7fead319009787acfd52462a8146583a9a8ddf5023206c24b798a52f643b5_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 88,  256 => 87,  251 => 86,  245 => 85,  234 => 80,  221 => 75,  217 => 74,  213 => 73,  209 => 72,  205 => 71,  201 => 69,  197 => 67,  193 => 65,  191 => 64,  182 => 62,  178 => 61,  172 => 60,  168 => 59,  162 => 58,  157 => 57,  153 => 56,  134 => 39,  125 => 37,  118 => 32,  114 => 31,  106 => 26,  100 => 23,  91 => 17,  85 => 14,  81 => 12,  75 => 11,  64 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
    <a class=\"breadcrumb\" href=\"{{ path('admin_article_index') }}\">Articles</a>
    <a class=\"breadcrumb\" href=\"#!\">Mes articles</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12\">
            {{ form_start(form_category) }}
                <div class=\"row valign-wrapper no-marg-bottom\">
                    <div class=\"col s8 l6 valign\">
                    {{ form_widget(form_category,{ 'attr': {'class': 'form-control form-control-sm'} }) }}
                    </div>
                    <div class=\"col s2 l1 valign\">
                        <button class='btn blue waves-effect waves-light contraintwidth' type=\"submit\" title=\"filter\"><i class=\"material-icons  \">tune</i></button>
                    </div>
                    <div class=\"col s2 l5 valign\">
                        <a role=\"button\" class=\"btn waves-effect waves-light green pull-right contraintwidth-s contraintwidth-m\" href=\"{{ path('admin_article_new') }}\"><i class=\"material-icons left medium\">add</i><span class=\"hide-on-med-and-down\">Créer un article</span></a>
                    </div>
                </div>
            {{ form_end(form_category) }}
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
                        <td class=\"text-right\">{% if article.dateCreation %}{{ article.dateCreation|date('d-m-Y') }}{% endif %}</td>
                        <td>{{ article.auteur }}</td>
                        <td>{% if article.category != null %}{{article.category.nom}}{% else %}Non catégorisé{% endif %}</td>
                        <td class=\"text-left\">
                                {% if article.etat %}
                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                {% else %}
                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                {% endif %}
                            </td>
                        <td class=\"text-right\">
                            <a data-hover=\"true\" data-constrainwidth=\"false\" class='dropdown-button btn blue contraintwidth' href='#' data-activates='dropdown-action-{{article.id}}'><i class=\"material-icons\">build</i></a>
                            <ul id='dropdown-action-{{article.id}}' class='dropdown-content'>
                                <li><a href=\"{{ path('admin_article_show', { 'id': article.id }) }}\"><i class=\"material-icons left\">search</i>Afficher</a></li>
                                <li><a class=\"action-blue\" href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\"><i class=\"material-icons left\">mode_edit</i>Modifier</a></li>
                                <li><a class=\"action-red\" href=\"#\" onclick=\"deleteAjaxArticle({{article.id}},'{{ path('article_ajax_delete', { 'id': article.id }) }}')\"><i class=\"material-icons left\">delete</i>Supprimer</a></li>
                            </ul>
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
{% endblock %}", "ArticleBundle:Article:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/Article/index.html.twig");
    }
}
