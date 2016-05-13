<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_335afc2f4389361efd091b70daae8e8c656c1af3a85f94047aa09acb47368c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ceda60b7611c3c9c6264220577248be40108e4bdbd03b623cd55aa19fc4c8fae = $this->env->getExtension("native_profiler");
        $__internal_ceda60b7611c3c9c6264220577248be40108e4bdbd03b623cd55aa19fc4c8fae->enter($__internal_ceda60b7611c3c9c6264220577248be40108e4bdbd03b623cd55aa19fc4c8fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceda60b7611c3c9c6264220577248be40108e4bdbd03b623cd55aa19fc4c8fae->leave($__internal_ceda60b7611c3c9c6264220577248be40108e4bdbd03b623cd55aa19fc4c8fae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_080b1d24bed49560edeee1070550621524ebb6e6f39c69fd05c1cbc1538ae9a4 = $this->env->getExtension("native_profiler");
        $__internal_080b1d24bed49560edeee1070550621524ebb6e6f39c69fd05c1cbc1538ae9a4->enter($__internal_080b1d24bed49560edeee1070550621524ebb6e6f39c69fd05c1cbc1538ae9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_080b1d24bed49560edeee1070550621524ebb6e6f39c69fd05c1cbc1538ae9a4->leave($__internal_080b1d24bed49560edeee1070550621524ebb6e6f39c69fd05c1cbc1538ae9a4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bb52926130b9ed54ac91e1ee8536d0d7f5c9c00cbea5db7d17685ed6dc3d378 = $this->env->getExtension("native_profiler");
        $__internal_5bb52926130b9ed54ac91e1ee8536d0d7f5c9c00cbea5db7d17685ed6dc3d378->enter($__internal_5bb52926130b9ed54ac91e1ee8536d0d7f5c9c00cbea5db7d17685ed6dc3d378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5bb52926130b9ed54ac91e1ee8536d0d7f5c9c00cbea5db7d17685ed6dc3d378->leave($__internal_5bb52926130b9ed54ac91e1ee8536d0d7f5c9c00cbea5db7d17685ed6dc3d378_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7277f203f2e6d93b3ff420800e3b4db26ab63679e7196c5a94563357acfcd134 = $this->env->getExtension("native_profiler");
        $__internal_7277f203f2e6d93b3ff420800e3b4db26ab63679e7196c5a94563357acfcd134->enter($__internal_7277f203f2e6d93b3ff420800e3b4db26ab63679e7196c5a94563357acfcd134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7277f203f2e6d93b3ff420800e3b4db26ab63679e7196c5a94563357acfcd134->leave($__internal_7277f203f2e6d93b3ff420800e3b4db26ab63679e7196c5a94563357acfcd134_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
