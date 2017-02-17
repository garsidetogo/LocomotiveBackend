<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_1f133333b73eec5df3023e3414a8dac7736fb805f01610bc99672684f7821bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f133333b73eec5df3023e3414a8dac7736fb805f01610bc99672684f7821bac->enter($__internal_1f133333b73eec5df3023e3414a8dac7736fb805f01610bc99672684f7821bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_43b49e216568bf803518d4f7d94716ec7f82ced033c380f5db312b4be6340476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b49e216568bf803518d4f7d94716ec7f82ced033c380f5db312b4be6340476->enter($__internal_43b49e216568bf803518d4f7d94716ec7f82ced033c380f5db312b4be6340476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1f133333b73eec5df3023e3414a8dac7736fb805f01610bc99672684f7821bac->leave($__internal_1f133333b73eec5df3023e3414a8dac7736fb805f01610bc99672684f7821bac_prof);

        
        $__internal_43b49e216568bf803518d4f7d94716ec7f82ced033c380f5db312b4be6340476->leave($__internal_43b49e216568bf803518d4f7d94716ec7f82ced033c380f5db312b4be6340476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
