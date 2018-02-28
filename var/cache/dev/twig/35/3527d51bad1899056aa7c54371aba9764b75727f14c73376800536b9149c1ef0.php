<?php

/* default/posts_by_author.html.twig */
class __TwigTemplate_12e328feb3b687265320da571e1aaf2dc1d2bdd0c28edf36481911425a441428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/posts_by_author.html.twig", 1);
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
        $__internal_78400151f43c9a5a40e350c06904e68ac7e77578322630af90ade61d5f5e63d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78400151f43c9a5a40e350c06904e68ac7e77578322630af90ade61d5f5e63d3->enter($__internal_78400151f43c9a5a40e350c06904e68ac7e77578322630af90ade61d5f5e63d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/posts_by_author.html.twig"));

        $__internal_5ce9547a5254af035e5b0bcd1975e4626e081b650dba4182ef24794172480c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce9547a5254af035e5b0bcd1975e4626e081b650dba4182ef24794172480c87->enter($__internal_5ce9547a5254af035e5b0bcd1975e4626e081b650dba4182ef24794172480c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/posts_by_author.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78400151f43c9a5a40e350c06904e68ac7e77578322630af90ade61d5f5e63d3->leave($__internal_78400151f43c9a5a40e350c06904e68ac7e77578322630af90ade61d5f5e63d3_prof);

        
        $__internal_5ce9547a5254af035e5b0bcd1975e4626e081b650dba4182ef24794172480c87->leave($__internal_5ce9547a5254af035e5b0bcd1975e4626e081b650dba4182ef24794172480c87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f037046a4f46e96fbad56f8fb512e18fa8f477c9e1980a45cce438a99969a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f037046a4f46e96fbad56f8fb512e18fa8f477c9e1980a45cce438a99969a68->enter($__internal_7f037046a4f46e96fbad56f8fb512e18fa8f477c9e1980a45cce438a99969a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baad082e265ee6eb37b22b61daf46b1dc7eacd6dca49b4e8bafb727026709171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad082e265ee6eb37b22b61daf46b1dc7eacd6dca49b4e8bafb727026709171->enter($__internal_baad082e265ee6eb37b22b61daf46b1dc7eacd6dca49b4e8bafb727026709171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Liste des articles de ";
        echo twig_escape_filter($this->env, ($context["condition"] ?? $this->getContext($context, "condition")), "html", null, true);
        echo "</h2>
    <table class=\"table\">
        <tr>
            <th>Titre</th>
            <th>Thème</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postList"] ?? $this->getContext($context, "postList")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "            <tr>
                <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_details", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></td>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theme_details", array("id" => $this->getAttribute($this->getAttribute($context["post"], "theme", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "theme", array()), "name", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </table>
";
        
        $__internal_baad082e265ee6eb37b22b61daf46b1dc7eacd6dca49b4e8bafb727026709171->leave($__internal_baad082e265ee6eb37b22b61daf46b1dc7eacd6dca49b4e8bafb727026709171_prof);

        
        $__internal_7f037046a4f46e96fbad56f8fb512e18fa8f477c9e1980a45cce438a99969a68->leave($__internal_7f037046a4f46e96fbad56f8fb512e18fa8f477c9e1980a45cce438a99969a68_prof);

    }

    // line 19
    public function block_aside($context, array $blocks = array())
    {
        $__internal_95cada8049ce24a8ccefb227fc80e016dd1c4608bb5a5149ec6db84364b4e129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cada8049ce24a8ccefb227fc80e016dd1c4608bb5a5149ec6db84364b4e129->enter($__internal_95cada8049ce24a8ccefb227fc80e016dd1c4608bb5a5149ec6db84364b4e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_94419bab8c6a2f42e9930bb642e7f3d6053d3aed667f4fd8c781afef5df8f55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94419bab8c6a2f42e9930bb642e7f3d6053d3aed667f4fd8c781afef5df8f55a->enter($__internal_94419bab8c6a2f42e9930bb642e7f3d6053d3aed667f4fd8c781afef5df8f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 20
        echo "
";
        
        $__internal_94419bab8c6a2f42e9930bb642e7f3d6053d3aed667f4fd8c781afef5df8f55a->leave($__internal_94419bab8c6a2f42e9930bb642e7f3d6053d3aed667f4fd8c781afef5df8f55a_prof);

        
        $__internal_95cada8049ce24a8ccefb227fc80e016dd1c4608bb5a5149ec6db84364b4e129->leave($__internal_95cada8049ce24a8ccefb227fc80e016dd1c4608bb5a5149ec6db84364b4e129_prof);

    }

    public function getTemplateName()
    {
        return "default/posts_by_author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  95 => 19,  84 => 16,  73 => 13,  67 => 12,  64 => 11,  60 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
    <h2>Liste des articles de {{ condition }}</h2>
    <table class=\"table\">
        <tr>
            <th>Titre</th>
            <th>Thème</th>
        </tr>
        {% for post in postList %}
            <tr>
                <td><a href=\"{{ path('post_details', {'slug': post.slug}) }}\">{{ post.title }}</a></td>
                <td><a href=\"{{ path('theme_details', {'id': post.theme.id}) }}\">{{ post.theme.name }}</a></td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block aside %}

{% endblock %}

", "default/posts_by_author.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\default\\posts_by_author.html.twig");
    }
}
