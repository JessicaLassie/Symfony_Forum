<?php

/* default/index.html.twig */
class __TwigTemplate_4d1dd740ac4e5d45e4af74f5c573022ea53daf47fc69b51acb8d8a8b8605e56b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03abdd5bfea99764a0fe87077ab6b43f9854abe6005dc414167b7fbb9148f6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03abdd5bfea99764a0fe87077ab6b43f9854abe6005dc414167b7fbb9148f6e1->enter($__internal_03abdd5bfea99764a0fe87077ab6b43f9854abe6005dc414167b7fbb9148f6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_90e254099749458b66516b6bc1b33690c41695a3f121d279696cc0017e591e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e254099749458b66516b6bc1b33690c41695a3f121d279696cc0017e591e93->enter($__internal_90e254099749458b66516b6bc1b33690c41695a3f121d279696cc0017e591e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03abdd5bfea99764a0fe87077ab6b43f9854abe6005dc414167b7fbb9148f6e1->leave($__internal_03abdd5bfea99764a0fe87077ab6b43f9854abe6005dc414167b7fbb9148f6e1_prof);

        
        $__internal_90e254099749458b66516b6bc1b33690c41695a3f121d279696cc0017e591e93->leave($__internal_90e254099749458b66516b6bc1b33690c41695a3f121d279696cc0017e591e93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cd3ba7c97610b215f0feb87c1d8de8099b08404fda8a1ea9af27fd015a07dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd3ba7c97610b215f0feb87c1d8de8099b08404fda8a1ea9af27fd015a07dc3->enter($__internal_2cd3ba7c97610b215f0feb87c1d8de8099b08404fda8a1ea9af27fd015a07dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72a538fa1beb28dcc8eee9dd6f3c1192d88fd7d1b09839643c591daee1152113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a538fa1beb28dcc8eee9dd6f3c1192d88fd7d1b09839643c591daee1152113->enter($__internal_72a538fa1beb28dcc8eee9dd6f3c1192d88fd7d1b09839643c591daee1152113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Liste des thèmes</h1>

    <!--<h2>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</h2>-->

    <table class=\"table\">
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themeList"] ?? $this->getContext($context, "themeList")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 12
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theme_details", array("id" => $this->getAttribute($context["theme"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["theme"], "posts", array())), "html", null, true);
            echo " posts</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>

";
        
        $__internal_72a538fa1beb28dcc8eee9dd6f3c1192d88fd7d1b09839643c591daee1152113->leave($__internal_72a538fa1beb28dcc8eee9dd6f3c1192d88fd7d1b09839643c591daee1152113_prof);

        
        $__internal_2cd3ba7c97610b215f0feb87c1d8de8099b08404fda8a1ea9af27fd015a07dc3->leave($__internal_2cd3ba7c97610b215f0feb87c1d8de8099b08404fda8a1ea9af27fd015a07dc3_prof);

    }

    // line 26
    public function block_aside($context, array $blocks = array())
    {
        $__internal_4650da78c26ba2258bc22a925e4362b00b0b8354be1277365b6a45b1e3074854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4650da78c26ba2258bc22a925e4362b00b0b8354be1277365b6a45b1e3074854->enter($__internal_4650da78c26ba2258bc22a925e4362b00b0b8354be1277365b6a45b1e3074854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_a4a642465cc5322fa5731a7edf2226f08794a20f8e7a375eeefa109e1ac8c682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a642465cc5322fa5731a7edf2226f08794a20f8e7a375eeefa109e1ac8c682->enter($__internal_a4a642465cc5322fa5731a7edf2226f08794a20f8e7a375eeefa109e1ac8c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 27
        echo "    <h3>Les derniers articles</h3>
    <ul class=\"list-group\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastPosts"] ?? $this->getContext($context, "lastPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            echo "            <li class=\"list-group-item\">
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_details", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    <h3>Les auteurs</h3>
    <ul class=\"list-group\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authorSummary"] ?? $this->getContext($context, "authorSummary")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 38
            echo "            <li class=\"list-group-item\">
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_par_auteur", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["author"], "name", array())), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "numberOfPosts", array()), "html", null, true);
            echo ")</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>
    <h3>Historique</h3>
    <ul class=\"list-group\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearSummary"] ?? $this->getContext($context, "yearSummary")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "            <li class=\"list-group-item\">
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_par_annee", array("year" => $this->getAttribute($context["item"], "yearPublished", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "yearPublished", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numberOfPosts", array()), "html", null, true);
            echo ")</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ul>
";
        
        $__internal_a4a642465cc5322fa5731a7edf2226f08794a20f8e7a375eeefa109e1ac8c682->leave($__internal_a4a642465cc5322fa5731a7edf2226f08794a20f8e7a375eeefa109e1ac8c682_prof);

        
        $__internal_4650da78c26ba2258bc22a925e4362b00b0b8354be1277365b6a45b1e3074854->leave($__internal_4650da78c26ba2258bc22a925e4362b00b0b8354be1277365b6a45b1e3074854_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 50,  172 => 47,  169 => 46,  165 => 45,  160 => 42,  145 => 39,  142 => 38,  138 => 37,  133 => 34,  122 => 31,  119 => 30,  115 => 29,  111 => 27,  102 => 26,  89 => 21,  80 => 18,  74 => 15,  70 => 14,  66 => 12,  62 => 11,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

    <h1>Liste des thèmes</h1>

    <!--<h2>{{ message }}</h2>-->

    <table class=\"table\">
        <tbody>
        {% for theme in themeList %}
            <tr>
                <td>
                    <a href=\"{{ path('theme_details', {'id': theme.id}) }}\">
                        {{ theme.name }}
                    </a>
                </td>
                <td>{{ theme.posts | length }} posts</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

{% block aside %}
    <h3>Les derniers articles</h3>
    <ul class=\"list-group\">
        {%  for post in lastPosts %}
            <li class=\"list-group-item\">
                <a href=\"{{ path('post_details', {slug:post.slug}) }}\">{{ post.title }}</a>
            </li>
        {%  endfor %}
    </ul>
    <h3>Les auteurs</h3>
    <ul class=\"list-group\">
        {%  for author in authorSummary %}
            <li class=\"list-group-item\">
                <a href=\"{{ path('post_par_auteur', {id:author.id}) }}\">{{ author.firstName }} {{ author.name | upper }} ({{ author.numberOfPosts }})</a>
            </li>
        {%  endfor %}
    </ul>
    <h3>Historique</h3>
    <ul class=\"list-group\">
        {%  for item in yearSummary %}
            <li class=\"list-group-item\">
                <a href=\"{{ path('post_par_annee', {year:item.yearPublished}) }}\">{{ item.yearPublished }} ({{ item.numberOfPosts }})</a>
            </li>
        {%  endfor %}
    </ul>
{% endblock %}


", "default/index.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\default\\index.html.twig");
    }
}
