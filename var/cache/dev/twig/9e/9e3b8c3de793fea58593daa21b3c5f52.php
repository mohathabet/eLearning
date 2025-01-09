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

/* shared/_carousel.html.twig */
class __TwigTemplate_baba3956ce0a21d601f440afa8b534c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_carousel.html.twig"));

        // line 1
        echo "<!-- Carousel Start -->
<div class=\"container-fluid p-0 mb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Learning Beyond Boundaries: Elevate Your Skills, Explore New Horizons. This is Your Gateway to Limitless Knowledge.</p>
                            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Empower Your Mind, Ignite Your Potential: Unlock a World of Knowledge with Our Transformative Online Learning Platform</p>
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_carousel.html.twig";
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
        return array (  81 => 28,  70 => 20,  60 => 13,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->
<div class=\"container-fluid p-0 mb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"{{ asset('img/carousel-1.jpg') }}\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Learning Beyond Boundaries: Elevate Your Skills, Explore New Horizons. This is Your Gateway to Limitless Knowledge.</p>
                            <a href=\"{{ path('app_register') }}\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"{{ asset('img/carousel-2.jpg') }}\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Empower Your Mind, Ignite Your Potential: Unlock a World of Knowledge with Our Transformative Online Learning Platform</p>
                            <a href=\"{{ path('app_register') }}\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
", "shared/_carousel.html.twig", "C:\\Users\\hassen\\Desktop\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_carousel.html.twig");
    }
}
