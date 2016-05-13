<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_79982044de9a9703240627051259dddab3c4ba8ff3ae7a7d030de2f70cfe64df extends Twig_Template
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
        $__internal_e92f747f8fba4bfe03aea2c458998d6b76e95973034705f7c2a7a138ec095cb8 = $this->env->getExtension("native_profiler");
        $__internal_e92f747f8fba4bfe03aea2c458998d6b76e95973034705f7c2a7a138ec095cb8->enter($__internal_e92f747f8fba4bfe03aea2c458998d6b76e95973034705f7c2a7a138ec095cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e92f747f8fba4bfe03aea2c458998d6b76e95973034705f7c2a7a138ec095cb8->leave($__internal_e92f747f8fba4bfe03aea2c458998d6b76e95973034705f7c2a7a138ec095cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
