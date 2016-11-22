<?php

/* ::formback.html.twig */
class __TwigTemplate_9c545228618b95530dd577d01caae9481186ce852e4bac61c40308aea02fe74a extends Twig_Template
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
        $__internal_b039143c6cfe425f72535009bd1f6d9ef1b40366933e3643f2f6093a24da4d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b039143c6cfe425f72535009bd1f6d9ef1b40366933e3643f2f6093a24da4d98->enter($__internal_b039143c6cfe425f72535009bd1f6d9ef1b40366933e3643f2f6093a24da4d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::formback.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 2
            echo "    <hr />
    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
       ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "            
    </div>
";
        }
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "    <hr />
    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
       ";
            // line 16
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
<hr />      ";
        
        $__internal_b039143c6cfe425f72535009bd1f6d9ef1b40366933e3643f2f6093a24da4d98->leave($__internal_b039143c6cfe425f72535009bd1f6d9ef1b40366933e3643f2f6093a24da4d98_prof);

    }

    public function getTemplateName()
    {
        return "::formback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  48 => 16,  41 => 11,  37 => 10,  31 => 7,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not form.vars.valid %}
    <hr />
    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
       {{ form_errors(form) }}            
    </div>
{% endif %}
{% for flash_message in app.session.flashBag.get('success') %}
    <hr />
    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
       {{ flash_message }}
   </div>
{% endfor %}    
<hr />      ", "::formback.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/formback.html.twig");
    }
}
