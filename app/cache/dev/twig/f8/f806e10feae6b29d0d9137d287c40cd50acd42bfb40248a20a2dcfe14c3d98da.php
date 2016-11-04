<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_77abd72561eae84baf3ae0dc888022cbe12240618840830f79d3aca7494597ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76be651f461daa93ac077ca1ca652d85b37e85010c889d21b1b8395d86e11128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76be651f461daa93ac077ca1ca652d85b37e85010c889d21b1b8395d86e11128->enter($__internal_76be651f461daa93ac077ca1ca652d85b37e85010c889d21b1b8395d86e11128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76be651f461daa93ac077ca1ca652d85b37e85010c889d21b1b8395d86e11128->leave($__internal_76be651f461daa93ac077ca1ca652d85b37e85010c889d21b1b8395d86e11128_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86a90e48946e2129b4f34c7243d10055a9fb5aba444025a2b716ba6fcafd3855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a90e48946e2129b4f34c7243d10055a9fb5aba444025a2b716ba6fcafd3855->enter($__internal_86a90e48946e2129b4f34c7243d10055a9fb5aba444025a2b716ba6fcafd3855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blocks/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_86a90e48946e2129b4f34c7243d10055a9fb5aba444025a2b716ba6fcafd3855->leave($__internal_86a90e48946e2129b4f34c7243d10055a9fb5aba444025a2b716ba6fcafd3855_prof);

    }

    // line 7
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_dbeb1202acce49be8bc50ec462a77fd53ff64a98cd05a91a3a2e4ec0f6d46f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbeb1202acce49be8bc50ec462a77fd53ff64a98cd05a91a3a2e4ec0f6d46f9d->enter($__internal_dbeb1202acce49be8bc50ec462a77fd53ff64a98cd05a91a3a2e4ec0f6d46f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        echo "hold-transition login-page";
        
        $__internal_dbeb1202acce49be8bc50ec462a77fd53ff64a98cd05a91a3a2e4ec0f6d46f9d->leave($__internal_dbeb1202acce49be8bc50ec462a77fd53ff64a98cd05a91a3a2e4ec0f6d46f9d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a49f2cdf91ee6591403df4a6d9511f14c0f5efbdc98887fd71d8b6a2f29d9e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f2cdf91ee6591403df4a6d9511f14c0f5efbdc98887fd71d8b6a2f29d9e3a->enter($__internal_a49f2cdf91ee6591403df4a6d9511f14c0f5efbdc98887fd71d8b6a2f29d9e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 animated fadeIn logocontainer\">
            <div class=\"login-title col-xs-12\">
                Administration du site : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "
            </div>
            
            ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                <center><strong>Vous êtes déja connecté</strong></center>
            ";
        } else {
            // line 18
            echo "                <span class=\"actionName reversed animated bounceInDown\">Connexion</span>
                <!-- /.login-logo -->
                <div class=\"col-xs-12 nopadding\">
                  <form action=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                        <div class=\"col-xs-12 login-box-body\">
                            <div class=\"form-group has-feedback\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" class=\"form-control input-medium\" required=\"required\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/>
                                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            </div>
                            <div class=\"form-group has-feedback\">
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control input-medium\" placeholder=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                            </div>
                        </div>
                        <div class=\"col-xs-12\">        
                            ";
            // line 34
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 35
                echo "                                <div class=\"row animated rubberBand\">
                                    <div class=\"col-xs-12\">
                                        <p class=\"alert-danger alert\">
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "
                                        </p>
                                    </div>
                                </div>    
                            ";
            }
            // line 43
            echo "                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"col-xs-4\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"_submit\" name=\"_submit\"/>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                        </div>
                  </form>
                </div>
            ";
        }
        // line 54
        echo "        </div>
    </div>
  
";
        
        $__internal_a49f2cdf91ee6591403df4a6d9511f14c0f5efbdc98887fd71d8b6a2f29d9e3a->leave($__internal_a49f2cdf91ee6591403df4a6d9511f14c0f5efbdc98887fd71d8b6a2f29d9e3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  144 => 47,  138 => 43,  130 => 38,  125 => 35,  123 => 34,  115 => 29,  106 => 25,  100 => 22,  96 => 21,  91 => 18,  87 => 16,  85 => 15,  79 => 12,  74 => 9,  68 => 8,  56 => 7,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/blocks/login.css') }}\">
{% endblock %}
{% block bodyclass %}hold-transition login-page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 animated fadeIn logocontainer\">
            <div class=\"login-title col-xs-12\">
                Administration du site : {{siteName}}
            </div>
            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <center><strong>Vous êtes déja connecté</strong></center>
            {% else %}
                <span class=\"actionName reversed animated bounceInDown\">Connexion</span>
                <!-- /.login-logo -->
                <div class=\"col-xs-12 nopadding\">
                  <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        <div class=\"col-xs-12 login-box-body\">
                            <div class=\"form-group has-feedback\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control input-medium\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans }}\"/>
                                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            </div>
                            <div class=\"form-group has-feedback\">
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control input-medium\" placeholder=\"{{ 'security.login.password'|trans }}\">
                                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                            </div>
                        </div>
                        <div class=\"col-xs-12\">        
                            {% if error %}
                                <div class=\"row animated rubberBand\">
                                    <div class=\"col-xs-12\">
                                        <p class=\"alert-danger alert\">
                                            {{ error.messageKey|trans(error.messageData, 'security') }}
                                        </p>
                                    </div>
                                </div>    
                            {% endif %}
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"col-xs-4\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"_submit\" name=\"_submit\"/>{{ 'security.login.submit'|trans }}</button>
                                </div>
                            </div>
                        </div>
                  </form>
                </div>
            {% endif %}
        </div>
    </div>
  
{% endblock body %}

", "@FOSUser/Security/login.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
