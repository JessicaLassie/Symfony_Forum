<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_585383597b5c05e2d9baa782a34e0a4773b17d72a171e9bcb24643c81781f02c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c66c3541f6179aad04e6ff801c5ea2eb0aa83836eb28299e1e79d746a76b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c66c3541f6179aad04e6ff801c5ea2eb0aa83836eb28299e1e79d746a76b19->enter($__internal_83c66c3541f6179aad04e6ff801c5ea2eb0aa83836eb28299e1e79d746a76b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bb54d675ed22ace534c1fd56c7348f774ac83b7c644b85890387f74a8400871c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb54d675ed22ace534c1fd56c7348f774ac83b7c644b85890387f74a8400871c->enter($__internal_bb54d675ed22ace534c1fd56c7348f774ac83b7c644b85890387f74a8400871c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c66c3541f6179aad04e6ff801c5ea2eb0aa83836eb28299e1e79d746a76b19->leave($__internal_83c66c3541f6179aad04e6ff801c5ea2eb0aa83836eb28299e1e79d746a76b19_prof);

        
        $__internal_bb54d675ed22ace534c1fd56c7348f774ac83b7c644b85890387f74a8400871c->leave($__internal_bb54d675ed22ace534c1fd56c7348f774ac83b7c644b85890387f74a8400871c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_231aac8ccc25b252102cc0a89d58ba73f5b26163630fa83c51ee224b1dcb5209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231aac8ccc25b252102cc0a89d58ba73f5b26163630fa83c51ee224b1dcb5209->enter($__internal_231aac8ccc25b252102cc0a89d58ba73f5b26163630fa83c51ee224b1dcb5209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80da6bac0d381f0d63dec80d7d121afb99bdac619cbd1bc1392c5958dd44d6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80da6bac0d381f0d63dec80d7d121afb99bdac619cbd1bc1392c5958dd44d6a4->enter($__internal_80da6bac0d381f0d63dec80d7d121afb99bdac619cbd1bc1392c5958dd44d6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_80da6bac0d381f0d63dec80d7d121afb99bdac619cbd1bc1392c5958dd44d6a4->leave($__internal_80da6bac0d381f0d63dec80d7d121afb99bdac619cbd1bc1392c5958dd44d6a4_prof);

        
        $__internal_231aac8ccc25b252102cc0a89d58ba73f5b26163630fa83c51ee224b1dcb5209->leave($__internal_231aac8ccc25b252102cc0a89d58ba73f5b26163630fa83c51ee224b1dcb5209_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
