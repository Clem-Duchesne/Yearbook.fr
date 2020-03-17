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

/* app/creation/index.html.twig */
class __TwigTemplate_10dc3069c6f377add6838c1050f001db8a99c438ab9db16b00efe90f574e1542 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/creation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div id=\"drag_zone\">

    </div>
<main id=\"creation\">
    <div id=\"menu\">
            <span class=\"activ outil\" data-contenus=\"images\"><i class=\"las la-image\"></i></span>
            <span class=\"outil\" data-contenus=\"fonds\"><i class=\"las la-palette\"></i></span>
            <span class=\"outil\" data-contenus=\"layout\"><i class=\"las la-puzzle-piece\"></i></span>

        </div>
        <div id=\"contenus\">
            <div id=\"images\" class=\"contenu\">
                <!-- Trigger/Open The Modal -->
                <button id=\"popup\"><i class=\"las la-plus-circle\"></i></button>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "                    <img data-content=\"image\" class=\"dragable\" draggable=\"false\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/photo/mini/"]) . twig_get_attribute($this->env, $this->source, $context["image"], "image_mini", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"Photos\" ondragstart=\"return false;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
                <!-- The Modal -->
                <div id=\"myModal\" class=\"modal\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <span class=\"close\">&times;</span>
                            <h2>Ajout d'une image</h2>
                        </div>
                        <div class=\"modal-body\">
                            <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/add/image"]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" runat=\"server\">
                                <label id=\"picture_click\" for=\"picture\">
                                    <div id=\"beforeSelect\">
                                        <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                                    </div>

                                    <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                                    <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                                <button id=\"btnAddFond\" title=\"Ajouter le fond\" style=\"display:none\" type=\"submit\"><i class=\"las la-check\"></i></button>
                            </label>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiants"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 41
            echo "                                <input type=\"checkbox\" id=\"etudiant";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "\" name=\"etud";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "!etud\">
                                <label for=\"etudiant";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "pnom", [], "any", false, false, false, 42), "html", null, true);
            echo "</label>
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipes"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 45
            echo "                                <input type=\"checkbox\" id=\"equipe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
            echo "\" name=\"equi";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "!equi\">
                                <label for=\"equipe";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "pnom", [], "any", false, false, false, 46), "html", null, true);
            echo "</label>
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            
                            </form>
                        </div>
                    </div>
                </div>

                
            
            
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fonds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fond"]) {
            // line 61
            echo "                <img data-content=\"fond\" class=\"dragable\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/fond/mini/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "illustration_mini", [], "any", false, false, false, 61)), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"1\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout1.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"2\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout2.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"3\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout3.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"4\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout4.png"]), "html", null, true);
        echo "\"></div>
            </div>
        </div>

        <div id=\"livre\">
            <div id=\"info\">
                <span>Année ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["yearbook"] ?? null), "annéePromotion", [], "any", false, false, false, 75), "html", null, true);
        echo "</span>
                <span>60 pages</span>
            </div>
            <div id=\"text-menu\" class=\"hidden\">
                    <label for=\"pet-select\">Choisir une police</label>
                    <select name=\"polices\" id=\"font-select\">
                        <option value=\"open\" class=\"opens\" selected>Police par default</option>
                        <option value=\"lemonada\" class=\"lemonada\">Lemonada</option>
                        <option value=\"montserrat\" class=\"montserrat\">Montserrat</option>
                        <option value=\"lato\" class=\"lato\">Lato</option>
                    </select>
            </div>
            <div id=\"page12\" class=\"pages\">
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                        <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>
                </div>

            </div>
            ";
        // line 155
        $context["h"] = 0;
        // line 156
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 157
            echo "                    <div id=\"page";
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\" class=\"pages hide\">
                        <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                        <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>
                </div>

                </div>
                ";
            // line 225
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 226
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "            <div id=\"nav\">
                <span class=\"numPage activ\" data-page=\"12\">1-2</span>
                    ";
        // line 229
        $context["h"] = 0;
        // line 230
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 231
            echo "                
                    <span class=\"numPage\" data-page=\"";
            // line 232
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "</span>
                    ";
            // line 233
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 234
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>    
</main>


";
    }

    // line 242
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 243
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/showPictureUpload.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/outil.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&d.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dUse.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/pages.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/polices.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/popup.js"]), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "app/creation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 250,  489 => 249,  485 => 248,  481 => 247,  477 => 246,  473 => 245,  469 => 244,  466 => 243,  462 => 242,  452 => 235,  446 => 234,  444 => 233,  435 => 232,  432 => 231,  427 => 230,  425 => 229,  421 => 227,  415 => 226,  413 => 225,  340 => 157,  335 => 156,  333 => 155,  250 => 75,  241 => 69,  237 => 68,  233 => 67,  229 => 66,  224 => 63,  215 => 61,  211 => 60,  197 => 48,  177 => 46,  168 => 45,  150 => 44,  130 => 42,  121 => 41,  104 => 40,  91 => 30,  80 => 21,  71 => 19,  67 => 18,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/layout.html.twig\" %}

{% block content %}
    <div id=\"drag_zone\">

    </div>
