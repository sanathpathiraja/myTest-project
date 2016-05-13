<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5a51b89bd6025e66f6f8ce59a549a5e362e73857874dc51290d1b14fb7e503fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93857e95da4389f3c6c3b76af4cc21c788ed39c1c3ee31d2e31033d41ba4b7f5 = $this->env->getExtension("native_profiler");
        $__internal_93857e95da4389f3c6c3b76af4cc21c788ed39c1c3ee31d2e31033d41ba4b7f5->enter($__internal_93857e95da4389f3c6c3b76af4cc21c788ed39c1c3ee31d2e31033d41ba4b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93857e95da4389f3c6c3b76af4cc21c788ed39c1c3ee31d2e31033d41ba4b7f5->leave($__internal_93857e95da4389f3c6c3b76af4cc21c788ed39c1c3ee31d2e31033d41ba4b7f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cff043c49f00fc99a1c1f4caee65e42ddcb32621258e8cee19143d50fd329e2 = $this->env->getExtension("native_profiler");
        $__internal_7cff043c49f00fc99a1c1f4caee65e42ddcb32621258e8cee19143d50fd329e2->enter($__internal_7cff043c49f00fc99a1c1f4caee65e42ddcb32621258e8cee19143d50fd329e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7cff043c49f00fc99a1c1f4caee65e42ddcb32621258e8cee19143d50fd329e2->leave($__internal_7cff043c49f00fc99a1c1f4caee65e42ddcb32621258e8cee19143d50fd329e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_724dbd61b3c5a596df4c57046d0836e160b741e87236e260826808b17cdbbd4b = $this->env->getExtension("native_profiler");
        $__internal_724dbd61b3c5a596df4c57046d0836e160b741e87236e260826808b17cdbbd4b->enter($__internal_724dbd61b3c5a596df4c57046d0836e160b741e87236e260826808b17cdbbd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_724dbd61b3c5a596df4c57046d0836e160b741e87236e260826808b17cdbbd4b->leave($__internal_724dbd61b3c5a596df4c57046d0836e160b741e87236e260826808b17cdbbd4b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
