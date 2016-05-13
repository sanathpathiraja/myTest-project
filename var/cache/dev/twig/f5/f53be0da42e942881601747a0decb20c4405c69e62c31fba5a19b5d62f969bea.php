<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ff56391e36ec0a074fd80b0d9d0f650c235a9af72d9d220e388e4d4482222bf5 extends Twig_Template
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
        $__internal_c3dc30ee11eb58ab23ae96a27f8a07e88fd19f4fd8f05506e7e6e4d5880fc210 = $this->env->getExtension("native_profiler");
        $__internal_c3dc30ee11eb58ab23ae96a27f8a07e88fd19f4fd8f05506e7e6e4d5880fc210->enter($__internal_c3dc30ee11eb58ab23ae96a27f8a07e88fd19f4fd8f05506e7e6e4d5880fc210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c3dc30ee11eb58ab23ae96a27f8a07e88fd19f4fd8f05506e7e6e4d5880fc210->leave($__internal_c3dc30ee11eb58ab23ae96a27f8a07e88fd19f4fd8f05506e7e6e4d5880fc210_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
