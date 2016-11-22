<?php

/* ArticleBundle:category:edit.html.twig */
class __TwigTemplate_2a7e5f017a538dc8fe9a26e534e4fda9a6bd28f0ecd48d5d9ececb2c361bfb03 extends Twig_Template
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
        $__internal_ba2bcd5b8fefb85cb1657cf30c3934baf467bb3bc40625787d0180c0ece033e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2bcd5b8fefb85cb1657cf30c3934baf467bb3bc40625787d0180c0ece033e4->enter($__internal_ba2bcd5b8fefb85cb1657cf30c3934baf467bb3bc40625787d0180c0ece033e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2bcd5b8fefb85cb1657cf30c3934baf467bb3bc40625787d0180c0ece033e4->leave($__internal_ba2bcd5b8fefb85cb1657cf30c3934baf467bb3bc40625787d0180c0ece033e4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd731f2d5a83b9361478ab8c80228d81b3a0d1d0f8f9ebcf55ecc251daf45b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd731f2d5a83b9361478ab8c80228d81b3a0d1d0f8f9ebcf55ecc251daf45b3f->enter($__internal_cd731f2d5a83b9361478ab8c80228d81b3a0d1d0f8f9ebcf55ecc251daf45b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cd731f2d5a83b9361478ab8c80228d81b3a0d1d0f8f9ebcf55ecc251daf45b3f->leave($__internal_cd731f2d5a83b9361478ab8c80228d81b3a0d1d0f8f9ebcf55ecc251daf45b3f_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2c301dfc8d4f7511d5160d292e4a48bc3835949db8347057bee937aa0c645ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c301dfc8d4f7511d5160d292e4a48bc3835949db8347057bee937aa0c645ae2->enter($__internal_2c301dfc8d4f7511d5160d292e4a48bc3835949db8347057bee937aa0c645ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <a class=\"breadcrumb\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Catégorie</a>
    <a class=\"breadcrumb\" href=\"#!\">Modification d'une catégorie</a>
";
        
        $__internal_2c301dfc8d4f7511d5160d292e4a48bc3835949db8347057bee937aa0c645ae2->leave($__internal_2c301dfc8d4f7511d5160d292e4a48bc3835949db8347057bee937aa0c645ae2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d9c1ba29aaadc8da3a384dc7885f599a044f84347392ac6c56366383fd62437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9c1ba29aaadc8da3a384dc7885f599a044f84347392ac6c56366383fd62437->enter($__internal_2d9c1ba29aaadc8da3a384dc7885f599a044f84347392ac6c56366383fd62437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
        <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    ";
        // line 15
        $this->loadTemplate("::formback.html.twig", "ArticleBundle:category:edit.html.twig", 15)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
        // line 16
        echo "     <div class=\"row\">
        <div class=\"col s12 m12 l12\">    
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_2d9c1ba29aaadc8da3a384dc7885f599a044f84347392ac6c56366383fd62437->leave($__internal_2d9c1ba29aaadc8da3a384dc7885f599a044f84347392ac6c56366383fd62437_prof);

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
        return array (  100 => 21,  95 => 19,  91 => 18,  87 => 16,  85 => 15,  79 => 12,  75 => 10,  69 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% block breadcrumb %}
    <a class=\"breadcrumb\" href=\"{{ path('admin_category_index') }}\">Catégorie</a>
    <a class=\"breadcrumb\" href=\"#!\">Modification d'une catégorie</a>
{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m12 l12\">
        <a role=\"button\" class=\"btn waves-effect waves-light pull-right\" href=\"{{ path('admin_category_index') }}\"><i class=\"material-icons left\">skip_previous</i> Revenir à la liste</a>
        </div>
    </div>
    {% include \"::formback.html.twig\" with {\"form\":edit_form} %}
     <div class=\"row\">
        <div class=\"col s12 m12 l12\">    
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <center><button class='btn green waves-effect waves-light' type=\"submit\"><i class=\"material-icons left\">save</i>Enregistrer</button></center>
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
", "ArticleBundle:category:edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\ArticleBundle/Resources/views/category/edit.html.twig");
    }
}
