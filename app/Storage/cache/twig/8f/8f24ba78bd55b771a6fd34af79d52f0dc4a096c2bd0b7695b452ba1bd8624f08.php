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

/* app/layout.html.twig */
class __TwigTemplate_e0997cad41cd5315d4deb4e22ca7a105cfb8749572ea35bddeb738d97c93aaee extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Yearbook - MMI</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/styleApp.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
</head>
<body>
<header>
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/logo.png"]), "html", null, true);
        echo "\">
    <div id=\"progressBarre\">
        <a href=\"./configuration.php\" class=\"step ";
        // line 16
        if ((($context["step"] ?? null) >= 1)) {
            echo " active ";
        }
        echo " \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./choix.php\" class=\"step ";
        // line 18
        if ((($context["step"] ?? null) >= 2)) {
            echo " active ";
        }
        echo " \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./creation.php\" class=\"step ";
        // line 20
        if ((($context["step"] ?? null) >= 3)) {
            echo " active ";
        }
        echo " \"> <span> 3 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./exportation.php\" class=\"step ";
        // line 22
        if ((($context["step"] ?? null) >= 4)) {
            echo " active ";
        }
        echo " \"> <span> 4 </span> </a>
    </div>
    <div id=\"burgerButton\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
<footer>
\t<a href=\"#\">Mentions légales</a>
\t<a href=\"#\">Contact</a>
\t<a href=\"#\">Crédits</a>
</footer>
</body>

</html>";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "app/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  98 => 32,  96 => 31,  82 => 22,  75 => 20,  68 => 18,  61 => 16,  56 => 14,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Yearbook - MMI</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
\t<link href=\"{{assetA('css/styleApp.css')}}\" rel=\"stylesheet\" type='text/css'>
</head>
<body>
<header>
    <img src=\"{{assetA('img/logo.png')}}\">
    <div id=\"progressBarre\">
        <a href=\"./configuration.php\" class=\"step {% if (step >= 1) %} active {% endif %} \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./choix.php\" class=\"step {% if (step >= 2) %} active {% endif %} \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./creation.php\" class=\"step {% if (step >= 3) %} active {% endif %} \"> <span> 3 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"./exportation.php\" class=\"step {% if (step >= 4) %} active {% endif %} \"> <span> 4 </span> </a>
    </div>
    <div id=\"burgerButton\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

{% block content %}{% endblock %}

<footer>
\t<a href=\"#\">Mentions légales</a>
\t<a href=\"#\">Contact</a>
\t<a href=\"#\">Crédits</a>
</footer>
</body>

</html>", "app/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutMVC-1/app/Views/app/layout.html.twig");
    }
}
