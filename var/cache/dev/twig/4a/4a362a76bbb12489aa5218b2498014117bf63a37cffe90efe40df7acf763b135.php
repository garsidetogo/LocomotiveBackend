<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_293d782910d8a0c6be208cff21f9cb21f2bbbf164d8c2d64d9567502328e3592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293d782910d8a0c6be208cff21f9cb21f2bbbf164d8c2d64d9567502328e3592->enter($__internal_293d782910d8a0c6be208cff21f9cb21f2bbbf164d8c2d64d9567502328e3592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1d679d8b980433408cc1009a4dd7a1034b7e20e0fe12f09619032177ed08ed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d679d8b980433408cc1009a4dd7a1034b7e20e0fe12f09619032177ed08ed2b->enter($__internal_1d679d8b980433408cc1009a4dd7a1034b7e20e0fe12f09619032177ed08ed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_293d782910d8a0c6be208cff21f9cb21f2bbbf164d8c2d64d9567502328e3592->leave($__internal_293d782910d8a0c6be208cff21f9cb21f2bbbf164d8c2d64d9567502328e3592_prof);

        
        $__internal_1d679d8b980433408cc1009a4dd7a1034b7e20e0fe12f09619032177ed08ed2b->leave($__internal_1d679d8b980433408cc1009a4dd7a1034b7e20e0fe12f09619032177ed08ed2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
