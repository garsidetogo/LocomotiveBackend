<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca285f51b5370ebd0e275586e847e1530eafa096ae931c8b09873b59b0ae4b49 extends Twig_Template
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
        $__internal_4d26f8c6c8d3468566e8a1c398a560e97470945918d202b35650c4e4708ec7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d26f8c6c8d3468566e8a1c398a560e97470945918d202b35650c4e4708ec7d9->enter($__internal_4d26f8c6c8d3468566e8a1c398a560e97470945918d202b35650c4e4708ec7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d931c9453be8e215c4560dc09c5fbe05f4b857cb83bbf7038280990f1f7ab0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d931c9453be8e215c4560dc09c5fbe05f4b857cb83bbf7038280990f1f7ab0d8->enter($__internal_d931c9453be8e215c4560dc09c5fbe05f4b857cb83bbf7038280990f1f7ab0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4d26f8c6c8d3468566e8a1c398a560e97470945918d202b35650c4e4708ec7d9->leave($__internal_4d26f8c6c8d3468566e8a1c398a560e97470945918d202b35650c4e4708ec7d9_prof);

        
        $__internal_d931c9453be8e215c4560dc09c5fbe05f4b857cb83bbf7038280990f1f7ab0d8->leave($__internal_d931c9453be8e215c4560dc09c5fbe05f4b857cb83bbf7038280990f1f7ab0d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
