<?php

/* @PageViews/row\edit.html.twig */
class __TwigTemplate_3d5330ad08951f519c184fb3e44a23e4982ff4d91a1dfce6a9cd7778ddfcdde1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67960586481bd965a626808962d838f10f88a65b50fd03d007363a975fa0f5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67960586481bd965a626808962d838f10f88a65b50fd03d007363a975fa0f5a0->enter($__internal_67960586481bd965a626808962d838f10f88a65b50fd03d007363a975fa0f5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/row\\edit.html.twig"));

        // line 1
        echo "<form method=\"post\" role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_edit", array("id" => $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "getID", array(), "method"))), "html", null, true);
        echo "\">
    <div class=\"modal-body\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreAdmin", array()), 'row');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreClient", array()), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enteteType", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disposition", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssClass", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssId", array()), 'row');
        echo "
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"btn-valid-update-row\">Enregistrer</button>
    </div>
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</form>";
        
        $__internal_67960586481bd965a626808962d838f10f88a65b50fd03d007363a975fa0f5a0->leave($__internal_67960586481bd965a626808962d838f10f88a65b50fd03d007363a975fa0f5a0_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/row\\edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" role=\"form\" action=\"{{path('row_ajax_edit',{id:row.getID()})}}\">
    <div class=\"modal-body\">
        {{ form_row(edit_form.titreAdmin) }}
        {{ form_row(edit_form.titreClient) }}
        {{ form_row(edit_form.enteteType) }}
        {{ form_row(edit_form.disposition) }}
        {{ form_row(edit_form.cssClass) }}
        {{ form_row(edit_form.cssId) }}
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"btn-valid-update-row\">Enregistrer</button>
    </div>
    {{ form_end(edit_form) }}
</form>", "@PageViews/row\\edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\row\\edit.html.twig");
    }
}
