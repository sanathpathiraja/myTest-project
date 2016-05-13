<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d04d94722e9019f2d0547488a536d22fdd3072f04e21089c79bc1216025bf4b3 extends Twig_Template
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
        $__internal_d66c7605b9ea7a40a0ab9364585b66743991bf4ec906e72d1160513648cb58ba = $this->env->getExtension("native_profiler");
        $__internal_d66c7605b9ea7a40a0ab9364585b66743991bf4ec906e72d1160513648cb58ba->enter($__internal_d66c7605b9ea7a40a0ab9364585b66743991bf4ec906e72d1160513648cb58ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d66c7605b9ea7a40a0ab9364585b66743991bf4ec906e72d1160513648cb58ba->leave($__internal_d66c7605b9ea7a40a0ab9364585b66743991bf4ec906e72d1160513648cb58ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
