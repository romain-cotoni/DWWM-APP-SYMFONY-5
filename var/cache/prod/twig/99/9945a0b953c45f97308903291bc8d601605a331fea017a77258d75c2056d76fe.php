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

/* home/index.html.twig */
class __TwigTemplate_a555565a7e4a4c7125327aa4d0e96e94e4e8f063bb1294125c92a681e22a34ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pageName"] ?? null), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"d-flex flex-row justify-content-center align-items-center height-accueil-intro limit vroom\">                  
        ";
        // line 8
        echo "    </div>
    <div class=\"container-fluid d-flex align-items-center limit\">
        <div class=\"row justify-content-around\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-2\">
                <div class=\"card border-0 align-items-center\">                    
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["accueilCard1Img"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top rounded-circle border border-dark\" alt=\"image-formation\">
                    <div class=\"card-header text-center mt-3\">
                        <h5 class=\"card-title pt-2\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["accueilCard1Header"] ?? null), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body text-center\">                    
                        <p class=\"card-text\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["accueilCard1Body"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation");
        echo "\" class=\"btn btn-primary\">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-2\">
                <div class=\"card border-0 align-items-center\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["accueilCard2Img"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top rounded-circle border border-dark\" alt=\"image-audit\">
                    <div class=\"card-header text-center mt-3 \">
                        <h5 class=\"card-title pt-2\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["accueilCard2Header"] ?? null), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body text-center\">                    
                        <p class=\"card-text\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["accueilCard2Body"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("audit");
        echo "\" class=\"btn btn-primary\">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-2\">
                <div class=\"card border-0 align-items-center\">                
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["accueilCard3Img"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top rounded-circle border border-dark\" alt=\"image-jury\">
                    <div class=\"card-header text-center mt-3\">
                        <h5 class=\"card-title pt-2\">";
        // line 40
        echo twig_escape_filter($this->env, ($context["accueilCard3Header"] ?? null), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body text-center\">                    
                        <p class=\"card-text\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["accueilCard3Body"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury");
        echo "\" class=\"btn btn-primary\">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-2\">
                <div class=\"card border-0 align-items-center\">
                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["accueilCard4Img"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top rounded-circle border border-dark\" alt=\"image-conception\">                
                    <div class=\"card-header text-center mt-3\">
                        <h5 class=\"card-title pt-2\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["accueilCard4Header"] ?? null), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body text-center\">                    
                        <p class=\"card-text\">";
        // line 55
        echo twig_escape_filter($this->env, ($context["accueilCard4Body"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conception");
        echo "\" class=\"btn btn-primary\">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-2\">
                <div class=\"card border-0 align-items-center\">
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["accueilCard5Img"] ?? null)), "html", null, true);
        echo "\" class=\"card-img-top rounded-circle border border-dark\" alt=\"image-stage\">                
                    <div class=\"card-header text-center mt-3\">
                        <h5 class=\"card-title pt-2\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["accueilCard5Header"] ?? null), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body text-center ";
        // line 66
        echo "\">                    
                        <p class=\"card-text\">";
        // line 67
        echo twig_escape_filter($this->env, ($context["accueilCard5Body"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stage");
        echo "\" class=\"btn btn-primary\">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class=\"height-intro limit vroom\">                  
        <!--empty-->
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 68,  178 => 67,  175 => 66,  170 => 64,  165 => 62,  156 => 56,  152 => 55,  146 => 52,  141 => 50,  132 => 44,  128 => 43,  122 => 40,  117 => 38,  108 => 32,  104 => 31,  98 => 28,  93 => 26,  83 => 19,  79 => 18,  73 => 15,  68 => 13,  61 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\home\\index.html.twig");
    }
}
