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

/* shared/_lesson_snippet.html.twig */
class __TwigTemplate_2071b3e03bd825bc02b7675048e78bb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_lesson_snippet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_lesson_snippet.html.twig"));

        // line 1
        echo "<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
    <div class=\"course-item bg-light\">
        <div class=\"position-relative overflow-hidden\">
            <img class=\"img-fluid\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/téléchargé (3).jpeg"), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
            // line 6
            echo "                <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Show</a>
                    <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Edit</a>
                </div>
            ";
        } else {
            // line 11
            echo "                <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 30px;\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 15
        echo "        </div>
        <div class=\"text-center p-4 pb-3\">
            <h5 class=\"mb-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h5>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "enrollments", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["enrollement"]) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["enrollement"], "progresses", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["progress"]) {
                // line 20
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["progress"], "status", [], "any", false, false, false, 20) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["progress"], "lessons", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "                        <h6 class=\"text-danger mt-n3\">COMPLETED</h6>
                    ";
                }
                // line 23
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['progress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrollement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_lesson_snippet.html.twig";
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
        return array (  114 => 25,  108 => 24,  102 => 23,  98 => 21,  95 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 15,  70 => 12,  67 => 11,  61 => 8,  57 => 7,  54 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
    <div class=\"course-item bg-light\">
        <div class=\"position-relative overflow-hidden\">
            <img class=\"img-fluid\" src=\"{{ asset('img/téléchargé (3).jpeg') }}\" alt=\"\">
            {% if is_granted('ROLE_INSTRUCTOR') %}
                <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                    <a href=\"{{ path('app_lessons_show', {'id': lesson.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Show</a>
                    <a href=\"{{ path('app_lessons_edit', {'id': lesson.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Edit</a>
                </div>
            {% else %}
                <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                    <a href=\"{{ path('app_lessons_show', {'id': lesson.id}) }}\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 30px;\">{{ label }}</a>
                </div>
            {% endif %}
        </div>
        <div class=\"text-center p-4 pb-3\">
            <h5 class=\"mb-4\">{{ lesson.title }}</h5>
            {% for enrollement in app.user.enrollments %}
                {% for progress in enrollement.progresses %}
                    {% if progress.status == 1 and lesson.id == progress.lessons.id %}
                        <h6 class=\"text-danger mt-n3\">COMPLETED</h6>
                    {% endif %}
                {% endfor %}
            {% endfor %}
        </div>
    </div>
</div>
", "shared/_lesson_snippet.html.twig", "C:\\xamppSymphony\\htdocs\\final\\Avant_Final\\Avant_Final\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_lesson_snippet.html.twig");
    }
}
