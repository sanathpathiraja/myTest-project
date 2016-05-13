<?php

/* @App/page/modules/slideB.html.twig */
class __TwigTemplate_6f2ceb389d1bf15c521388d938a84b45f98220c196a6735b965249178d6e59e9 extends Twig_Template
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
        $__internal_dc56d1b217c2a16d09c5bb449d1c38bab4f56da7dc03cc9d7fd28f8ef2e96b92 = $this->env->getExtension("native_profiler");
        $__internal_dc56d1b217c2a16d09c5bb449d1c38bab4f56da7dc03cc9d7fd28f8ef2e96b92->enter($__internal_dc56d1b217c2a16d09c5bb449d1c38bab4f56da7dc03cc9d7fd28f8ef2e96b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/modules/slideB.html.twig"));

        // line 1
        echo "<script type=\"text/ng-template\" id=\"/modules/slideB.html\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<h2>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
\t\t\t<h3>[[ subtitle ]]</h3>
\t\t\t<a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">CHANGE SUBVIEW</a>
\t\t</div>
\t</div>
</script>
";
        
        $__internal_dc56d1b217c2a16d09c5bb449d1c38bab4f56da7dc03cc9d7fd28f8ef2e96b92->leave($__internal_dc56d1b217c2a16d09c5bb449d1c38bab4f56da7dc03cc9d7fd28f8ef2e96b92_prof);

    }

    public function getTemplateName()
    {
        return "@App/page/modules/slideB.html.twig";
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
/* <script type="text/ng-template" id="/modules/slideB.html">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<h2>{{ title }}</h2>*/
/* 			<h3>[[ subtitle ]]</h3>*/
/* 			<a class="btn btn-default" ng-click="gotoView('home/a')">CHANGE SUBVIEW</a>*/
/* 		</div>*/
/* 	</div>*/
/* </script>*/
/* */
