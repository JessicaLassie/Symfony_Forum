<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_44dfa639087c7758d3a678d65577b05363ed18a148794891b622e5440377c7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60f10b76af413b24ac6d89b0d76df4edc0bf75665d315578b857c4f08df79400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f10b76af413b24ac6d89b0d76df4edc0bf75665d315578b857c4f08df79400->enter($__internal_60f10b76af413b24ac6d89b0d76df4edc0bf75665d315578b857c4f08df79400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_156fc53aaf0892a62428541b96f9063234d63bc5493a2fce58eca751e9c007bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156fc53aaf0892a62428541b96f9063234d63bc5493a2fce58eca751e9c007bd->enter($__internal_156fc53aaf0892a62428541b96f9063234d63bc5493a2fce58eca751e9c007bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f10b76af413b24ac6d89b0d76df4edc0bf75665d315578b857c4f08df79400->leave($__internal_60f10b76af413b24ac6d89b0d76df4edc0bf75665d315578b857c4f08df79400_prof);

        
        $__internal_156fc53aaf0892a62428541b96f9063234d63bc5493a2fce58eca751e9c007bd->leave($__internal_156fc53aaf0892a62428541b96f9063234d63bc5493a2fce58eca751e9c007bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c4e373ce9dbc1507a70db5cd47fa7a4d463ce68bbbfd545a80b2e782b5350be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4e373ce9dbc1507a70db5cd47fa7a4d463ce68bbbfd545a80b2e782b5350be->enter($__internal_5c4e373ce9dbc1507a70db5cd47fa7a4d463ce68bbbfd545a80b2e782b5350be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa7421e411d86e413c8473eaa726d5521e3da679d5bdff7e0182bba8932eb46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7421e411d86e413c8473eaa726d5521e3da679d5bdff7e0182bba8932eb46f->enter($__internal_fa7421e411d86e413c8473eaa726d5521e3da679d5bdff7e0182bba8932eb46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa7421e411d86e413c8473eaa726d5521e3da679d5bdff7e0182bba8932eb46f->leave($__internal_fa7421e411d86e413c8473eaa726d5521e3da679d5bdff7e0182bba8932eb46f_prof);

        
        $__internal_5c4e373ce9dbc1507a70db5cd47fa7a4d463ce68bbbfd545a80b2e782b5350be->leave($__internal_5c4e373ce9dbc1507a70db5cd47fa7a4d463ce68bbbfd545a80b2e782b5350be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d52caef2dab674a9ad17ccd352232a909cb416d23784d622b48103e869e3870d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52caef2dab674a9ad17ccd352232a909cb416d23784d622b48103e869e3870d->enter($__internal_d52caef2dab674a9ad17ccd352232a909cb416d23784d622b48103e869e3870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d67918c941f87a19a87624e2f63e14a052bf2c95c89658110e47cdef78708f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67918c941f87a19a87624e2f63e14a052bf2c95c89658110e47cdef78708f17->enter($__internal_d67918c941f87a19a87624e2f63e14a052bf2c95c89658110e47cdef78708f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d67918c941f87a19a87624e2f63e14a052bf2c95c89658110e47cdef78708f17->leave($__internal_d67918c941f87a19a87624e2f63e14a052bf2c95c89658110e47cdef78708f17_prof);

        
        $__internal_d52caef2dab674a9ad17ccd352232a909cb416d23784d622b48103e869e3870d->leave($__internal_d52caef2dab674a9ad17ccd352232a909cb416d23784d622b48103e869e3870d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97401e49d69e70e29624e0c49e292975d6ae0bf07e43f24802a5600ac64d40f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97401e49d69e70e29624e0c49e292975d6ae0bf07e43f24802a5600ac64d40f7->enter($__internal_97401e49d69e70e29624e0c49e292975d6ae0bf07e43f24802a5600ac64d40f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_014198b011af4e1876fcb43450c5cf3915627a3d32301db8f491f516a4164294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014198b011af4e1876fcb43450c5cf3915627a3d32301db8f491f516a4164294->enter($__internal_014198b011af4e1876fcb43450c5cf3915627a3d32301db8f491f516a4164294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_014198b011af4e1876fcb43450c5cf3915627a3d32301db8f491f516a4164294->leave($__internal_014198b011af4e1876fcb43450c5cf3915627a3d32301db8f491f516a4164294_prof);

        
        $__internal_97401e49d69e70e29624e0c49e292975d6ae0bf07e43f24802a5600ac64d40f7->leave($__internal_97401e49d69e70e29624e0c49e292975d6ae0bf07e43f24802a5600ac64d40f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
