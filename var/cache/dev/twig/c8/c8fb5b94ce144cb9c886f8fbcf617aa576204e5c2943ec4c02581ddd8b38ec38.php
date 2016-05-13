<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e5f4d2c14b25131e75e23a9512b89d1e90f7075ee19ced6e5b617bf81f838a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6a668e90ecb2d20da59ba6af7e60109221c7b5ac271bafa6821b0cff1089a471 = $this->env->getExtension("native_profiler");
        $__internal_6a668e90ecb2d20da59ba6af7e60109221c7b5ac271bafa6821b0cff1089a471->enter($__internal_6a668e90ecb2d20da59ba6af7e60109221c7b5ac271bafa6821b0cff1089a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a668e90ecb2d20da59ba6af7e60109221c7b5ac271bafa6821b0cff1089a471->leave($__internal_6a668e90ecb2d20da59ba6af7e60109221c7b5ac271bafa6821b0cff1089a471_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39847b7566e04e2a2da0b1c63c5467bb95bb14268a84b1bce50d1df2de87747c = $this->env->getExtension("native_profiler");
        $__internal_39847b7566e04e2a2da0b1c63c5467bb95bb14268a84b1bce50d1df2de87747c->enter($__internal_39847b7566e04e2a2da0b1c63c5467bb95bb14268a84b1bce50d1df2de87747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39847b7566e04e2a2da0b1c63c5467bb95bb14268a84b1bce50d1df2de87747c->leave($__internal_39847b7566e04e2a2da0b1c63c5467bb95bb14268a84b1bce50d1df2de87747c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dd27402fe8ba4b5c47b47ac98271182a850fa7ee7c0f0c758f01dfced5de271 = $this->env->getExtension("native_profiler");
        $__internal_7dd27402fe8ba4b5c47b47ac98271182a850fa7ee7c0f0c758f01dfced5de271->enter($__internal_7dd27402fe8ba4b5c47b47ac98271182a850fa7ee7c0f0c758f01dfced5de271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dd27402fe8ba4b5c47b47ac98271182a850fa7ee7c0f0c758f01dfced5de271->leave($__internal_7dd27402fe8ba4b5c47b47ac98271182a850fa7ee7c0f0c758f01dfced5de271_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13c043a0e433b8c933048f6691582b5e80a529725994f6c1459292006021ad5d = $this->env->getExtension("native_profiler");
        $__internal_13c043a0e433b8c933048f6691582b5e80a529725994f6c1459292006021ad5d->enter($__internal_13c043a0e433b8c933048f6691582b5e80a529725994f6c1459292006021ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13c043a0e433b8c933048f6691582b5e80a529725994f6c1459292006021ad5d->leave($__internal_13c043a0e433b8c933048f6691582b5e80a529725994f6c1459292006021ad5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
