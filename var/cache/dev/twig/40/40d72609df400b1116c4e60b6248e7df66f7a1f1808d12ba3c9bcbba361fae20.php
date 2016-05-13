<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ad73613d8f03ab58be186fc1784a032328dee069bb4b295306edd7aced22cfec extends Twig_Template
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
        $__internal_12095a7475228201ef6a200b991a9fabd59a0eb379449d7b2f062d86a862032b = $this->env->getExtension("native_profiler");
        $__internal_12095a7475228201ef6a200b991a9fabd59a0eb379449d7b2f062d86a862032b->enter($__internal_12095a7475228201ef6a200b991a9fabd59a0eb379449d7b2f062d86a862032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_12095a7475228201ef6a200b991a9fabd59a0eb379449d7b2f062d86a862032b->leave($__internal_12095a7475228201ef6a200b991a9fabd59a0eb379449d7b2f062d86a862032b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
