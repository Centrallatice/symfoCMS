<?php

/* PageBundle:page/modal:modalAddRow.html.twig */
class __TwigTemplate_2293540143166c3baf2b38834f2b4822a25a08b3018a3ae49257bf2936667225 extends Twig_Template
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
        $__internal_019e947401414a9343ca7e4b5d7a3779e533ef738664bd0701e033782ad7f1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019e947401414a9343ca7e4b5d7a3779e533ef738664bd0701e033782ad7f1b5->enter($__internal_019e947401414a9343ca7e4b5d7a3779e533ef738664bd0701e033782ad7f1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page/modal:modalAddRow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modalAddRow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalAddRowLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Ajout d'une nouvelle ligne</h4>
            </div>
            <form method=\"post\" role=\"form\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("row_new");
        echo "\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"pageID\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId", array(), "method"), "html", null, true);
        echo "\">
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "titreAdmin", array()), 'row');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "titreClient", array()), 'row');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "enteteType", array()), 'row');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "disposition", array()), 'row');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "cssClass", array()), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), "cssId", array()), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["row_form"]) ? $context["row_form"] : $this->getContext($context, "row_form")), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>";
        
        $__internal_019e947401414a9343ca7e4b5d7a3779e533ef738664bd0701e033782ad7f1b5->leave($__internal_019e947401414a9343ca7e4b5d7a3779e533ef738664bd0701e033782ad7f1b5_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page/modal:modalAddRow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"modalAddRow\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalAddRowLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Ajout d'une nouvelle ligne</h4>
            </div>
            <form method=\"post\" role=\"form\" action=\"{{path('row_new')}}\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"pageID\" value=\"{{page.getId()}}\">
                    {{ form_row(row_form.titreAdmin) }}
                    {{ form_row(row_form.titreClient) }}
                    {{ form_row(row_form.enteteType) }}
                    {{ form_row(row_form.disposition) }}
                    {{ form_row(row_form.cssClass) }}
                    {{ form_row(row_form.cssId) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
                {{ form_end(row_form) }}
            </form>
        </div>
    </div>
</div>", "PageBundle:page/modal:modalAddRow.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/modal/modalAddRow.html.twig");
    }
}
