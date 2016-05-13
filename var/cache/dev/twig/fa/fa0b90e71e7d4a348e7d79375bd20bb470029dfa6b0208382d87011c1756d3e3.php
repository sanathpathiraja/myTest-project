<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_80b1c5dd7e09116aaa1349f08246f512cc3d55c0c7c14fef78ff01139d1346c2 extends Twig_Template
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
        $__internal_2d7abef21783858cdf4bfaecc06e322fbfebd4f931997551d130693f01251456 = $this->env->getExtension("native_profiler");
        $__internal_2d7abef21783858cdf4bfaecc06e322fbfebd4f931997551d130693f01251456->enter($__internal_2d7abef21783858cdf4bfaecc06e322fbfebd4f931997551d130693f01251456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2d7abef21783858cdf4bfaecc06e322fbfebd4f931997551d130693f01251456->leave($__internal_2d7abef21783858cdf4bfaecc06e322fbfebd4f931997551d130693f01251456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
