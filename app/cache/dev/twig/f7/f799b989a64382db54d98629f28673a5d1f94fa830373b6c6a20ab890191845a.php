<?php

/* ::admin.html.twig */
class __TwigTemplate_8a9e031b98dea2a297aeeb1ab81cfea970126f3cf274ff12628567d2e38b8f4e extends Twig_Template
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
        $__internal_c7f34af9a0ee8c19be8304a09f12f4eb713adc3e19e1948328403f2b6a107f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f34af9a0ee8c19be8304a09f12f4eb713adc3e19e1948328403f2b6a107f85->enter($__internal_c7f34af9a0ee8c19be8304a09f12f4eb713adc3e19e1948328403f2b6a107f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
            $this->loadTemplate("::menus/admin.html.twig", "::admin.html.twig", 22)->display($context);
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
        
        $__internal_c7f34af9a0ee8c19be8304a09f12f4eb713adc3e19e1948328403f2b6a107f85->leave($__internal_c7f34af9a0ee8c19be8304a09f12f4eb713adc3e19e1948328403f2b6a107f85_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad1c04c0d9a644b3e488fee004f4de0d0e747b3bab411bb9b06a40b7bb5425a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad1c04c0d9a644b3e488fee004f4de0d0e747b3bab411bb9b06a40b7bb5425a->enter($__internal_9ad1c04c0d9a644b3e488fee004f4de0d0e747b3bab411bb9b06a40b7bb5425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::admin.html.twig"));

        
        $__internal_9ad1c04c0d9a644b3e488fee004f4de0d0e747b3bab411bb9b06a40b7bb5425a->leave($__internal_9ad1c04c0d9a644b3e488fee004f4de0d0e747b3bab411bb9b06a40b7bb5425a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd2bab34e759e69178d2ea7a847e3b4e5f45b55348fe10fd7118d8a7407e6d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2bab34e759e69178d2ea7a847e3b4e5f45b55348fe10fd7118d8a7407e6d62->enter($__internal_cd2bab34e759e69178d2ea7a847e3b4e5f45b55348fe10fd7118d8a7407e6d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::admin.html.twig"));

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
        
        $__internal_cd2bab34e759e69178d2ea7a847e3b4e5f45b55348fe10fd7118d8a7407e6d62->leave($__internal_cd2bab34e759e69178d2ea7a847e3b4e5f45b55348fe10fd7118d8a7407e6d62_prof);

    }

    // line 19
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_8996282e842d68e817cff1b62124254a5efcc5dc79ebe19cd383c29c1a1d9b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8996282e842d68e817cff1b62124254a5efcc5dc79ebe19cd383c29c1a1d9b84->enter($__internal_8996282e842d68e817cff1b62124254a5efcc5dc79ebe19cd383c29c1a1d9b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::admin.html.twig"));

        
        $__internal_8996282e842d68e817cff1b62124254a5efcc5dc79ebe19cd383c29c1a1d9b84->leave($__internal_8996282e842d68e817cff1b62124254a5efcc5dc79ebe19cd383c29c1a1d9b84_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_272d389bf9404721a6996cca2abc18af47a24dd76534e51542afba9b30bead7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272d389bf9404721a6996cca2abc18af47a24dd76534e51542afba9b30bead7c->enter($__internal_272d389bf9404721a6996cca2abc18af47a24dd76534e51542afba9b30bead7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::admin.html.twig"));

        
        $__internal_272d389bf9404721a6996cca2abc18af47a24dd76534e51542afba9b30bead7c->leave($__internal_272d389bf9404721a6996cca2abc18af47a24dd76534e51542afba9b30bead7c_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e2bde47803ba24b180db5a192feeb9febd7e6d0791198fd71bf3a81cdb1662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2bde47803ba24b180db5a192feeb9febd7e6d0791198fd71bf3a81cdb1662a->enter($__internal_1e2bde47803ba24b180db5a192feeb9febd7e6d0791198fd71bf3a81cdb1662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::admin.html.twig"));

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
        
        $__internal_1e2bde47803ba24b180db5a192feeb9febd7e6d0791198fd71bf3a81cdb1662a->leave($__internal_1e2bde47803ba24b180db5a192feeb9febd7e6d0791198fd71bf3a81cdb1662a_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
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
", "::admin.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/admin.html.twig");
    }
}
