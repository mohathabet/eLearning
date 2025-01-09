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

/* shared/_footer.html.twig */
class __TwigTemplate_b8fc31a54263424f08ffba4a83cd010b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        // line 1
        echo "<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <!-- Quick Links -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Links</h4>
                <a class=\"btn btn-link text-light\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Home</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.google.com\" target=\"_blank\">Google</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.facebook.com\" target=\"_blank\">Facebook</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.twitter.com\" target=\"_blank\">Twitter</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.instagram.com\" target=\"_blank\">Instagram</a>
            </div>

            <!-- Social Media Links -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Follow Us</h4>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.youtube.com\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.instagram.com\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>

            <!-- Image Gallery -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/téléchargé (1).jpeg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/téléchargé (2).jpeg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/conseils-cours-en-ligne-e-learning.jpeg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>

            <!-- Sign-Up -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Get Started</h4>
                <p class=\"text-light mb-3\">Join us today for exclusive benefits and updates.</p>
                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                    <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_footer.html.twig";
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
        return array (  90 => 37,  84 => 34,  78 => 31,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <!-- Quick Links -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Links</h4>
                <a class=\"btn btn-link text-light\" href=\"{{ path('app_homepage') }}\">Home</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.google.com\" target=\"_blank\">Google</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.facebook.com\" target=\"_blank\">Facebook</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.twitter.com\" target=\"_blank\">Twitter</a>
                <a class=\"btn btn-link text-light\" href=\"https://www.instagram.com\" target=\"_blank\">Instagram</a>
            </div>

            <!-- Social Media Links -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Follow Us</h4>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.youtube.com\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.instagram.com\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>

            <!-- Image Gallery -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset('img/téléchargé (1).jpeg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset('img/téléchargé (2).jpeg') }}\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"{{ asset('img/conseils-cours-en-ligne-e-learning.jpeg') }}\" alt=\"\">
                    </div>
                </div>
            </div>

            <!-- Sign-Up -->
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Get Started</h4>
                <p class=\"text-light mb-3\">Join us today for exclusive benefits and updates.</p>
                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                    <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
", "shared/_footer.html.twig", "C:\\xamppSymphony\\htdocs\\final\\Avant_Final\\Avant_Final\\online-learning-platform-main (2)\\online-learning-platform-main\\online-learning-platform-main\\templates\\shared\\_footer.html.twig");
    }
}
