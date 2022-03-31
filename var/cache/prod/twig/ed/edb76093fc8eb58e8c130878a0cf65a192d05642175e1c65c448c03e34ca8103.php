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
class __TwigTemplate_7f10941823e0e3937d8f83e2530b1907a8df0f03f677f6c4364f2161832645f2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCandidat"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCandidat"] ?? null), "identification", [], "any", false, false, false, 23), 'label');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCandidat"] ?? null), "identification", [], "any", false, false, false, 26), 'widget');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCandidat"] ?? null), "chercher", [], "any", false, false, false, 29), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCandidat"] ?? null), 'form_end');
        echo "

";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formSession"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formSession"] ?? null), "identifiant", [], "any", false, false, false, 49), 'label');
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formSession"] ?? null), "identifiant", [], "any", false, false, false, 52), 'widget', ["id" => "selectSession"]);
        echo "
                            </div>
                            <div class=\"col-sm-12 col-lg-4 limit\">            
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formSession"] ?? null), "chercher", [], "any", false, false, false, 55), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formSession"] ?? null), 'form_end');
        echo "

";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 65));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identification", [], "any", false, false, false, 109), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identification", [], "any", false, false, false, 110), 'widget', ["id" => "selectCandidat"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_candidat", [], "any", false, false, false, 119), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_candidat", [], "any", false, false, false, 120), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-6 col-lg-4 mb-1 text-center label-app\">";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "session", [], "any", false, false, false, 128), 'label');
        echo "</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "session", [], "any", false, false, false, 129), 'widget');
        echo "</div>
                            <div class=\"col-sm-6 col-lg-4 mb-1\">                      ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "session_changer", [], "any", false, false, false, 130), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identifiant", [], "any", false, false, false, 148), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identifiant", [], "any", false, false, false, 149), 'widget', ["id" => "inputSession"]);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_debut", [], "any", false, false, false, 157), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_debut", [], "any", false, false, false, 158), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_fin", [], "any", false, false, false, 166), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_fin", [], "any", false, false, false, 167), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre_de_jours", [], "any", false, false, false, 175), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre_de_jours", [], "any", false, false, false, 176), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "responsable", [], "any", false, false, false, 184), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "responsable", [], "any", false, false, false, 185), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 193), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 194), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "site_de_session", [], "any", false, false, false, 202), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "site_de_session", [], "any", false, false, false, 203), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 211), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 212), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal", [], "any", false, false, false, 220), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal", [], "any", false, false, false, 221), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 229), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 230), 'widget');
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_session", [], "any", false, false, false, 238), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_session", [], "any", false, false, false, 239), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_jour", [], "any", false, false, false, 256), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">     ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_jour", [], "any", false, false, false, 257), 'widget', ["id" => "selectJour"]);
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
        $context['_seq'] = twig_ensure_traversable(($context["jours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 270
            echo "                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">    ";
            // line 273
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_jour", [], "any", false, false, false, 273), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "raison_sociale", [], "any", false, false, false, 291), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "raison_sociale", [], "any", false, false, false, 292), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_entreprise", [], "any", false, false, false, 300), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_entreprise", [], "any", false, false, false, 301), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_entreprise", [], "any", false, false, false, 309), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_entreprise", [], "any", false, false, false, 310), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_entreprise", [], "any", false, false, false, 318), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_entreprise", [], "any", false, false, false, 319), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone_entreprise", [], "any", false, false, false, 327), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone_entreprise", [], "any", false, false, false, 328), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_entreprise", [], "any", false, false, false, 336), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_entreprise", [], "any", false, false, false, 337), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_responsable_entreprise", [], "any", false, false, false, 353), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_responsable_entreprise", [], "any", false, false, false, 354), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_responsable_entreprise", [], "any", false, false, false, 362), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_responsable_entreprise", [], "any", false, false, false, 363), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fonction_responsable_entreprise", [], "any", false, false, false, 371), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fonction_responsable_entreprise", [], "any", false, false, false, 372), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_fixe_responsable_entreprise", [], "any", false, false, false, 380), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_fixe_responsable_entreprise", [], "any", false, false, false, 381), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_responsable_entreprise", [], "any", false, false, false, 389), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_responsable_entreprise", [], "any", false, false, false, 390), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_responsable", [], "any", false, false, false, 398), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_responsable", [], "any", false, false, false, 399), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_description", [], "any", false, false, false, 415), 'label');
        echo "</div>
                            <div class=\"col-sm-10 col-lg-6 text-center\">          ";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_description", [], "any", false, false, false, 416), 'widget', ["id" => "selectDescription"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">                            
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_commentaire", [], "any", false, false, false, 424), 'label');
        echo "</div>
                            <div class=\"col-sm-10 col-lg-6\">                      ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_commentaire", [], "any", false, false, false, 425), 'widget', ["id" => "selectCommentaire"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 434), 'widget', ["id" => "inputDescription"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 442), 'widget', ["id" => "inputCommentaire"]);
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
        $context['_seq'] = twig_ensure_traversable(($context["competences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 456
            echo "                <div class=\"row mx-0\">
                    <div class=\"col-12 mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 459
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 459), 'label');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 467), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_1", [], "any", false, false, false, 484), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_1", [], "any", false, false, false, 485), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_1", [], "any", false, false, false, 492), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_1", [], "any", false, false, false, 493), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_2", [], "any", false, false, false, 500), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_2", [], "any", false, false, false, 501), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_2", [], "any", false, false, false, 508), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_2", [], "any", false, false, false, 509), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_3", [], "any", false, false, false, 516), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_jury_3", [], "any", false, false, false, 517), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_3", [], "any", false, false, false, 524), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_jury_3", [], "any", false, false, false, 525), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_jury", [], "any", false, false, false, 533), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_jury", [], "any", false, false, false, 534), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee", [], "any", false, false, false, 553), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee", [], "any", false, false, false, 554), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 561
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur", [], "any", false, false, false, 561), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur", [], "any", false, false, false, 562), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 569
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur", [], "any", false, false, false, 569), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 570
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur", [], "any", false, false, false, 570), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 577
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur", [], "any", false, false, false, 577), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 578
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur", [], "any", false, false, false, 578), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 585
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur", [], "any", false, false, false, 585), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 586
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur", [], "any", false, false, false, 586), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 593
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur", [], "any", false, false, false, 593), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur", [], "any", false, false, false, 594), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 601
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur", [], "any", false, false, false, 601), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 602
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur", [], "any", false, false, false, 602), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_utilisateur_1", [], "any", false, false, false, 609), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 610
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_utilisateur_1", [], "any", false, false, false, 610), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee2", [], "any", false, false, false, 623), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 624
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee2", [], "any", false, false, false, 624), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 631
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur2", [], "any", false, false, false, 631), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur2", [], "any", false, false, false, 632), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 639
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur2", [], "any", false, false, false, 639), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur2", [], "any", false, false, false, 640), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 647
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur2", [], "any", false, false, false, 647), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 648
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur2", [], "any", false, false, false, 648), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur2", [], "any", false, false, false, 655), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 656
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur2", [], "any", false, false, false, 656), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 663
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur2", [], "any", false, false, false, 663), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 664
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur2", [], "any", false, false, false, 664), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 671
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur2", [], "any", false, false, false, 671), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 672
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur2", [], "any", false, false, false, 672), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 679
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_utilisateur_2", [], "any", false, false, false, 679), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 680
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_utilisateur_2", [], "any", false, false, false, 680), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee3", [], "any", false, false, false, 693), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 694
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insee3", [], "any", false, false, false, 694), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 701
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur3", [], "any", false, false, false, 701), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 702
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_utilisateur3", [], "any", false, false, false, 702), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur3", [], "any", false, false, false, 709), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_utilisateur3", [], "any", false, false, false, 710), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 717
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur3", [], "any", false, false, false, 717), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse_utilisateur3", [], "any", false, false, false, 718), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 725
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur3", [], "any", false, false, false, 725), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal_utilisateur3", [], "any", false, false, false, 726), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 733
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur3", [], "any", false, false, false, 733), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 734
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville_utilisateur3", [], "any", false, false, false, 734), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 741
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur3", [], "any", false, false, false, 741), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 742
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel_mob_utilisateur3", [], "any", false, false, false, 742), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 749
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_utilisateur_3", [], "any", false, false, false, 749), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_utilisateur_3", [], "any", false, false, false, 750), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_court", [], "any", false, false, false, 766), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 767
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_court", [], "any", false, false, false, 767), 'widget', ["id" => "inputTitre"]);
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 774
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_long", [], "any", false, false, false, 774), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 775
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_long", [], "any", false, false, false, 775), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 782
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_libelle", [], "any", false, false, false, 782), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 783
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_libelle", [], "any", false, false, false, 783), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 790
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_document", [], "any", false, false, false, 790), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center \">";
        // line 791
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_document", [], "any", false, false, false, 791), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 798
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_date_debut", [], "any", false, false, false, 798), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 799
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_date_debut", [], "any", false, false, false, 799), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 806
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_date_fin", [], "any", false, false, false, 806), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 807
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referentiel_date_fin", [], "any", false, false, false, 807), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 814
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_titre", [], "any", false, false, false, 814), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 815
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_titre", [], "any", false, false, false, 815), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_habilitation", [], "any", false, false, false, 829), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 830
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_habilitation", [], "any", false, false, false, 830), 'widget', ["id" => "selectTitreHabilitation"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>

                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 838
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre_habilitation", [], "any", false, false, false, 838), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 839
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre_habilitation", [], "any", false, false, false, 839), 'widget', ["id" => "inputTitreHabilitation"]);
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 846
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_debut_habilitation", [], "any", false, false, false, 846), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">          ";
        // line 847
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_debut_habilitation", [], "any", false, false, false, 847), 'widget', ["id" => "inputDateDebutHabilitation"]);
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 854
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_fin_habilitation", [], "any", false, false, false, 854), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 855
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_fin_habilitation", [], "any", false, false, false, 855), 'widget', ["id" => "inputDateFinHabilitation"]);
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
        $context['_seq'] = twig_ensure_traversable(($context["habilitations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 866
            echo "                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 869
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre_habilitation", [], "any", false, false, false, 869), 'label');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_debut_habilitation", [], "any", false, false, false, 877), 'label');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_fin_habilitation", [], "any", false, false, false, 885), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_code_ccp", [], "any", false, false, false, 903), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 904
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select_code_ccp", [], "any", false, false, false, 904), 'widget', ["id" => "selectCodeCcp"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_ccp", [], "any", false, false, false, 913), 'widget', ["id" => "inputCodeCcp"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_ccp", [], "any", false, false, false, 921), 'widget', ["id" => "inputLibelleCcp"]);
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
        $context['_seq'] = twig_ensure_traversable(($context["ccps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 934
            echo "                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
            // line 937
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_ccp", [], "any", false, false, false, 937), 'label');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_ccp", [], "any", false, false, false, 946), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_niveau", [], "any", false, false, false, 962), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 963
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_niveau", [], "any", false, false, false, 963), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 970
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_niveau", [], "any", false, false, false, 970), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 971
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle_niveau", [], "any", false, false, false, 971), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 978
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_niveau", [], "any", false, false, false, 978), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 979
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_niveau", [], "any", false, false, false, 979), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_projet", [], "any", false, false, false, 992), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 993
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_projet", [], "any", false, false, false, 993), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 1000
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaires", [], "any", false, false, false, 1000), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1001
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaires", [], "any", false, false, false, 1001), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1008
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_projet", [], "any", false, false, false, 1008), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1009
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_projet", [], "any", false, false, false, 1009), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_produit", [], "any", false, false, false, 1022), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1023
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_produit", [], "any", false, false, false, 1023), 'widget');
        echo "</div>
                        </div>
                    </div>                   
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 text-center label-app\">";
        // line 1030
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "domaine", [], "any", false, false, false, 1030), 'label');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 text-center\">";
        // line 1031
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "domaine", [], "any", false, false, false, 1031), 'widget');
        echo "</div>
                        </div>
                    </div>                    
                </div>
                <div class=\"row mx-0\">
                    <div class=\"mb-3 form-group\">
                        <div class=\"row mx-0\">
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1038
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_produit", [], "any", false, false, false, 1038), 'widget');
        echo "</div>
                            <div class=\"col-sm-12 col-lg-6 mb-1 text-center\">";
        // line 1039
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_produit", [], "any", false, false, false, 1039), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reset", [], "any", false, false, false, 1051), 'widget');
        echo "</div>
                    </div>
                </div>
            </div>
            
    </div>
