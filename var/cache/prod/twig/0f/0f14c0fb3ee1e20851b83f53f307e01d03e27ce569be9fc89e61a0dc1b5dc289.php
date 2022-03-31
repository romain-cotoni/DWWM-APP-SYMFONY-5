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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_e5124fe5ba09fd46afe2870d03f6fd1a263471767edffd52b24619a9571f7560 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_9a3aff952127beab8245fac09584955ce9d916d8a546a5d9beb698e78ba65ebc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo strip_tags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "textDirection", [], "any", false, false, false, 40)))) {
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 289
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 35
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 53
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 279
        echo "
    ";
        // line 280
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 281
        echo "
    ";
        // line 282
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 287
        echo "    </body>
";
    }

    // line 52
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 57
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", false, false, false, 57)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 62
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        ob_start(function () { return ''; });
        // line 68
        echo "            ";
        if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 68), "avatarUrl", [], "any", false, false, false, 68)))) {
            // line 69
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 72
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 72))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 76
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76), "html", null, true);
            echo "\" />
            ";
        }
        // line 78
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "
        ";
        // line 80
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 81
        echo "
        ";
        // line 82
        ob_start(function () { return ''; });
        // line 83
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 85
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 88
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 88))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88))), "html", null, true);
        echo "</span>
                    </div>
                </li>
                <li><hr class=\"dropdown-divider\"></li>

                ";
        // line 93
        $this->displayBlock('user_menu', $context, $blocks);
        // line 111
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "
        <div class=\"wrapper\">
            ";
        // line 115
        $this->displayBlock('wrapper', $context, $blocks);
        // line 277
        echo "        </div>
    ";
    }

    // line 63
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 64));
        echo "
        ";
    }

    // line 93
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 94), "items", [], "any", false, false, false, 94)), 0))) {
            // line 95
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 95), "items", [], "any", false, false, false, 95));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 96
                echo "                            <li>
                                ";
                // line 97
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 97) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 97))) {
                    // line 98
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 99
$context["item"], "isMenuSection", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 100), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 101), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 103
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 103))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 103), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 104
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 104), "html", null, true);
                    echo "</span>
                                    </a>
                                ";
                }
                // line 107
                echo "                            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        }
        // line 110
        echo "                ";
    }

    // line 115
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                <div class=\"responsive-header\">
                    ";
        // line 117
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 144
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 148
        $this->displayBlock('sidebar', $context, $blocks);
        // line 170
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 176
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 176)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 176), "isSearchEnabled", [], "any", false, false, false, 176));
        // line 177
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 178
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 228
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 231
        $this->displayBlock('content', $context, $blocks);
        // line 272
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 117
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate\">
                            ";
        // line 123
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 128
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 130
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 134
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 134), "avatarDisplayed", [], "any", false, false, false, 134)) {
            // line 135
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 137
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 137))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 139
        echo "                            </a>

                            ";
        // line 141
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 123
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 124)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 124));
        echo "\">
                                    ";
        // line 125
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 125);
        echo "
                                </a>
                            ";
    }

    // line 148
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                            <header class=\"main-header\">
                                ";
        // line 150
        $this->displayBlock('header', $context, $blocks);
        // line 164
        echo "                            </header>

                            ";
        // line 166
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 169
        echo "                        ";
    }

    // line 150
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 152
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 162
        echo "                                </nav>
                                ";
    }

    // line 152
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 154
        $this->displayBlock('header_logo', $context, $blocks);
        // line 160
        echo "                                        </div>
                                    ";
    }

    // line 154
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 155)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 155));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 156);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 166
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 167));
        echo "
                            ";
    }

    // line 178
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                            <div class=\"content-search\">
                                ";
        // line 180
        if (($context["has_search"] ?? null)) {
            // line 181
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 210
            echo "                                ";
        }
        // line 211
        echo "                            </div>

                            <div class=\"navbar-custom-menu\">
                                ";
        // line 214
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 226
        echo "                            </div>
                        ";
    }

    // line 181
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 184
        $this->displayBlock('search_form', $context, $blocks);
        // line 208
        echo "                                        </form>
                                    ";
    }

    // line 184
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 186), "query", [], "any", false, false, false, 186), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 186), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 187), "query", [], "any", false, false, false, 187), "get", [0 => "menuIndex"], "method", false, false, false, 187), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 188), "query", [], "any", false, false, false, 188), "get", [0 => "submenuIndex"], "method", false, false, false, 188), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">
                                                <input type=\"hidden\" name=\"signature\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unsetAll", [], "method", false, false, false, 190), "setAction", [0 => "index"], "method", false, false, false, 190), "setController", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 190), "query", [], "any", false, false, false, 190), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 190)], "method", false, false, false, 190), "getSignature", [], "method", false, false, false, 190), "html", null, true);
        echo "\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 196), "get", [0 => "query"], "method", false, false, false, 196), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 197
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 197), "get", [0 => "query"], "method", false, false, false, 197))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 197), "get", [0 => "query"], "method", true, true, false, 197) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 197), "get", [0 => "query"], "method", false, false, false, 197)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 197), "get", [0 => "query"], "method", false, false, false, 197), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 197), "translationParameters", [], "any", false, false, false, 197), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\" onInput=\"this.parentNode.dataset.value=this.value\">
                                                        </label>

                                                        ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 200), "get", [0 => "query"], "method", false, false, false, 200)) {
            // line 201
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 201), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 205
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 214
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 217
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 218), "isNameDisplayed", [], "any", false, false, false, 218)) {
            // line 219
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 219), "name", [], "any", false, false, false, 219), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 221
        echo "                                        </a>

                                        ";
        // line 223
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 231
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "                            <article class=\"content\">
                                ";
        // line 233
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 257
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 259
        $this->displayBlock('main', $context, $blocks);
        // line 260
        echo "                                </section>

                                ";
        // line 262
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 270
        echo "                            </article>
                        ";
    }

    // line 233
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 234), "helpMessage", [], "any", true, true, false, 234) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 234), "helpMessage", [], "any", false, false, false, 234)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 234), "helpMessage", [], "any", false, false, false, 234)) : ("")));
        // line 235
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 236
        $this->displayBlock('content_header', $context, $blocks);
        // line 255
        echo "                                    </section>
                                ";
    }

    // line 236
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 239
        $this->displayBlock('content_title', $context, $blocks);
        // line 240
        echo "
                                                    ";
        // line 241
        $this->displayBlock('content_help', $context, $blocks);
        // line 248
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 251
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 254
        echo "                                        ";
    }

    // line 239
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 241
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 243
            echo "                                                            <span class=\"content-header-help\">
                                                            <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 244), "helpMessage", [], "any", false, false, false, 244), "html_attr");
            echo "\"></i>
                                                        </span>
                                                        ";
        }
        // line 247
        echo "                                                    ";
    }

    // line 251
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 252
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 259
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 262
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 264
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 265
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 266
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 269
        echo "                                ";
    }

    // line 280
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 282
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 283), "bodyContents", [], "any", true, true, false, 283) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 283), "bodyContents", [], "any", false, false, false, 283)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 283), "bodyContents", [], "any", false, false, false, 283)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 284
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  990 => 286,  981 => 284,  976 => 283,  972 => 282,  966 => 280,  962 => 269,  956 => 266,  953 => 265,  950 => 264,  947 => 263,  943 => 262,  937 => 259,  925 => 252,  921 => 251,  917 => 247,  911 => 244,  908 => 243,  905 => 242,  901 => 241,  895 => 239,  891 => 254,  889 => 251,  884 => 248,  882 => 241,  879 => 240,  877 => 239,  873 => 237,  869 => 236,  864 => 255,  862 => 236,  859 => 235,  856 => 234,  852 => 233,  847 => 270,  845 => 262,  841 => 260,  839 => 259,  835 => 257,  833 => 233,  830 => 232,  826 => 231,  819 => 223,  815 => 221,  809 => 219,  807 => 218,  803 => 217,  797 => 215,  793 => 214,  787 => 205,  779 => 201,  777 => 200,  767 => 197,  763 => 196,  754 => 190,  749 => 188,  745 => 187,  741 => 186,  738 => 185,  734 => 184,  729 => 208,  727 => 184,  723 => 182,  719 => 181,  714 => 226,  712 => 214,  707 => 211,  704 => 210,  701 => 181,  699 => 180,  696 => 179,  692 => 178,  685 => 167,  681 => 166,  673 => 156,  666 => 155,  662 => 154,  657 => 160,  655 => 154,  652 => 153,  648 => 152,  643 => 162,  641 => 152,  638 => 151,  634 => 150,  630 => 169,  628 => 166,  624 => 164,  622 => 150,  619 => 149,  615 => 148,  608 => 125,  601 => 124,  597 => 123,  590 => 141,  586 => 139,  580 => 137,  574 => 135,  571 => 134,  566 => 130,  562 => 128,  560 => 123,  553 => 118,  549 => 117,  541 => 272,  539 => 231,  534 => 228,  532 => 178,  527 => 177,  525 => 176,  517 => 170,  515 => 148,  509 => 144,  507 => 117,  504 => 116,  500 => 115,  496 => 110,  493 => 109,  478 => 107,  471 => 104,  465 => 103,  458 => 101,  451 => 100,  449 => 99,  446 => 98,  444 => 97,  441 => 96,  423 => 95,  420 => 94,  416 => 93,  409 => 64,  405 => 63,  400 => 277,  398 => 115,  394 => 113,  390 => 111,  388 => 93,  380 => 88,  376 => 87,  371 => 85,  367 => 83,  365 => 82,  362 => 81,  360 => 80,  357 => 79,  354 => 78,  348 => 76,  341 => 72,  336 => 69,  333 => 68,  331 => 67,  328 => 66,  325 => 63,  321 => 62,  313 => 57,  309 => 56,  305 => 54,  301 => 53,  290 => 52,  285 => 287,  283 => 282,  280 => 281,  278 => 280,  275 => 279,  273 => 62,  270 => 61,  268 => 53,  261 => 52,  257 => 51,  253 => 48,  244 => 46,  239 => 45,  235 => 44,  229 => 37,  224 => 36,  220 => 35,  213 => 32,  209 => 31,  202 => 28,  198 => 27,  192 => 24,  187 => 23,  183 => 22,  176 => 19,  172 => 18,  165 => 15,  156 => 8,  152 => 7,  147 => 289,  145 => 51,  141 => 49,  139 => 44,  136 => 43,  130 => 41,  128 => 40,  125 => 39,  123 => 35,  120 => 34,  118 => 31,  115 => 30,  113 => 27,  110 => 26,  108 => 22,  105 => 21,  103 => 18,  97 => 16,  93 => 15,  90 => 14,  88 => 7,  81 => 5,  77 => 3,  75 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\Users\\romai\\Dropbox\\symfonyGnosys\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
