<?php

/* base.html.twig */
class __TwigTemplate_0ebde3004aaa77ad7a465db2407827c83853038063f38de4bebf5aa150a92c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93c53796c1957e3a42771192740885f007d14322c555747efc503cd65ab0c010 = $this->env->getExtension("native_profiler");
        $__internal_93c53796c1957e3a42771192740885f007d14322c555747efc503cd65ab0c010->enter($__internal_93c53796c1957e3a42771192740885f007d14322c555747efc503cd65ab0c010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"App\" ng-controller=\"appController\">

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>

</html>";
        
        $__internal_93c53796c1957e3a42771192740885f007d14322c555747efc503cd65ab0c010->leave($__internal_93c53796c1957e3a42771192740885f007d14322c555747efc503cd65ab0c010_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19d666c28d6c9d44b89a1406b9cce5980363a054e917e2ff6783b9d846768863 = $this->env->getExtension("native_profiler");
        $__internal_19d666c28d6c9d44b89a1406b9cce5980363a054e917e2ff6783b9d846768863->enter($__internal_19d666c28d6c9d44b89a1406b9cce5980363a054e917e2ff6783b9d846768863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19d666c28d6c9d44b89a1406b9cce5980363a054e917e2ff6783b9d846768863->leave($__internal_19d666c28d6c9d44b89a1406b9cce5980363a054e917e2ff6783b9d846768863_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b7c0f7a5d51cbf6443b75b8137e5e173fe7e003bcdaa50d6535ad75c6de693 = $this->env->getExtension("native_profiler");
        $__internal_57b7c0f7a5d51cbf6443b75b8137e5e173fe7e003bcdaa50d6535ad75c6de693->enter($__internal_57b7c0f7a5d51cbf6443b75b8137e5e173fe7e003bcdaa50d6535ad75c6de693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57b7c0f7a5d51cbf6443b75b8137e5e173fe7e003bcdaa50d6535ad75c6de693->leave($__internal_57b7c0f7a5d51cbf6443b75b8137e5e173fe7e003bcdaa50d6535ad75c6de693_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0427a12136c3df43e044f2a3fe02207fa6b4c74888f7be198d0370fa4b473f3b = $this->env->getExtension("native_profiler");
        $__internal_0427a12136c3df43e044f2a3fe02207fa6b4c74888f7be198d0370fa4b473f3b->enter($__internal_0427a12136c3df43e044f2a3fe02207fa6b4c74888f7be198d0370fa4b473f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0427a12136c3df43e044f2a3fe02207fa6b4c74888f7be198d0370fa4b473f3b->leave($__internal_0427a12136c3df43e044f2a3fe02207fa6b4c74888f7be198d0370fa4b473f3b_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2df1cdf80e2c7bf554b880ae21a1c465d1a57e99f5778bee0786441556b6b29b = $this->env->getExtension("native_profiler");
        $__internal_2df1cdf80e2c7bf554b880ae21a1c465d1a57e99f5778bee0786441556b6b29b->enter($__internal_2df1cdf80e2c7bf554b880ae21a1c465d1a57e99f5778bee0786441556b6b29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2df1cdf80e2c7bf554b880ae21a1c465d1a57e99f5778bee0786441556b6b29b->leave($__internal_2df1cdf80e2c7bf554b880ae21a1c465d1a57e99f5778bee0786441556b6b29b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  84 => 13,  73 => 8,  62 => 7,  53 => 15,  50 => 14,  48 => 13,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="App" ng-controller="appController">*/
/* */
/* <head>*/
/* 	<meta charset="UTF-8" />*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* 	<title>{% block title %}{% endblock %}</title>*/
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* */
/* <body>*/
/* 	{% block body %}{% endblock %}*/
/* 	{% block javascripts %}{% endblock %}*/
/* </body>*/
/* */
/* </html>*/
