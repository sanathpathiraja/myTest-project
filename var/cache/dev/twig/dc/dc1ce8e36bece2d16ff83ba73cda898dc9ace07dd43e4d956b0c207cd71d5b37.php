<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d2d6c57440295e9148a16fc2daeb42ff24a013d9b720da536b98e951a451875d extends Twig_Template
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
        $__internal_30071d9863ce68626bcbdccfd333c3b18355e6ce4508b1a1880f6148d72bdaef = $this->env->getExtension("native_profiler");
        $__internal_30071d9863ce68626bcbdccfd333c3b18355e6ce4508b1a1880f6148d72bdaef->enter($__internal_30071d9863ce68626bcbdccfd333c3b18355e6ce4508b1a1880f6148d72bdaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_30071d9863ce68626bcbdccfd333c3b18355e6ce4508b1a1880f6148d72bdaef->leave($__internal_30071d9863ce68626bcbdccfd333c3b18355e6ce4508b1a1880f6148d72bdaef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
