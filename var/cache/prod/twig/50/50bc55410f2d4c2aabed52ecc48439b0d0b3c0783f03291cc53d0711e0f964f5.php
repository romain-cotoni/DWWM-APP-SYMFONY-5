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

/* contact/index.html.twig */
class __TwigTemplate_34b81c739af760eb6e0fd6d902849b97cf9da9b6b490cbe81283bacb0a4a2d10 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        echo "
<div class=\"contactcontent\">    
    <div class=\"row mx-0\">
        <div class=\"limit col-xs-12 col-sm-12 col-lg-9 d-flex flex-column justify-content-start align-items-center limit-right\">
            <div class=\"limit mx-2 ";
        // line 10
        echo "\">
                <h1 class=\"h2\">ENVOYEZ NOUS UN MESSAGE</h1>                
                <h5 class=\"\">Nous vous répondrons dès que possible</h5>
            </div>
            ";
        // line 50
        echo "            <div>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div class=\"row mx-0 limit\">
                    <div class=\"mb-3 form-group col-xs-12 col-sm-12 col-lg-6 limit\">
                        <div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 55), 'label');
        echo "</div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 56), 'widget');
        echo "</div>
                        </div>
                    </div>
                    <div class=\"mb-3 form-group col-xs-12 col-sm-12 col-lg-6 limit\">
                        <div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 61), 'label');
        echo "</div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 62), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group col-xs-12 col-sm-12 col-lg-6 limit\">
                        <div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 69), 'label');
        echo "</div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 70), 'widget');
        echo "</div>
                        </div>  
                    </div>
                    <div class=\"mb-3 form-group col-xs-12 col-sm-12 col-lg-6 limit\">
                        <div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 75), 'label');
        echo "</div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 76), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>
                <div class=\"row mx-0 limit\">
                    <div class=\"mb-3 form-group col-xs-12 col-sm-12 col-lg-12 limit\">
                        <div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "msg", [], "any", false, false, false, 83), 'label');
        echo "</div>
                            <div class=\"d-flex flex-row justify-content-center\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "msg", [], "any", false, false, false, 84), 'widget', ["attr" => ["style" => "width: 100%"]]);
        echo "</div>
                        </div>
                    </div>
                </div>
                <div class=\"row mx-0 mb-3 limit\">
                    <div class=\"col-6 d-flex justify-content-end\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 90), 'widget');
        echo "
                    </div>
                    <div class=\"col-6 d-flex justify-content-start limit\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reset", [], "any", false, false, false, 93), 'widget');
        echo "
                    </div>
                </div>
            ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-lg-3 d-flex flex-column justify-content-center align-items-center\">
            <div class=\"limit-top\">
                <div class=\"mt-3 mb-3\">
                    <p class=\"h5\"><img class=\"icon-64\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["contactCat1Icon"] ?? null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["contactCat1Title"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 103
        echo twig_escape_filter($this->env, ($context["contactCat1Line1"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 104
        echo twig_escape_filter($this->env, ($context["contactCat1Line2"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 105
        echo twig_escape_filter($this->env, ($context["contactCat1Line3"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div>
                    <p class=\"h5\"><img class=\"icon-64\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["contactCat2Icon"] ?? null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["contactCat2Title"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 109
        echo twig_escape_filter($this->env, ($context["contactCat2Line1"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 110
        echo twig_escape_filter($this->env, ($context["contactCat2Line2"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 111
        echo twig_escape_filter($this->env, ($context["contactCat2Line3"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div>
                    <p class=\"h5\"><img class=\"icon-64\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["contactCat3Icon"] ?? null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["contactCat3Title"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 115
        echo twig_escape_filter($this->env, ($context["contactCat3Line1"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 116
        echo twig_escape_filter($this->env, ($context["contactCat3Line2"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 117
        echo twig_escape_filter($this->env, ($context["contactCat3Line3"] ?? null), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 117,  216 => 116,  212 => 115,  206 => 114,  200 => 111,  196 => 110,  192 => 109,  186 => 108,  180 => 105,  176 => 104,  172 => 103,  166 => 102,  157 => 96,  151 => 93,  145 => 90,  136 => 84,  132 => 83,  122 => 76,  118 => 75,  110 => 70,  106 => 69,  96 => 62,  92 => 61,  84 => 56,  80 => 55,  73 => 51,  70 => 50,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\contact\\index.html.twig");
    }
}
