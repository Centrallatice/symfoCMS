<?php

/* admin.html.twig */
class __TwigTemplate_1f100f9729b3bfff9fb055fde6d5a98b371c4db6e23c8ab28de5849d847be24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93d1e8afcf0c9b12318111efdfd298c8e4c9802f064d5731c97e8dbb19dcedfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d1e8afcf0c9b12318111efdfd298c8e4c9802f064d5731c97e8dbb19dcedfa->enter($__internal_93d1e8afcf0c9b12318111efdfd298c8e4c9802f064d5731c97e8dbb19dcedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Administration du site ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo " - ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "logged";
        } else {
            echo "notlogged";
        }
        echo " ";
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        <div ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "id=\"wrapper\"";
        }
        echo ">
            ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                ";
            $this->loadTemplate("::menus/admin.html.twig", "admin.html.twig", 22)->display($context);
            // line 23
            echo "            ";
        }
        // line 24
        echo "            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <h1 class=\"page-header\">
                                    ";
            // line 30
            $context["titrepage"] = $this->renderBlock("title", $context, $blocks);
            // line 31
            echo "                                    ";
            echo (isset($context["titrepage"]) ? $context["titrepage"] : $this->getContext($context, "titrepage"));
            echo "
                                </h1>
                                <ol class=\"breadcrumb\">
                                    <li class=\"active\">
                                        ";
            // line 35
            $context["breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
            // line 36
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
            echo "\"><i class=\"fa fa-home\"></i></a> / ";
            echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"));
            echo " 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    ";
        }
        // line 42
        echo "                
                    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "                </div>
            </div>
        </div>
            
       
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_93d1e8afcf0c9b12318111efdfd298c8e4c9802f064d5731c97e8dbb19dcedfa->leave($__internal_93d1e8afcf0c9b12318111efdfd298c8e4c9802f064d5731c97e8dbb19dcedfa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cc72cf5cf87d63ee5977c4d48845070568758fd89c0db0f66315ae6c44a3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cc72cf5cf87d63ee5977c4d48845070568758fd89c0db0f66315ae6c44a3ce->enter($__internal_41cc72cf5cf87d63ee5977c4d48845070568758fd89c0db0f66315ae6c44a3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_41cc72cf5cf87d63ee5977c4d48845070568758fd89c0db0f66315ae6c44a3ce->leave($__internal_41cc72cf5cf87d63ee5977c4d48845070568758fd89c0db0f66315ae6c44a3ce_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e15f1ecb538fd55580123228cba8b5da0b07d8fc76619328a88bafdea9c77dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15f1ecb538fd55580123228cba8b5da0b07d8fc76619328a88bafdea9c77dcf->enter($__internal_e15f1ecb538fd55580123228cba8b5da0b07d8fc76619328a88bafdea9c77dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        // line 8
        echo "            <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700italic,700,400italic,300italic' rel='stylesheet' type='text/css'>
            <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/base.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/sb-admin.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/plugins/morris.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_e15f1ecb538fd55580123228cba8b5da0b07d8fc76619328a88bafdea9c77dcf->leave($__internal_e15f1ecb538fd55580123228cba8b5da0b07d8fc76619328a88bafdea9c77dcf_prof);

    }

    // line 19
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_942b2b7bf714bd5dd35ab8bda233b4cc0217168bf58a1586683efc77be69ed78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942b2b7bf714bd5dd35ab8bda233b4cc0217168bf58a1586683efc77be69ed78->enter($__internal_942b2b7bf714bd5dd35ab8bda233b4cc0217168bf58a1586683efc77be69ed78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_942b2b7bf714bd5dd35ab8bda233b4cc0217168bf58a1586683efc77be69ed78->leave($__internal_942b2b7bf714bd5dd35ab8bda233b4cc0217168bf58a1586683efc77be69ed78_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c3455ad77ff10eae11ed2b14cebda6f3a648ec7fb58d1b94072a1b8852bf030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3455ad77ff10eae11ed2b14cebda6f3a648ec7fb58d1b94072a1b8852bf030->enter($__internal_7c3455ad77ff10eae11ed2b14cebda6f3a648ec7fb58d1b94072a1b8852bf030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_7c3455ad77ff10eae11ed2b14cebda6f3a648ec7fb58d1b94072a1b8852bf030->leave($__internal_7c3455ad77ff10eae11ed2b14cebda6f3a648ec7fb58d1b94072a1b8852bf030_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83738b48841f460720b4e0ec2f0a17567e3ac7315a86a459da71a93ac53737da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83738b48841f460720b4e0ec2f0a17567e3ac7315a86a459da71a93ac53737da->enter($__internal_83738b48841f460720b4e0ec2f0a17567e3ac7315a86a459da71a93ac53737da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        echo "            
            <script type=\"text/javascript\">
                var basePageAdmin = '";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_default_index");
        echo "';
            </script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <!-- Morris Charts JavaScript -->
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_83738b48841f460720b4e0ec2f0a17567e3ac7315a86a459da71a93ac53737da->leave($__internal_83738b48841f460720b4e0ec2f0a17567e3ac7315a86a459da71a93ac53737da_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 58,  226 => 57,  221 => 55,  217 => 54,  211 => 51,  202 => 49,  191 => 43,  180 => 19,  171 => 15,  167 => 14,  163 => 13,  159 => 12,  155 => 11,  151 => 10,  147 => 8,  141 => 7,  130 => 6,  121 => 60,  119 => 49,  112 => 44,  110 => 43,  107 => 42,  95 => 36,  93 => 35,  85 => 31,  83 => 30,  76 => 26,  72 => 24,  69 => 23,  66 => 22,  64 => 21,  58 => 20,  48 => 19,  42 => 17,  40 => 7,  34 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Administration du site {{siteName}} - {% block title %}{% endblock %}</title>
        {% block stylesheets %}
            <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700italic,700,400italic,300italic' rel='stylesheet' type='text/css'>
            <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/bootstrap/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/base.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/animate.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/sb-admin.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/plugins/morris.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"{% if is_granted(\"ROLE_ADMIN\") %}logged{% else %}notlogged{% endif %} {% block bodyclass %}{% endblock %}\">
        <div {% if is_granted(\"ROLE_ADMIN\") %}id=\"wrapper\"{% endif %}>
            {% if is_granted(\"ROLE_ADMIN\") %}
                {% include \"::menus/admin.html.twig\" %}
            {% endif %}
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %} 
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <h1 class=\"page-header\">
                                    {% set titrepage = block('title') %}
                                    {{titrepage|raw}}
                                </h1>
                                <ol class=\"breadcrumb\">
                                    <li class=\"active\">
                                        {% set breadcrumb = block('breadcrumb') %}
                                        <a href=\"{{ path('admin_default_index') }}\"><i class=\"fa fa-home\"></i></a> / {{breadcrumb|raw}} 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    {% endif %}
                
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
            
       
        {% block javascripts %}            
            <script type=\"text/javascript\">
                var basePageAdmin = '{{path('page_default_index')}}';
            </script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"></script>
            <script src=\"{{ asset('js/vendor/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/vendor/bootstrap/bootstrap.js') }}\"></script>
            <!-- Morris Charts JavaScript -->
            <script src=\"{{ asset('js/themes/admin/morris/raphael.min.js') }}\"></script>
            <script src=\"{{ asset('js/themes/admin/morris/morris.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "admin.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\views\\admin.html.twig");
    }
}
