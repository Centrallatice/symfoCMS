<?php

/* :menus:admin.html.twig */
class __TwigTemplate_83380dd8be98c6a061ed8506a881fd24a97dade05f746b051c441924031b371b extends Twig_Template
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
        $__internal_cad1ecb8028f91d14dd7c05db2bc1b245b53e8a887d03a283de968ac48705201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad1ecb8028f91d14dd7c05db2bc1b245b53e8a887d03a283de968ac48705201->enter($__internal_cad1ecb8028f91d14dd7c05db2bc1b245b53e8a887d03a283de968ac48705201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menus:admin.html.twig"));

        // line 1
        echo " <nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button class=\"navbar-toggler hidden-sm-up pull-sm-right\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                &#9776;
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
        echo "\"><small>Administration du site </small>";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</a>
        </div>
        <!-- Top Menu Items -->
        ";
        // line 114
        echo "        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class=\"collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav list-group\">
                <li class=\"list-group-item bordered-bottom ";
        // line 117
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_default_index")) {
            echo "active";
        }
        echo "\" >
                    <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> Accueil</a>
                </li>
                <li class=\"list-group-item ";
        // line 120
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "page_new", 1 => "page_list", 2 => "page_edit"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pages\"><i class=\"fa fa-fw fa-files-o\"></i> Pages <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"pages\" class=\"list-group collapse ";
        // line 122
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "page_new", 1 => "page_list", 2 => "page_edit"))) {
            echo "in";
        }
        echo "\">
                        <li class=\"list-group-item ";
        // line 123
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_new")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_new");
        echo "\">Créer une page </a>
                        </li>
                        <li class=\"list-group-item ";
        // line 126
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "page_list")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
        echo "\">Gérer les pages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item ";
        // line 131
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_article_new", 1 => "admin_article_index"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#articles\"><i class=\"fa fa-fw fa-file-o\"></i> Article <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"articles\" class=\"list-group collapse ";
        // line 133
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_article_new", 1 => "admin_article_index"))) {
            echo "in";
        }
        echo "\">
                        <li class=\"list-group-item ";
        // line 134
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_article_new")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_new");
        echo "\">Créer un article</a>
                        </li>
                        <li class=\"list-group-item ";
        // line 137
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_article_index")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_index");
        echo "\">Gérer les articles</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item ";
        // line 142
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_category_new", 1 => "admin_category_index"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#categories\"><i class=\"fa fa-fw fa-folder-open-o\"></i> Catégories <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"categories\" class=\"list-group collapse ";
        // line 144
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_category_new", 1 => "admin_category_index"))) {
            echo "in";
        }
        echo "\">
                        <li class=\"list-group-item ";
        // line 145
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_category_new")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_new");
        echo "\">Créer une catégorie</a>
                        </li>
                        <li class=\"list-group-item ";
        // line 148
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_category_index")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_index");
        echo "\">Gérer les catégories</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item ";
        // line 153
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_module_new", 1 => "admin_module_index"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#modules\"><i class=\"fa fa-fw fa-cogs\"></i> Modules <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"modules\" class=\"list-group collapse ";
        // line 155
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "admin_module_new", 1 => "admin_module_index"))) {
            echo "in";
        }
        echo "\">
                        <li class=\"list-group-item ";
        // line 156
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_module_new")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_new");
        echo "\">Créer un module</a>
                        </li>
                        <li class=\"list-group-item ";
        // line 159
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "admin_module_index")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_index");
        echo "\">Gérer les modules</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>";
        
        $__internal_cad1ecb8028f91d14dd7c05db2bc1b245b53e8a887d03a283de968ac48705201->leave($__internal_cad1ecb8028f91d14dd7c05db2bc1b245b53e8a887d03a283de968ac48705201_prof);

    }

    public function getTemplateName()
    {
        return ":menus:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 160,  189 => 159,  184 => 157,  178 => 156,  172 => 155,  165 => 153,  158 => 149,  152 => 148,  147 => 146,  141 => 145,  135 => 144,  128 => 142,  121 => 138,  115 => 137,  110 => 135,  104 => 134,  98 => 133,  91 => 131,  84 => 127,  78 => 126,  73 => 124,  67 => 123,  61 => 122,  54 => 120,  49 => 118,  43 => 117,  38 => 114,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button class=\"navbar-toggler hidden-sm-up pull-sm-right\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                &#9776;
            </button>
            <a class=\"navbar-brand\" href=\"{{path('admin_default_index')}}\"><small>Administration du site </small>{{siteName}}</a>
        </div>
        <!-- Top Menu Items -->
        {#<ul class=\"nav navbar-nav top-nav navbar-right pull-xs-right\">
            <li class=\"dropdown nav-item active\">
                <!-- <div class=\"dropdown\"> -->
                    <a class=\"nav-link dropdown-toggle\" href=\"javascript:;\" id=\"dropdownMenu4\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b><span class=\"sr-only\">(current)</span></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"dropdown-item message-preview\">
                            <a href=\"javascript:;\">
                                <div class=\"media\">
                                    <span class=\"media-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"dropdown-item message-preview\">
                            <a href=\"javascript:;\">
                                <div class=\"media\">
                                    <span class=\"media-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"dropdown-item message-preview\">
                            <a href=\"javascript:;\">
                                <div class=\"media\">
                                    <span class=\"media-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"dropdown-item message-footer\">
                            <a href=\"javascript:;\">Read All New Messages</a>
                        </li>
                    </ul>
                <!-- </div> -->
            </li>
            <li class=\"dropdown nav-item\">
                <!-- <div class=\"dropdown\"> -->
                    <a href=\"javascript:;\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"  aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b><span class=\"sr-only\">(current)</span></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-default\"> Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-primary\"> Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-info\"> Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-warning\"> Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">Alert Name <span class=\"label label-danger\"> Alert Badge</span></a>
                        </li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\">
                            <a href=\"javascript:;\">View All</a>
                        </li>
                    </ul>
                <!-- </div> -->
            </li>
            <li class=\"dropdown nav-item\">
                <a href=\"javascript:;\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-item\">
                        <a href=\"javascript:;\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                    </li>
                    <li class=\"dropdown-item\">
                        <a href=\"javascript:;\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li class=\"dropdown-item\">
                        <a href=\"javascript:;\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li class=\"dropdown-item\">
                        <a href=\"javascript:;\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>#}
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class=\"collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav list-group\">
                <li class=\"list-group-item bordered-bottom {% if app.request.get('_route') == 'admin_default_index' %}active{% endif%}\" >
                    <a href=\"{{path('admin_default_index')}}\"><i class=\"fa fa-fw fa-home\"></i> Accueil</a>
                </li>
                <li class=\"list-group-item {% if app.request.get('_route') in ['page_new','page_list','page_edit'] %}active{% endif%}\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pages\"><i class=\"fa fa-fw fa-files-o\"></i> Pages <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"pages\" class=\"list-group collapse {% if app.request.get('_route') in ['page_new','page_list','page_edit'] %}in{% endif %}\">
                        <li class=\"list-group-item {% if app.request.get('_route') == 'page_new' %}active{% endif%}\">
                            <a href=\"{{path('page_new')}}\">Créer une page </a>
                        </li>
                        <li class=\"list-group-item {% if app.request.get('_route') == 'page_list' %}active{% endif%}\">
                            <a href=\"{{path('page_list')}}\">Gérer les pages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item {% if app.request.get('_route') in ['admin_article_new','admin_article_index'] %}active{% endif%}\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#articles\"><i class=\"fa fa-fw fa-file-o\"></i> Article <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"articles\" class=\"list-group collapse {% if app.request.get('_route') in ['admin_article_new','admin_article_index'] %}in{% endif %}\">
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_article_new' %}active{% endif%}\">
                            <a href=\"{{path('admin_article_new')}}\">Créer un article</a>
                        </li>
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_article_index' %}active{% endif%}\">
                            <a href=\"{{path('admin_article_index')}}\">Gérer les articles</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item {% if app.request.get('_route') in ['admin_category_new','admin_category_index'] %}active{% endif%}\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#categories\"><i class=\"fa fa-fw fa-folder-open-o\"></i> Catégories <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"categories\" class=\"list-group collapse {% if app.request.get('_route') in ['admin_category_new','admin_category_index'] %}in{% endif %}\">
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_category_new' %}active{% endif%}\">
                            <a href=\"{{path('admin_category_new')}}\">Créer une catégorie</a>
                        </li>
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_category_index' %}active{% endif%}\">
                            <a href=\"{{path('admin_category_index')}}\">Gérer les catégories</a>
                        </li>
                    </ul>
                </li>
                <li class=\"list-group-item {% if app.request.get('_route') in ['admin_module_new','admin_module_index'] %}active{% endif%}\">
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#modules\"><i class=\"fa fa-fw fa-cogs\"></i> Modules <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"modules\" class=\"list-group collapse {% if app.request.get('_route') in ['admin_module_new','admin_module_index'] %}in{% endif %}\">
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_module_new' %}active{% endif%}\">
                            <a href=\"{{path('admin_module_new')}}\">Créer un module</a>
                        </li>
                        <li class=\"list-group-item {% if app.request.get('_route') == 'admin_module_index' %}active{% endif%}\">
                            <a href=\"{{path('admin_module_index')}}\">Gérer les modules</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>", ":menus:admin.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/menus/admin.html.twig");
    }
}
