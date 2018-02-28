<?php

/* base.html.twig */
class __TwigTemplate_aaa3fd3df0a020b3208bab6ed3ddd430b464502d818b314df3160b2451c234d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc4f68f6253c131294e59ead66969856e4a5cfd1c7e54e493ff6a769853986b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc4f68f6253c131294e59ead66969856e4a5cfd1c7e54e493ff6a769853986b->enter($__internal_7dc4f68f6253c131294e59ead66969856e4a5cfd1c7e54e493ff6a769853986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_60b83e09ec99911eb6b8472ff91b5f625d301b0fea433a633482845f8556754e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b83e09ec99911eb6b8472ff91b5f625d301b0fea433a633482845f8556754e->enter($__internal_60b83e09ec99911eb6b8472ff91b5f625d301b0fea433a633482845f8556754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"container-fluid\">

    <div class=\"row\">
        ";
        // line 14
        $this->loadTemplate("_navbar.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "    </div>

        <header class=\"col-md-10 col-md-offset-1 well\" style=\"margin-top: 70px;\">
            <h1>Mon forum</h1>
        </header>

        <div class=\"row\">
            <div class=\"col-md-7 col-md-offset-1\">

                ";
        // line 24
        $context["infos"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "getFlashBag", array(), "method"), "get", array(0 => "info"), "method");
        // line 25
        echo "
                ";
        // line 26
        if ((array_key_exists("infos", $context) && (twig_length_filter($this->env, ($context["infos"] ?? $this->getContext($context, "infos"))) > 0))) {
            // line 27
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["infos"] ?? $this->getContext($context, "infos")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 29
                echo "                            <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </div>
                ";
        }
        // line 33
        echo "
                ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "            </div>

            <aside class=\"col-md-3\">
                ";
        // line 38
        $this->displayBlock('aside', $context, $blocks);
        // line 39
        echo "            </aside>
        </div>

        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_7dc4f68f6253c131294e59ead66969856e4a5cfd1c7e54e493ff6a769853986b->leave($__internal_7dc4f68f6253c131294e59ead66969856e4a5cfd1c7e54e493ff6a769853986b_prof);

        
        $__internal_60b83e09ec99911eb6b8472ff91b5f625d301b0fea433a633482845f8556754e->leave($__internal_60b83e09ec99911eb6b8472ff91b5f625d301b0fea433a633482845f8556754e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bb5a5ecb2659102f0611cd01a92d3432021c8f1cbccd223afe6a8289eed2474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb5a5ecb2659102f0611cd01a92d3432021c8f1cbccd223afe6a8289eed2474->enter($__internal_1bb5a5ecb2659102f0611cd01a92d3432021c8f1cbccd223afe6a8289eed2474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_549b1cea698eedca892ec54907cf34048e63048464e670ad2a57f0374178644d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549b1cea698eedca892ec54907cf34048e63048464e670ad2a57f0374178644d->enter($__internal_549b1cea698eedca892ec54907cf34048e63048464e670ad2a57f0374178644d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_549b1cea698eedca892ec54907cf34048e63048464e670ad2a57f0374178644d->leave($__internal_549b1cea698eedca892ec54907cf34048e63048464e670ad2a57f0374178644d_prof);

        
        $__internal_1bb5a5ecb2659102f0611cd01a92d3432021c8f1cbccd223afe6a8289eed2474->leave($__internal_1bb5a5ecb2659102f0611cd01a92d3432021c8f1cbccd223afe6a8289eed2474_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ddfd323dd2540b2245ab7efe2f815dfec8510231dbc08ea1460fff46293436c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddfd323dd2540b2245ab7efe2f815dfec8510231dbc08ea1460fff46293436c->enter($__internal_3ddfd323dd2540b2245ab7efe2f815dfec8510231dbc08ea1460fff46293436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_88405294ba673d4d5f761b5088431396b79fc66b8db0eab9d9835dd742d23b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88405294ba673d4d5f761b5088431396b79fc66b8db0eab9d9835dd742d23b88->enter($__internal_88405294ba673d4d5f761b5088431396b79fc66b8db0eab9d9835dd742d23b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower-components/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_88405294ba673d4d5f761b5088431396b79fc66b8db0eab9d9835dd742d23b88->leave($__internal_88405294ba673d4d5f761b5088431396b79fc66b8db0eab9d9835dd742d23b88_prof);

        
        $__internal_3ddfd323dd2540b2245ab7efe2f815dfec8510231dbc08ea1460fff46293436c->leave($__internal_3ddfd323dd2540b2245ab7efe2f815dfec8510231dbc08ea1460fff46293436c_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_f252f54d34c67a9d1afc1f4f9eef27e868b821f6dce3fb3da232cdf1791be4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f252f54d34c67a9d1afc1f4f9eef27e868b821f6dce3fb3da232cdf1791be4c7->enter($__internal_f252f54d34c67a9d1afc1f4f9eef27e868b821f6dce3fb3da232cdf1791be4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8da48879b33083bac98de5dc1c09cfa1822748089d8a0b0d8f24fdd006c997f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8da48879b33083bac98de5dc1c09cfa1822748089d8a0b0d8f24fdd006c997f->enter($__internal_b8da48879b33083bac98de5dc1c09cfa1822748089d8a0b0d8f24fdd006c997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8da48879b33083bac98de5dc1c09cfa1822748089d8a0b0d8f24fdd006c997f->leave($__internal_b8da48879b33083bac98de5dc1c09cfa1822748089d8a0b0d8f24fdd006c997f_prof);

        
        $__internal_f252f54d34c67a9d1afc1f4f9eef27e868b821f6dce3fb3da232cdf1791be4c7->leave($__internal_f252f54d34c67a9d1afc1f4f9eef27e868b821f6dce3fb3da232cdf1791be4c7_prof);

    }

    // line 38
    public function block_aside($context, array $blocks = array())
    {
        $__internal_e86ca11d740ae582189aa69d25772ab0a3267b35634c25df81e80b0153773ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86ca11d740ae582189aa69d25772ab0a3267b35634c25df81e80b0153773ced->enter($__internal_e86ca11d740ae582189aa69d25772ab0a3267b35634c25df81e80b0153773ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_f8d40243237c0b96a36fd5398158f9922799adb1964dbd6b9b7d97e959c5b4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d40243237c0b96a36fd5398158f9922799adb1964dbd6b9b7d97e959c5b4c3->enter($__internal_f8d40243237c0b96a36fd5398158f9922799adb1964dbd6b9b7d97e959c5b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_f8d40243237c0b96a36fd5398158f9922799adb1964dbd6b9b7d97e959c5b4c3->leave($__internal_f8d40243237c0b96a36fd5398158f9922799adb1964dbd6b9b7d97e959c5b4c3_prof);

        
        $__internal_e86ca11d740ae582189aa69d25772ab0a3267b35634c25df81e80b0153773ced->leave($__internal_e86ca11d740ae582189aa69d25772ab0a3267b35634c25df81e80b0153773ced_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04595494bcc5179deeb35a43f03b77a2043834407a1908140e437cabff4fe525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04595494bcc5179deeb35a43f03b77a2043834407a1908140e437cabff4fe525->enter($__internal_04595494bcc5179deeb35a43f03b77a2043834407a1908140e437cabff4fe525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb05c2b0fbddb6a495242761f15cf73a031210d9cef405d10486b2a1c94a0b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb05c2b0fbddb6a495242761f15cf73a031210d9cef405d10486b2a1c94a0b14->enter($__internal_eb05c2b0fbddb6a495242761f15cf73a031210d9cef405d10486b2a1c94a0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower-components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower-components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_eb05c2b0fbddb6a495242761f15cf73a031210d9cef405d10486b2a1c94a0b14->leave($__internal_eb05c2b0fbddb6a495242761f15cf73a031210d9cef405d10486b2a1c94a0b14_prof);

        
        $__internal_04595494bcc5179deeb35a43f03b77a2043834407a1908140e437cabff4fe525->leave($__internal_04595494bcc5179deeb35a43f03b77a2043834407a1908140e437cabff4fe525_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 44,  205 => 43,  196 => 42,  179 => 38,  162 => 34,  149 => 7,  140 => 6,  122 => 5,  110 => 46,  108 => 42,  103 => 39,  101 => 38,  96 => 35,  94 => 34,  91 => 33,  87 => 31,  78 => 29,  74 => 28,  71 => 27,  69 => 26,  66 => 25,  64 => 24,  53 => 15,  51 => 14,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bower-components/bootstrap/dist/css/bootstrap.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"container-fluid\">

    <div class=\"row\">
        {% include(\"_navbar.html.twig\") %}
    </div>

        <header class=\"col-md-10 col-md-offset-1 well\" style=\"margin-top: 70px;\">
            <h1>Mon forum</h1>
        </header>

        <div class=\"row\">
            <div class=\"col-md-7 col-md-offset-1\">

                {% set infos = app.session.getFlashBag().get('info') %}

                {% if infos is defined and infos | length > 0 %}
                    <div class=\"alert alert-success\">
                        {% for message in infos %}
                            <p>{{ message }}</p>
                        {% endfor %}
                    </div>
                {%  endif %}

                {% block body %}{% endblock %}
            </div>

            <aside class=\"col-md-3\">
                {% block aside %}{% endblock %}
            </aside>
        </div>

        {% block javascripts %}
            <script src=\"{{ asset('bower-components/jquery/dist/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('bower-components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\base.html.twig");
    }
}
