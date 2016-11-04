<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_81511f64eaa6fd576e4395744868c36b146323374bbecc2e552140efa12bbcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51e2d65e58fb9d75c0eedd43a09c6a22344ecffe1cb30b1c828953ef8ad576dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e2d65e58fb9d75c0eedd43a09c6a22344ecffe1cb30b1c828953ef8ad576dc->enter($__internal_51e2d65e58fb9d75c0eedd43a09c6a22344ecffe1cb30b1c828953ef8ad576dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e2d65e58fb9d75c0eedd43a09c6a22344ecffe1cb30b1c828953ef8ad576dc->leave($__internal_51e2d65e58fb9d75c0eedd43a09c6a22344ecffe1cb30b1c828953ef8ad576dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7d568ff7be840cf87811dfbba590c1687f6eb3c903489d752a08715aa7f109b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d568ff7be840cf87811dfbba590c1687f6eb3c903489d752a08715aa7f109b->enter($__internal_a7d568ff7be840cf87811dfbba590c1687f6eb3c903489d752a08715aa7f109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7d568ff7be840cf87811dfbba590c1687f6eb3c903489d752a08715aa7f109b->leave($__internal_a7d568ff7be840cf87811dfbba590c1687f6eb3c903489d752a08715aa7f109b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad10c6990fece111f36fd91eb5c1b05c4a0b5957aa07f1654124db47d3e8115b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad10c6990fece111f36fd91eb5c1b05c4a0b5957aa07f1654124db47d3e8115b->enter($__internal_ad10c6990fece111f36fd91eb5c1b05c4a0b5957aa07f1654124db47d3e8115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad10c6990fece111f36fd91eb5c1b05c4a0b5957aa07f1654124db47d3e8115b->leave($__internal_ad10c6990fece111f36fd91eb5c1b05c4a0b5957aa07f1654124db47d3e8115b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1234ecdab37bb7785c86d13a0aabc462880add516193784248b94935b2bc53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1234ecdab37bb7785c86d13a0aabc462880add516193784248b94935b2bc53e->enter($__internal_c1234ecdab37bb7785c86d13a0aabc462880add516193784248b94935b2bc53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c1234ecdab37bb7785c86d13a0aabc462880add516193784248b94935b2bc53e->leave($__internal_c1234ecdab37bb7785c86d13a0aabc462880add516193784248b94935b2bc53e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
