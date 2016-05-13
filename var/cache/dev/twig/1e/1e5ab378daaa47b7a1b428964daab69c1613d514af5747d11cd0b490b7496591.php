<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_25cf616ea82c12d19c94ee0e1d5dbf1e44fac5b5face46c0c30fd8304a2175cd extends Twig_Template
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
        $__internal_37de860327a38c2b04d4e719b98a7bc258d0e73304a55f4f8f9ff23b3f97d5cc = $this->env->getExtension("native_profiler");
        $__internal_37de860327a38c2b04d4e719b98a7bc258d0e73304a55f4f8f9ff23b3f97d5cc->enter($__internal_37de860327a38c2b04d4e719b98a7bc258d0e73304a55f4f8f9ff23b3f97d5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_37de860327a38c2b04d4e719b98a7bc258d0e73304a55f4f8f9ff23b3f97d5cc->leave($__internal_37de860327a38c2b04d4e719b98a7bc258d0e73304a55f4f8f9ff23b3f97d5cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
