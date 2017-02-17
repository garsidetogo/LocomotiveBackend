<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_a87a6640207573e55c0785eb5d11dd26193c44f34e846367509ea1cbfb286414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87a6640207573e55c0785eb5d11dd26193c44f34e846367509ea1cbfb286414->enter($__internal_a87a6640207573e55c0785eb5d11dd26193c44f34e846367509ea1cbfb286414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_366a59f12b67a07de0427a9380ffc9e39815c5250e21d4994b3822d8f5307d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366a59f12b67a07de0427a9380ffc9e39815c5250e21d4994b3822d8f5307d58->enter($__internal_366a59f12b67a07de0427a9380ffc9e39815c5250e21d4994b3822d8f5307d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a87a6640207573e55c0785eb5d11dd26193c44f34e846367509ea1cbfb286414->leave($__internal_a87a6640207573e55c0785eb5d11dd26193c44f34e846367509ea1cbfb286414_prof);

        
        $__internal_366a59f12b67a07de0427a9380ffc9e39815c5250e21d4994b3822d8f5307d58->leave($__internal_366a59f12b67a07de0427a9380ffc9e39815c5250e21d4994b3822d8f5307d58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
