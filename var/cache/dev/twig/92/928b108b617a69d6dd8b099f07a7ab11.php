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

/* profile/index.html.twig */
class __TwigTemplate_6379351e923c7c6c174358fe13d8934e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        echo "Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        echo "!";
        
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
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "profile", [], "any", false, false, false, 7)) {
            // line 8
            echo "            <div class=\"row g-4\">
                <div class=\"col-4 offset-4 text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/profile/") . (isset($context["image_path"]) || array_key_exists("image_path", $context) ? $context["image_path"] : (function () { throw new RuntimeError('Variable "image_path" does not exist.', 12, $this->source); })())), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
                            <p>";
            // line 16
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "profile", [], "any", false, false, false, 16), "country", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "profile", [], "any", false, false, false, 16), "country", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
            echo "</p>
                            <p>";
            // line 17
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "profile", [], "any", false, false, false, 17), "address", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "profile", [], "any", false, false, false, 17), "address", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
            echo "</p>
                            <p>";
            // line 18
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18), "dateOfBirth", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18), "dateOfBirth", [], "any", false, false, false, 18), "d.m.Y"), "html", null, true))) : (print ("")));
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "profile", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit profile</a>
                </div>
            </div>
        ";
        } else {
            // line 29
            echo "            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_new");
            echo "\" class=\"btn btn-primary\">Create profile</a>
                </div>
            </div>
        ";
        }
        // line 35
        echo "
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
        return "profile/index.html.twig";
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
        return array (  147 => 35,  140 => 31,  136 => 29,  129 => 25,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  101 => 12,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ user.username }}!{% endblock %}

{% block body %}
    <div class=\"container\">
        {% if user.profile %}
            <div class=\"row g-4\">
                <div class=\"col-4 offset-4 text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('/uploads/profile/') ~ image_path  }}\" alt=\"\">
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">{{ user.username }}</h5>
                            <p>{{ user.profile.country ? user.profile.country : '' }}</p>
                            <p>{{ user.profile.address ?  user.profile.address : ''}}</p>
                            <p>{{ user.profile.dateOfBirth ? user.profile.dateOfBirth|date('d.m.Y') : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    <a href=\"{{ path('app_profile_edit', {id: user.profile.id}) }}\" class=\"btn btn-primary\">Edit profile</a>
                </div>
            </div>
        {% else %}
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    <a href=\"{{ path('app_profile_new') }}\" class=\"btn btn-primary\">Create profile</a>
                </div>
            </div>
        {% endif %}

    </div>
{% endblock %}", "profile/index.html.twig", "C:\\xamppSymphony\\htdocs\\E-learning\\online-learning-platform-main\\online-learning-platform-main\\templates\\profile\\index.html.twig");
    }
}
