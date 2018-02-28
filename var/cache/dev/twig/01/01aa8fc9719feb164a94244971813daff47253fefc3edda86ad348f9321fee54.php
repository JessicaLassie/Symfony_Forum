<?php

/* default/register_author.html.twig */
class __TwigTemplate_506abcc41a8e5dc7060be2edc467d1800e2998162ba00f33c1df839beec3b8db extends Twig_Template
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
        $__internal_a231f3863eed2ab6eb6c77068b326634f7e54ae2ef2ba9d1b3cee8db315f11a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a231f3863eed2ab6eb6c77068b326634f7e54ae2ef2ba9d1b3cee8db315f11a8->enter($__internal_a231f3863eed2ab6eb6c77068b326634f7e54ae2ef2ba9d1b3cee8db315f11a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $__internal_5c2223fd4f860b058c6a4a7fad571c205f9469a796329c5d11ef28921d037eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2223fd4f860b058c6a4a7fad571c205f9469a796329c5d11ef28921d037eb3->enter($__internal_5c2223fd4f860b058c6a4a7fad571c205f9469a796329c5d11ef28921d037eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register_author.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a231f3863eed2ab6eb6c77068b326634f7e54ae2ef2ba9d1b3cee8db315f11a8->leave($__internal_a231f3863eed2ab6eb6c77068b326634f7e54ae2ef2ba9d1b3cee8db315f11a8_prof);

        
        $__internal_5c2223fd4f860b058c6a4a7fad571c205f9469a796329c5d11ef28921d037eb3->leave($__internal_5c2223fd4f860b058c6a4a7fad571c205f9469a796329c5d11ef28921d037eb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28b62d6f355bf7e60629f8ca8ef087408e1df76513fe0f199ac64e7bbc4c5ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b62d6f355bf7e60629f8ca8ef087408e1df76513fe0f199ac64e7bbc4c5ffc->enter($__internal_28b62d6f355bf7e60629f8ca8ef087408e1df76513fe0f199ac64e7bbc4c5ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd76fefa9d09172740b04949dfc0d95104d229016140af91dd077b2398afc477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd76fefa9d09172740b04949dfc0d95104d229016140af91dd077b2398afc477->enter($__internal_bd76fefa9d09172740b04949dfc0d95104d229016140af91dd077b2398afc477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-5\">
        <h2>Inscription</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["newInscriptionForm"] ?? $this->getContext($context, "newInscriptionForm")), 'form');
        echo "
    </div>
";
        
        $__internal_bd76fefa9d09172740b04949dfc0d95104d229016140af91dd077b2398afc477->leave($__internal_bd76fefa9d09172740b04949dfc0d95104d229016140af91dd077b2398afc477_prof);

        
        $__internal_28b62d6f355bf7e60629f8ca8ef087408e1df76513fe0f199ac64e7bbc4c5ffc->leave($__internal_28b62d6f355bf7e60629f8ca8ef087408e1df76513fe0f199ac64e7bbc4c5ffc_prof);

    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        $__internal_f1f44c8270a70cf197c895fbea4560b9f5dba2574bcb8e38acd9d5def0b9e0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f44c8270a70cf197c895fbea4560b9f5dba2574bcb8e38acd9d5def0b9e0c3->enter($__internal_f1f44c8270a70cf197c895fbea4560b9f5dba2574bcb8e38acd9d5def0b9e0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_09964b9f33d37e079845a4dbfdc5f8fa63c0dd1c891a5ff7908582932291d007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09964b9f33d37e079845a4dbfdc5f8fa63c0dd1c891a5ff7908582932291d007->enter($__internal_09964b9f33d37e079845a4dbfdc5f8fa63c0dd1c891a5ff7908582932291d007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 11
        echo "
";
        
        $__internal_09964b9f33d37e079845a4dbfdc5f8fa63c0dd1c891a5ff7908582932291d007->leave($__internal_09964b9f33d37e079845a4dbfdc5f8fa63c0dd1c891a5ff7908582932291d007_prof);

        
        $__internal_f1f44c8270a70cf197c895fbea4560b9f5dba2574bcb8e38acd9d5def0b9e0c3->leave($__internal_f1f44c8270a70cf197c895fbea4560b9f5dba2574bcb8e38acd9d5def0b9e0c3_prof);

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
