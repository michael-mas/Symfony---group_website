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

/* produit/stats.html.twig */
class __TwigTemplate_0535d23f7af3ee64651070961041dd3b0481ea417298b90dbf913bf503d39ce0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stats.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "produit/stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">Moyenne d'age des produits entre ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["prixMin"]) || array_key_exists("prixMin", $context) ? $context["prixMin"] : (function () { throw new RuntimeError('Variable "prixMin" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " ans et ";
        echo twig_escape_filter($this->env, (isset($context["prixMax"]) || array_key_exists("prixMax", $context) ? $context["prixMax"] : (function () { throw new RuntimeError('Variable "prixMax" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " ans</div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" >";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 9, $this->source); })()), "ageMoyen", [], "array", false, false, false, 9), "html", null, true);
        echo "</a>
                    <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">Nombre de Produits d'age entre ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["prixMin"]) || array_key_exists("prixMin", $context) ? $context["prixMin"] : (function () { throw new RuntimeError('Variable "prixMin" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ans et ";
        echo twig_escape_filter($this->env, (isset($context["prixMax"]) || array_key_exists("prixMax", $context) ? $context["prixMax"] : (function () { throw new RuntimeError('Variable "prixMax" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ans</div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" >";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "nombreProduits", [], "array", false, false, false, 18), "html", null, true);
        echo "</a>
                    <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 27
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  115 => 26,  98 => 18,  91 => 16,  81 => 9,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">Moyenne d'age des produits entre {{ prixMin }} ans et {{ prixMax }} ans</div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" >{{ stats['ageMoyen'] }}</a>
                    <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">Nombre de Produits d'age entre {{ prixMin }} ans et {{ prixMax }} ans</div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" >{{ stats['nombreProduits'] }}</a>
                    <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block title %}

{% endblock %}

", "produit/stats.html.twig", "C:\\xampp\\htdocs\\Hipskor\\Hipskor\\templates\\produit\\stats.html.twig");
    }
}
