<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_9451f3f736c4f18bf3f1024cbedca552678de73aef5148f6d5e078a8bf48e062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9451f3f736c4f18bf3f1024cbedca552678de73aef5148f6d5e078a8bf48e062->enter($__internal_9451f3f736c4f18bf3f1024cbedca552678de73aef5148f6d5e078a8bf48e062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1bbda99d326928876185af7036f59fdfc7f083b5a3dba20be632e4dbcc3882d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbda99d326928876185af7036f59fdfc7f083b5a3dba20be632e4dbcc3882d1->enter($__internal_1bbda99d326928876185af7036f59fdfc7f083b5a3dba20be632e4dbcc3882d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9451f3f736c4f18bf3f1024cbedca552678de73aef5148f6d5e078a8bf48e062->leave($__internal_9451f3f736c4f18bf3f1024cbedca552678de73aef5148f6d5e078a8bf48e062_prof);

        
        $__internal_1bbda99d326928876185af7036f59fdfc7f083b5a3dba20be632e4dbcc3882d1->leave($__internal_1bbda99d326928876185af7036f59fdfc7f083b5a3dba20be632e4dbcc3882d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
