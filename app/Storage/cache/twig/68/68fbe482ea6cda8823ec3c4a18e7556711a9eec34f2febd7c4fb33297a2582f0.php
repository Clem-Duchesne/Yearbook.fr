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

/* backoffice/text/index.html.twig */
class __TwigTemplate_efcd326168ff338902f63fef861ec58d5376bf578887cbf16e26ecdcbced95d6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("backoffice/layout.html.twig", "backoffice/text/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  
<h1>Texte</h1>  
<div id=\"texts\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["texts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 8
            echo "\t<div class=\"text\"> 
\t\t
\t\t<span>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "nom", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"nom\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "aboutTitle", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"aboutTitle\" >";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "aboutTitle", [], "any", false, false, false, 18), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "aboutPara", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"aboutPara\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "aboutPara", [], "any", false, false, false, 24), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t 
\t\t<span>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "competenceTitle", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"competenceTitle\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "competenceTitle", [], "any", false, false, false, 30), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "competencePara", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"competencePara\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "competencePara", [], "any", false, false, false, 36), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "domainesTitle", [], "any", false, false, false, 40), "html", null, true);
            echo "</span> 
\t\t<div class=\"hide\" >
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"domaineTitle\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "domainesTitle", [], "any", false, false, false, 42), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "photoTitle", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"photoTitle\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "photoTitle", [], "any", false, false, false, 48), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "photoPara", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"photoPara\"> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "photoPara", [], "any", false, false, false, 54), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "devwebTitle", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"devwebTitle\"> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "devwebTitle", [], "any", false, false, false, 60), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactTitle", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactTitle\"> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactTitle", [], "any", false, false, false, 66), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t 
\t\t<span>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactNom", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactNom\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactNom", [], "any", false, false, false, 73), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t\t<span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactEmail", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactEmail\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactEmail", [], "any", false, false, false, 80), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t\t<span>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactMessage", [], "any", false, false, false, 85), "html", null, true);
            echo "</span>
\t\t<div class=\"hide\">
\t\t\t<textarea  type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactMessage\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["text"], "contactMessage", [], "any", false, false, false, 87), "html", null, true);
            echo "</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "</div>

";
    }

    // line 99
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/backoffice/direct-edit.js"]), "html", null, true);
        echo "\"></script>\t
";
    }

    public function getTemplateName()
    {
        return "backoffice/text/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 100,  235 => 99,  229 => 94,  216 => 87,  211 => 85,  203 => 80,  198 => 78,  190 => 73,  185 => 71,  177 => 66,  172 => 64,  165 => 60,  160 => 58,  153 => 54,  148 => 52,  141 => 48,  136 => 46,  129 => 42,  124 => 40,  117 => 36,  112 => 34,  105 => 30,  100 => 28,  93 => 24,  88 => 22,  81 => 18,  76 => 16,  69 => 12,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backoffice/layout.html.twig\" %}

{% block content %}
  
<h1>Texte</h1>  
<div id=\"texts\">
{% for text in texts%}
\t<div class=\"text\"> 
\t\t
\t\t<span>{{text.nom}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"nom\">{{text.nom}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.aboutTitle}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"aboutTitle\" >{{text.aboutTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.aboutPara}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"aboutPara\">{{text.aboutPara}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t 
\t\t<span>{{text.competenceTitle}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"competenceTitle\">{{text.competenceTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.competencePara}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"competencePara\">{{text.competencePara}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.domainesTitle}}</span> 
\t\t<div class=\"hide\" >
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"domaineTitle\">{{text.domainesTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.photoTitle}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' type=\"text\" name=\"photoTitle\">{{text.photoTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.photoPara}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"photoPara\"> {{text.photoPara}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.devwebTitle}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"devwebTitle\"> {{text.devwebTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t<span>{{text.contactTitle}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactTitle\"> {{text.contactTitle}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t 
\t\t<span>{{text.contactNom}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactNom\">{{text.contactNom}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t\t<span>{{text.contactEmail}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactEmail\">{{text.contactEmail}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t\t<span>{{text.contactMessage}}</span>
\t\t<div class=\"hide\">
\t\t\t<textarea  type=\"text\" oninput='this.style.height = \"\";this.style.height = this.scrollHeight + \"px\"' name=\"contactMessage\">{{text.contactMessage}}</textarea>
\t\t\t<i class=\"lar la-edit\"></i>
\t\t</div>
\t\t
\t\t
\t</div>
{% endfor %}
</div>

{% endblock %}


{% block js %}
\t\t<script src=\"{{asset('js/backoffice/direct-edit.js')}}\"></script>\t
{% endblock %}", "backoffice/text/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/backoffice/text/index.html.twig");
    }
}
