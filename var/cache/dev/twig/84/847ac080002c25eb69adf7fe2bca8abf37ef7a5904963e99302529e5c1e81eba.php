<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_6fc36b07f1306fb588d7a6b613716c3808b8e664fd401843b8106298b43a4c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc36b07f1306fb588d7a6b613716c3808b8e664fd401843b8106298b43a4c3e->enter($__internal_6fc36b07f1306fb588d7a6b613716c3808b8e664fd401843b8106298b43a4c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f707364f54feb724bd1a63d5d25a7eb1b1bf1b9e44a92c3b2cedd8e157b7d1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f707364f54feb724bd1a63d5d25a7eb1b1bf1b9e44a92c3b2cedd8e157b7d1ce->enter($__internal_f707364f54feb724bd1a63d5d25a7eb1b1bf1b9e44a92c3b2cedd8e157b7d1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6fc36b07f1306fb588d7a6b613716c3808b8e664fd401843b8106298b43a4c3e->leave($__internal_6fc36b07f1306fb588d7a6b613716c3808b8e664fd401843b8106298b43a4c3e_prof);

        
        $__internal_f707364f54feb724bd1a63d5d25a7eb1b1bf1b9e44a92c3b2cedd8e157b7d1ce->leave($__internal_f707364f54feb724bd1a63d5d25a7eb1b1bf1b9e44a92c3b2cedd8e157b7d1ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
