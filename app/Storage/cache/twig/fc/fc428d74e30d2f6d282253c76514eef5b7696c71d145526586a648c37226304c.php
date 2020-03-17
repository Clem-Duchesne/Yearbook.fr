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

/* backoffice/layoutMultForm.html.twig */
class __TwigTemplate_0041c67edc308fa00731eaeafa9a24e59ec981cdfba8b1954770f00195656fe8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!-- Mon css -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["assets/css/style.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["assets/css/BOstyle.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
    
    
    <!-- Polices -->
    <link href=\"https://fonts.googleapis.com/css?family=Righteous|Work+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.typekit.net/vfb8orm.css\">
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

    <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

    <body>
        <nav>
            ";
        // line 24
        $this->loadTemplate("backoffice/nav.html.twig", "backoffice/layoutMultForm.html.twig", 24)->display($context);
        // line 25
        echo "        </nav>
        <main>
           
            ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "            
            
        </main>
    </body>
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"   crossorigin=\"anonymous\"></script>
    ";
        // line 34
        $this->displayBlock('js', $context, $blocks);
        // line 35
        echo "</html>
";
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Simon Botté | Backoffice";
    }

    // line 28
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
        return "backoffice/layoutMultForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 28,  97 => 19,  92 => 35,  90 => 34,  83 => 29,  81 => 28,  76 => 25,  74 => 24,  66 => 19,  55 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!-- Mon css -->
    <link href=\"{{url('assets/css/style.css')}}\" rel=\"stylesheet\" type='text/css'>
    <link href=\"{{url('assets/css/BOstyle.css')}}\" rel=\"stylesheet\" type='text/css'>
    
    
    <!-- Polices -->
    <link href=\"https://fonts.googleapis.com/css?family=Righteous|Work+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.typekit.net/vfb8orm.css\">
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

    <title>{% block title %}Simon Botté | Backoffice{% endblock %}</title>
</head>

    <body>
        <nav>
            {% include 'backoffice/nav.html.twig' %}
        </nav>
        <main>
           
            {% block content %}{% endblock %}
            
            
        </main>
    </body>
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"   crossorigin=\"anonymous\"></script>
    {% block js %}{% endblock %}
</html>
", "backoffice/layoutMultForm.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/layoutMultForm.html.twig");
    }
}
