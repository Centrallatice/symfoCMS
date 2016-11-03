<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a44603bc7839024083512cb83b5e5071bd87d7526d5b17beaeade735a35e7648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'bodyclass' => array($this, 'block_bodyclass'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18d3f4e442b1fd16626e73fe08a512c906ed447b4291df8a19f0f4965a6c8296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d3f4e442b1fd16626e73fe08a512c906ed447b4291df8a19f0f4965a6c8296->enter($__internal_18d3f4e442b1fd16626e73fe08a512c906ed447b4291df8a19f0f4965a6c8296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d3f4e442b1fd16626e73fe08a512c906ed447b4291df8a19f0f4965a6c8296->leave($__internal_18d3f4e442b1fd16626e73fe08a512c906ed447b4291df8a19f0f4965a6c8296_prof);

    }

    // line 3
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_553245bca9d1267de618931bfafc29368dbb307561dd69e8c0f2ebe6a09d6bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553245bca9d1267de618931bfafc29368dbb307561dd69e8c0f2ebe6a09d6bc8->enter($__internal_553245bca9d1267de618931bfafc29368dbb307561dd69e8c0f2ebe6a09d6bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        echo "hold-transition";
        
        $__internal_553245bca9d1267de618931bfafc29368dbb307561dd69e8c0f2ebe6a09d6bc8->leave($__internal_553245bca9d1267de618931bfafc29368dbb307561dd69e8c0f2ebe6a09d6bc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87dff3afff600df139d1716a5cc431805772780978a1d2f903df0b56a72c6269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dff3afff600df139d1716a5cc431805772780978a1d2f903df0b56a72c6269->enter($__internal_87dff3afff600df139d1716a5cc431805772780978a1d2f903df0b56a72c6269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        echo "Ajout d'un nouvel utilisateur";
        
        $__internal_87dff3afff600df139d1716a5cc431805772780978a1d2f903df0b56a72c6269->leave($__internal_87dff3afff600df139d1716a5cc431805772780978a1d2f903df0b56a72c6269_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9432db561eefece836490588724ec963add2dbd47ebc0457792930b8ace80ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9432db561eefece836490588724ec963add2dbd47ebc0457792930b8ace80ac->enter($__internal_f9432db561eefece836490588724ec963add2dbd47ebc0457792930b8ace80ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 7
        echo "    <div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <a role=\"button\" class=\"btn btn-danger pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListesUtilisateurs");
        echo "\"><i class=\"fa fa-arrow-circle-left\"></i> Annuler</a>
            </div>
            <div class=\"box-body\">
                ";
        // line 14
        if ((array_key_exists("success", $context) && ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == false))) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">
                        Des erreurs sont survenues : 
                        <ul>
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
            foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
                // line 19
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["err"], "message", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        </ul>
                    </div>
                ";
        }
        // line 24
        echo "                
                ";
        // line 25
        if (( !array_key_exists("success", $context) || ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == false))) {
            // line 26
            echo "                    ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
            echo "
                    <div class=\"form-group\">
                        ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeProfil", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code du Profil"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeProfil", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Login"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Confirmer"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "required" => null)));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Type du profil"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'widget', array("attr" => array("required" => "required")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prestataire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prestataire"));
            echo "
                        <div class=\"col-sm-9\">
                            ";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prestataire", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    ";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo " 
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\"/>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                    </div>
                    ";
            // line 85
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                ";
        } else {
            // line 87
            echo "                    ";
            if ((array_key_exists("success", $context) && ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == true))) {
                // line 88
                echo "                        <div class=\"alert alert-success\">
                            L'utilisateur a bien été ajouté
                        </div>
                    ";
            }
            // line 92
            echo "                ";
        }
        // line 93
        echo "            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_f9432db561eefece836490588724ec963add2dbd47ebc0457792930b8ace80ac->leave($__internal_f9432db561eefece836490588724ec963add2dbd47ebc0457792930b8ace80ac_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7539c1b7cb4aa8846bbb901f7568d1e1fe389887719d3204884208123aa69c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7539c1b7cb4aa8846bbb901f7568d1e1fe389887719d3204884208123aa69c3c->enter($__internal_7539c1b7cb4aa8846bbb901f7568d1e1fe389887719d3204884208123aa69c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
          \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
        });
    </script>
";
        
        $__internal_7539c1b7cb4aa8846bbb901f7568d1e1fe389887719d3204884208123aa69c3c->leave($__internal_7539c1b7cb4aa8846bbb901f7568d1e1fe389887719d3204884208123aa69c3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 99,  260 => 98,  249 => 93,  246 => 92,  240 => 88,  237 => 87,  232 => 85,  227 => 83,  222 => 81,  216 => 78,  211 => 76,  204 => 72,  199 => 70,  192 => 66,  187 => 64,  180 => 60,  175 => 58,  168 => 54,  163 => 52,  156 => 48,  151 => 46,  144 => 42,  139 => 40,  132 => 36,  127 => 34,  120 => 30,  115 => 28,  109 => 26,  107 => 25,  104 => 24,  99 => 21,  90 => 19,  86 => 18,  81 => 15,  79 => 14,  73 => 11,  67 => 7,  61 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block bodyclass %}hold-transition{% endblock %}

{% block title %}Ajout d'un nouvel utilisateur{% endblock %}
{% block body %}
    <div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <a role=\"button\" class=\"btn btn-danger pull-right\" href=\"{{ path('ListesUtilisateurs')}}\"><i class=\"fa fa-arrow-circle-left\"></i> Annuler</a>
            </div>
            <div class=\"box-body\">
                {% if (success is defined and success == false) %}
                    <div class=\"alert alert-danger\">
                        Des erreurs sont survenues : 
                        <ul>
                        {% for err in details %}
                            <li>{{err.message}}</li>
                        {% endfor %}
                        </ul>
                    </div>
                {% endif %}
                
                {% if (success is not defined or success == false) %}
                    {{ form_start(form, {'method': 'post', 'action': path('user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}
                    <div class=\"form-group\">
                        {{ form_label(form.codeProfil, \"Code du Profil\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.codeProfil, {'attr': {'class': 'form-control','required':'required'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.username, \"Login\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.plainPassword.first, \"Mot de passe\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.plainPassword.second, \"Confirmer\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.email, {'attr': {'class': 'form-control','required':null}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.groups, \"Type du profil\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.groups, {'attr': {'required':'required'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.prenom, \"Prénom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.Prestataire, \"Prestataire\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.Prestataire, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    {{ form_rest(form) }} 
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\"/>{{ 'registration.submit'|trans }}</button>
                    </div>
                    {{ form_end(form) }}
                {% else %}
                    {% if (success is defined and success==true) %}
                        <div class=\"alert alert-success\">
                            L'utilisateur a bien été ajouté
                        </div>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
          \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
        });
    </script>
{% endblock javascripts %}", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
