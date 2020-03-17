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

/* backoffice/domaine/index.html.twig */
class __TwigTemplate_60526042325d95625bec8dcf0b2c899cfe9f8fb7f2d02290b9123c374740ba36 extends \Twig\Template
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
        return "backoffice/layoutMultForm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backoffice/layoutMultForm.html.twig", "backoffice/domaine/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       

<section id=\"domaines\">
    <form id=\"editForm\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('edit')->getCallable(), [($context["link"] ?? null)]), "html", null, true);
        echo "\" method=\"POST\">
        <h2 class=\"title\"><input type=\"text\" name=\"domainesTitle\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "domainesTitle", [], "any", false, false, false, 7), "html", null, true);
        echo "\"></h2>
        <button id=\"editBtn\" type=\"submit\">Modifier</button>
    </form>
    <div class=\"content\">
          
        <div>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domaines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 14
            echo "            <div class=\"domaine\">
               <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [("backoffice/domaine/edit/" . twig_get_attribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 15))]), "html", null, true);
            echo "\" method=\"POST\">
               <label for=\"icone\">Line-awsome: </label>
                <input type=\"text\" id=\"icone\" name=\"icone\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "icone", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                <h3><input type=\"text\" name=\"name\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></h3>
                <textarea type=\"text\" name=\"text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "text", [], "any", false, false, false, 19), "html", null, true);
            echo "</textarea>
                <button class=\"btnInline\" type=\"submit\">Modifier</button>
                </form>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
    <div class=\"arrowDown\">
        <span></span>
        <span></span>
    </div>
</section>
    
";
    }

    // line 35
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/backoffice/competence.js"]), "html", null, true);
        echo "\"></script>\t
";
    }

    public function getTemplateName()
    {
        return "backoffice/domaine/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  111 => 35,  99 => 24,  88 => 19,  84 => 18,  80 => 17,  75 => 15,  72 => 14,  68 => 13,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backoffice/layoutMultForm.html.twig\" %}

{% block content %}       

<section id=\"domaines\">
    <form id=\"editForm\" action=\"{{edit(link)}}\" method=\"POST\">
        <h2 class=\"title\"><input type=\"text\" name=\"domainesTitle\" value=\"{{text.domainesTitle}}\"></h2>
        <button id=\"editBtn\" type=\"submit\">Modifier</button>
    </form>
    <div class=\"content\">
          
        <div>
            {% for domaine in domaines %}
            <div class=\"domaine\">
               <form action=\"{{url('backoffice/domaine/edit/' ~ domaine.id)}}\" method=\"POST\">
               <label for=\"icone\">Line-awsome: </label>
                <input type=\"text\" id=\"icone\" name=\"icone\" value=\"{{domaine.icone}}\">
                <h3><input type=\"text\" name=\"name\" value=\"{{domaine.name}}\"></h3>
                <textarea type=\"text\" name=\"text\">{{domaine.text}}</textarea>
                <button class=\"btnInline\" type=\"submit\">Modifier</button>
                </form>
            </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"arrowDown\">
        <span></span>
        <span></span>
    </div>
</section>
    
{% endblock %}


{% block js %}
\t\t<script src=\"{{asset('js/backoffice/competence.js')}}\"></script>\t
{% endblock %}", "backoffice/domaine/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/domaine/index.html.twig");
    }
}
