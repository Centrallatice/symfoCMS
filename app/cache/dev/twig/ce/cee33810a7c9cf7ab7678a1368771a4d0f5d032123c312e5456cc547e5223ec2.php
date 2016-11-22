<?php

/* ::menus/navbar.html.twig */
class __TwigTemplate_798ad506517a1af6474cbaa1d0b26ec0b2c889fc2cd054d93866aa12f841b94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceb14e7a24eeaac3b13cdb35cb3af96135002e7a5f61506a637fd02604987ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb14e7a24eeaac3b13cdb35cb3af96135002e7a5f61506a637fd02604987ce9->enter($__internal_ceb14e7a24eeaac3b13cdb35cb3af96135002e7a5f61506a637fd02604987ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menus/navbar.html.twig"));

        // line 1
        echo " <nav class=\"top-nav\">
    <div class=\"nav-wrapper\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
        echo "\" class=\"page-title\"><small>Administration du site </small>";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</a>
    </div> 
 </nav>
<div class=\"container\">
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse top-nav full hide-on-large-only\">
        <i class=\"material-icons\">menu</i>
    </a>
</div>";
        
        $__internal_ceb14e7a24eeaac3b13cdb35cb3af96135002e7a5f61506a637fd02604987ce9->leave($__internal_ceb14e7a24eeaac3b13cdb35cb3af96135002e7a5f61506a637fd02604987ce9_prof);

    }

    public function getTemplateName()
    {
        return "::menus/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <nav class=\"top-nav\">
    <div class=\"nav-wrapper\">
        <a href=\"{{path('admin_default_index')}}\" class=\"page-title\"><small>Administration du site </small>{{siteName}}</a>
    </div> 
 </nav>
<div class=\"container\">
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse top-nav full hide-on-large-only\">
        <i class=\"material-icons\">menu</i>
    </a>
</div>", "::menus/navbar.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/menus/navbar.html.twig");
    }
}
