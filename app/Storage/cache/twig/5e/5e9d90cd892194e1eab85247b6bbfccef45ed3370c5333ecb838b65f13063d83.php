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

/* backoffice/accueil/index.html.twig */
class __TwigTemplate_0ef66fa1671776da1293d3e48af367e2eb156ea5cfe5c3b8dc25834dd4ccfa7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backoffice/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backoffice/layout.html.twig", "backoffice/accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "      
    <section id=\"accueil\">
        <div class=\"content\">

            <div class=\"info_barre\" id=\"first_barre\">
                <h2>
                    <input type=\"text\" name=\"nom\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
                </h2>
                <span class=\"barre_style\"></span>
            </div>

            <img class=\"imgOfMe\" alt=\"Photo de Simon Botté | simonbotté.fr\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/simonbotte.jpg"]), "html", null, true);
        echo "\">


            <div class=\"info_barre\" id=\"last_barre\">
                <span class=\"barre_style\"></span>
                <h2><input type=\"text\" name=\"accueilText1\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "accueilText1", [], "any", false, false, false, 20), "html", null, true);
        echo "\"></h2>
                <h2><input type=\"text\" name=\"accueilText2\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "accueilText2", [], "any", false, false, false, 21), "html", null, true);
        echo "\"></h2>
            </div>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>
    
";
    }

    // line 35
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/backoffice/direct-edit.js"]), "html", null, true);
        echo "\"></script>\t
";
    }

    public function getTemplateName()
    {
        return "backoffice/accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  95 => 35,  79 => 21,  75 => 20,  67 => 15,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backoffice/layout.html.twig\" %}

{% block content %}
      
    <section id=\"accueil\">
        <div class=\"content\">

            <div class=\"info_barre\" id=\"first_barre\">
                <h2>
                    <input type=\"text\" name=\"nom\" value=\"{{text.nom}}\">
                </h2>
                <span class=\"barre_style\"></span>
            </div>

            <img class=\"imgOfMe\" alt=\"Photo de Simon Botté | simonbotté.fr\" src=\"{{asset('img/simonbotte.jpg')}}\">


            <div class=\"info_barre\" id=\"last_barre\">
                <span class=\"barre_style\"></span>
                <h2><input type=\"text\" name=\"accueilText1\" value=\"{{text.accueilText1}}\"></h2>
                <h2><input type=\"text\" name=\"accueilText2\" value=\"{{text.accueilText2}}\"></h2>
            </div>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>
    
{% endblock %}


{% block js %}
\t\t<script src=\"{{asset('js/backoffice/direct-edit.js')}}\"></script>\t
{% endblock %}", "backoffice/accueil/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/accueil/index.html.twig");
    }
}
