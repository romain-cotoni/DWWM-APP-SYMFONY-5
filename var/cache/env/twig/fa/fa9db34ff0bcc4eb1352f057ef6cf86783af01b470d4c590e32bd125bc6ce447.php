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

/* app/index.html.twig */
class __TwigTemplate_a2963eb1e97c302605d172b77e08783de2641871cf53bf8552ecc75e26bac2e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
<div class=\"width-app\">
    <a class=\"d-block col-3 ms-1 my-1 btn btn-secondary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Site</a>
    <a class=\"d-block col-3 ms-1 mb-1 btn btn-secondary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a>
</div>

";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCandidat"]) || array_key_exists("formCandidat", $context) ? $context["formCandidat"] : (function () { throw new RuntimeError('Variable "formCandidat" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-3\">
        <div class=\"width-app \">

            <div class=\"d-block\">
        
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-4 limit label-app text-center\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCandidat"]) || array_key_exists("formCandidat", $context) ? $context["formCandidat"] : (function () { throw new RuntimeError('Variable "formCandidat" does not exist.', 23, $this->source); })()), "identification", [], "any", false, false, false, 23), 'label');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCandidat"]) || array_key_exists("formCandidat", $context) ? $context["formCandidat"] : (function () { throw new RuntimeError('Variable "formCandidat" does not exist.', 26, $this->source); })()), "identification", [], "any", false, false, false, 26), 'widget');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCandidat"]) || array_key_exists("formCandidat", $context) ? $context["formCandidat"] : (function () { throw new RuntimeError('Variable "formCandidat" does not exist.', 29, $this->source); })()), "chercher", [], "any", false, false, false, 29), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCandidat"]) || array_key_exists("formCandidat", $context) ? $context["formCandidat"] : (function () { throw new RuntimeError('Variable "formCandidat" does not exist.', 37, $this->source); })()), 'form_end');
        echo "

";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSession"]) || array_key_exists("formSession", $context) ? $context["formSession"] : (function () { throw new RuntimeError('Variable "formSession" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-3\">
        <div class=\"width-app\">

            <div class=\"d-block\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-4 limit label-app text-center\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSession"]) || array_key_exists("formSession", $context) ? $context["formSession"] : (function () { throw new RuntimeError('Variable "formSession" does not exist.', 49, $this->source); })()), "identifiant", [], "any", false, false, false, 49), 'label');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSession"]) || array_key_exists("formSession", $context) ? $context["formSession"] : (function () { throw new RuntimeError('Variable "formSession" does not exist.', 52, $this->source); })()), "identifiant", [], "any", false, false, false, 52), 'widget', ["id" => "selectSession"]);
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSession"]) || array_key_exists("formSession", $context) ? $context["formSession"] : (function () { throw new RuntimeError('Variable "formSession" does not exist.', 55, $this->source); })()), "chercher", [], "any", false, false, false, 55), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSession"]) || array_key_exists("formSession", $context) ? $context["formSession"] : (function () { throw new RuntimeError('Variable "formSession" does not exist.', 63, $this->source); })()), 'form_end');
        echo "

";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "    <div class=\"flash-notice bg-alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " ";
        // line 95
        echo "
