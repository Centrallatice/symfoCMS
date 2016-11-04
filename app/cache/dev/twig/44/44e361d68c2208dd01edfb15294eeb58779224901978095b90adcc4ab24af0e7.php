<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_72392114d791e95f42148ccdf037190e67eae579260bf9c11be3c22dbcd9cd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab8e455e1d1e5788084fdad6a8d8d8d7302c04135e62bc1f1a7b2c85bce44e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8e455e1d1e5788084fdad6a8d8d8d7302c04135e62bc1f1a7b2c85bce44e52->enter($__internal_ab8e455e1d1e5788084fdad6a8d8d8d7302c04135e62bc1f1a7b2c85bce44e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab8e455e1d1e5788084fdad6a8d8d8d7302c04135e62bc1f1a7b2c85bce44e52->leave($__internal_ab8e455e1d1e5788084fdad6a8d8d8d7302c04135e62bc1f1a7b2c85bce44e52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c6c19a359e5a91d5885e1d5ce1596582a6869c365b0ddf3b8528572d4ec6531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6c19a359e5a91d5885e1d5ce1596582a6869c365b0ddf3b8528572d4ec6531->enter($__internal_0c6c19a359e5a91d5885e1d5ce1596582a6869c365b0ddf3b8528572d4ec6531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Mise à jour de votre profil</div>
                <div class=\"panel-body\">
                    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 10
            echo "                        <div class=\"col-xs-12 col-sm-8\">
                            ";
            // line 11
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit form-horizontal")));
            echo "
                                <div class=\"form-group\">
                                    ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
            echo "
                                    <div class=\"col-sm-9\">
                                        ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
            echo "
                                    <div class=\"col-sm-9\">
                                        ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Adresse e-mail"));
            echo "
                                    <div class=\"col-sm-9\">
                                        ";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Identifiant"));
            echo "
                                    <div class=\"col-sm-9\">
                                        ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe"));
            echo "
                                    <div class=\"col-sm-9\">
                                        ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"hide\">    
                                    ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo " 
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-success\"/>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                                </div>  
                            ";
            // line 48
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "  
                        </div>  
                        ";
            // line 50
            if (array_key_exists("success", $context)) {
                // line 51
                echo "                            <div class=\"col-xs-12 col-sm-4 animated rubberBand\">
                                    <div class=\"panel-heading\">
                                        ";
                // line 53
                if (((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == false)) {
                    // line 54
                    echo "                                            <div class=\"alert alert-danger\">
                                                Une erreur est survenue lors de la mise à jour de votre profil : <br />
                                                ";
                    // line 56
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                    echo "
                                            </div>
                                        ";
                } else {
                    // line 59
                    echo "                                            <div class=\"alert alert-success\">
                                            Votre profil a bien été mis à jour
                                            </div>
                                        ";
                }
                // line 63
                echo "                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 66
            echo "    
                    ";
        } else {
            // line 67
            echo "    
                        <div class=\"alert alert-danger\">Vous n'avez pas l'autorisation pour accèder à cette partie du site</div>
                    ";
        }
        // line 69
        echo "    
                </div>
            </div>
        </div>
              
            
    </div>
";
        
        $__internal_0c6c19a359e5a91d5885e1d5ce1596582a6869c365b0ddf3b8528572d4ec6531->leave($__internal_0c6c19a359e5a91d5885e1d5ce1596582a6869c365b0ddf3b8528572d4ec6531_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  167 => 67,  163 => 66,  157 => 63,  151 => 59,  145 => 56,  141 => 54,  139 => 53,  135 => 51,  133 => 50,  128 => 48,  123 => 46,  117 => 43,  110 => 39,  105 => 37,  98 => 33,  93 => 31,  86 => 27,  81 => 25,  74 => 21,  69 => 19,  62 => 15,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Mise à jour de votre profil</div>
                <div class=\"panel-body\">
                    {% if is_granted(\"ROLE_ADMINISTRATEUR\") %}
                        <div class=\"col-xs-12 col-sm-8\">
                            {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit form-horizontal' } }) }}
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
                                    {{ form_label(form.email, \"Adresse e-mail\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.username, \"Identifiant\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.current_password, \"Mot de passe\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"hide\">    
                                    {{ form_rest(form) }} 
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-success\"/>{{ 'profile.edit.submit'|trans }}</button>
                                </div>  
                            {{ form_end(form) }}  
                        </div>  
                        {% if success is defined %}
                            <div class=\"col-xs-12 col-sm-4 animated rubberBand\">
                                    <div class=\"panel-heading\">
                                        {% if success == false %}
                                            <div class=\"alert alert-danger\">
                                                Une erreur est survenue lors de la mise à jour de votre profil : <br />
                                                {{ form_errors(form) }}
                                            </div>
                                        {% else %}
                                            <div class=\"alert alert-success\">
                                            Votre profil a bien été mis à jour
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endif %}    
                    {% else %}    
                        <div class=\"alert alert-danger\">Vous n'avez pas l'autorisation pour accèder à cette partie du site</div>
                    {% endif %}    
                </div>
            </div>
        </div>
              
            
    </div>
{% endblock body %}
", "@FOSUser/Profile/edit.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
