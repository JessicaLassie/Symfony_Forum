<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_d3a4af8c2beb5f84217e9c74b48532fb7e467f022034faf21aa890096fe5b58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
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
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
        $__internal_8f5e084f33e9c16b48fa7dee92ed3e45e13f6d17ccbfe6a129335a56c5f36e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5e084f33e9c16b48fa7dee92ed3e45e13f6d17ccbfe6a129335a56c5f36e65->enter($__internal_8f5e084f33e9c16b48fa7dee92ed3e45e13f6d17ccbfe6a129335a56c5f36e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_122626503c988e49fce84e54731b9c352d3701fbd8a7463b82b3b70e156bb55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122626503c988e49fce84e54731b9c352d3701fbd8a7463b82b3b70e156bb55a->enter($__internal_122626503c988e49fce84e54731b9c352d3701fbd8a7463b82b3b70e156bb55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8f5e084f33e9c16b48fa7dee92ed3e45e13f6d17ccbfe6a129335a56c5f36e65->leave($__internal_8f5e084f33e9c16b48fa7dee92ed3e45e13f6d17ccbfe6a129335a56c5f36e65_prof);

        
        $__internal_122626503c988e49fce84e54731b9c352d3701fbd8a7463b82b3b70e156bb55a->leave($__internal_122626503c988e49fce84e54731b9c352d3701fbd8a7463b82b3b70e156bb55a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8a6dd3a19f9181fa5a0018d0347cb1fdebf3ccac8b0668ff6779fb4897373d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6dd3a19f9181fa5a0018d0347cb1fdebf3ccac8b0668ff6779fb4897373d5b->enter($__internal_8a6dd3a19f9181fa5a0018d0347cb1fdebf3ccac8b0668ff6779fb4897373d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0060e2a5888a7714e82d706bc52fff04c2585dc1495a75ca4388fb6ffd18fccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0060e2a5888a7714e82d706bc52fff04c2585dc1495a75ca4388fb6ffd18fccb->enter($__internal_0060e2a5888a7714e82d706bc52fff04c2585dc1495a75ca4388fb6ffd18fccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0060e2a5888a7714e82d706bc52fff04c2585dc1495a75ca4388fb6ffd18fccb->leave($__internal_0060e2a5888a7714e82d706bc52fff04c2585dc1495a75ca4388fb6ffd18fccb_prof);

        
        $__internal_8a6dd3a19f9181fa5a0018d0347cb1fdebf3ccac8b0668ff6779fb4897373d5b->leave($__internal_8a6dd3a19f9181fa5a0018d0347cb1fdebf3ccac8b0668ff6779fb4897373d5b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_bd3f568edf653ed12586a0df19cc00a3817b31876c603f5f9910c382225b7fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3f568edf653ed12586a0df19cc00a3817b31876c603f5f9910c382225b7fb5->enter($__internal_bd3f568edf653ed12586a0df19cc00a3817b31876c603f5f9910c382225b7fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4c81f2159a549a9404e6c7430ec795169d7e36dc58336750f70d7774c1e4ce5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c81f2159a549a9404e6c7430ec795169d7e36dc58336750f70d7774c1e4ce5e->enter($__internal_4c81f2159a549a9404e6c7430ec795169d7e36dc58336750f70d7774c1e4ce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4c81f2159a549a9404e6c7430ec795169d7e36dc58336750f70d7774c1e4ce5e->leave($__internal_4c81f2159a549a9404e6c7430ec795169d7e36dc58336750f70d7774c1e4ce5e_prof);

        
        $__internal_bd3f568edf653ed12586a0df19cc00a3817b31876c603f5f9910c382225b7fb5->leave($__internal_bd3f568edf653ed12586a0df19cc00a3817b31876c603f5f9910c382225b7fb5_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_249f9324a3c3aa7007d5c9e1913d5fa6f0b74ba95f53c1973ede290160228523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249f9324a3c3aa7007d5c9e1913d5fa6f0b74ba95f53c1973ede290160228523->enter($__internal_249f9324a3c3aa7007d5c9e1913d5fa6f0b74ba95f53c1973ede290160228523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1bad8884a1c6defdf272d1b84cc7c266968c23139832ab082eba4b2458950ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bad8884a1c6defdf272d1b84cc7c266968c23139832ab082eba4b2458950ae2->enter($__internal_1bad8884a1c6defdf272d1b84cc7c266968c23139832ab082eba4b2458950ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1bad8884a1c6defdf272d1b84cc7c266968c23139832ab082eba4b2458950ae2->leave($__internal_1bad8884a1c6defdf272d1b84cc7c266968c23139832ab082eba4b2458950ae2_prof);

        
        $__internal_249f9324a3c3aa7007d5c9e1913d5fa6f0b74ba95f53c1973ede290160228523->leave($__internal_249f9324a3c3aa7007d5c9e1913d5fa6f0b74ba95f53c1973ede290160228523_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0ed0a147b521ea1f8008d2ce9f4fdb221de6e5a55ed876e80ef6fd3f294243ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed0a147b521ea1f8008d2ce9f4fdb221de6e5a55ed876e80ef6fd3f294243ca->enter($__internal_0ed0a147b521ea1f8008d2ce9f4fdb221de6e5a55ed876e80ef6fd3f294243ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3049c5ca27335dc1351e97a8e36f46d43fd99ed4ca96717edb0703c1e8334ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3049c5ca27335dc1351e97a8e36f46d43fd99ed4ca96717edb0703c1e8334ff7->enter($__internal_3049c5ca27335dc1351e97a8e36f46d43fd99ed4ca96717edb0703c1e8334ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_2ecf3c8fc4e7c5b1a6fd71baa1b25f195d9941e47427b30c6cec69bf865ec672 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_0544048b36fdd6b5afc4b04bc0b98a5837e9cff874045d39f4c35449bcf59e34 = "{{") && ('' === $__internal_0544048b36fdd6b5afc4b04bc0b98a5837e9cff874045d39f4c35449bcf59e34 || 0 === strpos($__internal_2ecf3c8fc4e7c5b1a6fd71baa1b25f195d9941e47427b30c6cec69bf865ec672, $__internal_0544048b36fdd6b5afc4b04bc0b98a5837e9cff874045d39f4c35449bcf59e34)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_3049c5ca27335dc1351e97a8e36f46d43fd99ed4ca96717edb0703c1e8334ff7->leave($__internal_3049c5ca27335dc1351e97a8e36f46d43fd99ed4ca96717edb0703c1e8334ff7_prof);

        
        $__internal_0ed0a147b521ea1f8008d2ce9f4fdb221de6e5a55ed876e80ef6fd3f294243ca->leave($__internal_0ed0a147b521ea1f8008d2ce9f4fdb221de6e5a55ed876e80ef6fd3f294243ca_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8bf9e60691940f95e851a243fff3dd8166c5b3c3729cb7a317f59e95a049fdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf9e60691940f95e851a243fff3dd8166c5b3c3729cb7a317f59e95a049fdc8->enter($__internal_8bf9e60691940f95e851a243fff3dd8166c5b3c3729cb7a317f59e95a049fdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b61a9f9bba27a2cc7f83a3953dd7764918a7e066c681054bf24bba491db14294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a9f9bba27a2cc7f83a3953dd7764918a7e066c681054bf24bba491db14294->enter($__internal_b61a9f9bba27a2cc7f83a3953dd7764918a7e066c681054bf24bba491db14294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b61a9f9bba27a2cc7f83a3953dd7764918a7e066c681054bf24bba491db14294->leave($__internal_b61a9f9bba27a2cc7f83a3953dd7764918a7e066c681054bf24bba491db14294_prof);

        
        $__internal_8bf9e60691940f95e851a243fff3dd8166c5b3c3729cb7a317f59e95a049fdc8->leave($__internal_8bf9e60691940f95e851a243fff3dd8166c5b3c3729cb7a317f59e95a049fdc8_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1ade686d589464c358b50d4a779f3a76845259d7356a4c6219a7cfd3e92370e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ade686d589464c358b50d4a779f3a76845259d7356a4c6219a7cfd3e92370e3->enter($__internal_1ade686d589464c358b50d4a779f3a76845259d7356a4c6219a7cfd3e92370e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d7c1b3f996931867473ea13d9654378cc893e9505883a3f20ba0e3b3eae721ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c1b3f996931867473ea13d9654378cc893e9505883a3f20ba0e3b3eae721ac->enter($__internal_d7c1b3f996931867473ea13d9654378cc893e9505883a3f20ba0e3b3eae721ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_d7c1b3f996931867473ea13d9654378cc893e9505883a3f20ba0e3b3eae721ac->leave($__internal_d7c1b3f996931867473ea13d9654378cc893e9505883a3f20ba0e3b3eae721ac_prof);

        
        $__internal_1ade686d589464c358b50d4a779f3a76845259d7356a4c6219a7cfd3e92370e3->leave($__internal_1ade686d589464c358b50d4a779f3a76845259d7356a4c6219a7cfd3e92370e3_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_70512f53e7273985a9ab1cc7146e7c1b70e049614f3ce323b2d7be380dbdba2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70512f53e7273985a9ab1cc7146e7c1b70e049614f3ce323b2d7be380dbdba2a->enter($__internal_70512f53e7273985a9ab1cc7146e7c1b70e049614f3ce323b2d7be380dbdba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_efedcfb59eba0268e0d2b2acd7ee7c9eb10cff34bf46f0e9c5979b1e91e73c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efedcfb59eba0268e0d2b2acd7ee7c9eb10cff34bf46f0e9c5979b1e91e73c10->enter($__internal_efedcfb59eba0268e0d2b2acd7ee7c9eb10cff34bf46f0e9c5979b1e91e73c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_efedcfb59eba0268e0d2b2acd7ee7c9eb10cff34bf46f0e9c5979b1e91e73c10->leave($__internal_efedcfb59eba0268e0d2b2acd7ee7c9eb10cff34bf46f0e9c5979b1e91e73c10_prof);

        
        $__internal_70512f53e7273985a9ab1cc7146e7c1b70e049614f3ce323b2d7be380dbdba2a->leave($__internal_70512f53e7273985a9ab1cc7146e7c1b70e049614f3ce323b2d7be380dbdba2a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_48b0fcc667c3cfdccd59e151cb4a300aab22094258c23699eb396b4499595ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b0fcc667c3cfdccd59e151cb4a300aab22094258c23699eb396b4499595ed3->enter($__internal_48b0fcc667c3cfdccd59e151cb4a300aab22094258c23699eb396b4499595ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1eb3c5933be7fe5c27138593f71e4825aa7c479dc9d3dd7cc84899fa377b4f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb3c5933be7fe5c27138593f71e4825aa7c479dc9d3dd7cc84899fa377b4f15->enter($__internal_1eb3c5933be7fe5c27138593f71e4825aa7c479dc9d3dd7cc84899fa377b4f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_1eb3c5933be7fe5c27138593f71e4825aa7c479dc9d3dd7cc84899fa377b4f15->leave($__internal_1eb3c5933be7fe5c27138593f71e4825aa7c479dc9d3dd7cc84899fa377b4f15_prof);

        
        $__internal_48b0fcc667c3cfdccd59e151cb4a300aab22094258c23699eb396b4499595ed3->leave($__internal_48b0fcc667c3cfdccd59e151cb4a300aab22094258c23699eb396b4499595ed3_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_1fa575664e08433830a46818500a99c2cb145ec512c9c4173c68f2198c0a1062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa575664e08433830a46818500a99c2cb145ec512c9c4173c68f2198c0a1062->enter($__internal_1fa575664e08433830a46818500a99c2cb145ec512c9c4173c68f2198c0a1062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_92b18d35eb9a3122fcbc295be3e67e18a425f3ec3091714b0f2ff2b668bd81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b18d35eb9a3122fcbc295be3e67e18a425f3ec3091714b0f2ff2b668bd81a8->enter($__internal_92b18d35eb9a3122fcbc295be3e67e18a425f3ec3091714b0f2ff2b668bd81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_92b18d35eb9a3122fcbc295be3e67e18a425f3ec3091714b0f2ff2b668bd81a8->leave($__internal_92b18d35eb9a3122fcbc295be3e67e18a425f3ec3091714b0f2ff2b668bd81a8_prof);

        
        $__internal_1fa575664e08433830a46818500a99c2cb145ec512c9c4173c68f2198c0a1062->leave($__internal_1fa575664e08433830a46818500a99c2cb145ec512c9c4173c68f2198c0a1062_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3fae14644dc0c417ed984792424074d9ad622088db51124e9164474da1210ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fae14644dc0c417ed984792424074d9ad622088db51124e9164474da1210ad0->enter($__internal_3fae14644dc0c417ed984792424074d9ad622088db51124e9164474da1210ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b282da0108f36f34d9c0e68988773db8e1f2a716acd93ea51882fb7045ec16ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b282da0108f36f34d9c0e68988773db8e1f2a716acd93ea51882fb7045ec16ff->enter($__internal_b282da0108f36f34d9c0e68988773db8e1f2a716acd93ea51882fb7045ec16ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b282da0108f36f34d9c0e68988773db8e1f2a716acd93ea51882fb7045ec16ff->leave($__internal_b282da0108f36f34d9c0e68988773db8e1f2a716acd93ea51882fb7045ec16ff_prof);

        
        $__internal_3fae14644dc0c417ed984792424074d9ad622088db51124e9164474da1210ad0->leave($__internal_3fae14644dc0c417ed984792424074d9ad622088db51124e9164474da1210ad0_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c804141530f1991da68e257901dd23b5e4b78f1554629c5870cbc975c6bb27ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c804141530f1991da68e257901dd23b5e4b78f1554629c5870cbc975c6bb27ed->enter($__internal_c804141530f1991da68e257901dd23b5e4b78f1554629c5870cbc975c6bb27ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b3e0900ddc67479fa71f80a6e2cfcfbdbb1e665de5a0e321b8cfdce7f2817f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e0900ddc67479fa71f80a6e2cfcfbdbb1e665de5a0e321b8cfdce7f2817f80->enter($__internal_b3e0900ddc67479fa71f80a6e2cfcfbdbb1e665de5a0e321b8cfdce7f2817f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_b3e0900ddc67479fa71f80a6e2cfcfbdbb1e665de5a0e321b8cfdce7f2817f80->leave($__internal_b3e0900ddc67479fa71f80a6e2cfcfbdbb1e665de5a0e321b8cfdce7f2817f80_prof);

        
        $__internal_c804141530f1991da68e257901dd23b5e4b78f1554629c5870cbc975c6bb27ed->leave($__internal_c804141530f1991da68e257901dd23b5e4b78f1554629c5870cbc975c6bb27ed_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9db485e7b256863db517e0038e32bced4c90103229de0c43ca8c2f2f12e77d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db485e7b256863db517e0038e32bced4c90103229de0c43ca8c2f2f12e77d3d->enter($__internal_9db485e7b256863db517e0038e32bced4c90103229de0c43ca8c2f2f12e77d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_51c9f233e7f5677a8633eded2b50052e7b151036cb77512dec8e6ec97dc70c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c9f233e7f5677a8633eded2b50052e7b151036cb77512dec8e6ec97dc70c85->enter($__internal_51c9f233e7f5677a8633eded2b50052e7b151036cb77512dec8e6ec97dc70c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_51c9f233e7f5677a8633eded2b50052e7b151036cb77512dec8e6ec97dc70c85->leave($__internal_51c9f233e7f5677a8633eded2b50052e7b151036cb77512dec8e6ec97dc70c85_prof);

        
        $__internal_9db485e7b256863db517e0038e32bced4c90103229de0c43ca8c2f2f12e77d3d->leave($__internal_9db485e7b256863db517e0038e32bced4c90103229de0c43ca8c2f2f12e77d3d_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_34f9be5a8f964f7bd1865b5cd0678155f0cbeddc8e8b4c6b60b1d2fc55a9b0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f9be5a8f964f7bd1865b5cd0678155f0cbeddc8e8b4c6b60b1d2fc55a9b0b6->enter($__internal_34f9be5a8f964f7bd1865b5cd0678155f0cbeddc8e8b4c6b60b1d2fc55a9b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4f863f20b6a793f00174c6801a69f6111e9dbc1782d4df716c715a9261760a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f863f20b6a793f00174c6801a69f6111e9dbc1782d4df716c715a9261760a18->enter($__internal_4f863f20b6a793f00174c6801a69f6111e9dbc1782d4df716c715a9261760a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_4f863f20b6a793f00174c6801a69f6111e9dbc1782d4df716c715a9261760a18->leave($__internal_4f863f20b6a793f00174c6801a69f6111e9dbc1782d4df716c715a9261760a18_prof);

        
        $__internal_34f9be5a8f964f7bd1865b5cd0678155f0cbeddc8e8b4c6b60b1d2fc55a9b0b6->leave($__internal_34f9be5a8f964f7bd1865b5cd0678155f0cbeddc8e8b4c6b60b1d2fc55a9b0b6_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fd79bce8e93fefff4474a580882f9afba411190ca982ff2cb6a4a8727fc0c8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd79bce8e93fefff4474a580882f9afba411190ca982ff2cb6a4a8727fc0c8ae->enter($__internal_fd79bce8e93fefff4474a580882f9afba411190ca982ff2cb6a4a8727fc0c8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a13e636f962d95c0f5f1157f0470724b598bfae3064a6a590f43a3c45ca97846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13e636f962d95c0f5f1157f0470724b598bfae3064a6a590f43a3c45ca97846->enter($__internal_a13e636f962d95c0f5f1157f0470724b598bfae3064a6a590f43a3c45ca97846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a13e636f962d95c0f5f1157f0470724b598bfae3064a6a590f43a3c45ca97846->leave($__internal_a13e636f962d95c0f5f1157f0470724b598bfae3064a6a590f43a3c45ca97846_prof);

        
        $__internal_fd79bce8e93fefff4474a580882f9afba411190ca982ff2cb6a4a8727fc0c8ae->leave($__internal_fd79bce8e93fefff4474a580882f9afba411190ca982ff2cb6a4a8727fc0c8ae_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2892fd08f255b16a9ee1b71e5edaacacc2b5cf53420e1302b335dde8c1a0fba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2892fd08f255b16a9ee1b71e5edaacacc2b5cf53420e1302b335dde8c1a0fba1->enter($__internal_2892fd08f255b16a9ee1b71e5edaacacc2b5cf53420e1302b335dde8c1a0fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_05c2da3a3613a9b895b1ceb92f3942eb1e66d5dc16d9fa15306712dfe05e8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c2da3a3613a9b895b1ceb92f3942eb1e66d5dc16d9fa15306712dfe05e8d1a->enter($__internal_05c2da3a3613a9b895b1ceb92f3942eb1e66d5dc16d9fa15306712dfe05e8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_05c2da3a3613a9b895b1ceb92f3942eb1e66d5dc16d9fa15306712dfe05e8d1a->leave($__internal_05c2da3a3613a9b895b1ceb92f3942eb1e66d5dc16d9fa15306712dfe05e8d1a_prof);

        
        $__internal_2892fd08f255b16a9ee1b71e5edaacacc2b5cf53420e1302b335dde8c1a0fba1->leave($__internal_2892fd08f255b16a9ee1b71e5edaacacc2b5cf53420e1302b335dde8c1a0fba1_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_aff5bb7d215fe2acfe10ac9377a77cb2b99aaebb8d16539c2a957856608d364c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff5bb7d215fe2acfe10ac9377a77cb2b99aaebb8d16539c2a957856608d364c->enter($__internal_aff5bb7d215fe2acfe10ac9377a77cb2b99aaebb8d16539c2a957856608d364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ba0dd5324c5b33f9ae169cc6bfbdb7eadc7b9360b2cdfc8320f66c02a7c4705d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0dd5324c5b33f9ae169cc6bfbdb7eadc7b9360b2cdfc8320f66c02a7c4705d->enter($__internal_ba0dd5324c5b33f9ae169cc6bfbdb7eadc7b9360b2cdfc8320f66c02a7c4705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ba0dd5324c5b33f9ae169cc6bfbdb7eadc7b9360b2cdfc8320f66c02a7c4705d->leave($__internal_ba0dd5324c5b33f9ae169cc6bfbdb7eadc7b9360b2cdfc8320f66c02a7c4705d_prof);

        
        $__internal_aff5bb7d215fe2acfe10ac9377a77cb2b99aaebb8d16539c2a957856608d364c->leave($__internal_aff5bb7d215fe2acfe10ac9377a77cb2b99aaebb8d16539c2a957856608d364c_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_99896227bf1d8a3e4c854937ac682012a172b9ff7c96c6c7a08ba8afd956ab68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99896227bf1d8a3e4c854937ac682012a172b9ff7c96c6c7a08ba8afd956ab68->enter($__internal_99896227bf1d8a3e4c854937ac682012a172b9ff7c96c6c7a08ba8afd956ab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f7529830893d584350db4b7662af38651815305c74930d17fc233ef2597caed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7529830893d584350db4b7662af38651815305c74930d17fc233ef2597caed1->enter($__internal_f7529830893d584350db4b7662af38651815305c74930d17fc233ef2597caed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f7529830893d584350db4b7662af38651815305c74930d17fc233ef2597caed1->leave($__internal_f7529830893d584350db4b7662af38651815305c74930d17fc233ef2597caed1_prof);

        
        $__internal_99896227bf1d8a3e4c854937ac682012a172b9ff7c96c6c7a08ba8afd956ab68->leave($__internal_99896227bf1d8a3e4c854937ac682012a172b9ff7c96c6c7a08ba8afd956ab68_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_20e503137254be27eb78dfa02bb988d2e533b63493fb3faae22eada019c89c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e503137254be27eb78dfa02bb988d2e533b63493fb3faae22eada019c89c78->enter($__internal_20e503137254be27eb78dfa02bb988d2e533b63493fb3faae22eada019c89c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1ae886b2625394da8b49635cb9185ccaba588153b13b24aa035d78ad784218b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae886b2625394da8b49635cb9185ccaba588153b13b24aa035d78ad784218b1->enter($__internal_1ae886b2625394da8b49635cb9185ccaba588153b13b24aa035d78ad784218b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_1ae886b2625394da8b49635cb9185ccaba588153b13b24aa035d78ad784218b1->leave($__internal_1ae886b2625394da8b49635cb9185ccaba588153b13b24aa035d78ad784218b1_prof);

        
        $__internal_20e503137254be27eb78dfa02bb988d2e533b63493fb3faae22eada019c89c78->leave($__internal_20e503137254be27eb78dfa02bb988d2e533b63493fb3faae22eada019c89c78_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_132a831ee819c46988c5433d52c8619ab774837d5980e0326a32009f491e1cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132a831ee819c46988c5433d52c8619ab774837d5980e0326a32009f491e1cee->enter($__internal_132a831ee819c46988c5433d52c8619ab774837d5980e0326a32009f491e1cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_93cf72d83b8ea08930de050299b09b7e263bbae10dfc6fa9879c48ded6813e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cf72d83b8ea08930de050299b09b7e263bbae10dfc6fa9879c48ded6813e7a->enter($__internal_93cf72d83b8ea08930de050299b09b7e263bbae10dfc6fa9879c48ded6813e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_93cf72d83b8ea08930de050299b09b7e263bbae10dfc6fa9879c48ded6813e7a->leave($__internal_93cf72d83b8ea08930de050299b09b7e263bbae10dfc6fa9879c48ded6813e7a_prof);

        
        $__internal_132a831ee819c46988c5433d52c8619ab774837d5980e0326a32009f491e1cee->leave($__internal_132a831ee819c46988c5433d52c8619ab774837d5980e0326a32009f491e1cee_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_49ac29d54813dfaff06dc87dea57942a95136ce34ae4827f29ba32eeb88be351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ac29d54813dfaff06dc87dea57942a95136ce34ae4827f29ba32eeb88be351->enter($__internal_49ac29d54813dfaff06dc87dea57942a95136ce34ae4827f29ba32eeb88be351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c8f1b1d1db4277681533b8b3ec0540fc78d813b25eb771f4fc9eb400611e93fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f1b1d1db4277681533b8b3ec0540fc78d813b25eb771f4fc9eb400611e93fe->enter($__internal_c8f1b1d1db4277681533b8b3ec0540fc78d813b25eb771f4fc9eb400611e93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_c8f1b1d1db4277681533b8b3ec0540fc78d813b25eb771f4fc9eb400611e93fe->leave($__internal_c8f1b1d1db4277681533b8b3ec0540fc78d813b25eb771f4fc9eb400611e93fe_prof);

        
        $__internal_49ac29d54813dfaff06dc87dea57942a95136ce34ae4827f29ba32eeb88be351->leave($__internal_49ac29d54813dfaff06dc87dea57942a95136ce34ae4827f29ba32eeb88be351_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3c70269c9891efc674a902a56426fb807ec203e078632d255e96a4cf22961515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c70269c9891efc674a902a56426fb807ec203e078632d255e96a4cf22961515->enter($__internal_3c70269c9891efc674a902a56426fb807ec203e078632d255e96a4cf22961515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a0c4b66a917aea890d1dfcbf9381a958ea253b1d9fd0f0ca34967cbe59c780e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c4b66a917aea890d1dfcbf9381a958ea253b1d9fd0f0ca34967cbe59c780e1->enter($__internal_a0c4b66a917aea890d1dfcbf9381a958ea253b1d9fd0f0ca34967cbe59c780e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a0c4b66a917aea890d1dfcbf9381a958ea253b1d9fd0f0ca34967cbe59c780e1->leave($__internal_a0c4b66a917aea890d1dfcbf9381a958ea253b1d9fd0f0ca34967cbe59c780e1_prof);

        
        $__internal_3c70269c9891efc674a902a56426fb807ec203e078632d255e96a4cf22961515->leave($__internal_3c70269c9891efc674a902a56426fb807ec203e078632d255e96a4cf22961515_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3c4f1aeb1c6c2d66ac934540c6478b14409c5cb57cad9a131e615fca2e579f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4f1aeb1c6c2d66ac934540c6478b14409c5cb57cad9a131e615fca2e579f38->enter($__internal_3c4f1aeb1c6c2d66ac934540c6478b14409c5cb57cad9a131e615fca2e579f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c27797533a70aa0eb782a0c3496937e338bb2146a7229b06b1d4bff5eb348623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27797533a70aa0eb782a0c3496937e338bb2146a7229b06b1d4bff5eb348623->enter($__internal_c27797533a70aa0eb782a0c3496937e338bb2146a7229b06b1d4bff5eb348623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c27797533a70aa0eb782a0c3496937e338bb2146a7229b06b1d4bff5eb348623->leave($__internal_c27797533a70aa0eb782a0c3496937e338bb2146a7229b06b1d4bff5eb348623_prof);

        
        $__internal_3c4f1aeb1c6c2d66ac934540c6478b14409c5cb57cad9a131e615fca2e579f38->leave($__internal_3c4f1aeb1c6c2d66ac934540c6478b14409c5cb57cad9a131e615fca2e579f38_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5d888bfca49fa9d1f39b2ab2f3026285bc42e238571f699e82a12202aab8a71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d888bfca49fa9d1f39b2ab2f3026285bc42e238571f699e82a12202aab8a71f->enter($__internal_5d888bfca49fa9d1f39b2ab2f3026285bc42e238571f699e82a12202aab8a71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e6859dc46ecbb4259c16b0ca5eb0b0bed307787219ce2e3185966c0b2e958496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6859dc46ecbb4259c16b0ca5eb0b0bed307787219ce2e3185966c0b2e958496->enter($__internal_e6859dc46ecbb4259c16b0ca5eb0b0bed307787219ce2e3185966c0b2e958496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e6859dc46ecbb4259c16b0ca5eb0b0bed307787219ce2e3185966c0b2e958496->leave($__internal_e6859dc46ecbb4259c16b0ca5eb0b0bed307787219ce2e3185966c0b2e958496_prof);

        
        $__internal_5d888bfca49fa9d1f39b2ab2f3026285bc42e238571f699e82a12202aab8a71f->leave($__internal_5d888bfca49fa9d1f39b2ab2f3026285bc42e238571f699e82a12202aab8a71f_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1294bfadc86c7bc6ca71eda53412abfb5d1c997f9f67032d0a193a10fa0d468f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1294bfadc86c7bc6ca71eda53412abfb5d1c997f9f67032d0a193a10fa0d468f->enter($__internal_1294bfadc86c7bc6ca71eda53412abfb5d1c997f9f67032d0a193a10fa0d468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7f51184fd67404d65204c0fe7e5e461fa6bcae2e89e4f1b0862b54412d1986ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f51184fd67404d65204c0fe7e5e461fa6bcae2e89e4f1b0862b54412d1986ee->enter($__internal_7f51184fd67404d65204c0fe7e5e461fa6bcae2e89e4f1b0862b54412d1986ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f51184fd67404d65204c0fe7e5e461fa6bcae2e89e4f1b0862b54412d1986ee->leave($__internal_7f51184fd67404d65204c0fe7e5e461fa6bcae2e89e4f1b0862b54412d1986ee_prof);

        
        $__internal_1294bfadc86c7bc6ca71eda53412abfb5d1c997f9f67032d0a193a10fa0d468f->leave($__internal_1294bfadc86c7bc6ca71eda53412abfb5d1c997f9f67032d0a193a10fa0d468f_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_425302e9cb8120601f2c379c54ddd37837e3e4a1cc27bcfc5550bf930685cd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425302e9cb8120601f2c379c54ddd37837e3e4a1cc27bcfc5550bf930685cd95->enter($__internal_425302e9cb8120601f2c379c54ddd37837e3e4a1cc27bcfc5550bf930685cd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c55dd95287aff0d2cab155ec1e64b971ca1f22e1c71a40ef3b1906ee76baa26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55dd95287aff0d2cab155ec1e64b971ca1f22e1c71a40ef3b1906ee76baa26a->enter($__internal_c55dd95287aff0d2cab155ec1e64b971ca1f22e1c71a40ef3b1906ee76baa26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_c55dd95287aff0d2cab155ec1e64b971ca1f22e1c71a40ef3b1906ee76baa26a->leave($__internal_c55dd95287aff0d2cab155ec1e64b971ca1f22e1c71a40ef3b1906ee76baa26a_prof);

        
        $__internal_425302e9cb8120601f2c379c54ddd37837e3e4a1cc27bcfc5550bf930685cd95->leave($__internal_425302e9cb8120601f2c379c54ddd37837e3e4a1cc27bcfc5550bf930685cd95_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7423dcdb13a50ea9180f87dc15a764b2757baf85febbf495f6694b74b3b5f399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7423dcdb13a50ea9180f87dc15a764b2757baf85febbf495f6694b74b3b5f399->enter($__internal_7423dcdb13a50ea9180f87dc15a764b2757baf85febbf495f6694b74b3b5f399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_90953f6b1633f2cc7af6a79243dbf737843faae10255643572a6ade077320f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90953f6b1633f2cc7af6a79243dbf737843faae10255643572a6ade077320f31->enter($__internal_90953f6b1633f2cc7af6a79243dbf737843faae10255643572a6ade077320f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_90953f6b1633f2cc7af6a79243dbf737843faae10255643572a6ade077320f31->leave($__internal_90953f6b1633f2cc7af6a79243dbf737843faae10255643572a6ade077320f31_prof);

        
        $__internal_7423dcdb13a50ea9180f87dc15a764b2757baf85febbf495f6694b74b3b5f399->leave($__internal_7423dcdb13a50ea9180f87dc15a764b2757baf85febbf495f6694b74b3b5f399_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cd6a5b95346199d579b6202c7b762a9455be305cd3f5774f937819973f6ba5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6a5b95346199d579b6202c7b762a9455be305cd3f5774f937819973f6ba5bf->enter($__internal_cd6a5b95346199d579b6202c7b762a9455be305cd3f5774f937819973f6ba5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_50db34e4fa7a16b0a59b9b052675b234a57a51656b440e60969e0f7103bb987c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50db34e4fa7a16b0a59b9b052675b234a57a51656b440e60969e0f7103bb987c->enter($__internal_50db34e4fa7a16b0a59b9b052675b234a57a51656b440e60969e0f7103bb987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_50db34e4fa7a16b0a59b9b052675b234a57a51656b440e60969e0f7103bb987c->leave($__internal_50db34e4fa7a16b0a59b9b052675b234a57a51656b440e60969e0f7103bb987c_prof);

        
        $__internal_cd6a5b95346199d579b6202c7b762a9455be305cd3f5774f937819973f6ba5bf->leave($__internal_cd6a5b95346199d579b6202c7b762a9455be305cd3f5774f937819973f6ba5bf_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
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

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
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
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
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
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
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
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
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
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
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
", "bootstrap_3_layout.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
