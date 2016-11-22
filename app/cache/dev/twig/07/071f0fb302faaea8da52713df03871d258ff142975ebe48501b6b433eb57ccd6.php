<?php

/* PageBundle:col:edit.html.twig */
class __TwigTemplate_f21aed08df46f686a7dd84301725bf84f2bec6a8013e6c817549dd05a58d4c73 extends Twig_Template
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
        $__internal_df86d26078e894066eacbc92d1a2ec4674f44c508b78142357bcbf78d1362856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df86d26078e894066eacbc92d1a2ec4674f44c508b78142357bcbf78d1362856->enter($__internal_df86d26078e894066eacbc92d1a2ec4674f44c508b78142357bcbf78d1362856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:col:edit.html.twig"));

        // line 1
        echo "<form method=\"post\" role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("col_edit", array("id" => $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "getID", array(), "method"))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssClass", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cssId", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "htmlContent", array()), 'row');
        echo "
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    </div>
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</form>
";
        
        $__internal_df86d26078e894066eacbc92d1a2ec4674f44c508b78142357bcbf78d1362856->leave($__internal_df86d26078e894066eacbc92d1a2ec4674f44c508b78142357bcbf78d1362856_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:col:edit.html.twig";
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
        return new Twig_Source("<form method=\"post\" role=\"form\" action=\"{{path('col_edit',{id:col.getID()})}}\">
    <div class=\"modal-body\">
        {{ form_row(edit_form.titreAdmin) }}
        {{ form_row(edit_form.titreClient) }}
        {{ form_row(edit_form.enteteType) }}
        {{ form_row(edit_form.cssClass) }}
        {{ form_row(edit_form.cssId) }}
        {{ form_row(edit_form.htmlContent) }}
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    </div>
    {{ form_end(edit_form) }}
</form>
", "PageBundle:col:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/col/edit.html.twig");
    }
}
