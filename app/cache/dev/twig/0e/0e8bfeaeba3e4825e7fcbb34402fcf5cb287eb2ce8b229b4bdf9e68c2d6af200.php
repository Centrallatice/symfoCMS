<?php

/* PageBundle:page/tabs:seo.html.twig */
class __TwigTemplate_bc83f3fbedace5176b1338e5a308bd9624feaf438d713fbdaa170e9d300edae4 extends Twig_Template
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
        $__internal_eeac0d32e2d9d86984bdd69998b272a4ef495a8f68dbb588c69e76c24d0ed1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeac0d32e2d9d86984bdd69998b272a4ef495a8f68dbb588c69e76c24d0ed1d2->enter($__internal_eeac0d32e2d9d86984bdd69998b272a4ef495a8f68dbb588c69e76c24d0ed1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:page/tabs:seo.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
    
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    
    <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
    <div class=\"tagify-container\">
        ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method")) > 0)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 15
                echo "                <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <input type=\"text\" id=\"pagebundle_page_keywords_fake\" class=\"form-control\">
    </div>
    
    <input 
        type=\"hidden\" 
        name=\"pagebundle_page_keywords_final\" 
        id=\"pagebundle_page_keywords_final\"
        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method")) > 0)) {
            echo "value=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["k"], "value", array()) . ";"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"";
        }
        echo ">
    
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isHomepage", array()), 'label');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isHomepage", array()), 'errors');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isHomepage", array()), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-success  pull-right\" value=\"Enregistrer\" />
";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_eeac0d32e2d9d86984bdd69998b272a4ef495a8f68dbb588c69e76c24d0ed1d2->leave($__internal_eeac0d32e2d9d86984bdd69998b272a4ef495a8f68dbb588c69e76c24d0ed1d2_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:page/tabs:seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  110 => 31,  106 => 30,  102 => 29,  86 => 27,  77 => 20,  74 => 19,  65 => 16,  62 => 15,  57 => 14,  55 => 13,  48 => 9,  44 => 8,  40 => 7,  35 => 5,  31 => 4,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}

    {{ form_label(form.titre) }}
    {{ form_errors(form.titre) }}
    {{ form_widget(form.titre) }}
    
    {{ form_label(form.description) }}
    {{ form_errors(form.description) }}
    {{ form_widget(form.description) }}
    
    <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
    <div class=\"tagify-container\">
        {% if page.getKeywords()|length >0 %}
            {% for k in page.getKeywords() %}
                <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>{{k.value}}
                </div>
            {% endfor %}
        {% endif %}
        <input type=\"text\" id=\"pagebundle_page_keywords_fake\" class=\"form-control\">
    </div>
    
    <input 
        type=\"hidden\" 
        name=\"pagebundle_page_keywords_final\" 
        id=\"pagebundle_page_keywords_final\"
        {% if page.getKeywords()|length >0 %}value=\"{% for k in page.getKeywords() %}{{k.value~';'}}{% endfor %}\"{% endif %}>
    
    {{ form_label(form.isHomepage) }}
    {{ form_errors(form.isHomepage) }}
    {{ form_widget(form.isHomepage) }}
    <input type=\"submit\" class=\"btn btn-success  pull-right\" value=\"Enregistrer\" />
{{ form_end(form) }}
", "PageBundle:page/tabs:seo.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle/Resources/views/page/tabs/seo.html.twig");
    }
}
