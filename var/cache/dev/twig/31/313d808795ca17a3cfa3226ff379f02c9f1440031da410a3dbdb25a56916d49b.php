<?php

/* _navbar.html.twig */
class __TwigTemplate_4a86052f3927440427069b4cba57e2e7c679619ad0a21128b8d571e2101c4555 extends Twig_Template
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
        $__internal_55b045fd2768258019540bf898f1f99661f050a4f5235b0cf8cdb2f1b3922ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b045fd2768258019540bf898f1f99661f050a4f5235b0cf8cdb2f1b3922ab4->enter($__internal_55b045fd2768258019540bf898f1f99661f050a4f5235b0cf8cdb2f1b3922ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_787272e30a0cd7329bd0e62428469c129ed39f350f5d97929d06c69cde4d3b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787272e30a0cd7329bd0e62428469c129ed39f350f5d97929d06c69cde4d3b83->enter($__internal_787272e30a0cd7329bd0e62428469c129ed39f350f5d97929d06c69cde4d3b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Symfony</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Forum</a></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 22
            echo "                    <li class=\"navbar-text\" style=\"margin-left: 15px\">
                        Bonjour ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array())), "html", null, true);
            echo "
                    </li>
                    <li>
                        <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_logout");
            echo "\">Déconnexion</a>
                    </li>
                ";
        } else {
            // line 29
            echo "                    <li>
                        <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_login_route");
            echo "\">Connexion</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_author");
            echo "\">Inscription</a>
                    </li>
                ";
        }
        // line 36
        echo "                <li class=\"navbar-text hidden-xs\">
                    |
                </li>
                ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                    <li>
                        <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
            echo "\">Déconnexion admin</a>
                    </li>
                ";
        } else {
            // line 44
            echo "                    <li>
                        <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_home");
            echo "\">Connexion admin</a>
                    </li>
                ";
        }
        // line 48
        echo "            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_55b045fd2768258019540bf898f1f99661f050a4f5235b0cf8cdb2f1b3922ab4->leave($__internal_55b045fd2768258019540bf898f1f99661f050a4f5235b0cf8cdb2f1b3922ab4_prof);

        
        $__internal_787272e30a0cd7329bd0e62428469c129ed39f350f5d97929d06c69cde4d3b83->leave($__internal_787272e30a0cd7329bd0e62428469c129ed39f350f5d97929d06c69cde4d3b83_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  106 => 45,  103 => 44,  97 => 41,  94 => 40,  92 => 39,  87 => 36,  81 => 33,  75 => 30,  72 => 29,  66 => 26,  58 => 23,  55 => 22,  53 => 21,  46 => 17,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Symfony</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('homepage') }}\">Forum</a></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                {% if is_granted('ROLE_AUTHOR') %}
                    <li class=\"navbar-text\" style=\"margin-left: 15px\">
                        Bonjour {{ app.user.firstName }} {{ app.user.name | upper }}
                    </li>
                    <li>
                        <a href=\"{{ path('author_logout') }}\">Déconnexion</a>
                    </li>
                {%  else %}
                    <li>
                        <a href=\"{{ path('author_login_route') }}\">Connexion</a>
                    </li>
                    <li>
                        <a href=\"{{ path('register_author') }}\">Inscription</a>
                    </li>
                {% endif %}
                <li class=\"navbar-text hidden-xs\">
                    |
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li>
                        <a href=\"{{ path('admin_logout') }}\">Déconnexion admin</a>
                    </li>
                {%  else %}
                    <li>
                        <a href=\"{{ path('admin_home') }}\">Connexion admin</a>
                    </li>
                {% endif %}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "_navbar.html.twig", "C:\\Users\\Administrateur.FORMATI-CA1G1PA\\Documents\\symfony\\symfony-forum\\app\\Resources\\views\\_navbar.html.twig");
    }
}
