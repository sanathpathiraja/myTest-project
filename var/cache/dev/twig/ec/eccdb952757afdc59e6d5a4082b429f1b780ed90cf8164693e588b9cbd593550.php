<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b1f493400f94fc47de6a15804e3dfe723bb700f868513637e4d4d5da4e437ac3 extends Twig_Template
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
        $__internal_7b4c36bf2117db83dcea0ae178466966c0393788878fa16070ce0a22bca0ba85 = $this->env->getExtension("native_profiler");
        $__internal_7b4c36bf2117db83dcea0ae178466966c0393788878fa16070ce0a22bca0ba85->enter($__internal_7b4c36bf2117db83dcea0ae178466966c0393788878fa16070ce0a22bca0ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7b4c36bf2117db83dcea0ae178466966c0393788878fa16070ce0a22bca0ba85->leave($__internal_7b4c36bf2117db83dcea0ae178466966c0393788878fa16070ce0a22bca0ba85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