";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_start');
        echo "
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-2 \">
        <div class=\"width-app\">                                    

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_candidat\">CANDIDAT</button>                    
            </div>

            <div class=\"d-block\" id=\"div_candidat\">                        

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "identification", [], "any", false, false, false, 109), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "identification", [], "any", false, false, false, 110), 'widget', ["id" => "selectCandidat"]);
        echo "</div>
                            ";
        // line 112
        echo "                        </div>
                    </div>
                </div>                

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "add_candidat", [], "any", false, false, false, 119), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "delete_candidat", [], "any", false, false, false, 120), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-6 col-lg-4 mb-1 text-center label-app\">";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "session", [], "any", false, false, false, 128), 'label');
        echo "</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "session", [], "any", false, false, false, 129), 'widget');
        echo "</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "session_changer", [], "any", false, false, false, 130), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

            </div>



            <div class=\"row mx-0 mb-2\">
                <button class=\"col-sm-12 col-12 mb-3 width-app btn btn-primary\" id=\"btn_session\">SESSION</button>                    
            </div>
            
            <div class=\"d-block\" id=\"div_session\">                

                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "identifiant", [], "any", false, false, false, 148), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "identifiant", [], "any", false, false, false, 149), 'widget', ["id" => "inputSession"]);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "date_debut", [], "any", false, false, false, 157), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "date_debut", [], "any", false, false, false, 158), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "date_fin", [], "any", false, false, false, 166), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "date_fin", [], "any", false, false, false, 167), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "nombre_de_jours", [], "any", false, false, false, 175), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "nombre_de_jours", [], "any", false, false, false, 176), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "responsable", [], "any", false, false, false, 184), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "responsable", [], "any", false, false, false, 185), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "telephone", [], "any", false, false, false, 193), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "telephone", [], "any", false, false, false, 194), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "site_de_session", [], "any", false, false, false, 202), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "site_de_session", [], "any", false, false, false, 203), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "adresse", [], "any", false, false, false, 211), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "adresse", [], "any", false, false, false, 212), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "code_postal", [], "any", false, false, false, 220), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "code_postal", [], "any", false, false, false, 221), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "ville", [], "any", false, false, false, 229), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "ville", [], "any", false, false, false, 230), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "add_session", [], "any", false, false, false, 238), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "delete_session", [], "any", false, false, false, 239), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

            </div>
            

            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_jour\">JOUR</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_jour\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "date_jour", [], "any", false, false, false, 256), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">     ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "date_jour", [], "any", false, false, false, 257), 'widget', ["id" => "selectJour"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_jour\">Ajouter jour</button>                    
                </div>

                </div>

                <div id=\"listJour\"></div>
                ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jours"]) || array_key_exists("jours", $context) ? $context["jours"] : (function () { throw new RuntimeError('Variable "jours" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 270
            echo "                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">    ";
            // line 273
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "date_jour", [], "any", false, false, false, 273), 'label');
            echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">";
            // line 274
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getDateJour", [], "any", false, false, false, 274), "d-m-Y"), "html", null, true);
            echo "</div>
                        </div>
                    </div>                    
                </div>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                
            </div>

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_entreprise\">ENTREPRISE</button>                    
            </div>

            <div class=\"d-block\" id=\"div_entreprise\">
        
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "raison_sociale", [], "any", false, false, false, 291), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "raison_sociale", [], "any", false, false, false, 292), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "adresse_entreprise", [], "any", false, false, false, 300), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "adresse_entreprise", [], "any", false, false, false, 301), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "code_postal_entreprise", [], "any", false, false, false, 309), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "code_postal_entreprise", [], "any", false, false, false, 310), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "ville_entreprise", [], "any", false, false, false, 318), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "ville_entreprise", [], "any", false, false, false, 319), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "telephone_entreprise", [], "any", false, false, false, 327), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "telephone_entreprise", [], "any", false, false, false, 328), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "add_entreprise", [], "any", false, false, false, 336), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "delete_entreprise", [], "any", false, false, false, 337), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_responsable\">RESPONSABLE ENTREPRISE</button>                    
            </div>

            <div class=\"d-block\" id=\"div_responsable\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "nom_responsable_entreprise", [], "any", false, false, false, 353), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "nom_responsable_entreprise", [], "any", false, false, false, 354), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "prenom_responsable_entreprise", [], "any", false, false, false, 362), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "prenom_responsable_entreprise", [], "any", false, false, false, 363), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "fonction_responsable_entreprise", [], "any", false, false, false, 371), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "fonction_responsable_entreprise", [], "any", false, false, false, 372), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "tel_fixe_responsable_entreprise", [], "any", false, false, false, 380), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "tel_fixe_responsable_entreprise", [], "any", false, false, false, 381), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "tel_mob_responsable_entreprise", [], "any", false, false, false, 389), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "tel_mob_responsable_entreprise", [], "any", false, false, false, 390), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "add_responsable", [], "any", false, false, false, 398), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "delete_responsable", [], "any", false, false, false, 399), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_competence\">COMPETENCE</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_competence\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "select_description", [], "any", false, false, false, 415), 'label');
        echo "</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">          ";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "select_description", [], "any", false, false, false, 416), 'widget', ["id" => "selectDescription"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "select_commentaire", [], "any", false, false, false, 424), 'label');
        echo "</div>
                            <div class=\"col-sm-10 col-lg-6\">                      ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "select_commentaire", [], "any", false, false, false, 425), 'widget', ["id" => "selectCommentaire"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un description</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "description", [], "any", false, false, false, 434), 'widget', ["id" => "inputDescription"]);
        echo "</div>                                                        
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un commentaire</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "commentaire", [], "any", false, false, false, 442), 'widget', ["id" => "inputCommentaire"]);
        echo "</div>                            
                            ";
        // line 444
        echo "                        </div>
                    </div>                 
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_competence\">Ajouter compétence</button>                    
                </div>

                </div>

                <div id=\"listCompetence\"></div>
                ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 455, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 456
            echo "                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 459
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "description", [], "any", false, false, false, 459), 'label');
            echo "</div>
                            <input class=\"col-sm-10 col-lg-6 text-center bg-white\" value=\"";
            // line 460
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getDescription", [], "any", false, false, false, 460), "html", null, true);
            echo "\"/>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "commentaire", [], "any", false, false, false, 467), 'label');
            echo "</div>
                            <input class=\"col-sm-10 col-lg-6 text-center bg-white\" value=\"";
            // line 468
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "commentaire", [], "any", false, false, false, 468), "html", null, true);
            echo "\"/>
                        </div>
                    </div>                    
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                
            </div>
                

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_jury\">JURY</button>                    
            </div>
            <div class=\"d-block\" id=\"div_jury\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 484
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 484, $this->source); })()), "nom_jury_1", [], "any", false, false, false, 484), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "nom_jury_1", [], "any", false, false, false, 485), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "prenom_jury_1", [], "any", false, false, false, 492), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), "prenom_jury_1", [], "any", false, false, false, 493), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 500, $this->source); })()), "nom_jury_2", [], "any", false, false, false, 500), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "nom_jury_2", [], "any", false, false, false, 501), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 508, $this->source); })()), "prenom_jury_2", [], "any", false, false, false, 508), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "prenom_jury_2", [], "any", false, false, false, 509), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "nom_jury_3", [], "any", false, false, false, 516), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "nom_jury_3", [], "any", false, false, false, 517), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 524, $this->source); })()), "prenom_jury_3", [], "any", false, false, false, 524), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), "prenom_jury_3", [], "any", false, false, false, 525), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "add_jury", [], "any", false, false, false, 533), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "delete_jury", [], "any", false, false, false, 534), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_utilisateurs\">UTILISATEURS</button>                    
            </div>
            
            <div class=\"limit d-block\" id=\"div_utilisateurs\">

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur1\">UTILISATEUR 1</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur1\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 553
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 553, $this->source); })()), "insee", [], "any", false, false, false, 553), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "insee", [], "any", false, false, false, 554), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 561
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 561), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 562), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 569
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 569, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 569), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 570
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 570, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 570), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 577
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "adresse_utilisateur", [], "any", false, false, false, 577), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 578
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "adresse_utilisateur", [], "any", false, false, false, 578), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 585
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 585, $this->source); })()), "code_postal_utilisateur", [], "any", false, false, false, 585), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 586
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 586, $this->source); })()), "code_postal_utilisateur", [], "any", false, false, false, 586), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 593
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), "ville_utilisateur", [], "any", false, false, false, 593), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "ville_utilisateur", [], "any", false, false, false, 594), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 601
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 601, $this->source); })()), "tel_mob_utilisateur", [], "any", false, false, false, 601), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 602
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 602, $this->source); })()), "tel_mob_utilisateur", [], "any", false, false, false, 602), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "add_utilisateur_1", [], "any", false, false, false, 609), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 610
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()), "delete_utilisateur_1", [], "any", false, false, false, 610), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur2\">UTILISATEUR 2</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 623
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 623, $this->source); })()), "insee2", [], "any", false, false, false, 623), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 624
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "insee2", [], "any", false, false, false, 624), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 631
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "nom_utilisateur2", [], "any", false, false, false, 631), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 632, $this->source); })()), "nom_utilisateur2", [], "any", false, false, false, 632), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 639
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 639, $this->source); })()), "prenom_utilisateur2", [], "any", false, false, false, 639), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "prenom_utilisateur2", [], "any", false, false, false, 640), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 647
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 647, $this->source); })()), "adresse_utilisateur2", [], "any", false, false, false, 647), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 648
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 648, $this->source); })()), "adresse_utilisateur2", [], "any", false, false, false, 648), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 655, $this->source); })()), "code_postal_utilisateur2", [], "any", false, false, false, 655), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 656
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 656, $this->source); })()), "code_postal_utilisateur2", [], "any", false, false, false, 656), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 663
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 663, $this->source); })()), "ville_utilisateur2", [], "any", false, false, false, 663), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 664
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 664, $this->source); })()), "ville_utilisateur2", [], "any", false, false, false, 664), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 671
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 671, $this->source); })()), "tel_mob_utilisateur2", [], "any", false, false, false, 671), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 672
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "tel_mob_utilisateur2", [], "any", false, false, false, 672), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 679
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 679, $this->source); })()), "add_utilisateur_2", [], "any", false, false, false, 679), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 680
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 680, $this->source); })()), "delete_utilisateur_2", [], "any", false, false, false, 680), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur3\">UTILISATEUR 3</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur3\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 693
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 693, $this->source); })()), "insee3", [], "any", false, false, false, 693), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 694
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 694, $this->source); })()), "insee3", [], "any", false, false, false, 694), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 701
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 701, $this->source); })()), "nom_utilisateur3", [], "any", false, false, false, 701), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 702
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 702, $this->source); })()), "nom_utilisateur3", [], "any", false, false, false, 702), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 709, $this->source); })()), "prenom_utilisateur3", [], "any", false, false, false, 709), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 710, $this->source); })()), "prenom_utilisateur3", [], "any", false, false, false, 710), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 717
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 717, $this->source); })()), "adresse_utilisateur3", [], "any", false, false, false, 717), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), "adresse_utilisateur3", [], "any", false, false, false, 718), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 725
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 725, $this->source); })()), "code_postal_utilisateur3", [], "any", false, false, false, 725), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "code_postal_utilisateur3", [], "any", false, false, false, 726), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 733
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 733, $this->source); })()), "ville_utilisateur3", [], "any", false, false, false, 733), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 734
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 734, $this->source); })()), "ville_utilisateur3", [], "any", false, false, false, 734), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 741
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 741, $this->source); })()), "tel_mob_utilisateur3", [], "any", false, false, false, 741), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 742
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 742, $this->source); })()), "tel_mob_utilisateur3", [], "any", false, false, false, 742), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 749
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 749, $this->source); })()), "add_utilisateur_3", [], "any", false, false, false, 749), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), "delete_utilisateur_3", [], "any", false, false, false, 750), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            </div>
            

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mt-3 width-app btn btn-primary\" id=\"btn_titre\">TITRE</button>                    
            </div>
            <div class=\"d-block\" id=\"div_titre\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 766
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 766, $this->source); })()), "libelle_court", [], "any", false, false, false, 766), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 767
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "libelle_court", [], "any", false, false, false, 767), 'widget', ["id" => "inputTitre"]);
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 774
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 774, $this->source); })()), "libelle_long", [], "any", false, false, false, 774), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 775
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 775, $this->source); })()), "libelle_long", [], "any", false, false, false, 775), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 782
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "referentiel_libelle", [], "any", false, false, false, 782), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 783
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 783, $this->source); })()), "referentiel_libelle", [], "any", false, false, false, 783), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 790
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 790, $this->source); })()), "referentiel_document", [], "any", false, false, false, 790), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center \">";
        // line 791
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 791, $this->source); })()), "referentiel_document", [], "any", false, false, false, 791), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 798
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 798, $this->source); })()), "referentiel_date_debut", [], "any", false, false, false, 798), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 799
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 799, $this->source); })()), "referentiel_date_debut", [], "any", false, false, false, 799), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 806
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 806, $this->source); })()), "referentiel_date_fin", [], "any", false, false, false, 806), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 807
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 807, $this->source); })()), "referentiel_date_fin", [], "any", false, false, false, 807), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 814
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })()), "add_titre", [], "any", false, false, false, 814), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 815
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 815, $this->source); })()), "delete_titre", [], "any", false, false, false, 815), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_habilitation\">HABILITATION</button>                    
            </div>
            <div class=\"d-block\" id=\"div_habilitation\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 829
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "select_habilitation", [], "any", false, false, false, 829), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 830
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 830, $this->source); })()), "select_habilitation", [], "any", false, false, false, 830), 'widget', ["id" => "selectTitreHabilitation"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 838
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 838, $this->source); })()), "titre_habilitation", [], "any", false, false, false, 838), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 839
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 839, $this->source); })()), "titre_habilitation", [], "any", false, false, false, 839), 'widget', ["id" => "inputTitreHabilitation"]);
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 846
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 846, $this->source); })()), "date_debut_habilitation", [], "any", false, false, false, 846), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 847
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 847, $this->source); })()), "date_debut_habilitation", [], "any", false, false, false, 847), 'widget', ["id" => "inputDateDebutHabilitation"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 854
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 854, $this->source); })()), "date_fin_habilitation", [], "any", false, false, false, 854), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 855
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 855, $this->source); })()), "date_fin_habilitation", [], "any", false, false, false, 855), 'widget', ["id" => "inputDateFinHabilitation"]);
        echo "</div>
                        </div>
                    </div>                   
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_habilitation\">Ajouter habilitation</button>                    
                </div>

                <div id=\"listHabilitation\"></div>
                ";
        // line 865
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () { throw new RuntimeError('Variable "habilitations" does not exist.', 865, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 866
            echo "                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 869
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 869, $this->source); })()), "titre_habilitation", [], "any", false, false, false, 869), 'label');
            echo "</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"";
            // line 870
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getTitreHabilitation", [], "any", false, false, false, 870), "html", null, true);
            echo "\"/>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 877
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 877, $this->source); })()), "date_debut_habilitation", [], "any", false, false, false, 877), 'label');
            echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">";
            // line 878
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getDateDebutHabilitation", [], "any", false, false, false, 878), "d-m-Y"), "html", null, true);
            echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 885
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 885, $this->source); })()), "date_fin_habilitation", [], "any", false, false, false, 885), 'label');
            echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">";
            // line 886
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getDateFinHabilitation", [], "any", false, false, false, 886), "d-m-Y"), "html", null, true);
            echo "</div>
                        </div>
                    </div>                    
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "                
            </div>
            
            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_ccp\">CCP</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_ccp\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 903
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 903, $this->source); })()), "select_code_ccp", [], "any", false, false, false, 903), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 904
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 904, $this->source); })()), "select_code_ccp", [], "any", false, false, false, 904), 'widget', ["id" => "selectCodeCcp"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un code ccp</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 913
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 913, $this->source); })()), "code_ccp", [], "any", false, false, false, 913), 'widget', ["id" => "inputCodeCcp"]);
        echo "</div>                                                        
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un libelle ccp</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 921
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 921, $this->source); })()), "libelle_ccp", [], "any", false, false, false, 921), 'widget', ["id" => "inputLibelleCcp"]);
        echo "</div>                            
                        </div>
                    </div>                 
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_ccp\">Ajouter ccp</button>                    
                </div>

                </div>

                <div id=\"listCcp\"></div>
                ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ccps"]) || array_key_exists("ccps", $context) ? $context["ccps"] : (function () { throw new RuntimeError('Variable "ccps" does not exist.', 933, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 934
            echo "                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 937
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 937, $this->source); })()), "code_ccp", [], "any", false, false, false, 937), 'label');
            echo "</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"";
            // line 938
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getCodeCcp", [], "any", false, false, false, 938), "html", null, true);
            echo "\"/>
                            
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 946
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 946, $this->source); })()), "libelle_ccp", [], "any", false, false, false, 946), 'label');
            echo "</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"";
            // line 947
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "getLibelleCcp", [], "any", false, false, false, 947), "html", null, true);
            echo "\"/>
                        </div>
                    </div>                    
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 952
        echo "                
            </div>

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_niveau\">NIVEAU</button>                    
            </div>
            <div class=\"d-block\" id=\"div_niveau\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 962
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 962, $this->source); })()), "code_niveau", [], "any", false, false, false, 962), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 963
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 963, $this->source); })()), "code_niveau", [], "any", false, false, false, 963), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 970
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 970, $this->source); })()), "libelle_niveau", [], "any", false, false, false, 970), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 971
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 971, $this->source); })()), "libelle_niveau", [], "any", false, false, false, 971), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 978
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 978, $this->source); })()), "add_niveau", [], "any", false, false, false, 978), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 979
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 979, $this->source); })()), "delete_niveau", [], "any", false, false, false, 979), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_projet\">PROJET</button>                    
            </div>
            <div class=\"d-block\" id=\"div_projet\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 992
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 992, $this->source); })()), "nom_projet", [], "any", false, false, false, 992), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 993
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 993, $this->source); })()), "nom_projet", [], "any", false, false, false, 993), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 1000
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1000, $this->source); })()), "commentaires", [], "any", false, false, false, 1000), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1001
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1001, $this->source); })()), "commentaires", [], "any", false, false, false, 1001), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1008
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1008, $this->source); })()), "add_projet", [], "any", false, false, false, 1008), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1009
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1009, $this->source); })()), "delete_projet", [], "any", false, false, false, 1009), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_produit\">PRODUIT</button>                    
            </div>
            <div class=\"d-block\" id=\"div_produit\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 1022
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1022, $this->source); })()), "nom_produit", [], "any", false, false, false, 1022), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1023
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1023, $this->source); })()), "nom_produit", [], "any", false, false, false, 1023), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 1030
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1030, $this->source); })()), "domaine", [], "any", false, false, false, 1030), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1031
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1031, $this->source); })()), "domaine", [], "any", false, false, false, 1031), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1038
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1038, $this->source); })()), "add_produit", [], "any", false, false, false, 1038), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1039
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1039, $this->source); })()), "delete_produit", [], "any", false, false, false, 1039), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class=\"row mx-0\">
                <div class=\"mb-3 form-group\">
                    <div class=\"row mx-0\">
                        ";
        // line 1051
        echo "                        <div class=\"col-sm-6 col-lg-3 mb-1\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1051, $this->source); })()), "reset", [], "any", false, false, false, 1051), 'widget');
        echo "</div>
                    </div>
                </div>
            </div>
            
    </div>
