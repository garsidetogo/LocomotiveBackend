<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_09df389a2c82caefe4205f4a650a887392a2612698052ea97374088a6f1dea36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09df389a2c82caefe4205f4a650a887392a2612698052ea97374088a6f1dea36->enter($__internal_09df389a2c82caefe4205f4a650a887392a2612698052ea97374088a6f1dea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_467e79f31e8741712d3a38c3caf23f31746adb70d017ab4bb75609cdca3623b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467e79f31e8741712d3a38c3caf23f31746adb70d017ab4bb75609cdca3623b7->enter($__internal_467e79f31e8741712d3a38c3caf23f31746adb70d017ab4bb75609cdca3623b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_09df389a2c82caefe4205f4a650a887392a2612698052ea97374088a6f1dea36->leave($__internal_09df389a2c82caefe4205f4a650a887392a2612698052ea97374088a6f1dea36_prof);

        
        $__internal_467e79f31e8741712d3a38c3caf23f31746adb70d017ab4bb75609cdca3623b7->leave($__internal_467e79f31e8741712d3a38c3caf23f31746adb70d017ab4bb75609cdca3623b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
