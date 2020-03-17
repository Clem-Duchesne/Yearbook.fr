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
class __TwigTemplate_e237cca26879f3d7f886e76cbe05ff62f524197b09968a7e8d14a383e5518481 extends \Twig\Template
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

                <!-- The Modal -->
                <div id=\"myModal\" class=\"modal\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <span class=\"close\">&times;</span>
                        <h2>Ajout d'une image</h2>
                      </div>
                      <div class=\"modal-body\">
                        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/add/image"]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" runat=\"server\">
                            <label id=\"picture_click\" for=\"picture\">
                                <div id=\"beforeSelect\">
                                    <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                                </div>

                                <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                                <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                            </label>
                            ";
        // line 36
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
            // line 37
            echo "                            <input type=\"checkbox\" id=\"etudiant";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "\" name=\"etudiant";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                            <label for=\"etudiant";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "pnom", [], "any", false, false, false, 38), "html", null, true);
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
        // line 40
        echo "                            ";
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
            // line 41
            echo "                            <input type=\"checkbox\" id=\"equipe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "\" name=\"equipe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                            <label for=\"equipe";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "pnom", [], "any", false, false, false, 42), "html", null, true);
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
        // line 44
        echo "                            <button>Ajouter</button>
                        </form>
                      </div>
                    </div>
                </div>
                <!--
                <form id=\"addImage\">
                    <label id=\"picture_click\" for=\"picture\">
                        <div id=\"beforeSelect\">
                            <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                        </div>

                        <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                        <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                    </label>
                </form>


                            <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                            <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                            <button>Ajouter</button>
                        </form>
            -->
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 68
            echo "                <img class=\"image\" draggable=\"false\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/photo/mini/"]) . twig_get_attribute($this->env, $this->source, $context["image"], "illustration_mini", [], "any", false, false, false, 68)), "html", null, true);
            echo "\" alt=\"Photos\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "               
                
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fonds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fond"]) {
            // line 76
            echo "                <img class=\"fond\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/fond/mini/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "illustration_mini", [], "any", false, false, false, 76)), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img class=\"layoutico\" data-layout=\"1\" draggable=\"false\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout1.png"]), "html", null, true);
        echo "\"></div>
                <div><img class=\"layoutico\" data-layout=\"2\" draggable=\"false\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout2.png"]), "html", null, true);
        echo "\"></div>
                <div><img class=\"layoutico\" data-layout=\"3\" draggable=\"false\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout3.png"]), "html", null, true);
        echo "\"></div>
                <div><img class=\"layoutico\" data-layout=\"4\" draggable=\"false\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout4.png"]), "html", null, true);
        echo "\"></div>
            </div>
        </div>

        <div id=\"livre\">
            <div id=\"info\">
                <span>Année ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["yearbook"] ?? null), "annéePromotion", [], "any", false, false, false, 90), "html", null, true);
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
                            <div id=\"h\" class='book_pict'></div>
                            <div id=\"v\" class='book_pict'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='book_pict'></div>
                            <div id=\"h\" class='book_pict'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='book_pict'></div>
                        <textarea data-style=\"bottom-text\" class='book_pict text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='book_pict'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                       <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='book_pict'></div>
                        <div class='book_pict'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='book_pict'></div>
                            <div id=\"v\" class='book_pict'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='book_pict'></div>
                            <div id=\"h\" class='book_pict'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='book_pict'></div>
                        <textarea data-style=\"bottom-text\" class='book_pict text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='book_pict'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                       <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='book_pict'></div>
                        <div class='book_pict'></div>
                    </div>
                </div>

            </div>
            ";
        // line 170
        $context["h"] = 0;
        // line 171
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 172
            echo "                
                  
                    <div id=\"page";
            // line 174
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\" class=\"pages hide\">
                        <div class=\"page\">
                        <div id=\"layout1\" class=\"layout hide\">
                            <div>
                                <div id=\"h\" class=\"book_pict\"></div>
                                <div id=\"v\" class=\"book_pict\"></div>
                            </div>
                            <div>
                                <div id=\"v\" class=\"book_pict\"></div>
                                <div id=\"h\" class=\"book_pict\"></div>
                            </div>
                        </div>

                        <div id=\"layout2\" class=\"layout\">
                            <div class=\"book_pict\"></div>
                            <div class=\"book_pict\"></div>
                        </div>

                    </div>
                    <div class=\"page\">
                        <div id=\"layout1\" class=\"layout\">
                            <div>
                                <div id=\"h\" class=\"book_pict\"></div>
                                <div id=\"v\" class=\"book_pict\"></div>
                            </div>
                            <div>
                                <div id=\"v\" class=\"book_pict\"></div>
                                <div id=\"h\" class=\"book_pict\"></div>
                            </div>
                        </div>

                        <div id=\"layout2\" class=\"layout hide\">
                            <div class=\"book_pict\"></div>
                            <div class=\"book_pict\"></div>
                        </div>

                    </div>

                </div>
                ";
            // line 213
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 214
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "            <div id=\"nav\">
                <span class=\"numPage activ\" data-page=\"12\">1-2</span>
                    ";
        // line 217
        $context["h"] = 0;
        // line 218
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 219
            echo "                    
               
               
                    <span class=\"numPage\" data-page=\"";
            // line 222
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["i"] + ($context["h"] ?? null)), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($context["i"] + 1) + ($context["h"] ?? null)), "html", null, true);
            echo "</span>
                    ";
            // line 223
            $context["h"] = (($context["h"] ?? null) + 1);
            // line 224
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>    
       
