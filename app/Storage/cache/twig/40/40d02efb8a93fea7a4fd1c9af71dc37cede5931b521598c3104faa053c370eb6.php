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

/* public/login.html.twig */
class __TwigTemplate_484dc33d4e6e8c897cf51696d04a33196085282ec37c967d436feae59386f482 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/layout.html.twig", "public/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div id=\"accueilAdmin\">
\t<div id=\"retour\">
\t\t<h2>Perdu ?</h2>
\t\t<p>Vous allez rentrer dans l’interface administrateur de l’application qui vous permettra d’accéder à davantage de fonctionnalités. Il vous suffit de rentrer l’identitifiant et le mot de passe dans les champs à droite. <br/> Si vous n’avez pas d’identifiant ou de mot de passe c’est que vous n’avez pas la possibilité d’accéder au menu administrateur mais vous pouvez toujours visualiser les Yearbook créées sur la page d’accueil.</p>
\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [""]), "html", null, true);
        echo "\">Retour</a>
\t</div>
\t<div id=\"login\">
\t\t<h2>Connexion</h2>
\t\t<form action=\"./configuration.php\">
\t\t\t<input type=\"text\" placeholder=\"Identifiant\">
\t\t\t<input type=\"password\" placeholder=\"Mot de passe\">
\t\t\t<button>Se connecter</button>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "public/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"public/layout.html.twig\" %}

{% block content %}
<div id=\"accueilAdmin\">
\t<div id=\"retour\">
\t\t<h2>Perdu ?</h2>
\t\t<p>Vous allez rentrer dans l’interface administrateur de l’application qui vous permettra d’accéder à davantage de fonctionnalités. Il vous suffit de rentrer l’identitifiant et le mot de passe dans les champs à droite. <br/> Si vous n’avez pas d’identifiant ou de mot de passe c’est que vous n’avez pas la possibilité d’accéder au menu administrateur mais vous pouvez toujours visualiser les Yearbook créées sur la page d’accueil.</p>
\t\t<a href=\"{{ url('')}}\">Retour</a>
\t</div>
\t<div id=\"login\">
\t\t<h2>Connexion</h2>
\t\t<form action=\"./configuration.php\">
\t\t\t<input type=\"text\" placeholder=\"Identifiant\">
\t\t\t<input type=\"password\" placeholder=\"Mot de passe\">
\t\t\t<button>Se connecter</button>
\t\t</form>
\t</div>
</div>
{% endblock %}
", "public/login.html.twig", "C:\\xampp\\htdocs\\ptutMVC\\app\\Views\\public\\login.html.twig");
    }
}
