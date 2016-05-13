<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93a8f008434d20921a0d94f9d9b4b09471128d34ffca03ae69461a4e77fc0295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c4ad99d787a985bec94a9f8e041c9b0b054949820533090a4f231453de5e7a0a = $this->env->getExtension("native_profiler");
        $__internal_c4ad99d787a985bec94a9f8e041c9b0b054949820533090a4f231453de5e7a0a->enter($__internal_c4ad99d787a985bec94a9f8e041c9b0b054949820533090a4f231453de5e7a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ad99d787a985bec94a9f8e041c9b0b054949820533090a4f231453de5e7a0a->leave($__internal_c4ad99d787a985bec94a9f8e041c9b0b054949820533090a4f231453de5e7a0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91232591d19628859acfcc9c0688e7938d8fc610cb40fabdb0395dc6884dbe5b = $this->env->getExtension("native_profiler");
        $__internal_91232591d19628859acfcc9c0688e7938d8fc610cb40fabdb0395dc6884dbe5b->enter($__internal_91232591d19628859acfcc9c0688e7938d8fc610cb40fabdb0395dc6884dbe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91232591d19628859acfcc9c0688e7938d8fc610cb40fabdb0395dc6884dbe5b->leave($__internal_91232591d19628859acfcc9c0688e7938d8fc610cb40fabdb0395dc6884dbe5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d841b3c943ea50d33b196ffcb1c16d2811f6f2e7644f8bcb840342ce9d6f80a3 = $this->env->getExtension("native_profiler");
        $__internal_d841b3c943ea50d33b196ffcb1c16d2811f6f2e7644f8bcb840342ce9d6f80a3->enter($__internal_d841b3c943ea50d33b196ffcb1c16d2811f6f2e7644f8bcb840342ce9d6f80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d841b3c943ea50d33b196ffcb1c16d2811f6f2e7644f8bcb840342ce9d6f80a3->leave($__internal_d841b3c943ea50d33b196ffcb1c16d2811f6f2e7644f8bcb840342ce9d6f80a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87353e0677fd4fa2aab003488be85ae086c17b40ce8813ed5a09593e1e7ed61e = $this->env->getExtension("native_profiler");
        $__internal_87353e0677fd4fa2aab003488be85ae086c17b40ce8813ed5a09593e1e7ed61e->enter($__internal_87353e0677fd4fa2aab003488be85ae086c17b40ce8813ed5a09593e1e7ed61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_87353e0677fd4fa2aab003488be85ae086c17b40ce8813ed5a09593e1e7ed61e->leave($__internal_87353e0677fd4fa2aab003488be85ae086c17b40ce8813ed5a09593e1e7ed61e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
