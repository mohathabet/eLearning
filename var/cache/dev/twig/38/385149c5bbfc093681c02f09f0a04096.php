<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shared/_navigation.html.twig */
class __TwigTemplate_ad2ffbf980f28ee900fd4698e1da868a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navigation.html.twig"));

        // line 1
        echo "<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Tek-up's online learning platform</h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_index");
        echo "\" class=\"nav-item nav-link\">Courses</a>
            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
                // line 15
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_dashboard");
                echo "\" class=\"nav-item nav-link\">My Dashboard</a>
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STUDENT")) {
                // line 17
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_dashboard");
                echo "\" class=\"nav-item nav-link\">My Dashboard</a>
                    <a href=\"";
                // line 18
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificate_index");
                echo "\" class=\"nav-item nav-link\">My Certificates</a>
                ";
            }
            // line 20
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" class=\"nav-item nav-link\"><i class=\"fa fa-user-tie me-2\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-item nav-link\">Logout</a>
            ";
        } else {
            // line 23
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-item nav-link\">Login</a>
            ";
        }
        // line 25
        echo "        </div>
        ";
        // line 26
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Join Now<i class=\"fa fa-arrow-right ms-3\"></i></a>
        ";
        }
        // line 29
        echo "    </div>
</nav>
<!-- Navbar End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  116 => 29,  110 => 27,  108 => 26,  105 => 25,  99 => 23,  94 => 21,  87 => 20,  82 => 18,  77 => 17,  71 => 15,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
    <a href=\"{{ path('app_homepage') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Tek-up's online learning platform</h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"{{ path('app_homepage') }}\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"{{ path('app_courses_index') }}\" class=\"nav-item nav-link\">Courses</a>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% if is_granted(\"ROLE_INSTRUCTOR\") %}
                    <a href=\"{{ path('app_instructor_dashboard') }}\" class=\"nav-item nav-link\">My Dashboard</a>
                {% elseif is_granted(\"ROLE_STUDENT\") %}
                    <a href=\"{{ path('app_student_dashboard') }}\" class=\"nav-item nav-link\">My Dashboard</a>
                    <a href=\"{{ path('app_certificate_index') }}\" class=\"nav-item nav-link\">My Certificates</a>
                {% endif %}
                <a href=\"{{ path('app_profile') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-user-tie me-2\"></i>{{ app.user.username }}</a>
                <a href=\"{{ path('app_logout') }}\" class=\"nav-item nav-link\">Logout</a>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">Login</a>
            {% endif %}
        </div>
        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
            <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Join Now<i class=\"fa fa-arrow-right ms-3\"></i></a>
        {% endif %}
    </div>
</nav>
<!-- Navbar End -->
", "shared/_navigation.html.twig", "C:\\Users\\hassen\\Desktop\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_navigation.html.twig");
    }
}