";
        // line 1057
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1057, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1743 => 1057,  1733 => 1051,  1721 => 1039,  1717 => 1038,  1707 => 1031,  1703 => 1030,  1693 => 1023,  1689 => 1022,  1673 => 1009,  1669 => 1008,  1659 => 1001,  1655 => 1000,  1645 => 993,  1641 => 992,  1625 => 979,  1621 => 978,  1611 => 971,  1607 => 970,  1597 => 963,  1593 => 962,  1581 => 952,  1570 => 947,  1566 => 946,  1555 => 938,  1551 => 937,  1546 => 934,  1542 => 933,  1527 => 921,  1516 => 913,  1504 => 904,  1500 => 903,  1486 => 891,  1475 => 886,  1471 => 885,  1461 => 878,  1457 => 877,  1447 => 870,  1443 => 869,  1438 => 866,  1434 => 865,  1421 => 855,  1417 => 854,  1407 => 847,  1403 => 846,  1393 => 839,  1389 => 838,  1378 => 830,  1374 => 829,  1357 => 815,  1353 => 814,  1343 => 807,  1339 => 806,  1329 => 799,  1325 => 798,  1315 => 791,  1311 => 790,  1301 => 783,  1297 => 782,  1287 => 775,  1283 => 774,  1273 => 767,  1269 => 766,  1250 => 750,  1246 => 749,  1236 => 742,  1232 => 741,  1222 => 734,  1218 => 733,  1208 => 726,  1204 => 725,  1194 => 718,  1190 => 717,  1180 => 710,  1176 => 709,  1166 => 702,  1162 => 701,  1152 => 694,  1148 => 693,  1132 => 680,  1128 => 679,  1118 => 672,  1114 => 671,  1104 => 664,  1100 => 663,  1090 => 656,  1086 => 655,  1076 => 648,  1072 => 647,  1062 => 640,  1058 => 639,  1048 => 632,  1044 => 631,  1034 => 624,  1030 => 623,  1014 => 610,  1010 => 609,  1000 => 602,  996 => 601,  986 => 594,  982 => 593,  972 => 586,  968 => 585,  958 => 578,  954 => 577,  944 => 570,  940 => 569,  930 => 562,  926 => 561,  916 => 554,  912 => 553,  890 => 534,  886 => 533,  875 => 525,  871 => 524,  861 => 517,  857 => 516,  847 => 509,  843 => 508,  833 => 501,  829 => 500,  819 => 493,  815 => 492,  805 => 485,  801 => 484,  788 => 473,  777 => 468,  773 => 467,  763 => 460,  759 => 459,  754 => 456,  750 => 455,  737 => 444,  733 => 442,  722 => 434,  710 => 425,  706 => 424,  695 => 416,  691 => 415,  672 => 399,  668 => 398,  657 => 390,  653 => 389,  642 => 381,  638 => 380,  627 => 372,  623 => 371,  612 => 363,  608 => 362,  597 => 354,  593 => 353,  574 => 337,  570 => 336,  559 => 328,  555 => 327,  544 => 319,  540 => 318,  529 => 310,  525 => 309,  514 => 301,  510 => 300,  499 => 292,  495 => 291,  481 => 279,  470 => 274,  466 => 273,  461 => 270,  457 => 269,  442 => 257,  438 => 256,  418 => 239,  414 => 238,  403 => 230,  399 => 229,  388 => 221,  384 => 220,  373 => 212,  369 => 211,  358 => 203,  354 => 202,  343 => 194,  339 => 193,  328 => 185,  324 => 184,  313 => 176,  309 => 175,  298 => 167,  294 => 166,  283 => 158,  279 => 157,  268 => 149,  264 => 148,  243 => 130,  239 => 129,  235 => 128,  224 => 120,  220 => 119,  211 => 112,  207 => 110,  203 => 109,  187 => 96,  184 => 95,  182 => 68,  173 => 66,  169 => 65,  164 => 63,  153 => 55,  147 => 52,  141 => 49,  128 => 39,  123 => 37,  112 => 29,  106 => 26,  100 => 23,  87 => 13,  81 => 10,  77 => 9,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ pageName }}{% endblock %}

