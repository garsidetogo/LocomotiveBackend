<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_8cd640d80dfd63d33cd1f6118f331792e215ba641dd1225987706c8c51ad6806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd640d80dfd63d33cd1f6118f331792e215ba641dd1225987706c8c51ad6806->enter($__internal_8cd640d80dfd63d33cd1f6118f331792e215ba641dd1225987706c8c51ad6806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_131d3fced8116ce9063a898a2bdeed01c6f4502e877d66557807970937463f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131d3fced8116ce9063a898a2bdeed01c6f4502e877d66557807970937463f1f->enter($__internal_131d3fced8116ce9063a898a2bdeed01c6f4502e877d66557807970937463f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8cd640d80dfd63d33cd1f6118f331792e215ba641dd1225987706c8c51ad6806->leave($__internal_8cd640d80dfd63d33cd1f6118f331792e215ba641dd1225987706c8c51ad6806_prof);

        
        $__internal_131d3fced8116ce9063a898a2bdeed01c6f4502e877d66557807970937463f1f->leave($__internal_131d3fced8116ce9063a898a2bdeed01c6f4502e877d66557807970937463f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
