<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5a196df2e5708557a5e7834275555f40ae4fddc3fe4fd62de61dfe3d4224757 extends Twig_Template
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
        $__internal_8a787abcae1a31c5de23f6e0b947e8565ae43946221ba867c513f4cebb08bb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a787abcae1a31c5de23f6e0b947e8565ae43946221ba867c513f4cebb08bb73->enter($__internal_8a787abcae1a31c5de23f6e0b947e8565ae43946221ba867c513f4cebb08bb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b5523e945feaf8d78246585bd9e3c17076d02d638cce1f16427f20f4b9354c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5523e945feaf8d78246585bd9e3c17076d02d638cce1f16427f20f4b9354c47->enter($__internal_b5523e945feaf8d78246585bd9e3c17076d02d638cce1f16427f20f4b9354c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8a787abcae1a31c5de23f6e0b947e8565ae43946221ba867c513f4cebb08bb73->leave($__internal_8a787abcae1a31c5de23f6e0b947e8565ae43946221ba867c513f4cebb08bb73_prof);

        
        $__internal_b5523e945feaf8d78246585bd9e3c17076d02d638cce1f16427f20f4b9354c47->leave($__internal_b5523e945feaf8d78246585bd9e3c17076d02d638cce1f16427f20f4b9354c47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
