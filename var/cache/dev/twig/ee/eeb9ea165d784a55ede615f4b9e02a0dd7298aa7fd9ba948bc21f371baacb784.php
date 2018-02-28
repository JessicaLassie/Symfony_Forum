<?php

/* default/theme.html.twig */
class __TwigTemplate_26162a6821e333f53922dca240d03dd9fcfd2e4dbc63c235421b69ad93797e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/theme.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2081c20d78cb52f271f1cd407584cad03ec615608299a79e44c4958207e2e8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2081c20d78cb52f271f1cd407584cad03ec615608299a79e44c4958207e2e8d4->enter($__internal_2081c20d78cb52f271f1cd407584cad03ec615608299a79e44c4958207e2e8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/theme.html.twig"));

        $__internal_58ad12e2db56d22f2ce3492fcd5ce132a3d9449ad4354a055fe708431579054b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ad12e2db56d22f2ce3492fcd5ce132a3d9449ad4354a055fe708431579054b->enter($__internal_58ad12e2db56d22f2ce3492fcd5ce132a3d9449ad4354a055fe708431579054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2081c20d78cb52f271f1cd407584cad03ec615608299a79e44c4958207e2e8d4->leave($__internal_2081c20d78cb52f271f1cd407584cad03ec615608299a79e44c4958207e2e8d4_prof);

        
        $__internal_58ad12e2db56d22f2ce3492fcd5ce132a3d9449ad4354a055fe708431579054b->leave($__internal_58ad12e2db56d22f2ce3492fcd5ce132a3d9449ad4354a055fe708431579054b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bcfc67f3559d302d2abe33808ac74a0a2452d2147ff36902a8701fdb36003b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcfc67f3559d302d2abe33808ac74a0a2452d2147ff36902a8701fdb36003b8->enter($__internal_2bcfc67f3559d302d2abe33808ac74a0a2452d2147ff36902a8701fdb36003b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3d688cc7ce2a22722889ad5094209916ea254cf4182ec47fd2f79871a08ed62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d688cc7ce2a22722889ad5094209916ea254cf4182ec47fd2f79871a08ed62->enter($__internal_f3d688cc7ce2a22722889ad5094209916ea254cf4182ec47fd2f79871a08ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Liste des thèmes</a>
        </li>
    </ol>


    ";
        // line 12
        if (array_key_exists("theme", $context)) {
            // line 13
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "name", array()), "html", null, true);
            echo "</h1>
    ";
        } elseif (        // line 14
array_key_exists("title", $context)) {
            // line 15
            echo "        <h1>";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h1>
    ";
        }
        // line 17
        echo "
    <table class=\"table\">
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postList"] ?? $this->getContext($context, "postList")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_details", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["post"], "answers", array())), "html", null, true);
            echo " réponses</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 34
            echo "        <h2>Nouveau post</h2>
        ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["newPostForm"] ?? $this->getContext($context, "newPostForm")), 'form');
            echo "
    ";
        }
        // line 37
        echo "
";
        
        $__internal_f3d688cc7ce2a22722889ad5094209916ea254cf4182ec47fd2f79871a08ed62->leave($__internal_f3d688cc7ce2a22722889ad5094209916ea254cf4182ec47fd2f79871a08ed62_prof);

        
        $__internal_2bcfc67f3559d302d2abe33808ac74a0a2452d2147ff36902a8701fdb36003b8->leave($__internal_2bcfc67f3559d302d2abe33808ac74a0a2452d2147ff36902a8701fdb36003b8_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_284865c4fd6c8dbf95a0ed6c52efe601dad8399b98314b046e3dedd29f7a864c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284865c4fd6c8dbf95a0ed6c52efe601dad8399b98314b046e3dedd29f7a864c->enter($__internal_284865c4fd6c8dbf95a0ed6c52efe601dad8399b98314b046e3dedd29f7a864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_caf873cae2e0259f1f39175a1d16308e6014fa175581643fdadab71ece9807c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf873cae2e0259f1f39175a1d16308e6014fa175581643fdadab71ece9807c7->enter($__internal_caf873cae2e0259f1f39175a1d16308e6014fa175581643fdadab71ece9807c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.ckeditor.com/4.8.0/full/ckeditor.js\"></script>
    <script>
        CKEDITOR.replace('appbundle_post_text');
    </script>
";
        
        $__internal_caf873cae2e0259f1f39175a1d16308e6014fa175581643fdadab71ece9807c7->leave($__internal_caf873cae2e0259f1f39175a1d16308e6014fa175581643fdadab71ece9807c7_prof);

        
        $__internal_284865c4fd6c8dbf95a0ed6c52efe601dad8399b98314b046e3dedd29f7a864c->leave($__internal_284865c4fd6c8dbf95a0ed6c52efe601dad8399b98314b046e3dedd29f7a864c_prof);

    }

    public function getTemplateName()
    {
        return "default/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 41,  136 => 40,  125 => 37,  120 => 35,  117 => 34,  115 => 33,  110 => 30,  101 => 27,  95 => 24,  91 => 23,  87 => 21,  83 => 20,  78 => 17,  72 => 15,  70 => 14,  65 => 13,  63 => 12,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <ol class=\"breadcrumb\">
        <li>
            <a href=\"{{ path('homepage') }}\">Liste des thèmes</a>
        </li>
    </ol>


    {% if theme is defined %}
        <h1>{{ theme.name }}</h1>
    {% elseif title is defined %}
        <h1>{{ title }}</h1>
    {% endif %}

    <table class=\"table\">
        <tbody>
        {% for post in postList %}
            <tr>
                <td>
                    <a href=\"{{ path('post_details', {'slug': post.slug}) }}\">
                        {{ post.title }}
                    </a>
                </td>
                <td>{{ post.answers | length }} réponses</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% if is_granted('ROLE_AUTHOR') %}
        <h2>Nouveau post</h2>
        {{ form(newPostForm) }}
    {% endif %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.ckeditor.com/4.8.0/full/ckeditor.js\"></script>
    <script>
        CKEDITOR.replace('appbundle_post_text');
    </script>
{% endblock %}

", "default/theme.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\default\\theme.html.twig");
    }
}
