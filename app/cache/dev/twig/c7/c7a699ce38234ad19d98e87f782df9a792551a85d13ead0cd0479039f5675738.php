<?php

/* FOSUserBundle:Security:list.html.twig */
class __TwigTemplate_77ce54b15460e3885db8c2991921c79a0385a16e90b65454a654895a19385910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax"))) ? ("::baseajax.html.twig") : ("::base.html.twig")), "FOSUserBundle:Security:list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0d8e0be6bec81f1056f63346a04bc91b37a68df464ce71cf3c6ac73a262d66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d8e0be6bec81f1056f63346a04bc91b37a68df464ce71cf3c6ac73a262d66a->enter($__internal_c0d8e0be6bec81f1056f63346a04bc91b37a68df464ce71cf3c6ac73a262d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d8e0be6bec81f1056f63346a04bc91b37a68df464ce71cf3c6ac73a262d66a->leave($__internal_c0d8e0be6bec81f1056f63346a04bc91b37a68df464ce71cf3c6ac73a262d66a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ef0c05830057a2f3ce1a70f0b2aea356cd2255e3237d1abc04c6a3816e4937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ef0c05830057a2f3ce1a70f0b2aea356cd2255e3237d1abc04c6a3816e4937->enter($__internal_40ef0c05830057a2f3ce1a70f0b2aea356cd2255e3237d1abc04c6a3816e4937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:list.html.twig"));

        echo "Gestion des utilisateurs ";
        
        $__internal_40ef0c05830057a2f3ce1a70f0b2aea356cd2255e3237d1abc04c6a3816e4937->leave($__internal_40ef0c05830057a2f3ce1a70f0b2aea356cd2255e3237d1abc04c6a3816e4937_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64bdf5e24b4eb4353dc019966edbd156e33fcab1eb7123270c1246fc12cfea0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bdf5e24b4eb4353dc019966edbd156e33fcab1eb7123270c1246fc12cfea0f->enter($__internal_64bdf5e24b4eb4353dc019966edbd156e33fcab1eb7123270c1246fc12cfea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:list.html.twig"));

        // line 4
        echo "        ";
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == false)) {
            // line 5
            echo "            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <a role=\"button\" class=\"btn btn-success pull-right\" href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration_register");
            echo "\"><i class=\"fa fa-plus-circle\"></i> Créer un utilisateur</a>
                </div>

                <div class=\"box-body\"> 
        ";
        }
        // line 12
        echo "        <div id=\"users\">
                <div class=\"";
        // line 13
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == false)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                    <form class=\"form-inline\" method=\"get\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListesUtilisateurs");
        echo "\">
                        <div class=\"form-group\">
                            <label for=\"presta\">Prestataire : </label>
                                <div class=\"input-group\">
                                    <select class=\"form-control\" id=\"presta\" name=\"presta\">
                                         ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PrestataireListe"]) ? $context["PrestataireListe"] : $this->getContext($context, "PrestataireListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 20
            echo "                                             <option ";
            if (((isset($context["PExistant"]) ? $context["PExistant"] : $this->getContext($context, "PExistant")) == $context["p"])) {
                echo "selected=\"selected\" ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</option>
                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                    </select>
                                    <span class=\"input-group-btn\">
                                        <button type=\"submit\" class=\"btn btn-success\">
                                            OK
                                        </button>
                                    </span>
                                </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <input class=\"search form-control\" placeholder=\"Rechercher par code ou nom\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"sort btn btn-default\" data-sort=\"nom\">
                                        Trier par Nom
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"col-xs-12\">
                    <table class=\"table table-striped table-responsive listUserList\">
                        <thead>
                            <tr>
                                <th>Code Profil</th>
                                <th>Nom</th>
                                <th>Prestataire</th>
                                <th>Actions</th>
                        </thead>
                        <tbody class=\"list\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 53
            echo "                            <tr>
                                <td class='code'>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "codeProfil", array()), "html", null, true);
            echo "</td>
                                <td class='nom'>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "Nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "Prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "Prestataire", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 58
            if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == false)) {
                // line 59
                echo "                                        <a role=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EditionUtilisateur", array("codeProfil" => $this->getAttribute($context["u"], "codeProfil", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info\"><i class=\"fa fa-edit\" title=\"Modifier\"></i></a>
                                        ";
                // line 60
                if (($this->getAttribute($context["u"], "enabled", array()) == true)) {
                    // line 61
                    echo "                                            <a role=\"button\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setEtatUtilisateur", array("codeProfil" => $this->getAttribute($context["u"], "codeProfil", array()), "Etat" => 0)), "html", null, true);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eye-slash\" title=\"Désactiver\"></i></a>
                                        ";
                } else {
                    // line 63
                    echo "                                            <a role=\"button\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setEtatUtilisateur", array("codeProfil" => $this->getAttribute($context["u"], "codeProfil", array()), "Etat" => 0)), "html", null, true);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\" title=\"Activer\"></i></a>
                                        ";
                }
                // line 65
                echo "                                        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATEUR")) {
                    // line 66
                    echo "                                            <a role=\"button\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conseiller_default_index");
                    echo "?_emprunt_identite=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                    echo "\" class=\"btn ";
                    if (($this->getAttribute($context["u"], "username", array()) != "")) {
                        echo "btn-danger";
                    } else {
                        echo " btn-default ";
                    }
                    echo "\" title=\"";
                    if (($this->getAttribute($context["u"], "username", array()) == "")) {
                        echo "Login inexistant";
                    } else {
                        echo "emprunter cet identité";
                    }
                    echo "\" ";
                    if (($this->getAttribute($context["u"], "username", array()) == "")) {
                        echo "disabled=\"disabled\"";
                    }
                    echo "><i class=\"fa fa-user-secret\"></i></a>
                                        ";
                }
                // line 67
                echo "    
                                    ";
            } else {
                // line 69
                echo "                                        <a role=\"button\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conseiller_default_index");
                echo "?_emprunt_identite=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                echo "\" class=\"btn ";
                if (($this->getAttribute($context["u"], "username", array()) != "")) {
                    echo "btn-danger";
                } else {
                    echo " btn-default ";
                }
                echo "\" title=\"";
                if (($this->getAttribute($context["u"], "username", array()) == "")) {
                    echo "Login inexistant";
                } else {
                    echo "emprunter cet identité";
                }
                echo "\" ";
                if (($this->getAttribute($context["u"], "username", array()) == "")) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-user-secret\"></i></a>
                                    ";
            }
            // line 71
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
         ";
        // line 80
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == false)) {
            echo " 
            </div>
        </div> 
     ";
        }
        
        $__internal_64bdf5e24b4eb4353dc019966edbd156e33fcab1eb7123270c1246fc12cfea0f->leave($__internal_64bdf5e24b4eb4353dc019966edbd156e33fcab1eb7123270c1246fc12cfea0f_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b697f5995f1e3e9c9f7841b092a160a2770a03d33dd7642be75323bb92dbb91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b697f5995f1e3e9c9f7841b092a160a2770a03d33dd7642be75323bb92dbb91f->enter($__internal_b697f5995f1e3e9c9f7841b092a160a2770a03d33dd7642be75323bb92dbb91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:list.html.twig"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/list.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/secretUser.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b697f5995f1e3e9c9f7841b092a160a2770a03d33dd7642be75323bb92dbb91f->leave($__internal_b697f5995f1e3e9c9f7841b092a160a2770a03d33dd7642be75323bb92dbb91f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 88,  275 => 87,  270 => 86,  264 => 85,  252 => 80,  244 => 74,  236 => 71,  212 => 69,  208 => 67,  184 => 66,  181 => 65,  175 => 63,  169 => 61,  167 => 60,  162 => 59,  160 => 58,  155 => 56,  149 => 55,  145 => 54,  142 => 53,  138 => 52,  106 => 22,  91 => 20,  87 => 19,  79 => 14,  71 => 13,  68 => 12,  60 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ajax ? '::baseajax.html.twig' : '::base.html.twig' %}
{% block title %}Gestion des utilisateurs {% endblock %}
{% block body %}
        {% if ajax==false %}
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <a role=\"button\" class=\"btn btn-success pull-right\" href=\"{{ path('user_registration_register')}}\"><i class=\"fa fa-plus-circle\"></i> Créer un utilisateur</a>
                </div>

                <div class=\"box-body\"> 
        {% endif %}
        <div id=\"users\">
                <div class=\"{% if ajax==false %}col-lg-6{%else%}col-lg-12{%endif%}\">
                    <form class=\"form-inline\" method=\"get\" action=\"{{ path('ListesUtilisateurs')}}\">
                        <div class=\"form-group\">
                            <label for=\"presta\">Prestataire : </label>
                                <div class=\"input-group\">
                                    <select class=\"form-control\" id=\"presta\" name=\"presta\">
                                         {% for p in PrestataireListe %}
                                             <option {% if PExistant == p %}selected=\"selected\" {% endif %} value=\"{{p}}\">{{p}}</option>
                                         {% endfor %}
                                    </select>
                                    <span class=\"input-group-btn\">
                                        <button type=\"submit\" class=\"btn btn-success\">
                                            OK
                                        </button>
                                    </span>
                                </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <input class=\"search form-control\" placeholder=\"Rechercher par code ou nom\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"sort btn btn-default\" data-sort=\"nom\">
                                        Trier par Nom
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"col-xs-12\">
                    <table class=\"table table-striped table-responsive listUserList\">
                        <thead>
                            <tr>
                                <th>Code Profil</th>
                                <th>Nom</th>
                                <th>Prestataire</th>
                                <th>Actions</th>
                        </thead>
                        <tbody class=\"list\">
                        {% for u in Users %}
                            <tr>
                                <td class='code'>{{u.codeProfil}}</td>
                                <td class='nom'>{{u.Nom}} {{u.Prenom}}</td>
                                <td>{{u.Prestataire}}</td>
                                <td>
                                    {% if ajax==false %}
                                        <a role=\"button\" href=\"{{ path('EditionUtilisateur', {'codeProfil': u.codeProfil}) }}\"  class=\"btn btn-info\"><i class=\"fa fa-edit\" title=\"Modifier\"></i></a>
                                        {% if u.enabled==true %}
                                            <a role=\"button\" href=\"{{ path('setEtatUtilisateur', {'codeProfil': u.codeProfil,'Etat':0}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-eye-slash\" title=\"Désactiver\"></i></a>
                                        {% else %}
                                            <a role=\"button\" href=\"{{ path('setEtatUtilisateur', {'codeProfil': u.codeProfil,'Etat':0}) }}\" class=\"btn btn-success\"><i class=\"fa fa-eye\" title=\"Activer\"></i></a>
                                        {% endif %}
                                        {% if is_granted(\"ROLE_ADMINISTRATEUR\") %}
                                            <a role=\"button\" href=\"{{ path('conseiller_default_index') }}?_emprunt_identite={{u.username}}\" class=\"btn {% if u.username!='' %}btn-danger{% else %} btn-default {% endif %}\" title=\"{% if u.username=='' %}Login inexistant{% else %}emprunter cet identité{% endif %}\" {% if u.username=='' %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-user-secret\"></i></a>
                                        {% endif %}    
                                    {% else %}
                                        <a role=\"button\" href=\"{{ path('conseiller_default_index') }}?_emprunt_identite={{u.username}}\" class=\"btn {% if u.username!='' %}btn-danger{% else %} btn-default {% endif %}\" title=\"{% if u.username=='' %}Login inexistant{% else %}emprunter cet identité{% endif %}\" {% if u.username=='' %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-user-secret\"></i></a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
         {% if ajax==false %} 
            </div>
        </div> 
     {% endif %}
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script src=\"{{ asset('js/vendor/list.min.js') }}\"></script>
    <script src=\"{{ asset('js/admin/secretUser.js') }}\"></script>
{% endblock%}", "FOSUserBundle:Security:list.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app/Resources/FOSUserBundle/views/Security/list.html.twig");
    }
}
