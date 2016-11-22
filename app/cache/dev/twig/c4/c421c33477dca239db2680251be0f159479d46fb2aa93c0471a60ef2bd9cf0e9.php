<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_737bd79feb0349e957155ce4b163e5c5c47f2206914a361ff449a197491b6a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_48242cded7e6d65923b4c780bd4c797b4b1a80c2786cc0fee69260df0379af0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48242cded7e6d65923b4c780bd4c797b4b1a80c2786cc0fee69260df0379af0d->enter($__internal_48242cded7e6d65923b4c780bd4c797b4b1a80c2786cc0fee69260df0379af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48242cded7e6d65923b4c780bd4c797b4b1a80c2786cc0fee69260df0379af0d->leave($__internal_48242cded7e6d65923b4c780bd4c797b4b1a80c2786cc0fee69260df0379af0d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_154a3a623e933cc9d133f57d1f2ea08fb623e6929348a3a09f79f012440e2d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154a3a623e933cc9d133f57d1f2ea08fb623e6929348a3a09f79f012440e2d8e->enter($__internal_154a3a623e933cc9d133f57d1f2ea08fb623e6929348a3a09f79f012440e2d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blocks/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_154a3a623e933cc9d133f57d1f2ea08fb623e6929348a3a09f79f012440e2d8e->leave($__internal_154a3a623e933cc9d133f57d1f2ea08fb623e6929348a3a09f79f012440e2d8e_prof);

    }

    // line 7
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_5cc21d9113a3e4feab8afccf02c2ff99dea5619d2351387f3ffe7ad044663f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc21d9113a3e4feab8afccf02c2ff99dea5619d2351387f3ffe7ad044663f67->enter($__internal_5cc21d9113a3e4feab8afccf02c2ff99dea5619d2351387f3ffe7ad044663f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "hold-transition login-page";
        
        $__internal_5cc21d9113a3e4feab8afccf02c2ff99dea5619d2351387f3ffe7ad044663f67->leave($__internal_5cc21d9113a3e4feab8afccf02c2ff99dea5619d2351387f3ffe7ad044663f67_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf308c3e04a78dc10f93ba5172234dc14ddce14c19854154f985bba039bd0a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf308c3e04a78dc10f93ba5172234dc14ddce14c19854154f985bba039bd0a63->enter($__internal_bf308c3e04a78dc10f93ba5172234dc14ddce14c19854154f985bba039bd0a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
        <div class=\"col s8 m6 offset-s2 offset-m3 animated fadeIn logocontainer\">
            <div class=\"login-title col s12 m12 l12\">
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
                <div class=\"col s12 m12 l12 nopadding\">
                  <form action=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                        <div class=\"col s12 m12 l12 login-box-body\">
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
                        <div class=\"col s12 m12 l12\">        
                            ";
            // line 34
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 35
                echo "                                <div class=\"row animated rubberBand\">
                                    <div class=\"col s12 m12 l12\">
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
                            <div class=\"col s12 m12 l12\">
                                <div class=\"col sm4\">
                                    <button type=\"submit\" class=\"btn green waves-effect waves-light bloc-center\" id=\"_submit\" name=\"_submit\"/>";
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
        echo "    
    </div>
  
";
        
        $__internal_bf308c3e04a78dc10f93ba5172234dc14ddce14c19854154f985bba039bd0a63->leave($__internal_bf308c3e04a78dc10f93ba5172234dc14ddce14c19854154f985bba039bd0a63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    
        <div class=\"col s8 m6 offset-s2 offset-m3 animated fadeIn logocontainer\">
            <div class=\"login-title col s12 m12 l12\">
                Administration du site : {{siteName}}
            </div>
            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <center><strong>Vous êtes déja connecté</strong></center>
            {% else %}
                <span class=\"actionName reversed animated bounceInDown\">Connexion</span>
                <!-- /.login-logo -->
                <div class=\"col s12 m12 l12 nopadding\">
                  <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        <div class=\"col s12 m12 l12 login-box-body\">
                            <div class=\"form-group has-feedback\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control input-medium\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans }}\"/>
                                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            </div>
                            <div class=\"form-group has-feedback\">
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control input-medium\" placeholder=\"{{ 'security.login.password'|trans }}\">
                                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                            </div>
                        </div>
                        <div class=\"col s12 m12 l12\">        
                            {% if error %}
                                <div class=\"row animated rubberBand\">
                                    <div class=\"col s12 m12 l12\">
                                        <p class=\"alert-danger alert\">
                                            {{ error.messageKey|trans(error.messageData, 'security') }}
                                        </p>
                                    </div>
                                </div>    
                            {% endif %}
                        </div>
                        <div class=\"row\">
                            <div class=\"col s12 m12 l12\">
                                <div class=\"col sm4\">
                                    <button type=\"submit\" class=\"btn green waves-effect waves-light bloc-center\" id=\"_submit\" name=\"_submit\"/>{{ 'security.login.submit'|trans }}</button>
                                </div>
                            </div>
                        </div>
                  </form>
                </div>
            {% endif %}
    
    </div>
  
{% endblock body %}

", "FOSUserBundle:Security:login.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
