<?php

/* PageBundle:page:show.html.twig */
class __TwigTemplate_2e188855a6a79fbab3e37df92255a3aaa6fca182355c61c4bdca3b1dc75d260d extends Twig_Template
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
        $__internal_8fcdb33a4e8d40c6f799f275efd3b23f8007a73e449f9cbc5c95fd5ef7c8762d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcdb33a4e8d40c6f799f275efd3b23f8007a73e449f9cbc5c95fd5ef7c8762d->enter($__internal_8fcdb33a4e8d40c6f799f275efd3b23f8007a73e449f9cbc5c95fd5ef7c8762d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcdb33a4e8d40c6f799f275efd3b23f8007a73e449f9cbc5c95fd5ef7c8762d->leave($__internal_8fcdb33a4e8d40c6f799f275efd3b23f8007a73e449f9cbc5c95fd5ef7c8762d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8289e614b58091d5657e3a7d4615950faa9ee83c8d0f473cdf1fe65edcff86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8289e614b58091d5657e3a7d4615950faa9ee83c8d0f473cdf1fe65edcff86d->enter($__internal_c8289e614b58091d5657e3a7d4615950faa9ee83c8d0f473cdf1fe65edcff86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:show.html.twig"));

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
        
        $__internal_c8289e614b58091d5657e3a7d4615950faa9ee83c8d0f473cdf1fe65edcff86d->leave($__internal_c8289e614b58091d5657e3a7d4615950faa9ee83c8d0f473cdf1fe65edcff86d_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0bff53d2de17dcbf959d76480768e936d234cc1b5027e53fc0fed81d9eb02f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bff53d2de17dcbf959d76480768e936d234cc1b5027e53fc0fed81d9eb02f00->enter($__internal_0bff53d2de17dcbf959d76480768e936d234cc1b5027e53fc0fed81d9eb02f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:show.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Pages</a> /  Détail de la page \" <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</strong>\"";
        
        $__internal_0bff53d2de17dcbf959d76480768e936d234cc1b5027e53fc0fed81d9eb02f00->leave($__internal_0bff53d2de17dcbf959d76480768e936d234cc1b5027e53fc0fed81d9eb02f00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e83a64c38692500876bcff8443da7095107b7574971f4671f53fd5e5a66068c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e83a64c38692500876bcff8443da7095107b7574971f4671f53fd5e5a66068c->enter($__internal_4e83a64c38692500876bcff8443da7095107b7574971f4671f53fd5e5a66068c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:show.html.twig"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
     <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>

            <table class=\"table table-active\">
                <tbody>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>
                            ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method")) > 0)) {
            // line 29
            echo "                                <ul>
                                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 31
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                </ul>
                            ";
        }
        // line 35
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Auteur</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "auteur", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Créée le</th>
                        <td>";
        // line 43
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     <div class=\"row\">
        <div class=\"col-xs-12\">
            <center>
                <div class=\"form-inline\">
                    ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer cette page\">
                    ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i> Modifier</a>
            </center>
    </div>
    </div>
";
        
        $__internal_4e83a64c38692500876bcff8443da7095107b7574971f4671f53fd5e5a66068c->leave($__internal_4e83a64c38692500876bcff8443da7095107b7574971f4671f53fd5e5a66068c_prof);

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
        return array (  171 => 56,  167 => 55,  162 => 53,  147 => 43,  140 => 39,  134 => 35,  130 => 33,  121 => 31,  117 => 30,  114 => 29,  112 => 28,  104 => 23,  95 => 17,  87 => 12,  83 => 10,  77 => 9,  61 => 8,  51 => 5,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('page_list') }}\">Pages</a> /  Détail de la page \" <strong>{{ page.titre }}</strong>\"{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('page_list') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
     <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>{{ page.titre }}</h1>

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
     <div class=\"row\">
        <div class=\"col-xs-12\">
            <center>
                <div class=\"form-inline\">
                    {{ form_start(delete_form) }}
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer cette page\">
                    {{ form_end(delete_form) }}
                </div><a href=\"{{ path('page_edit', { 'id': page.id }) }}\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i> Modifier</a>
            </center>
    </div>
    </div>
{% endblock %}
", "PageBundle:page:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/show.html.twig");
    }
}
