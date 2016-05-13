<?php

/* @App/page/home.html.twig */
class __TwigTemplate_d83b086b715d7e056a0d303dd13eb425a936db49b46db06b87e895308454921d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/page/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c85c4a2a0ac27444a5b90280fa8513095b0dbe4b1f11e24e890e4942d63c16e = $this->env->getExtension("native_profiler");
        $__internal_4c85c4a2a0ac27444a5b90280fa8513095b0dbe4b1f11e24e890e4942d63c16e->enter($__internal_4c85c4a2a0ac27444a5b90280fa8513095b0dbe4b1f11e24e890e4942d63c16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c85c4a2a0ac27444a5b90280fa8513095b0dbe4b1f11e24e890e4942d63c16e->leave($__internal_4c85c4a2a0ac27444a5b90280fa8513095b0dbe4b1f11e24e890e4942d63c16e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34c6abd27ff3d234290b4120669c2fc3c07b81c0f049eae16b3af4b08a912eb2 = $this->env->getExtension("native_profiler");
        $__internal_34c6abd27ff3d234290b4120669c2fc3c07b81c0f049eae16b3af4b08a912eb2->enter($__internal_34c6abd27ff3d234290b4120669c2fc3c07b81c0f049eae16b3af4b08a912eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34c6abd27ff3d234290b4120669c2fc3c07b81c0f049eae16b3af4b08a912eb2->leave($__internal_34c6abd27ff3d234290b4120669c2fc3c07b81c0f049eae16b3af4b08a912eb2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3fbfb26ebbb575f85d5c1ff3bf7f75d02524686ece67448bfdf07d9d69a65380 = $this->env->getExtension("native_profiler");
        $__internal_3fbfb26ebbb575f85d5c1ff3bf7f75d02524686ece67448bfdf07d9d69a65380->enter($__internal_3fbfb26ebbb575f85d5c1ff3bf7f75d02524686ece67448bfdf07d9d69a65380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "@App/page/home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "@App/page/home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>var title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\";</script>
\t<script>var intro=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : $this->getContext($context, "intro")), "html", null, true);
        echo "\";</script>

";
        
        $__internal_3fbfb26ebbb575f85d5c1ff3bf7f75d02524686ece67448bfdf07d9d69a65380->leave($__internal_3fbfb26ebbb575f85d5c1ff3bf7f75d02524686ece67448bfdf07d9d69a65380_prof);

    }

    public function getTemplateName()
    {
        return "@App/page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div id="container" class="container">*/
/* 		{% include 'AppBundle::page/modules/slideA.html.twig' %}*/
/* 		{% include 'AppBundle::page/modules/slideB.html.twig' %}*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div ng-view></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<script>var title="{{ title }}";</script>*/
/* 	<script>var intro="{{ intro }}";</script>*/
/* */
/* {% endblock %}*/
/* */
