<?php

/* @Module/module/show.html.twig */
class __TwigTemplate_feeacda4b30fbf3a7d9bdd10431fd48d8d455da966c49269bc592a840aaf671b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Module/module/show.html.twig", 1);
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
        $__internal_bdbe070fb9b853a34e161f5d719fe3e521f5603d84690bc9237a0f34d1a81b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbe070fb9b853a34e161f5d719fe3e521f5603d84690bc9237a0f34d1a81b8f->enter($__internal_bdbe070fb9b853a34e161f5d719fe3e521f5603d84690bc9237a0f34d1a81b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Module/module/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdbe070fb9b853a34e161f5d719fe3e521f5603d84690bc9237a0f34d1a81b8f->leave($__internal_bdbe070fb9b853a34e161f5d719fe3e521f5603d84690bc9237a0f34d1a81b8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdc511b34fb6c91f43f04315cd6f5df6bb4f7d5f15090a5e867b171ccc8f9c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc511b34fb6c91f43f04315cd6f5df6bb4f7d5f15090a5e867b171ccc8f9c45->enter($__internal_fdc511b34fb6c91f43f04315cd6f5df6bb4f7d5f15090a5e867b171ccc8f9c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Module/module/show.html.twig"));

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
        
        $__internal_fdc511b34fb6c91f43f04315cd6f5df6bb4f7d5f15090a5e867b171ccc8f9c45->leave($__internal_fdc511b34fb6c91f43f04315cd6f5df6bb4f7d5f15090a5e867b171ccc8f9c45_prof);

    }

    public function getTemplateName()
    {
        return "@Module/module/show.html.twig";
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
", "@Module/module/show.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ModuleBundle\\Resources\\views\\module\\show.html.twig");
    }
}
