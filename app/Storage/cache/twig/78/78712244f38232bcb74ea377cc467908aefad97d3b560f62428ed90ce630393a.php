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

/* index.html.twig */
class __TwigTemplate_bbde433f29e6f135e04e81df88ebb7c25f01bdfec5ca3ae92f69c8f25b1724f3 extends \Twig\Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<body>
   
    <div class=\"loader\">
        <div class=\"opacity_loader\"></div>

        <h1>Chargement</h1>
    </div>
    <div id=\"burger_button\">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id=\"menu\" class=\"close\">
        <a href=\"#about\">
            <span class=\"noselect\">À PROPOS</span>
            <div></div>
        </a>
        <a href=\"#competence\">
            <span class=\"noselect\">COMPÉTENCES</span>
            <div></div>
        </a>
        <a href=\"#domaines\">
            <span class=\"noselect\">DOMAINES</span>
            <div></div>
        </a>
        <a href=\"#contact\">
            <span class=\"noselect\">CONTACT</span>
            <div></div>
        </a>

        <div id=\"params\">
            <span id=\"fMoins\" class=\"noselect param\">Z-</span>
            <span id=\"fPlus\" class=\"noselect param\">A+</span>
            <span id=\"dyslexie\" class=\"noselect param\">Dyslexie</span>
            <div>
                <img src=\"assets/img/ukbw.png\" alt=\"Langue : en\">
                <span class='lg'>EN</span>
            </div>
            <div>
                <img src=\"assets/img/frbw.png\" alt=\"Langue : fr\">
                <span class='lg'>FR</span>
            </div>
        </div>
    </div>

    <section id=\"accueil\">
        <div class=\"content\">
            <div class=\"info_barre\" id=\"first_barre\">
                <h2>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "nom", [], "any", false, false, false, 52), "html", null, true);
        echo "</h2>
                <span class=\"barre_style\"></span>
            </div>

            <img class=\"imgOfMe\" alt=\"Photo de Simon Botté | simonbotté.fr\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/simonbotte.jpg"]), "html", null, true);
        echo "\">


            <div class=\"info_barre\" id=\"last_barre\">
                <span class=\"barre_style\"></span>
                <h2>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "accueilText1", [], "any", false, false, false, 61), "html", null, true);
        echo "</h2>
                <h2>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "accueilText2", [], "any", false, false, false, 62), "html", null, true);
        echo "</h2>
            </div>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>



    </section>

    <section id=\"about\">
        <h2 class=\"title\"> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "aboutTitle", [], "any", false, false, false, 77), "html", null, true);
        echo " </h2>
        <div class=\"content\">
            <p>";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "aboutPara", [], "any", false, false, false, 79);
        echo "</p>
            <div class=\"void\">
                <img src=\"assets/img/monAnniv_1801.jpg\" alt=\"Alpha Angouleme | simonbotte.fr\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"competence\">
        <h2 class=\"title\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "competenceTitle", [], "any", false, false, false, 91), "html", null, true);
        echo "</h2>
        <div class=\"content\">
            <div id=\"resume\">
                <p>";
        // line 94
        echo twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "competencePara", [], "any", false, false, false, 94);
        echo "</p>
            </div>
            <div id=\"barre\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competences"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 98
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 98) == 1) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 98) == 4)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 98) == 7))) {
                // line 99
                echo "                <div class=\"lvls\">
            ";
            }
            // line 101
            echo "                    <div class=\"lvl\">
                        <p>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "name", [], "any", false, false, false, 102), "html", null, true);
            echo "</p>
                        <span data-lvl=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "level", [], "any", false, false, false, 103), "html", null, true);
            echo "\"></span>
                    </div>
            ";
            // line 105
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105) == 3) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105) == 6)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105) == 9))) {
                // line 106
                echo "                </div>
            ";
            }
            // line 108
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"domaines\">
        <h2 class=\"title\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text"] ?? null), "domainesTitle", [], "any", false, false, false, 118), "html", null, true);
        echo "</h2>
        <div class=\"content\">
          
            <div>
               ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domaines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 123
            echo "                <div class=\"domaine\">
                    ";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["domaine"], "icone", [], "any", false, false, false, 124);
            echo "
                    <h3>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "name", [], "any", false, false, false, 125), "html", null, true);
            echo "</h3>
                    <p>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "text", [], "any", false, false, false, 126), "html", null, true);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"photographie\">
        <h2 class=\"title\">Photographie</h2>
        <div class=\"content\">
            <h3>De l'ISO au cadrage, rien ne me résiste</h3>
            <div>
                <img alt=\"Prison Angouleme | simonbotte.fr\" src=\"assets/img/prison.jpg\">
                <img alt=\"Fete foraine | simonbotte.fr\" src=\"assets/img/ILoveCats.jpg\">
                <img alt=\"Feuille | simonbotte.fr\" src=\"assets/img/AppleMyLove.jpg\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"devWeb\">
        <h2 class=\"title\">Développement web</h2>
        <div class=\"content\">
            <a class=\"devprojet\">
                <figure>
                    <img alt=\"Site web inseriasc\" src=\"assets/img/ins.jpg\">
                    <figcaption>
                        Site vitrine pour une association de sept structures d’insertion par l’activité économique.
                    </figcaption>
                </figure>
            </a>

            <a class=\"devprojet\">
                <figure>
                    <img alt=\"Backoffice MVC\" src=\"assets/img/bo.jpg\">
                    <figcaption>
                        Backoffice avec une architecture MVC.
                    </figcaption>
                </figure>
            </a>

            <a class=\"devprojet\">
                <figure>
                    <img alt=\"A venir\" src=\"assets/img/incoming.jpg\">
                    <figcaption>
                        Projet réalisé au S4. A venir
                    </figcaption>
                </figure>
            </a>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"contact\">
        <h2 class=\"title\">Contactez moi</h2>
        <div class=\"content\">
            <form method=\"POST\">
                <div class=\"infoPerso\">
                    <input name=\"name\" type=\"text\" placeholder=\"Votre nom\">
                    <input name=\"email\" type=\"email\" placeholder=\"Votre email\">
                </div>

                <textarea name=\"message\" placeholder=\"Votre message\"></textarea>
                <button type=\"submit\">Envoyer</button>
            </form>
        </div>
    </section>

