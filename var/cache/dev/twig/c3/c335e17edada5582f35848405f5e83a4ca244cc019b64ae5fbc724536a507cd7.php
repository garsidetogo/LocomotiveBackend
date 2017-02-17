<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c854dee4c01cfc49af56dcdb13b73fdc20856c51455b844d0c3a16eefcc6a8e extends Twig_Template
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
        $__internal_dbf3e468bbb558b462e3884d86f71fccec16f0b795e5b2baff3f2f2108d5b8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf3e468bbb558b462e3884d86f71fccec16f0b795e5b2baff3f2f2108d5b8b5->enter($__internal_dbf3e468bbb558b462e3884d86f71fccec16f0b795e5b2baff3f2f2108d5b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_816e7d02674f5a49398786fe59233b0cfc5a599f20c27a0e84d61c4dfd7ba33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816e7d02674f5a49398786fe59233b0cfc5a599f20c27a0e84d61c4dfd7ba33b->enter($__internal_816e7d02674f5a49398786fe59233b0cfc5a599f20c27a0e84d61c4dfd7ba33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dbf3e468bbb558b462e3884d86f71fccec16f0b795e5b2baff3f2f2108d5b8b5->leave($__internal_dbf3e468bbb558b462e3884d86f71fccec16f0b795e5b2baff3f2f2108d5b8b5_prof);

        
        $__internal_816e7d02674f5a49398786fe59233b0cfc5a599f20c27a0e84d61c4dfd7ba33b->leave($__internal_816e7d02674f5a49398786fe59233b0cfc5a599f20c27a0e84d61c4dfd7ba33b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
