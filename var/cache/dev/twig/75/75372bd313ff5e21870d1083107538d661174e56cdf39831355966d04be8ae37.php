<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1da7e15c31518ad9d543db54293143e1a5b2951bbaeafda9c543c37ad366124f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23fe8cfe62dfca4764915390deccaff29aafd32ca13185fb7c7dac5cb0fce549 = $this->env->getExtension("native_profiler");
        $__internal_23fe8cfe62dfca4764915390deccaff29aafd32ca13185fb7c7dac5cb0fce549->enter($__internal_23fe8cfe62dfca4764915390deccaff29aafd32ca13185fb7c7dac5cb0fce549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23fe8cfe62dfca4764915390deccaff29aafd32ca13185fb7c7dac5cb0fce549->leave($__internal_23fe8cfe62dfca4764915390deccaff29aafd32ca13185fb7c7dac5cb0fce549_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e92dde014c54ae429495601fb4b69cbad35a41dd1cc6e4f8dc3522de235cec4 = $this->env->getExtension("native_profiler");
        $__internal_9e92dde014c54ae429495601fb4b69cbad35a41dd1cc6e4f8dc3522de235cec4->enter($__internal_9e92dde014c54ae429495601fb4b69cbad35a41dd1cc6e4f8dc3522de235cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e92dde014c54ae429495601fb4b69cbad35a41dd1cc6e4f8dc3522de235cec4->leave($__internal_9e92dde014c54ae429495601fb4b69cbad35a41dd1cc6e4f8dc3522de235cec4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
