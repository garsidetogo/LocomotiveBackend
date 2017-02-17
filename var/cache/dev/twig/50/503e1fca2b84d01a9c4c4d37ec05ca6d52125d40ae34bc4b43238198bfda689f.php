<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_b9cba8c00627e7cf35e2d28b7683615c17f24ed708aa422b4d64951fc70e8df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cba8c00627e7cf35e2d28b7683615c17f24ed708aa422b4d64951fc70e8df2->enter($__internal_b9cba8c00627e7cf35e2d28b7683615c17f24ed708aa422b4d64951fc70e8df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_eae5e34eec46ff5995f4b29c72bf0a8a3a61845d789fc1e8e33d943132e07418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae5e34eec46ff5995f4b29c72bf0a8a3a61845d789fc1e8e33d943132e07418->enter($__internal_eae5e34eec46ff5995f4b29c72bf0a8a3a61845d789fc1e8e33d943132e07418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b9cba8c00627e7cf35e2d28b7683615c17f24ed708aa422b4d64951fc70e8df2->leave($__internal_b9cba8c00627e7cf35e2d28b7683615c17f24ed708aa422b4d64951fc70e8df2_prof);

        
        $__internal_eae5e34eec46ff5995f4b29c72bf0a8a3a61845d789fc1e8e33d943132e07418->leave($__internal_eae5e34eec46ff5995f4b29c72bf0a8a3a61845d789fc1e8e33d943132e07418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
