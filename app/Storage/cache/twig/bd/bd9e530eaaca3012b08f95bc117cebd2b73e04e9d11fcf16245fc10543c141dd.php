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

/* app/configuration.html.twig */
class __TwigTemplate_7bcfabdd5be79344c61655d28257d7fdfebf8350d4d71a91813ecb6f6a9d9f6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "app/layout-without-footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/layout-without-footer.html.twig", "app/configuration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main id=\"configuration\">
        <div id=\"liste\">
            <ul>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etu_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 8
            echo "                <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "nom", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "pnom", [], "any", false, false, false, 8), "html", null, true);
            echo "<i class=\"las la-times\"></i> <i class=\"las la-pen\"></i></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equ_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 11
            echo "                <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "nom", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "pnom", [], "any", false, false, false, 11), "html", null, true);
            echo "<i class=\"las la-times\"></i> <i class=\"las la-pen\"></i></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
            </ul>
        </div>
        <div id=\"ajout\">
            <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["configuration"]), "html", null, true);
        echo "\" method=\"post\">
                <div>
                    <label><i class=\"las la-calendar-week\"></i></label>
                    <input type=\"text\" placeholder=\"Promotion\" id=\"Promotion\">
                </div>
                <div>
                    <label><i class=\"las la-tags\"></i></label>
                    <input type=\"text\" placeholder=\"Nom\" id=\"Nom\">
                    <input type=\"text\" placeholder=\"Prénom\" id=\"Prenom\">
                </div>
                <div id=\"radios\">
                    <div class=\"radio\">
                        <span><i class=\"las la-sign\"></i><b>Statut</b></span>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" checked=\"check\">
                            <label>Elève</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\">
                            <label>Professeur</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\">
                            <label>Presonnel</label>
                        </div>
                    </div>
                    <div class=\"radio\">
                        <span><i class=\"las la-image\"></i><b>Droit a l'image</b></span>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" checked=\"check\">
                            <label>Oui</label>
                        </div>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\">
                            <label>Non</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type=\"button\" id=\"add\">Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["delog"]), "html", null, true);
        echo "\"><i class=\"las la-angle-left\"></i>Déconnexion</a>
            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["choix"]), "html", null, true);
        echo "\">2<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


";
    }

    public function getTemplateName()
    {
        return "app/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  142 => 64,  92 => 17,  86 => 13,  75 => 11,  70 => 10,  59 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/layout-without-footer.html.twig\" %}

{% block content %}
<main id=\"configuration\">
        <div id=\"liste\">
            <ul>
                {% for name in etu_names %}
                <li> {{name.nom}} {{name.pnom}}<i class=\"las la-times\"></i> <i class=\"las la-pen\"></i></li>
            {% endfor %}
                {% for name in equ_names %}
                <li> {{name.nom}} {{name.pnom}}<i class=\"las la-times\"></i> <i class=\"las la-pen\"></i></li>
            {% endfor %}

            </ul>
        </div>
        <div id=\"ajout\">
            <form action=\"{{ url('configuration')}}\" method=\"post\">
                <div>
                    <label><i class=\"las la-calendar-week\"></i></label>
                    <input type=\"text\" placeholder=\"Promotion\" id=\"Promotion\">
                </div>
                <div>
                    <label><i class=\"las la-tags\"></i></label>
                    <input type=\"text\" placeholder=\"Nom\" id=\"Nom\">
                    <input type=\"text\" placeholder=\"Prénom\" id=\"Prenom\">
                </div>
                <div id=\"radios\">
                    <div class=\"radio\">
                        <span><i class=\"las la-sign\"></i><b>Statut</b></span>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" checked=\"check\">
                            <label>Elève</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\">
                            <label>Professeur</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\">
                            <label>Presonnel</label>
                        </div>
                    </div>
                    <div class=\"radio\">
                        <span><i class=\"las la-image\"></i><b>Droit a l'image</b></span>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" checked=\"check\">
                            <label>Oui</label>
                        </div>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\">
                            <label>Non</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type=\"button\" id=\"add\">Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"{{ url('delog')}}\"><i class=\"las la-angle-left\"></i>Déconnexion</a>
            <a href=\"{{ url('choix')}}\">2<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


{% endblock %}", "app/configuration.html.twig", "C:\\xampp\\htdocs\\ptutMVC\\app\\Views\\app\\configuration.html.twig");
    }
}
