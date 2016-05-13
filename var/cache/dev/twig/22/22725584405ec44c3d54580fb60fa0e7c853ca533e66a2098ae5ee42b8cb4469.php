<?php

/* @App/page/modules/slideA.html.twig */
class __TwigTemplate_712679b37971384de0639021a4d1d5d9449fe534d6970bf2357c8e411b8cc2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7656da61036ac75c9467e3a269c24fba4c058905187d1fdddddbd9b9f280b61a = $this->env->getExtension("native_profiler");
        $__internal_7656da61036ac75c9467e3a269c24fba4c058905187d1fdddddbd9b9f280b61a->enter($__internal_7656da61036ac75c9467e3a269c24fba4c058905187d1fdddddbd9b9f280b61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/modules/slideA.html.twig"));

        // line 1
        echo "<script type=\"text/ng-template\" id=\"/modules/slideA.html\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<h2>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
\t\t\t<h3>[[ subtitle ]]</h3>
\t\t\t<a class=\"btn btn-default\" ng-click=\"gotoView('home/b')\">CHANGE SUBVIEW</a>
\t\t</div>
\t</div>
</script>
";
        
        $__internal_7656da61036ac75c9467e3a269c24fba4c058905187d1fdddddbd9b9f280b61a->leave($__internal_7656da61036ac75c9467e3a269c24fba4c058905187d1fdddddbd9b9f280b61a_prof);

    }

    public function getTemplateName()
    {
        return "@App/page/modules/slideA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <script type="text/ng-template" id="/modules/slideA.html">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<h2>{{ title }}</h2>*/
/* 			<h3>[[ subtitle ]]</h3>*/
/* 			<a class="btn btn-default" ng-click="gotoView('home/b')">CHANGE SUBVIEW</a>*/
/* 		</div>*/
/* 	</div>*/
/* </script>*/
/* */
