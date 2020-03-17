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
class __TwigTemplate_11db1268674d4864de2662768b88c5e64b09cb4f0c26edbbe2a135e7fe0144c6 extends \Twig\Template
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
            'js' => [$this, 'block_js'],
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
    <link href=\"https://fonts.googleapis.com/css?family=Lato|Lemonada|Montserrat|Open+Sans&display=swap\" rel=\"stylesheet\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/styleApp.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
</head>
<body>
<header>
    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/logo.png"]), "html", null, true);
        echo "\">
    <div id=\"progressBarre\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 1)) {
            echo " active ";
        }
        echo " \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/choix"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 2)) {
            echo " active ";
        }
        echo " \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 3)) {
            echo " active ";
        }
        echo " \"> <span> 3 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/export"]), "html", null, true);
        echo "\" class=\"step ";
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
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
</body>
";
        // line 35
        $this->displayBlock('js', $context, $blocks);
        // line 36
        echo "</html>";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_js($context, array $blocks = [])
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
        return array (  124 => 35,  118 => 32,  114 => 36,  112 => 35,  108 => 33,  106 => 32,  90 => 23,  81 => 21,  72 => 19,  63 => 17,  58 => 15,  51 => 11,  39 => 1,);
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
    <link href=\"https://fonts.googleapis.com/css?family=Lato|Lemonada|Montserrat|Open+Sans&display=swap\" rel=\"stylesheet\">
\t<link href=\"{{assetA('css/styleApp.css')}}\" rel=\"stylesheet\" type='text/css'>
</head>
<body>
<header>
    <img src=\"{{assetA('img/logo.png')}}\">
    <div id=\"progressBarre\">
        <a href=\"{{url('app/configuration')}}\" class=\"step {% if (step >= 1) %} active {% endif %} \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"{{url('app/choix')}}\" class=\"step {% if (step >= 2) %} active {% endif %} \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"{{url('app/creation')}}\" class=\"step {% if (step >= 3) %} active {% endif %} \"> <span> 3 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"{{url('app/export')}}\" class=\"step {% if (step >= 4) %} active {% endif %} \"> <span> 4 </span> </a>
    </div>
    <div id=\"burgerButton\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

{% block content %}{% endblock %}

</body>
{% block js %}{% endblock %}
</html>", "app/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutMVC/app/Views/app/layout.html.twig");
    }
}
