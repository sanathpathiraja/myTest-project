<?php

/* AppBundle::page/modules/slideA.html.twig */
class __TwigTemplate_2e6c2e65beb0691b5ed9eebe968a12d2177fb933c367b7c4b0ecbe22bc12d28e extends Twig_Template
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
        $__internal_f9a7d93e45688dae10426135a04b9c7c2f61b6de2c6918911f7dd114286db0d6 = $this->env->getExtension("native_profiler");
        $__internal_f9a7d93e45688dae10426135a04b9c7c2f61b6de2c6918911f7dd114286db0d6->enter($__internal_f9a7d93e45688dae10426135a04b9c7c2f61b6de2c6918911f7dd114286db0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::page/modules/slideA.html.twig"));

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
        
        $__internal_f9a7d93e45688dae10426135a04b9c7c2f61b6de2c6918911f7dd114286db0d6->leave($__internal_f9a7d93e45688dae10426135a04b9c7c2f61b6de2c6918911f7dd114286db0d6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::page/modules/slideA.html.twig";
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
