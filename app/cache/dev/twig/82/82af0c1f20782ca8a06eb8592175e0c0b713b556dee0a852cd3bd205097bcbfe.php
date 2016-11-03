<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_7ecc081247cd9ecfba709495d00ff0c4889e6904a2e3d38566855dccc52e3dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_0a9fdc15b4c71f58fdbd379e7cfedb8d387123d647af91e24504539a5a6a45d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9fdc15b4c71f58fdbd379e7cfedb8d387123d647af91e24504539a5a6a45d9->enter($__internal_0a9fdc15b4c71f58fdbd379e7cfedb8d387123d647af91e24504539a5a6a45d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9fdc15b4c71f58fdbd379e7cfedb8d387123d647af91e24504539a5a6a45d9->leave($__internal_0a9fdc15b4c71f58fdbd379e7cfedb8d387123d647af91e24504539a5a6a45d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c950b4f023e827a8f29d1a18bbb3dcffe19c7262d3122f68c3894b3e9767b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c950b4f023e827a8f29d1a18bbb3dcffe19c7262d3122f68c3894b3e9767b3b->enter($__internal_0c950b4f023e827a8f29d1a18bbb3dcffe19c7262d3122f68c3894b3e9767b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0c950b4f023e827a8f29d1a18bbb3dcffe19c7262d3122f68c3894b3e9767b3b->leave($__internal_0c950b4f023e827a8f29d1a18bbb3dcffe19c7262d3122f68c3894b3e9767b3b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
