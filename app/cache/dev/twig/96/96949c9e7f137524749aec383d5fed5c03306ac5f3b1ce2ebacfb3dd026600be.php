<?php

/* ArticleBundle:category:new.html.twig */
class __TwigTemplate_cc788b6ef6327d515b0fda264cd52c9dfe91ed56edf478838463393b7a303fe1 extends Twig_Template
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
        $__internal_ab10f30e6dfe66b670e6d43425d090dbe62546cb275f7e6a10c89b6ff32c7601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab10f30e6dfe66b670e6d43425d090dbe62546cb275f7e6a10c89b6ff32c7601->enter($__internal_ab10f30e6dfe66b670e6d43425d090dbe62546cb275f7e6a10c89b6ff32c7601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab10f30e6dfe66b670e6d43425d090dbe62546cb275f7e6a10c89b6ff32c7601->leave($__internal_ab10f30e6dfe66b670e6d43425d090dbe62546cb275f7e6a10c89b6ff32c7601_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8dec53c0912611810463c7eaeff6388f3dc5cfdb79be51091dfbaa3a77247a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dec53c0912611810463c7eaeff6388f3dc5cfdb79be51091dfbaa3a77247a2->enter($__internal_e8dec53c0912611810463c7eaeff6388f3dc5cfdb79be51091dfbaa3a77247a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e8dec53c0912611810463c7eaeff6388f3dc5cfdb79be51091dfbaa3a77247a2->leave($__internal_e8dec53c0912611810463c7eaeff6388f3dc5cfdb79be51091dfbaa3a77247a2_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8839b6a583a21bca71b7afdd02b8a704e731e7b455ca0b89a2515fc8e4bd65e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8839b6a583a21bca71b7afdd02b8a704e731e7b455ca0b89a2515fc8e4bd65e6->enter($__internal_8839b6a583a21bca71b7afdd02b8a704e731e7b455ca0b89a2515fc8e4bd65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégorie </a>
    <a class=\"breadcrumb\" href=\"#!\">Créer une catégorie</a>
";
        
        $__internal_8839b6a583a21bca71b7afdd02b8a704e731e7b455ca0b89a2515fc8e4bd65e6->leave($__internal_8839b6a583a21bca71b7afdd02b8a704e731e7b455ca0b89a2515fc8e4bd65e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de1ee7a3bc7229da9c7f69583588e4d0fd5192369e088054a7fa879d22b5c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de1ee7a3bc7229da9c7f69583588e4d0fd5192369e088054a7fa879d22b5c64->enter($__internal_6de1ee7a3bc7229da9c7f69583588e4d0fd5192369e088054a7fa879d22b5c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
       </div>
    </div> 
    ";
        // line 17
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:category:new.html.twig", 17)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 18
        echo "    <div class=\"row\">
        <div class=\"cols12\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>        
    
";
        
        $__internal_6de1ee7a3bc7229da9c7f69583588e4d0fd5192369e088054a7fa879d22b5c64->leave($__internal_6de1ee7a3bc7229da9c7f69583588e4d0fd5192369e088054a7fa879d22b5c64_prof);

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
        return array (  105 => 23,  100 => 21,  96 => 20,  92 => 18,  90 => 17,  84 => 14,  80 => 12,  74 => 11,  63 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
    <a class=\"breadcrumb\" href=\"{{ path('admin_category_index') }}\">Catégorie </a>
    <a class=\"breadcrumb\" href=\"#!\">Créer une catégorie</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"cols12\">
            <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
       </div>
    </div> 
    {% include \"::formback.html.twig\" with {\"form\":form} %}
    <div class=\"row\">
        <div class=\"cols12\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
            {{ form_end(form) }}
        </div>
    </div>        
    
{% endblock %}
", "ArticleBundle:category:new.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/new.html.twig");
    }
}
