<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_e1a69ce32c01a11f5ccbe67d117d57836682a6ad855d088bba68e94895e17e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_b7de8cf7a6a2379403ea055ff9bbe3fdf703aa5b55cd69a249e57bcf192a8ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7de8cf7a6a2379403ea055ff9bbe3fdf703aa5b55cd69a249e57bcf192a8ad2->enter($__internal_b7de8cf7a6a2379403ea055ff9bbe3fdf703aa5b55cd69a249e57bcf192a8ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7de8cf7a6a2379403ea055ff9bbe3fdf703aa5b55cd69a249e57bcf192a8ad2->leave($__internal_b7de8cf7a6a2379403ea055ff9bbe3fdf703aa5b55cd69a249e57bcf192a8ad2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22e7ef8499330cab067bcb4cfafc050519aa1999b4561f916ef3c4d25c89e5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e7ef8499330cab067bcb4cfafc050519aa1999b4561f916ef3c4d25c89e5c5->enter($__internal_22e7ef8499330cab067bcb4cfafc050519aa1999b4561f916ef3c4d25c89e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_22e7ef8499330cab067bcb4cfafc050519aa1999b4561f916ef3c4d25c89e5c5->leave($__internal_22e7ef8499330cab067bcb4cfafc050519aa1999b4561f916ef3c4d25c89e5c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_444257daed86bd99e7482bc84c2cde8551283c97b49e4b6dacf32ac1b3b425ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444257daed86bd99e7482bc84c2cde8551283c97b49e4b6dacf32ac1b3b425ad->enter($__internal_444257daed86bd99e7482bc84c2cde8551283c97b49e4b6dacf32ac1b3b425ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/topStat.html.twig", "AdminBundle:Default:index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/mainStat.html.twig", "AdminBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/bottomStat.html.twig", "AdminBundle:Default:index.html.twig", 8)->display($context);
        
        $__internal_444257daed86bd99e7482bc84c2cde8551283c97b49e4b6dacf32ac1b3b425ad->leave($__internal_444257daed86bd99e7482bc84c2cde8551283c97b49e4b6dacf32ac1b3b425ad_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f6aba07a6b46d788d12adeae290203b24b351826029708e3749f9ef662f3e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6aba07a6b46d788d12adeae290203b24b351826029708e3749f9ef662f3e65->enter($__internal_0f6aba07a6b46d788d12adeae290203b24b351826029708e3749f9ef662f3e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "            
    ";
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0f6aba07a6b46d788d12adeae290203b24b351826029708e3749f9ef662f3e65->leave($__internal_0f6aba07a6b46d788d12adeae290203b24b351826029708e3749f9ef662f3e65_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  72 => 10,  64 => 8,  61 => 7,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% block body %}
    {% include \"@AdminViews/Home/topStat.html.twig\" %}
    {% include \"@AdminViews/Home/mainStat.html.twig\" %}
    {% include \"@AdminViews/Home/bottomStat.html.twig\" %}
{% endblock %}
{% block javascripts %}            
    {{ parent() }}
    <script src=\"{{ asset('js/themes/admin/morris/morris-data.js') }}\"></script>
{% endblock %}", "AdminBundle:Default:index.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
