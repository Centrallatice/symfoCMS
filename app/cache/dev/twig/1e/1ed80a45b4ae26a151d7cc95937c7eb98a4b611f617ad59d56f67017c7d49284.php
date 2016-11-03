<?php

/* FOSUserBundle:Security:delete.html.twig */
class __TwigTemplate_b498175a2abe082784a60697207aa3ed9e9549fea79fd603b0689215cf398d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_786057885b63f5f058541efbefcecd39b522f16a9605d13ec4b0293a2aabaace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786057885b63f5f058541efbefcecd39b522f16a9605d13ec4b0293a2aabaace->enter($__internal_786057885b63f5f058541efbefcecd39b522f16a9605d13ec4b0293a2aabaace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786057885b63f5f058541efbefcecd39b522f16a9605d13ec4b0293a2aabaace->leave($__internal_786057885b63f5f058541efbefcecd39b522f16a9605d13ec4b0293a2aabaace_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_050560b2d380ab9448e09a32c4fff1d08ec2fcf91fa4129bf5b092e61cbbe662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050560b2d380ab9448e09a32c4fff1d08ec2fcf91fa4129bf5b092e61cbbe662->enter($__internal_050560b2d380ab9448e09a32c4fff1d08ec2fcf91fa4129bf5b092e61cbbe662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:delete.html.twig"));

        echo "Attention - Vous êtes sur le point de désactiver l'utilisateur ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "codeProfil", array()), "html", null, true);
        
        $__internal_050560b2d380ab9448e09a32c4fff1d08ec2fcf91fa4129bf5b092e61cbbe662->leave($__internal_050560b2d380ab9448e09a32c4fff1d08ec2fcf91fa4129bf5b092e61cbbe662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20f8ba4c884df70ca921030c7138afb1b3f3c5809fbc0edc4a1ac4e475672eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20f8ba4c884df70ca921030c7138afb1b3f3c5809fbc0edc4a1ac4e475672eb->enter($__internal_d20f8ba4c884df70ca921030c7138afb1b3f3c5809fbc0edc4a1ac4e475672eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:delete.html.twig"));

        // line 4
        echo "    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
             <a role=\"button\" class=\"btn btn-danger pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListesUtilisateurs");
        echo "\"><i class=\"fa fa-arrow-circle-left\"></i> Annuler</a>
        </div>
        <div class=\"box-body\">
            <div class='col-xs-12 text-center  alert alert-warning'>
                Êtes-vous sûr de vouloir effectuer cette action ?
            </div>
            <div class='col-xs-6 col-sm-3 col-sm-offset-3'>
                <form method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListesUtilisateurs");
        echo "\">
                    <button type=\"submit\" class=\"btn btn-danger pull-right\">Annuler</button>
                </form>
            </div>
            <div class='col-xs-6 col-sm-3 '>
                ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
                
            
        </div>
    </div>
";
        
        $__internal_d20f8ba4c884df70ca921030c7138afb1b3f3c5809fbc0edc4a1ac4e475672eb->leave($__internal_d20f8ba4c884df70ca921030c7138afb1b3f3c5809fbc0edc4a1ac4e475672eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  80 => 19,  76 => 18,  68 => 13,  58 => 6,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}Attention - Vous êtes sur le point de désactiver l'utilisateur {{user.codeProfil}}{% endblock %}
{% block body %}
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
             <a role=\"button\" class=\"btn btn-danger pull-right\" href=\"{{ path('ListesUtilisateurs')}}\"><i class=\"fa fa-arrow-circle-left\"></i> Annuler</a>
        </div>
        <div class=\"box-body\">
            <div class='col-xs-12 text-center  alert alert-warning'>
                Êtes-vous sûr de vouloir effectuer cette action ?
            </div>
            <div class='col-xs-6 col-sm-3 col-sm-offset-3'>
                <form method=\"POST\" action=\"{{ path('ListesUtilisateurs') }}\">
                    <button type=\"submit\" class=\"btn btn-danger pull-right\">Annuler</button>
                </form>
            </div>
            <div class='col-xs-6 col-sm-3 '>
                {{ form_start(form) }}
                    {{ form_widget(form) }}

                    <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                {{ form_end(form) }}
            </div>
                
            
        </div>
    </div>
{% endblock %}", "FOSUserBundle:Security:delete.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Security/delete.html.twig");
    }
}
