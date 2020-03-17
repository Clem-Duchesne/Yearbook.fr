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

/* backoffice/competence/index.html.twig */
class __TwigTemplate_c49b7d0e4e7dd5ae9a9dcced1a318e4882b769c87125a4a886258cbca2178acd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("backoffice/layoutMultForm.html.twig", "backoffice/competence/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       

<section id=\"competence\">
       <form id=\"editForm\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('edit')->getCallable(), [($context["link"] ?? null)]), "html", null, true);
        echo "\" method=\"POST\">
        <h2 class=\"title\"><input type=\"text\" name=\"competenceTitle\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "competenceTitle", [], "any", false, false, false, 7), "html", null, true);
        echo "\"></h2>
        <div class=\"content\">
            <div id=\"resume\">
                <textarea type=\"text\" name=\"competencePara\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "competencePara", [], "any", false, false, false, 10), "html", null, true);
        echo "</textarea>
            </div>
            <button id=\"editBtn\" type=\"submit\">Modifier</button>
        </form>
            <div id=\"barre\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competences"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 16
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) == 1) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) == 4)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) == 7))) {
                // line 17
                echo "                <div class=\"lvls\">
            ";
            }
            // line 19
            echo "                    <div class=\"lvl\">
                        <form action=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [("backoffice/competence/edit/" . twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 20))]), "html", null, true);
            echo "\" method=\"POST\">
                        <p>
                            <input type=\"text\" name=\"name\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                            <label for=\"level";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">Level:</label>
                            <input type=\"text\" id=\"level";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"level\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "level", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                            <button class=\"btnInline\"type=\"submit\">Modifier</button>
                        </p>
                        </form>
                        <span data-lvl=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "level", [], "any", false, false, false, 28), "html", null, true);
            echo "\"></span>
                    </div>
            ";
            // line 30
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) == 3) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) == 6)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) == 9))) {
                // line 31
                echo "                </div>
            ";
            }
            // line 33
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>
    
   ";
    }

    // line 45
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/backoffice/competence.js"]), "html", null, true);
        echo "\"></script>\t
";
    }

    public function getTemplateName()
    {
        return "backoffice/competence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 46,  159 => 45,  147 => 34,  133 => 33,  129 => 31,  127 => 30,  122 => 28,  113 => 24,  109 => 23,  105 => 22,  100 => 20,  97 => 19,  93 => 17,  90 => 16,  73 => 15,  65 => 10,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backoffice/layoutMultForm.html.twig\" %}

{% block content %}       

<section id=\"competence\">
       <form id=\"editForm\" action=\"{{edit(link)}}\" method=\"POST\">
        <h2 class=\"title\"><input type=\"text\" name=\"competenceTitle\" value=\"{{text.competenceTitle}}\"></h2>
        <div class=\"content\">
            <div id=\"resume\">
                <textarea type=\"text\" name=\"competencePara\">{{text.competencePara}}</textarea>
            </div>
            <button id=\"editBtn\" type=\"submit\">Modifier</button>
        </form>
            <div id=\"barre\">
            {% for competence in competences %}
            {% if loop.index == 1 or  loop.index == 4 or loop.index == 7%}
                <div class=\"lvls\">
            {% endif %}
                    <div class=\"lvl\">
                        <form action=\"{{url('backoffice/competence/edit/' ~ competence.id)}}\" method=\"POST\">
                        <p>
                            <input type=\"text\" name=\"name\" value=\"{{competence.name}}\">
                            <label for=\"level{{competence.id}}\">Level:</label>
                            <input type=\"text\" id=\"level{{competence.id}}\" name=\"level\" value=\"{{competence.level}}\">
                            <button class=\"btnInline\"type=\"submit\">Modifier</button>
                        </p>
                        </form>
                        <span data-lvl=\"{{competence.level}}\"></span>
                    </div>
            {% if loop.index == 3 or  loop.index == 6 or loop.index == 9%}
                </div>
            {% endif %}
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
{% endblock %}", "backoffice/competence/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/competence/index.html.twig");
    }
}
