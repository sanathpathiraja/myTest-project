<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_01dd1b2d624e6a3c1ff2f73e902418c58116007319091ed6293db0b12bcab11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f290178b253f72283f832757c5e5b2b8ef4918170efd4f5a16cdf8fb9119b724 = $this->env->getExtension("native_profiler");
        $__internal_f290178b253f72283f832757c5e5b2b8ef4918170efd4f5a16cdf8fb9119b724->enter($__internal_f290178b253f72283f832757c5e5b2b8ef4918170efd4f5a16cdf8fb9119b724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f290178b253f72283f832757c5e5b2b8ef4918170efd4f5a16cdf8fb9119b724->leave($__internal_f290178b253f72283f832757c5e5b2b8ef4918170efd4f5a16cdf8fb9119b724_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85db27d6d76c9762d243b7b90cf8f4f06ec70a138f795fcb90f9b91c41b4512d = $this->env->getExtension("native_profiler");
        $__internal_85db27d6d76c9762d243b7b90cf8f4f06ec70a138f795fcb90f9b91c41b4512d->enter($__internal_85db27d6d76c9762d243b7b90cf8f4f06ec70a138f795fcb90f9b91c41b4512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85db27d6d76c9762d243b7b90cf8f4f06ec70a138f795fcb90f9b91c41b4512d->leave($__internal_85db27d6d76c9762d243b7b90cf8f4f06ec70a138f795fcb90f9b91c41b4512d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
