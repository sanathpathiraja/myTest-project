<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f1835df462b8ae406f199669ef1350a9eaa0363c716499d8ed638b8601f40bd3 extends Twig_Template
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
        $__internal_840272397529245cc00f4c0d5dcc852566adbcf858629dc90393191cf7deffaa = $this->env->getExtension("native_profiler");
        $__internal_840272397529245cc00f4c0d5dcc852566adbcf858629dc90393191cf7deffaa->enter($__internal_840272397529245cc00f4c0d5dcc852566adbcf858629dc90393191cf7deffaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_840272397529245cc00f4c0d5dcc852566adbcf858629dc90393191cf7deffaa->leave($__internal_840272397529245cc00f4c0d5dcc852566adbcf858629dc90393191cf7deffaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
