<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_6b5718bca1a1f8ee1749ca46da32a00f6653fceb49f8fae9aef108c83b7d1c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:home.html.twig", 1);
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
        $__internal_0fb9a8860819c10dc928782346325efeb8582b40575f025e17c66c02d5138456 = $this->env->getExtension("native_profiler");
        $__internal_0fb9a8860819c10dc928782346325efeb8582b40575f025e17c66c02d5138456->enter($__internal_0fb9a8860819c10dc928782346325efeb8582b40575f025e17c66c02d5138456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb9a8860819c10dc928782346325efeb8582b40575f025e17c66c02d5138456->leave($__internal_0fb9a8860819c10dc928782346325efeb8582b40575f025e17c66c02d5138456_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_473d7c95ff2ebabe4f84b896e964cc0644b19782366137ebbbd5ab9dbe53b7d9 = $this->env->getExtension("native_profiler");
        $__internal_473d7c95ff2ebabe4f84b896e964cc0644b19782366137ebbbd5ab9dbe53b7d9->enter($__internal_473d7c95ff2ebabe4f84b896e964cc0644b19782366137ebbbd5ab9dbe53b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_473d7c95ff2ebabe4f84b896e964cc0644b19782366137ebbbd5ab9dbe53b7d9->leave($__internal_473d7c95ff2ebabe4f84b896e964cc0644b19782366137ebbbd5ab9dbe53b7d9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_157741e4df48f3820c81ba18b058a000cac1bc7d02d26036803f00cd23aea940 = $this->env->getExtension("native_profiler");
        $__internal_157741e4df48f3820c81ba18b058a000cac1bc7d02d26036803f00cd23aea940->enter($__internal_157741e4df48f3820c81ba18b058a000cac1bc7d02d26036803f00cd23aea940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "AppBundle:page:home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "AppBundle:page:home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>var title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\";</script>
\t<script>var intro=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : $this->getContext($context, "intro")), "html", null, true);
        echo "\";</script>

";
        
        $__internal_157741e4df48f3820c81ba18b058a000cac1bc7d02d26036803f00cd23aea940->leave($__internal_157741e4df48f3820c81ba18b058a000cac1bc7d02d26036803f00cd23aea940_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
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
