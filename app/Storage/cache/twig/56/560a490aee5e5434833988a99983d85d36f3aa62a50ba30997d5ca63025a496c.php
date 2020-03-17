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

/* app/choix/index.html.twig */
class __TwigTemplate_17ac35daaf57d9f5f246403efdc6e2e27bf4698cef61d9ab4449e996c27003f6 extends \Twig\Template
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
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/choix/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main id=\"choix\">
        <div id=\"fond\">
            <h2>Choix des fonds</h2>
            <div id=\"fonds\">
                <div class=\"fond\">
                    <form method=\"POST\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/choix/fond/add"]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                        <label id=\"picture_click\" for=\"picture\">
                            <div id=\"beforeSelect\">
                                <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                            </div>

                            <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                            <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                            <button id=\"btnAddFond\" title=\"Ajouter le fond\" style=\"display:none\" type=\"submit\"><i class=\"las la-check\"></i></button>
                        </label>
                    </form>
                </div>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fonds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fond"]) {
            // line 22
            echo "                    <div class=\"fond\">
                        <img  src=\"";
            // line 23
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/fond/mini/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "illustration_mini", [], "any", false, false, false, 23)), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/choix/fond/delete/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "id", [], "any", false, false, false, 24)), "html", null, true);
            echo "\"> <i class=\"las la-times\"></i> </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

        </div>
        <div id=\"googleFont\">
            <div>
                <h2>Choix des polices</h2>
                <p> 1- Allez sur le site de Google Fonts :
                    https://fonts.google.com/ </p>

                <p> 2- Choisissez vos polices en cliquant sur le symbole </p>

                <p>3- En bas à droite cliquez sur la barre grise </p>

                <p> 4-Copiez collez les liens CSS et HTML dans les champs ci-dessous </p>
            </div>


            <form>
                <div>
                    <label><i class=\"las la-code\"></i></label>
                    <input type=\"text\" placeholder=\"Code HTML\">
                </div>
                <div>
                    <label><i class=\"las la-code\"></i></label>
                    <input type=\"text\" placeholder=\"Code CSS\">
                </div>
                <div>
                    <button>Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/configuration"]), "html", null, true);
        echo "\"><i class=\"las la-angle-left\"></i>1</a>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation"]), "html", null, true);
        echo "\">3<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


";
    }

    // line 67
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["/js/showPictureUpload.js"]), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "app/choix/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 69,  145 => 68,  141 => 67,  131 => 60,  127 => 59,  93 => 27,  84 => 24,  80 => 23,  77 => 22,  73 => 21,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/layout.html.twig\" %}

{% block content %}
<main id=\"choix\">
        <div id=\"fond\">
            <h2>Choix des fonds</h2>
            <div id=\"fonds\">
                <div class=\"fond\">
                    <form method=\"POST\" action=\"{{url('app/choix/fond/add')}}\" enctype=\"multipart/form-data\">
                        <label id=\"picture_click\" for=\"picture\">
                            <div id=\"beforeSelect\">
                                <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                            </div>

                            <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                            <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                            <button id=\"btnAddFond\" title=\"Ajouter le fond\" style=\"display:none\" type=\"submit\"><i class=\"las la-check\"></i></button>
                        </label>
                    </form>
                </div>
                {% for fond in fonds %}
                    <div class=\"fond\">
                        <img  src=\"{{ assetA('img/fond/mini/') ~ fond.illustration_mini }}\">
                        <a href=\"{{url('app/choix/fond/delete/') ~ fond.id }}\"> <i class=\"las la-times\"></i> </a>
                    </div>
                {% endfor %}
            </div>

        </div>
        <div id=\"googleFont\">
            <div>
                <h2>Choix des polices</h2>
                <p> 1- Allez sur le site de Google Fonts :
                    https://fonts.google.com/ </p>

                <p> 2- Choisissez vos polices en cliquant sur le symbole </p>

                <p>3- En bas à droite cliquez sur la barre grise </p>

                <p> 4-Copiez collez les liens CSS et HTML dans les champs ci-dessous </p>
            </div>


            <form>
                <div>
                    <label><i class=\"las la-code\"></i></label>
                    <input type=\"text\" placeholder=\"Code HTML\">
                </div>
                <div>
                    <label><i class=\"las la-code\"></i></label>
                    <input type=\"text\" placeholder=\"Code CSS\">
                </div>
                <div>
                    <button>Ajouter</button>
                </div>
            </form>
        </div>
        <div class=\"prevNext\" id=\"prevNext\">
            <a href=\"{{ url('app/configuration')}}\"><i class=\"las la-angle-left\"></i>1</a>
            <a href=\"{{ url('app/creation')}}\">3<i class=\"las la-angle-right\"></i></a>
        </div>
    </main>


{% endblock %}

{% block js %}
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"{{assetA('/js/showPictureUpload.js')}}\"></script>
{% endblock %}", "app/choix/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutMVC/app/Views/app/choix/index.html.twig");
    }
}
