<?php

/* default/register_author.html.twig */
class __TwigTemplate_7835f1c16b3a7c16527f75bc24fb71fab1ac7481e849168cd270209909f929c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/register_author.html.twig", 1);
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
        $__internal_a0508da58b196b3117f8d5561559b04379de3fd39e65ed28a43dd815065dd881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0508da58b196b3117f8d5561559b04379de3fd39e65ed28a43dd815065dd881->enter($__internal_a0508da58b196b3117f8d5561559b04379de3fd39e65ed28a43dd815065dd881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $__internal_337376cd9099d2d52acbf80d4928223dd2ab4a270d657482295b380caba493cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337376cd9099d2d52acbf80d4928223dd2ab4a270d657482295b380caba493cc->enter($__internal_337376cd9099d2d52acbf80d4928223dd2ab4a270d657482295b380caba493cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0508da58b196b3117f8d5561559b04379de3fd39e65ed28a43dd815065dd881->leave($__internal_a0508da58b196b3117f8d5561559b04379de3fd39e65ed28a43dd815065dd881_prof);

        
        $__internal_337376cd9099d2d52acbf80d4928223dd2ab4a270d657482295b380caba493cc->leave($__internal_337376cd9099d2d52acbf80d4928223dd2ab4a270d657482295b380caba493cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d43d2f413ce33532a9ce46e6e22023428795797ebdf5534404eb908a06b75dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43d2f413ce33532a9ce46e6e22023428795797ebdf5534404eb908a06b75dda->enter($__internal_d43d2f413ce33532a9ce46e6e22023428795797ebdf5534404eb908a06b75dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36f175d7e10e9be61cf53fd5d92b3ad1f16569d6c419743b0d1ad4134725694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f175d7e10e9be61cf53fd5d92b3ad1f16569d6c419743b0d1ad4134725694f->enter($__internal_36f175d7e10e9be61cf53fd5d92b3ad1f16569d6c419743b0d1ad4134725694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-5\">
        <h2>Inscription</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["newInscriptionForm"] ?? $this->getContext($context, "newInscriptionForm")), 'form');
        echo "
    </div>
";
        
        $__internal_36f175d7e10e9be61cf53fd5d92b3ad1f16569d6c419743b0d1ad4134725694f->leave($__internal_36f175d7e10e9be61cf53fd5d92b3ad1f16569d6c419743b0d1ad4134725694f_prof);

        
        $__internal_d43d2f413ce33532a9ce46e6e22023428795797ebdf5534404eb908a06b75dda->leave($__internal_d43d2f413ce33532a9ce46e6e22023428795797ebdf5534404eb908a06b75dda_prof);

    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        $__internal_086966ce1bf89c420e1fe59bd830b423e15617a50e81349e8b999fa5c1f6f70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086966ce1bf89c420e1fe59bd830b423e15617a50e81349e8b999fa5c1f6f70d->enter($__internal_086966ce1bf89c420e1fe59bd830b423e15617a50e81349e8b999fa5c1f6f70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_ee4b7a72834abe9d344bf5755bc5bf77ffb9f4b1a84a0e1967a01abe6bb209a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4b7a72834abe9d344bf5755bc5bf77ffb9f4b1a84a0e1967a01abe6bb209a9->enter($__internal_ee4b7a72834abe9d344bf5755bc5bf77ffb9f4b1a84a0e1967a01abe6bb209a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 11
        echo "
";
        
        $__internal_ee4b7a72834abe9d344bf5755bc5bf77ffb9f4b1a84a0e1967a01abe6bb209a9->leave($__internal_ee4b7a72834abe9d344bf5755bc5bf77ffb9f4b1a84a0e1967a01abe6bb209a9_prof);

        
        $__internal_086966ce1bf89c420e1fe59bd830b423e15617a50e81349e8b999fa5c1f6f70d->leave($__internal_086966ce1bf89c420e1fe59bd830b423e15617a50e81349e8b999fa5c1f6f70d_prof);

    }

    public function getTemplateName()
    {
        return "default/register_author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  67 => 10,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"col-md-5\">
        <h2>Inscription</h2>
        {{ form(newInscriptionForm) }}
    </div>
{% endblock %}

{% block aside %}

{% endblock %}

", "default/register_author.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\default\\register_author.html.twig");
    }
}
