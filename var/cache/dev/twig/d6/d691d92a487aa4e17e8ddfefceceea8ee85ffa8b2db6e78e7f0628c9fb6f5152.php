<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9b60f3539464c2c219cebf54e4958370978ec4ad77dfd104d4c2c28fe5af2bd8 extends Twig_Template
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
        $__internal_52323c946021e41b739993988bf729b94d2cdf12e11915f1054523316430e4e8 = $this->env->getExtension("native_profiler");
        $__internal_52323c946021e41b739993988bf729b94d2cdf12e11915f1054523316430e4e8->enter($__internal_52323c946021e41b739993988bf729b94d2cdf12e11915f1054523316430e4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_52323c946021e41b739993988bf729b94d2cdf12e11915f1054523316430e4e8->leave($__internal_52323c946021e41b739993988bf729b94d2cdf12e11915f1054523316430e4e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
