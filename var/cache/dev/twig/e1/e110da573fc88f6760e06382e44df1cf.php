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

/* courses/show.html.twig */
class __TwigTemplate_9d38b011fdbc3a7c8d50bec323bbcf0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "courses/show.html.twig", 1);
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

        echo "Courses";
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
                <div><i class=\"fa fa-user-tie text-primary me-2\"></i>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 10, $this->source); })()), "instructor", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
                <div><i class=\"fa fa-clock text-primary me-2\"></i>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 11, $this->source); })()), "hours", [], "any", false, false, false, 11), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 11, $this->source); })()), "minutes", [], "any", false, false, false, 11), "html", null, true);
        echo " Hrs</div>
                <div><i class=\"fa fa-user text-primary me-2\"></i>";
        // line 12
        ((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "d.m.Y"), "html", null, true))) : (print ("")));
        echo "</div>
            </div>
        </div>
        <div class=\"row g-4 justify-content-center mt-5\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 16, $this->source); })()), "lessons", [], "any", false, false, false, 16));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 17
            echo "                ";
            echo twig_include($this->env, $context, "shared/_lesson_snippet.html.twig", ["lesson" => $context["lesson"], "label" => "Start"]);
            echo "
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 19
            echo "                <div class=\"col-12\"><h5>No lessons found</h5></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
        <div class=\"row mt-5\">
            ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
            // line 24
            echo "                <div class=\"col text-end\">
                    <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_new");
            echo "\">Add lesson</a>
                </div>
            ";
        }
        // line 28
        echo "            <div class=\"col-auto\">
                <a class=\"btn btn-primary\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_index");
        echo "\">Back to list</a>
            </div>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 31, $this->source); })()), "enrollments", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["enrollemnt"]) {
            // line 32
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["enrollemnt"], "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32))) {
                // line 33
                echo "                    <div class=\"col-auto\">
                        <a class=\"btn btn-warning\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_unenroll", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Unenroll</a>
                    </div>
                ";
            }
            // line 37
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrollemnt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
            // line 39
            echo "                <div class=\"col-auto\">
                    <a class=\"btn btn-primary\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Edit</a>
                </div>
                <div class=\"col-auto mt-n3\">
                    ";
            // line 43
            echo twig_include($this->env, $context, "courses/_delete_form.html.twig");
            echo "
                </div>
            ";
        }
        // line 46
        echo "        </div>
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
        return "courses/show.html.twig";
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
        return array (  218 => 46,  212 => 43,  206 => 40,  203 => 39,  200 => 38,  194 => 37,  188 => 34,  185 => 33,  182 => 32,  178 => 31,  173 => 29,  170 => 28,  164 => 25,  161 => 24,  159 => 23,  155 => 21,  148 => 19,  132 => 17,  114 => 16,  107 => 12,  101 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Courses{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>{{ course.description }}</h3>
                <div><i class=\"fa fa-user-tie text-primary me-2\"></i>{{ course.instructor.username }}</div>
                <div><i class=\"fa fa-clock text-primary me-2\"></i>{{ course.hours }}:{{ course.minutes }} Hrs</div>
                <div><i class=\"fa fa-user text-primary me-2\"></i>{{ course.createdAt ? course.createdAt|date('d.m.Y') : '' }}</div>
            </div>
        </div>
        <div class=\"row g-4 justify-content-center mt-5\">
            {% for lesson in course.lessons %}
                {{ include('shared/_lesson_snippet.html.twig', {lesson: lesson, label: \"Start\"}) }}
            {% else %}
                <div class=\"col-12\"><h5>No lessons found</h5></div>
            {% endfor %}
        </div>
        <div class=\"row mt-5\">
            {% if is_granted('ROLE_INSTRUCTOR') %}
                <div class=\"col text-end\">
                    <a class=\"btn btn-primary\" href=\"{{ path('app_lessons_new') }}\">Add lesson</a>
                </div>
            {% endif %}
            <div class=\"col-auto\">
                <a class=\"btn btn-primary\" href=\"{{ path('app_courses_index') }}\">Back to list</a>
            </div>
            {% for enrollemnt in course.enrollments %}
                {% if app.user.id == enrollemnt.user.id %}
                    <div class=\"col-auto\">
                        <a class=\"btn btn-warning\" href=\"{{ path('app_courses_unenroll', {id: course.id}) }}\">Unenroll</a>
                    </div>
                {% endif %}
            {% endfor %}
            {% if is_granted('ROLE_INSTRUCTOR') %}
                <div class=\"col-auto\">
                    <a class=\"btn btn-primary\" href=\"{{ path('app_courses_edit', {'id': course.id}) }}\">Edit</a>
                </div>
                <div class=\"col-auto mt-n3\">
                    {{ include('courses/_delete_form.html.twig') }}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "courses/show.html.twig", "C:\\Users\\hassen\\Desktop\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\courses\\show.html.twig");
    }
}
