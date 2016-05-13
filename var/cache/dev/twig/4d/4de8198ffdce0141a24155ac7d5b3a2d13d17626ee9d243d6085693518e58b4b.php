<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18136bdb26693993d8d0eae3eec714861579ee7849a40ea39134b6b51056655b extends Twig_Template
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
        $__internal_25ca173f0c4a09165cc5c96c354a3323e73980b3a29a702fcd519b8536448262 = $this->env->getExtension("native_profiler");
        $__internal_25ca173f0c4a09165cc5c96c354a3323e73980b3a29a702fcd519b8536448262->enter($__internal_25ca173f0c4a09165cc5c96c354a3323e73980b3a29a702fcd519b8536448262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_25ca173f0c4a09165cc5c96c354a3323e73980b3a29a702fcd519b8536448262->leave($__internal_25ca173f0c4a09165cc5c96c354a3323e73980b3a29a702fcd519b8536448262_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
