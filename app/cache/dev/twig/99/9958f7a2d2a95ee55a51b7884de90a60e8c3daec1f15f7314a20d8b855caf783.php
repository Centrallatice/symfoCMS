<?php

/* materialize_layout.html.twig */
class __TwigTemplate_5f1e4f4abc23cbf8a4c4b662752f3cbd7b44ab8644b5c2a87f93dc08b42e9a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_materialize_div_layout.html.twig", "materialize_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_materialize_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de607ba31bd94a834bc9b1c248cb516bdac31230323e68197419e78dbc21e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de607ba31bd94a834bc9b1c248cb516bdac31230323e68197419e78dbc21e5e->enter($__internal_6de607ba31bd94a834bc9b1c248cb516bdac31230323e68197419e78dbc21e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 133
        echo "
";
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('form_label', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_label', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('radio_label', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 177
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('form_row', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('button_row', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('choice_row', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('date_row', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('time_row', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('radio_row', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6de607ba31bd94a834bc9b1c248cb516bdac31230323e68197419e78dbc21e5e->leave($__internal_6de607ba31bd94a834bc9b1c248cb516bdac31230323e68197419e78dbc21e5e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e889d02b7e9418e3dcb2441902ab7107a5138790c1dae4620dceec846e367cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e889d02b7e9418e3dcb2441902ab7107a5138790c1dae4620dceec846e367cca->enter($__internal_e889d02b7e9418e3dcb2441902ab7107a5138790c1dae4620dceec846e367cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " validate"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e889d02b7e9418e3dcb2441902ab7107a5138790c1dae4620dceec846e367cca->leave($__internal_e889d02b7e9418e3dcb2441902ab7107a5138790c1dae4620dceec846e367cca_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5950dff6eaa9a93434e3c94cce940d5d00aceda210c4876ab5cace5a11070a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5950dff6eaa9a93434e3c94cce940d5d00aceda210c4876ab5cace5a11070a59->enter($__internal_5950dff6eaa9a93434e3c94cce940d5d00aceda210c4876ab5cace5a11070a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " materialize-textarea validate"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5950dff6eaa9a93434e3c94cce940d5d00aceda210c4876ab5cace5a11070a59->leave($__internal_5950dff6eaa9a93434e3c94cce940d5d00aceda210c4876ab5cace5a11070a59_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_236225de2fb47d8efad7ec6fd2e0aaf6ed675a7670041719e004e5432d029ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236225de2fb47d8efad7ec6fd2e0aaf6ed675a7670041719e004e5432d029ae4->enter($__internal_236225de2fb47d8efad7ec6fd2e0aaf6ed675a7670041719e004e5432d029ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_236225de2fb47d8efad7ec6fd2e0aaf6ed675a7670041719e004e5432d029ae4->leave($__internal_236225de2fb47d8efad7ec6fd2e0aaf6ed675a7670041719e004e5432d029ae4_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e78ba0b92e210082dac2d995337b41e4af477eb864c23cd68d96abe06d6c2b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78ba0b92e210082dac2d995337b41e4af477eb864c23cd68d96abe06d6c2b0d->enter($__internal_e78ba0b92e210082dac2d995337b41e4af477eb864c23cd68d96abe06d6c2b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_526ed93cbb3ef42499e241721b75f3889f001e0eb65d93d0543682536663e5cf = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_fb8d22f67318c301e449463ffd10026b211cf8fd551b4929bb04c7ce609d00fb = "{{") && ('' === $__internal_fb8d22f67318c301e449463ffd10026b211cf8fd551b4929bb04c7ce609d00fb || 0 === strpos($__internal_526ed93cbb3ef42499e241721b75f3889f001e0eb65d93d0543682536663e5cf, $__internal_fb8d22f67318c301e449463ffd10026b211cf8fd551b4929bb04c7ce609d00fb)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_e78ba0b92e210082dac2d995337b41e4af477eb864c23cd68d96abe06d6c2b0d->leave($__internal_e78ba0b92e210082dac2d995337b41e4af477eb864c23cd68d96abe06d6c2b0d_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_942aa169338b8d84b64d78f966f70e528618ac9b628d4bc9ed34cef41e12aa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942aa169338b8d84b64d78f966f70e528618ac9b628d4bc9ed34cef41e12aa28->enter($__internal_942aa169338b8d84b64d78f966f70e528618ac9b628d4bc9ed34cef41e12aa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_942aa169338b8d84b64d78f966f70e528618ac9b628d4bc9ed34cef41e12aa28->leave($__internal_942aa169338b8d84b64d78f966f70e528618ac9b628d4bc9ed34cef41e12aa28_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4caad683e26b17d085f39975efe155c5b514a67eb6ebe6e29e479809feab13b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caad683e26b17d085f39975efe155c5b514a67eb6ebe6e29e479809feab13b6->enter($__internal_4caad683e26b17d085f39975efe155c5b514a67eb6ebe6e29e479809feab13b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4caad683e26b17d085f39975efe155c5b514a67eb6ebe6e29e479809feab13b6->leave($__internal_4caad683e26b17d085f39975efe155c5b514a67eb6ebe6e29e479809feab13b6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0ab03e1a017a8b2250d45d5ff7d4b39c2586e48c6b7089ebe0b897abb5930478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab03e1a017a8b2250d45d5ff7d4b39c2586e48c6b7089ebe0b897abb5930478->enter($__internal_0ab03e1a017a8b2250d45d5ff7d4b39c2586e48c6b7089ebe0b897abb5930478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_0ab03e1a017a8b2250d45d5ff7d4b39c2586e48c6b7089ebe0b897abb5930478->leave($__internal_0ab03e1a017a8b2250d45d5ff7d4b39c2586e48c6b7089ebe0b897abb5930478_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b0846583d854d8f4ad8198f4580f342927224e7f629cdbafb93ecc531820bf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0846583d854d8f4ad8198f4580f342927224e7f629cdbafb93ecc531820bf5f->enter($__internal_b0846583d854d8f4ad8198f4580f342927224e7f629cdbafb93ecc531820bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_b0846583d854d8f4ad8198f4580f342927224e7f629cdbafb93ecc531820bf5f->leave($__internal_b0846583d854d8f4ad8198f4580f342927224e7f629cdbafb93ecc531820bf5f_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c3c3ed845394ef40ad581d7b2da2d7331b82fd96e0bae6e1250ae3d463d123b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c3ed845394ef40ad581d7b2da2d7331b82fd96e0bae6e1250ae3d463d123b8->enter($__internal_c3c3ed845394ef40ad581d7b2da2d7331b82fd96e0bae6e1250ae3d463d123b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " validate"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c3c3ed845394ef40ad581d7b2da2d7331b82fd96e0bae6e1250ae3d463d123b8->leave($__internal_c3c3ed845394ef40ad581d7b2da2d7331b82fd96e0bae6e1250ae3d463d123b8_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b1f6968014392cf41350e7fe1a1b66b23fc42cb753814e67580a1b72e79ce78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f6968014392cf41350e7fe1a1b66b23fc42cb753814e67580a1b72e79ce78d->enter($__internal_b1f6968014392cf41350e7fe1a1b66b23fc42cb753814e67580a1b72e79ce78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_b1f6968014392cf41350e7fe1a1b66b23fc42cb753814e67580a1b72e79ce78d->leave($__internal_b1f6968014392cf41350e7fe1a1b66b23fc42cb753814e67580a1b72e79ce78d_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_07af324c77adc323f7ae25374628b403119074e99d3881dc2bfa87f8ff0f01e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07af324c77adc323f7ae25374628b403119074e99d3881dc2bfa87f8ff0f01e8->enter($__internal_07af324c77adc323f7ae25374628b403119074e99d3881dc2bfa87f8ff0f01e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 118
        echo "<div class=\"checkbox-block\">";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        // line 120
        echo "</div>";
        
        $__internal_07af324c77adc323f7ae25374628b403119074e99d3881dc2bfa87f8ff0f01e8->leave($__internal_07af324c77adc323f7ae25374628b403119074e99d3881dc2bfa87f8ff0f01e8_prof);

    }

    // line 123
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ddb9891caf295697f74f0608b755769792f5d8c5804e6a2a1664723dce2c1bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb9891caf295697f74f0608b755769792f5d8c5804e6a2a1664723dce2c1bf9->enter($__internal_ddb9891caf295697f74f0608b755769792f5d8c5804e6a2a1664723dce2c1bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 124
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 125
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 128
            echo "<div class=\"radio\">";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 130
            echo "</div>";
        }
        
        $__internal_ddb9891caf295697f74f0608b755769792f5d8c5804e6a2a1664723dce2c1bf9->leave($__internal_ddb9891caf295697f74f0608b755769792f5d8c5804e6a2a1664723dce2c1bf9_prof);

    }

    // line 136
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2578e1548aff9983c9a00bbbf4e26926d6d0268d6362d12b191a52bb35d5f8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2578e1548aff9983c9a00bbbf4e26926d6d0268d6362d12b191a52bb35d5f8cd->enter($__internal_2578e1548aff9983c9a00bbbf4e26926d6d0268d6362d12b191a52bb35d5f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 137
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 138
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2578e1548aff9983c9a00bbbf4e26926d6d0268d6362d12b191a52bb35d5f8cd->leave($__internal_2578e1548aff9983c9a00bbbf4e26926d6d0268d6362d12b191a52bb35d5f8cd_prof);

    }

    // line 141
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_40d6b03ab320c8fc68868009b4380c5dc4723a6040aee732c5b6e800116e535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d6b03ab320c8fc68868009b4380c5dc4723a6040aee732c5b6e800116e535e->enter($__internal_40d6b03ab320c8fc68868009b4380c5dc4723a6040aee732c5b6e800116e535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 143
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 144
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_40d6b03ab320c8fc68868009b4380c5dc4723a6040aee732c5b6e800116e535e->leave($__internal_40d6b03ab320c8fc68868009b4380c5dc4723a6040aee732c5b6e800116e535e_prof);

    }

    // line 147
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_02598a4182a2aa51c64893a3fe652631df9d9dc6e20497664f91a11d40aaeef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02598a4182a2aa51c64893a3fe652631df9d9dc6e20497664f91a11d40aaeef5->enter($__internal_02598a4182a2aa51c64893a3fe652631df9d9dc6e20497664f91a11d40aaeef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 148
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_02598a4182a2aa51c64893a3fe652631df9d9dc6e20497664f91a11d40aaeef5->leave($__internal_02598a4182a2aa51c64893a3fe652631df9d9dc6e20497664f91a11d40aaeef5_prof);

    }

    // line 151
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_62904b10978b9433333e6a6e7264a2d253e1b78737cda5dd942eea62498b3ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62904b10978b9433333e6a6e7264a2d253e1b78737cda5dd942eea62498b3ab7->enter($__internal_62904b10978b9433333e6a6e7264a2d253e1b78737cda5dd942eea62498b3ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 152
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_62904b10978b9433333e6a6e7264a2d253e1b78737cda5dd942eea62498b3ab7->leave($__internal_62904b10978b9433333e6a6e7264a2d253e1b78737cda5dd942eea62498b3ab7_prof);

    }

    // line 155
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0527a42ec6e8964d32a28c610b4c6eb287adcb3cccf42d217896108bd80cedcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0527a42ec6e8964d32a28c610b4c6eb287adcb3cccf42d217896108bd80cedcb->enter($__internal_0527a42ec6e8964d32a28c610b4c6eb287adcb3cccf42d217896108bd80cedcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 156
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 157
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 158
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 159
                echo "        ";
            }
            // line 160
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 164
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 165
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 166
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 167
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 170
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 173
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " 
        <label for=\"";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</label>
    ";
        }
        
        $__internal_0527a42ec6e8964d32a28c610b4c6eb287adcb3cccf42d217896108bd80cedcb->leave($__internal_0527a42ec6e8964d32a28c610b4c6eb287adcb3cccf42d217896108bd80cedcb_prof);

    }

    // line 180
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ee0ae8e146b600e60614d6d3942798f8cf92aecd2a468cda553bcd16910d1fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0ae8e146b600e60614d6d3942798f8cf92aecd2a468cda553bcd16910d1fe4->enter($__internal_ee0ae8e146b600e60614d6d3942798f8cf92aecd2a468cda553bcd16910d1fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 181
        echo "<div class=\"row\">
        <div class=\"input-field col s12";
        // line 182
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 186
        echo "</div>
    </div>";
        
        $__internal_ee0ae8e146b600e60614d6d3942798f8cf92aecd2a468cda553bcd16910d1fe4->leave($__internal_ee0ae8e146b600e60614d6d3942798f8cf92aecd2a468cda553bcd16910d1fe4_prof);

    }

    // line 190
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ab956fda8f7ef83a3bfc22d08c0da98f01bc0b3308bdddf51562a9d461d03dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab956fda8f7ef83a3bfc22d08c0da98f01bc0b3308bdddf51562a9d461d03dd7->enter($__internal_ab956fda8f7ef83a3bfc22d08c0da98f01bc0b3308bdddf51562a9d461d03dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 191
        echo "<div class=\"input-field col s12\">";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 193
        echo "</div>";
        
        $__internal_ab956fda8f7ef83a3bfc22d08c0da98f01bc0b3308bdddf51562a9d461d03dd7->leave($__internal_ab956fda8f7ef83a3bfc22d08c0da98f01bc0b3308bdddf51562a9d461d03dd7_prof);

    }

    // line 196
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f5095c2a3087161730301802ea780a59492646fc685a84e6adc6a913e033f022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5095c2a3087161730301802ea780a59492646fc685a84e6adc6a913e033f022->enter($__internal_f5095c2a3087161730301802ea780a59492646fc685a84e6adc6a913e033f022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 197
        $context["force_error"] = true;
        // line 198
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f5095c2a3087161730301802ea780a59492646fc685a84e6adc6a913e033f022->leave($__internal_f5095c2a3087161730301802ea780a59492646fc685a84e6adc6a913e033f022_prof);

    }

    // line 201
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5750090e9647327b77f4e4b2e677e321bcf0847f40b8e476c22e270831bb0174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5750090e9647327b77f4e4b2e677e321bcf0847f40b8e476c22e270831bb0174->enter($__internal_5750090e9647327b77f4e4b2e677e321bcf0847f40b8e476c22e270831bb0174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5750090e9647327b77f4e4b2e677e321bcf0847f40b8e476c22e270831bb0174->leave($__internal_5750090e9647327b77f4e4b2e677e321bcf0847f40b8e476c22e270831bb0174_prof);

    }

    // line 206
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_89370cd3c5c1ca8be861cd95c7781df9edae5ab19198edbcafd9d10abeaadcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89370cd3c5c1ca8be861cd95c7781df9edae5ab19198edbcafd9d10abeaadcc5->enter($__internal_89370cd3c5c1ca8be861cd95c7781df9edae5ab19198edbcafd9d10abeaadcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_89370cd3c5c1ca8be861cd95c7781df9edae5ab19198edbcafd9d10abeaadcc5->leave($__internal_89370cd3c5c1ca8be861cd95c7781df9edae5ab19198edbcafd9d10abeaadcc5_prof);

    }

    // line 211
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_62e17e2e0083c9cdbd7a0611323462ff6586b82b7ee6dab608a5e0204b75df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e17e2e0083c9cdbd7a0611323462ff6586b82b7ee6dab608a5e0204b75df99->enter($__internal_62e17e2e0083c9cdbd7a0611323462ff6586b82b7ee6dab608a5e0204b75df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 212
        $context["force_error"] = true;
        // line 213
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_62e17e2e0083c9cdbd7a0611323462ff6586b82b7ee6dab608a5e0204b75df99->leave($__internal_62e17e2e0083c9cdbd7a0611323462ff6586b82b7ee6dab608a5e0204b75df99_prof);

    }

    // line 216
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_361e7056b7f1d617baa0570a1d2109cc22f00ec7a8d56923d9e9f2b12632ce90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361e7056b7f1d617baa0570a1d2109cc22f00ec7a8d56923d9e9f2b12632ce90->enter($__internal_361e7056b7f1d617baa0570a1d2109cc22f00ec7a8d56923d9e9f2b12632ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 217
        echo "<div class=\"input-field col s12";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 220
        echo "</div>";
        
        $__internal_361e7056b7f1d617baa0570a1d2109cc22f00ec7a8d56923d9e9f2b12632ce90->leave($__internal_361e7056b7f1d617baa0570a1d2109cc22f00ec7a8d56923d9e9f2b12632ce90_prof);

    }

    // line 223
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_507f9ceadcb224237effa21f9cc450e887960f4e495dfd6a9f4a8d72da0968a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507f9ceadcb224237effa21f9cc450e887960f4e495dfd6a9f4a8d72da0968a9->enter($__internal_507f9ceadcb224237effa21f9cc450e887960f4e495dfd6a9f4a8d72da0968a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 224
        echo "<div class=\"input-field col s12";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 227
        echo "</div>";
        
        $__internal_507f9ceadcb224237effa21f9cc450e887960f4e495dfd6a9f4a8d72da0968a9->leave($__internal_507f9ceadcb224237effa21f9cc450e887960f4e495dfd6a9f4a8d72da0968a9_prof);

    }

    // line 232
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5a619d9e428bd9b4420b53d227675efe9f9cbcf7acf81d1d2e192a49557aecd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a619d9e428bd9b4420b53d227675efe9f9cbcf7acf81d1d2e192a49557aecd9->enter($__internal_5a619d9e428bd9b4420b53d227675efe9f9cbcf7acf81d1d2e192a49557aecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 233
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 234
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 235
            echo "    <ul class=\"list-unstyled\">";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 237
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "</ul>
    ";
            // line 240
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5a619d9e428bd9b4420b53d227675efe9f9cbcf7acf81d1d2e192a49557aecd9->leave($__internal_5a619d9e428bd9b4420b53d227675efe9f9cbcf7acf81d1d2e192a49557aecd9_prof);

    }

    public function getTemplateName()
    {
        return "materialize_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  833 => 240,  830 => 239,  822 => 237,  818 => 236,  816 => 235,  810 => 234,  808 => 233,  802 => 232,  795 => 227,  793 => 226,  791 => 225,  785 => 224,  779 => 223,  772 => 220,  770 => 219,  768 => 218,  762 => 217,  756 => 216,  749 => 213,  747 => 212,  741 => 211,  734 => 208,  732 => 207,  726 => 206,  719 => 203,  717 => 202,  711 => 201,  704 => 198,  702 => 197,  696 => 196,  689 => 193,  687 => 192,  685 => 191,  679 => 190,  671 => 186,  669 => 185,  667 => 184,  665 => 183,  660 => 182,  657 => 181,  651 => 180,  626 => 174,  622 => 173,  618 => 170,  615 => 167,  614 => 166,  613 => 165,  611 => 164,  608 => 163,  605 => 162,  602 => 161,  599 => 160,  596 => 159,  593 => 158,  590 => 157,  587 => 156,  581 => 155,  574 => 152,  568 => 151,  561 => 148,  555 => 147,  548 => 144,  546 => 143,  540 => 141,  533 => 138,  531 => 137,  525 => 136,  517 => 130,  515 => 129,  513 => 128,  510 => 126,  508 => 125,  506 => 124,  500 => 123,  493 => 120,  491 => 119,  489 => 118,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 232,  197 => 231,  194 => 229,  192 => 223,  189 => 222,  187 => 216,  184 => 215,  182 => 211,  179 => 210,  177 => 206,  174 => 205,  172 => 201,  169 => 200,  167 => 196,  164 => 195,  162 => 190,  159 => 189,  157 => 180,  154 => 179,  151 => 177,  149 => 155,  146 => 154,  144 => 151,  141 => 150,  139 => 147,  136 => 146,  134 => 141,  131 => 140,  129 => 136,  126 => 135,  123 => 133,  121 => 123,  118 => 122,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_materialize_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' validate')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' materialize-textarea validate')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' validate')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    
        <div class=\"checkbox-block\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') )|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        {{- widget|raw }} 
        <label for=\"{{id}}\" {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}</label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"input-field col s12{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"input-field col s12\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"input-field col s12{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"input-field col s12{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "materialize_layout.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\app\\Resources\\views\\materialize_layout.html.twig");
    }
}
