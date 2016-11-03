<?php

/* KMSFroalaEditorBundle:Form:froala_widget.html.twig */
class __TwigTemplate_d406b32b4e3ce94e23ef9d49977279356b7ee2be8b6c07e731f99f17be637440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'froala_widget' => array($this, 'block_froala_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_818dea33f05bdf255592aa65b2544c117a34b558ed8ebf1fee64b362b231ab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818dea33f05bdf255592aa65b2544c117a34b558ed8ebf1fee64b362b231ab10->enter($__internal_818dea33f05bdf255592aa65b2544c117a34b558ed8ebf1fee64b362b231ab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:froala_widget.html.twig"));

        // line 1
        echo "<!-- @formatter:off -->
";
        // line 2
        $this->displayBlock('froala_widget', $context, $blocks);
        
        $__internal_818dea33f05bdf255592aa65b2544c117a34b558ed8ebf1fee64b362b231ab10->leave($__internal_818dea33f05bdf255592aa65b2544c117a34b558ed8ebf1fee64b362b231ab10_prof);

    }

    public function block_froala_widget($context, array $blocks = array())
    {
        $__internal_9a445c9b2506b956541e235b6389018ad3e48630322ff74abc80a27a9a73cbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a445c9b2506b956541e235b6389018ad3e48630322ff74abc80a27a9a73cbe8->enter($__internal_9a445c9b2506b956541e235b6389018ad3e48630322ff74abc80a27a9a73cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "KMSFroalaEditorBundle:Form:froala_widget.html.twig"));

        // line 3
        echo "
\t";
        // line 5
        echo "\t";
        if ((isset($context["includeFontAwesome"]) ? $context["includeFontAwesome"] : $this->getContext($context, "includeFontAwesome"))) {
            // line 6
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" />
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if ((isset($context["includeCodeMirror"]) ? $context["includeCodeMirror"] : $this->getContext($context, "includeCodeMirror"))) {
            // line 10
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\" />
\t";
        }
        // line 12
        echo "
\t";
        // line 13
        if ((isset($context["includeCSS"]) ? $context["includeCSS"] : $this->getContext($context, "includeCSS"))) {
            // line 14
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "css/froala_editor.min.css")), "html", null, true);
            echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "css/froala_style.min.css")), "html", null, true);
            echo "\" />

\t\t";
            // line 17
            if ($this->getAttribute((isset($context["arrOption"]) ? $context["arrOption"] : null), "theme", array(), "array", true, true)) {
                // line 18
                echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "css/themes/") . $this->getAttribute((isset($context["arrOption"]) ? $context["arrOption"] : $this->getContext($context, "arrOption")), "theme", array(), "array")) . ".min.css")), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 20
            echo "
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrPluginCSS"]) ? $context["arrPluginCSS"] : $this->getContext($context, "arrPluginCSS")));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 22
                echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "css/plugins/") . $context["plugin"]) . ".min.css")), "html", null, true);
                echo "\" />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
\t";
        }
        // line 26
        echo "
\t";
        // line 28
        echo "\t<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

\t";
        // line 31
        echo "\t";
        if ((isset($context["includeJQuery"]) ? $context["includeJQuery"] : $this->getContext($context, "includeJQuery"))) {
            // line 32
            echo "\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t";
        }
        // line 34
        echo "
\t";
        // line 35
        if ((isset($context["includeCodeMirror"]) ? $context["includeCodeMirror"] : $this->getContext($context, "includeCodeMirror"))) {
            // line 36
            echo "\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        if ((isset($context["includeJS"]) ? $context["includeJS"] : $this->getContext($context, "includeJS"))) {
            // line 41
            echo "\t\t<script type=\"text/javascript\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/kmsfroalaeditor/misc.js"), "html", null, true);
            echo "\"></script>
\t\t<script type=\"text/javascript\"  src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "js/froala_editor.min.js")), "html", null, true);
            echo "\"></script>

\t\t<!--[if lt IE 9]>
\t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "js/froala_editor_ie8.min.js")), "html", null, true);
            echo "\"></script>
\t\t<![endif]-->
\t\t<script type=\"text/javascript\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "js/languages/") . $this->getAttribute((isset($context["arrOption"]) ? $context["arrOption"] : $this->getContext($context, "arrOption")), "language", array())) . ".js")), "html", null, true);
            echo "\"></script>

\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrPluginJS"]) ? $context["arrPluginJS"] : $this->getContext($context, "arrPluginJS")));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 50
                echo "\t\t\t<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["basePath"]) ? $context["basePath"] : $this->getContext($context, "basePath")) . "js/plugins/") . $context["plugin"]) . ".min.js")), "html", null, true);
                echo "\"></script>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t";
        }
        // line 53
        echo "
\t";
        // line 54
        if (array_key_exists("customJS", $context)) {
            // line 55
            echo "\t\t<script type=\"text/javascript\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["customJS"]) ? $context["customJS"] : $this->getContext($context, "customJS"))), "html", null, true);
            echo "\"></script>
\t";
        }
        // line 57
        echo "
\t";
        // line 59
        echo "\t<script type=\"text/javascript\">

\t\t";
        // line 62
        echo "\t\t\$( document ).ready( function () { \$( \"#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ).froalaEditor({
