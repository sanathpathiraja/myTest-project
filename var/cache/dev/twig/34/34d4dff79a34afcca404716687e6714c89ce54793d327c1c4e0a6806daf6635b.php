<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2949d199091383b387bc7ad331087e1be8ca544c4b0d4566e6120a78234bb5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b5b02bfedea94c67b86d9141a81a5890f94583425e51ea6ba6e3a623b0c55838 = $this->env->getExtension("native_profiler");
        $__internal_b5b02bfedea94c67b86d9141a81a5890f94583425e51ea6ba6e3a623b0c55838->enter($__internal_b5b02bfedea94c67b86d9141a81a5890f94583425e51ea6ba6e3a623b0c55838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b02bfedea94c67b86d9141a81a5890f94583425e51ea6ba6e3a623b0c55838->leave($__internal_b5b02bfedea94c67b86d9141a81a5890f94583425e51ea6ba6e3a623b0c55838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d096ca1e98b6682a8706a439e6c63c448c5ce4cc04c2228d7e0202188ffd79bc = $this->env->getExtension("native_profiler");
        $__internal_d096ca1e98b6682a8706a439e6c63c448c5ce4cc04c2228d7e0202188ffd79bc->enter($__internal_d096ca1e98b6682a8706a439e6c63c448c5ce4cc04c2228d7e0202188ffd79bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d096ca1e98b6682a8706a439e6c63c448c5ce4cc04c2228d7e0202188ffd79bc->leave($__internal_d096ca1e98b6682a8706a439e6c63c448c5ce4cc04c2228d7e0202188ffd79bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_709156734d86ba679c7fe45b509381af44537754f43ba26432d553457f24e5b7 = $this->env->getExtension("native_profiler");
        $__internal_709156734d86ba679c7fe45b509381af44537754f43ba26432d553457f24e5b7->enter($__internal_709156734d86ba679c7fe45b509381af44537754f43ba26432d553457f24e5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_709156734d86ba679c7fe45b509381af44537754f43ba26432d553457f24e5b7->leave($__internal_709156734d86ba679c7fe45b509381af44537754f43ba26432d553457f24e5b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f9ca7ca1389bda2f8236044623ce704bb41772d4c3a4b764a41515a2b240bf0 = $this->env->getExtension("native_profiler");
        $__internal_6f9ca7ca1389bda2f8236044623ce704bb41772d4c3a4b764a41515a2b240bf0->enter($__internal_6f9ca7ca1389bda2f8236044623ce704bb41772d4c3a4b764a41515a2b240bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6f9ca7ca1389bda2f8236044623ce704bb41772d4c3a4b764a41515a2b240bf0->leave($__internal_6f9ca7ca1389bda2f8236044623ce704bb41772d4c3a4b764a41515a2b240bf0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
