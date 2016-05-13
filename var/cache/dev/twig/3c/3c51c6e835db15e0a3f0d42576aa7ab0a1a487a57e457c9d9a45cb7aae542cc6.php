<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_48f69471b946d99078a1dd918bf773310dc1862a73d63fb79fa011aede38a7bb extends Twig_Template
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
        $__internal_8bd9b4b8de462cd47bc27ff90170bc36fb652ae4b3ee612f4870fe1732e49310 = $this->env->getExtension("native_profiler");
        $__internal_8bd9b4b8de462cd47bc27ff90170bc36fb652ae4b3ee612f4870fe1732e49310->enter($__internal_8bd9b4b8de462cd47bc27ff90170bc36fb652ae4b3ee612f4870fe1732e49310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8bd9b4b8de462cd47bc27ff90170bc36fb652ae4b3ee612f4870fe1732e49310->leave($__internal_8bd9b4b8de462cd47bc27ff90170bc36fb652ae4b3ee612f4870fe1732e49310_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
