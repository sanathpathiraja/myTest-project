<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8808cccf0f9cf6af727f7d66658a36d42685c24660cfa3244f537eb28cd33a6c extends Twig_Template
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
        $__internal_48b1104ef89392e64cf6fcee7db94106bbe5e3deff4f084fdc890735a510855b = $this->env->getExtension("native_profiler");
        $__internal_48b1104ef89392e64cf6fcee7db94106bbe5e3deff4f084fdc890735a510855b->enter($__internal_48b1104ef89392e64cf6fcee7db94106bbe5e3deff4f084fdc890735a510855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_48b1104ef89392e64cf6fcee7db94106bbe5e3deff4f084fdc890735a510855b->leave($__internal_48b1104ef89392e64cf6fcee7db94106bbe5e3deff4f084fdc890735a510855b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
