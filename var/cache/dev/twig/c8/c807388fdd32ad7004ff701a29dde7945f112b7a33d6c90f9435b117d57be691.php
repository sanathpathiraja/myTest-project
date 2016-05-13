<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_46f65b24fef302defe3e3f5aed87d6a57112a692f0a377adf7c13ebc86be5c82 extends Twig_Template
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
        $__internal_d1b9da166f9c19ee769f266a9ad2db532b3cc29735c15450ec9e426f718e70ad = $this->env->getExtension("native_profiler");
        $__internal_d1b9da166f9c19ee769f266a9ad2db532b3cc29735c15450ec9e426f718e70ad->enter($__internal_d1b9da166f9c19ee769f266a9ad2db532b3cc29735c15450ec9e426f718e70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d1b9da166f9c19ee769f266a9ad2db532b3cc29735c15450ec9e426f718e70ad->leave($__internal_d1b9da166f9c19ee769f266a9ad2db532b3cc29735c15450ec9e426f718e70ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
