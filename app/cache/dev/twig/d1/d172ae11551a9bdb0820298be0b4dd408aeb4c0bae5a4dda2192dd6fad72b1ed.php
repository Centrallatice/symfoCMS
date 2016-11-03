<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_d7af100f14774b064040de692343d779d3239e0158dd4a4e73fd795194e3319c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_966b298423fe3d2a406d21b58be5143be22a1f0c85a5ee22f774ffc6b61e85d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966b298423fe3d2a406d21b58be5143be22a1f0c85a5ee22f774ffc6b61e85d2->enter($__internal_966b298423fe3d2a406d21b58be5143be22a1f0c85a5ee22f774ffc6b61e85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_966b298423fe3d2a406d21b58be5143be22a1f0c85a5ee22f774ffc6b61e85d2->leave($__internal_966b298423fe3d2a406d21b58be5143be22a1f0c85a5ee22f774ffc6b61e85d2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_532c5e8919313cad03d566890f0fb1452c83d0ba21c5ad4bc0cfccd3609ae376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532c5e8919313cad03d566890f0fb1452c83d0ba21c5ad4bc0cfccd3609ae376->enter($__internal_532c5e8919313cad03d566890f0fb1452c83d0ba21c5ad4bc0cfccd3609ae376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:checkEmail.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_532c5e8919313cad03d566890f0fb1452c83d0ba21c5ad4bc0cfccd3609ae376->leave($__internal_532c5e8919313cad03d566890f0fb1452c83d0ba21c5ad4bc0cfccd3609ae376_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
