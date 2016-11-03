<?php

/* ArticleBundle:category:index.html.twig */
class __TwigTemplate_8a139518bc9195106e6cb7437a8428db231a7dde73d048e981aef243d94b0cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3ea2a62350c5ccbbd175225bc66817edb9b00d1a2d3202a8d56d8f29ea39ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ea2a62350c5ccbbd175225bc66817edb9b00d1a2d3202a8d56d8f29ea39ca8->enter($__internal_c3ea2a62350c5ccbbd175225bc66817edb9b00d1a2d3202a8d56d8f29ea39ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ea2a62350c5ccbbd175225bc66817edb9b00d1a2d3202a8d56d8f29ea39ca8->leave($__internal_c3ea2a62350c5ccbbd175225bc66817edb9b00d1a2d3202a8d56d8f29ea39ca8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55885a1e4b9742183f8a65e12146ffd52b6818d94ca148df7cc7b29090e7a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55885a1e4b9742183f8a65e12146ffd52b6818d94ca148df7cc7b29090e7a2e2->enter($__internal_55885a1e4b9742183f8a65e12146ffd52b6818d94ca148df7cc7b29090e7a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:index.html.twig"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Auteur</th>
                <th>Datecreation</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "dateCreation", array()), "d/m/Y h:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["category"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_55885a1e4b9742183f8a65e12146ffd52b6818d94ca148df7cc7b29090e7a2e2->leave($__internal_55885a1e4b9742183f8a65e12146ffd52b6818d94ca148df7cc7b29090e7a2e2_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Auteur</th>
                <th>Datecreation</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('admin_category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.nom }}</td>
                <td>{{ category.auteur }}</td>
                <td>{{ category.dateCreation| date('d/m/Y h:i') }}</td>
                <td>{% if category.isActive %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "ArticleBundle:category:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/index.html.twig");
    }
}
