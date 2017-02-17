<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51ac596eac3d6ae90356e657fd352afa83029a507070a646c6ac623c18a3b187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ac596eac3d6ae90356e657fd352afa83029a507070a646c6ac623c18a3b187->enter($__internal_51ac596eac3d6ae90356e657fd352afa83029a507070a646c6ac623c18a3b187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ca5b182695010befb951f872cd309510be618acedd0e313f7cc7ecec12500d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5b182695010befb951f872cd309510be618acedd0e313f7cc7ecec12500d65->enter($__internal_ca5b182695010befb951f872cd309510be618acedd0e313f7cc7ecec12500d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51ac596eac3d6ae90356e657fd352afa83029a507070a646c6ac623c18a3b187->leave($__internal_51ac596eac3d6ae90356e657fd352afa83029a507070a646c6ac623c18a3b187_prof);

        
        $__internal_ca5b182695010befb951f872cd309510be618acedd0e313f7cc7ecec12500d65->leave($__internal_ca5b182695010befb951f872cd309510be618acedd0e313f7cc7ecec12500d65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2cdc050423ddba0d9fae747b41a1a139966ea90c3ed956031f475ff8137c1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cdc050423ddba0d9fae747b41a1a139966ea90c3ed956031f475ff8137c1d8->enter($__internal_a2cdc050423ddba0d9fae747b41a1a139966ea90c3ed956031f475ff8137c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6ab9a567ccede64ebd544ec1fce413b4365cb2e7246e2771b72080fe433a214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ab9a567ccede64ebd544ec1fce413b4365cb2e7246e2771b72080fe433a214->enter($__internal_f6ab9a567ccede64ebd544ec1fce413b4365cb2e7246e2771b72080fe433a214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f6ab9a567ccede64ebd544ec1fce413b4365cb2e7246e2771b72080fe433a214->leave($__internal_f6ab9a567ccede64ebd544ec1fce413b4365cb2e7246e2771b72080fe433a214_prof);

        
        $__internal_a2cdc050423ddba0d9fae747b41a1a139966ea90c3ed956031f475ff8137c1d8->leave($__internal_a2cdc050423ddba0d9fae747b41a1a139966ea90c3ed956031f475ff8137c1d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_579c0ad2ad2f74d0fcc5d0e033d81b58122b77b994bc5bb819e8ee727b788765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579c0ad2ad2f74d0fcc5d0e033d81b58122b77b994bc5bb819e8ee727b788765->enter($__internal_579c0ad2ad2f74d0fcc5d0e033d81b58122b77b994bc5bb819e8ee727b788765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_75fd4818557297d6ddd5056eb1e8782bf6eb47cd60d3847fdc08db98d88141bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fd4818557297d6ddd5056eb1e8782bf6eb47cd60d3847fdc08db98d88141bd->enter($__internal_75fd4818557297d6ddd5056eb1e8782bf6eb47cd60d3847fdc08db98d88141bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_75fd4818557297d6ddd5056eb1e8782bf6eb47cd60d3847fdc08db98d88141bd->leave($__internal_75fd4818557297d6ddd5056eb1e8782bf6eb47cd60d3847fdc08db98d88141bd_prof);

        
        $__internal_579c0ad2ad2f74d0fcc5d0e033d81b58122b77b994bc5bb819e8ee727b788765->leave($__internal_579c0ad2ad2f74d0fcc5d0e033d81b58122b77b994bc5bb819e8ee727b788765_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d452c4a5d6952a291cf4d30f7a31539db98bb8f863b9ab50a338c8034300a47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d452c4a5d6952a291cf4d30f7a31539db98bb8f863b9ab50a338c8034300a47a->enter($__internal_d452c4a5d6952a291cf4d30f7a31539db98bb8f863b9ab50a338c8034300a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_488a421bfc892d2d5b8e216b36295146594cef7f9dc195f6af4c0da262a61aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488a421bfc892d2d5b8e216b36295146594cef7f9dc195f6af4c0da262a61aeb->enter($__internal_488a421bfc892d2d5b8e216b36295146594cef7f9dc195f6af4c0da262a61aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_488a421bfc892d2d5b8e216b36295146594cef7f9dc195f6af4c0da262a61aeb->leave($__internal_488a421bfc892d2d5b8e216b36295146594cef7f9dc195f6af4c0da262a61aeb_prof);

        
        $__internal_d452c4a5d6952a291cf4d30f7a31539db98bb8f863b9ab50a338c8034300a47a->leave($__internal_d452c4a5d6952a291cf4d30f7a31539db98bb8f863b9ab50a338c8034300a47a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
