<?php

/* @PageViews/col\index.html.twig */
class __TwigTemplate_853103c7f4d71c95158c7b391a38700f56fa5df78a4a9758d6bf41d9ef2e7d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@PageViews/col\\index.html.twig", 1);
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
        $__internal_14a68ebc8ee4d07c5ef0bbf9ce0ecebeb076fc952bde4888121ecc5784786c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a68ebc8ee4d07c5ef0bbf9ce0ecebeb076fc952bde4888121ecc5784786c66->enter($__internal_14a68ebc8ee4d07c5ef0bbf9ce0ecebeb076fc952bde4888121ecc5784786c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/col\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a68ebc8ee4d07c5ef0bbf9ce0ecebeb076fc952bde4888121ecc5784786c66->leave($__internal_14a68ebc8ee4d07c5ef0bbf9ce0ecebeb076fc952bde4888121ecc5784786c66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce0c2600c4f2d502023fa0c3348e7f7e05684c7bd0a730d682eb3cb10fc8bb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0c2600c4f2d502023fa0c3348e7f7e05684c7bd0a730d682eb3cb10fc8bb09->enter($__internal_ce0c2600c4f2d502023fa0c3348e7f7e05684c7bd0a730d682eb3cb10fc8bb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PageViews/col\\index.html.twig"));

        // line 4
        echo "    <h1>Cols list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cssclass</th>
                <th>Cssid</th>
                <th>Htmlcontent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_show", array("id" => $this->getAttribute($context["col"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "cssClass", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "cssId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "htmlContent", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_show", array("id" => $this->getAttribute($context["col"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_edit", array("id" => $this->getAttribute($context["col"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_new");
        echo "\">Create a new col</a>
        </li>
    </ul>
";
        
        $__internal_ce0c2600c4f2d502023fa0c3348e7f7e05684c7bd0a730d682eb3cb10fc8bb09->leave($__internal_ce0c2600c4f2d502023fa0c3348e7f7e05684c7bd0a730d682eb3cb10fc8bb09_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/col\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Cols list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cssclass</th>
                <th>Cssid</th>
                <th>Htmlcontent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for col in cols %}
            <tr>
                <td><a href=\"{{ path('col_show', { 'id': col.id }) }}\">{{ col.id }}</a></td>
                <td>{{ col.cssClass }}</td>
                <td>{{ col.cssId }}</td>
                <td>{{ col.htmlContent }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('col_show', { 'id': col.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('col_edit', { 'id': col.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('col_new') }}\">Create a new col</a>
        </li>
    </ul>
{% endblock %}
", "@PageViews/col\\index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\col\\index.html.twig");
    }
}
