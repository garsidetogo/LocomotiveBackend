<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_adc3fa01c438578e80266b06f070a7e85219c98552a1af3f0d3b5281a6768a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc3fa01c438578e80266b06f070a7e85219c98552a1af3f0d3b5281a6768a6d->enter($__internal_adc3fa01c438578e80266b06f070a7e85219c98552a1af3f0d3b5281a6768a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3c6d8a2d7e65770cc70af31e7b71e78f0ffd616dc262e733ec51016788f86386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6d8a2d7e65770cc70af31e7b71e78f0ffd616dc262e733ec51016788f86386->enter($__internal_3c6d8a2d7e65770cc70af31e7b71e78f0ffd616dc262e733ec51016788f86386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_adc3fa01c438578e80266b06f070a7e85219c98552a1af3f0d3b5281a6768a6d->leave($__internal_adc3fa01c438578e80266b06f070a7e85219c98552a1af3f0d3b5281a6768a6d_prof);

        
        $__internal_3c6d8a2d7e65770cc70af31e7b71e78f0ffd616dc262e733ec51016788f86386->leave($__internal_3c6d8a2d7e65770cc70af31e7b71e78f0ffd616dc262e733ec51016788f86386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