";
        // line 1057
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
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
        return array (  1728 => 1057,  1718 => 1051,  1706 => 1039,  1702 => 1038,  1692 => 1031,  1688 => 1030,  1678 => 1023,  1674 => 1022,  1658 => 1009,  1654 => 1008,  1644 => 1001,  1640 => 1000,  1630 => 993,  1626 => 992,  1610 => 979,  1606 => 978,  1596 => 971,  1592 => 970,  1582 => 963,  1578 => 962,  1566 => 952,  1555 => 947,  1551 => 946,  1540 => 938,  1536 => 937,  1531 => 934,  1527 => 933,  1512 => 921,  1501 => 913,  1489 => 904,  1485 => 903,  1471 => 891,  1460 => 886,  1456 => 885,  1446 => 878,  1442 => 877,  1432 => 870,  1428 => 869,  1423 => 866,  1419 => 865,  1406 => 855,  1402 => 854,  1392 => 847,  1388 => 846,  1378 => 839,  1374 => 838,  1363 => 830,  1359 => 829,  1342 => 815,  1338 => 814,  1328 => 807,  1324 => 806,  1314 => 799,  1310 => 798,  1300 => 791,  1296 => 790,  1286 => 783,  1282 => 782,  1272 => 775,  1268 => 774,  1258 => 767,  1254 => 766,  1235 => 750,  1231 => 749,  1221 => 742,  1217 => 741,  1207 => 734,  1203 => 733,  1193 => 726,  1189 => 725,  1179 => 718,  1175 => 717,  1165 => 710,  1161 => 709,  1151 => 702,  1147 => 701,  1137 => 694,  1133 => 693,  1117 => 680,  1113 => 679,  1103 => 672,  1099 => 671,  1089 => 664,  1085 => 663,  1075 => 656,  1071 => 655,  1061 => 648,  1057 => 647,  1047 => 640,  1043 => 639,  1033 => 632,  1029 => 631,  1019 => 624,  1015 => 623,  999 => 610,  995 => 609,  985 => 602,  981 => 601,  971 => 594,  967 => 593,  957 => 586,  953 => 585,  943 => 578,  939 => 577,  929 => 570,  925 => 569,  915 => 562,  911 => 561,  901 => 554,  897 => 553,  875 => 534,  871 => 533,  860 => 525,  856 => 524,  846 => 517,  842 => 516,  832 => 509,  828 => 508,  818 => 501,  814 => 500,  804 => 493,  800 => 492,  790 => 485,  786 => 484,  773 => 473,  762 => 468,  758 => 467,  748 => 460,  744 => 459,  739 => 456,  735 => 455,  722 => 444,  718 => 442,  707 => 434,  695 => 425,  691 => 424,  680 => 416,  676 => 415,  657 => 399,  653 => 398,  642 => 390,  638 => 389,  627 => 381,  623 => 380,  612 => 372,  608 => 371,  597 => 363,  593 => 362,  582 => 354,  578 => 353,  559 => 337,  555 => 336,  544 => 328,  540 => 327,  529 => 319,  525 => 318,  514 => 310,  510 => 309,  499 => 301,  495 => 300,  484 => 292,  480 => 291,  466 => 279,  455 => 274,  451 => 273,  446 => 270,  442 => 269,  427 => 257,  423 => 256,  403 => 239,  399 => 238,  388 => 230,  384 => 229,  373 => 221,  369 => 220,  358 => 212,  354 => 211,  343 => 203,  339 => 202,  328 => 194,  324 => 193,  313 => 185,  309 => 184,  298 => 176,  294 => 175,  283 => 167,  279 => 166,  268 => 158,  264 => 157,  253 => 149,  249 => 148,  228 => 130,  224 => 129,  220 => 128,  209 => 120,  205 => 119,  196 => 112,  192 => 110,  188 => 109,  172 => 96,  169 => 95,  167 => 68,  158 => 66,  154 => 65,  149 => 63,  138 => 55,  132 => 52,  126 => 49,  113 => 39,  108 => 37,  97 => 29,  91 => 26,  85 => 23,  72 => 13,  66 => 10,  62 => 9,  58 => 7,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/index.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\templates\\app\\index.html.twig");
    }
}
