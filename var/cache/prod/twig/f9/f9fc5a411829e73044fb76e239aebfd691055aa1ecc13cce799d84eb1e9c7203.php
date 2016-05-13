<?php

/* @App/page/home.html.twig */
class __TwigTemplate_089d6c4175752cdadfaeee6b2aee78ecf32aa9d56e8a6200a54aaf1d6956c22f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/page/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "@App/page/home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "@App/page/home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>var title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\";</script>
\t<script>var intro=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : null), "html", null, true);
        echo "\";</script>

";
    }

    public function getTemplateName()
    {
        return "@App/page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  55 => 17,  46 => 10,  43 => 9,  41 => 8,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div id="container" class="container">*/
/* 		{% include 'AppBundle::page/modules/slideA.html.twig' %}*/
/* 		{% include 'AppBundle::page/modules/slideB.html.twig' %}*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div ng-view></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<script>var title="{{ title }}";</script>*/
/* 	<script>var intro="{{ intro }}";</script>*/
/* */
/* {% endblock %}*/
/* */
