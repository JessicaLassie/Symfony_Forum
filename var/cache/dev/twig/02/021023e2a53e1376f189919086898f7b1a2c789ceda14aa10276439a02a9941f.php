<?php

/* post/details.html.twig */
class __TwigTemplate_94536cf9e30a0dc201fab7e2a686d77797bbea90b7f7f368b4d11667bbc0656a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4054e3c2d0cdba53e1de9729251e459aff1fe660c173311ebe7dec1ec158d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4054e3c2d0cdba53e1de9729251e459aff1fe660c173311ebe7dec1ec158d33->enter($__internal_d4054e3c2d0cdba53e1de9729251e459aff1fe660c173311ebe7dec1ec158d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/details.html.twig"));

        $__internal_bea027a7dd38bcc408aee636c92ec8c14eedf4e1bc56265a098a2533919ed101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea027a7dd38bcc408aee636c92ec8c14eedf4e1bc56265a098a2533919ed101->enter($__internal_bea027a7dd38bcc408aee636c92ec8c14eedf4e1bc56265a098a2533919ed101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4054e3c2d0cdba53e1de9729251e459aff1fe660c173311ebe7dec1ec158d33->leave($__internal_d4054e3c2d0cdba53e1de9729251e459aff1fe660c173311ebe7dec1ec158d33_prof);

        
        $__internal_bea027a7dd38bcc408aee636c92ec8c14eedf4e1bc56265a098a2533919ed101->leave($__internal_bea027a7dd38bcc408aee636c92ec8c14eedf4e1bc56265a098a2533919ed101_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97539bc58283e9ed5d9a3891cbd1a44904f892e0dfb8d40969288fe47ea1938c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97539bc58283e9ed5d9a3891cbd1a44904f892e0dfb8d40969288fe47ea1938c->enter($__internal_97539bc58283e9ed5d9a3891cbd1a44904f892e0dfb8d40969288fe47ea1938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4330c93f8bfc7f564ec1d8f0697b04d2c49dd2a84b4078fdac2076f063b4d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4330c93f8bfc7f564ec1d8f0697b04d2c49dd2a84b4078fdac2076f063b4d59->enter($__internal_f4330c93f8bfc7f564ec1d8f0697b04d2c49dd2a84b4078fdac2076f063b4d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Liste des thèmes</a>
        </li>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theme_details", array("id" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "theme", array()), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "theme", array()), "name", array()), "html", null, true);
        echo "
            </a>
        </li>

    </ol>

    <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p>Par ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "email", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "</p>

    <p>";
        // line 20
        echo $this->env->getExtension('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension')->purify($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "text", array()));
        echo "</p>

    ";
        // line 22
        if ($this->getAttribute(($context["post"] ?? null), "image", array(), "any", true, true)) {
            // line 23
            echo "        <img src=\"/images/post/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", array()), "html", null, true);
            echo "\" width=\"200px\">
    ";
        }
        // line 25
        echo "
    <hr>
    <h2>Les réponses (";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "answers", array())), "html", null, true);
        echo ")</h2>

    <div class=\"col-md-8 col-md-offset-2\">
        <h3>Nouvelle réponse</h3>

        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["newAnswerForm"] ?? $this->getContext($context, "newAnswerForm")), 'form');
        echo "
    </div>

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["answerList"] ?? $this->getContext($context, "answerList")));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 36
            echo "        <div class=\"col-md-8 col-md-offset-2\">
            <p>le ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["answer"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "author", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "text", array()), "html", null, true);
            echo "</p>
            <hr>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        
        $__internal_f4330c93f8bfc7f564ec1d8f0697b04d2c49dd2a84b4078fdac2076f063b4d59->leave($__internal_f4330c93f8bfc7f564ec1d8f0697b04d2c49dd2a84b4078fdac2076f063b4d59_prof);

        
        $__internal_97539bc58283e9ed5d9a3891cbd1a44904f892e0dfb8d40969288fe47ea1938c->leave($__internal_97539bc58283e9ed5d9a3891cbd1a44904f892e0dfb8d40969288fe47ea1938c_prof);

    }

    public function getTemplateName()
    {
        return "post/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  130 => 38,  124 => 37,  121 => 36,  117 => 35,  111 => 32,  103 => 27,  99 => 25,  91 => 23,  89 => 22,  84 => 20,  77 => 18,  72 => 16,  63 => 10,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <ol class=\"breadcrumb\">
        <li>
            <a href=\"{{ path('homepage') }}\">Liste des thèmes</a>
        </li>
        <li><a href=\"{{ path('theme_details', {'id': post.theme.id}) }}\">
                {{ post.theme.name }}
            </a>
        </li>

    </ol>

    <h1>{{ post.title }}</h1>

    <p>Par {{ post.author.email }} le {{ post.createdAt | date('d/m/Y') }}</p>

    <p>{{ post.text | purify }}</p>

    {%  if post.image is defined %}
        <img src=\"/images/post/{{ post.image }}\" alt=\"{{ post.image }}\" width=\"200px\">
    {% endif %}

    <hr>
    <h2>Les réponses ({{ post.answers | length }})</h2>

    <div class=\"col-md-8 col-md-offset-2\">
        <h3>Nouvelle réponse</h3>

        {{ form(newAnswerForm) }}
    </div>

    {% for answer in answerList %}
        <div class=\"col-md-8 col-md-offset-2\">
            <p>le {{ answer.createdAt | date('d/m/Y') }} par {{ answer.author }}</p>
            <p>{{ answer.text }}</p>
            <hr>
        </div>
    {% endfor %}

{% endblock %}", "post/details.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\post\\details.html.twig");
    }
}
