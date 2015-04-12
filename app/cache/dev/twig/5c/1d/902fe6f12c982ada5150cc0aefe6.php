<?php

/* ::layout.html.twig */
class __TwigTemplate_5c1d902fe6f12c982ada5150cc0aefe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        <!-- uniquement pour les mobiles. On demande que l'affichage occupe tout l'espace disponible avec une taille de 1 -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">   

        <title>
            ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "            </title>  

            <!-- Bootstrap -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
              <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->

               ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        </head>
        <style type=\"text/css\">


            </style>

            <body >
                <div class=\"container \" >
                    <!entete-->
                    <div class=\"row\" >
                        <header class=\" col-xs-12\" >
                            <nav class=\"navbar navbar-default navbar-fixed-top  \" role=\"navigation\" >
                                <div class=\"container \" >
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"active\">
                                            <a href=\"\">Nouveau point d'eau</a>
                                        </li>



                                    </ul>
                                    <ul class=\"nav navbar-nav navbar-right\">
                                        <li class=\"divider-vertical\"></li>
                                        <li style=\"margin-right: 10px;\">
                                            <a href=\"\">A propos</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>



                        </header>
                    </div>

                    <!corps-->
                    <div class=\"row\" >

                        <!corps-->
                        <div class=\"col-xs-10\" >
                            <br>
                            <br>
                            <br>
                            <div class=\"panel panel-default\" >
                                <h3 class=\"panel-title\">
                                    <div id=\"containers\">
                                        <div id=\"googlemap\" style=\" width:950px;height:500px;padding:10px 5px 5px 5px;margin:auto;\">
                                        </div>


                                    </div>
                                </h3>

                            </div>


                    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "
                        </div>

                        <!comments-->
                        <div class=\"col-xs-2\" > 
                            <br>


                            <div class=\"well\" style=\"margin:10px;padding:30px 5px 30px 5px;min-width: 260px; min-height: 520px\">

                    ";
        // line 92
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CleanWaterMapBundle:Map:listeCommentaires"));
        echo "

                                <div style=\"margin-left:50px;\">
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <button type=\"button\" class=\"btn btn-info\">Ajouter un commentaire</button>

                                </div>
                            </div>


                        </div>





                    </div>

                    <div class=\"row\" >
                        <footer id=\"footer\"  >   <p> <strong> Copyright Space Apps Challenge 2015</strong></p></footer> 
                    </div>



                </div>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery/js/jquery-1.9.0.js"), "html", null, true);
        echo "\"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <!-- Include Javascript -->

                <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=false"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/function.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "            </body>
        </html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo " CleanWater | map ";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 127,  205 => 126,  199 => 81,  194 => 23,  188 => 10,  182 => 128,  180 => 126,  176 => 125,  172 => 124,  166 => 121,  161 => 119,  131 => 92,  119 => 82,  117 => 81,  58 => 24,  56 => 23,  45 => 15,  41 => 14,  36 => 11,  34 => 10,  23 => 1,);
    }
}
