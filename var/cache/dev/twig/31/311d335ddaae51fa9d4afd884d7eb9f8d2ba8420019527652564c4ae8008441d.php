<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_67b6c4b75c73ea256d9274ba7abce871d65d9a6f616988fe80da1cc8701da5cf extends Twig_Template
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
        $__internal_2635f940a272c86836f6c87064efaf6ea55a6fe96cf7e3d0374f6115cddf7970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2635f940a272c86836f6c87064efaf6ea55a6fe96cf7e3d0374f6115cddf7970->enter($__internal_2635f940a272c86836f6c87064efaf6ea55a6fe96cf7e3d0374f6115cddf7970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d17bed8d4ad2fd2f35b2ace629579d2433d322fb83279222c12f771aa6ef2750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17bed8d4ad2fd2f35b2ace629579d2433d322fb83279222c12f771aa6ef2750->enter($__internal_d17bed8d4ad2fd2f35b2ace629579d2433d322fb83279222c12f771aa6ef2750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2635f940a272c86836f6c87064efaf6ea55a6fe96cf7e3d0374f6115cddf7970->leave($__internal_2635f940a272c86836f6c87064efaf6ea55a6fe96cf7e3d0374f6115cddf7970_prof);

        
        $__internal_d17bed8d4ad2fd2f35b2ace629579d2433d322fb83279222c12f771aa6ef2750->leave($__internal_d17bed8d4ad2fd2f35b2ace629579d2433d322fb83279222c12f771aa6ef2750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
