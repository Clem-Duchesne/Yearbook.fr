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
class __TwigTemplate_0253f73bf0b72568b3c7b35a0dcd25b69c0e7a8e05e03a227cf197faf61fc29f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "app/creation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app/creation/layout.html.twig", "app/creation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<head>
\t<title>Yearbook - MMI</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato|Lemonada|Montserrat|Open+Sans&display=swap\" rel=\"stylesheet\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/styleApp.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/layout.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["css/police.php"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["polices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["police"]) {
            // line 16
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["police"], "html", [], "any", false, false, false, 16), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['police'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</head> 
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div id=\"drag_zone\">

    </div>
<main id=\"creation\">
    <div id=\"menu\">
            <span class=\"activ outil\" data-contenus=\"images\"><i class=\"las la-image\"></i></span>
            <span class=\"outil\" data-contenus=\"fonds\"><i class=\"las la-palette\"></i></span>
            <span class=\"outil\" data-contenus=\"layout\"><i class=\"las la-puzzle-piece\"></i></span>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save"]), "html", null, true);
        echo "\" class=\"hidden url_text\"></a>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save/img"]), "html", null, true);
        echo "\" class=\"hidden url_img\"></a>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["app/creation/save/background"]), "html", null, true);
        echo "\" class=\"hidden url_background\"></a>

        </div>
        <div id=\"contenus\">
            <div id=\"images\" class=\"contenu\">
                <!-- Trigger/Open The Modal -->
                <button id=\"popup\"><i class=\"las la-plus-circle\"></i></button>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 39
            echo "                    <img data-content=\"image\" class=\"dragable\" draggable=\"false\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/photo/mini/"]) . twig_get_attribute($this->env, $this->source, $context["image"], "image_mini", [], "any", false, false, false, 39)), "html", null, true);
            echo "\" alt=\"Photos\" ondragstart=\"return false;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        // line 50
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
        // line 60
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
            // line 61
            echo "                                <input type=\"checkbox\" id=\"etudiant";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            echo "\" name=\"etud";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "!etud\">
                                <label for=\"etudiant";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "pnom", [], "any", false, false, false, 62), "html", null, true);
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
        // line 64
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
            // line 65
            echo "                                <input type=\"checkbox\" id=\"equipe";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            echo "\" name=\"equi";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "!equi\">
                                <label for=\"equipe";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 66), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "pnom", [], "any", false, false, false, 66), "html", null, true);
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
        // line 68
        echo "            
                            </form>
                        </div>
                    </div>
                </div>

                
            
            
            </div>
            
            <div id=\"fonds\" class=\"contenu hide\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fonds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fond"]) {
            // line 81
            echo "                <img data-content=\"fond\" class=\"dragable\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
            echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/fond/mini/"]) . twig_get_attribute($this->env, $this->source, $context["fond"], "illustration_mini", [], "any", false, false, false, 81)), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </div>
            
            <div id=\"layout\" class=\"contenu hide\">
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"1\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout1.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"2\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout2.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"3\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout3.png"]), "html", null, true);
        echo "\"></div>
                <div><img data-content=\"layoutico\" class=\"dragable\" data-layout=\"4\" draggable=\"false\" ondragstart=\"return false;\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["img/layout/layout4.png"]), "html", null, true);
        echo "\"></div>
            </div>
        </div>

        <div id=\"livre\">
            <div id=\"info\">
                <span>Année ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["yearbook"] ?? null), "anneePromotion", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
                <span>60 pages</span>
            </div>
            <div id=\"text-menu\" class=\"hidden\">
                    <label for=\"pet-select\">Choisir une police</label>
                    <select name=\"polices\" id=\"font-select\">
                        <option value=\"open\" class=\"opens\" selected>Police par default</option>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["polices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["police"]) {
            // line 103
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["police"], "fontname_min", [], "any", false, false, false, 103), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["police"], "fontname_min", [], "any", false, false, false, 103), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["police"], "fontname", [], "any", false, false, false, 103), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['police'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </select>
            </div>
            
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 109
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109) % 2) != 0)) {
                // line 110
                echo "                <div id=\"page";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110) + 1), "html", null, true);
                echo "\" class=\"pages ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110) > 1)) {
                    echo "hide";
                }
                echo "\">
                ";
            }
            // line 112
            echo "                    <div class=\"page\" id=\"page";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112), "html", null, true);
            echo "\">
                        ";
            // line 113
            $this->loadTemplate("app/creation/miseEnPage.html.twig", "app/creation/index.html.twig", 113)->display($context);
            // line 114
            echo "                    </div>
                ";
            // line 115
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 115) % 2) == 0)) {
                // line 116
                echo "                </div>
                ";
            }
            // line 118
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            <div id=\"nav\">
            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 121
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121) % 2) != 0)) {
                // line 122
                echo "                <span class=\"numPage ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122) == 1)) {
                    echo "activ";
                }
                echo "\" data-page=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122) + 1), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122) + 1), "html", null, true);
                echo "</span>
                ";
            }
            // line 124
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            
                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>   
        <input hidden id=\"polices\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["serialize_polices"] ?? null), "html", null, true);
        echo "\"> 
