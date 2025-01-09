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

/* courses/index.html.twig */
class __TwigTemplate_702e6d757fe9e0ad07b0ee1d662ddc23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "courses/index.html.twig", 1);
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

        echo "Courses index";
        
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
        <div class=\"row g-4 justify-content-center\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 9
            echo "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
                <div class=\"course-item bg-light\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/conseils-cours-en-ligne-e-learning.jpeg"), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">View</a>
                            ";
            // line 15
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
                // line 16
                echo "                                ";
                $context["found"] = false;
                // line 17
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["course"], "enrollments", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["enrollment"]) {
                    // line 18
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["enrollment"], "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
                        // line 19
                        echo "                                        ";
                        $context["found"] = true;
                        // line 20
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                        echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Resume</a>
                                    ";
                    }
                    // line 22
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrollment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                                ";
                if ( !(isset($context["found"]) || array_key_exists("found", $context) ? $context["found"] : (function () { throw new RuntimeError('Variable "found" does not exist.', 23, $this->source); })())) {
                    // line 24
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_enroll", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                                ";
                }
                // line 26
                echo "                            ";
            }
            // line 27
            echo "                        </div>
                    </div>
                    <div class=\"text-center p-4 pb-0\">
                        <h5 class=\"mb-4\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h5>
                    </div>
                    <div class=\"d-flex border-top\">
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "instructor", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</small>
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "hours", [], "any", false, false, false, 34), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "minutes", [], "any", false, false, false, 34), "html", null, true);
            echo " Hrs</small>
                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 35), "d.m.Y"), "html", null, true))) : (print ("")));
            echo "</small>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <div class=\"col-12\"><h5>No records found</h5></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>

        ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
            // line 45
            echo "            <a class=\"mt-3 btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_new");
            echo "\">Create new</a>
        ";
        }
        // line 47
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "courses/index.html.twig";
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
        return array (  201 => 47,  195 => 45,  193 => 44,  189 => 42,  182 => 40,  172 => 35,  166 => 34,  162 => 33,  156 => 30,  151 => 27,  148 => 26,  142 => 24,  139 => 23,  133 => 22,  127 => 20,  124 => 19,  121 => 18,  116 => 17,  113 => 16,  111 => 15,  107 => 14,  102 => 12,  97 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Courses index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row g-4 justify-content-center\">
            {% for course in courses %}
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
                <div class=\"course-item bg-light\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/conseils-cours-en-ligne-e-learning.jpeg') }}\" alt=\"\">
                        <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                            <a href=\"{{ path('app_courses_show', {'id': course.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">View</a>
                            {% if not is_granted('ROLE_INSTRUCTOR') %}
                                {% set found = false %}
                                {% for enrollment in course.enrollments %}
                                    {% if user.id == enrollment.user.id %}
                                        {% set found = true %}
                                        <a href=\"{{ path('app_courses_show', {'id': course.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Resume</a>
                                    {% endif %}
                                {% endfor %}
                                {% if not found %}
                                    <a href=\"{{ path('app_courses_enroll', {'id': course.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                                {% endif %}
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"text-center p-4 pb-0\">
                        <h5 class=\"mb-4\">{{ course.title }}</h5>
                    </div>
                    <div class=\"d-flex border-top\">
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>{{ course.instructor.username }}</small>
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>{{ course.hours }}:{{ course.minutes }} Hrs</small>
                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>{{ course.createdAt ? course.createdAt|date('d.m.Y') : '' }}</small>
                    </div>
                </div>
            </div>
            {% else %}
                <div class=\"col-12\"><h5>No records found</h5></div>
            {% endfor %}
        </div>

        {% if is_granted('ROLE_INSTRUCTOR') %}
            <a class=\"mt-3 btn btn-primary\" href=\"{{ path('app_courses_new') }}\">Create new</a>
        {% endif %}
    </div>

{% endblock %}
", "courses/index.html.twig", "C:\\Users\\hassen\\Desktop\\Avant_Final\\Avant_Final\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\courses\\index.html.twig");
    }
}
