<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_aa26e86fe35778cbe9dc072eb28d53325f273851cc5df8090c676a287b5986e9 extends Twig_Template
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
        $__internal_7345065647b2d6a8dc101f12cc01399478a6fc4470139e50e7ea8bd1bef4063b = $this->env->getExtension("native_profiler");
        $__internal_7345065647b2d6a8dc101f12cc01399478a6fc4470139e50e7ea8bd1bef4063b->enter($__internal_7345065647b2d6a8dc101f12cc01399478a6fc4470139e50e7ea8bd1bef4063b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7345065647b2d6a8dc101f12cc01399478a6fc4470139e50e7ea8bd1bef4063b->leave($__internal_7345065647b2d6a8dc101f12cc01399478a6fc4470139e50e7ea8bd1bef4063b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