</main>


";
    }

    // line 134
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/showPictureUpload.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/outil.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&d.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/save.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/d&dUse.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/pages.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assetA')->getCallable(), ["js/polices.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 143
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
        return array (  502 => 143,  498 => 142,  494 => 141,  490 => 140,  486 => 139,  482 => 138,  478 => 137,  474 => 136,  471 => 135,  467 => 134,  458 => 129,  452 => 125,  438 => 124,  423 => 122,  420 => 121,  403 => 120,  400 => 119,  386 => 118,  382 => 116,  380 => 115,  377 => 114,  375 => 113,  370 => 112,  359 => 110,  356 => 109,  339 => 108,  334 => 105,  321 => 103,  317 => 102,  307 => 95,  298 => 89,  294 => 88,  290 => 87,  286 => 86,  281 => 83,  272 => 81,  268 => 80,  254 => 68,  234 => 66,  225 => 65,  207 => 64,  187 => 62,  178 => 61,  161 => 60,  148 => 50,  137 => 41,  128 => 39,  124 => 38,  114 => 31,  110 => 30,  106 => 29,  96 => 21,  92 => 20,  87 => 18,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"app/creation/layout.html.twig\" %}

{% block head %}
<head>
\t<title>Yearbook - MMI</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"https://use.typekit.net/gnx1whw.css\">
\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato|Lemonada|Montserrat|Open+Sans&display=swap\" rel=\"stylesheet\">
\t<link href=\"{{assetA('css/styleApp.css')}}\" rel=\"stylesheet\" type='text/css'>
    <link href=\"{{assetA('css/layout.css')}}\" rel=\"stylesheet\" type='text/css'>
    <link href=\"{{ assetA( 'css/police.php')  }}\" rel=\"stylesheet\" type=\"text/css\">
    {%for police in polices %}
        <link href=\"{{police.html}}\" rel=\"stylesheet\">
    {%endfor%}
</head> 
{% endblock %}
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
                <span>Année {{yearbook.anneePromotion}}</span>
                <span>60 pages</span>
            </div>
            <div id=\"text-menu\" class=\"hidden\">
                    <label for=\"pet-select\">Choisir une police</label>
                    <select name=\"polices\" id=\"font-select\">
                        <option value=\"open\" class=\"opens\" selected>Police par default</option>
                        {% for police in polices %}
                        <option value=\"{{police.fontname_min}}\" class=\"{{police.fontname_min}}\">{{police.fontname}}</option>
                        {% endfor %}
                    </select>
            </div>
            
            {% for page in pages %}
                {% if loop.index % 2 != 0 %}
                <div id=\"page{{loop.index}}{{loop.index + 1}}\" class=\"pages {% if loop.index > 1 %}hide{% endif %}\">
                {% endif %}
                    <div class=\"page\" id=\"page{{loop.index}}\">
                        {% include 'app/creation/miseEnPage.html.twig' %}
                    </div>
                {% if loop.index % 2 == 0 %}
                </div>
                {% endif %}
            {% endfor %}
            <div id=\"nav\">
            {% for page in pages %}
                {% if loop.index % 2 != 0 %}
                <span class=\"numPage {% if loop.index == 1 %}activ{% endif %}\" data-page=\"{{loop.index }}{{loop.index + 1}}\">{{loop.index}} - {{loop.index + 1}}</span>
                {% endif %}
            {% endfor %}
            
                <span class=\"numPage\" data-page=\"plus\">Plus</span>
            </div>
        </div>   
        <input hidden id=\"polices\" value=\"{{serialize_polices}}\"> 
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
{% endblock %}", "app/creation/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ptutYB/Yearbook/app/Views/app/creation/index.html.twig");
    }
}
