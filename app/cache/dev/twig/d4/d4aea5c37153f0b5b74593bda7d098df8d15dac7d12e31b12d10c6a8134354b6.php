<?php

/* ArticleBundle:article:edit.html.twig */
class __TwigTemplate_50187cb0efa0d4b0dbe2c6fe9160ed31b34c54116c0cc4e6c5f215db027ddd6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:article:edit.html.twig", 1);
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
        $__internal_6accd52b706cb7c87d6292f97b9b84010a7ef82a5cc2f1abc74c3040b96b8e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6accd52b706cb7c87d6292f97b9b84010a7ef82a5cc2f1abc74c3040b96b8e07->enter($__internal_6accd52b706cb7c87d6292f97b9b84010a7ef82a5cc2f1abc74c3040b96b8e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6accd52b706cb7c87d6292f97b9b84010a7ef82a5cc2f1abc74c3040b96b8e07->leave($__internal_6accd52b706cb7c87d6292f97b9b84010a7ef82a5cc2f1abc74c3040b96b8e07_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3d7b25ab3de337661129620748aec0623e65fafcd8d33e167e7f4edf815452e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d7b25ab3de337661129620748aec0623e65fafcd8d33e167e7f4edf815452e->enter($__internal_e3d7b25ab3de337661129620748aec0623e65fafcd8d33e167e7f4edf815452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:edit.html.twig"));

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
        
        $__internal_e3d7b25ab3de337661129620748aec0623e65fafcd8d33e167e7f4edf815452e->leave($__internal_e3d7b25ab3de337661129620748aec0623e65fafcd8d33e167e7f4edf815452e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b20dc7e4bed243ee5916ce9f5d8463404c4764fcdce4a4076f43333f1212cf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20dc7e4bed243ee5916ce9f5d8463404c4764fcdce4a4076f43333f1212cf89->enter($__internal_b20dc7e4bed243ee5916ce9f5d8463404c4764fcdce4a4076f43333f1212cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Article</a> /  Modification d'un article";
        
        $__internal_b20dc7e4bed243ee5916ce9f5d8463404c4764fcdce4a4076f43333f1212cf89->leave($__internal_b20dc7e4bed243ee5916ce9f5d8463404c4764fcdce4a4076f43333f1212cf89_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_724317264f9159723c2e24d23d190d5372be916a6c24f30a97057f3a35b2864e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724317264f9159723c2e24d23d190d5372be916a6c24f30a97057f3a35b2864e->enter($__internal_724317264f9159723c2e24d23d190d5372be916a6c24f30a97057f3a35b2864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:edit.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">    
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <div class='text-center'>
                    <input class='btn btn-success' type=\"submit\" value=\"Enregister\" />
                </div>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_724317264f9159723c2e24d23d190d5372be916a6c24f30a97057f3a35b2864e->leave($__internal_724317264f9159723c2e24d23d190d5372be916a6c24f30a97057f3a35b2864e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd739f52607eb164b675b371d76257751ce37797059af66875e091f052b0b8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd739f52607eb164b675b371d76257751ce37797059af66875e091f052b0b8ac->enter($__internal_dd739f52607eb164b675b371d76257751ce37797059af66875e091f052b0b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:article:edit.html.twig"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootbox/bootbox.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/froala/froala.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
    <script type='text/javascript' src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/article/init.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_dd739f52607eb164b675b371d76257751ce37797059af66875e091f052b0b8ac->leave($__internal_dd739f52607eb164b675b371d76257751ce37797059af66875e091f052b0b8ac_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  127 => 28,  123 => 27,  118 => 26,  112 => 25,  101 => 21,  94 => 17,  90 => 16,  82 => 11,  78 => 9,  72 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-xs-12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <div class='text-center'>
                    <input class='btn btn-success' type=\"submit\" value=\"Enregister\" />
                </div>
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
", "ArticleBundle:article:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/article/edit.html.twig");
    }
}
