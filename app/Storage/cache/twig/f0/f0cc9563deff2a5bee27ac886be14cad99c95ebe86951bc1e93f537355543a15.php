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

/* backoffice/nav.html.twig */
class __TwigTemplate_ad6be9231005c109a4fe280d054bcf8ddcb18cb890f1d7057f3fb75be684ecb2 extends \Twig\Template
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
        // line 1
        echo "<div class=\"submenu\" id=\"Accueil\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["backoffice/accueil"]), "html", null, true);
        echo "\">Accueil</a>
</div>

<div class=\"submenu\" id=\"competence\">
    <a href=\"#\">Compétences</a>
</div>

<div class=\"submenu\" id=\"domaine\">
    <a href=\"#\">Domaines</a>
</div>

<div class=\"submenu\" id=\"photo\">
    <a href=\"#\">Photographies</a>
</div>

<div class=\"submenu\" id=\"devweb\">
    <a href=\"#\">Developpement</a>
</div>

<div class=\"submenu\" id=\"contact\">
    <a href=\"#\">Contact</a>
</div>";
    }

    public function getTemplateName()
    {
        return "backoffice/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"submenu\" id=\"Accueil\">
    <a href=\"{{url('backoffice/accueil')}}\">Accueil</a>
</div>

<div class=\"submenu\" id=\"competence\">
    <a href=\"#\">Compétences</a>
</div>

<div class=\"submenu\" id=\"domaine\">
    <a href=\"#\">Domaines</a>
</div>

<div class=\"submenu\" id=\"photo\">
    <a href=\"#\">Photographies</a>
</div>

<div class=\"submenu\" id=\"devweb\">
    <a href=\"#\">Developpement</a>
</div>

<div class=\"submenu\" id=\"contact\">
    <a href=\"#\">Contact</a>
</div>", "backoffice/nav.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/nav.html.twig");
    }
}
