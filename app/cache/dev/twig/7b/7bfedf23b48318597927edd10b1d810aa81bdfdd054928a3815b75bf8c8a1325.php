<?php

/* ::admin.html.twig */
class __TwigTemplate_02c16cb860ee1f4493d978f13db4ae3319e81c45d6cbc7a14de0744545f18410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bb14a178a9614e0451e035837818c25b5f22511410ce50515f65749488ceac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb14a178a9614e0451e035837818c25b5f22511410ce50515f65749488ceac2->enter($__internal_2bb14a178a9614e0451e035837818c25b5f22511410ce50515f65749488ceac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "            <header>
                ";
            // line 25
            $this->loadTemplate("::menus/navbar.html.twig", "::admin.html.twig", 25)->display($context);
            // line 26
            echo "                ";
            $this->loadTemplate("::menus/left.html.twig", "::admin.html.twig", 26)->display($context);
            // line 27
            echo "            </header>
        ";
        }
        // line 29
        echo "        <div class=\"main";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            echo " nopadding";
        }
        echo "\">
            ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                <nav class=\"breadcrumb\">
                    <div class=\"nav-wrapper\">
                        <div class=\"col s11 offset-s1\">
                            ";
            // line 34
            $context["breadcrumb"] =             $this->renderBlock("breadcrumb", $context, $blocks);
            // line 35
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_default_index");
            echo "\" class=\"breadcrumb\"><i class=\"material-icons\">home</i></a>
                            
                            ";
            // line 37
            echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"));
            echo " 
                        </div>
                    </div>
                </nav>
            ";
        }
        // line 42
        echo "            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"section\">
                        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_2bb14a178a9614e0451e035837818c25b5f22511410ce50515f65749488ceac2->leave($__internal_2bb14a178a9614e0451e035837818c25b5f22511410ce50515f65749488ceac2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab26fa33217d897a55be4c2a29be34638775fc6767b8f879b20a1b21c805b789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab26fa33217d897a55be4c2a29be34638775fc6767b8f879b20a1b21c805b789->enter($__internal_ab26fa33217d897a55be4c2a29be34638775fc6767b8f879b20a1b21c805b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ab26fa33217d897a55be4c2a29be34638775fc6767b8f879b20a1b21c805b789->leave($__internal_ab26fa33217d897a55be4c2a29be34638775fc6767b8f879b20a1b21c805b789_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_573bb303a2b3ba0540937bd05efe50c3fb4eda25d175d0cbf30480291a89b2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573bb303a2b3ba0540937bd05efe50c3fb4eda25d175d0cbf30480291a89b2ec->enter($__internal_573bb303a2b3ba0540937bd05efe50c3fb4eda25d175d0cbf30480291a89b2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700italic,700,400italic,300italic' rel='stylesheet' type='text/css'>
            <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/materialize.min.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/ghpages-materialize.min.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/base.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/sb-admin.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/plugins/morris.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themes/admin/materialize-hack.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_573bb303a2b3ba0540937bd05efe50c3fb4eda25d175d0cbf30480291a89b2ec->leave($__internal_573bb303a2b3ba0540937bd05efe50c3fb4eda25d175d0cbf30480291a89b2ec_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_053ef65749c773bf91933e2f086d9baa3204fd4bc79701b67a12410171073f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053ef65749c773bf91933e2f086d9baa3204fd4bc79701b67a12410171073f2e->enter($__internal_053ef65749c773bf91933e2f086d9baa3204fd4bc79701b67a12410171073f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_053ef65749c773bf91933e2f086d9baa3204fd4bc79701b67a12410171073f2e->leave($__internal_053ef65749c773bf91933e2f086d9baa3204fd4bc79701b67a12410171073f2e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6112c427f1dacdf5bd350380515f659f359bbd3cdd3d165efd25476df03bd37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6112c427f1dacdf5bd350380515f659f359bbd3cdd3d165efd25476df03bd37a->enter($__internal_6112c427f1dacdf5bd350380515f659f359bbd3cdd3d165efd25476df03bd37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "            
            <script type=\"text/javascript\">
                var basePageAdmin = '";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_default_index");
        echo "';
            </script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/actions.js"), "html", null, true);
        echo "\"></script>
";
        // line 60
        echo "            <!-- Morris Charts JavaScript -->
";
        // line 63
        echo "        ";
        
        $__internal_6112c427f1dacdf5bd350380515f659f359bbd3cdd3d165efd25476df03bd37a->leave($__internal_6112c427f1dacdf5bd350380515f659f359bbd3cdd3d165efd25476df03bd37a_prof);

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
        return array (  217 => 63,  214 => 60,  210 => 58,  206 => 57,  202 => 56,  196 => 53,  187 => 51,  176 => 45,  167 => 18,  163 => 17,  159 => 16,  155 => 15,  151 => 14,  147 => 13,  143 => 12,  139 => 11,  134 => 8,  128 => 7,  117 => 6,  108 => 64,  106 => 51,  99 => 46,  97 => 45,  92 => 42,  84 => 37,  78 => 35,  76 => 34,  71 => 31,  69 => 30,  62 => 29,  58 => 27,  55 => 26,  53 => 25,  50 => 24,  48 => 23,  41 => 20,  39 => 7,  33 => 6,  26 => 1,);
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
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/vendor/materialize.min.css') }}\"  media=\"screen,projection\"/>
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/vendor/ghpages-materialize.min.css') }}\"  media=\"screen,projection\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/base.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/animate.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/sb-admin.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/plugins/morris.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/themes/admin/materialize-hack.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% if is_granted(\"ROLE_ADMIN\") %}
            <header>
                {% include \"::menus/navbar.html.twig\" %}
                {% include \"::menus/left.html.twig\" %}
            </header>
        {% endif %}
        <div class=\"main{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\")==false %} nopadding{% endif %}\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <nav class=\"breadcrumb\">
                    <div class=\"nav-wrapper\">
                        <div class=\"col s11 offset-s1\">
                            {% set breadcrumb = block('breadcrumb') %}
                            <a href=\"{{ path('admin_default_index') }}\" class=\"breadcrumb\"><i class=\"material-icons\">home</i></a>
                            
                            {{breadcrumb|raw}} 
                        </div>
                    </div>
                </nav>
            {% endif %}
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"section\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
        
        {% block javascripts %}            
            <script type=\"text/javascript\">
                var basePageAdmin = '{{path('page_default_index')}}';
            </script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"></script>
            <script src=\"{{ asset('js/vendor/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/vendor/materialize.min.js') }}\"></script>
            <script src=\"{{ asset('js/admin/actions.js') }}\"></script>
{#            <script src=\"{{ asset('js/vendor/bootstrap/bootstrap.js') }}\"></script>#}
            <!-- Morris Charts JavaScript -->
{#            <script src=\"{{ asset('js/themes/admin/morris/raphael.min.js') }}\"></script>#}
{#            <script src=\"{{ asset('js/themes/admin/morris/morris.min.js') }}\"></script>#}
        {% endblock %}
    </body>
</html>
", "::admin.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources\\views/admin.html.twig");
    }
}
