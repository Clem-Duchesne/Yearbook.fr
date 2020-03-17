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

/* /app/superadmin/index.html.twig */
class __TwigTemplate_9c00b28d14da59ac3f47437643b39cb3fef8bb1a61d1188b9b3017e4ff484058 extends \Twig\Template
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
        return "app/superadmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/superadmin/layout.html.twig", "/app/superadmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t\t<main id=\"admin\">

\t\t\t<div id=\"liste\">
\t            <ul>
\t                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 10
            echo "\t                    <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/admin/delete/"]) . twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 10)), "html", null, true);
            echo "\"><i class=\"las la-times\"></i></a>
\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t            </ul>
\t        </div>

\t        <div id=\"add_admin\">
\t\t\t\t<button class=\"btn\">Créer un yearbook</button>
\t\t\t\t<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/admin/add"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"name\">Nom de l'administrateur</label>
\t\t\t\t\t\t<input name=\"name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t<input type=\"password\" name=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn\">Ajouter</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t</main>

";
    }

    public function getTemplateName()
    {
        return "/app/superadmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  72 => 12,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/superadmin/layout.html.twig\" %}

{% block content %}

\t\t<main id=\"admin\">

\t\t\t<div id=\"liste\">
\t            <ul>
\t                {% for admin in admins %}
\t                    <li> {{admin.name}}  <a href=\"{{url('app/admin/delete/') ~ admin.id}}\"><i class=\"las la-times\"></i></a>
\t                {% endfor %}
\t            </ul>
\t        </div>

\t        <div id=\"add_admin\">
\t\t\t\t<button class=\"btn\">Créer un yearbook</button>
\t\t\t\t<form action=\"{{ url('app/admin/add') }}\" method=\"post\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"name\">Nom de l'administrateur</label>
\t\t\t\t\t\t<input name=\"name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t<input type=\"password\" name=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn\">Ajouter</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t</main>

{% endblock %}", "/app/superadmin/index.html.twig", "C:\\wamp64\\www\\projets\\PTUT\\ptutMVC\\app\\Views\\app\\superadmin\\index.html.twig");
    }
}
