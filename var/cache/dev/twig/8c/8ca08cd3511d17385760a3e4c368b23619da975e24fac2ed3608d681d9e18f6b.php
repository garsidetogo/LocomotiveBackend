<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5dd881581bc15836809338988f2ffb1d30def9304e678fa262239ebe510c712a extends Twig_Template
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
        $__internal_57b6909b53ade0e8462c58685f1556483caf7175c93b106b9592bb10d919b81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b6909b53ade0e8462c58685f1556483caf7175c93b106b9592bb10d919b81e->enter($__internal_57b6909b53ade0e8462c58685f1556483caf7175c93b106b9592bb10d919b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7167f7cae0f89d2d3b388914456077b5b29515b6fff040f9c389f14b5069ee92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167f7cae0f89d2d3b388914456077b5b29515b6fff040f9c389f14b5069ee92->enter($__internal_7167f7cae0f89d2d3b388914456077b5b29515b6fff040f9c389f14b5069ee92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_57b6909b53ade0e8462c58685f1556483caf7175c93b106b9592bb10d919b81e->leave($__internal_57b6909b53ade0e8462c58685f1556483caf7175c93b106b9592bb10d919b81e_prof);

        
        $__internal_7167f7cae0f89d2d3b388914456077b5b29515b6fff040f9c389f14b5069ee92->leave($__internal_7167f7cae0f89d2d3b388914456077b5b29515b6fff040f9c389f14b5069ee92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