</main>


";
    }

    // line 233
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/showPictureUpload.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/outil.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dLayout.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dImage.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dFond.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/pages.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/polices.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 242
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
        return array (  489 => 242,  485 => 241,  481 => 240,  477 => 239,  473 => 238,  469 => 237,  465 => 236,  461 => 235,  458 => 234,  454 => 233,  443 => 225,  437 => 224,  435 => 223,  426 => 222,  421 => 219,  416 => 218,  414 => 217,  410 => 215,  404 => 214,  402 => 213,  359 => 174,  355 => 172,  350 => 171,  348 => 170,  265 => 90,  256 => 84,  252 => 83,  248 => 82,  244 => 81,  239 => 78,  230 => 76,  226 => 75,  219 => 70,  210 => 68,  206 => 67,  181 => 44,  161 => 42,  152 => 41,  134 => 40,  114 => 38,  105 => 37,  88 => 36,  76 => 27,  51 => 4,  47 => 3,  36 => 1,);
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
                            </label>
                            {% for etudiant in etudiants %}
                            <input type=\"checkbox\" id=\"etudiant{{loop.index}}\" name=\"etudiant{{loop.index}}\" value=\"{{etudiant.id}}\">
                            <label for=\"etudiant{{loop.index}}\">{{etudiant.nom}} {{etudiant.pnom}}</label>
                            {% endfor %}
                            {% for equipe in equipes %}
                            <input type=\"checkbox\" id=\"equipe{{loop.index}}\" name=\"equipe{{loop.index}}\" value=\"{{equipe.id}}\">
                            <label for=\"equipe{{loop.index}}\">{{equipe.nom}} {{equipe.pnom}}</label>
                            {% endfor %}
                            <button>Ajouter</button>
                        </form>
                      </div>
                    </div>
                </div>
                <!--
                <form id=\"addImage\">
                    <label id=\"picture_click\" for=\"picture\">
                        <div id=\"beforeSelect\">
                            <span aria-hidden=\"true\"><i class=\"las la-plus-circle\"></i></span>
                        </div>

                        <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                        <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                    </label>
                </form>


                            <img id=\"afterSelect\" src=\"\" alt=\"your image\" />
                            <input type=\"file\" id=\"picture\" style=\"display:none\" name=\"illustration\" accept=\"image/png, image/jpeg\">
                            <button>Ajouter</button>
                        </form>
            -->
                {% for image in images %}
                <img class=\"image\" draggable=\"false\" src=\"{{assetA('img/photo/mini/') ~ image.illustration_mini}}\" alt=\"Photos\">
                {% endfor %}
               
                
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                {% for fond in fonds %}
                <img class=\"fond\" src=\"{{assetA('img/fond/mini/') ~ fond.illustration_mini}}\">
                {% endfor %}
            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img class=\"layoutico\" data-layout=\"1\" draggable=\"false\" src=\"{{assetA('img/layout/layout1.png')}}\"></div>
                <div><img class=\"layoutico\" data-layout=\"2\" draggable=\"false\" src=\"{{assetA('img/layout/layout2.png')}}\"></div>
                <div><img class=\"layoutico\" data-layout=\"3\" draggable=\"false\" src=\"{{assetA('img/layout/layout3.png')}}\"></div>
                <div><img class=\"layoutico\" data-layout=\"4\" draggable=\"false\" src=\"{{assetA('img/layout/layout4.png')}}\"></div>
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
                            <div id=\"h\" class='book_pict'></div>
                            <div id=\"v\" class='book_pict'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='book_pict'></div>
                            <div id=\"h\" class='book_pict'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='book_pict'></div>
                        <textarea data-style=\"bottom-text\" class='book_pict text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='book_pict'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                       <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='book_pict'></div>
                        <div class='book_pict'></div>
                    </div>

                </div>
                <div class=\"page\">
                    <div id='layout1' class=\"layout hide\">
                        <div>
                            <div id=\"h\" class='book_pict'></div>
                            <div id=\"v\" class='book_pict'></div>
                        </div>
                        <div>
                            <div id=\"v\" class='book_pict'></div>
                            <div id=\"h\" class='book_pict'></div>
                        </div>
                    </div>

                    <div id='layout2' class=\"layout hide\">
                        <input type=\"title\" class=\"text\" data-style=\"title\">
                        <div class='book_pict'></div>
                        <textarea data-style=\"bottom-text\" class='book_pict text' name=\"bottom-text\"></textarea>
                    </div>

                    <div id='layout3' class=\"layout\">
                        <input type=\"text\" data-style=\"left-text\" class=\"text\" name=\"left-text\">
                        <div>
                            <input type=\"title\" class=\"text\" data-style=\"title\">
                            <div class='book_pict'></div>
                            <textarea data-style=\"bottom-text\" class='text' name=\"bottom-text\"></textarea>
                        </div>
                       <input type=\"text\" class=\"text\" data-style=\"right-text\">
                    </div>
                    <div id='layout4' class=\"layout hide\">
                        <div class='book_pict'></div>
                        <div class='book_pict'></div>
                    </div>
                </div>

            </div>
            {%set h = 0 %}
            {% for i in 3..60 %}
                
                  
                    <div id=\"page{{i + h}}{{i + 1 + h}}\" class=\"pages hide\">
                        <div class=\"page\">
                        <div id=\"layout1\" class=\"layout hide\">
                            <div>
                                <div id=\"h\" class=\"book_pict\"></div>
                                <div id=\"v\" class=\"book_pict\"></div>
                            </div>
                            <div>
                                <div id=\"v\" class=\"book_pict\"></div>
                                <div id=\"h\" class=\"book_pict\"></div>
                            </div>
                        </div>

                        <div id=\"layout2\" class=\"layout\">
                            <div class=\"book_pict\"></div>
                            <div class=\"book_pict\"></div>
                        </div>

                    </div>
                    <div class=\"page\">
                        <div id=\"layout1\" class=\"layout\">
                            <div>
                                <div id=\"h\" class=\"book_pict\"></div>
                                <div id=\"v\" class=\"book_pict\"></div>
                            </div>
                            <div>
                                <div id=\"v\" class=\"book_pict\"></div>
                                <div id=\"h\" class=\"book_pict\"></div>
                            </div>
                        </div>

                        <div id=\"layout2\" class=\"layout hide\">
                            <div class=\"book_pict\"></div>
                            <div class=\"book_pict\"></div>
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
<script src=\"{{assetA('js/d&dLayout.js')}}\"></script>
<script src=\"{{assetA('js/d&dImage.js')}}\"></script>
<script src=\"{{assetA('js/d&dFond.js')}}\"></script>
<script src=\"{{assetA('js/pages.js')}}\"></script>
<script src=\"{{assetA('js/polices.js')}}\"></script>
<script src=\"{{assetA('js/popup.js')}}\"></script>
{% endblock %}", "app/creation/index.html.twig", "C:\\xampp\\htdocs\\ptutMVC\\app\\Views\\app\\creation\\index.html.twig");
    }
}
