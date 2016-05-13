<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_66c091c73bdefb6d58bc75ef087991ad976ac750662a141de1d50cddef0da5d5 extends Twig_Template
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
        $__internal_094d23dede8505a1e80181d65954d4d01ff0613d24d8be68aa6d96f39c8f4d54 = $this->env->getExtension("native_profiler");
        $__internal_094d23dede8505a1e80181d65954d4d01ff0613d24d8be68aa6d96f39c8f4d54->enter($__internal_094d23dede8505a1e80181d65954d4d01ff0613d24d8be68aa6d96f39c8f4d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_094d23dede8505a1e80181d65954d4d01ff0613d24d8be68aa6d96f39c8f4d54->leave($__internal_094d23dede8505a1e80181d65954d4d01ff0613d24d8be68aa6d96f39c8f4d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
