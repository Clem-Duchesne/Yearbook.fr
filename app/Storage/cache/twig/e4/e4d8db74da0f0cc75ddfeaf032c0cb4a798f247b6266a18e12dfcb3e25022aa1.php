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
class __TwigTemplate_c59ac45d18ca30fb7ee0f00f62d7b51984aa60409d756faece2ebd932c5571b2 extends \Twig\Template
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
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save"]), "html", null, true);
        echo "\" class=\"hidden url_text\"></a>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save/img"]), "html", null, true);
        echo "\" class=\"hidden url_img\"></a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save/background"]), "html", null, true);
        echo "\" class=\"hidden url_background\"></a>

        </div>
        <div id=\"contenus\">
            <div id=\"images\" class=\"contenu\">
                <!-- Trigger/Open The Modal -->
                <button id=\"popup\"><i class=\"las la-plus-circle\"></i></button>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "                    <img data-content=\"image\" class=\"dragable\" draggable=\"false\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/photo/mini/"]) . twig_get_attribute($this->env, $this->source, $context["image"], "image_mini", [], "any", false, false, false, 22)), "html", null, true);
            echo "\" alt=\"Photos\" ondragstart=\"return false;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        // line 33
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
        // line 43
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
            // line 44
            echo "                                <input type=\"checkbox\" id=\"etudiant";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            echo "\" name=\"etud";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "!etud\">
                                <label for=\"etudiant";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "pnom", [], "any", false, false, false, 45), "html", null, true);
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
        // line 47
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
            // line 48
            echo "                                <input type=\"checkbox\" id=\"equipe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            echo "\" name=\"equi";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "!equi\">
                                <label for=\"equipe";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "pnom", [], "any", false, false, false, 49), "html", null, true);
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
        // line 51
        echo "            
                            </form>
                        </div>
                    </div>
                </div>

                
            
            
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fonds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fond"]) {
            // line 64
            echo "                <img data-content=\"fond\" class=\"dragable\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/fond/mini/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "illustration_mini", [], "any", false, false, false, 64)), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"1\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout1.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"2\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout2.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"3\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout3.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"4\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout4.png"]), "html", null, true);
        echo "\"></div>
            </div>
        </div>

        <div id=\"livre\">
            <div id=\"info\">
                <span>Année ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["yearbook"] ?? null), "annéePromotion", [], "any", false, false, false, 78), "html", null, true);
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
                <div class=\"page\" id=\"page1\">
                    <div id='layout1' class=\"layout hide\">
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

                </div>
                <div class=\"page\" id=\"page2\">
                    <div id='layout1' class=\"layout hide\">
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
                </div>

            </div>
            ";
        // line 158
        $context["h"] = 0;
        // line 159
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 160
            echo "                    <div id=\"page";
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\" class=\"pages hide\">
                        <div class=\"page\" id=\"page";
            // line 161
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
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
                <div class=\"page\" id=\"page";
            // line 194
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "\">
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
            // line 228
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 229
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "            <div id=\"nav\">
                <span class=\"numPage activ\" data-page=\"12\">1-2</span>
                    ";
        // line 232
        $context["h"] = 0;
        // line 233
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 234
            echo "                
                    <span class=\"numPage\" data-page=\"";
            // line 235
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "</span>
                    ";
            // line 236
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 237
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>    
</main>


";
    }

    // line 245
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/showPictureUpload.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/outil.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&d.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/save.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dUse.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/pages.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/polices.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
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
        return array (  515 => 254,  511 => 253,  507 => 252,  503 => 251,  499 => 250,  495 => 249,  491 => 248,  487 => 247,  484 => 246,  480 => 245,  470 => 238,  464 => 237,  462 => 236,  453 => 235,  450 => 234,  445 => 233,  443 => 232,  439 => 230,  433 => 229,  431 => 228,  394 => 194,  358 => 161,  352 => 160,  347 => 159,  345 => 158,  262 => 78,  253 => 72,  249 => 71,  245 => 70,  241 => 69,  236 => 66,  227 => 64,  223 => 63,  209 => 51,  189 => 49,  180 => 48,  162 => 47,  142 => 45,  133 => 44,  116 => 43,  103 => 33,  92 => 24,  83 => 22,  79 => 21,  69 => 14,  65 => 13,  61 => 12,  51 => 4,  47 => 3,  36 => 1,);
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
            <a href=\"{{ url('app/creation/save') }}\" class=\"hidden url_text\"></a>
            <a href=\"{{ url('app/creation/save/img') }}\" class=\"hidden url_img\"></a>
            <a href=\"{{ url('app/creation/save/background') }}\" class=\"hidden url_background\"></a>

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
                <div class=\"page\" id=\"page1\">
                    <div id='layout1' class=\"layout hide\">
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

                </div>
                <div class=\"page\" id=\"page2\">
                    <div id='layout1' class=\"layout hide\">
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
                </div>

            </div>
            {%set h = 0 %}
            {% for i in 3..60 %}
                    <div id=\"page{{i + h}}{{i + 1 + h}}\" class=\"pages hide\">
                        <div class=\"page\" id=\"page{{i}}\">
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
                <div class=\"page\" id=\"page{{i + 1}}\">
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
<script src=\"{{assetA('js/save.js')}}\"></script>
<script src=\"{{assetA('js/d&dUse.js')}}\"></script>
<script src=\"{{assetA('js/pages.js')}}\"></script>
<script src=\"{{assetA('js/polices.js')}}\"></script>
<script src=\"{{assetA('js/popup.js')}}\"></script>
{% endblock %}", "app/creation/index.html.twig", "C:\\wamp64\\www\\projets\\PTUT\\ptutMVC\\app\\Views\\app\\creation\\index.html.twig");
    }
}
