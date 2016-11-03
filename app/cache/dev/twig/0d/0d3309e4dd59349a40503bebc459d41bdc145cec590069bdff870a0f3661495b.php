<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_8342e599e8213174f3fec8a04474854ccbd27a92f0f3788fd3069a0164c12cc5 extends Twig_Template
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
        $__internal_e4909da540d6493a0ae9b7d3d949e7ccead3952ae64db2e2bee58cbdf73667ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4909da540d6493a0ae9b7d3d949e7ccead3952ae64db2e2bee58cbdf73667ed->enter($__internal_e4909da540d6493a0ae9b7d3d949e7ccead3952ae64db2e2bee58cbdf73667ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4909da540d6493a0ae9b7d3d949e7ccead3952ae64db2e2bee58cbdf73667ed->leave($__internal_e4909da540d6493a0ae9b7d3d949e7ccead3952ae64db2e2bee58cbdf73667ed_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c162ae823ac826346fec11b02983f3f7da5364ba44a0e6ed0cf32134235df4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c162ae823ac826346fec11b02983f3f7da5364ba44a0e6ed0cf32134235df4b1->enter($__internal_c162ae823ac826346fec11b02983f3f7da5364ba44a0e6ed0cf32134235df4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminBundle:Default:index.html.twig"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c162ae823ac826346fec11b02983f3f7da5364ba44a0e6ed0cf32134235df4b1->leave($__internal_c162ae823ac826346fec11b02983f3f7da5364ba44a0e6ed0cf32134235df4b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b8c09d18fceec32f99a327db191db261eb5d7e702cfb15ffa7ab4716e1cac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b8c09d18fceec32f99a327db191db261eb5d7e702cfb15ffa7ab4716e1cac7->enter($__internal_d9b8c09d18fceec32f99a327db191db261eb5d7e702cfb15ffa7ab4716e1cac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminBundle:Default:index.html.twig"));

        // line 6
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/topStat.html.twig", "AdminBundle:Default:index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/mainStat.html.twig", "AdminBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("@AdminViews/Home/bottomStat.html.twig", "AdminBundle:Default:index.html.twig", 8)->display($context);
        
        $__internal_d9b8c09d18fceec32f99a327db191db261eb5d7e702cfb15ffa7ab4716e1cac7->leave($__internal_d9b8c09d18fceec32f99a327db191db261eb5d7e702cfb15ffa7ab4716e1cac7_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65e4f195a499e6a0eb8f247b6f4d464db55276887cc27a0339feb8ea693ea384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e4f195a499e6a0eb8f247b6f4d464db55276887cc27a0339feb8ea693ea384->enter($__internal_65e4f195a499e6a0eb8f247b6f4d464db55276887cc27a0339feb8ea693ea384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminBundle:Default:index.html.twig"));

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
        
        $__internal_65e4f195a499e6a0eb8f247b6f4d464db55276887cc27a0339feb8ea693ea384->leave($__internal_65e4f195a499e6a0eb8f247b6f4d464db55276887cc27a0339feb8ea693ea384_prof);

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
