<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6ba989d334dde3e971e11bd437cc2ccffdd98e444856ace185c9312226eb1010 extends Twig_Template
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
        $__internal_706b2d0f1f44047c39108a8243f641df04893dc9569045758b1855561c8f3a41 = $this->env->getExtension("native_profiler");
        $__internal_706b2d0f1f44047c39108a8243f641df04893dc9569045758b1855561c8f3a41->enter($__internal_706b2d0f1f44047c39108a8243f641df04893dc9569045758b1855561c8f3a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_706b2d0f1f44047c39108a8243f641df04893dc9569045758b1855561c8f3a41->leave($__internal_706b2d0f1f44047c39108a8243f641df04893dc9569045758b1855561c8f3a41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
