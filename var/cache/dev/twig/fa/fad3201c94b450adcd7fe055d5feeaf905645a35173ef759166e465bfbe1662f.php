<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ae592d50ce56330bd7e7446aeedd3878e53a2f9d95f482c10019ddc618be6566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22d89e724b6402cd916315027e9161ec73726a0abb564b0f12db00907312703c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d89e724b6402cd916315027e9161ec73726a0abb564b0f12db00907312703c->enter($__internal_22d89e724b6402cd916315027e9161ec73726a0abb564b0f12db00907312703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6040bcc2b85ed40fc767ea479bd86c02fdc0059b3de276d4c2fac19a9ee6cbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6040bcc2b85ed40fc767ea479bd86c02fdc0059b3de276d4c2fac19a9ee6cbc7->enter($__internal_6040bcc2b85ed40fc767ea479bd86c02fdc0059b3de276d4c2fac19a9ee6cbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_22d89e724b6402cd916315027e9161ec73726a0abb564b0f12db00907312703c->leave($__internal_22d89e724b6402cd916315027e9161ec73726a0abb564b0f12db00907312703c_prof);

        
        $__internal_6040bcc2b85ed40fc767ea479bd86c02fdc0059b3de276d4c2fac19a9ee6cbc7->leave($__internal_6040bcc2b85ed40fc767ea479bd86c02fdc0059b3de276d4c2fac19a9ee6cbc7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
