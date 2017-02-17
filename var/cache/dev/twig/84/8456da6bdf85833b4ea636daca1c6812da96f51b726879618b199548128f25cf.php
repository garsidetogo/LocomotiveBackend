<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_130f1aae5fb1f2edca868dca51bc325092dc39c0a8ac85fe6a9574f7ab9718a7 extends Twig_Template
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
        $__internal_fccfb41c39fd9c01e2a881630494cccec123d6bf518e4d50d823c323654abb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccfb41c39fd9c01e2a881630494cccec123d6bf518e4d50d823c323654abb6a->enter($__internal_fccfb41c39fd9c01e2a881630494cccec123d6bf518e4d50d823c323654abb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_219628c6d73d305ce14c3f4e970b2bff6a9f06e0c2b2f0612d3173a84b558e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219628c6d73d305ce14c3f4e970b2bff6a9f06e0c2b2f0612d3173a84b558e51->enter($__internal_219628c6d73d305ce14c3f4e970b2bff6a9f06e0c2b2f0612d3173a84b558e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fccfb41c39fd9c01e2a881630494cccec123d6bf518e4d50d823c323654abb6a->leave($__internal_fccfb41c39fd9c01e2a881630494cccec123d6bf518e4d50d823c323654abb6a_prof);

        
        $__internal_219628c6d73d305ce14c3f4e970b2bff6a9f06e0c2b2f0612d3173a84b558e51->leave($__internal_219628c6d73d305ce14c3f4e970b2bff6a9f06e0c2b2f0612d3173a84b558e51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
