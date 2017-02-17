<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_31887feb3c8a0044fdd14efb7c1bb137b9ad084306bfd25d46f9db33a4ac5c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31887feb3c8a0044fdd14efb7c1bb137b9ad084306bfd25d46f9db33a4ac5c26->enter($__internal_31887feb3c8a0044fdd14efb7c1bb137b9ad084306bfd25d46f9db33a4ac5c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c77dc2f6a9b015978beae92193559c130483d7e6dce8081b6c31717d81f78cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77dc2f6a9b015978beae92193559c130483d7e6dce8081b6c31717d81f78cc5->enter($__internal_c77dc2f6a9b015978beae92193559c130483d7e6dce8081b6c31717d81f78cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_31887feb3c8a0044fdd14efb7c1bb137b9ad084306bfd25d46f9db33a4ac5c26->leave($__internal_31887feb3c8a0044fdd14efb7c1bb137b9ad084306bfd25d46f9db33a4ac5c26_prof);

        
        $__internal_c77dc2f6a9b015978beae92193559c130483d7e6dce8081b6c31717d81f78cc5->leave($__internal_c77dc2f6a9b015978beae92193559c130483d7e6dce8081b6c31717d81f78cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
