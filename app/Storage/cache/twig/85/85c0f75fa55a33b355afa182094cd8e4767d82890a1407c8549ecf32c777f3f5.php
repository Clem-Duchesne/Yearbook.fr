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

/* public/index.html.twig */
class __TwigTemplate_f16c96b32e4be73d0878c430db1ade4a94cdd5f933175d98309e575c0676b89f extends \Twig\Template
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
        return "public/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/layout.html.twig", "public/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<header>

    <a href=\"index.html\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["img/logo.png"]), "html", null, true);
        echo "\" alt=\"logo\"></a>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["login"]), "html", null, true);
        echo "\">Connexion</a>

</header>
<main>

    <section class=\"welcome\">

        <div class=\"content\">
            <h1>Regarder les Yearbooks !</h1>
            <h2>Retracer la vie des anciennes <br> promotions MMI à l'IUT d'Angoulême</h2>
        </div>
    </section>
    <section class=\"visu\">
        <h2>Visualiser les Yearbooks</h2>
        <div class=\"container-book\">
            <a href=\"#\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["img/icone_livre/Yearbook_2018-2020.png"]), "html", null, true);
        echo "\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["img/icone_livre/Yearbook_2019-2021.png"]), "html", null, true);
        echo "\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["img/icone_livre/Yearbook_2020-2022.png"]), "html", null, true);
        echo "\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetP')->getCallable(), ["img/icone_livre/Yearbook_2021-2023.png"]), "html", null, true);
        echo "\" alt=\"icone Yearbook\"></a>
        </div>
    </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  84 => 24,  80 => 23,  76 => 22,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"public/layout.html.twig\" %}

{% block content %}
<header>

    <a href=\"index.html\"><img src=\"{{assetP('img/logo.png')}}\" alt=\"logo\"></a>
    <a href=\"{{ url('login')}}\">Connexion</a>

</header>
<main>

    <section class=\"welcome\">

        <div class=\"content\">
            <h1>Regarder les Yearbooks !</h1>
            <h2>Retracer la vie des anciennes <br> promotions MMI à l'IUT d'Angoulême</h2>
        </div>
    </section>
    <section class=\"visu\">
        <h2>Visualiser les Yearbooks</h2>
        <div class=\"container-book\">
            <a href=\"#\"><img src=\"{{assetP('img/icone_livre/Yearbook_2018-2020.png')}}\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"{{assetP('img/icone_livre/Yearbook_2019-2021.png')}}\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"{{assetP('img/icone_livre/Yearbook_2020-2022.png')}}\" alt=\"icone Yearbook\"></a>
            <a href=\"#\"><img src=\"{{assetP('img/icone_livre/Yearbook_2021-2023.png')}}\" alt=\"icone Yearbook\"></a>
        </div>
    </section>
</main>
{% endblock %}
", "public/index.html.twig", "C:\\xampp\\htdocs\\ptutMVC\\app\\Views\\public\\index.html.twig");
    }
}
