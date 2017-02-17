<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_3a6dd148a8452b527faabe6a768e23c454c4fddc6bf30fc9f734f5690b1aea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6dd148a8452b527faabe6a768e23c454c4fddc6bf30fc9f734f5690b1aea82->enter($__internal_3a6dd148a8452b527faabe6a768e23c454c4fddc6bf30fc9f734f5690b1aea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_58167188fdd85e85d35276ddea859c426c826a06824f2a907967675d66b84f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58167188fdd85e85d35276ddea859c426c826a06824f2a907967675d66b84f02->enter($__internal_58167188fdd85e85d35276ddea859c426c826a06824f2a907967675d66b84f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3a6dd148a8452b527faabe6a768e23c454c4fddc6bf30fc9f734f5690b1aea82->leave($__internal_3a6dd148a8452b527faabe6a768e23c454c4fddc6bf30fc9f734f5690b1aea82_prof);

        
        $__internal_58167188fdd85e85d35276ddea859c426c826a06824f2a907967675d66b84f02->leave($__internal_58167188fdd85e85d35276ddea859c426c826a06824f2a907967675d66b84f02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
