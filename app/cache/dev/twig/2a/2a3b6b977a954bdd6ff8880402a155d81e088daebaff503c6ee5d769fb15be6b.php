<?php

/* @PageViews/page/modal/modalAddRow.html.twig */
class __TwigTemplate_78d1b3e50456ae31549c53881bfaf5377d37768bf790420726826e198f61a4df extends Twig_Template
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
        $__internal_d75b766411dcf09fe7f999607f6ea859d03ef8437cbf08c3e505eb6650e5969f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75b766411dcf09fe7f999607f6ea859d03ef8437cbf08c3e505eb6650e5969f->enter($__internal_d75b766411dcf09fe7f999607f6ea859d03ef8437cbf08c3e505eb6650e5969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page/modal/modalAddRow.html.twig"));

        // line 1
        echo "<div class=\"modal bottom-sheet bottom-sheet-big modal-fixed-footer\" id=\"modalAddRow\">
    <form method=\"post\" role=\"form\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_new");
        echo "\">
        <div class=\"modal-content\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "page", array()), 'widget');
        echo "
            ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "titreAdmin", array()), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "titreClient", array()), 'row');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "enteteType", array()), 'row');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "disposition", array()), 'row');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "cssClass", array()), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "cssId", array()), 'row');
        echo "
        </div>
        <div class=\"modal-footer center-align text-center\">
            <button type=\"button\" class=\"btn modal-action modal-close red waves-effect waves-light\" data-dismiss=\"modal\"><i class=\"material-icons left\">close</i>Fermer</button>
            <button type=\"submit\" class=\"btn green waves-effect waves-light\"><i class=\"material-icons left\">save</i>Enregistrer</button>
        </div>
    ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), 'form_end');
        echo "
    </form>
</div>";
        
        $__internal_d75b766411dcf09fe7f999607f6ea859d03ef8437cbf08c3e505eb6650e5969f->leave($__internal_d75b766411dcf09fe7f999607f6ea859d03ef8437cbf08c3e505eb6650e5969f_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page/modal/modalAddRow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal bottom-sheet bottom-sheet-big modal-fixed-footer\" id=\"modalAddRow\">
    <form method=\"post\" role=\"form\" action=\"{{path('row_new')}}\">
        <div class=\"modal-content\">
            {{ form_widget(row_form.page) }}
            {{ form_row(row_form.titreAdmin) }}
            {{ form_row(row_form.titreClient) }}
            {{ form_row(row_form.enteteType) }}
            {{ form_row(row_form.disposition) }}
            {{ form_row(row_form.cssClass) }}
            {{ form_row(row_form.cssId) }}
        </div>
        <div class=\"modal-footer center-align text-center\">
            <button type=\"button\" class=\"btn modal-action modal-close red waves-effect waves-light\" data-dismiss=\"modal\"><i class=\"material-icons left\">close</i>Fermer</button>
            <button type=\"submit\" class=\"btn green waves-effect waves-light\"><i class=\"material-icons left\">save</i>Enregistrer</button>
        </div>
    {{ form_end(row_form) }}
    </form>
</div>", "@PageViews/page/modal/modalAddRow.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\modal\\modalAddRow.html.twig");
    }
}
