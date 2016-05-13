<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7381de95f2d2a9d8f5f07919be54e733e326171ff6450d91916511a58452389a extends Twig_Template
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
        $__internal_687d2a8147f3d0876fa8b6419dbf0a6e584450303e7fc43d3b0ff65dbb9497d3 = $this->env->getExtension("native_profiler");
        $__internal_687d2a8147f3d0876fa8b6419dbf0a6e584450303e7fc43d3b0ff65dbb9497d3->enter($__internal_687d2a8147f3d0876fa8b6419dbf0a6e584450303e7fc43d3b0ff65dbb9497d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_687d2a8147f3d0876fa8b6419dbf0a6e584450303e7fc43d3b0ff65dbb9497d3->leave($__internal_687d2a8147f3d0876fa8b6419dbf0a6e584450303e7fc43d3b0ff65dbb9497d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
