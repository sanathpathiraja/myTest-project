<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c0f4b7c228c090193dda8357619569ab0862e639eb389eb13b197b3145fbfab9 extends Twig_Template
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
        $__internal_9bd976ccaf0485d03ad7f2d7058b32b0d5d52419fc4f22fbca92f88d6f4b78f6 = $this->env->getExtension("native_profiler");
        $__internal_9bd976ccaf0485d03ad7f2d7058b32b0d5d52419fc4f22fbca92f88d6f4b78f6->enter($__internal_9bd976ccaf0485d03ad7f2d7058b32b0d5d52419fc4f22fbca92f88d6f4b78f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9bd976ccaf0485d03ad7f2d7058b32b0d5d52419fc4f22fbca92f88d6f4b78f6->leave($__internal_9bd976ccaf0485d03ad7f2d7058b32b0d5d52419fc4f22fbca92f88d6f4b78f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
