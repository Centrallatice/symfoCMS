<?php

/* ModuleBundle:module:show.html.twig */
class __TwigTemplate_b44de984cae3a00d370fb0dfa00f6d0d13f9690fb9c8b2fd5ccee5478b00114c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ModuleBundle:module:show.html.twig", 1);
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
        $__internal_904d1a939ec0af2e04696ed32b2b00861efe9464add670888b84c6a8b30657fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904d1a939ec0af2e04696ed32b2b00861efe9464add670888b84c6a8b30657fe->enter($__internal_904d1a939ec0af2e04696ed32b2b00861efe9464add670888b84c6a8b30657fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleBundle:module:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904d1a939ec0af2e04696ed32b2b00861efe9464add670888b84c6a8b30657fe->leave($__internal_904d1a939ec0af2e04696ed32b2b00861efe9464add670888b84c6a8b30657fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c300a3393ac15fd58cf5d18a1db9bdff93d5eb44e437e7192d772777bbf29590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c300a3393ac15fd58cf5d18a1db9bdff93d5eb44e437e7192d772777bbf29590->enter($__internal_c300a3393ac15fd58cf5d18a1db9bdff93d5eb44e437e7192d772777bbf29590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ModuleBundle:module:show.html.twig"));

        // line 4
        echo "    <h1>Module</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rendertype</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "renderType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Renderdisposition</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "renderDisposition", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_edit", array("id" => $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "id", array()))), "html", null, true);
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
        
        $__internal_c300a3393ac15fd58cf5d18a1db9bdff93d5eb44e437e7192d772777bbf29590->leave($__internal_c300a3393ac15fd58cf5d18a1db9bdff93d5eb44e437e7192d772777bbf29590_prof);

    }

    public function getTemplateName()
    {
        return "ModuleBundle:module:show.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Module</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ module.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ module.nom }}</td>
            </tr>
            <tr>
                <th>Rendertype</th>
                <td>{{ module.renderType }}</td>
            </tr>
            <tr>
                <th>Renderdisposition</th>
                <td>{{ module.renderDisposition }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_module_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_module_edit', { 'id': module.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ModuleBundle:module:show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle/Resources/views/module/show.html.twig");
    }
}
