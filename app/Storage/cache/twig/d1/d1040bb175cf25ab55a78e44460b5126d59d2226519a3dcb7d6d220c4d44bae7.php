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

/* public/layout.html.twig */
class __TwigTemplate_52d7b9d103d68537383b5855c8291e269eb74e964ec98ce51820a40f2a2ccb8d extends \Twig\Template
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
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["css/stylePublic.css"]), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
</head>
<body>

";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "

<footer>
\t<a href=\"#\">Mentions légales</a>
\t<a href=\"#\">Contact</a>
\t<a href=\"#\">Crédits</a>
</footer>
</body>

</html>";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "public/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  55 => 12,  53 => 11,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Yearbook - MMI</title>
\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"{{assetP('css/stylePublic.css')}}\" type=\"text/css\" media=\"all\">
</head>
<body>

{% block content %}{% endblock %}


<footer>
\t<a href=\"#\">Mentions légales</a>
\t<a href=\"#\">Contact</a>
\t<a href=\"#\">Crédits</a>
</footer>
</body>

</html>", "public/layout.html.twig", "C:\\wamp64\\www\\projets\\PTUT\\ajax_sans_layoutBg 2702\\app\\Views\\public\\layout.html.twig");
    }
}
