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

/* app/superadmin/layout.html.twig */
class __TwigTemplate_fe68b5a320605ee6f08153a37c9247c681ba061bc0600260d5db9813303a8ab5 extends \Twig\Template
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
    <div id=\"burgerButton\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "

</body>
";
        // line 26
        $this->displayBlock('js', $context, $blocks);
        // line 27
        echo "</html>";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "app/superadmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  81 => 22,  77 => 27,  75 => 26,  70 => 23,  68 => 22,  57 => 14,  50 => 10,  39 => 1,);
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
    <div id=\"burgerButton\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

{% block content %}{% endblock %}


</body>
{% block js %}{% endblock %}
</html>", "app/superadmin/layout.html.twig", "C:\\wamp64\\www\\projets\\PTUT\\ptutMVC\\app\\Views\\app\\superadmin\\layout.html.twig");
    }
}
