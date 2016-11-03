<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70282a3fc9dce33f7a0899e6b99e0cd10b85671d9ee57782289042ed1f7b30de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f222af6b05654177c8af26a6f5d14ae58c729b705175a1ba17fb3de92c9a6e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f222af6b05654177c8af26a6f5d14ae58c729b705175a1ba17fb3de92c9a6e91->enter($__internal_f222af6b05654177c8af26a6f5d14ae58c729b705175a1ba17fb3de92c9a6e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f222af6b05654177c8af26a6f5d14ae58c729b705175a1ba17fb3de92c9a6e91->leave($__internal_f222af6b05654177c8af26a6f5d14ae58c729b705175a1ba17fb3de92c9a6e91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d91d4f09c741cfccd1f05032627b0036b81f460a16b92791172545df2b6751cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91d4f09c741cfccd1f05032627b0036b81f460a16b92791172545df2b6751cb->enter($__internal_d91d4f09c741cfccd1f05032627b0036b81f460a16b92791172545df2b6751cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d91d4f09c741cfccd1f05032627b0036b81f460a16b92791172545df2b6751cb->leave($__internal_d91d4f09c741cfccd1f05032627b0036b81f460a16b92791172545df2b6751cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3b7dbf4911cdc3bf1f3395ba430c3b66ee469c90c7919d2acfa6fc43972dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b7dbf4911cdc3bf1f3395ba430c3b66ee469c90c7919d2acfa6fc43972dbff->enter($__internal_b3b7dbf4911cdc3bf1f3395ba430c3b66ee469c90c7919d2acfa6fc43972dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3b7dbf4911cdc3bf1f3395ba430c3b66ee469c90c7919d2acfa6fc43972dbff->leave($__internal_b3b7dbf4911cdc3bf1f3395ba430c3b66ee469c90c7919d2acfa6fc43972dbff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d167c4223d97cb31f377798f8a3c518f05a9d815e3a14c40e3fd873e5263f3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d167c4223d97cb31f377798f8a3c518f05a9d815e3a14c40e3fd873e5263f3be->enter($__internal_d167c4223d97cb31f377798f8a3c518f05a9d815e3a14c40e3fd873e5263f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d167c4223d97cb31f377798f8a3c518f05a9d815e3a14c40e3fd873e5263f3be->leave($__internal_d167c4223d97cb31f377798f8a3c518f05a9d815e3a14c40e3fd873e5263f3be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
