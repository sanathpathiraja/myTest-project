<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_550e516526b599591185850083b0f5555b998343a5dc16deaeed5c8454e8d82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94c0d1a20b6e0913865ff1099d8f16837ac2bc9c2dda455f53ec09a0100ec5a7 = $this->env->getExtension("native_profiler");
        $__internal_94c0d1a20b6e0913865ff1099d8f16837ac2bc9c2dda455f53ec09a0100ec5a7->enter($__internal_94c0d1a20b6e0913865ff1099d8f16837ac2bc9c2dda455f53ec09a0100ec5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c0d1a20b6e0913865ff1099d8f16837ac2bc9c2dda455f53ec09a0100ec5a7->leave($__internal_94c0d1a20b6e0913865ff1099d8f16837ac2bc9c2dda455f53ec09a0100ec5a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c071701a313c0fcbca96210d22652f22e7940418f63a5282f3834dd1aec8ae6 = $this->env->getExtension("native_profiler");
        $__internal_8c071701a313c0fcbca96210d22652f22e7940418f63a5282f3834dd1aec8ae6->enter($__internal_8c071701a313c0fcbca96210d22652f22e7940418f63a5282f3834dd1aec8ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c071701a313c0fcbca96210d22652f22e7940418f63a5282f3834dd1aec8ae6->leave($__internal_8c071701a313c0fcbca96210d22652f22e7940418f63a5282f3834dd1aec8ae6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29b128882aedbc371a725f8127329348a6f2f79cb123aa7a0cbaea1b696f52b6 = $this->env->getExtension("native_profiler");
        $__internal_29b128882aedbc371a725f8127329348a6f2f79cb123aa7a0cbaea1b696f52b6->enter($__internal_29b128882aedbc371a725f8127329348a6f2f79cb123aa7a0cbaea1b696f52b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_29b128882aedbc371a725f8127329348a6f2f79cb123aa7a0cbaea1b696f52b6->leave($__internal_29b128882aedbc371a725f8127329348a6f2f79cb123aa7a0cbaea1b696f52b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dd48f5187003a21870231b4b750e82b1f6ca4dd9a16acb14a20fc4537adfe4e = $this->env->getExtension("native_profiler");
        $__internal_6dd48f5187003a21870231b4b750e82b1f6ca4dd9a16acb14a20fc4537adfe4e->enter($__internal_6dd48f5187003a21870231b4b750e82b1f6ca4dd9a16acb14a20fc4537adfe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6dd48f5187003a21870231b4b750e82b1f6ca4dd9a16acb14a20fc4537adfe4e->leave($__internal_6dd48f5187003a21870231b4b750e82b1f6ca4dd9a16acb14a20fc4537adfe4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
