<?php

/* ::base.html.twig */
class __TwigTemplate_266229884db8854c1e3b2fb2a8688a04ed2ec492fb29f53fa390aaeedf7ff189 extends Twig_Template
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
        $__internal_c5fefde366d1624b4ecc8c93cc5ffe3db6b50ee6a24a56b0fef4a4775a4245a4 = $this->env->getExtension("native_profiler");
        $__internal_c5fefde366d1624b4ecc8c93cc5ffe3db6b50ee6a24a56b0fef4a4775a4245a4->enter($__internal_c5fefde366d1624b4ecc8c93cc5ffe3db6b50ee6a24a56b0fef4a4775a4245a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c5fefde366d1624b4ecc8c93cc5ffe3db6b50ee6a24a56b0fef4a4775a4245a4->leave($__internal_c5fefde366d1624b4ecc8c93cc5ffe3db6b50ee6a24a56b0fef4a4775a4245a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9d4ee2ed50156fe15b67e5125e42fb765802e17db7ceab7d4c25f703cf3c947 = $this->env->getExtension("native_profiler");
        $__internal_a9d4ee2ed50156fe15b67e5125e42fb765802e17db7ceab7d4c25f703cf3c947->enter($__internal_a9d4ee2ed50156fe15b67e5125e42fb765802e17db7ceab7d4c25f703cf3c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a9d4ee2ed50156fe15b67e5125e42fb765802e17db7ceab7d4c25f703cf3c947->leave($__internal_a9d4ee2ed50156fe15b67e5125e42fb765802e17db7ceab7d4c25f703cf3c947_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8752b1f5c7883080d6fa706b78e68d702ecd51a437b1abe7d0ba1e860145e7e = $this->env->getExtension("native_profiler");
        $__internal_f8752b1f5c7883080d6fa706b78e68d702ecd51a437b1abe7d0ba1e860145e7e->enter($__internal_f8752b1f5c7883080d6fa706b78e68d702ecd51a437b1abe7d0ba1e860145e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8752b1f5c7883080d6fa706b78e68d702ecd51a437b1abe7d0ba1e860145e7e->leave($__internal_f8752b1f5c7883080d6fa706b78e68d702ecd51a437b1abe7d0ba1e860145e7e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f63770c7ae8fbf921dcc053d0635f92e56f7b1150a446b39bb37d67b15bfa807 = $this->env->getExtension("native_profiler");
        $__internal_f63770c7ae8fbf921dcc053d0635f92e56f7b1150a446b39bb37d67b15bfa807->enter($__internal_f63770c7ae8fbf921dcc053d0635f92e56f7b1150a446b39bb37d67b15bfa807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f63770c7ae8fbf921dcc053d0635f92e56f7b1150a446b39bb37d67b15bfa807->leave($__internal_f63770c7ae8fbf921dcc053d0635f92e56f7b1150a446b39bb37d67b15bfa807_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f3397c416320dbcb5073f9e36b6210ab98a716a5837d61cf0ede6c4fbdb6deb = $this->env->getExtension("native_profiler");
        $__internal_2f3397c416320dbcb5073f9e36b6210ab98a716a5837d61cf0ede6c4fbdb6deb->enter($__internal_2f3397c416320dbcb5073f9e36b6210ab98a716a5837d61cf0ede6c4fbdb6deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f3397c416320dbcb5073f9e36b6210ab98a716a5837d61cf0ede6c4fbdb6deb->leave($__internal_2f3397c416320dbcb5073f9e36b6210ab98a716a5837d61cf0ede6c4fbdb6deb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
