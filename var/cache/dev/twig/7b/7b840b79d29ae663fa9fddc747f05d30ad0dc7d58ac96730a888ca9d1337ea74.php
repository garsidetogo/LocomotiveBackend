<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa15f58eb5b23ff33096a330603351099836f7a58ca0137ee1746301f0e7d28e extends Twig_Template
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
        $__internal_0a8b9f74b5a637156ead9ff05f8fc07f1485abcb440a9d14f094ff163961141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8b9f74b5a637156ead9ff05f8fc07f1485abcb440a9d14f094ff163961141d->enter($__internal_0a8b9f74b5a637156ead9ff05f8fc07f1485abcb440a9d14f094ff163961141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b258c11c50067779b1430f4a5653b26267c2ca8e5bbd072b33ee4e755097c965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b258c11c50067779b1430f4a5653b26267c2ca8e5bbd072b33ee4e755097c965->enter($__internal_b258c11c50067779b1430f4a5653b26267c2ca8e5bbd072b33ee4e755097c965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0a8b9f74b5a637156ead9ff05f8fc07f1485abcb440a9d14f094ff163961141d->leave($__internal_0a8b9f74b5a637156ead9ff05f8fc07f1485abcb440a9d14f094ff163961141d_prof);

        
        $__internal_b258c11c50067779b1430f4a5653b26267c2ca8e5bbd072b33ee4e755097c965->leave($__internal_b258c11c50067779b1430f4a5653b26267c2ca8e5bbd072b33ee4e755097c965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
