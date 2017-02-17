<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
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
        $__internal_06203ff4bb4dcef6bde62470f8f24297dcf02b2269b9e0013b36665758c3e448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06203ff4bb4dcef6bde62470f8f24297dcf02b2269b9e0013b36665758c3e448->enter($__internal_06203ff4bb4dcef6bde62470f8f24297dcf02b2269b9e0013b36665758c3e448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_86a84d23718d6a7d798b0887cf61416438814448a23d9b97d134183c580b9a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a84d23718d6a7d798b0887cf61416438814448a23d9b97d134183c580b9a6c->enter($__internal_86a84d23718d6a7d798b0887cf61416438814448a23d9b97d134183c580b9a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_06203ff4bb4dcef6bde62470f8f24297dcf02b2269b9e0013b36665758c3e448->leave($__internal_06203ff4bb4dcef6bde62470f8f24297dcf02b2269b9e0013b36665758c3e448_prof);

        
        $__internal_86a84d23718d6a7d798b0887cf61416438814448a23d9b97d134183c580b9a6c->leave($__internal_86a84d23718d6a7d798b0887cf61416438814448a23d9b97d134183c580b9a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
