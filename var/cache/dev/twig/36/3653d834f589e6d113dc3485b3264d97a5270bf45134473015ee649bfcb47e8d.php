<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_800666f180150c772d563a9bc52a35e60e0a68373748195cbf573c40ad7c85ca extends Twig_Template
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
        $__internal_7371a8536b09209c675bacc98189b010847d0b0003d3def10ce5d84d481cf88a = $this->env->getExtension("native_profiler");
        $__internal_7371a8536b09209c675bacc98189b010847d0b0003d3def10ce5d84d481cf88a->enter($__internal_7371a8536b09209c675bacc98189b010847d0b0003d3def10ce5d84d481cf88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7371a8536b09209c675bacc98189b010847d0b0003d3def10ce5d84d481cf88a->leave($__internal_7371a8536b09209c675bacc98189b010847d0b0003d3def10ce5d84d481cf88a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
