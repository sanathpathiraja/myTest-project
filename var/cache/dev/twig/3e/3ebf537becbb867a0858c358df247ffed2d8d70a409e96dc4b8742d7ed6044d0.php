<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_53ffb92c5096f3ecd53ae782648d2eeee2a3dd2bd3144fb6fe89c395c0ac1ec4 extends Twig_Template
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
        $__internal_67713fe7649d8c0d0552709b7784c6220c6fa86420da40ece565310f545ba65e = $this->env->getExtension("native_profiler");
        $__internal_67713fe7649d8c0d0552709b7784c6220c6fa86420da40ece565310f545ba65e->enter($__internal_67713fe7649d8c0d0552709b7784c6220c6fa86420da40ece565310f545ba65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_67713fe7649d8c0d0552709b7784c6220c6fa86420da40ece565310f545ba65e->leave($__internal_67713fe7649d8c0d0552709b7784c6220c6fa86420da40ece565310f545ba65e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
