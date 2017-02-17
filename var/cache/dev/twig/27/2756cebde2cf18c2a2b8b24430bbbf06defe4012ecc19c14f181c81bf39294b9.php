<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_d8c84fe07d9752a3dac332c5c84e38f2077c357ab29581fabdb000f3bb33cf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c84fe07d9752a3dac332c5c84e38f2077c357ab29581fabdb000f3bb33cf00->enter($__internal_d8c84fe07d9752a3dac332c5c84e38f2077c357ab29581fabdb000f3bb33cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dc080aa605d2a66b86d59fd1c2792365cd88fd8695949120142f8010787e2ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc080aa605d2a66b86d59fd1c2792365cd88fd8695949120142f8010787e2ab5->enter($__internal_dc080aa605d2a66b86d59fd1c2792365cd88fd8695949120142f8010787e2ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d8c84fe07d9752a3dac332c5c84e38f2077c357ab29581fabdb000f3bb33cf00->leave($__internal_d8c84fe07d9752a3dac332c5c84e38f2077c357ab29581fabdb000f3bb33cf00_prof);

        
        $__internal_dc080aa605d2a66b86d59fd1c2792365cd88fd8695949120142f8010787e2ab5->leave($__internal_dc080aa605d2a66b86d59fd1c2792365cd88fd8695949120142f8010787e2ab5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
