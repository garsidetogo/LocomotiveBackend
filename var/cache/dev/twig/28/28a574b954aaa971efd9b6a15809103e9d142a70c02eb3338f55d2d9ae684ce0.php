<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48a9fb388dc0766d884c9606f4b4cc46b7a959692cb4fc2a88e9557df80e099b extends Twig_Template
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
        $__internal_297bb28d3664e331aeda4a73796830e796109988604bb3a95ed2973c426f120a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297bb28d3664e331aeda4a73796830e796109988604bb3a95ed2973c426f120a->enter($__internal_297bb28d3664e331aeda4a73796830e796109988604bb3a95ed2973c426f120a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f72a0957745da02b61ddc2409d34526ee4414ffcaff4c6d6716865ff49eae170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72a0957745da02b61ddc2409d34526ee4414ffcaff4c6d6716865ff49eae170->enter($__internal_f72a0957745da02b61ddc2409d34526ee4414ffcaff4c6d6716865ff49eae170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_297bb28d3664e331aeda4a73796830e796109988604bb3a95ed2973c426f120a->leave($__internal_297bb28d3664e331aeda4a73796830e796109988604bb3a95ed2973c426f120a_prof);

        
        $__internal_f72a0957745da02b61ddc2409d34526ee4414ffcaff4c6d6716865ff49eae170->leave($__internal_f72a0957745da02b61ddc2409d34526ee4414ffcaff4c6d6716865ff49eae170_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
