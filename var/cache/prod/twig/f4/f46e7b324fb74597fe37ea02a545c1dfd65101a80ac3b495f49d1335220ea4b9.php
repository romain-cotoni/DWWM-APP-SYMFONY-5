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

/* base.html.twig */
class __TwigTemplate_b8477e4f8c26f625879cfd5f0686d7f82dd170856b57228dac4bcea65834973d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body ";
        // line 17
        if ((0 === twig_compare(($context["pageName"] ?? null), "app"))) {
            echo " class=\"no-bg-img\" ";
        }
        echo ">
        ";
        // line 18
        if ((0 !== twig_compare(($context["pageName"] ?? null), "app"))) {
            // line 19
            echo "        <header style=\"height:35vh;\">
            <div class=\"row mx-0\">
                <div class=\"col-3 limit\">
                    <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">
                        <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gnosysLogoCut.png"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"logo\" width=\"200px\" height=\"200px\">
                        <p class=\"text-white\">Ce slogan est si beau</p>
                    </a>
                </div>

                <div class=\"col-6 d-flex flex-row justify-content-center align-items-center limit\"></div>
                
                <div class=\"col-3 d-flex flex-row justify-content-end px-0 mx-0 limit\">                    
                    <div class=\"btn-group dropstart btn-sidemenu\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></button>                             
                       
                        <ul class=\"dropdown-menu mb-2\">
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">ACCUEIL</a>
                            </li>
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise");
            echo "\">L'ENTREPRISE</a>
                            </li>
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">NOUS CONTACTER</a>
                            </li>
                        </ul>  
                                            
                    </div>                
                </div>
            </div>
        </header>
        ";
        }
        // line 51
        echo "        
        ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        if ((0 !== twig_compare(($context["pageName"] ?? null), "app"))) {
            // line 57
            echo "        <footer> 
            <div class=\"footer-div\">
                <div class=\"row h-75 mx-0\">
                    <div class=\"footer-titre col-xs-12 col-sm-12 col-md-6 d-flex justify-content-md-end align-items-center text-white\">
                        VOICI MON JOLIE FOOTER
                    </div>
                    <div class=\"footer-icons col-xs-12 col-sm-12 col-md-6 d-flex justify-content-md-start align-items-center\">
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/facebook.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/linkedin.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/twitter.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/instagram.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/whatsapp.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/google.png"), "html", null, true);
            echo "\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/github.png"), "html", null, true);
            echo "\"/></a></div>                            
                    </div>         
                </div>
                <div class=\"d-flex flex-row justify-content-end align-items-start h-25 footer-sign\">
                    <p>&copy 2021, Designed & coded by <a href=\"#\">rom1</a>.</p>
                </div>                
            </div>
        </footer>
        ";
        }
        // line 79
        echo "        
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "titre par défaut";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">            
            <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'> 
            <link rel=\"shortcut icon\" href=\"data:image/x-icon;,\" type=\"image/x-icon\">
                   
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom-css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "
        ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            <script src=\"https://kit.fontawesome.com/01a63ec227.js\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom-js.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 83,  218 => 81,  214 => 80,  209 => 53,  205 => 52,  199 => 14,  193 => 10,  189 => 9,  182 => 7,  176 => 86,  174 => 80,  171 => 79,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  126 => 57,  124 => 56,  121 => 55,  119 => 52,  116 => 51,  104 => 42,  98 => 39,  92 => 36,  76 => 23,  72 => 22,  67 => 19,  65 => 18,  59 => 17,  56 => 16,  54 => 9,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\base.html.twig");
    }
}
