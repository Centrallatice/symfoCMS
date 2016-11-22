<?php

/* ::menus/left.html.twig */
class __TwigTemplate_dc926dcaa8b86e4adc473dd099c720b5e1e9eff5dc3c368d42409ce547d3d1f9 extends Twig_Template
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
        $__internal_13325953846e1e090e47e5a8033df8592fea684ee5c8bacd8b262cfe3995037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13325953846e1e090e47e5a8033df8592fea684ee5c8bacd8b262cfe3995037d->enter($__internal_13325953846e1e090e47e5a8033df8592fea684ee5c8bacd8b262cfe3995037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menus/left.html.twig"));

        // line 1
        echo "<ul class=\"collapsible side-nav fixed\" data-collapsible=\"accordion\" id=\"nav-mobile\">
    <li class=\"logo\">
        <a id=\"logo-container\" class=\"brand-logo text-center\"><i class=\"fa fa-edge fa-4x redme\"></i></a>
    </li>
    <li class=\"search\">
          <div class=\"search-wrapper card\">
            <input id=\"search\"><i class=\"material-icons\">search</i>
            <div class=\"search-results\"></div>
          </div>
     </li>
    <li>
        <div class=\"collapsible-header\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
        echo "\"><i class=\"material-icons\">home</i> Accueil</a>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal ";
        // line 17
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "page_new", 1 => "page_list", 2 => "page_edit", 3 => "page_show"))) {
            echo "active";
        }
        echo "\">
            <i class=\"material-icons\">description</i> Pages
        </div>
        <div class=\"collapsible-body\" ";
        // line 20
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "page_new", 1 => "page_list", 2 => "page_edit"))) {
            echo "style=\"display:block\"";
        }
        echo ">
            <ul>
                <li class=\"";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_new")) {
            echo "active";
        }
        echo "\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_new");
        echo "\">Créer une page </a>
                </li>
                <li class=\"";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_list")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Gérer les pages</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal ";
        // line 32
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_article_new", 1 => "admin_article_index", 2 => "admin_article_show", 3 => "admin_article_edit"))) {
            echo "active";
        }
        echo "\">
            <i class=\"large material-icons\">art_track</i> Articles
        </div>
        <div ";
        // line 35
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_article_new", 1 => "admin_article_index", 2 => "admin_article_edit", 3 => "admin_article_show"))) {
            echo "style='display:block'";
        }
        echo " class=\"collapsible-body\">
            <ul>
                <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_article_new")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_new");
        echo "\">Créer un article</a>
                </li>
                <li class=\"";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_article_index")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Gérer les articles</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal ";
        // line 47
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_category_new", 1 => "admin_category_index", 2 => "admin_category_show", 3 => "admin_category_edit"))) {
            echo "active";
        }
        echo "\">
            <i class=\"material-icons\">folder</i> Catégories
        </div>
        <div ";
        // line 50
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_category_new", 1 => "admin_category_index", 2 => "admin_category_show", 3 => "admin_category_edit"))) {
            echo "style='display:block'";
        }
        echo " class=\"collapsible-body\">
            <ul>
                <li class=\"";
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_category_new")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_new");
        echo "\">Créer une catégorie</a>
                </li>
                <li class=\"";
        // line 55
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_category_index")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Gérer les catégories</a>
                </li>
            </ul>
        </div>
    </li>
    
</ul>";
        
        $__internal_13325953846e1e090e47e5a8033df8592fea684ee5c8bacd8b262cfe3995037d->leave($__internal_13325953846e1e090e47e5a8033df8592fea684ee5c8bacd8b262cfe3995037d_prof);

    }

    public function getTemplateName()
    {
        return "::menus/left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  151 => 55,  146 => 53,  140 => 52,  133 => 50,  125 => 47,  116 => 41,  110 => 40,  105 => 38,  99 => 37,  92 => 35,  84 => 32,  75 => 26,  69 => 25,  64 => 23,  58 => 22,  51 => 20,  43 => 17,  36 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"collapsible side-nav fixed\" data-collapsible=\"accordion\" id=\"nav-mobile\">
    <li class=\"logo\">
        <a id=\"logo-container\" class=\"brand-logo text-center\"><i class=\"fa fa-edge fa-4x redme\"></i></a>
    </li>
    <li class=\"search\">
          <div class=\"search-wrapper card\">
            <input id=\"search\"><i class=\"material-icons\">search</i>
            <div class=\"search-results\"></div>
          </div>
     </li>
    <li>
        <div class=\"collapsible-header\">
            <a href=\"{{path('admin_default_index')}}\"><i class=\"material-icons\">home</i> Accueil</a>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal {% if app.request.get('_route') in ['page_new','page_list','page_edit','page_show'] %}active{% endif %}\">
            <i class=\"material-icons\">description</i> Pages
        </div>
        <div class=\"collapsible-body\" {% if app.request.get('_route') in ['page_new','page_list','page_edit'] %}style=\"display:block\"{% endif %}>
            <ul>
                <li class=\"{% if app.request.get('_route') == 'page_new' %}active{% endif%}\">
                <a href=\"{{path('page_new')}}\">Créer une page </a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'page_list' %}active{% endif%}\">
                    <a href=\"{{path('page_list')}}\">Gérer les pages</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal {% if app.request.get('_route') in ['admin_article_new','admin_article_index','admin_article_show','admin_article_edit'] %}active{% endif %}\">
            <i class=\"large material-icons\">art_track</i> Articles
        </div>
        <div {% if app.request.get('_route') in ['admin_article_new','admin_article_index','admin_article_edit','admin_article_show'] %}style='display:block'{% endif %} class=\"collapsible-body\">
            <ul>
                <li class=\"{% if app.request.get('_route') == 'admin_article_new' %}active{% endif%}\">
                    <a href=\"{{path('admin_article_new')}}\">Créer un article</a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'admin_article_index' %}active{% endif%}\">
                    <a href=\"{{path('admin_article_index')}}\">Gérer les articles</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class=\"collapsible-header collapsible waves-effect waves-teal {% if app.request.get('_route') in ['admin_category_new','admin_category_index','admin_category_show','admin_category_edit'] %}active{% endif %}\">
            <i class=\"material-icons\">folder</i> Catégories
        </div>
        <div {% if app.request.get('_route') in ['admin_category_new','admin_category_index','admin_category_show','admin_category_edit'] %}style='display:block'{% endif %} class=\"collapsible-body\">
            <ul>
                <li class=\"{% if app.request.get('_route') == 'admin_category_new' %}active{% endif%}\">
                    <a href=\"{{path('admin_category_new')}}\">Créer une catégorie</a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'admin_category_index' %}active{% endif%}\">
                    <a href=\"{{path('admin_category_index')}}\">Gérer les catégories</a>
                </li>
            </ul>
        </div>
    </li>
    
</ul>", "::menus/left.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/menus/left.html.twig");
    }
}
