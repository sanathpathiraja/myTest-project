<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c4af7921a0e65fda0fb7ada2a961a0b72582186f3b612d1230ef4692d48a9cca extends Twig_Template
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
        $__internal_800ccdcca73719972770a9a1d1063ce731dbed5ed9c34748b56a0c38b6bfa966 = $this->env->getExtension("native_profiler");
        $__internal_800ccdcca73719972770a9a1d1063ce731dbed5ed9c34748b56a0c38b6bfa966->enter($__internal_800ccdcca73719972770a9a1d1063ce731dbed5ed9c34748b56a0c38b6bfa966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_800ccdcca73719972770a9a1d1063ce731dbed5ed9c34748b56a0c38b6bfa966->leave($__internal_800ccdcca73719972770a9a1d1063ce731dbed5ed9c34748b56a0c38b6bfa966_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
