<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0e352f2abf4112959e0425800c7fd2f9b13df219df667d96d854145c353747e3 extends Twig_Template
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
        $__internal_0b9f5b55e6a4da01ecbfe8096a5ee14d572652896bdec13cdefcee989ce5f8f4 = $this->env->getExtension("native_profiler");
        $__internal_0b9f5b55e6a4da01ecbfe8096a5ee14d572652896bdec13cdefcee989ce5f8f4->enter($__internal_0b9f5b55e6a4da01ecbfe8096a5ee14d572652896bdec13cdefcee989ce5f8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b9f5b55e6a4da01ecbfe8096a5ee14d572652896bdec13cdefcee989ce5f8f4->leave($__internal_0b9f5b55e6a4da01ecbfe8096a5ee14d572652896bdec13cdefcee989ce5f8f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
