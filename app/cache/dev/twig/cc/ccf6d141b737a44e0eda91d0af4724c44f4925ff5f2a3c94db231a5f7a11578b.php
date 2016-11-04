<?php

/* ArticleBundle:category:new.html.twig */
class __TwigTemplate_9ae7bf59d951ca0985d788b5125b88f333a045e15c5bde908004c6094d6eec4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29edd2f7cc32827a9752e58b2f4654d647f2b0aebd5817d933343eb22ce91d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29edd2f7cc32827a9752e58b2f4654d647f2b0aebd5817d933343eb22ce91d8->enter($__internal_a29edd2f7cc32827a9752e58b2f4654d647f2b0aebd5817d933343eb22ce91d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29edd2f7cc32827a9752e58b2f4654d647f2b0aebd5817d933343eb22ce91d8->leave($__internal_a29edd2f7cc32827a9752e58b2f4654d647f2b0aebd5817d933343eb22ce91d8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_729c4cff1f5549ecf07a30f3a343c92f839c7267873e9e7cb40beee89fb8a12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729c4cff1f5549ecf07a30f3a343c92f839c7267873e9e7cb40beee89fb8a12a->enter($__internal_729c4cff1f5549ecf07a30f3a343c92f839c7267873e9e7cb40beee89fb8a12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

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
        
        $__internal_729c4cff1f5549ecf07a30f3a343c92f839c7267873e9e7cb40beee89fb8a12a->leave($__internal_729c4cff1f5549ecf07a30f3a343c92f839c7267873e9e7cb40beee89fb8a12a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a5c7f65317e419d42664b3f17e57c4b77a30eee42bd9a0cec27fb52cf6fc1c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c7f65317e419d42664b3f17e57c4b77a30eee42bd9a0cec27fb52cf6fc1c4c->enter($__internal_a5c7f65317e419d42664b3f17e57c4b77a30eee42bd9a0cec27fb52cf6fc1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégorie </a> /  Créer une catégorie";
        
        $__internal_a5c7f65317e419d42664b3f17e57c4b77a30eee42bd9a0cec27fb52cf6fc1c4c->leave($__internal_a5c7f65317e419d42664b3f17e57c4b77a30eee42bd9a0cec27fb52cf6fc1c4c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_522e7112c2e2a87f71fcab088eb75f423b4c121d0bd4d52c2f8c583d97f0c91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522e7112c2e2a87f71fcab088eb75f423b4c121d0bd4d52c2f8c583d97f0c91d->enter($__internal_522e7112c2e2a87f71fcab088eb75f423b4c121d0bd4d52c2f8c583d97f0c91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
       </div>
    </div> 
    
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 21
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    <hr />
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>        
    
";
        
        $__internal_522e7112c2e2a87f71fcab088eb75f423b4c121d0bd4d52c2f8c583d97f0c91d->leave($__internal_522e7112c2e2a87f71fcab088eb75f423b4c121d0bd4d52c2f8c583d97f0c91d_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  117 => 28,  113 => 27,  108 => 24,  99 => 21,  92 => 16,  88 => 15,  81 => 11,  77 => 9,  71 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %} <a href=\"{{ path('admin_category_index') }}\">Catégorie </a> /  Créer une catégorie{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
       </div>
    </div> 
    
    {% for flash_message in app.session.flashBag.get('success') %}
        <hr />
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           {{ flash_message }}
        </div>
    {% endfor %}
    <hr />
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
            {{ form_end(form) }}
        </div>
    </div>        
    
{% endblock %}
", "ArticleBundle:category:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/new.html.twig");
    }
}
