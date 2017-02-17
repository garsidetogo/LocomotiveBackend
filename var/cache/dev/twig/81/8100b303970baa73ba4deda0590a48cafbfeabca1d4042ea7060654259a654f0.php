<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f7f61921ec5c339e934589c7c52d155c10fe04a2a1cbf4f49455877d8fb9fa1 extends Twig_Template
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
        $__internal_4bf5720aad5917d0d49ce7335f2d5caddf91a141bc79da77c472bde74d1f7e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf5720aad5917d0d49ce7335f2d5caddf91a141bc79da77c472bde74d1f7e24->enter($__internal_4bf5720aad5917d0d49ce7335f2d5caddf91a141bc79da77c472bde74d1f7e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_bf05f504bc6a386f69eeeedae39ea9cd32e80b12251a89a621e6d38a183c4ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf05f504bc6a386f69eeeedae39ea9cd32e80b12251a89a621e6d38a183c4ea3->enter($__internal_bf05f504bc6a386f69eeeedae39ea9cd32e80b12251a89a621e6d38a183c4ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4bf5720aad5917d0d49ce7335f2d5caddf91a141bc79da77c472bde74d1f7e24->leave($__internal_4bf5720aad5917d0d49ce7335f2d5caddf91a141bc79da77c472bde74d1f7e24_prof);

        
        $__internal_bf05f504bc6a386f69eeeedae39ea9cd32e80b12251a89a621e6d38a183c4ea3->leave($__internal_bf05f504bc6a386f69eeeedae39ea9cd32e80b12251a89a621e6d38a183c4ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
