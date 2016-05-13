<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ce081c4b34e75f505efe2442c12a5045b23d52720a0b619bb16d0a540d030ce4 extends Twig_Template
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
        $__internal_ed143945ab4bb8c4f4f0993f60ee414f1ecce2bccff7455fc141f77ec816fbff = $this->env->getExtension("native_profiler");
        $__internal_ed143945ab4bb8c4f4f0993f60ee414f1ecce2bccff7455fc141f77ec816fbff->enter($__internal_ed143945ab4bb8c4f4f0993f60ee414f1ecce2bccff7455fc141f77ec816fbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed143945ab4bb8c4f4f0993f60ee414f1ecce2bccff7455fc141f77ec816fbff->leave($__internal_ed143945ab4bb8c4f4f0993f60ee414f1ecce2bccff7455fc141f77ec816fbff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
