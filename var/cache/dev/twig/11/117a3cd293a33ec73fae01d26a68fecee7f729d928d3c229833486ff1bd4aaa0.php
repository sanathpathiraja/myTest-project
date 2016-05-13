<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7e5e86ab5dde262f9c87ced40e16f5cac95d0004b5b5bde417b75c18372987cc extends Twig_Template
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
        $__internal_82d00add72ca2e844f8ae9669b686c8acdc93db34132606ae503c87e8fa87073 = $this->env->getExtension("native_profiler");
        $__internal_82d00add72ca2e844f8ae9669b686c8acdc93db34132606ae503c87e8fa87073->enter($__internal_82d00add72ca2e844f8ae9669b686c8acdc93db34132606ae503c87e8fa87073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_82d00add72ca2e844f8ae9669b686c8acdc93db34132606ae503c87e8fa87073->leave($__internal_82d00add72ca2e844f8ae9669b686c8acdc93db34132606ae503c87e8fa87073_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
