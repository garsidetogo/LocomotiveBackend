<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_995c7d0184286fe74f54ee9e72827a8348a12675a07a6ff09ae19c1abfa1fb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995c7d0184286fe74f54ee9e72827a8348a12675a07a6ff09ae19c1abfa1fb69->enter($__internal_995c7d0184286fe74f54ee9e72827a8348a12675a07a6ff09ae19c1abfa1fb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3701335d5b5d59b6e134ce7131da505f6d11a669bc25f935876016ee8239b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3701335d5b5d59b6e134ce7131da505f6d11a669bc25f935876016ee8239b3d6->enter($__internal_3701335d5b5d59b6e134ce7131da505f6d11a669bc25f935876016ee8239b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_995c7d0184286fe74f54ee9e72827a8348a12675a07a6ff09ae19c1abfa1fb69->leave($__internal_995c7d0184286fe74f54ee9e72827a8348a12675a07a6ff09ae19c1abfa1fb69_prof);

        
        $__internal_3701335d5b5d59b6e134ce7131da505f6d11a669bc25f935876016ee8239b3d6->leave($__internal_3701335d5b5d59b6e134ce7131da505f6d11a669bc25f935876016ee8239b3d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
