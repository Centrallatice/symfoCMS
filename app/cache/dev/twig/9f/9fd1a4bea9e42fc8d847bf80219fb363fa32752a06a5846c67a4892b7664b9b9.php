<?php

/* ModuleBundle:module:index.html.twig */
class __TwigTemplate_607951440d7e8cdc957135700eda3b8349b4f1b43b3d1360e4b44aec8c0caae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ModuleBundle:module:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbd7e1afbac9919fc2d185a87d66d36ed2f4819f49e30958dfaa71f9c0292554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd7e1afbac9919fc2d185a87d66d36ed2f4819f49e30958dfaa71f9c0292554->enter($__internal_fbd7e1afbac9919fc2d185a87d66d36ed2f4819f49e30958dfaa71f9c0292554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleBundle:module:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd7e1afbac9919fc2d185a87d66d36ed2f4819f49e30958dfaa71f9c0292554->leave($__internal_fbd7e1afbac9919fc2d185a87d66d36ed2f4819f49e30958dfaa71f9c0292554_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c0e6ea46fe60f5d4432493ec0306918acb069d1d94b49da872ded89c7e5534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c0e6ea46fe60f5d4432493ec0306918acb069d1d94b49da872ded89c7e5534->enter($__internal_25c0e6ea46fe60f5d4432493ec0306918acb069d1d94b49da872ded89c7e5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ModuleBundle:module:index.html.twig"));

        // line 4
        echo "    <h1>Modules list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Rendertype</th>
                <th>Renderdisposition</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_show", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "renderType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "renderDisposition", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_show", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_edit", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_new");
        echo "\">Create a new module</a>
        </li>
    </ul>
";
        
        $__internal_25c0e6ea46fe60f5d4432493ec0306918acb069d1d94b49da872ded89c7e5534->leave($__internal_25c0e6ea46fe60f5d4432493ec0306918acb069d1d94b49da872ded89c7e5534_prof);

    }

    public function getTemplateName()
    {
        return "ModuleBundle:module:index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Modules list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Rendertype</th>
                <th>Renderdisposition</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for module in modules %}
            <tr>
                <td><a href=\"{{ path('admin_module_show', { 'id': module.id }) }}\">{{ module.id }}</a></td>
                <td>{{ module.nom }}</td>
                <td>{{ module.renderType }}</td>
                <td>{{ module.renderDisposition }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_module_show', { 'id': module.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_module_edit', { 'id': module.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_module_new') }}\">Create a new module</a>
        </li>
    </ul>
{% endblock %}
", "ModuleBundle:module:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle/Resources/views/module/index.html.twig");
    }
}
