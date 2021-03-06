<?php

/* View/Arena/cardsGamePlayer.twig */
class __TwigTemplate_9c47b17a588aa8be7a11783cb71c169a99d7fd1c0c13bb0417b26f683dbadb5e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/cardsGamePlayer.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'arena' => array($this, 'block_arena'),
            'scripthead' => array($this, 'block_scripthead'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "View/Layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "name", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "name", array()), "html", null, true);
    }

    // line 4
    public function block_arena($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_scripthead($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container-fluid\">
        <input type=\"number\" name=\"velocity\" id=\"velocity\" style=\"max-width: 5rem; \">

        <canvas id=\"wanda\" class=\"mx-auto d-block\" width=\"1024\" height=\"512\">
            <script>
                /////////////////////////////
                \$(document).ready(function(){
                    \$(\"#velocity\").change(function(){
                        aux = parseInt(\$(\"#velocity\").val());
                        if(aux >= 0 && aux<limitVelocity)
                            velocity = aux;
                    });
                });
                ////////////////////////////



                var ctx = loadCanvasCtx();
                var requestAnimationFrame =
                    window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.msRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    function(callback) {
                        return setTimeout(callback, 1);
                    };
                var gamedata;
                /////background
                var imageBG = new Image();
                imageBG.src = \"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "imagebg", array()), "html", null, true);
        echo "\";
                ////////
                ///////enemy
                var imageEnemy1 = new Image();
                imageEnemy1.src = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "imagesperson", array()), "enemy", array()), "html", null, true);
        echo "\";
                var imageEnemy2 = new Image();
                imageEnemy2.src = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "imagesperson", array()), "enemy", array()), "html", null, true);
        echo "\";
                ///////
                //////face
                var imageFace1 = new Image();
                imageFace1.src = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "imagesperson", array()), "face", array()), "html", null, true);
        echo "\";
                var imageFace2 = new Image();
                imageFace2.src = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "imagesperson", array()), "face", array()), "html", null, true);
        echo "\";
                ///////
                //////var system
                var match = 0;
                var round = 0;
                var max_matchs = ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "matchs", array()), "html", null, true);
        echo ";
                var max_rounds = ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "rounds", array()), "html", null, true);
        echo ";
                var heightDeck = 300;
                var widthScreen = 1024;
                var heightScreen = 512;
                var qtdcards = ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "countcards", array()), "html", null, true);
        echo ";
                var imageCards = [];
                loadImageCards();
                var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
                var heightCard = (heightDeck / (qtdcards)) - marginCard;
                var widthCard = heightCard;
                var loserCardAnimate = false;
                var selectedcardAnimate = true;
                var displacementCard = 30;
                var startMatch = true;
                var winnerMatch = 0;
                var time = 0;
                var velocity = 499;
                var limitVelocity = 500;

                //////
                ///////player1
                var player1 = {round: [], deck:[] , name: ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["confrontation"] ?? null), "player1", array()) != null)) {
            // line 78
            echo "                        \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["confrontation"] ?? null), "player1", array()), "nickname", array()), "html", null, true);
            echo "\"";
        } else {
            echo "\"Bot\"";
        }
        echo ", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150,loser: false , selectedCardInMatch: 0};
                ///////
                ///////Player2
                var player2 = {round: [], deck:[] , name: ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["confrontation"] ?? null), "player2", array()) != null)) {
            // line 82
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["confrontation"] ?? null), "player2", array()), "nickname", array()), "html", null, true);
            echo "\"";
        } else {
            echo "\"Bot\"";
        }
        // line 83
        echo "                    , pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150, loser: false, selectedCardInMatch: 0};
                ///////

                function upVelocity(){
                    if(velocity < limitVelocity)
                        velocity += 10;
                }function downVelocity(){
                    if(velocity > 0)
                        velocity -= 10;
                }
                function loadImageCards(){
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gameinfo"] ?? null), "cardsimages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 95
            echo "                    imageCards[\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "name", array()), "html", null, true);
            echo "\"] = new Image();
                    imageCards[\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "name", array()), "html", null, true);
            echo "\"].src = \"";
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "image", array()), "html", null, true);
            echo "\";
                    imageCards[\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "name", array()), "html", null, true);
            echo "\"].width = widthCard;
                    imageCards[\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "name", array()), "html", null, true);
            echo "\"].height = heightCard;
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                }
                function configCards(){
                    console.log(player1.round[round].hand);
                    console.log(gamedata.matchs[match].rounds[round].player1.hand);
                    for (i = 0; i < player1.round[round].hand.length; i++) {
                        var namecard = player1.round[round].hand[i];
                        player1.round[round].hand[i] = {};
                        player1.round[round].hand[i].name = namecard;
                        player1.round[round].hand[i].image = imageCards[player1.round[round].hand[i].name];
                        player1.round[round].hand[i].posiX = player1.posiXDeck;
                        player1.round[round].hand[i].posiY = player1.posiYDeck + ((heightCard+marginCard)*i);
                    }
                    for (i = 0; i < player2.round[round].hand.length; i++) {
                        var namecard = player2.round[round].hand[i];
                        player2.round[round].hand[i] = {};
                        player2.round[round].hand[i].name = namecard;
                        player2.round[round].hand[i].image = imageCards[player2.round[round].hand[i].name];
                        player2.round[round].hand[i].posiX = player2.posiXDeck-widthCard;
                        player2.round[round].hand[i].posiY = player2.posiYDeck + ((heightCard+marginCard)*i);
                    }
                }
                function loadCanvasCtx(){
                    var c = document.getElementById(\"wanda\");
                    var ctx = c.getContext(\"2d\");
                    return ctx;
                }

                function loadGameData(){
                    gamedata = {};
                    gamedata.matchs = [];
                    gamedata.winner = ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "winner", array()), "html", null, true);
        echo ";

                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "matchs", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 133
            echo "                    gamedata.matchs[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "] = {};
                    gamedata.matchs[";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].player1 = {};
                    gamedata.matchs[";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].player1.cards = [];
                    ";
            // line 136
            $context["loop1"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array());
            // line 137
            echo "
                    ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "player1", array()), "deck", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 139
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].player1.cards[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "] = \"";
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "
                    gamedata.matchs[";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].player2 = {};
                    gamedata.matchs[";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].player2.cards = [];

                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "player2", array()), "deck", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 146
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].player2.cards[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "] = \"";
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "

                    gamedata.matchs[";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].rounds = [];
                    gamedata.matchs[";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "].winner = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "winner", array()), "html", null, true);
            echo ";
                    ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "rounds", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["round"]) {
                // line 153
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "] = {};
                    gamedata.matchs[";
                // line 154
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].winner = ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["round"], "winner", array()), "html", null, true);
                echo ";
                    gamedata.matchs[";
                // line 155
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player1 = {};
                    gamedata.matchs[";
                // line 156
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.hand = [];
                    ";
                // line 157
                $context["loop2"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array());
                // line 158
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["round"], "player1", array()), "hand", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 159
                    echo "                    gamedata.matchs[";
                    echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                    echo "].rounds[";
                    echo twig_escape_filter($this->env, ($context["loop2"] ?? null), "html", null, true);
                    echo "].player1.hand[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                    echo "] = \"";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["round"], "player1", array()), "playedCard", array()), "html", null, true);
                echo "\";

                    gamedata.matchs[";
                // line 163
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player2 = {};
                    gamedata.matchs[";
                // line 164
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.hand = [];
                    ";
                // line 165
                $context["loop2"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array());
                // line 166
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["round"], "player2", array()), "hand", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 167
                    echo "                    gamedata.matchs[";
                    echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                    echo "].rounds[";
                    echo twig_escape_filter($this->env, ($context["loop2"] ?? null), "html", null, true);
                    echo "].player2.hand[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                    echo "] = \"";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["round"], "player2", array()), "playedCard", array()), "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['round'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
                }

                function loadMatch(){
                    for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                        player1.round[i] = {};
                        player1.round[i].hand = gamedata.matchs[match].rounds[i].player1.hand;
                        player1.round[i].playedcard = gamedata.matchs[match].rounds[i].player1.playedcard;
                    }

                    for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                        player2.round[i] = {};
                        player2.round[i].hand = gamedata.matchs[match].rounds[i].player2.hand;
                        player2.round[i].playedcard = gamedata.matchs[match].rounds[i].player2.playedcard;
                    }
                    configCards();

                    round = 0;
                }
                ///////////////////////
                load();

                function load(){
                    loadGameData();
                    window.requestAnimationFrame(update);

                }
                function update(){
                    if(match >= max_matchs-1){
                        window.cancelAnimationFrame(update);

                    }else{

                        if(time % (limitVelocity - velocity) == 0){

                            zas = gamedata.matchs[match].rounds[round].winner;
                            if(startMatch) {
                                loadMatch();
                                startMatch = false;
                            }
                            winnerMatch = gamedata.matchs[match].winner;
                            canvas_draw();
                            if(selectedcardAnimate) {
                                selectedcardAnimate = animateSelectedCard();
                                if(selectedcardAnimate == false)
                                    loserCardAnimate = true;
                            }else if(loserCardAnimate) {
                                loserCardAnimate = animateLoserCard();
                            }else{

                                round++;
                                if(zas == 1){
                                    player1.pointsInMatch++;

                                }if(zas == 2){
                                    player2.pointsInMatch++;
                                }
                                if(round > max_rounds-1){
                                    round = 0;
                                    if(winnerMatch == 1){
                                        player1.pointsInGame++;
                                    }else if(winnerMatch == 2){
                                        player2.pointsInGame++;
                                    }
                                    player1.pointsInMatch = 0;
                                    player2.pointsInMatch = 0;
                                    startMatch = true;
                                    match++;
                                }

                                selectedcardAnimate = true;
                                configCards();
                            }
                        }
                        window.requestAnimationFrame(update);
                        time++;
                    }
                }
                function animateSelectedCard(){
                    var getPosiSelectedCard = function(player){
                        for(i = 0 ; i < player.round[round].hand.length ; i++){
                            if(player.round[round].hand[i].name == player.round[round].playedcard){

                                return i;
                            }

                        }
                    };
                    var posiCardP1 = getPosiSelectedCard(player1);
                    var posiCardP2 = getPosiSelectedCard(player2);
                    player1.selectedCardInMatch = posiCardP1;
                    player2.selectedCardInMatch = posiCardP2;
                    var control = false; //define final ou continuação da animação
                    if((player1.round[round].hand[posiCardP1].posiX+widthCard+marginCard) < widthScreen/2){
                        player1.round[round].hand[posiCardP1].posiX += displacementCard;
                        control = true;
                    }
                    if((player2.round[round].hand[posiCardP2].posiX+marginCard) > widthScreen/2){
                        player2.round[round].hand[posiCardP2].posiX -= displacementCard;
                        control = control && true;
                    }
                    return control;

                }
                function animateLoserCard(){
                    if(zas == 2){
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard*2;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else if(zas == 1){

                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard*2;
                        if(player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else{
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard*2;
                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard*2;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen &&
                            player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }
                    return true;
                }
                function printNames(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
                    ctx.scale(3, 3);
                    //ctx.font = 'bold 10pt Courier'; /* Experimental */
                    ctx.fillText(player1.name/*\"Jogador 1\"*/, 200/3, 50/3);
                    //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
                    ctx.fillText(player2.name/*\"Jogador 2\"*/, (widthScreen - 380)/3, 50/3);
                    //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
                    ctx.scale(1, 1);
                    ctx.restore();
                }

                function drawScores(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
                    ctx.save();
                    ctx.scale(3, 3);
                    ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3, 80/3);
                    ctx.fillText(\"Ganhou:\" + player2.pointsInGame, (widthScreen - 300)/3, 80/3);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1.2, 1.2);
                    ctx.fillText(\"Restam:\" + (max_matchs - match-1), 430/1.2, 10/1.2);
                    ctx.save();
                    ctx.scale(1.4, 1.4);
                    ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
                    ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
                    ctx.fillText(\"Velocidade:\" + velocity, 10, 10);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1, 1);
                    ctx.fillRect(120, 90, player1.pointsInGame*(610/100), 30);
                    ctx.fillRect(840-106-player2.pointsInGame*(610/100), 90,player2.pointsInGame*(610/100), 30);
                    //ctx.fillRect(player1.posiXDeck, player1.posiYDeck,100, 250);
                    //ctx.fillRect(player2.posiXDeck-100, player2.posiYDeck,100, 250);
                    ctx.restore();
                    ctx.restore();
                    ctx.scale(4, 4);
                    if(round == max_rounds-1){
                        if(winnerMatch == 1)
                            ctx.fillText(\"VENCEDOR: \" + player1.name, 80/4, 250/4);
                        else if(winnerMatch == 2)
                            ctx.fillText(\"VENCEDOR: \" + player2.name, 80/4, 250/4);
                        else
                            ctx.fillText(\"EMPATE!\", 480/4, 250/4);
                        ctx.scale(1, 1);

                    }
                    ctx.restore();

                }

                function drawcards(){
                    var j = 0;

                    for(i = 0 ; i < player1.round[round].hand.length ; i++){
                        ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }
                    for(i = 0 ; i < player2.round[round].hand.length ; i++){
                        ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }

                }
                function canvas_draw(){
                    ctx.font = \"12px Comic Sans\";
                    ctx.save();
                    ctx.drawImage(imageBG, 0, 0, imageBG.width, imageBG.height);


                    ctx.drawImage(imageEnemy1, 20, 340, imageEnemy1.width, imageEnemy1.height);
                    ctx.drawImage(imageEnemy2, 1024-180, 340);
                    ctx.drawImage(imageFace1, 12, 20);
                    ctx.drawImage(imageFace2, 1024-140, 20);
                    ctx.restore();
                    printNames();
                    drawcards();
                    drawScores();

                }

            </script>
        </canvas>

    </div>
";
    }

    public function getTemplateName()
    {
        return "View/Arena/cardsGamePlayer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 173,  574 => 171,  553 => 169,  530 => 167,  512 => 166,  510 => 165,  504 => 164,  498 => 163,  488 => 161,  465 => 159,  447 => 158,  445 => 157,  439 => 156,  433 => 155,  425 => 154,  418 => 153,  401 => 152,  395 => 151,  391 => 150,  387 => 148,  366 => 146,  349 => 145,  344 => 143,  340 => 142,  337 => 141,  316 => 139,  299 => 138,  296 => 137,  294 => 136,  290 => 135,  286 => 134,  281 => 133,  264 => 132,  259 => 130,  227 => 100,  219 => 98,  215 => 97,  208 => 96,  203 => 95,  199 => 94,  186 => 83,  179 => 82,  177 => 81,  166 => 78,  164 => 77,  144 => 60,  137 => 56,  133 => 55,  124 => 50,  118 => 48,  110 => 44,  104 => 42,  96 => 38,  64 => 8,  61 => 7,  56 => 5,  50 => 4,  44 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} {{ gameinfo.name }} {% endblock %}
{% block titlePage %}{{ gameinfo.name }}{% endblock %}
{% block arena %} active {% endblock %}
{% block scripthead %}
{% endblock %}
{% block content %}
    <div class=\"container-fluid\">
        <input type=\"number\" name=\"velocity\" id=\"velocity\" style=\"max-width: 5rem; \">

        <canvas id=\"wanda\" class=\"mx-auto d-block\" width=\"1024\" height=\"512\">
            <script>
                /////////////////////////////
                \$(document).ready(function(){
                    \$(\"#velocity\").change(function(){
                        aux = parseInt(\$(\"#velocity\").val());
                        if(aux >= 0 && aux<limitVelocity)
                            velocity = aux;
                    });
                });
                ////////////////////////////



                var ctx = loadCanvasCtx();
                var requestAnimationFrame =
                    window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.msRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    function(callback) {
                        return setTimeout(callback, 1);
                    };
                var gamedata;
                /////background
                var imageBG = new Image();
                imageBG.src = \"{{ base_url() }}{{ gameinfo.imagebg }}\";
                ////////
                ///////enemy
                var imageEnemy1 = new Image();
                imageEnemy1.src = \"{{ base_url() }}{{ gameinfo.imagesperson.enemy }}\";
                var imageEnemy2 = new Image();
                imageEnemy2.src = \"{{ base_url() }}{{ gameinfo.imagesperson.enemy }}\";
                ///////
                //////face
                var imageFace1 = new Image();
                imageFace1.src = \"{{ base_url() }}{{ gameinfo.imagesperson.face }}\";
                var imageFace2 = new Image();
                imageFace2.src = \"{{ base_url() }}{{ gameinfo.imagesperson.face }}\";
                ///////
                //////var system
                var match = 0;
                var round = 0;
                var max_matchs = {{ gameinfo.matchs }};
                var max_rounds = {{ gameinfo.rounds }};
                var heightDeck = 300;
                var widthScreen = 1024;
                var heightScreen = 512;
                var qtdcards = {{ gameinfo.countcards }};
                var imageCards = [];
                loadImageCards();
                var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
                var heightCard = (heightDeck / (qtdcards)) - marginCard;
                var widthCard = heightCard;
                var loserCardAnimate = false;
                var selectedcardAnimate = true;
                var displacementCard = 30;
                var startMatch = true;
                var winnerMatch = 0;
                var time = 0;
                var velocity = 499;
                var limitVelocity = 500;

                //////
                ///////player1
                var player1 = {round: [], deck:[] , name: {% if(confrontation.player1 != NULL ) %}
                        \"{{ confrontation.player1.nickname }}\"{% else %}\"Bot\"{% endif %}, pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150,loser: false , selectedCardInMatch: 0};
                ///////
                ///////Player2
                var player2 = {round: [], deck:[] , name: {% if(confrontation.player2 != NULL ) %}
                    \"{{ confrontation.player2.nickname }}\"{% else %}\"Bot\"{% endif %}
                    , pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150, loser: false, selectedCardInMatch: 0};
                ///////

                function upVelocity(){
                    if(velocity < limitVelocity)
                        velocity += 10;
                }function downVelocity(){
                    if(velocity > 0)
                        velocity -= 10;
                }
                function loadImageCards(){
                    {% for card in gameinfo.cardsimages %}
                    imageCards[\"{{ card.name }}\"] = new Image();
                    imageCards[\"{{ card.name }}\"].src = \"{{ base_url() }}{{ card.image }}\";
                    imageCards[\"{{ card.name }}\"].width = widthCard;
                    imageCards[\"{{ card.name }}\"].height = heightCard;
                    {% endfor %}
                }
                function configCards(){
                    console.log(player1.round[round].hand);
                    console.log(gamedata.matchs[match].rounds[round].player1.hand);
                    for (i = 0; i < player1.round[round].hand.length; i++) {
                        var namecard = player1.round[round].hand[i];
                        player1.round[round].hand[i] = {};
                        player1.round[round].hand[i].name = namecard;
                        player1.round[round].hand[i].image = imageCards[player1.round[round].hand[i].name];
                        player1.round[round].hand[i].posiX = player1.posiXDeck;
                        player1.round[round].hand[i].posiY = player1.posiYDeck + ((heightCard+marginCard)*i);
                    }
                    for (i = 0; i < player2.round[round].hand.length; i++) {
                        var namecard = player2.round[round].hand[i];
                        player2.round[round].hand[i] = {};
                        player2.round[round].hand[i].name = namecard;
                        player2.round[round].hand[i].image = imageCards[player2.round[round].hand[i].name];
                        player2.round[round].hand[i].posiX = player2.posiXDeck-widthCard;
                        player2.round[round].hand[i].posiY = player2.posiYDeck + ((heightCard+marginCard)*i);
                    }
                }
                function loadCanvasCtx(){
                    var c = document.getElementById(\"wanda\");
                    var ctx = c.getContext(\"2d\");
                    return ctx;
                }

                function loadGameData(){
                    gamedata = {};
                    gamedata.matchs = [];
                    gamedata.winner = {{ game.winner }};

                    {% for match in game.matchs %}
                    gamedata.matchs[{{ loop.index0 }}] = {};
                    gamedata.matchs[{{ loop.index0 }}].player1 = {};
                    gamedata.matchs[{{ loop.index0 }}].player1.cards = [];
                    {% set loop1 = loop.index0 %}

                    {% for card in match.player1.deck %}
                    gamedata.matchs[{{ loop1 }}].player1.cards[{{  loop.index0  }}] = \"{{ card }}\";
                    {% endfor %}

                    gamedata.matchs[{{ loop.index0 }}].player2 = {};
                    gamedata.matchs[{{ loop.index0 }}].player2.cards = [];

                    {% for card in match.player2.deck %}
                    gamedata.matchs[{{ loop1 }}].player2.cards[{{  loop.index0  }}] = \"{{ card }}\";
                    {% endfor %}


                    gamedata.matchs[{{ loop.index0 }}].rounds = [];
                    gamedata.matchs[{{ loop.index0 }}].winner = {{ match.winner }};
                    {% for round in match.rounds %}
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}] = {};
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].winner = {{ round.winner }};
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1 = {};
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1.hand = [];
                    {% set loop2 = loop.index0 %}
                    {% for card in round.player1.hand %}
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop2 }}].player1.hand[{{ loop.index0 }}] = \"{{ card }}\";
                    {% endfor %}
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1.playedcard = \"{{ round.player1.playedCard }}\";

                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2 = {};
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2.hand = [];
                    {% set loop2 = loop.index0 %}
                    {% for card in round.player2.hand %}
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop2 }}].player2.hand[{{ loop.index0 }}] = \"{{ card }}\";
                    {% endfor %}
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2.playedcard = \"{{ round.player2.playedCard }}\";
                    {% endfor %}

                    {% endfor %}

                }

                function loadMatch(){
                    for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                        player1.round[i] = {};
                        player1.round[i].hand = gamedata.matchs[match].rounds[i].player1.hand;
                        player1.round[i].playedcard = gamedata.matchs[match].rounds[i].player1.playedcard;
                    }

                    for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                        player2.round[i] = {};
                        player2.round[i].hand = gamedata.matchs[match].rounds[i].player2.hand;
                        player2.round[i].playedcard = gamedata.matchs[match].rounds[i].player2.playedcard;
                    }
                    configCards();

                    round = 0;
                }
                ///////////////////////
                load();

                function load(){
                    loadGameData();
                    window.requestAnimationFrame(update);

                }
                function update(){
                    if(match >= max_matchs-1){
                        window.cancelAnimationFrame(update);

                    }else{

                        if(time % (limitVelocity - velocity) == 0){

                            zas = gamedata.matchs[match].rounds[round].winner;
                            if(startMatch) {
                                loadMatch();
                                startMatch = false;
                            }
                            winnerMatch = gamedata.matchs[match].winner;
                            canvas_draw();
                            if(selectedcardAnimate) {
                                selectedcardAnimate = animateSelectedCard();
                                if(selectedcardAnimate == false)
                                    loserCardAnimate = true;
                            }else if(loserCardAnimate) {
                                loserCardAnimate = animateLoserCard();
                            }else{

                                round++;
                                if(zas == 1){
                                    player1.pointsInMatch++;

                                }if(zas == 2){
                                    player2.pointsInMatch++;
                                }
                                if(round > max_rounds-1){
                                    round = 0;
                                    if(winnerMatch == 1){
                                        player1.pointsInGame++;
                                    }else if(winnerMatch == 2){
                                        player2.pointsInGame++;
                                    }
                                    player1.pointsInMatch = 0;
                                    player2.pointsInMatch = 0;
                                    startMatch = true;
                                    match++;
                                }

                                selectedcardAnimate = true;
                                configCards();
                            }
                        }
                        window.requestAnimationFrame(update);
                        time++;
                    }
                }
                function animateSelectedCard(){
                    var getPosiSelectedCard = function(player){
                        for(i = 0 ; i < player.round[round].hand.length ; i++){
                            if(player.round[round].hand[i].name == player.round[round].playedcard){

                                return i;
                            }

                        }
                    };
                    var posiCardP1 = getPosiSelectedCard(player1);
                    var posiCardP2 = getPosiSelectedCard(player2);
                    player1.selectedCardInMatch = posiCardP1;
                    player2.selectedCardInMatch = posiCardP2;
                    var control = false; //define final ou continuação da animação
                    if((player1.round[round].hand[posiCardP1].posiX+widthCard+marginCard) < widthScreen/2){
                        player1.round[round].hand[posiCardP1].posiX += displacementCard;
                        control = true;
                    }
                    if((player2.round[round].hand[posiCardP2].posiX+marginCard) > widthScreen/2){
                        player2.round[round].hand[posiCardP2].posiX -= displacementCard;
                        control = control && true;
                    }
                    return control;

                }
                function animateLoserCard(){
                    if(zas == 2){
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard*2;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else if(zas == 1){

                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard*2;
                        if(player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else{
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard*2;
                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard*2;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen &&
                            player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }
                    return true;
                }
                function printNames(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
                    ctx.scale(3, 3);
                    //ctx.font = 'bold 10pt Courier'; /* Experimental */
                    ctx.fillText(player1.name/*\"Jogador 1\"*/, 200/3, 50/3);
                    //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
                    ctx.fillText(player2.name/*\"Jogador 2\"*/, (widthScreen - 380)/3, 50/3);
                    //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
                    ctx.scale(1, 1);
                    ctx.restore();
                }

                function drawScores(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
                    ctx.save();
                    ctx.scale(3, 3);
                    ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3, 80/3);
                    ctx.fillText(\"Ganhou:\" + player2.pointsInGame, (widthScreen - 300)/3, 80/3);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1.2, 1.2);
                    ctx.fillText(\"Restam:\" + (max_matchs - match-1), 430/1.2, 10/1.2);
                    ctx.save();
                    ctx.scale(1.4, 1.4);
                    ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
                    ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
                    ctx.fillText(\"Velocidade:\" + velocity, 10, 10);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1, 1);
                    ctx.fillRect(120, 90, player1.pointsInGame*(610/100), 30);
                    ctx.fillRect(840-106-player2.pointsInGame*(610/100), 90,player2.pointsInGame*(610/100), 30);
                    //ctx.fillRect(player1.posiXDeck, player1.posiYDeck,100, 250);
                    //ctx.fillRect(player2.posiXDeck-100, player2.posiYDeck,100, 250);
                    ctx.restore();
                    ctx.restore();
                    ctx.scale(4, 4);
                    if(round == max_rounds-1){
                        if(winnerMatch == 1)
                            ctx.fillText(\"VENCEDOR: \" + player1.name, 80/4, 250/4);
                        else if(winnerMatch == 2)
                            ctx.fillText(\"VENCEDOR: \" + player2.name, 80/4, 250/4);
                        else
                            ctx.fillText(\"EMPATE!\", 480/4, 250/4);
                        ctx.scale(1, 1);

                    }
                    ctx.restore();

                }

                function drawcards(){
                    var j = 0;

                    for(i = 0 ; i < player1.round[round].hand.length ; i++){
                        ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }
                    for(i = 0 ; i < player2.round[round].hand.length ; i++){
                        ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }

                }
                function canvas_draw(){
                    ctx.font = \"12px Comic Sans\";
                    ctx.save();
                    ctx.drawImage(imageBG, 0, 0, imageBG.width, imageBG.height);


                    ctx.drawImage(imageEnemy1, 20, 340, imageEnemy1.width, imageEnemy1.height);
                    ctx.drawImage(imageEnemy2, 1024-180, 340);
                    ctx.drawImage(imageFace1, 12, 20);
                    ctx.drawImage(imageFace2, 1024-140, 20);
                    ctx.restore();
                    printNames();
                    drawcards();
                    drawScores();

                }

            </script>
        </canvas>

    </div>
{% endblock %}", "View/Arena/cardsGamePlayer.twig", "/var/www/html/Wandarena/app/src/View/Arena/cardsGamePlayer.twig");
    }
}
