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

/* app/configuration/index.html.twig */
class __TwigTemplate_4e780b136a611f54e23eee2207ed6737c78c4015f8378e33f07cf6a92afe89a6 extends \Twig\Template
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
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/configuration/index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["etudiants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 8
            echo "                    <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "pnom", [], "any", false, false, false, 8), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration/deleteEtu/"]) . twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 8)), "html", null, true);
            echo "\"><i class=\"las la-times\"></i></a> <a href=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration/editEtu/"]) . twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 8)), "html", null, true);
            echo "\"><i class=\"las la-pen\"></i></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 12
            echo "                    <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "pnom", [], "any", false, false, false, 12), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration/deleteEqui/"]) . twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 12)), "html", null, true);
            echo "\"><i class=\"las la-times\"></i></a> <a href=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration/editEqui/"]) . twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 12)), "html", null, true);
            echo "\"><i class=\"las la-pen\"></i></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            </ul>
        </div>
        <div id=\"ajout\">
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration/add"]), "html", null, true);
        echo "\" method=\"post\">
                <!--<div>
                    <label><i class=\"las la-calendar-week\"></i></label>
                    <input type=\"text\" placeholder=\"Promotion\" id=\"Promotion\">
                </div>-->
                <div>
                    <label><i class=\"las la-tags\"></i></label>
                    <input type=\"text\" placeholder=\"Nom\" name=\"nom\" id=\"Nom\">
                    <input type=\"text\" placeholder=\"Prénom\" name=\"pnom\" id=\"Prenom\">
                </div>
                <div id=\"radios\">
                    <div class=\"radio\">
                        <span><i class=\"las la-sign\"></i><b>Statut</b></span>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" value=\"etudiant\" checked=\"check\">
                            <label>Elève</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" value=\"equipe\">
                            <label>Equipe du </br> departement</label>
                        </div>
                        
                    </div>
                    <div class=\"radio\">
                        <span><i class=\"las la-image\"></i><b>Droit a l'image</b></span>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" value=\"1\" checked=\"check\">
                            <label>Oui</label>
                        </div>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" value=\"0\">
                            <label>Non</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type=\"submit\" class=\"btn\">Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/delog"]), "html", null, true);
        echo "\"><i class=\"las la-angle-left\"></i>Déconnexion</a>
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/choix"]), "html", null, true);
        echo "\">2<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


";
    }

    public function getTemplateName()
    {
        return "app/configuration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  148 => 61,  102 => 18,  96 => 14,  81 => 12,  77 => 11,  74 => 10,  59 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/layout.html.twig\" %}

{% block content %}
<main id=\"configuration\">
        <div id=\"liste\">
            <ul>
                {% for etudiant in etudiants %}
                    <li> {{etudiant.nom}} {{etudiant.pnom}} <a href=\"{{url('app/configuration/deleteEtu/') ~ etudiant.id}}\"><i class=\"las la-times\"></i></a> <a href=\"{{url('app/configuration/editEtu/') ~ etudiant.id}}\"><i class=\"las la-pen\"></i></a></li>
                {% endfor %}

                {% for equipe in equipes %}
                    <li> {{equipe.nom}} {{equipe.pnom}} <a href=\"{{url('app/configuration/deleteEqui/') ~ equipe.id}}\"><i class=\"las la-times\"></i></a> <a href=\"{{url('app/configuration/editEqui/') ~ equipe.id}}\"><i class=\"las la-pen\"></i></a></li>
                {% endfor %}

            </ul>
        </div>
        <div id=\"ajout\">
            <form action=\"{{url('app/configuration/add')}}\" method=\"post\">
                <!--<div>
                    <label><i class=\"las la-calendar-week\"></i></label>
                    <input type=\"text\" placeholder=\"Promotion\" id=\"Promotion\">
                </div>-->
                <div>
                    <label><i class=\"las la-tags\"></i></label>
                    <input type=\"text\" placeholder=\"Nom\" name=\"nom\" id=\"Nom\">
                    <input type=\"text\" placeholder=\"Prénom\" name=\"pnom\" id=\"Prenom\">
                </div>
                <div id=\"radios\">
                    <div class=\"radio\">
                        <span><i class=\"las la-sign\"></i><b>Statut</b></span>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" value=\"etudiant\" checked=\"check\">
                            <label>Elève</label>
                        </div>
                        <div>

                            <input type=\"radio\" name=\"statut\" id=\"statut\" value=\"equipe\">
                            <label>Equipe du </br> departement</label>
                        </div>
                        
                    </div>
                    <div class=\"radio\">
                        <span><i class=\"las la-image\"></i><b>Droit a l'image</b></span>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" value=\"1\" checked=\"check\">
                            <label>Oui</label>
                        </div>
                        <div>
                            <input type=\"radio\" name=\"droitImage\" id=\"droitImage\" value=\"0\">
                            <label>Non</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type=\"submit\" class=\"btn\">Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"{{ url('app/delog')}}\"><i class=\"las la-angle-left\"></i>Déconnexion</a>
            <a href=\"{{ url('app/choix')}}\">2<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


{% endblock %}", "app/configuration/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutYB/Yearbook/app/Views/app/configuration/index.html.twig");
    }
}
