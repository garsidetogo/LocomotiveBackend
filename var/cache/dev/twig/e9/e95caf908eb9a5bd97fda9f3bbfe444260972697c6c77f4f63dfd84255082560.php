<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_940d3d7ad3b51f253f0eb7e9eb78297d0ea9ba64871e52ae0bc7d9726dd6c207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940d3d7ad3b51f253f0eb7e9eb78297d0ea9ba64871e52ae0bc7d9726dd6c207->enter($__internal_940d3d7ad3b51f253f0eb7e9eb78297d0ea9ba64871e52ae0bc7d9726dd6c207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3b3024dc2399e7ed84708a724b3afbc1cdd0a3dd013acffff6df5c34d5862c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3024dc2399e7ed84708a724b3afbc1cdd0a3dd013acffff6df5c34d5862c22->enter($__internal_3b3024dc2399e7ed84708a724b3afbc1cdd0a3dd013acffff6df5c34d5862c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_940d3d7ad3b51f253f0eb7e9eb78297d0ea9ba64871e52ae0bc7d9726dd6c207->leave($__internal_940d3d7ad3b51f253f0eb7e9eb78297d0ea9ba64871e52ae0bc7d9726dd6c207_prof);

        
        $__internal_3b3024dc2399e7ed84708a724b3afbc1cdd0a3dd013acffff6df5c34d5862c22->leave($__internal_3b3024dc2399e7ed84708a724b3afbc1cdd0a3dd013acffff6df5c34d5862c22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
