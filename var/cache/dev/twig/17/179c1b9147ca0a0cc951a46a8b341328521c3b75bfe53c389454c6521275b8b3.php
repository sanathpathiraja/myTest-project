<?php

/* @App/page/templates/intro.html */
class __TwigTemplate_73f2f2efcc8dd119ae14e1ddba283c91a591d5d26d1b45471b08b72a8fd45568 extends Twig_Template
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
        $__internal_13d48e990dcc26015fcb3ac94262f091c871f9c3dc0b44c05cca183a8b54971b = $this->env->getExtension("native_profiler");
        $__internal_13d48e990dcc26015fcb3ac94262f091c871f9c3dc0b44c05cca183a8b54971b->enter($__internal_13d48e990dcc26015fcb3ac94262f091c871f9c3dc0b44c05cca183a8b54971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/templates/intro.html"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <h2>[[ title ]]</h2>
        <h3>[[ subtitle ]]</h3>
        <p>[[ text ]]</p>
        <a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">HOME</a>
    </div>
</div>";
        
        $__internal_13d48e990dcc26015fcb3ac94262f091c871f9c3dc0b44c05cca183a8b54971b->leave($__internal_13d48e990dcc26015fcb3ac94262f091c871f9c3dc0b44c05cca183a8b54971b_prof);

    }

    public function getTemplateName()
    {
        return "@App/page/templates/intro.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
