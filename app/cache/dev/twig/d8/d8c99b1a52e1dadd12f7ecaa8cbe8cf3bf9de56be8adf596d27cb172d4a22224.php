<?php

/* ArticleBundle:Article:edit.html.twig */
class __TwigTemplate_2c51aa1004662ac6aeec0fb74a8790603433e5511bbeb9ed05f80e3d71d3600f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:Article:edit.html.twig", 1);
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
        $__internal_58d46a35c8f014a6cfa91eb6233cbf65cd70733886a1a3e181618779f259056a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d46a35c8f014a6cfa91eb6233cbf65cd70733886a1a3e181618779f259056a->enter($__internal_58d46a35c8f014a6cfa91eb6233cbf65cd70733886a1a3e181618779f259056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d46a35c8f014a6cfa91eb6233cbf65cd70733886a1a3e181618779f259056a->leave($__internal_58d46a35c8f014a6cfa91eb6233cbf65cd70733886a1a3e181618779f259056a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3aeecf98e06aff140d49bab95a17af9ee0104819910e5afc1ebada5fddd76c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aeecf98e06aff140d49bab95a17af9ee0104819910e5afc1ebada5fddd76c9e->enter($__internal_3aeecf98e06aff140d49bab95a17af9ee0104819910e5afc1ebada5fddd76c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3aeecf98e06aff140d49bab95a17af9ee0104819910e5afc1ebada5fddd76c9e->leave($__internal_3aeecf98e06aff140d49bab95a17af9ee0104819910e5afc1ebada5fddd76c9e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_46588f94f553b59f95fed584d8d211015a6ec85af91c918634af7fcc5d3c563f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46588f94f553b59f95fed584d8d211015a6ec85af91c918634af7fcc5d3c563f->enter($__internal_46588f94f553b59f95fed584d8d211015a6ec85af91c918634af7fcc5d3c563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a>
    <a class=\"breadcrumb\" href=\"#!\">Modification d'un article</a>  
";
        
        $__internal_46588f94f553b59f95fed584d8d211015a6ec85af91c918634af7fcc5d3c563f->leave($__internal_46588f94f553b59f95fed584d8d211015a6ec85af91c918634af7fcc5d3c563f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59892e4c479887e81ffd3acbc01002aa8624d0909c4b93608347cabb5982cb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59892e4c479887e81ffd3acbc01002aa8624d0909c4b93608347cabb5982cb6c->enter($__internal_59892e4c479887e81ffd3acbc01002aa8624d0909c4b93608347cabb5982cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-light waves-effect pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 17
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:Article:edit.html.twig", 17)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
        // line 18
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">    
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <label class=\"control-label required\" for=\"pagebundle_page_titre\">Mots-clés</label>  
                <div class=\"tagify-container\">
                    ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method")) > 0)) {
            // line 25
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getKeywords", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 26
                echo "                            <div role=\"alert\" class=\"kw alert alert-dismissible fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span aria-hidden=\"true\">×</span></button>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "value", array()), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
        }
        // line 31
        echo "                    <input type=\"text\" id=\"articlebundle_page_kw_fake\" class=\"form-control\">
                </div>
                <input 
                    type=\"hidden\" 
                    name=\"articlebundle_page_final\" 
                    id=\"articlebundle_page_final\"
                    ";
        // line 37
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
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
                
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_59892e4c479887e81ffd3acbc01002aa8624d0909c4b93608347cabb5982cb6c->leave($__internal_59892e4c479887e81ffd3acbc01002aa8624d0909c4b93608347cabb5982cb6c_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c6cd91511a6bcfbc3da23cd90bc20562e3239eff6d9b6b3ced3133022234103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6cd91511a6bcfbc3da23cd90bc20562e3239eff6d9b6b3ced3133022234103->enter($__internal_1c6cd91511a6bcfbc3da23cd90bc20562e3239eff6d9b6b3ced3133022234103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_1c6cd91511a6bcfbc3da23cd90bc20562e3239eff6d9b6b3ced3133022234103->leave($__internal_1c6cd91511a6bcfbc3da23cd90bc20562e3239eff6d9b6b3ced3133022234103_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 51,  181 => 48,  177 => 47,  172 => 46,  166 => 45,  155 => 41,  137 => 37,  129 => 31,  126 => 30,  117 => 27,  114 => 26,  109 => 25,  107 => 24,  101 => 21,  97 => 20,  93 => 18,  91 => 17,  85 => 14,  81 => 12,  75 => 11,  64 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('admin_article_index') }}\">Article</a>
    <a class=\"breadcrumb\" href=\"#!\">Modification d'un article</a>  
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <a role=\"button\" class=\"btn waves-light waves-effect pull-right\" href=\"{{ path('admin_article_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":edit_form} %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">    
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
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
                
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
", "ArticleBundle:Article:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/Article/edit.html.twig");
    }
}
