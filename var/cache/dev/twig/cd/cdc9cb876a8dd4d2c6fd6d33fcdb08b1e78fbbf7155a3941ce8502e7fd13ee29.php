<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_34bbf373aae22be7c1540858cb379778a24fc650fd99a4c3528c8084d04dfe48 extends Twig_Template
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
        $__internal_cdb0756cc0b4f397566dac0a1a086225abf6dd7af6361a3408f1241ce20a9ec9 = $this->env->getExtension("native_profiler");
        $__internal_cdb0756cc0b4f397566dac0a1a086225abf6dd7af6361a3408f1241ce20a9ec9->enter($__internal_cdb0756cc0b4f397566dac0a1a086225abf6dd7af6361a3408f1241ce20a9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cdb0756cc0b4f397566dac0a1a086225abf6dd7af6361a3408f1241ce20a9ec9->leave($__internal_cdb0756cc0b4f397566dac0a1a086225abf6dd7af6361a3408f1241ce20a9ec9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
