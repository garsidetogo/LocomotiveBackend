<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a3230cc19084d4e837775e626803569bde828efb64321b668fe78208aee46d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3230cc19084d4e837775e626803569bde828efb64321b668fe78208aee46d38->enter($__internal_a3230cc19084d4e837775e626803569bde828efb64321b668fe78208aee46d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_864e131004daa15833bfaac82597a8043f4d62ccca16d9fb5afc8ebc3f5f46d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864e131004daa15833bfaac82597a8043f4d62ccca16d9fb5afc8ebc3f5f46d0->enter($__internal_864e131004daa15833bfaac82597a8043f4d62ccca16d9fb5afc8ebc3f5f46d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3230cc19084d4e837775e626803569bde828efb64321b668fe78208aee46d38->leave($__internal_a3230cc19084d4e837775e626803569bde828efb64321b668fe78208aee46d38_prof);

        
        $__internal_864e131004daa15833bfaac82597a8043f4d62ccca16d9fb5afc8ebc3f5f46d0->leave($__internal_864e131004daa15833bfaac82597a8043f4d62ccca16d9fb5afc8ebc3f5f46d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f03c415b0d98f9ceb0a8b5f4bba707d5b03dce37b540f616b0c4aec169cb1c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03c415b0d98f9ceb0a8b5f4bba707d5b03dce37b540f616b0c4aec169cb1c9f->enter($__internal_f03c415b0d98f9ceb0a8b5f4bba707d5b03dce37b540f616b0c4aec169cb1c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_deee805683da8d55a571fae379bd24a90d5837aad51d7366ca0e52db19e9f7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deee805683da8d55a571fae379bd24a90d5837aad51d7366ca0e52db19e9f7ed->enter($__internal_deee805683da8d55a571fae379bd24a90d5837aad51d7366ca0e52db19e9f7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deee805683da8d55a571fae379bd24a90d5837aad51d7366ca0e52db19e9f7ed->leave($__internal_deee805683da8d55a571fae379bd24a90d5837aad51d7366ca0e52db19e9f7ed_prof);

        
        $__internal_f03c415b0d98f9ceb0a8b5f4bba707d5b03dce37b540f616b0c4aec169cb1c9f->leave($__internal_f03c415b0d98f9ceb0a8b5f4bba707d5b03dce37b540f616b0c4aec169cb1c9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca3f383e156277f4835ed8b7b69634b1f69dff3dd63759930fa92b65019c2016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3f383e156277f4835ed8b7b69634b1f69dff3dd63759930fa92b65019c2016->enter($__internal_ca3f383e156277f4835ed8b7b69634b1f69dff3dd63759930fa92b65019c2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a52e9512cdeadb1553df65467e9891352554a0f69ceb5907809f7d19b059e1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52e9512cdeadb1553df65467e9891352554a0f69ceb5907809f7d19b059e1ea->enter($__internal_a52e9512cdeadb1553df65467e9891352554a0f69ceb5907809f7d19b059e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a52e9512cdeadb1553df65467e9891352554a0f69ceb5907809f7d19b059e1ea->leave($__internal_a52e9512cdeadb1553df65467e9891352554a0f69ceb5907809f7d19b059e1ea_prof);

        
        $__internal_ca3f383e156277f4835ed8b7b69634b1f69dff3dd63759930fa92b65019c2016->leave($__internal_ca3f383e156277f4835ed8b7b69634b1f69dff3dd63759930fa92b65019c2016_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63be4d77877dfcfe34ba32d4816967c324f4384d190c34cbc61f0da37ac6c91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63be4d77877dfcfe34ba32d4816967c324f4384d190c34cbc61f0da37ac6c91c->enter($__internal_63be4d77877dfcfe34ba32d4816967c324f4384d190c34cbc61f0da37ac6c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90f764b123d1c02d5c67f37b9d99b4a39efc2ecc3883e27f1b805313a2dadd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f764b123d1c02d5c67f37b9d99b4a39efc2ecc3883e27f1b805313a2dadd35->enter($__internal_90f764b123d1c02d5c67f37b9d99b4a39efc2ecc3883e27f1b805313a2dadd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90f764b123d1c02d5c67f37b9d99b4a39efc2ecc3883e27f1b805313a2dadd35->leave($__internal_90f764b123d1c02d5c67f37b9d99b4a39efc2ecc3883e27f1b805313a2dadd35_prof);

        
        $__internal_63be4d77877dfcfe34ba32d4816967c324f4384d190c34cbc61f0da37ac6c91c->leave($__internal_63be4d77877dfcfe34ba32d4816967c324f4384d190c34cbc61f0da37ac6c91c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
