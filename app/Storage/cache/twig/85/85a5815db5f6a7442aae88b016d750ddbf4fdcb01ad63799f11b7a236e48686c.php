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

/* app/login.html.twig */
class __TwigTemplate_0114be8ff3e292a6156cea240c80929065bd9f2b205416234da1d74a3ddc7fc8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/styleApp.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<title> YearBook </title>
</head>
<div id=\"accueilAdmin\">
\t<div id=\"retour\">
\t\t<h2>Perdu ?</h2>
\t\t<p>Vous allez rentrer dans l’interface administrateur de l’application qui vous permettra d’accéder à davantage de fonctionnalités. Il vous suffit de rentrer l’identitifiant et le mot de passe dans les champs à droite. <br/> Si vous n’avez pas d’identifiant ou de mot de passe c’est que vous n’avez pas la possibilité d’accéder au menu administrateur mais vous pouvez toujours visualiser les Yearbook créées sur la page d’accueil.</p>
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [""]), "html", null, true);
        echo "\">Retour</a>
\t</div>
\t<div id=\"login\">
\t\t<h2>Connexion</h2>
\t\t<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["login"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<input type=\"text\" placeholder=\"Identifiant\" name=\"name\">
\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" name=\"password\">
\t\t\t<button>Se connecter</button>
\t\t</form>
\t\t<div id=\"message\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "app/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  72 => 21,  65 => 17,  54 => 9,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link href=\"{{assetA('css/styleApp.css')}}\" rel=\"stylesheet\" type='text/css'>
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<title> YearBook </title>
</head>
<div id=\"accueilAdmin\">
\t<div id=\"retour\">
\t\t<h2>Perdu ?</h2>
\t\t<p>Vous allez rentrer dans l’interface administrateur de l’application qui vous permettra d’accéder à davantage de fonctionnalités. Il vous suffit de rentrer l’identitifiant et le mot de passe dans les champs à droite. <br/> Si vous n’avez pas d’identifiant ou de mot de passe c’est que vous n’avez pas la possibilité d’accéder au menu administrateur mais vous pouvez toujours visualiser les Yearbook créées sur la page d’accueil.</p>
\t\t<a href=\"{{ url('')}}\">Retour</a>
\t</div>
\t<div id=\"login\">
\t\t<h2>Connexion</h2>
\t\t<form action=\"{{ url('login')}}\" method=\"post\">
\t\t\t<input type=\"text\" placeholder=\"Identifiant\" name=\"name\">
\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" name=\"password\">
\t\t\t<button>Se connecter</button>
\t\t</form>
\t\t<div id=\"message\">{{ message }}</div>
\t</div>
</div>
{% endblock %}
", "app/login.html.twig", "I:\\xampp-www\\ptutMVC\\app\\Views\\app\\login.html.twig");
    }
}
