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

/* app/creation/mep.html.twig */
class __TwigTemplate_c0ad6eb57066deb2a5a00864a72461e1e444179c49de0161198164220c8ef268 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage' data-image=\"image1\"></div>
                            <div id=\"v\" class='zoneImage' data-image=\"image2\"></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage' data-image=\"image3\"></div>
                            <div id=\"h\" class='zoneImage' data-image=\"image4\"></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage' data-image=\"image1\"></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage' data-image=\"image1\"></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage' data-image=\"image1\"></div>
                        <div class='zoneImage' data-image=\"image2\"></div>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "app/creation/mep.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage' data-image=\"image1\"></div>
                            <div id=\"v\" class='zoneImage' data-image=\"image2\"></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage' data-image=\"image3\"></div>
                            <div id=\"h\" class='zoneImage' data-image=\"image4\"></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage' data-image=\"image1\"></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage' data-image=\"image1\"></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage' data-image=\"image1\"></div>
                        <div class='zoneImage' data-image=\"image2\"></div>
                    </div>
", "app/creation/mep.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutYB/Yearbook/app/Views/app/creation/mep.html.twig");
    }
}
