<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9fcfa77b1e118c36877a5aa2db4cb885e0b4b8d0d90eb9a74be6891212a86b8e extends Twig_Template
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
        $__internal_144f364e47b815600edadb0bca6a420eeb271f134600b60ddae8f650fcf600d8 = $this->env->getExtension("native_profiler");
        $__internal_144f364e47b815600edadb0bca6a420eeb271f134600b60ddae8f650fcf600d8->enter($__internal_144f364e47b815600edadb0bca6a420eeb271f134600b60ddae8f650fcf600d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_144f364e47b815600edadb0bca6a420eeb271f134600b60ddae8f650fcf600d8->leave($__internal_144f364e47b815600edadb0bca6a420eeb271f134600b60ddae8f650fcf600d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
