<?php

/* ApiBundle:Default:index.html.twig */
class __TwigTemplate_14637ae81a85dad9c8ce9975ff77db46e7945b03bbc9048af46ed460de45a2fc extends Twig_Template
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
        $__internal_ea6e361c68f0ca1cbc09a7833ece178fd304b3d350b6ed78a88a94a00807ef47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6e361c68f0ca1cbc09a7833ece178fd304b3d350b6ed78a88a94a00807ef47->enter($__internal_ea6e361c68f0ca1cbc09a7833ece178fd304b3d350b6ed78a88a94a00807ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Default:index.html.twig"));

        $__internal_1545109ce89a2fe23a6df2150582955a841aa050475ed77190e4feb69d4437be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1545109ce89a2fe23a6df2150582955a841aa050475ed77190e4feb69d4437be->enter($__internal_1545109ce89a2fe23a6df2150582955a841aa050475ed77190e4feb69d4437be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ea6e361c68f0ca1cbc09a7833ece178fd304b3d350b6ed78a88a94a00807ef47->leave($__internal_ea6e361c68f0ca1cbc09a7833ece178fd304b3d350b6ed78a88a94a00807ef47_prof);

        
        $__internal_1545109ce89a2fe23a6df2150582955a841aa050475ed77190e4feb69d4437be->leave($__internal_1545109ce89a2fe23a6df2150582955a841aa050475ed77190e4feb69d4437be_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "ApiBundle:Default:index.html.twig", "/home/ben/projects/LocomotiveBackend/src/ApiBundle/Resources/views/Default/index.html.twig");
    }
}
