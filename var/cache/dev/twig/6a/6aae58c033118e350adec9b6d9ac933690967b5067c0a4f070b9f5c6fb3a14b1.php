<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0b252847dc6698f38821fe2d0b782b51ed16713c0a77ef21c0ed8175d576a0dd extends Twig_Template
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
        $__internal_0ed6521e755d1e02342ca4758046a30f35717c16cc990aec0901ac921bff021d = $this->env->getExtension("native_profiler");
        $__internal_0ed6521e755d1e02342ca4758046a30f35717c16cc990aec0901ac921bff021d->enter($__internal_0ed6521e755d1e02342ca4758046a30f35717c16cc990aec0901ac921bff021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0ed6521e755d1e02342ca4758046a30f35717c16cc990aec0901ac921bff021d->leave($__internal_0ed6521e755d1e02342ca4758046a30f35717c16cc990aec0901ac921bff021d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
