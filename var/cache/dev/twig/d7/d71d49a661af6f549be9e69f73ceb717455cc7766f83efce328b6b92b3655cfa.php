<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_59fa62bcdd9e54d8289fc61337ac2b72875e1b7ac50b118265ac242232b2f122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0864a6e8bc0f1b122c8be073c345ab3495133009e7fc02bd658c802c7c74d64d = $this->env->getExtension("native_profiler");
        $__internal_0864a6e8bc0f1b122c8be073c345ab3495133009e7fc02bd658c802c7c74d64d->enter($__internal_0864a6e8bc0f1b122c8be073c345ab3495133009e7fc02bd658c802c7c74d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0864a6e8bc0f1b122c8be073c345ab3495133009e7fc02bd658c802c7c74d64d->leave($__internal_0864a6e8bc0f1b122c8be073c345ab3495133009e7fc02bd658c802c7c74d64d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18c9bbdab7bb685157882c4bb34dd2088c793382ddbeaf90f6b5961b05095288 = $this->env->getExtension("native_profiler");
        $__internal_18c9bbdab7bb685157882c4bb34dd2088c793382ddbeaf90f6b5961b05095288->enter($__internal_18c9bbdab7bb685157882c4bb34dd2088c793382ddbeaf90f6b5961b05095288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/normalize.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_18c9bbdab7bb685157882c4bb34dd2088c793382ddbeaf90f6b5961b05095288->leave($__internal_18c9bbdab7bb685157882c4bb34dd2088c793382ddbeaf90f6b5961b05095288_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_387a5d3ff0380f03275b03c72957d9854da3448485f337e0b07675da3bfb8d5c = $this->env->getExtension("native_profiler");
        $__internal_387a5d3ff0380f03275b03c72957d9854da3448485f337e0b07675da3bfb8d5c->enter($__internal_387a5d3ff0380f03275b03c72957d9854da3448485f337e0b07675da3bfb8d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/require.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_init_1.js");
            // line 20
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_387a5d3ff0380f03275b03c72957d9854da3448485f337e0b07675da3bfb8d5c->leave($__internal_387a5d3ff0380f03275b03c72957d9854da3448485f337e0b07675da3bfb8d5c_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aeee98129f1ea97f5464d455b1073232abf928fcd68e2c805125395b3b1fd3b = $this->env->getExtension("native_profiler");
        $__internal_1aeee98129f1ea97f5464d455b1073232abf928fcd68e2c805125395b3b1fd3b->enter($__internal_1aeee98129f1ea97f5464d455b1073232abf928fcd68e2c805125395b3b1fd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "\t<div id=\"wrapper\">
\t\t<header>
\t\t\t<div id=\"logo-box\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"/>
\t\t\t</div>
\t\t\t";
        // line 30
        $this->displayBlock('header_nav', $context, $blocks);
        // line 38
        echo "\t\t</header>
\t\t<secction id=\"content\">
\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t\t</secction>
\t\t<footer>
\t\t\t";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "\t\t</footer>
\t</div>
";
        
        $__internal_1aeee98129f1ea97f5464d455b1073232abf928fcd68e2c805125395b3b1fd3b->leave($__internal_1aeee98129f1ea97f5464d455b1073232abf928fcd68e2c805125395b3b1fd3b_prof);

    }

    // line 30
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_850409ee01ddc37304aa118a6da83c17ff4feee3326256ad7f555c9dd1e3d0b0 = $this->env->getExtension("native_profiler");
        $__internal_850409ee01ddc37304aa118a6da83c17ff4feee3326256ad7f555c9dd1e3d0b0->enter($__internal_850409ee01ddc37304aa118a6da83c17ff4feee3326256ad7f555c9dd1e3d0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

        // line 31
        echo "\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"botHome\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"botHome\"><a ng-click=\"gotoView('/intro')\">Intro</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        
        $__internal_850409ee01ddc37304aa118a6da83c17ff4feee3326256ad7f555c9dd1e3d0b0->leave($__internal_850409ee01ddc37304aa118a6da83c17ff4feee3326256ad7f555c9dd1e3d0b0_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6cfa4b541c2098273e48720b65a79fc7f760b01d800b9168a87613418238a3d = $this->env->getExtension("native_profiler");
        $__internal_b6cfa4b541c2098273e48720b65a79fc7f760b01d800b9168a87613418238a3d->enter($__internal_b6cfa4b541c2098273e48720b65a79fc7f760b01d800b9168a87613418238a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b6cfa4b541c2098273e48720b65a79fc7f760b01d800b9168a87613418238a3d->leave($__internal_b6cfa4b541c2098273e48720b65a79fc7f760b01d800b9168a87613418238a3d_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ddeff575ebb78eee710a8a5f1ebb63716a22442e33b12ab31faf688a68ef907 = $this->env->getExtension("native_profiler");
        $__internal_2ddeff575ebb78eee710a8a5f1ebb63716a22442e33b12ab31faf688a68ef907->enter($__internal_2ddeff575ebb78eee710a8a5f1ebb63716a22442e33b12ab31faf688a68ef907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<p>@Symfonangular 2016</p>";
        
        $__internal_2ddeff575ebb78eee710a8a5f1ebb63716a22442e33b12ab31faf688a68ef907->leave($__internal_2ddeff575ebb78eee710a8a5f1ebb63716a22442e33b12ab31faf688a68ef907_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 43,  196 => 40,  184 => 33,  180 => 31,  174 => 30,  165 => 44,  163 => 43,  159 => 41,  157 => 40,  153 => 38,  151 => 30,  146 => 28,  141 => 25,  135 => 24,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  87 => 13,  81 => 12,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>*/
/* 	{% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}*/
/* 	<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('lib/scripts/require.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/* 	<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<header>*/
/* 			<div id="logo-box">*/
/* 				<img src="{{ asset('images/logo.png') }}" alt="Logo"/>*/
/* 			</div>*/
/* 			{% block header_nav %}*/
/* 				<nav>*/
/* 					<ul>*/
/* 						<li class="botHome"><a href="{{ path('_home') }}">Home</a></li>*/
/* 						<li class="botHome"><a ng-click="gotoView('/intro')">Intro</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 			{% endblock %}*/
/* 		</header>*/
/* 		<secction id="content">*/
/* 			{% block content %}{% endblock %}*/
/* 		</secction>*/
/* 		<footer>*/
/* 			{% block footer %}<p>@Symfonangular 2016</p>{% endblock %}*/
/* 		</footer>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
