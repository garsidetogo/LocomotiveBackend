<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a3115c01f0f98af2e3fa2fd019f03553964fb6866ffe8d8c011a7e57ec5b13ac extends Twig_Template
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
        $__internal_f6d880638ca4539fe3db02fef471d286526ff8903f73a2bede07f950c68f6b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d880638ca4539fe3db02fef471d286526ff8903f73a2bede07f950c68f6b5c->enter($__internal_f6d880638ca4539fe3db02fef471d286526ff8903f73a2bede07f950c68f6b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0228ec4179d2778c957da15564493e791adcd98d42204d842f12b8bf27f3f6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0228ec4179d2778c957da15564493e791adcd98d42204d842f12b8bf27f3f6d3->enter($__internal_0228ec4179d2778c957da15564493e791adcd98d42204d842f12b8bf27f3f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f6d880638ca4539fe3db02fef471d286526ff8903f73a2bede07f950c68f6b5c->leave($__internal_f6d880638ca4539fe3db02fef471d286526ff8903f73a2bede07f950c68f6b5c_prof);

        
        $__internal_0228ec4179d2778c957da15564493e791adcd98d42204d842f12b8bf27f3f6d3->leave($__internal_0228ec4179d2778c957da15564493e791adcd98d42204d842f12b8bf27f3f6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
