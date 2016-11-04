<?php

/* @Article/article/edit.html.twig */
class __TwigTemplate_6ae529815ae497a2b35d2f8109939ce9c509651df71ed5542581a4f9beb36774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@Article/article/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfb89281da6fb2ff84bfe47361617503c0d4c05bdcc51a560b574720ad4d3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfb89281da6fb2ff84bfe47361617503c0d4c05bdcc51a560b574720ad4d3a3->enter($__internal_9cfb89281da6fb2ff84bfe47361617503c0d4c05bdcc51a560b574720ad4d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Article/article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfb89281da6fb2ff84bfe47361617503c0d4c05bdcc51a560b574720ad4d3a3->leave($__internal_9cfb89281da6fb2ff84bfe47361617503c0d4c05bdcc51a560b574720ad4d3a3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19e254172674bcbf107c9c952bb37b7209b31768e3fbe0509a64973a683f4345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e254172674bcbf107c9c952bb37b7209b31768e3fbe0509a64973a683f4345->enter($__internal_19e254172674bcbf107c9c952bb37b7209b31768e3fbe0509a64973a683f4345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/froala/froala.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
";
        
        $__internal_19e254172674bcbf107c9c952bb37b7209b31768e3fbe0509a64973a683f4345->leave($__internal_19e254172674bcbf107c9c952bb37b7209b31768e3fbe0509a64973a683f4345_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_af51a774c09651506321b9bc4a8cf641d2e7056c9d50161708e6b4145d9a4c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af51a774c09651506321b9bc4a8cf641d2e7056c9d50161708e6b4145d9a4c45->enter($__internal_af51a774c09651506321b9bc4a8cf641d2e7056c9d50161708e6b4145d9a4c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Modification d'un article";
        
        $__internal_af51a774c09651506321b9bc4a8cf641d2e7056c9d50161708e6b4145d9a4c45->leave($__internal_af51a774c09651506321b9bc4a8cf641d2e7056c9d50161708e6b4145d9a4c45_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdad028eb2307511292f5f11bd8e22c0ef593e84dfa873aaf778947057c55c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdad028eb2307511292f5f11bd8e22c0ef593e84dfa873aaf778947057c55c6f->enter($__internal_bdad028eb2307511292f5f11bd8e22c0ef593e84dfa873aaf778947057c55c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 14
        $this->loadTemplate("::formback.html.twig", "@Article/article/edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">    
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
                <div class=\"tagify-container\">
                    ";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method")) > 0)) {
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 23
                echo "                            <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    <input type=\"text\" id=\"articlebundle_page_kw_fake\" class=\"form-control\">
                </div>
                <input 
                    type=\"hidden\" 
                    name=\"articlebundle_page_final\" 
                    id=\"articlebundle_page_final\"
                    ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method")) > 0)) {
            echo "value=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["k"], "value", array()) . ";"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"";
        }
        echo ">
                <br />
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
                
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_bdad028eb2307511292f5f11bd8e22c0ef593e84dfa873aaf778947057c55c6f->leave($__internal_bdad028eb2307511292f5f11bd8e22c0ef593e84dfa873aaf778947057c55c6f_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_875ffabeff779f78e71e57c5ff05980bcc793f90d69f95312c25a59f9d451b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875ffabeff779f78e71e57c5ff05980bcc793f90d69f95312c25a59f9d451b6b->enter($__internal_875ffabeff779f78e71e57c5ff05980bcc793f90d69f95312c25a59f9d451b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Article/article/edit.html.twig"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_875ffabeff779f78e71e57c5ff05980bcc793f90d69f95312c25a59f9d451b6b->leave($__internal_875ffabeff779f78e71e57c5ff05980bcc793f90d69f95312c25a59f9d451b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Article/article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  178 => 45,  174 => 44,  169 => 43,  163 => 42,  152 => 38,  134 => 34,  126 => 28,  123 => 27,  114 => 24,  111 => 23,  106 => 22,  104 => 21,  98 => 18,  94 => 17,  90 => 15,  88 => 14,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::admin.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/froala/froala.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Article</a> /  Modification d'un article{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":edit_form} %}
    <div class=\"row\">
        <div class=\"col-xs-12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
                <div class=\"tagify-container\">
                    {% if article.getKeywords()|length >0 %}
                        {% for k in article.getKeywords() %}
                            <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>{{k.value}}
                            </div>
                        {% endfor %}
                    {% endif %}
                    <input type=\"text\" id=\"articlebundle_page_kw_fake\" class=\"form-control\">
                </div>
                <input 
                    type=\"hidden\" 
                    name=\"articlebundle_page_final\" 
                    id=\"articlebundle_page_final\"
                    {% if article.getKeywords()|length >0 %}value=\"{% for k in article.getKeywords() %}{{k.value~';'}}{% endfor %}\"{% endif %}>
                <br />
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
                
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript' src='{{asset('js/vendor/bootbox/bootbox.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/vendor/froala/froala.min.js')}}'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='{{asset('js/admin/article/init.js')}}'></script>
{% endblock %}
", "@Article/article/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle\\Resources\\views\\article\\edit.html.twig");
    }
}
