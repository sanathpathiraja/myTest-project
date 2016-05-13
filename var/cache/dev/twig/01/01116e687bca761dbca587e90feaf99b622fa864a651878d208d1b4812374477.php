<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4884d58dbc1bb7f345f40f47cb837c641da2fc2dba7bb48c86782f5da3adfb90 extends Twig_Template
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
        $__internal_c8b1bdcaf8c533058771f626cd5dfb1d206c794a6e4208316a1e459f9e9d986b = $this->env->getExtension("native_profiler");
        $__internal_c8b1bdcaf8c533058771f626cd5dfb1d206c794a6e4208316a1e459f9e9d986b->enter($__internal_c8b1bdcaf8c533058771f626cd5dfb1d206c794a6e4208316a1e459f9e9d986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c8b1bdcaf8c533058771f626cd5dfb1d206c794a6e4208316a1e459f9e9d986b->leave($__internal_c8b1bdcaf8c533058771f626cd5dfb1d206c794a6e4208316a1e459f9e9d986b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
