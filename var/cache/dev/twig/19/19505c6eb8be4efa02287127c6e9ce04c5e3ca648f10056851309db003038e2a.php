<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2005943777e25ecdd8eba186bc8282ea54962b101ca48bfb6d040848e55f2d62 extends Twig_Template
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
        $__internal_7f5daa030c7e4660bdb6f8c65aea1ac6dc1c8cea00e8a5e87a4c1ec75b960677 = $this->env->getExtension("native_profiler");
        $__internal_7f5daa030c7e4660bdb6f8c65aea1ac6dc1c8cea00e8a5e87a4c1ec75b960677->enter($__internal_7f5daa030c7e4660bdb6f8c65aea1ac6dc1c8cea00e8a5e87a4c1ec75b960677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7f5daa030c7e4660bdb6f8c65aea1ac6dc1c8cea00e8a5e87a4c1ec75b960677->leave($__internal_7f5daa030c7e4660bdb6f8c65aea1ac6dc1c8cea00e8a5e87a4c1ec75b960677_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
