<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_a326fa8c94a95eb3b0394fbad04d1230fc3da3e86f7479e702e97629d9017c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a326fa8c94a95eb3b0394fbad04d1230fc3da3e86f7479e702e97629d9017c63->enter($__internal_a326fa8c94a95eb3b0394fbad04d1230fc3da3e86f7479e702e97629d9017c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_85e5ae8dbb18cd17da573e6cb3902b428782763a63f5f84e35e1c2f369f5ac13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e5ae8dbb18cd17da573e6cb3902b428782763a63f5f84e35e1c2f369f5ac13->enter($__internal_85e5ae8dbb18cd17da573e6cb3902b428782763a63f5f84e35e1c2f369f5ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a326fa8c94a95eb3b0394fbad04d1230fc3da3e86f7479e702e97629d9017c63->leave($__internal_a326fa8c94a95eb3b0394fbad04d1230fc3da3e86f7479e702e97629d9017c63_prof);

        
        $__internal_85e5ae8dbb18cd17da573e6cb3902b428782763a63f5f84e35e1c2f369f5ac13->leave($__internal_85e5ae8dbb18cd17da573e6cb3902b428782763a63f5f84e35e1c2f369f5ac13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
