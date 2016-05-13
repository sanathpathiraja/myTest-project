<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7faf535b996cf0f49105941393ef2f76cf5bb3b074db6dc3897819d32849b9c1 extends Twig_Template
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
        $__internal_b7555136471f671e232fa635d59fc40a1d289ed96578e99fc0803b710bb1c1f1 = $this->env->getExtension("native_profiler");
        $__internal_b7555136471f671e232fa635d59fc40a1d289ed96578e99fc0803b710bb1c1f1->enter($__internal_b7555136471f671e232fa635d59fc40a1d289ed96578e99fc0803b710bb1c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b7555136471f671e232fa635d59fc40a1d289ed96578e99fc0803b710bb1c1f1->leave($__internal_b7555136471f671e232fa635d59fc40a1d289ed96578e99fc0803b710bb1c1f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
