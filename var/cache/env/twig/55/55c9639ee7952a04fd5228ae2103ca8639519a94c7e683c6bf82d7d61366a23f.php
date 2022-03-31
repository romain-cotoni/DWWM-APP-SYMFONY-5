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
class __TwigTemplate_110d769ee8b3385954e5d768c028e37039183df551c759a6eb8297bf0a2cd949 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ((0 === twig_compare((isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 17, $this->source); })()), "app"))) {
            echo " class=\"no-bg-img\" ";
        }
        echo ">
        ";
        // line 18
        if ((0 !== twig_compare((isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 18, $this->source); })()), "app"))) {
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
        if ((0 !== twig_compare((isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 56, $this->source); })()), "app"))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "titre par défaut";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">            
            <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'> 
            <link rel=\"shortcut icon\" href=\"data:image/x-icon;,\" type=\"image/x-icon\">
                   
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom-css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            <script src=\"https://kit.fontawesome.com/01a63ec227.js\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom-js.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  249 => 83,  245 => 81,  238 => 80,  230 => 53,  223 => 52,  214 => 14,  208 => 10,  201 => 9,  188 => 7,  179 => 86,  177 => 80,  174 => 79,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  138 => 64,  129 => 57,  127 => 56,  124 => 55,  122 => 52,  119 => 51,  107 => 42,  101 => 39,  95 => 36,  79 => 23,  75 => 22,  70 => 19,  68 => 18,  62 => 17,  59 => 16,  57 => 9,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
        <title>{% block title %}titre par défaut{% endblock %}</title>

        {% block stylesheets %}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">            
            <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'> 
            <link rel=\"shortcut icon\" href=\"data:image/x-icon;,\" type=\"image/x-icon\">
                   
            <link href=\"{{asset('assets/css/custom-css.css')}}\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body {% if pageName == 'app' %} class=\"no-bg-img\" {% endif %}>
        {% if pageName != 'app' %}
        <header style=\"height:35vh;\">
            <div class=\"row mx-0\">
                <div class=\"col-3 limit\">
                    <a class=\"navbar-brand\" href=\"{{path('admin')}}\">
                        <img src=\"{{asset('assets/img/gnosysLogoCut.png')}}\" class=\"img-fluid\" alt=\"logo\" width=\"200px\" height=\"200px\">
                        <p class=\"text-white\">Ce slogan est si beau</p>
                    </a>
                </div>

                <div class=\"col-6 d-flex flex-row justify-content-center align-items-center limit\"></div>
                
                <div class=\"col-3 d-flex flex-row justify-content-end px-0 mx-0 limit\">                    
                    <div class=\"btn-group dropstart btn-sidemenu\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></button>                             
                       
                        <ul class=\"dropdown-menu mb-2\">
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"{{path('home')}}\">ACCUEIL</a>
                            </li>
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"{{path('entreprise')}}\">L'ENTREPRISE</a>
                            </li>
                            <li class=\"nav-item mx-auto\">
                                <a class=\"nav-link\" href=\"{{path('contact')}}\">NOUS CONTACTER</a>
                            </li>
                        </ul>  
                                            
                    </div>                
                </div>
            </div>
        </header>
        {% endif %}
        
        {% block content %}

        {% endblock %}

        {% if pageName != 'app' %}
        <footer> 
            <div class=\"footer-div\">
                <div class=\"row h-75 mx-0\">
                    <div class=\"footer-titre col-xs-12 col-sm-12 col-md-6 d-flex justify-content-md-end align-items-center text-white\">
                        VOICI MON JOLIE FOOTER
                    </div>
                    <div class=\"footer-icons col-xs-12 col-sm-12 col-md-6 d-flex justify-content-md-start align-items-center\">
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/facebook.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/linkedin.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/twitter.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/instagram.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/whatsapp.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/google.png')}}\"/></a></div>
                        <div class=\"div-icon mx-sm-2 d-inline\"><a href=\"#\"><img class=\"footer-icon\" src=\"{{asset('assets/icon/github.png')}}\"/></a></div>                            
                    </div>         
                </div>
                <div class=\"d-flex flex-row justify-content-end align-items-start h-25 footer-sign\">
                    <p>&copy 2021, Designed & coded by <a href=\"#\">rom1</a>.</p>
                </div>                
            </div>
        </footer>
        {% endif %}
        
        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            <script src=\"https://kit.fontawesome.com/01a63ec227.js\" crossorigin=\"anonymous\"></script>
            <script src=\"{{asset('assets/js/custom-js.js')}}\"></script>
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\base.html.twig");
    }
}
