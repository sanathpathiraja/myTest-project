<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_60bb0e752ce5e87d05f3a7f5590010d04c625f6bf588b347dc779199b11fb8e7 extends Twig_Template
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
        $__internal_72b0005bb1c190c541050f5fdc89bd21d870be2a78a23cef27fbf9682dbf2f55 = $this->env->getExtension("native_profiler");
        $__internal_72b0005bb1c190c541050f5fdc89bd21d870be2a78a23cef27fbf9682dbf2f55->enter($__internal_72b0005bb1c190c541050f5fdc89bd21d870be2a78a23cef27fbf9682dbf2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_72b0005bb1c190c541050f5fdc89bd21d870be2a78a23cef27fbf9682dbf2f55->leave($__internal_72b0005bb1c190c541050f5fdc89bd21d870be2a78a23cef27fbf9682dbf2f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
