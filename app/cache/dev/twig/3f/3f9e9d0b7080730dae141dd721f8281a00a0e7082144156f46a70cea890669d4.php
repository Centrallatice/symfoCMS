<?php

/* ArticleBundle:Article:show.html.twig */
class __TwigTemplate_731c05ab69c0463e5925aeb1aa2bbdc9444c381781f5cb3e07a0ccf8ceb08b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:Article:show.html.twig", 1);
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
        $__internal_ed5677a5c57e53486ce71a528160ff639155221e1ca4c705cbcce53ccff0c4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5677a5c57e53486ce71a528160ff639155221e1ca4c705cbcce53ccff0c4bf->enter($__internal_ed5677a5c57e53486ce71a528160ff639155221e1ca4c705cbcce53ccff0c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5677a5c57e53486ce71a528160ff639155221e1ca4c705cbcce53ccff0c4bf->leave($__internal_ed5677a5c57e53486ce71a528160ff639155221e1ca4c705cbcce53ccff0c4bf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4e349767d2e5b32b2c8a3d3073980fb35998371da72f5bb08e2a570c159f5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e349767d2e5b32b2c8a3d3073980fb35998371da72f5bb08e2a570c159f5ac->enter($__internal_f4e349767d2e5b32b2c8a3d3073980fb35998371da72f5bb08e2a570c159f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_f4e349767d2e5b32b2c8a3d3073980fb35998371da72f5bb08e2a570c159f5ac->leave($__internal_f4e349767d2e5b32b2c8a3d3073980fb35998371da72f5bb08e2a570c159f5ac_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6eaff3d0592fc5c31d0cc93413214076e47206d98c4dee0ff2222d1ab4ad6e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaff3d0592fc5c31d0cc93413214076e47206d98c4dee0ff2222d1ab4ad6e0f->enter($__internal_6eaff3d0592fc5c31d0cc93413214076e47206d98c4dee0ff2222d1ab4ad6e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de l'article \" <strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</strong>\"</a>
";
        
        $__internal_6eaff3d0592fc5c31d0cc93413214076e47206d98c4dee0ff2222d1ab4ad6e0f->leave($__internal_6eaff3d0592fc5c31d0cc93413214076e47206d98c4dee0ff2222d1ab4ad6e0f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c32d54e71382f98737c8d89651c2d46caa97a6745f9ff001d08d4590255f705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c32d54e71382f98737c8d89651c2d46caa97a6745f9ff001d08d4590255f705->enter($__internal_9c32d54e71382f98737c8d89651c2d46caa97a6745f9ff001d08d4590255f705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>N°</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>";
        // line 29
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array()), "d-m-Y H\\hi"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Résumé</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "resume", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Contenu</th>
                        <td>";
        // line 41
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method")) > 0)) {
            // line 47
            echo "                                <ul>
                                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 49
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                </ul>
                            ";
        }
        // line 53
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Etat</th>
                        <td>";
        // line 57
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "etat", array())) {
            // line 58
            echo "                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                ";
        } else {
            // line 60
            echo "                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                ";
        }
        // line 62
        echo "                                </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"fixed-action-btn \">
        <a class=\"btn-floating btn-large purple\">
            <i class=\"large material-icons\">build</i>
        </a>
        <ul>
          <li>
              <a class=\"btn-floating blue tooltipped\" 
                 data-position=\"left\" data-delay=\"50\" data-tooltip=\"Modifier\"
                 title=\"Modifier\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">
                  <i class=\"material-icons\">mode_edit</i>
              </a>
          </li>
          <li>
              ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button title=\"Supprimer\" type=\"submit\" class=\"btn-floating red tooltipped\"
                            data-position=\"left\" data-delay=\"50\" data-tooltip=\"Supprimer\">
                        <i class=\"material-icons\">delete</i>
                    </button>
             ";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
          </li>
        </ul>
      </div>   
";
        
        $__internal_9c32d54e71382f98737c8d89651c2d46caa97a6745f9ff001d08d4590255f705->leave($__internal_9c32d54e71382f98737c8d89651c2d46caa97a6745f9ff001d08d4590255f705_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 86,  200 => 81,  192 => 76,  176 => 62,  172 => 60,  168 => 58,  166 => 57,  160 => 53,  156 => 51,  147 => 49,  143 => 48,  140 => 47,  138 => 46,  130 => 41,  123 => 37,  116 => 33,  107 => 29,  100 => 25,  93 => 21,  80 => 11,  76 => 9,  70 => 8,  61 => 6,  56 => 5,  50 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('admin_article_index') }}\">Article</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de l'article \" <strong>{{ article.titre }}</strong>\"</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>N°</th>
                        <td>{{ article.id }}</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>{{ article.titre }}</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>{% if article.dateCreation %}{{ article.dateCreation|date('d-m-Y H\\\\hi') }}{% endif %}</td>
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
                        <td>{% if article.etat %}
                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                {% else %}
                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                {% endif %}
                                </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"fixed-action-btn \">
        <a class=\"btn-floating btn-large purple\">
            <i class=\"large material-icons\">build</i>
        </a>
        <ul>
          <li>
              <a class=\"btn-floating blue tooltipped\" 
                 data-position=\"left\" data-delay=\"50\" data-tooltip=\"Modifier\"
                 title=\"Modifier\" href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\">
                  <i class=\"material-icons\">mode_edit</i>
              </a>
          </li>
          <li>
              {{ form_start(delete_form) }}
                    <button title=\"Supprimer\" type=\"submit\" class=\"btn-floating red tooltipped\"
                            data-position=\"left\" data-delay=\"50\" data-tooltip=\"Supprimer\">
                        <i class=\"material-icons\">delete</i>
                    </button>
             {{ form_end(delete_form) }}
          </li>
        </ul>
      </div>   
{% endblock %}
", "ArticleBundle:Article:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/Article/show.html.twig");
    }
}
