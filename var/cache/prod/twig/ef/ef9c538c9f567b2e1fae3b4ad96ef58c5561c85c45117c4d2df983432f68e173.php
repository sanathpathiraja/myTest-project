<?php

/* @App/page/templates/intro.html */
class __TwigTemplate_5044d21d08c08c043c6d43f1100b732f9731ba383af2357097d7ef5bc762cd5e extends Twig_Template
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
        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <h2>[[ title ]]</h2>
        <h3>[[ subtitle ]]</h3>
        <p>[[ text ]]</p>
        <a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">HOME</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@App/page/templates/intro.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*         <h2>[[ title ]]</h2>*/
/*         <h3>[[ subtitle ]]</h3>*/
/*         <p>[[ text ]]</p>*/
/*         <a class="btn btn-default" ng-click="gotoView('home/a')">HOME</a>*/
/*     </div>*/
/* </div>*/
