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
        $__internal_7473f5d9082f4d658c5b9febbac8cc2a2aead3ae112f8dcf10b444c4fc8722ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7473f5d9082f4d658c5b9febbac8cc2a2aead3ae112f8dcf10b444c4fc8722ce->enter($__internal_7473f5d9082f4d658c5b9febbac8cc2a2aead3ae112f8dcf10b444c4fc8722ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7473f5d9082f4d658c5b9febbac8cc2a2aead3ae112f8dcf10b444c4fc8722ce->leave($__internal_7473f5d9082f4d658c5b9febbac8cc2a2aead3ae112f8dcf10b444c4fc8722ce_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9046e8ed8908566a2d694973c1e9a7589929734d8fe2d50817b83176685e636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9046e8ed8908566a2d694973c1e9a7589929734d8fe2d50817b83176685e636f->enter($__internal_9046e8ed8908566a2d694973c1e9a7589929734d8fe2d50817b83176685e636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

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
        
        $__internal_9046e8ed8908566a2d694973c1e9a7589929734d8fe2d50817b83176685e636f->leave($__internal_9046e8ed8908566a2d694973c1e9a7589929734d8fe2d50817b83176685e636f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_151f6b74836a6aef572fe265ff473834cd4513d5e15554628c032a1623c25092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151f6b74836a6aef572fe265ff473834cd4513d5e15554628c032a1623c25092->enter($__internal_151f6b74836a6aef572fe265ff473834cd4513d5e15554628c032a1623c25092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégorie </a> /  Créer une catégorie";
        
        $__internal_151f6b74836a6aef572fe265ff473834cd4513d5e15554628c032a1623c25092->leave($__internal_151f6b74836a6aef572fe265ff473834cd4513d5e15554628c032a1623c25092_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_89563a8a63b268ff6ab4b1e5c4b65d82bb9a59c93e9c21681b9c14401d897708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89563a8a63b268ff6ab4b1e5c4b65d82bb9a59c93e9c21681b9c14401d897708->enter($__internal_89563a8a63b268ff6ab4b1e5c4b65d82bb9a59c93e9c21681b9c14401d897708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:new.html.twig"));

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
            echo "        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer cette catégorie\" />
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>        
    
";
        
        $__internal_89563a8a63b268ff6ab4b1e5c4b65d82bb9a59c93e9c21681b9c14401d897708->leave($__internal_89563a8a63b268ff6ab4b1e5c4b65d82bb9a59c93e9c21681b9c14401d897708_prof);

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
        return array (  121 => 29,  116 => 27,  112 => 26,  107 => 23,  98 => 20,  92 => 16,  88 => 15,  81 => 11,  77 => 9,  71 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
           {{ flash_message }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer cette catégorie\" />
            {{ form_end(form) }}
        </div>
    </div>        
    
{% endblock %}
", "ArticleBundle:category:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/new.html.twig");
    }
}
