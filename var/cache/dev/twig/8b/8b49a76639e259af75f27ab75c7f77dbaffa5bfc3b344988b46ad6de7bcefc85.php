<?php

/* @App/base.html.twig */
class __TwigTemplate_07e74c7831f6e45f02f8b2aae322cb7d2ab7c51a86fc4555fd15d3e75fdb164a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/base.html.twig", 1);
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
        $__internal_81aa6dae29dbb22fd6df4e1601bdb29c52b4f1cc62026c28ab27c47f91c9e7ad = $this->env->getExtension("native_profiler");
        $__internal_81aa6dae29dbb22fd6df4e1601bdb29c52b4f1cc62026c28ab27c47f91c9e7ad->enter($__internal_81aa6dae29dbb22fd6df4e1601bdb29c52b4f1cc62026c28ab27c47f91c9e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81aa6dae29dbb22fd6df4e1601bdb29c52b4f1cc62026c28ab27c47f91c9e7ad->leave($__internal_81aa6dae29dbb22fd6df4e1601bdb29c52b4f1cc62026c28ab27c47f91c9e7ad_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b675226dab7a08b9b624f39fb3bc2bfdc5341337b1e7b7e96e64e14bd880c97b = $this->env->getExtension("native_profiler");
        $__internal_b675226dab7a08b9b624f39fb3bc2bfdc5341337b1e7b7e96e64e14bd880c97b->enter($__internal_b675226dab7a08b9b624f39fb3bc2bfdc5341337b1e7b7e96e64e14bd880c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b675226dab7a08b9b624f39fb3bc2bfdc5341337b1e7b7e96e64e14bd880c97b->leave($__internal_b675226dab7a08b9b624f39fb3bc2bfdc5341337b1e7b7e96e64e14bd880c97b_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6d1198a5cfbd920d5bdf0f0c621b01de1af1a336e34444a097e3a050db7c33d = $this->env->getExtension("native_profiler");
        $__internal_a6d1198a5cfbd920d5bdf0f0c621b01de1af1a336e34444a097e3a050db7c33d->enter($__internal_a6d1198a5cfbd920d5bdf0f0c621b01de1af1a336e34444a097e3a050db7c33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a6d1198a5cfbd920d5bdf0f0c621b01de1af1a336e34444a097e3a050db7c33d->leave($__internal_a6d1198a5cfbd920d5bdf0f0c621b01de1af1a336e34444a097e3a050db7c33d_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2a429d35466e5ae037181287d8b008d9b35033b4f6f8b19148fe2db2a267a7 = $this->env->getExtension("native_profiler");
        $__internal_5b2a429d35466e5ae037181287d8b008d9b35033b4f6f8b19148fe2db2a267a7->enter($__internal_5b2a429d35466e5ae037181287d8b008d9b35033b4f6f8b19148fe2db2a267a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b2a429d35466e5ae037181287d8b008d9b35033b4f6f8b19148fe2db2a267a7->leave($__internal_5b2a429d35466e5ae037181287d8b008d9b35033b4f6f8b19148fe2db2a267a7_prof);

    }

    // line 30
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_6018feaf1a0d7432b80d6bae3c3e4cf4de42a1bed191271a5c9a86ea6241be83 = $this->env->getExtension("native_profiler");
        $__internal_6018feaf1a0d7432b80d6bae3c3e4cf4de42a1bed191271a5c9a86ea6241be83->enter($__internal_6018feaf1a0d7432b80d6bae3c3e4cf4de42a1bed191271a5c9a86ea6241be83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

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
        
        $__internal_6018feaf1a0d7432b80d6bae3c3e4cf4de42a1bed191271a5c9a86ea6241be83->leave($__internal_6018feaf1a0d7432b80d6bae3c3e4cf4de42a1bed191271a5c9a86ea6241be83_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc8751f68aa45fdbb0191bb0f7d9d8dfd5ab3169e1dbf181f9bc206db1b94736 = $this->env->getExtension("native_profiler");
        $__internal_cc8751f68aa45fdbb0191bb0f7d9d8dfd5ab3169e1dbf181f9bc206db1b94736->enter($__internal_cc8751f68aa45fdbb0191bb0f7d9d8dfd5ab3169e1dbf181f9bc206db1b94736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cc8751f68aa45fdbb0191bb0f7d9d8dfd5ab3169e1dbf181f9bc206db1b94736->leave($__internal_cc8751f68aa45fdbb0191bb0f7d9d8dfd5ab3169e1dbf181f9bc206db1b94736_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a0050a813a49ba89921bcfca4eced898e56b25968865b445a70094d3472dab07 = $this->env->getExtension("native_profiler");
        $__internal_a0050a813a49ba89921bcfca4eced898e56b25968865b445a70094d3472dab07->enter($__internal_a0050a813a49ba89921bcfca4eced898e56b25968865b445a70094d3472dab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<p>@Symfonangular 2016</p>";
        
        $__internal_a0050a813a49ba89921bcfca4eced898e56b25968865b445a70094d3472dab07->leave($__internal_a0050a813a49ba89921bcfca4eced898e56b25968865b445a70094d3472dab07_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
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
