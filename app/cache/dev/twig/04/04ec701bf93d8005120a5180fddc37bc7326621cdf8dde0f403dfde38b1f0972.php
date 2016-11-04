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
        $__internal_0ba4069b68ddd5c437d164439859787c54080d932bd46b88efe8d1a7bc2d8014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba4069b68ddd5c437d164439859787c54080d932bd46b88efe8d1a7bc2d8014->enter($__internal_0ba4069b68ddd5c437d164439859787c54080d932bd46b88efe8d1a7bc2d8014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "logged";
        } else {
            echo "notlogged";
        }
        echo " ";
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        <div ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "id=\"wrapper\"";
        }
        echo ">
            ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                ";
            $this->loadTemplate("::menus/admin.html.twig", "admin.html.twig", 23)->display($context);
            // line 24
            echo "            ";
        }
        // line 25
        echo "            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <h1 class=\"page-header\">
                                    ";
            // line 31
            $context["titrepage"] = $this->renderBlock("title", $context, $blocks);
            // line 32
            echo "                                    ";
            echo (isset($context["titrepage"]) ? $context["titrepage"] : $this->getContext($context, "titrepage"));
            echo "
                                </h1>
                                <ol class=\"breadcrumb\">
                                    <li class=\"active\">
                                        ";
            // line 36
            $context["breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
            // line 37
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
        // line 43
        echo "                
                    ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "                </div>
            </div>
        </div>
            
       
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_0ba4069b68ddd5c437d164439859787c54080d932bd46b88efe8d1a7bc2d8014->leave($__internal_0ba4069b68ddd5c437d164439859787c54080d932bd46b88efe8d1a7bc2d8014_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_238bc079632adf570662920c6570524c005b59d713d9485dc3d5cb99fbaaa2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238bc079632adf570662920c6570524c005b59d713d9485dc3d5cb99fbaaa2b2->enter($__internal_238bc079632adf570662920c6570524c005b59d713d9485dc3d5cb99fbaaa2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_238bc079632adf570662920c6570524c005b59d713d9485dc3d5cb99fbaaa2b2->leave($__internal_238bc079632adf570662920c6570524c005b59d713d9485dc3d5cb99fbaaa2b2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48819d15a2180ad8a8f1edc5940499850a2bf285d2d89d575dcfa38775fb948e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48819d15a2180ad8a8f1edc5940499850a2bf285d2d89d575dcfa38775fb948e->enter($__internal_48819d15a2180ad8a8f1edc5940499850a2bf285d2d89d575dcfa38775fb948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

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
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/bootstrhack.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_48819d15a2180ad8a8f1edc5940499850a2bf285d2d89d575dcfa38775fb948e->leave($__internal_48819d15a2180ad8a8f1edc5940499850a2bf285d2d89d575dcfa38775fb948e_prof);

    }

    // line 20
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_b0798607f6358d8ef1810df1674724f26926b35642012196ea2d194b9257fcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0798607f6358d8ef1810df1674724f26926b35642012196ea2d194b9257fcd3->enter($__internal_b0798607f6358d8ef1810df1674724f26926b35642012196ea2d194b9257fcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_b0798607f6358d8ef1810df1674724f26926b35642012196ea2d194b9257fcd3->leave($__internal_b0798607f6358d8ef1810df1674724f26926b35642012196ea2d194b9257fcd3_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f5b4772129f7ced3c7bccf24858ba4fcad0e065bedfcb3d72f3ff83972c331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f5b4772129f7ced3c7bccf24858ba4fcad0e065bedfcb3d72f3ff83972c331->enter($__internal_b1f5b4772129f7ced3c7bccf24858ba4fcad0e065bedfcb3d72f3ff83972c331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        
        $__internal_b1f5b4772129f7ced3c7bccf24858ba4fcad0e065bedfcb3d72f3ff83972c331->leave($__internal_b1f5b4772129f7ced3c7bccf24858ba4fcad0e065bedfcb3d72f3ff83972c331_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7eaded30aeab9cd46429e0dc63148f5551a2322728a8754fbf1480d66a78de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eaded30aeab9cd46429e0dc63148f5551a2322728a8754fbf1480d66a78de8->enter($__internal_e7eaded30aeab9cd46429e0dc63148f5551a2322728a8754fbf1480d66a78de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin.html.twig"));

        echo "            
            <script type=\"text/javascript\">
                var basePageAdmin = '";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_default_index");
        echo "';
            </script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <!-- Morris Charts JavaScript -->
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/themes/admin/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e7eaded30aeab9cd46429e0dc63148f5551a2322728a8754fbf1480d66a78de8->leave($__internal_e7eaded30aeab9cd46429e0dc63148f5551a2322728a8754fbf1480d66a78de8_prof);

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
        return array (  234 => 59,  230 => 58,  225 => 56,  221 => 55,  215 => 52,  206 => 50,  195 => 44,  184 => 20,  175 => 16,  171 => 15,  167 => 14,  163 => 13,  159 => 12,  155 => 11,  151 => 10,  147 => 8,  141 => 7,  130 => 6,  121 => 61,  119 => 50,  112 => 45,  110 => 44,  107 => 43,  95 => 37,  93 => 36,  85 => 32,  83 => 31,  76 => 27,  72 => 25,  69 => 24,  66 => 23,  64 => 22,  58 => 21,  48 => 20,  42 => 18,  40 => 7,  34 => 6,  27 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/bootstrhack.css') }}\">
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
