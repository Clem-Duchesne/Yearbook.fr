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
class __TwigTemplate_67fd3d9a1b2d2e9a18fc3d8f1e1d6767cc5ea9066b51da95ac26923a2fd9cce1 extends \Twig\Template
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
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/login.html.twig", 1);
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
\t\t<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["login"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<input type=\"text\" placeholder=\"Identifiant\" name=\"name\">
\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" name=\"password\">
\t\t\t<button>Se connecter</button>
\t\t</form>
\t\t<div id=\"message\">";
        // line 17
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  63 => 12,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/layout.html.twig\" %}

{% block content %}
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
", "app/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutMVC-1/app/Views/app/login.html.twig");
    }
}
