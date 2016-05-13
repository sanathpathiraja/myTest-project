<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b016d13a72dd8ce9f786e7171e4658c1eeaa7519fbb415c1ecb84cb844628d82 extends Twig_Template
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
        $__internal_24612047bce2b57e67175f719e303c024a139646c40b95c0b1412af8beabbde8 = $this->env->getExtension("native_profiler");
        $__internal_24612047bce2b57e67175f719e303c024a139646c40b95c0b1412af8beabbde8->enter($__internal_24612047bce2b57e67175f719e303c024a139646c40b95c0b1412af8beabbde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_24612047bce2b57e67175f719e303c024a139646c40b95c0b1412af8beabbde8->leave($__internal_24612047bce2b57e67175f719e303c024a139646c40b95c0b1412af8beabbde8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
