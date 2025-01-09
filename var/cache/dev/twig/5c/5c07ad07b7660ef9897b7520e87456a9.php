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

/* student/index.html.twig */
class __TwigTemplate_9bb3d2c29d93420e3cd6aa97a328d574 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Student Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-4\">
        <h2>Welcome, ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), "html", null, true);
        echo "!</h2>

        ";
        // line 9
        if ( !twig_test_empty((isset($context["enrolledCourses"]) || array_key_exists("enrolledCourses", $context) ? $context["enrolledCourses"] : (function () { throw new RuntimeError('Variable "enrolledCourses" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <h3 class=\"mt-4\">Enrolled Courses</h3>
            <div class=\"row g-4\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["enrolledCourses"]) || array_key_exists("enrolledCourses", $context) ? $context["enrolledCourses"] : (function () { throw new RuntimeError('Variable "enrolledCourses" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 13
                echo "                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/course-1.jpg"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"Course Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">View Course</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        ";
        } else {
            // line 26
            echo "            <p class=\"mt-4\">You are not enrolled in any courses yet.</p>
        ";
        }
        // line 28
        echo "
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_index");
        echo "\" class=\"btn btn-primary mt-5\">View Available Courses</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "student/index.html.twig";
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
        return array (  145 => 29,  142 => 28,  138 => 26,  134 => 24,  123 => 19,  119 => 18,  115 => 17,  110 => 15,  106 => 13,  102 => 12,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Student Dashboard{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2>Welcome, {{ user.username }}!</h2>

        {% if enrolledCourses is not empty %}
            <h3 class=\"mt-4\">Enrolled Courses</h3>
            <div class=\"row g-4\">
                {% for course in enrolledCourses %}
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('img/course-1.jpg') }}\" class=\"card-img-top\" alt=\"Course Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ course.title }}</h5>
                                <p class=\"card-text\">{{ course.description }}</p>
                                <a href=\"{{ path('app_courses_show', {'id': course.id}) }}\" class=\"btn btn-primary\">View Course</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"mt-4\">You are not enrolled in any courses yet.</p>
        {% endif %}

        <a href=\"{{ path('app_courses_index') }}\" class=\"btn btn-primary mt-5\">View Available Courses</a>
    </div>
{% endblock %}
", "student/index.html.twig", "C:\\xamppSymphony\\htdocs\\E-learning\\online-learning-platform-main\\online-learning-platform-main\\templates\\student\\index.html.twig");
    }
}
