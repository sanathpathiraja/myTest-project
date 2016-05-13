<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_52b9c105b4e20b91a8a33a8dc995ae6cdfe1943f7e00a1050078151f7ba78f10 extends Twig_Template
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
        $__internal_374fcdca19daeb9120b13babf97389d7afed12885c75613bdd4074b55b8d1d60 = $this->env->getExtension("native_profiler");
        $__internal_374fcdca19daeb9120b13babf97389d7afed12885c75613bdd4074b55b8d1d60->enter($__internal_374fcdca19daeb9120b13babf97389d7afed12885c75613bdd4074b55b8d1d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_374fcdca19daeb9120b13babf97389d7afed12885c75613bdd4074b55b8d1d60->leave($__internal_374fcdca19daeb9120b13babf97389d7afed12885c75613bdd4074b55b8d1d60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
