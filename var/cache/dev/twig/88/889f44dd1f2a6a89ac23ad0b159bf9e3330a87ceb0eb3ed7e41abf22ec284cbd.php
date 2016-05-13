<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6224a0fa9eed0ef1c6b54b96b9cdf3dde9e637eb1480eb7c673cd8c3103d3507 extends Twig_Template
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
        $__internal_dc96635153e5ea1d63fb956fd605893f8e76bab534d7edefb478465003880fa9 = $this->env->getExtension("native_profiler");
        $__internal_dc96635153e5ea1d63fb956fd605893f8e76bab534d7edefb478465003880fa9->enter($__internal_dc96635153e5ea1d63fb956fd605893f8e76bab534d7edefb478465003880fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dc96635153e5ea1d63fb956fd605893f8e76bab534d7edefb478465003880fa9->leave($__internal_dc96635153e5ea1d63fb956fd605893f8e76bab534d7edefb478465003880fa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
