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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8548b6f0a31e944445dcd3890c3634ba87df34ab6d7bd9f64b372a82ffd6764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8548b6f0a31e944445dcd3890c3634ba87df34ab6d7bd9f64b372a82ffd6764->enter($__internal_f8548b6f0a31e944445dcd3890c3634ba87df34ab6d7bd9f64b372a82ffd6764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8548b6f0a31e944445dcd3890c3634ba87df34ab6d7bd9f64b372a82ffd6764->leave($__internal_f8548b6f0a31e944445dcd3890c3634ba87df34ab6d7bd9f64b372a82ffd6764_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d85b11d2aee002d74ffaf992698dc5e40d6d463ede7f1e7bfa681dacff52a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d85b11d2aee002d74ffaf992698dc5e40d6d463ede7f1e7bfa681dacff52a7->enter($__internal_c8d85b11d2aee002d74ffaf992698dc5e40d6d463ede7f1e7bfa681dacff52a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:page:show.html.twig"));

        // line 4
        echo "    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "keywords", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c8d85b11d2aee002d74ffaf992698dc5e40d6d463ede7f1e7bfa681dacff52a7->leave($__internal_c8d85b11d2aee002d74ffaf992698dc5e40d6d463ede7f1e7bfa681dacff52a7_prof);

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
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ page.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ page.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ page.description }}</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>{{ page.keywords }}</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>{{ page.auteur }}</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>{% if page.creationDate %}{{ page.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('page_list') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('page_edit', { 'id': page.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PageBundle:page:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/show.html.twig");
    }
}
