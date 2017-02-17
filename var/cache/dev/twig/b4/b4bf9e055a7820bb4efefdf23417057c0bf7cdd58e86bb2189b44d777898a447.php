<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_4535ca5dda9d5fcec58570ff0e2a6e67910f0cbffbc83b37d13797c3f5df819d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4535ca5dda9d5fcec58570ff0e2a6e67910f0cbffbc83b37d13797c3f5df819d->enter($__internal_4535ca5dda9d5fcec58570ff0e2a6e67910f0cbffbc83b37d13797c3f5df819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5bba0b08da0bbd8a7b83d9953ccc3f5bd8e199348da57a1dac8d223f784ab8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba0b08da0bbd8a7b83d9953ccc3f5bd8e199348da57a1dac8d223f784ab8f4->enter($__internal_5bba0b08da0bbd8a7b83d9953ccc3f5bd8e199348da57a1dac8d223f784ab8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4535ca5dda9d5fcec58570ff0e2a6e67910f0cbffbc83b37d13797c3f5df819d->leave($__internal_4535ca5dda9d5fcec58570ff0e2a6e67910f0cbffbc83b37d13797c3f5df819d_prof);

        
        $__internal_5bba0b08da0bbd8a7b83d9953ccc3f5bd8e199348da57a1dac8d223f784ab8f4->leave($__internal_5bba0b08da0bbd8a7b83d9953ccc3f5bd8e199348da57a1dac8d223f784ab8f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
