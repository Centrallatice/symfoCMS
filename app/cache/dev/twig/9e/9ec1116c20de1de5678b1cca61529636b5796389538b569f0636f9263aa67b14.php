<?php

/* ArticleBundle:category:edit.html.twig */
class __TwigTemplate_2ff20a6b1f94ce108f8b4a363e89afb6183ed06c20c191fa259d1a9217f30bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "ArticleBundle:category:edit.html.twig", 1);
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
        $__internal_21f9b238681bc3d0b2c3a04ede79054f7f227915d382ffeb63e65b60dcedae24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f9b238681bc3d0b2c3a04ede79054f7f227915d382ffeb63e65b60dcedae24->enter($__internal_21f9b238681bc3d0b2c3a04ede79054f7f227915d382ffeb63e65b60dcedae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f9b238681bc3d0b2c3a04ede79054f7f227915d382ffeb63e65b60dcedae24->leave($__internal_21f9b238681bc3d0b2c3a04ede79054f7f227915d382ffeb63e65b60dcedae24_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_409eb12d0cc3d03254b34c1906444fd4827d9137a4a125c76b32bcdaad8ad14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409eb12d0cc3d03254b34c1906444fd4827d9137a4a125c76b32bcdaad8ad14a->enter($__internal_409eb12d0cc3d03254b34c1906444fd4827d9137a4a125c76b32bcdaad8ad14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:edit.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_409eb12d0cc3d03254b34c1906444fd4827d9137a4a125c76b32bcdaad8ad14a->leave($__internal_409eb12d0cc3d03254b34c1906444fd4827d9137a4a125c76b32bcdaad8ad14a_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_81bdd4a53993662fe314d4dd6b468e28a2a8928d9c6a06c4a050cb9d4c7da564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bdd4a53993662fe314d4dd6b468e28a2a8928d9c6a06c4a050cb9d4c7da564->enter($__internal_81bdd4a53993662fe314d4dd6b468e28a2a8928d9c6a06c4a050cb9d4c7da564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:edit.html.twig"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Catégorie</a> /  Modification d'une catégorie";
        
        $__internal_81bdd4a53993662fe314d4dd6b468e28a2a8928d9c6a06c4a050cb9d4c7da564->leave($__internal_81bdd4a53993662fe314d4dd6b468e28a2a8928d9c6a06c4a050cb9d4c7da564_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2017641ad65ea5727c723eb1dd16e5272c655018decc02ac0ec7c841cbc876d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2017641ad65ea5727c723eb1dd16e5272c655018decc02ac0ec7c841cbc876d0->enter($__internal_2017641ad65ea5727c723eb1dd16e5272c655018decc02ac0ec7c841cbc876d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ArticleBundle:category:edit.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 12
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:category:edit.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
        // line 13
        echo "     <div class=\"row\">
        <div class=\"col-xs-12\">    
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_2017641ad65ea5727c723eb1dd16e5272c655018decc02ac0ec7c841cbc876d0->leave($__internal_2017641ad65ea5727c723eb1dd16e5272c655018decc02ac0ec7c841cbc876d0_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  92 => 16,  88 => 15,  84 => 13,  82 => 12,  76 => 9,  72 => 7,  66 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% endblock %}
{% block breadcrumb %} <a href=\"{{ path('admin_article_index') }}\">Catégorie</a> /  Modification d'une catégorie{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a role=\"button\" class=\"btn btn-primary pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"fa fa-arrow-left\"></i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":edit_form} %}
     <div class=\"row\">
        <div class=\"col-xs-12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input class='btn btn-success pull-right' type=\"submit\" value=\"Enregister\" />
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
", "ArticleBundle:category:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/edit.html.twig");
    }
}
