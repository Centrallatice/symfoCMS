<?php

/* @PageViews/page/tabs/seo.html.twig */
class __TwigTemplate_9db5756e69067d4d5343c4731153144ccd493565c25a0e43b41a466147d52293 extends Twig_Template
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
        $__internal_cd50460815444833d406c086bf4c8dbc09d75230d2d2d6a1d5b335eb7302bdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd50460815444833d406c086bf4c8dbc09d75230d2d2d6a1d5b335eb7302bdef->enter($__internal_cd50460815444833d406c086bf4c8dbc09d75230d2d2d6a1d5b335eb7302bdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PageViews/page/tabs/seo.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
    
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    
    <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
    <div class=\"tagify-container\">
        ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method")) > 0)) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 13
                echo "                <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <input type=\"text\" id=\"pagebundle_page_keywords_fake\" class=\"form-control\">
    </div>
    
    <input 
        type=\"hidden\" 
        name=\"pagebundle_page_keywords_final\" 
        id=\"pagebundle_page_keywords_final\"
        ";
        // line 25
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
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isHomepage", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isHomepage", array()), 'widget');
        echo "
    <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cd50460815444833d406c086bf4c8dbc09d75230d2d2d6a1d5b335eb7302bdef->leave($__internal_cd50460815444833d406c086bf4c8dbc09d75230d2d2d6a1d5b335eb7302bdef_prof);

    }

    public function getTemplateName()
    {
        return "@PageViews/page/tabs/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  98 => 28,  94 => 27,  78 => 25,  69 => 18,  66 => 17,  57 => 14,  54 => 13,  49 => 12,  47 => 11,  40 => 7,  36 => 6,  31 => 4,  27 => 3,  22 => 1,);
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
    {{ form_widget(form.titre) }}
    
    {{ form_label(form.description) }}
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
        {{ form_widget(form.isHomepage) }}
    <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
{{ form_end(form) }}
", "@PageViews/page/tabs/seo.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\PageBundle\\Resources\\views\\page\\tabs\\seo.html.twig");
    }
}
