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

/* lessons/show.html.twig */
class __TwigTemplate_255eedfaf83c713ce5ec8031388f9fa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lessons/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lessons/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lessons/show.html.twig", 1);
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

        echo "Lessons";
        
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
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 10, $this->source); })()), "course", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo ")</h3>
                <div><i class=\"fa fa-user text-primary me-2\"></i>";
        // line 11
        ((twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 11, $this->source); })()), "updatedAt", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 11, $this->source); })()), "updatedAt", [], "any", false, false, false, 11), "d.m.Y"), "html", null, true))) : (print ("")));
        echo " (created: ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11), "d.m.Y"), "html", null, true))) : (print ("")));
        echo ")</div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        echo "
            </div>
        </div>

        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <h4>Lesson PDF</h4>
                    <!-- Display the PDF using an object or embed tag -->
                    <object data=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pdfs/" . twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" type=\"application/pdf\" width=\"100%\" height=\"600px\">
                        <p>Your browser does not support PDFs. <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pdfs/" . twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27))), "html", null, true);
            echo "\">Download the PDF</a>.</p>
                    </object>
                </div>
            </div>
        ";
        }
        // line 32
        echo "
        <div class=\"row mt-5\">
            ";
        // line 34
        $context["found"] = false;
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "enrollments", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["enrollement"]) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["enrollement"], "progresses", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["progress"]) {
                // line 37
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["progress"], "status", [], "any", false, false, false, 37) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["progress"], "lessons", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)))) {
                    // line 38
                    echo "                        ";
                    $context["found"] = true;
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['progress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrollement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        if (( !(isset($context["found"]) || array_key_exists("found", $context) ? $context["found"] : (function () { throw new RuntimeError('Variable "found" does not exist.', 42, $this->source); })()) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR"))) {
            // line 43
            echo "                <div class=\"col-auto\">
                    <a class=\"btn btn-success\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_complete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Complete</a>
                </div>
            ";
        }
        // line 47
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
            // line 48
            echo "                <div class=\"col-auto\">
                    <a class=\"btn btn-primary\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Edit</a>
                </div>
                <div class=\"col-auto\">
                    ";
            // line 52
            echo twig_include($this->env, $context, "lessons/_delete_form.html.twig");
            echo "
                </div>
            ";
        }
        // line 55
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
        return "lessons/show.html.twig";
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
        return array (  205 => 55,  199 => 52,  193 => 49,  190 => 48,  187 => 47,  181 => 44,  178 => 43,  175 => 42,  169 => 41,  163 => 40,  160 => 39,  157 => 38,  154 => 37,  149 => 36,  144 => 35,  142 => 34,  138 => 32,  130 => 27,  126 => 26,  120 => 22,  118 => 21,  111 => 17,  100 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lessons{% endblock %}

{% block body %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-12\">
                <h3>{{ lesson.title }} ({{ lesson.course.title }})</h3>
                <div><i class=\"fa fa-user text-primary me-2\"></i>{{ lesson.updatedAt ? lesson.updatedAt|date('d.m.Y') : '' }} (created: {{ lesson.createdAt ? lesson.createdAt|date('d.m.Y') : '' }})</div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                {{ lesson.content|raw }}
            </div>
        </div>

        {% if lesson.content %}
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <h4>Lesson PDF</h4>
                    <!-- Display the PDF using an object or embed tag -->
                    <object data=\"{{ asset('uploads/pdfs/' ~ lesson.content) }}\" type=\"application/pdf\" width=\"100%\" height=\"600px\">
                        <p>Your browser does not support PDFs. <a href=\"{{ asset('uploads/pdfs/' ~ lesson.content) }}\">Download the PDF</a>.</p>
                    </object>
                </div>
            </div>
        {% endif %}

        <div class=\"row mt-5\">
            {% set found = false %}
            {% for enrollement in app.user.enrollments %}
                {% for progress in enrollement.progresses %}
                    {% if progress.status == 1 and lesson.id == progress.lessons.id %}
                        {% set found = true %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            {% if not found and not is_granted('ROLE_INSTRUCTOR') %}
                <div class=\"col-auto\">
                    <a class=\"btn btn-success\" href=\"{{ path('app_lessons_complete', {id: lesson.id}) }}\">Complete</a>
                </div>
            {% endif %}
            {% if is_granted('ROLE_INSTRUCTOR') %}
                <div class=\"col-auto\">
                    <a class=\"btn btn-primary\" href=\"{{ path('app_lessons_edit', {'id': lesson.id}) }}\">Edit</a>
                </div>
                <div class=\"col-auto\">
                    {{ include('lessons/_delete_form.html.twig') }}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "lessons/show.html.twig", "C:\\xamppSymphony\\htdocs\\E-learning\\online-learning-platform-main\\online-learning-platform-main\\templates\\lessons\\show.html.twig");
    }
}
