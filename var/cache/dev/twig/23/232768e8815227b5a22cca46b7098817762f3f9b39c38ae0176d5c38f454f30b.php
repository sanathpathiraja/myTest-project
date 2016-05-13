<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_038d3584df2a2c5124f84741277d1ac8eae3234c83d83d9cbd6ada4ee28d8377 extends Twig_Template
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
        $__internal_59a789549fef058bc06109d844f13d2e6699946d818e01870ae3833a53f5b7c5 = $this->env->getExtension("native_profiler");
        $__internal_59a789549fef058bc06109d844f13d2e6699946d818e01870ae3833a53f5b7c5->enter($__internal_59a789549fef058bc06109d844f13d2e6699946d818e01870ae3833a53f5b7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59a789549fef058bc06109d844f13d2e6699946d818e01870ae3833a53f5b7c5->leave($__internal_59a789549fef058bc06109d844f13d2e6699946d818e01870ae3833a53f5b7c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
