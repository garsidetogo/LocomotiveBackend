<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9c4dbc2fd9169de435135fd5a6f42ae8320ce105576b0f3f050544c1e5464d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c4dbc2fd9169de435135fd5a6f42ae8320ce105576b0f3f050544c1e5464d8->enter($__internal_a9c4dbc2fd9169de435135fd5a6f42ae8320ce105576b0f3f050544c1e5464d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_eef0165cd01a9238973cd7a272745b6997737fc42e9e9eb4fa40dfa4c27a7bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef0165cd01a9238973cd7a272745b6997737fc42e9e9eb4fa40dfa4c27a7bb6->enter($__internal_eef0165cd01a9238973cd7a272745b6997737fc42e9e9eb4fa40dfa4c27a7bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c4dbc2fd9169de435135fd5a6f42ae8320ce105576b0f3f050544c1e5464d8->leave($__internal_a9c4dbc2fd9169de435135fd5a6f42ae8320ce105576b0f3f050544c1e5464d8_prof);

        
        $__internal_eef0165cd01a9238973cd7a272745b6997737fc42e9e9eb4fa40dfa4c27a7bb6->leave($__internal_eef0165cd01a9238973cd7a272745b6997737fc42e9e9eb4fa40dfa4c27a7bb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63dbd5b910b9e08d64c2129a032214715f936de785b90170184818961b353b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dbd5b910b9e08d64c2129a032214715f936de785b90170184818961b353b3a->enter($__internal_63dbd5b910b9e08d64c2129a032214715f936de785b90170184818961b353b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4bce7640db2319dc628c3b87494b84697e3acd0ac85e72b1a161e03f2ff7ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bce7640db2319dc628c3b87494b84697e3acd0ac85e72b1a161e03f2ff7ba0->enter($__internal_c4bce7640db2319dc628c3b87494b84697e3acd0ac85e72b1a161e03f2ff7ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c4bce7640db2319dc628c3b87494b84697e3acd0ac85e72b1a161e03f2ff7ba0->leave($__internal_c4bce7640db2319dc628c3b87494b84697e3acd0ac85e72b1a161e03f2ff7ba0_prof);

        
        $__internal_63dbd5b910b9e08d64c2129a032214715f936de785b90170184818961b353b3a->leave($__internal_63dbd5b910b9e08d64c2129a032214715f936de785b90170184818961b353b3a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_30b39d4e1c7b4abfedafe7ae243703f73207a5c649539073d48aacf3d04fe2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b39d4e1c7b4abfedafe7ae243703f73207a5c649539073d48aacf3d04fe2e9->enter($__internal_30b39d4e1c7b4abfedafe7ae243703f73207a5c649539073d48aacf3d04fe2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59c14738712371185f0190bf1e2e81ab1053b06bcae3b27da289c57f792a4cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c14738712371185f0190bf1e2e81ab1053b06bcae3b27da289c57f792a4cd9->enter($__internal_59c14738712371185f0190bf1e2e81ab1053b06bcae3b27da289c57f792a4cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_59c14738712371185f0190bf1e2e81ab1053b06bcae3b27da289c57f792a4cd9->leave($__internal_59c14738712371185f0190bf1e2e81ab1053b06bcae3b27da289c57f792a4cd9_prof);

        
        $__internal_30b39d4e1c7b4abfedafe7ae243703f73207a5c649539073d48aacf3d04fe2e9->leave($__internal_30b39d4e1c7b4abfedafe7ae243703f73207a5c649539073d48aacf3d04fe2e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
