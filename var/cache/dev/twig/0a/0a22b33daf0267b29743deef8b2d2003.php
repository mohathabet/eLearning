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

/* instructor/index.html.twig */
class __TwigTemplate_9f47b899a7b37b4beeb2caa0ec2ab970 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "instructor/index.html.twig", 1);
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

        echo "Instructor Dashboard";
        
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
        if ( !twig_test_empty((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <h3 class=\"mt-4\">Your Courses</h3>
            <div class=\"row g-4\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 13
                echo "                    ";
                $context["courseEntity"] = twig_get_attribute($this->env, $this->source, $context["course"], "course", [], "any", false, false, false, 13);
                // line 14
                echo "                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/téléchargé (1).jpeg"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"Course Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                                <p class=\"card-text\">Number of Enrollments: <b>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 20, $this->source); })()), "enrollments", [], "any", false, false, false, 20), "count", [], "method", false, false, false, 20), "html", null, true);
                echo "</b></p>
                                ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 21, $this->source); })()), "enrollments", [], "any", false, false, false, 21), "count", [], "method", false, false, false, 21) > 0)) {
                    // line 22
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show_enrollements", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">View Enrollments</a>
                                ";
                }
                // line 24
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["courseEntity"]) || array_key_exists("courseEntity", $context) ? $context["courseEntity"] : (function () { throw new RuntimeError('Variable "courseEntity" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">View Course</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
        ";
        } else {
            // line 31
            echo "            <p class=\"mt-4\">You do not have any courses to instruct yet.</p>
        ";
        }
        // line 33
        echo "
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_new");
        echo "\" class=\"btn btn-primary mt-5\">Add New Course</a>
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
        return "instructor/index.html.twig";
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
        return array (  161 => 34,  158 => 33,  154 => 31,  150 => 29,  138 => 24,  132 => 22,  130 => 21,  126 => 20,  122 => 19,  118 => 18,  113 => 16,  109 => 14,  106 => 13,  102 => 12,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Instructor Dashboard{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2>Welcome, {{ user.username }}!</h2>

        {% if courses is not empty %}
            <h3 class=\"mt-4\">Your Courses</h3>
            <div class=\"row g-4\">
                {% for course in courses %}
                    {% set courseEntity = course.course %}
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <img src=\"{{ asset('img/téléchargé (1).jpeg') }}\" class=\"card-img-top\" alt=\"Course Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ courseEntity.title }}</h5>
                                <p class=\"card-text\">{{ courseEntity.description }}</p>
                                <p class=\"card-text\">Number of Enrollments: <b>{{ courseEntity.enrollments.count() }}</b></p>
                                {% if courseEntity.enrollments.count() > 0 %}
                                    <a href=\"{{ path('app_courses_show_enrollements', {'id': courseEntity.id}) }}\" class=\"btn btn-primary\">View Enrollments</a>
                                {% endif %}
                                <a href=\"{{ path('app_courses_show', {'id': courseEntity.id}) }}\" class=\"btn btn-primary\">View Course</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"mt-4\">You do not have any courses to instruct yet.</p>
        {% endif %}

        <a href=\"{{ path('app_courses_new') }}\" class=\"btn btn-primary mt-5\">Add New Course</a>
    </div>
{% endblock %}
", "instructor/index.html.twig", "C:\\Users\\hassen\\Desktop\\Avant_Final\\Avant_Final\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\instructor\\index.html.twig");
    }
}
