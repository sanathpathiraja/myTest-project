<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_74d431c8c541014acc45e88a3dda50bb2e8a3650cbedcf2c55cbb70756d684bf extends Twig_Template
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
        $__internal_02161ad98417b8c644872fb4f079586c1a3605be4da26a687f79dce74511d968 = $this->env->getExtension("native_profiler");
        $__internal_02161ad98417b8c644872fb4f079586c1a3605be4da26a687f79dce74511d968->enter($__internal_02161ad98417b8c644872fb4f079586c1a3605be4da26a687f79dce74511d968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_02161ad98417b8c644872fb4f079586c1a3605be4da26a687f79dce74511d968->leave($__internal_02161ad98417b8c644872fb4f079586c1a3605be4da26a687f79dce74511d968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
