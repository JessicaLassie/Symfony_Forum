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
        $__internal_9f68e7c8bc1783bccaa34e86301cc52d903c8a2d324950040062718d76ac4cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f68e7c8bc1783bccaa34e86301cc52d903c8a2d324950040062718d76ac4cf0->enter($__internal_9f68e7c8bc1783bccaa34e86301cc52d903c8a2d324950040062718d76ac4cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_81920fa8bb100f902e9338fac143a55baf2f017d8b4c35e13dbdfb4bd66c0d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81920fa8bb100f902e9338fac143a55baf2f017d8b4c35e13dbdfb4bd66c0d80->enter($__internal_81920fa8bb100f902e9338fac143a55baf2f017d8b4c35e13dbdfb4bd66c0d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f68e7c8bc1783bccaa34e86301cc52d903c8a2d324950040062718d76ac4cf0->leave($__internal_9f68e7c8bc1783bccaa34e86301cc52d903c8a2d324950040062718d76ac4cf0_prof);

        
        $__internal_81920fa8bb100f902e9338fac143a55baf2f017d8b4c35e13dbdfb4bd66c0d80->leave($__internal_81920fa8bb100f902e9338fac143a55baf2f017d8b4c35e13dbdfb4bd66c0d80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a633e54d0ec7ad9cce8ae8f23fc867c71cd90388517cc17982e04bb124d7e02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a633e54d0ec7ad9cce8ae8f23fc867c71cd90388517cc17982e04bb124d7e02a->enter($__internal_a633e54d0ec7ad9cce8ae8f23fc867c71cd90388517cc17982e04bb124d7e02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbcf5366157e35208b2d721f3dbe43b89fc52706a73d1aba5fc86904cbc75fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcf5366157e35208b2d721f3dbe43b89fc52706a73d1aba5fc86904cbc75fd8->enter($__internal_dbcf5366157e35208b2d721f3dbe43b89fc52706a73d1aba5fc86904cbc75fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Liste des thèmes</h1>

    <h2>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</h2>

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
        
        $__internal_dbcf5366157e35208b2d721f3dbe43b89fc52706a73d1aba5fc86904cbc75fd8->leave($__internal_dbcf5366157e35208b2d721f3dbe43b89fc52706a73d1aba5fc86904cbc75fd8_prof);

        
        $__internal_a633e54d0ec7ad9cce8ae8f23fc867c71cd90388517cc17982e04bb124d7e02a->leave($__internal_a633e54d0ec7ad9cce8ae8f23fc867c71cd90388517cc17982e04bb124d7e02a_prof);

    }

    // line 26
    public function block_aside($context, array $blocks = array())
    {
        $__internal_b21c9f14f2b0c9ee41df99f0cad0c6085017cf9297463672ee2906d2f154739f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21c9f14f2b0c9ee41df99f0cad0c6085017cf9297463672ee2906d2f154739f->enter($__internal_b21c9f14f2b0c9ee41df99f0cad0c6085017cf9297463672ee2906d2f154739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_37ee991017f047fa912e2617c93b3fd33da77fee7a9bdf790b6e7c4de096954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ee991017f047fa912e2617c93b3fd33da77fee7a9bdf790b6e7c4de096954b->enter($__internal_37ee991017f047fa912e2617c93b3fd33da77fee7a9bdf790b6e7c4de096954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_37ee991017f047fa912e2617c93b3fd33da77fee7a9bdf790b6e7c4de096954b->leave($__internal_37ee991017f047fa912e2617c93b3fd33da77fee7a9bdf790b6e7c4de096954b_prof);

        
        $__internal_b21c9f14f2b0c9ee41df99f0cad0c6085017cf9297463672ee2906d2f154739f->leave($__internal_b21c9f14f2b0c9ee41df99f0cad0c6085017cf9297463672ee2906d2f154739f_prof);

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

    <h2>{{ message }}</h2>

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
