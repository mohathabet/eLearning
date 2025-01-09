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

/* shared/_services.html.twig */
class __TwigTemplate_7ee419a7f9288ca5ff67e5e68f51794f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_services.html.twig"));

        // line 1
        echo "<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Skilled Instructors</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Online Classes</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Home Projects</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Book Library</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_services.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Skilled Instructors</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Online Classes</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Home Projects</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"service-item text-center pt-3\">
                    <div class=\"p-4\">
                        <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">Book Library</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
", "shared/_services.html.twig", "C:\\Users\\hassen\\Desktop\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_services.html.twig");
    }
}
