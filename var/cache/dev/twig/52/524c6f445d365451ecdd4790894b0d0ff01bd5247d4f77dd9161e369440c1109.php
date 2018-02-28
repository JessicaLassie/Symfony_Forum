<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f36c02c44e6ebcc972ff539d13cb2d1bc4af9c630c8b18085d6bdb14f3a1e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2b20e478d4e585294715ab2fa63b309c032c616cc87400a4f177cb0bacd4306d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b20e478d4e585294715ab2fa63b309c032c616cc87400a4f177cb0bacd4306d->enter($__internal_2b20e478d4e585294715ab2fa63b309c032c616cc87400a4f177cb0bacd4306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_550e17ad3764bdaa93b697671d082de9e30ff945c2eca4b8875bc1612344c706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550e17ad3764bdaa93b697671d082de9e30ff945c2eca4b8875bc1612344c706->enter($__internal_550e17ad3764bdaa93b697671d082de9e30ff945c2eca4b8875bc1612344c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b20e478d4e585294715ab2fa63b309c032c616cc87400a4f177cb0bacd4306d->leave($__internal_2b20e478d4e585294715ab2fa63b309c032c616cc87400a4f177cb0bacd4306d_prof);

        
        $__internal_550e17ad3764bdaa93b697671d082de9e30ff945c2eca4b8875bc1612344c706->leave($__internal_550e17ad3764bdaa93b697671d082de9e30ff945c2eca4b8875bc1612344c706_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b2ba44dc20840127cd11a04b020dc150e17622c0c9dac2637868b6d67785675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2ba44dc20840127cd11a04b020dc150e17622c0c9dac2637868b6d67785675->enter($__internal_6b2ba44dc20840127cd11a04b020dc150e17622c0c9dac2637868b6d67785675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9171e240b560b5716b49fb73a4b3bad3f98733c0693558980e94da79dae20e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9171e240b560b5716b49fb73a4b3bad3f98733c0693558980e94da79dae20e2->enter($__internal_b9171e240b560b5716b49fb73a4b3bad3f98733c0693558980e94da79dae20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b9171e240b560b5716b49fb73a4b3bad3f98733c0693558980e94da79dae20e2->leave($__internal_b9171e240b560b5716b49fb73a4b3bad3f98733c0693558980e94da79dae20e2_prof);

        
        $__internal_6b2ba44dc20840127cd11a04b020dc150e17622c0c9dac2637868b6d67785675->leave($__internal_6b2ba44dc20840127cd11a04b020dc150e17622c0c9dac2637868b6d67785675_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c060bde36a1a1815d39c71f938bbffbcd23d429ace06c379bf61281c4952e02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c060bde36a1a1815d39c71f938bbffbcd23d429ace06c379bf61281c4952e02b->enter($__internal_c060bde36a1a1815d39c71f938bbffbcd23d429ace06c379bf61281c4952e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f251f45e40b9cadd92e3699654b72273c224eded7da5e9afa542b6898cbeb6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f251f45e40b9cadd92e3699654b72273c224eded7da5e9afa542b6898cbeb6d8->enter($__internal_f251f45e40b9cadd92e3699654b72273c224eded7da5e9afa542b6898cbeb6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f251f45e40b9cadd92e3699654b72273c224eded7da5e9afa542b6898cbeb6d8->leave($__internal_f251f45e40b9cadd92e3699654b72273c224eded7da5e9afa542b6898cbeb6d8_prof);

        
        $__internal_c060bde36a1a1815d39c71f938bbffbcd23d429ace06c379bf61281c4952e02b->leave($__internal_c060bde36a1a1815d39c71f938bbffbcd23d429ace06c379bf61281c4952e02b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_27268424d9f447da8aea16342cd24a2c15c8d041a159df6a8fdf4c4c17754d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27268424d9f447da8aea16342cd24a2c15c8d041a159df6a8fdf4c4c17754d44->enter($__internal_27268424d9f447da8aea16342cd24a2c15c8d041a159df6a8fdf4c4c17754d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71fb4f739e848336895da4ef2af1a977705ee6d08002602c29003eb61e8a76fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fb4f739e848336895da4ef2af1a977705ee6d08002602c29003eb61e8a76fa->enter($__internal_71fb4f739e848336895da4ef2af1a977705ee6d08002602c29003eb61e8a76fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_71fb4f739e848336895da4ef2af1a977705ee6d08002602c29003eb61e8a76fa->leave($__internal_71fb4f739e848336895da4ef2af1a977705ee6d08002602c29003eb61e8a76fa_prof);

        
        $__internal_27268424d9f447da8aea16342cd24a2c15c8d041a159df6a8fdf4c4c17754d44->leave($__internal_27268424d9f447da8aea16342cd24a2c15c8d041a159df6a8fdf4c4c17754d44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
