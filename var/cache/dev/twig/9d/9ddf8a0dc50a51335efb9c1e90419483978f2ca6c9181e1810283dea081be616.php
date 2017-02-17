<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_14ef74f193703749562fecb59f8c88def0a1199da5597fd03cdd030ab4e38cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ef74f193703749562fecb59f8c88def0a1199da5597fd03cdd030ab4e38cd5->enter($__internal_14ef74f193703749562fecb59f8c88def0a1199da5597fd03cdd030ab4e38cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4dde518ff5a24404aea2919055187b0ac5328059b14dcd3b6597657298b165c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dde518ff5a24404aea2919055187b0ac5328059b14dcd3b6597657298b165c4->enter($__internal_4dde518ff5a24404aea2919055187b0ac5328059b14dcd3b6597657298b165c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_14ef74f193703749562fecb59f8c88def0a1199da5597fd03cdd030ab4e38cd5->leave($__internal_14ef74f193703749562fecb59f8c88def0a1199da5597fd03cdd030ab4e38cd5_prof);

        
        $__internal_4dde518ff5a24404aea2919055187b0ac5328059b14dcd3b6597657298b165c4->leave($__internal_4dde518ff5a24404aea2919055187b0ac5328059b14dcd3b6597657298b165c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
