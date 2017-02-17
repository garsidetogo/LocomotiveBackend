<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_69aeb742a2a0171da239a329bd3e34cc27cd7f0ecb86822e84daac69a1052133 extends Twig_Template
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
        $__internal_ab5613095183e6df8ad72714b14264ab1c12ceeef96f10088e8248238a283c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5613095183e6df8ad72714b14264ab1c12ceeef96f10088e8248238a283c44->enter($__internal_ab5613095183e6df8ad72714b14264ab1c12ceeef96f10088e8248238a283c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_823130c01ac8e1fa3b90ac85dc07e2b0130f9b0212f1cb9f32b188821aca4f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823130c01ac8e1fa3b90ac85dc07e2b0130f9b0212f1cb9f32b188821aca4f7e->enter($__internal_823130c01ac8e1fa3b90ac85dc07e2b0130f9b0212f1cb9f32b188821aca4f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ab5613095183e6df8ad72714b14264ab1c12ceeef96f10088e8248238a283c44->leave($__internal_ab5613095183e6df8ad72714b14264ab1c12ceeef96f10088e8248238a283c44_prof);

        
        $__internal_823130c01ac8e1fa3b90ac85dc07e2b0130f9b0212f1cb9f32b188821aca4f7e->leave($__internal_823130c01ac8e1fa3b90ac85dc07e2b0130f9b0212f1cb9f32b188821aca4f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
