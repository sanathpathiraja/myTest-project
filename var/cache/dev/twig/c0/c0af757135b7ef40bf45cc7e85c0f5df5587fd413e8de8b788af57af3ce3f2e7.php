<?php

/* AppBundle::page/modules/slideB.html.twig */
class __TwigTemplate_353f3a68816683d09425d8583e0d56c64f1168b55dbe50861a9ae4938b5e94a5 extends Twig_Template
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
        $__internal_63e626f74408dbbb32550045dd40b6c27adae0182d8a6e607d972e44f7a25f8c = $this->env->getExtension("native_profiler");
        $__internal_63e626f74408dbbb32550045dd40b6c27adae0182d8a6e607d972e44f7a25f8c->enter($__internal_63e626f74408dbbb32550045dd40b6c27adae0182d8a6e607d972e44f7a25f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::page/modules/slideB.html.twig"));

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
        
        $__internal_63e626f74408dbbb32550045dd40b6c27adae0182d8a6e607d972e44f7a25f8c->leave($__internal_63e626f74408dbbb32550045dd40b6c27adae0182d8a6e607d972e44f7a25f8c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::page/modules/slideB.html.twig";
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
