<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e194ef62e459aa667479cd07d0674ab38328eefce490bac5a7ad21749ffe7309 extends Twig_Template
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
        $__internal_24250806a734a74fba509c335148dbfd0a5f5a76b8c425100bf8ec0047a15028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24250806a734a74fba509c335148dbfd0a5f5a76b8c425100bf8ec0047a15028->enter($__internal_24250806a734a74fba509c335148dbfd0a5f5a76b8c425100bf8ec0047a15028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4cd61deb2f3a62f522905173a33a4aa7b8a6e7fe4316d790fd4f0cc0f4a295b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd61deb2f3a62f522905173a33a4aa7b8a6e7fe4316d790fd4f0cc0f4a295b7->enter($__internal_4cd61deb2f3a62f522905173a33a4aa7b8a6e7fe4316d790fd4f0cc0f4a295b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_24250806a734a74fba509c335148dbfd0a5f5a76b8c425100bf8ec0047a15028->leave($__internal_24250806a734a74fba509c335148dbfd0a5f5a76b8c425100bf8ec0047a15028_prof);

        
        $__internal_4cd61deb2f3a62f522905173a33a4aa7b8a6e7fe4316d790fd4f0cc0f4a295b7->leave($__internal_4cd61deb2f3a62f522905173a33a4aa7b8a6e7fe4316d790fd4f0cc0f4a295b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
