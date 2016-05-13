<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5fa0d18a0a915302fa68a3416b005676a1411d78baaac9ca79cc40c8030e157e extends Twig_Template
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
        $__internal_26e3864f339f699b3629d8e891ea81c15006b5ffdde9576eca4081ebdab6e3e8 = $this->env->getExtension("native_profiler");
        $__internal_26e3864f339f699b3629d8e891ea81c15006b5ffdde9576eca4081ebdab6e3e8->enter($__internal_26e3864f339f699b3629d8e891ea81c15006b5ffdde9576eca4081ebdab6e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_26e3864f339f699b3629d8e891ea81c15006b5ffdde9576eca4081ebdab6e3e8->leave($__internal_26e3864f339f699b3629d8e891ea81c15006b5ffdde9576eca4081ebdab6e3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
