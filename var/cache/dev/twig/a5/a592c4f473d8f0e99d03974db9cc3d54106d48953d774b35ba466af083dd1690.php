<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_29ffc16c205eac140ecdab459c695f3f1acd1ff3662aa43f10e0e5ea546df72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ffc16c205eac140ecdab459c695f3f1acd1ff3662aa43f10e0e5ea546df72f->enter($__internal_29ffc16c205eac140ecdab459c695f3f1acd1ff3662aa43f10e0e5ea546df72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3a345f7f517e7db29cfafc0f53d63acd988f344b3f432bdbaa89fdcd43e72115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a345f7f517e7db29cfafc0f53d63acd988f344b3f432bdbaa89fdcd43e72115->enter($__internal_3a345f7f517e7db29cfafc0f53d63acd988f344b3f432bdbaa89fdcd43e72115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_29ffc16c205eac140ecdab459c695f3f1acd1ff3662aa43f10e0e5ea546df72f->leave($__internal_29ffc16c205eac140ecdab459c695f3f1acd1ff3662aa43f10e0e5ea546df72f_prof);

        
        $__internal_3a345f7f517e7db29cfafc0f53d63acd988f344b3f432bdbaa89fdcd43e72115->leave($__internal_3a345f7f517e7db29cfafc0f53d63acd988f344b3f432bdbaa89fdcd43e72115_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
