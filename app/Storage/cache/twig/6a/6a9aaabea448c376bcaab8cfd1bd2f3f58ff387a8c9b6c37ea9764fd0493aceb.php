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

/* backoffice/about/index.html.twig */
class __TwigTemplate_8aabbd000fa1130b510663d06c3035ab1ca2c310fb648c9e152d703a1d370134 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backoffice/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backoffice/layout.html.twig", "backoffice/about/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "      
    <section id=\"about\">
        <h2 class=\"title\"> <input type=\"text\" name=\"aboutTitle\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "aboutTitle", [], "any", false, false, false, 6), "html", null, true);
        echo "\"> </h2>
        <div class=\"content\">
            <textarea type=\"text\" name=\"aboutPara\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "aboutPara", [], "any", false, false, false, 8), "html", null, true);
        echo "</textarea>
            <div class=\"void\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/monAnniv_1801.jpg"]), "html", null, true);
        echo "\" alt=\"Alpha Angouleme | simonbotte.fr\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>
    
";
    }

    // line 22
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "backoffice/about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  79 => 22,  65 => 10,  60 => 8,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backoffice/layout.html.twig\" %}

{% block content %}
      
    <section id=\"about\">
        <h2 class=\"title\"> <input type=\"text\" name=\"aboutTitle\" value=\"{{text.aboutTitle}}\"> </h2>
        <div class=\"content\">
            <textarea type=\"text\" name=\"aboutPara\">{{text.aboutPara}}</textarea>
            <div class=\"void\">
                <img src=\"{{asset('img/monAnniv_1801.jpg')}}\" alt=\"Alpha Angouleme | simonbotte.fr\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>
    
{% endblock %}


{% block js %}

{% endblock %}", "backoffice/about/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/about/index.html.twig");
    }
}