{% block content %}
{#<a href=\"{{ path ('desactiver-user', {'id' : user.id})}}\"#}

<div class=\"width-app\">
    <a class=\"d-block col-3 ms-1 my-1 btn btn-secondary\" href=\"{{ path('home')  }}\">Site</a>
    <a class=\"d-block col-3 ms-1 mb-1 btn btn-secondary\" href=\"{{ path('admin') }}\">Admin</a>
</div>

{{ form_start(formCandidat) }}
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-3\">
        <div class=\"width-app \">

            <div class=\"d-block\">
        
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-4 limit label-app text-center\">
                                {{ form_label(formCandidat.identification) }}
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                {{ form_widget(formCandidat.identification)}}
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                {{ form_widget(formCandidat.chercher)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ form_end(formCandidat) }}

{{ form_start(formSession) }}
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-3\">
        <div class=\"width-app\">

            <div class=\"d-block\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-4 limit label-app text-center\">
                                {{ form_label(formSession.identifiant) }}
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                {{ form_widget(formSession.identifiant, { 'id': 'selectSession' })}}
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                {{ form_widget(formSession.chercher) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ form_end(formSession) }}

{% for message in app.flashes('notice') %}
    <div class=\"flash-notice bg-alert\">{{ message }}</div>
{% endfor %}
 {#               
 <div class=\"row mb-3\">
    <div class=\"col input-group mb-3\">
        <label class=\"input-group-text\" for=\"select_search_candidat\">Choisir un Candidat</label>
        <select class=\"form-select\" id=\"select_search_candidat\" name=\"select_search_candidat\">
            <option value=\"0\"></option>
        </select>
    </div>

    <div class=\"row mx-0 mb-2\">
        <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_select_candidat\">valider</button>                    
    </div>
</div>

    <div class=\"row mb-3\">
    <div class=\"col input-group mb-3\">
        <label class=\"input-group-text\" for=\"select_search_session\">Choisir une Session</label>
        <select class=\"form-select\" id=\"select_search_session\" name=\"select_search_session\">
            <option value=\"0\"></option>
        </select>
    </div>

    <div class=\"row mx-0 mb-2\">
        <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_select_session\">valider</button>                    
    </div>
</div>
#}

{{ form_start(form) }}
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-2 \">
        <div class=\"width-app\">                                    

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_candidat\">CANDIDAT</button>                    
            </div>

            <div class=\"d-block\" id=\"div_candidat\">                        

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.identification) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.identification, { 'id': 'selectCandidat' }) }}</div>
                            {#<div class=\"col-2\">{{ form_widget(form.modifierIdentification) }}</div>#}
                        </div>
                    </div>
                </div>                

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_candidat)    }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_candidat) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-6 col-lg-4 mb-1 text-center label-app\">{{ form_label(form.session)  }}</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      {{ form_widget(form.session)  }}</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      {{ form_widget(form.session_changer)  }}</div>
                        </div>
                    </div>
                </div>

            </div>



            <div class=\"row mx-0 mb-2\">
                <button class=\"col-sm-12 col-12 mb-3 width-app btn btn-primary\" id=\"btn_session\">SESSION</button>                    
            </div>
            
            <div class=\"d-block\" id=\"div_session\">                

                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.identifiant) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.identifiant, { 'id': 'inputSession' }) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_debut)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.date_debut) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_fin) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.date_fin) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nombre_de_jours)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.nombre_de_jours) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.responsable)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.responsable) }}</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.telephone)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.telephone) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.site_de_session)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.site_de_session) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.adresse)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.adresse) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_postal)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.code_postal) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.ville)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.ville) }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_session)    }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_session) }}</div>
                        </div>
                    </div>                    
                </div>

            </div>
            

            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_jour\">JOUR</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_jour\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_jour) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">     {{ form_widget(form.date_jour, { 'id': 'selectJour' }) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_jour\">Ajouter jour</button>                    
                </div>

                </div>

                <div id=\"listJour\"></div>
                {% for element in jours %}
                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">    {{ form_label(form.date_jour) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">{{ element.getDateJour|date('d-m-Y') }}</div>
                        </div>
                    </div>                    
                </div>                
                {% endfor %}
                
            </div>

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_entreprise\">ENTREPRISE</button>                    
            </div>

            <div class=\"d-block\" id=\"div_entreprise\">
        
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.raison_sociale)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.raison_sociale) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.adresse_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.adresse_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_postal_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.code_postal_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.ville_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.ville_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.telephone_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.telephone_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_entreprise)    }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_responsable\">RESPONSABLE ENTREPRISE</button>                    
            </div>

            <div class=\"d-block\" id=\"div_responsable\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_responsable_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.nom_responsable_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_responsable_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.prenom_responsable_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.fonction_responsable_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.fonction_responsable_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.tel_fixe_responsable_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.tel_fixe_responsable_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.tel_mob_responsable_entreprise)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.tel_mob_responsable_entreprise) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_responsable)    }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_responsable) }}</div>
                        </div>
                    </div>                    
                </div>

            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_competence\">COMPETENCE</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_competence\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.select_description) }}</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">          {{ form_widget(form.select_description, { 'id': 'selectDescription' }) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.select_commentaire) }}</div>
                            <div class=\"col-sm-10 col-lg-6\">                      {{ form_widget(form.select_commentaire, { 'id': 'selectCommentaire' }) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un description</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">{{ form_widget(form.description,{'id':'inputDescription'}) }}</div>                                                        
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un commentaire</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">{{ form_widget(form.commentaire,{'id':'inputCommentaire'}) }}</div>                            
                            {#<div class=\"col-12 mt-1\">{{ form_widget(form.ajouter_competence) }}</div>#}
                        </div>
                    </div>                 
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_competence\">Ajouter compétence</button>                    
                </div>

                </div>

                <div id=\"listCompetence\"></div>
                {% for element in competences %}
                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.description) }}</div>
                            <input class=\"col-sm-10 col-lg-6 text-center bg-white\" value=\"{{ element.getDescription }}\"/>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.commentaire) }}</div>
                            <input class=\"col-sm-10 col-lg-6 text-center bg-white\" value=\"{{ element.commentaire }}\"/>
                        </div>
                    </div>                    
                </div>
                {% endfor %}
                
            </div>
                

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_jury\">JURY</button>                    
            </div>
            <div class=\"d-block\" id=\"div_jury\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_jury_1) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_jury_1) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_jury_1) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.prenom_jury_1) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_jury_2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_jury_2) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_jury_2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.prenom_jury_2) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_jury_3)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.nom_jury_3) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_jury_3)  }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.prenom_jury_3) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_jury)    }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_jury) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_utilisateurs\">UTILISATEURS</button>                    
            </div>
            
            <div class=\"limit d-block\" id=\"div_utilisateurs\">

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur1\">UTILISATEUR 1</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur1\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.insee) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.insee) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_utilisateur) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.prenom_utilisateur) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.adresse_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.adresse_utilisateur) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_postal_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.code_postal_utilisateur) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.ville_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.ville_utilisateur) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.tel_mob_utilisateur) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.tel_mob_utilisateur) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_utilisateur_1) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_utilisateur_1) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur2\">UTILISATEUR 2</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.insee2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.insee2) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_utilisateur2) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.prenom_utilisateur2) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.adresse_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.adresse_utilisateur2) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_postal_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.code_postal_utilisateur2) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.ville_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.ville_utilisateur2) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.tel_mob_utilisateur2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.tel_mob_utilisateur2) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_utilisateur_2) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_utilisateur_2) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0\">
                <button class=\"col-12 mb-3 width-app btn btn-secondary\" id=\"btn_utilisateur3\">UTILISATEUR 3</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_utilisateur3\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.insee3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.insee3) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_utilisateur3) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.prenom_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.prenom_utilisateur3) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.adresse_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.adresse_utilisateur3) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_postal_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.code_postal_utilisateur3) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.ville_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.ville_utilisateur3) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.tel_mob_utilisateur3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.tel_mob_utilisateur3) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_utilisateur_3) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_utilisateur_3) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            </div>
            

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mt-3 width-app btn btn-primary\" id=\"btn_titre\">TITRE</button>                    
            </div>
            <div class=\"d-block\" id=\"div_titre\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.libelle_court) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.libelle_court, { 'id': 'inputTitre' }) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.libelle_long) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.libelle_long) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.referentiel_libelle) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.referentiel_libelle) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.referentiel_document) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center \">{{ form_widget(form.referentiel_document) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.referentiel_date_debut) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.referentiel_date_debut) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.referentiel_date_fin) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.referentiel_date_fin) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_titre) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_titre) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_habilitation\">HABILITATION</button>                    
            </div>
            <div class=\"d-block\" id=\"div_habilitation\">

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.select_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.select_habilitation, { 'id': 'selectTitreHabilitation' }) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.titre_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.titre_habilitation, { 'id': 'inputTitreHabilitation' }) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_debut_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          {{ form_widget(form.date_debut_habilitation, { 'id': 'inputDateDebutHabilitation' }) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_fin_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.date_fin_habilitation, { 'id': 'inputDateFinHabilitation' }) }}</div>
                        </div>
                    </div>                   
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_habilitation\">Ajouter habilitation</button>                    
                </div>

                <div id=\"listHabilitation\"></div>
                {% for element in habilitations %}
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.titre_habilitation) }}</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"{{ element.getTitreHabilitation }}\"/>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_debut_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">{{ element.getDateDebutHabilitation|date('d-m-Y') }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.date_fin_habilitation) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center bg-white\">{{ element.getDateFinHabilitation|date('d-m-Y') }}</div>
                        </div>
                    </div>                    
                </div>
                {% endfor %}
                
            </div>
            
            <div class=\"row mx-0\">
                <button class=\"col-12 width-app btn btn-primary\" id=\"btn_ccp\">CCP</button>                    
            </div>
            <div class=\"limit d-block\" id=\"div_ccp\">

                <div class=\"py-2\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.select_code_ccp) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.select_code_ccp, { 'id': 'selectCodeCcp' }) }}</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un code ccp</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.code_ccp,{'id':'inputCodeCcp'}) }}</div>                                                        
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">Créer un libelle ccp</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.libelle_ccp,{'id':'inputLibelleCcp'}) }}</div>                            
                        </div>
                    </div>                 
                </div>

                <div class=\"row mx-0 mb-2\">
                    <button class=\"col-12 mb-2 btn btn-secondary\" id=\"btn_ajax_ccp\">Ajouter ccp</button>                    
                </div>

                </div>

                <div id=\"listCcp\"></div>
                {% for element in ccps %}
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_ccp) }}</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"{{ element.getCodeCcp  }}\"/>
                            
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.libelle_ccp) }}</div>
                            <input class=\"col-sm-12 col-lg-6 text-center bg-white\" value=\"{{ element.getLibelleCcp }}\"/>
                        </div>
                    </div>                    
                </div>
                {% endfor %}
                
            </div>

            <div class=\"row mx-0 mt-3\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_niveau\">NIVEAU</button>                    
            </div>
            <div class=\"d-block\" id=\"div_niveau\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.code_niveau) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.code_niveau) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.libelle_niveau) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.libelle_niveau) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_niveau) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_niveau) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_projet\">PROJET</button>                    
            </div>
            <div class=\"d-block\" id=\"div_projet\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_projet) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_projet) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.commentaires) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.commentaires) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_projet) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_projet) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class=\"row mx-0 mb-2\">
                <button class=\"col-12 mb-3 width-app btn btn-primary\" id=\"btn_produit\">PRODUIT</button>                    
            </div>
            <div class=\"d-block\" id=\"div_produit\">
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.nom_produit) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.nom_produit) }}</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">{{ form_label(form.domaine) }}</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">{{ form_widget(form.domaine) }}</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.add_produit) }}</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">{{ form_widget(form.delete_produit) }}</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class=\"row mx-0\">
                <div class=\"mb-3 form-group\">
                    <div class=\"row mx-0\">
                        {#<div class=\"col-sm-6 col-lg-3 mb-1\">{{ form_widget(form.modifier) }}</div>
                        <div class=\"col-sm-6 col-lg-3 mb-1\">{{ form_widget(form.ajouter)  }}</div>
                        <div class=\"col-sm-6 col-lg-3 mb-1\">{{ form_widget(form.effacer)  }}</div>#}
                        <div class=\"col-sm-6 col-lg-3 mb-1\">{{ form_widget(form.reset)  }}</div>
                    </div>
                </div>
            </div>
            
    </div>
{{ form_end(form) }}

{% endblock %}


", "app/index.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\app\\index.html.twig");
    }
}