<main id=\"creation\">
    <div id=\"menu\">
            <span class=\"activ outil\" data-contenus=\"images\"><i class=\"las la-image\"></i></span>
            <span class=\"outil\" data-contenus=\"fonds\"><i class=\"las la-palette\"></i></span>
            <span class=\"outil\" data-contenus=\"layout\"><i class=\"las la-puzzle-piece\"></i></span>

        </div>
        <div id=\"contenus\">
            <div id=\"images\" class=\"contenu\">
                <!-- Trigger/Open The Modal -->
                <button id=\"popup\"><i class=\"las la-plus-circle\"></i></button>
                {% for image in images %}
                    <img data-content=\"image\" class=\"dragable\" draggable=\"false\" src=\"{{assetA('img/photo/mini/') ~ image.image_mini }}\" alt=\"Photos\" ondragstart=\"return false;\">
                {% endfor %}

                <!-- The Modal -->
                <div id=\"myModal\" class=\"modal\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <span class=\"close\">&times;</span>
                            <h2>Ajout d'une image</h2>
                        </div>
                        <div class=\"modal-body\">
                            <form action=\"{{url('app/creation/add/image')}}\" method=\"post\" enctype=\"multipart/form-data\" runat=\"server\">
                                <label id=\"picture_click\" for=\"picture\">
                                    <div id=\"beforeSelect\">
                                        <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                                    </div>

                                    <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                                    <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                                <button id=\"btnAddFond\" title=\"Ajouter le fond\" style=\"display:none\" type=\"submit\"><i class=\"las la-check\"></i></button>
                            </label>
                                {% for etudiant in etudiants %}
                                <input type=\"checkbox\" id=\"etudiant{{loop.index}}\" name=\"etud{{etudiant.id}}\" value=\"{{etudiant.id}}!etud\">
                                <label for=\"etudiant{{loop.index}}\">{{etudiant.nom}} {{etudiant.pnom}}</label>
                                {% endfor %}
                                {% for equipe in equipes %}
                                <input type=\"checkbox\" id=\"equipe{{loop.index}}\" name=\"equi{{equipe.id}}\" value=\"{{equipe.id}}!equi\">
                                <label for=\"equipe{{loop.index}}\">{{equipe.nom}} {{equipe.pnom}}</label>
                                {% endfor %}
            
                            </form>
                        </div>
                    </div>
                </div>

                
            
            
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                {% for fond in fonds %}
                <img data-content=\"fond\" class=\"dragable\" draggable=\"false\" ondragstart=\"return false;\" src=\"{{assetA('img/fond/mini/') ~ fond.illustration_mini}}\">
                {% endfor %}
            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"1\" draggable=\"false\" ondragstart=\"return false;\" src=\"{{assetA('img/layout/layout1.png')}}\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"2\" draggable=\"false\" ondragstart=\"return false;\" src=\"{{assetA('img/layout/layout2.png')}}\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"3\" draggable=\"false\" ondragstart=\"return false;\" src=\"{{assetA('img/layout/layout3.png')}}\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"4\" draggable=\"false\" ondragstart=\"return false;\" src=\"{{assetA('img/layout/layout4.png')}}\"></div>
            </div>
        </div>

        <div id=\"livre\">
            <div id=\"info\">
                <span>Année {{yearbook.annéePromotion}}</span>
                <span>60 pages</span>
            </div>
            <div id=\"text-menu\" class=\"hidden\">
                    <label for=\"pet-select\">Choisir une police</label>
                    <select name=\"polices\" id=\"font-select\">
                        <option value=\"open\" class=\"opens\" selected>Police par default</option>
                        <option value=\"lemonada\" class=\"lemonada\">Lemonada</option>
                        <option value=\"montserrat\" class=\"montserrat\">Montserrat</option>
                        <option value=\"lato\" class=\"lato\">Lato</option>
                    </select>
            </div>
            <div id=\"page12\" class=\"pages\">
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                        <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>
                </div>

            </div>
            {%set h = 0 %}
            {% for i in 3..60 %}
                    <div id=\"page{{i + h}}{{i + 1 + h}}\" class=\"pages hide\">
                        <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                    <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='zoneImage'></div>
                            <div id=\"v\" class='zoneImage'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='zoneImage'></div>
                            <div id=\"h\" class='zoneImage'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='zoneImage'></div>
                        <textarea data-style=\"bottom-text\" class='zoneImage text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='zoneImage'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                        <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='zoneImage'></div>
                        <div class='zoneImage'></div>
                    </div>
                </div>

                </div>
                {%set h = h + 1 %}
            {% endfor %}
            <div id=\"nav\">
                <span class=\"numPage activ\" data-page=\"12\">1-2</span>
                    {%set h = 0 %}
                {% for i in 3..60 %}
                
                    <span class=\"numPage\" data-page=\"{{i + h}}{{i + 1 + h}}\">{{i + h}} - {{i + 1 + h}}</span>
                    {%set h = h + 1 %}
                    {% endfor %}
                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>    
</main>


{% endblock %}
{% block js %}
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"{{assetA('js/showPictureUpload.js')}}\"></script>
<script src=\"{{assetA('js/outil.js')}}\"></script>
<script src=\"{{assetA('js/d&d.js')}}\"></script>
<script src=\"{{assetA('js/d&dUse.js')}}\"></script>
<script src=\"{{assetA('js/pages.js')}}\"></script>
<script src=\"{{assetA('js/polices.js')}}\"></script>
<script src=\"{{assetA('js/popup.js')}}\"></script>
{% endblock %}", "app/creation/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutMVC/app/Views/app/creation/index.html.twig");
    }
}
