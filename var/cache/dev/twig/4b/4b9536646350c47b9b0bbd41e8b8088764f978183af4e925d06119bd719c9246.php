<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_6650dd6ed9f90201cb02c52724e7af6ff3b65b8d3a9293188651697f13e39e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6650dd6ed9f90201cb02c52724e7af6ff3b65b8d3a9293188651697f13e39e73->enter($__internal_6650dd6ed9f90201cb02c52724e7af6ff3b65b8d3a9293188651697f13e39e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_61febeaea304f7d25cd6d81148a3959822c042ea429e768cf630edcf8c2c0522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61febeaea304f7d25cd6d81148a3959822c042ea429e768cf630edcf8c2c0522->enter($__internal_61febeaea304f7d25cd6d81148a3959822c042ea429e768cf630edcf8c2c0522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6650dd6ed9f90201cb02c52724e7af6ff3b65b8d3a9293188651697f13e39e73->leave($__internal_6650dd6ed9f90201cb02c52724e7af6ff3b65b8d3a9293188651697f13e39e73_prof);

        
        $__internal_61febeaea304f7d25cd6d81148a3959822c042ea429e768cf630edcf8c2c0522->leave($__internal_61febeaea304f7d25cd6d81148a3959822c042ea429e768cf630edcf8c2c0522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