</body>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 129,  258 => 126,  254 => 125,  250 => 124,  247 => 123,  243 => 122,  236 => 118,  225 => 109,  211 => 108,  207 => 106,  205 => 105,  200 => 103,  196 => 102,  193 => 101,  189 => 99,  186 => 98,  169 => 97,  163 => 94,  157 => 91,  142 => 79,  137 => 77,  119 => 62,  115 => 61,  107 => 56,  100 => 52,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<body>
   
    <div class=\"loader\">
        <div class=\"opacity_loader\"></div>

        <h1>Chargement</h1>
    </div>
    <div id=\"burger_button\">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id=\"menu\" class=\"close\">
        <a href=\"#about\">
            <span class=\"noselect\">À PROPOS</span>
            <div></div>
        </a>
        <a href=\"#competence\">
            <span class=\"noselect\">COMPÉTENCES</span>
            <div></div>
        </a>
        <a href=\"#domaines\">
            <span class=\"noselect\">DOMAINES</span>
            <div></div>
        </a>
        <a href=\"#contact\">
            <span class=\"noselect\">CONTACT</span>
            <div></div>
        </a>

        <div id=\"params\">
            <span id=\"fMoins\" class=\"noselect param\">Z-</span>
            <span id=\"fPlus\" class=\"noselect param\">A+</span>
            <span id=\"dyslexie\" class=\"noselect param\">Dyslexie</span>
            <div>
                <img src=\"assets/img/ukbw.png\" alt=\"Langue : en\">
                <span class='lg'>EN</span>
            </div>
            <div>
                <img src=\"assets/img/frbw.png\" alt=\"Langue : fr\">
                <span class='lg'>FR</span>
            </div>
        </div>
    </div>

    <section id=\"accueil\">
        <div class=\"content\">
            <div class=\"info_barre\" id=\"first_barre\">
                <h2>{{text.nom}}</h2>
                <span class=\"barre_style\"></span>
            </div>

            <img class=\"imgOfMe\" alt=\"Photo de Simon Botté | simonbotté.fr\" src=\"{{asset('img/simonbotte.jpg')}}\">


            <div class=\"info_barre\" id=\"last_barre\">
                <span class=\"barre_style\"></span>
                <h2>{{text.accueilText1}}</h2>
                <h2>{{text.accueilText2}}</h2>
            </div>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>



    </section>

    <section id=\"about\">
        <h2 class=\"title\"> {{text.aboutTitle}} </h2>
        <div class=\"content\">
            <p>{{text.aboutPara|raw}}</p>
            <div class=\"void\">
                <img src=\"assets/img/monAnniv_1801.jpg\" alt=\"Alpha Angouleme | simonbotte.fr\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"competence\">
        <h2 class=\"title\">{{text.competenceTitle}}</h2>
        <div class=\"content\">
            <div id=\"resume\">
                <p>{{text.competencePara|raw}}</p>
            </div>
            <div id=\"barre\">
            {% for competence in competences %}
            {% if loop.index == 1 or  loop.index == 4 or loop.index == 7%}
                <div class=\"lvls\">
            {% endif %}
                    <div class=\"lvl\">
                        <p>{{competence.name}}</p>
                        <span data-lvl=\"{{competence.level}}\"></span>
                    </div>
            {% if loop.index == 3 or  loop.index == 6 or loop.index == 9%}
                </div>
            {% endif %}
            {% endfor %}
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"domaines\">
        <h2 class=\"title\">{{text.domainesTitle}}</h2>
        <div class=\"content\">
          
            <div>
               {% for domaine in domaines %}
                <div class=\"domaine\">
                    {{domaine.icone|raw}}
                    <h3>{{domaine.name}}</h3>
                    <p>{{domaine.text}}</p>
                </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"photographie\">
        <h2 class=\"title\">Photographie</h2>
        <div class=\"content\">
            <h3>De l'ISO au cadrage, rien ne me résiste</h3>
            <div>
                <img alt=\"Prison Angouleme | simonbotte.fr\" src=\"assets/img/prison.jpg\">
                <img alt=\"Fete foraine | simonbotte.fr\" src=\"assets/img/ILoveCats.jpg\">
                <img alt=\"Feuille | simonbotte.fr\" src=\"assets/img/AppleMyLove.jpg\">
            </div>
        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"devWeb\">
        <h2 class=\"title\">Développement web</h2>
        <div class=\"content\">
            <a class=\"devprojet\">
                <figure>
                    <img alt=\"Site web inseriasc\" src=\"assets/img/ins.jpg\">
                    <figcaption>
                        Site vitrine pour une association de sept structures d’insertion par l’activité économique.
                    </figcaption>
                </figure>
            </a>

            <a class=\"devprojet\">
                <figure>
                    <img alt=\"Backoffice MVC\" src=\"assets/img/bo.jpg\">
                    <figcaption>
                        Backoffice avec une architecture MVC.
                    </figcaption>
                </figure>
            </a>

            <a class=\"devprojet\">
                <figure>
                    <img alt=\"A venir\" src=\"assets/img/incoming.jpg\">
                    <figcaption>
                        Projet réalisé au S4. A venir
                    </figcaption>
                </figure>
            </a>


        </div>
        <div class=\"arrowDown\">
            <span></span>
            <span></span>
        </div>
    </section>

    <section id=\"contact\">
        <h2 class=\"title\">Contactez moi</h2>
        <div class=\"content\">
            <form method=\"POST\">
                <div class=\"infoPerso\">
                    <input name=\"name\" type=\"text\" placeholder=\"Votre nom\">
                    <input name=\"email\" type=\"email\" placeholder=\"Votre email\">
                </div>

                <textarea name=\"message\" placeholder=\"Votre message\"></textarea>
                <button type=\"submit\">Envoyer</button>
            </form>
        </div>
    </section>

</body>

{% endblock %}
", "index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/portfolioMVC/app/Views/index.html.twig");
    }
}
