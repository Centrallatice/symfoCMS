<?php

/* ArticleBundle:category:show.html.twig */
class __TwigTemplate_e9c4b57fc3f47770fe75407f6f84f26ee7b3523f08f64714c9de986ca4f20736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:show.html.twig", 1);
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
        $__internal_37ef0e7c7af5de68380a85eaa616b74ff9fa8bd7293f0a55aba4fb5e41e51282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ef0e7c7af5de68380a85eaa616b74ff9fa8bd7293f0a55aba4fb5e41e51282->enter($__internal_37ef0e7c7af5de68380a85eaa616b74ff9fa8bd7293f0a55aba4fb5e41e51282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ef0e7c7af5de68380a85eaa616b74ff9fa8bd7293f0a55aba4fb5e41e51282->leave($__internal_37ef0e7c7af5de68380a85eaa616b74ff9fa8bd7293f0a55aba4fb5e41e51282_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93bf3ab002281bd7ab7d9c0d319feec8e1895ac8badfac5eb13f3182eefad942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bf3ab002281bd7ab7d9c0d319feec8e1895ac8badfac5eb13f3182eefad942->enter($__internal_93bf3ab002281bd7ab7d9c0d319feec8e1895ac8badfac5eb13f3182eefad942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_93bf3ab002281bd7ab7d9c0d319feec8e1895ac8badfac5eb13f3182eefad942->leave($__internal_93bf3ab002281bd7ab7d9c0d319feec8e1895ac8badfac5eb13f3182eefad942_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b6ddd9196bdb923d8c8d265946e665b2e8d5675aafe6366d40aa33ab89182eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ddd9196bdb923d8c8d265946e665b2e8d5675aafe6366d40aa33ab89182eac->enter($__internal_b6ddd9196bdb923d8c8d265946e665b2e8d5675aafe6366d40aa33ab89182eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégories</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de l'article \" <strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom", array()), "html", null, true);
        echo "</strong>\"</a>
";
        
        $__internal_b6ddd9196bdb923d8c8d265946e665b2e8d5675aafe6366d40aa33ab89182eac->leave($__internal_b6ddd9196bdb923d8c8d265946e665b2e8d5675aafe6366d40aa33ab89182eac_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b83143878e6f8e605e0cc880bb678deb890915ec0e2cd9c11f963e3bcd39e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b83143878e6f8e605e0cc880bb678deb890915ec0e2cd9c11f963e3bcd39e6a->enter($__internal_7b83143878e6f8e605e0cc880bb678deb890915ec0e2cd9c11f963e3bcd39e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class='table'>
                <tbody>
                    <tr>
                        <th>N°</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "auteur", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Parent</th>
                        <td>";
        // line 33
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getCategoryParente", array(), "method") != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getCategoryParente", array(), "method"), "getNom", array(), "method"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Créée le</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateCreation", array()), "d/m/Y à H\\hi"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etat</th>
                        <td>";
        // line 41
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "isActive", array())) {
            // line 42
            echo "                                    <i title=\"Active\" class=\"material-icons left text-green\">done</i>
                                ";
        } else {
            // line 44
            echo "                                    <i title=\"Inactive\" class=\"material-icons left text-red\">cancel</i>
                                ";
        }
        // line 46
        echo "                        </td>
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">
                  <i class=\"material-icons\">mode_edit</i>
              </a>
          </li>
          <li>
              ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button title=\"Supprimer\" type=\"submit\" class=\"btn-floating red tooltipped\"
                            data-position=\"left\" data-delay=\"50\" data-tooltip=\"Supprimer\">
                        <i class=\"material-icons\">delete</i>
                    </button>
             ";
        // line 70
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
          </li>
        </ul>
      </div>                
    
";
        
        $__internal_7b83143878e6f8e605e0cc880bb678deb890915ec0e2cd9c11f963e3bcd39e6a->leave($__internal_7b83143878e6f8e605e0cc880bb678deb890915ec0e2cd9c11f963e3bcd39e6a_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 70,  164 => 65,  156 => 60,  140 => 46,  136 => 44,  132 => 42,  130 => 41,  123 => 37,  114 => 33,  107 => 29,  100 => 25,  93 => 21,  80 => 11,  76 => 9,  70 => 8,  61 => 6,  56 => 5,  50 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
    <a class=\"breadcrumb\" href=\"{{ path('admin_category_index') }}\">Catégories</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de l'article \" <strong>{{ category.nom}}</strong>\"</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"cols12\">
            <table class='table'>
                <tbody>
                    <tr>
                        <th>N°</th>
                        <td>{{ category.id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ category.nom }}</td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>{{ category.auteur }}</td>
                    </tr>
                    <tr>
                        <th>Parent</th>
                        <td>{% if category.getCategoryParente() != null %}{{ category.getCategoryParente().getNom() }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Créée le</th>
                        <td>{{ category.dateCreation | date('d/m/Y \\à H\\\\hi') }}</td>
                    </tr>
                    <tr>
                        <th>Etat</th>
                        <td>{% if category.isActive %}
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
                 title=\"Modifier\" href=\"{{ path('admin_category_edit', { 'id': category.id }) }}\">
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

", "ArticleBundle:category:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/show.html.twig");
    }
}
