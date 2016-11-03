<?php

/* PageBundle:col:show.html.twig */
class __TwigTemplate_ed25d0975a39b372fdd8cdf0f2754a410489b90d131ca5b9b51f014649d1ae25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "PageBundle:col:show.html.twig", 1);
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
        $__internal_4c54600332117612ce856186e7a8b68bd0aace1491d6de6a847f44ec6212007c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c54600332117612ce856186e7a8b68bd0aace1491d6de6a847f44ec6212007c->enter($__internal_4c54600332117612ce856186e7a8b68bd0aace1491d6de6a847f44ec6212007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:col:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c54600332117612ce856186e7a8b68bd0aace1491d6de6a847f44ec6212007c->leave($__internal_4c54600332117612ce856186e7a8b68bd0aace1491d6de6a847f44ec6212007c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_083579debb713481bd3ce88669f7cf9abcd971d949ed9f4b44c0b99f09576e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083579debb713481bd3ce88669f7cf9abcd971d949ed9f4b44c0b99f09576e8e->enter($__internal_083579debb713481bd3ce88669f7cf9abcd971d949ed9f4b44c0b99f09576e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageBundle:col:show.html.twig"));

        // line 4
        echo "    <h1>Col</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cssclass</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "cssClass", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cssid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "cssId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Htmlcontent</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "htmlContent", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_edit", array("id" => $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_083579debb713481bd3ce88669f7cf9abcd971d949ed9f4b44c0b99f09576e8e->leave($__internal_083579debb713481bd3ce88669f7cf9abcd971d949ed9f4b44c0b99f09576e8e_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:col:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Col</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ col.id }}</td>
            </tr>
            <tr>
                <th>Cssclass</th>
                <td>{{ col.cssClass }}</td>
            </tr>
            <tr>
                <th>Cssid</th>
                <td>{{ col.cssId }}</td>
            </tr>
            <tr>
                <th>Htmlcontent</th>
                <td>{{ col.htmlContent }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('col_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('col_edit', { 'id': col.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PageBundle:col:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/col/show.html.twig");
    }
}
