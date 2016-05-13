<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4f6306edd5b09a0f2ceeb444e35f888c7845d0c37af0f72216cefb0d359357fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_1397455f05a2c85069967e09b4781bbf59da41a5e6168590ef4afcb93b85f7a3 = $this->env->getExtension("native_profiler");
        $__internal_1397455f05a2c85069967e09b4781bbf59da41a5e6168590ef4afcb93b85f7a3->enter($__internal_1397455f05a2c85069967e09b4781bbf59da41a5e6168590ef4afcb93b85f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1397455f05a2c85069967e09b4781bbf59da41a5e6168590ef4afcb93b85f7a3->leave($__internal_1397455f05a2c85069967e09b4781bbf59da41a5e6168590ef4afcb93b85f7a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bb223c4f90a43803d79a60816d86b4afae1ebb2f666e82ef2bdc8c1cd2f5c9d = $this->env->getExtension("native_profiler");
        $__internal_2bb223c4f90a43803d79a60816d86b4afae1ebb2f666e82ef2bdc8c1cd2f5c9d->enter($__internal_2bb223c4f90a43803d79a60816d86b4afae1ebb2f666e82ef2bdc8c1cd2f5c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2bb223c4f90a43803d79a60816d86b4afae1ebb2f666e82ef2bdc8c1cd2f5c9d->leave($__internal_2bb223c4f90a43803d79a60816d86b4afae1ebb2f666e82ef2bdc8c1cd2f5c9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b542c1ec045aef53a5eeed9f569e039abf5613defdbca255bdcc273a27c32c46 = $this->env->getExtension("native_profiler");
        $__internal_b542c1ec045aef53a5eeed9f569e039abf5613defdbca255bdcc273a27c32c46->enter($__internal_b542c1ec045aef53a5eeed9f569e039abf5613defdbca255bdcc273a27c32c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b542c1ec045aef53a5eeed9f569e039abf5613defdbca255bdcc273a27c32c46->leave($__internal_b542c1ec045aef53a5eeed9f569e039abf5613defdbca255bdcc273a27c32c46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
