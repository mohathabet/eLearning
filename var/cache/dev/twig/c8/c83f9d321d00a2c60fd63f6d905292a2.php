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

/* shared/_popular_courses.html.twig */
class __TwigTemplate_02774e544601fb68e4f3619813629504 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_popular_courses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_popular_courses.html.twig"));

        // line 1
        echo "<!-- Courses Start -->
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
            <h1 class=\"mb-5\">Popular Courses</h1>
        </div>
        <div class=\"row g-4 justify-content-center\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 10, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 11
                echo "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"course-item bg-light\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/téléchargé (1).jpeg"), "html", null, true);
                echo "\" alt=\"\">
                        <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                            <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_show", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses_enroll", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                        </div>
                    </div>
                    <div class=\"text-center p-4 pb-0\">
                        <h5 class=\"mb-4\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</h5>
                    </div>
                    <div class=\"d-flex border-top\">
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "instructor", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
                echo "</small>
                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "hours", [], "any", false, false, false, 25), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "minutes", [], "any", false, false, false, 25), "html", null, true);
                echo " Hrs</small>
                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>";
                // line 26
                ((twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 26), "d.m.Y"), "html", null, true))) : (print ("")));
                echo "</small>
                    </div>
                </div>
            </div>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "                <div class=\"col-12\">No courses found</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </div>
    </div>
</div>
";
        }
        // line 37
        echo "<!-- Courses End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_popular_courses.html.twig";
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
        return array (  122 => 37,  116 => 33,  109 => 31,  99 => 26,  93 => 25,  89 => 24,  83 => 21,  76 => 17,  72 => 16,  67 => 14,  62 => 11,  57 => 10,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Courses Start -->
{% if courses|length > 0 %}
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
            <h1 class=\"mb-5\">Popular Courses</h1>
        </div>
        <div class=\"row g-4 justify-content-center\">
            {% for course in courses %}
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"course-item bg-light\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/téléchargé (1).jpeg') }}\" alt=\"\">
                        <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                            <a href=\"{{ path('app_courses_show', {'id': course.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                            <a href=\"{{ path('app_courses_enroll', {'id': course.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
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
                <div class=\"col-12\">No courses found</div>
            {% endfor %}
        </div>
    </div>
</div>
{% endif %}
<!-- Courses End -->
", "shared/_popular_courses.html.twig", "C:\\xamppSymphony\\htdocs\\final\\Avant_Final\\Avant_Final\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_popular_courses.html.twig");
    }
}
