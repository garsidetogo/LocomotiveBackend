<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_dd906b18dcb8ea687f7cab37894ff6b56440fcc2c531fdb3aa01c551e3f19ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd906b18dcb8ea687f7cab37894ff6b56440fcc2c531fdb3aa01c551e3f19ba2->enter($__internal_dd906b18dcb8ea687f7cab37894ff6b56440fcc2c531fdb3aa01c551e3f19ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_05d639c73087cd2ae7d0190ee68627d50132be48e811d86e37a47d46bdc40ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d639c73087cd2ae7d0190ee68627d50132be48e811d86e37a47d46bdc40ddc->enter($__internal_05d639c73087cd2ae7d0190ee68627d50132be48e811d86e37a47d46bdc40ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dd906b18dcb8ea687f7cab37894ff6b56440fcc2c531fdb3aa01c551e3f19ba2->leave($__internal_dd906b18dcb8ea687f7cab37894ff6b56440fcc2c531fdb3aa01c551e3f19ba2_prof);

        
        $__internal_05d639c73087cd2ae7d0190ee68627d50132be48e811d86e37a47d46bdc40ddc->leave($__internal_05d639c73087cd2ae7d0190ee68627d50132be48e811d86e37a47d46bdc40ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
