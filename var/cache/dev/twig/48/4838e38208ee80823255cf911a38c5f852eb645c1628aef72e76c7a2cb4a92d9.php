<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_2fa613620c44e9163c1497ab6ae3e8061dee35f2b431756057839e1339cb779e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa613620c44e9163c1497ab6ae3e8061dee35f2b431756057839e1339cb779e->enter($__internal_2fa613620c44e9163c1497ab6ae3e8061dee35f2b431756057839e1339cb779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b802b1f060948aa1cf4401d91f0e4afe17555324b4faf6b92eb883208fd041df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b802b1f060948aa1cf4401d91f0e4afe17555324b4faf6b92eb883208fd041df->enter($__internal_b802b1f060948aa1cf4401d91f0e4afe17555324b4faf6b92eb883208fd041df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2fa613620c44e9163c1497ab6ae3e8061dee35f2b431756057839e1339cb779e->leave($__internal_2fa613620c44e9163c1497ab6ae3e8061dee35f2b431756057839e1339cb779e_prof);

        
        $__internal_b802b1f060948aa1cf4401d91f0e4afe17555324b4faf6b92eb883208fd041df->leave($__internal_b802b1f060948aa1cf4401d91f0e4afe17555324b4faf6b92eb883208fd041df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
