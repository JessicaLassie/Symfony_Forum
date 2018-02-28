<?php

/* default/register_author.html.twig */
class __TwigTemplate_7f659de8b97e91c6c6823b31ef6a2fe6baf776b85f7d49e98347a13b37760d9d extends Twig_Template
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
        $__internal_368151dde2bfcb4715e9b7696f4524d8c5a1ff850a36fc133959046ebd34d38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368151dde2bfcb4715e9b7696f4524d8c5a1ff850a36fc133959046ebd34d38a->enter($__internal_368151dde2bfcb4715e9b7696f4524d8c5a1ff850a36fc133959046ebd34d38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $__internal_9cc90d949ebf63d77e5fadef20b877155e3e2d4330e187f5e5de55651271d193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc90d949ebf63d77e5fadef20b877155e3e2d4330e187f5e5de55651271d193->enter($__internal_9cc90d949ebf63d77e5fadef20b877155e3e2d4330e187f5e5de55651271d193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368151dde2bfcb4715e9b7696f4524d8c5a1ff850a36fc133959046ebd34d38a->leave($__internal_368151dde2bfcb4715e9b7696f4524d8c5a1ff850a36fc133959046ebd34d38a_prof);

        
        $__internal_9cc90d949ebf63d77e5fadef20b877155e3e2d4330e187f5e5de55651271d193->leave($__internal_9cc90d949ebf63d77e5fadef20b877155e3e2d4330e187f5e5de55651271d193_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4801e33eab4457106ffa98571b0f5b9726732829e7888c483a62e586dceb4d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4801e33eab4457106ffa98571b0f5b9726732829e7888c483a62e586dceb4d1b->enter($__internal_4801e33eab4457106ffa98571b0f5b9726732829e7888c483a62e586dceb4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78062ae9aa42f469b02cd9ddd14d4fb69b511679f449cd1abf37bc525f43c0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78062ae9aa42f469b02cd9ddd14d4fb69b511679f449cd1abf37bc525f43c0cb->enter($__internal_78062ae9aa42f469b02cd9ddd14d4fb69b511679f449cd1abf37bc525f43c0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-5\">
        <h2>Inscription</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["newInscriptionForm"] ?? $this->getContext($context, "newInscriptionForm")), 'form');
        echo "
    </div>
";
        
        $__internal_78062ae9aa42f469b02cd9ddd14d4fb69b511679f449cd1abf37bc525f43c0cb->leave($__internal_78062ae9aa42f469b02cd9ddd14d4fb69b511679f449cd1abf37bc525f43c0cb_prof);

        
        $__internal_4801e33eab4457106ffa98571b0f5b9726732829e7888c483a62e586dceb4d1b->leave($__internal_4801e33eab4457106ffa98571b0f5b9726732829e7888c483a62e586dceb4d1b_prof);

    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        $__internal_b739a2f7e211cd0f5698b90124e98d4c42e12464b99d8d84e985759b3f3b6445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b739a2f7e211cd0f5698b90124e98d4c42e12464b99d8d84e985759b3f3b6445->enter($__internal_b739a2f7e211cd0f5698b90124e98d4c42e12464b99d8d84e985759b3f3b6445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_0331d44b2fd05526f352e3637c780503efb76c93cc4ada5a600eb51288cbc9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0331d44b2fd05526f352e3637c780503efb76c93cc4ada5a600eb51288cbc9a1->enter($__internal_0331d44b2fd05526f352e3637c780503efb76c93cc4ada5a600eb51288cbc9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 11
        echo "
";
        
        $__internal_0331d44b2fd05526f352e3637c780503efb76c93cc4ada5a600eb51288cbc9a1->leave($__internal_0331d44b2fd05526f352e3637c780503efb76c93cc4ada5a600eb51288cbc9a1_prof);

        
        $__internal_b739a2f7e211cd0f5698b90124e98d4c42e12464b99d8d84e985759b3f3b6445->leave($__internal_b739a2f7e211cd0f5698b90124e98d4c42e12464b99d8d84e985759b3f3b6445_prof);

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
