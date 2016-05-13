<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b24776a4fd97dd477e0d6db31eebf65441fdf1f3be8cf00cc473007161f7eb38 extends Twig_Template
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
        $__internal_34bb6daa2756c99091898323fea550694e195c1cfc181c31ab518f7026f21aca = $this->env->getExtension("native_profiler");
        $__internal_34bb6daa2756c99091898323fea550694e195c1cfc181c31ab518f7026f21aca->enter($__internal_34bb6daa2756c99091898323fea550694e195c1cfc181c31ab518f7026f21aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_34bb6daa2756c99091898323fea550694e195c1cfc181c31ab518f7026f21aca->leave($__internal_34bb6daa2756c99091898323fea550694e195c1cfc181c31ab518f7026f21aca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
