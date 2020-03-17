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

/* layout.html.twig */
class __TwigTemplate_1cb7d4757773d855cc66db0fa4a1916552feadd2819f16a3251fb6a716b0e223 extends \Twig\Template
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

    <!-- Balise référencement -->
    <meta name=\"author\" content=\"Simon Botte\" />
    <meta name=\"description\" content=\"portfolio de simon botte\" />
    <meta name=\"keywords\" content=\"portfolio,simon botte,web developer\" />
    <meta name=\"Resource-type\" content=\"Portfolio\" />

    <!-- Mon css -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["assets/css/style.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
    <!-- Polices -->
    <link href=\"https://fonts.googleapis.com/css?family=Righteous|Work+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.typekit.net/vfb8orm.css\">
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

  
     
";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "

 <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(window).on('load', function() {
        \$(\".loader\").fadeOut(\"200\");
        \$('.imgOfMe').addClass('opa1');
        \$('body').css({
            'overflow': 'visible',
        });
    });

</script>
<!-- mon js -->
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["assets/js/main.js"]), "html", null, true);
        echo "\"></script>




</html>
";
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Simon Botté | Portfolio";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  102 => 22,  91 => 42,  75 => 28,  73 => 27,  65 => 22,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <!-- Balise référencement -->
    <meta name=\"author\" content=\"Simon Botte\" />
    <meta name=\"description\" content=\"portfolio de simon botte\" />
    <meta name=\"keywords\" content=\"portfolio,simon botte,web developer\" />
    <meta name=\"Resource-type\" content=\"Portfolio\" />

    <!-- Mon css -->
    <link href=\"{{url('assets/css/style.css')}}\" rel=\"stylesheet\" type='text/css'>
    <!-- Polices -->
    <link href=\"https://fonts.googleapis.com/css?family=Righteous|Work+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.typekit.net/vfb8orm.css\">
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

    <title>{% block title %}Simon Botté | Portfolio{% endblock %}</title>
</head>

  
     
{% block content %}{% endblock %}


 <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    \$(window).on('load', function() {
        \$(\".loader\").fadeOut(\"200\");
        \$('.imgOfMe').addClass('opa1');
        \$('body').css({
            'overflow': 'visible',
        });
    });

</script>
<!-- mon js -->
<script type=\"text/javascript\" src=\"{{url('assets/js/main.js')}}\"></script>




</html>
", "layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/layout.html.twig");
    }
}
