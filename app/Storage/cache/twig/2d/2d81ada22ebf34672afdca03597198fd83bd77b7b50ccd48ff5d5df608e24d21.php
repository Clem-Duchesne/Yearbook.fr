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
class __TwigTemplate_80f75b791a460fd56fc977832c5bde1017a4de2d0daa1992ef8c134f9772ebc7 extends \Twig\Template
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
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 1)) {
            echo " active ";
        }
        echo " \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/choix"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 2)) {
            echo " active ";
        }
        echo " \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/step3"]), "html", null, true);
        echo "\" class=\"step ";
        if ((($context["step"] ?? null) >= 3)) {
            echo " active ";
        }
        echo " \"> <span> 3 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"";
        // line 22
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
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
</body>
";
        // line 34
        $this->displayBlock('js', $context, $blocks);
        // line 35
        echo "</html>";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 34
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
        return array (  123 => 34,  117 => 31,  113 => 35,  111 => 34,  107 => 32,  105 => 31,  89 => 22,  80 => 20,  71 => 18,  62 => 16,  57 => 14,  50 => 10,  39 => 1,);
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
        <a href=\"{{url('app/configuration')}}\" class=\"step {% if (step >= 1) %} active {% endif %} \"> <span> 1 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"{{url('app/choix')}}\" class=\"step {% if (step >= 2) %} active {% endif %} \"> <span> 2 </span> </a>
        <div class=\"barre\"></div>
        <a href=\"{{url('app/step3')}}\" class=\"step {% if (step >= 3) %} active {% endif %} \"> <span> 3 </span> </a>
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
</html>", "app/layout.html.twig", "I:\\xampp-www\\ptutMVC\\app\\Views\\app\\layout.html.twig");
    }
}
