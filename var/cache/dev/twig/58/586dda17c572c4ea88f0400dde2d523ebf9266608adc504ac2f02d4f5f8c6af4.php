<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_071b73103fae266859d769f9e7eb6b009c3b262663bdd76cc83e432648f75d0e extends Twig_Template
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
        $__internal_2057db7de6b574ec902a12cc155fd22f6bdd488598a14bfaf3bba524e3bf2180 = $this->env->getExtension("native_profiler");
        $__internal_2057db7de6b574ec902a12cc155fd22f6bdd488598a14bfaf3bba524e3bf2180->enter($__internal_2057db7de6b574ec902a12cc155fd22f6bdd488598a14bfaf3bba524e3bf2180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2057db7de6b574ec902a12cc155fd22f6bdd488598a14bfaf3bba524e3bf2180->leave($__internal_2057db7de6b574ec902a12cc155fd22f6bdd488598a14bfaf3bba524e3bf2180_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