\t\t\t";
        // line 64
        echo "\t\t\t";
        if (array_key_exists("serialNumber", $context)) {
            // line 65
            echo "\t\t\t\tkey : \"";
            echo twig_escape_filter($this->env, (isset($context["serialNumber"]) ? $context["serialNumber"] : $this->getContext($context, "serialNumber")), "html", null, true);
            echo "\",
\t\t\t";
        }
        // line 67
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrOption"]) ? $context["arrOption"] : $this->getContext($context, "arrOption")));
        foreach ($context['_seq'] as $context["option"] => $context["value"]) {
            // line 68
            echo "\t\t\t\t";
            if (twig_test_iterable($context["value"])) {
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo " :
\t\t\t\t\t";
                // line 69
                if ($this->getAttribute($context["value"], 0, array(), "array", true, true)) {
                    echo " [ ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo "  \"";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        echo "\", ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " ],
\t\t\t\t\t";
                } else {
                    // line 70
                    echo " { ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo " : \"";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        echo "\", ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " }, ";
                }
                // line 71
                echo "\t\t\t\t";
            } elseif (($context["value"] === true)) {
                // line 72
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo " : true,
\t\t\t\t";
            } elseif ((            // line 73
$context["value"] === false)) {
                // line 74
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo " : false,
\t\t\t\t";
            } else {
                // line 76
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo " : \"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\",
\t\t\t\t";
            }
            // line 78
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " })
\t\t\t.on( \"froalaEditor.image.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.imageManager.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.save.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.file.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t});
\t\t});
\t</script>

";
        
        $__internal_9a445c9b2506b956541e235b6389018ad3e48630322ff74abc80a27a9a73cbe8->leave($__internal_9a445c9b2506b956541e235b6389018ad3e48630322ff74abc80a27a9a73cbe8_prof);

    }

    public function getTemplateName()
    {
        return "KMSFroalaEditorBundle:Form:froala_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 78,  261 => 76,  255 => 74,  253 => 73,  248 => 72,  245 => 71,  229 => 70,  213 => 69,  207 => 68,  202 => 67,  196 => 65,  193 => 64,  188 => 62,  184 => 59,  181 => 57,  175 => 55,  173 => 54,  170 => 53,  167 => 52,  158 => 50,  154 => 49,  149 => 47,  144 => 45,  138 => 42,  133 => 41,  131 => 40,  128 => 39,  123 => 36,  121 => 35,  118 => 34,  114 => 32,  111 => 31,  103 => 28,  100 => 26,  96 => 24,  87 => 22,  83 => 21,  80 => 20,  74 => 18,  72 => 17,  67 => 15,  62 => 14,  60 => 13,  57 => 12,  53 => 10,  51 => 9,  48 => 8,  44 => 6,  41 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- @formatter:off -->
{% block froala_widget %}

\t{# CSS. #}
\t{% if includeFontAwesome %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" />
\t{% endif %}

\t{% if includeCodeMirror %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\" />
\t{% endif %}

\t{% if includeCSS %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/froala_editor.min.css' ) }}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/froala_style.min.css' ) }}\" />

\t\t{% if arrOption[ \"theme\" ] is defined %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/themes/' ~ arrOption[ \"theme\" ] ~ '.min.css' ) }}\" />
\t\t{% endif %}

\t\t{% for plugin in arrPluginCSS %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/plugins/' ~ plugin ~ '.min.css' ) }}\" />
\t\t{% endfor %}

\t{% endif %}

\t{# Editor textarea. #}
\t<textarea {{ block( \"widget_attributes\" ) }}>{{ value }}</textarea>

\t{# JS. #}
\t{% if includeJQuery %}
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t{% endif %}

\t{% if includeCodeMirror %}
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
\t{% endif %}

\t{% if includeJS %}
\t\t<script type=\"text/javascript\"  src=\"{{ asset( \"bundles/kmsfroalaeditor/misc.js\" ) }}\"></script>
\t\t<script type=\"text/javascript\"  src=\"{{ asset( basePath ~ 'js/froala_editor.min.js' ) }}\"></script>

\t\t<!--[if lt IE 9]>
\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/froala_editor_ie8.min.js' ) }}\"></script>
\t\t<![endif]-->
\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/languages/' ~ arrOption.language ~ '.js' ) }}\"></script>

\t\t{% for plugin in arrPluginJS %}
\t\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/plugins/' ~ plugin ~ '.min.js' ) }}\"></script>
\t\t{% endfor %}
\t{% endif %}

\t{% if customJS is defined %}
\t\t<script type=\"text/javascript\"  src=\"{{ asset( customJS ) }}\"></script>
\t{% endif %}

\t{# Load the editor. #}
\t<script type=\"text/javascript\">

\t\t{# Go. #}
\t\t\$( document ).ready( function () { \$( \"#{{ id }}\" ).froalaEditor({
\t\t\t{# Add license. #}
\t\t\t{% if serialNumber is defined %}
\t\t\t\tkey : \"{{ serialNumber }}\",
\t\t\t{% endif %}
\t\t\t{% for option, value in arrOption %}
\t\t\t\t{% if value is iterable %}{{ option }} :
\t\t\t\t\t{% if value[0] is defined %} [ {% for k, v in value %}  \"{{ v }}\", {% endfor %} ],
\t\t\t\t\t{% else %} { {% for k, v in value %} {{ k }} : \"{{ v }}\", {% endfor %} }, {% endif %}
\t\t\t\t{% elseif value is same as(true) %}
\t\t\t\t\t{{ option }} : true,
\t\t\t\t{% elseif value is same as(false) %}
\t\t\t\t\t{{ option }} : false,
\t\t\t\t{% else %}
\t\t\t\t\t{{ option }} : \"{{ value }}\",
\t\t\t\t{% endif %}
\t\t\t{% endfor %} })
\t\t\t.on( \"froalaEditor.image.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.imageManager.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.save.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.file.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t});
\t\t});
\t</script>

{% endblock %}", "KMSFroalaEditorBundle:Form:froala_widget.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\vendor\\kms\\froala-editor-bundle/Resources/views/Form/froala_widget.html.twig");
    }
}
