<?php

/* default/login-form.html.twig */
class __TwigTemplate_91c621687804288a5e1e857b44f41df877ba9598b054445cf50a3bfec144a5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login-form.html.twig", 1);
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
        $__internal_eae67eb76ed800f6ed00db0b201893825919722e86e1e3980118e0e1a6542950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae67eb76ed800f6ed00db0b201893825919722e86e1e3980118e0e1a6542950->enter($__internal_eae67eb76ed800f6ed00db0b201893825919722e86e1e3980118e0e1a6542950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login-form.html.twig"));

        $__internal_e805e9e82cef84b6bde1a7f17ef6189bac3400e8fd0f1192661a3085c2eca23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e805e9e82cef84b6bde1a7f17ef6189bac3400e8fd0f1192661a3085c2eca23e->enter($__internal_e805e9e82cef84b6bde1a7f17ef6189bac3400e8fd0f1192661a3085c2eca23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login-form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae67eb76ed800f6ed00db0b201893825919722e86e1e3980118e0e1a6542950->leave($__internal_eae67eb76ed800f6ed00db0b201893825919722e86e1e3980118e0e1a6542950_prof);

        
        $__internal_e805e9e82cef84b6bde1a7f17ef6189bac3400e8fd0f1192661a3085c2eca23e->leave($__internal_e805e9e82cef84b6bde1a7f17ef6189bac3400e8fd0f1192661a3085c2eca23e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e89f743276437e2f85ba89c08580077d70669fa8e83fe1a1d0f4eaf52a1c357f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89f743276437e2f85ba89c08580077d70669fa8e83fe1a1d0f4eaf52a1c357f->enter($__internal_e89f743276437e2f85ba89c08580077d70669fa8e83fe1a1d0f4eaf52a1c357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bcb48ce5769d43a9a00d8c6389e1219e4841ba75ad5a883e81cbb889671ee8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcb48ce5769d43a9a00d8c6389e1219e4841ba75ad5a883e81cbb889671ee8a->enter($__internal_5bcb48ce5769d43a9a00d8c6389e1219e4841ba75ad5a883e81cbb889671ee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-5\">
        <h2>Se connecter</h2>
        ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 11
        echo "        <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\">
            <div class=\"form-group\">
                <label>Login</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Tapez votre login\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["userName"] ?? $this->getContext($context, "userName")), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" class=\"form-control\" placeholder=\"Tapez votre mot de passe\" name=\"_password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

";
        
        $__internal_5bcb48ce5769d43a9a00d8c6389e1219e4841ba75ad5a883e81cbb889671ee8a->leave($__internal_5bcb48ce5769d43a9a00d8c6389e1219e4841ba75ad5a883e81cbb889671ee8a_prof);

        
        $__internal_e89f743276437e2f85ba89c08580077d70669fa8e83fe1a1d0f4eaf52a1c357f->leave($__internal_e89f743276437e2f85ba89c08580077d70669fa8e83fe1a1d0f4eaf52a1c357f_prof);

    }

    // line 26
    public function block_aside($context, array $blocks = array())
    {
        $__internal_c6f08b09680cb815435b4d405ff3d1012f9e7f465b1bbf418bb12033d42b641c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f08b09680cb815435b4d405ff3d1012f9e7f465b1bbf418bb12033d42b641c->enter($__internal_c6f08b09680cb815435b4d405ff3d1012f9e7f465b1bbf418bb12033d42b641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_89c56b940793d2442fa39d85685730f406f1dd9549ef578c53d57ca5e97ace89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c56b940793d2442fa39d85685730f406f1dd9549ef578c53d57ca5e97ace89->enter($__internal_89c56b940793d2442fa39d85685730f406f1dd9549ef578c53d57ca5e97ace89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 27
        echo "
";
        
        $__internal_89c56b940793d2442fa39d85685730f406f1dd9549ef578c53d57ca5e97ace89->leave($__internal_89c56b940793d2442fa39d85685730f406f1dd9549ef578c53d57ca5e97ace89_prof);

        
        $__internal_c6f08b09680cb815435b4d405ff3d1012f9e7f465b1bbf418bb12033d42b641c->leave($__internal_c6f08b09680cb815435b4d405ff3d1012f9e7f465b1bbf418bb12033d42b641c_prof);

    }

    public function getTemplateName()
    {
        return "default/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  93 => 26,  72 => 14,  65 => 11,  59 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
        <h2>Se connecter</h2>
        {%  if error %}
            <div class=\"alert alert-danger\">
                {{ error.message | trans }}
            </div>
        {% endif %}
        <form method=\"post\" action=\"{{ action }}\">
            <div class=\"form-group\">
                <label>Login</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Tapez votre login\" name=\"_username\" value=\"{{ userName }}\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" class=\"form-control\" placeholder=\"Tapez votre mot de passe\" name=\"_password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

{% endblock %}

{% block aside %}

{% endblock %}

", "default/login-form.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\default\\login-form.html.twig");
    }
}
