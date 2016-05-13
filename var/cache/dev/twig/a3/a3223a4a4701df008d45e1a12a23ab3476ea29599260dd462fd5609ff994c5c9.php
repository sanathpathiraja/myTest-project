<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_634efdd94c5b64f7744672b9895e6a06e9f0266ba3bbc97a280562935053909a extends Twig_Template
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
        $__internal_0217ddd3113e2ddba7a040ca0684929500b54efcf53ee3ec4c904d10c559d3ee = $this->env->getExtension("native_profiler");
        $__internal_0217ddd3113e2ddba7a040ca0684929500b54efcf53ee3ec4c904d10c559d3ee->enter($__internal_0217ddd3113e2ddba7a040ca0684929500b54efcf53ee3ec4c904d10c559d3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0217ddd3113e2ddba7a040ca0684929500b54efcf53ee3ec4c904d10c559d3ee->leave($__internal_0217ddd3113e2ddba7a040ca0684929500b54efcf53ee3ec4c904d10c559d3ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
