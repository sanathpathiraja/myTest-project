<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_5970aaf33aa5ac11fc0646440fc6a93b5fb4fd9e097ad7d0b97f1f12591a38af extends Twig_Template
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
        $__internal_8b7e79bc0635c57d68ba075a5f7beb1f41dfbdd0b575bfc79f5afb5ffcff60aa = $this->env->getExtension("native_profiler");
        $__internal_8b7e79bc0635c57d68ba075a5f7beb1f41dfbdd0b575bfc79f5afb5ffcff60aa->enter($__internal_8b7e79bc0635c57d68ba075a5f7beb1f41dfbdd0b575bfc79f5afb5ffcff60aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8b7e79bc0635c57d68ba075a5f7beb1f41dfbdd0b575bfc79f5afb5ffcff60aa->leave($__internal_8b7e79bc0635c57d68ba075a5f7beb1f41dfbdd0b575bfc79f5afb5ffcff60aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
