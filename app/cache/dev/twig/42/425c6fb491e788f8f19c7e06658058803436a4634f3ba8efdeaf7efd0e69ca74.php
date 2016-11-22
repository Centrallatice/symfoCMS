<?php

/* PageBundle:row:edit.html.twig */
class __TwigTemplate_3cfe55a181387fa54bca683f579f12b4e254a92057d3f5a15af718056904cbae extends Twig_Template
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
        $__internal_8e2965afd49d5d0d579ca1a876be866bcca1636d3c32ab2ca679a006380374ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2965afd49d5d0d579ca1a876be866bcca1636d3c32ab2ca679a006380374ba->enter($__internal_8e2965afd49d5d0d579ca1a876be866bcca1636d3c32ab2ca679a006380374ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:row:edit.html.twig"));

        // line 1
        echo "<form method=\"post\" role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_ajax_edit", array("id" => $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "getID", array(), "method"))), "html", null, true);
        echo "\">
    <div class=\"modal-content\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "page", array()), 'widget');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreAdmin", array()), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreClient", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enteteType", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disposition", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssClass", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssId", array()), 'row');
        echo "
    </div>
    <div class=\"modal-footer center-align text-center\">
        <button type=\"button\" class=\"btn modal-action modal-close red waves-effect waves-light\" data-dismiss=\"modal\"><i class=\"material-icons left\">close</i>Fermer</button>
        <button type=\"submit\" class=\"btn green waves-effect waves-light\"><i class=\"material-icons left\">save</i>Enregistrer</button>
    </div>
    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</form>";
        
        $__internal_8e2965afd49d5d0d579ca1a876be866bcca1636d3c32ab2ca679a006380374ba->leave($__internal_8e2965afd49d5d0d579ca1a876be866bcca1636d3c32ab2ca679a006380374ba_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:row:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  22 => 1,);
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
    <div class=\"modal-content\">
        {{ form_widget(edit_form.page) }}
        {{ form_row(edit_form.titreAdmin) }}
        {{ form_row(edit_form.titreClient) }}
        {{ form_row(edit_form.enteteType) }}
        {{ form_row(edit_form.disposition) }}
        {{ form_row(edit_form.cssClass) }}
        {{ form_row(edit_form.cssId) }}
    </div>
    <div class=\"modal-footer center-align text-center\">
        <button type=\"button\" class=\"btn modal-action modal-close red waves-effect waves-light\" data-dismiss=\"modal\"><i class=\"material-icons left\">close</i>Fermer</button>
        <button type=\"submit\" class=\"btn green waves-effect waves-light\"><i class=\"material-icons left\">save</i>Enregistrer</button>
    </div>
    {{ form_end(edit_form) }}
</form>", "PageBundle:row:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/row/edit.html.twig");
    }
}
