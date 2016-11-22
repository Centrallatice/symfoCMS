<?php

/* PageBundle:page:show.html.twig */
class __TwigTemplate_13e1305bef3b3770ce890dd41e39bdc21ca6bbb91a7efa75516a193f7e84f87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:page:show.html.twig", 1);
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
        $__internal_6a70be6cc670e6d89dffb4a01e40a5c23894d121cee5d0fa5fbcbf4ed4442d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a70be6cc670e6d89dffb4a01e40a5c23894d121cee5d0fa5fbcbf4ed4442d2f->enter($__internal_6a70be6cc670e6d89dffb4a01e40a5c23894d121cee5d0fa5fbcbf4ed4442d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a70be6cc670e6d89dffb4a01e40a5c23894d121cee5d0fa5fbcbf4ed4442d2f->leave($__internal_6a70be6cc670e6d89dffb4a01e40a5c23894d121cee5d0fa5fbcbf4ed4442d2f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d65d6ee61109bc6a79b90672aff94c28300fb773e92c53d4d14f35801ad0d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d65d6ee61109bc6a79b90672aff94c28300fb773e92c53d4d14f35801ad0d99->enter($__internal_4d65d6ee61109bc6a79b90672aff94c28300fb773e92c53d4d14f35801ad0d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/generator.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/froala/froala.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
";
        
        $__internal_4d65d6ee61109bc6a79b90672aff94c28300fb773e92c53d4d14f35801ad0d99->leave($__internal_4d65d6ee61109bc6a79b90672aff94c28300fb773e92c53d4d14f35801ad0d99_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b61a75db0cc56b0e3016b9c47642f98ff73acc3a0e60d49da8c20f2da0d15649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a75db0cc56b0e3016b9c47642f98ff73acc3a0e60d49da8c20f2da0d15649->enter($__internal_b61a75db0cc56b0e3016b9c47642f98ff73acc3a0e60d49da8c20f2da0d15649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 9
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de la page \" <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</strong>\"</a>
";
        
        $__internal_b61a75db0cc56b0e3016b9c47642f98ff73acc3a0e60d49da8c20f2da0d15649->leave($__internal_b61a75db0cc56b0e3016b9c47642f98ff73acc3a0e60d49da8c20f2da0d15649_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb6619ff4ffb7705b55149f8352d029b696cbc2e5d86fa8f747bc4ee59fbd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb6619ff4ffb7705b55149f8352d029b696cbc2e5d86fa8f747bc4ee59fbd0b->enter($__internal_adb6619ff4ffb7705b55149f8352d029b696cbc2e5d86fa8f747bc4ee59fbd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"row\">
         <div class=\"col s12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
     <div class=\"row\">
        <div class=\"col s12\">
            <table class=\"table table-active\">
                <tbody>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method")) > 0)) {
            // line 30
            echo "                                <ul>
                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 32
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                </ul>
                            ";
        }
        // line 36
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "auteur", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Créée le</th>
                        <td>";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">
                  <i class=\"material-icons\">mode_edit</i>
              </a>
          </li>
          <li>
              ";
        // line 63
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button title=\"Supprimer\" type=\"submit\" class=\"btn-floating red tooltipped\"
                            data-position=\"left\" data-delay=\"50\" data-tooltip=\"Supprimer\">
                        <i class=\"material-icons\">delete</i>
                    </button>
             ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
          </li>
        </ul>
      </div>
";
        
        $__internal_adb6619ff4ffb7705b55149f8352d029b696cbc2e5d86fa8f747bc4ee59fbd0b->leave($__internal_adb6619ff4ffb7705b55149f8352d029b696cbc2e5d86fa8f747bc4ee59fbd0b_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  173 => 63,  165 => 58,  146 => 44,  139 => 40,  133 => 36,  129 => 34,  120 => 32,  116 => 31,  113 => 30,  111 => 29,  103 => 24,  91 => 15,  87 => 13,  81 => 12,  72 => 10,  67 => 9,  61 => 8,  51 => 5,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/generator.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/froala/froala.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
{% endblock %}
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('page_list') }}\">Pages</a>
    <a class=\"breadcrumb\" href=\"#!\">Détail de la page \" <strong>{{ page.titre }}</strong>\"</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
         <div class=\"col s12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('page_list') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
     <div class=\"row\">
        <div class=\"col s12\">
            <table class=\"table table-active\">
                <tbody>
                    <tr>
                        <th>Description</th>
                        <td>{{ page.description }}</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            {% if page.getKeywords()|length >0 %}
                                <ul>
                                    {% for k in page.getKeywords() %}
                                        <li>{{k.value}}</li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>{{ page.auteur }}</td>
                    </tr>
                    <tr>
                        <th>Créée le</th>
                        <td>{% if page.creationDate %}{{ page.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
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
                 title=\"Modifier\" href=\"{{ path('page_edit', { 'id': page.id }) }}\">
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
", "PageBundle:page:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/show.html.twig");
    }
}
