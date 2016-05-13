<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0cbb417e5f9cc510348db4b1306562c7c9d13493439fa549d710b36063deb38a extends Twig_Template
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
        $__internal_fbda39acb1584d9df3f887bf664925c45772cd171bda5f3a5ea5620705de258a = $this->env->getExtension("native_profiler");
        $__internal_fbda39acb1584d9df3f887bf664925c45772cd171bda5f3a5ea5620705de258a->enter($__internal_fbda39acb1584d9df3f887bf664925c45772cd171bda5f3a5ea5620705de258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbda39acb1584d9df3f887bf664925c45772cd171bda5f3a5ea5620705de258a->leave($__internal_fbda39acb1584d9df3f887bf664925c45772cd171bda5f3a5ea5620705de258a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
