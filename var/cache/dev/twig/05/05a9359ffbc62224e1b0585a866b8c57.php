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

/* shared/_header.html.twig */
class __TwigTemplate_e0c009139d63c02f8514e25e4f6654c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_header.html.twig"));

        // line 1
        echo "<!-- Header Start -->
<div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10 text-center\">
                <h1 class=\"display-3 text-white animated slideInDown\">";
        // line 6
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })());
        echo "</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_header.html.twig";
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
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Start -->
<div class=\"container-fluid bg-primary py-5 mb-5 page-header\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10 text-center\">
                <h1 class=\"display-3 text-white animated slideInDown\">{{ title|raw }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
", "shared/_header.html.twig", "C:\\xamppSymphony\\htdocs\\E-learning\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_header.html.twig");
    }
}
