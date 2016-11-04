<?php

/* ArticleBundle:category:show.html.twig */
class __TwigTemplate_bb0b11e6ca302873c36cfd58148cda8174698257deac5f24a41d71cd8abe8590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:show.html.twig", 1);
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
        $__internal_1e61cd1a21e36f79a25951e5675bc0275b9a5881a7668e27d9ee02b7e507f24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e61cd1a21e36f79a25951e5675bc0275b9a5881a7668e27d9ee02b7e507f24c->enter($__internal_1e61cd1a21e36f79a25951e5675bc0275b9a5881a7668e27d9ee02b7e507f24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e61cd1a21e36f79a25951e5675bc0275b9a5881a7668e27d9ee02b7e507f24c->leave($__internal_1e61cd1a21e36f79a25951e5675bc0275b9a5881a7668e27d9ee02b7e507f24c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_648c72bbd3ad71dcb203ba64199b8a4d5d3a5504b2816ef45b62c8864eb76e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648c72bbd3ad71dcb203ba64199b8a4d5d3a5504b2816ef45b62c8864eb76e5a->enter($__internal_648c72bbd3ad71dcb203ba64199b8a4d5d3a5504b2816ef45b62c8864eb76e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:show.html.twig"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "dateCreation", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_648c72bbd3ad71dcb203ba64199b8a4d5d3a5504b2816ef45b62c8864eb76e5a->leave($__internal_648c72bbd3ad71dcb203ba64199b8a4d5d3a5504b2816ef45b62c8864eb76e5a_prof);

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
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
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
                <th>Datecreation</th>
                <td>{{ category.dateCreation | date('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>{% if category.isActive %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ArticleBundle:category:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/show.html.twig");
    }
}
