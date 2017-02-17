<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_0c6b4027f07a9fadc3ae1774f0968f4b9e5f1a328dec27bdea077f513d4911e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6b4027f07a9fadc3ae1774f0968f4b9e5f1a328dec27bdea077f513d4911e3->enter($__internal_0c6b4027f07a9fadc3ae1774f0968f4b9e5f1a328dec27bdea077f513d4911e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_af0d60bbc55dc21f760fd9dc215bc4a3f8123b52f6f93fad4638bd644631a7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0d60bbc55dc21f760fd9dc215bc4a3f8123b52f6f93fad4638bd644631a7ad->enter($__internal_af0d60bbc55dc21f760fd9dc215bc4a3f8123b52f6f93fad4638bd644631a7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0c6b4027f07a9fadc3ae1774f0968f4b9e5f1a328dec27bdea077f513d4911e3->leave($__internal_0c6b4027f07a9fadc3ae1774f0968f4b9e5f1a328dec27bdea077f513d4911e3_prof);

        
        $__internal_af0d60bbc55dc21f760fd9dc215bc4a3f8123b52f6f93fad4638bd644631a7ad->leave($__internal_af0d60bbc55dc21f760fd9dc215bc4a3f8123b52f6f93fad4638bd644631a7ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
