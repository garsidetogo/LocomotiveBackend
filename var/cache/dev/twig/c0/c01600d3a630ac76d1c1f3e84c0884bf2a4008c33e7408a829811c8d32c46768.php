<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fff5da290fa74678e99a5b2e48e4589fd1b30e4ffabb629beb734ce458263585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff5da290fa74678e99a5b2e48e4589fd1b30e4ffabb629beb734ce458263585->enter($__internal_fff5da290fa74678e99a5b2e48e4589fd1b30e4ffabb629beb734ce458263585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_805d8f9966219b512233fca1e3fcf3dbb4ceeaa61fc58c4a8c304052f0195152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d8f9966219b512233fca1e3fcf3dbb4ceeaa61fc58c4a8c304052f0195152->enter($__internal_805d8f9966219b512233fca1e3fcf3dbb4ceeaa61fc58c4a8c304052f0195152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff5da290fa74678e99a5b2e48e4589fd1b30e4ffabb629beb734ce458263585->leave($__internal_fff5da290fa74678e99a5b2e48e4589fd1b30e4ffabb629beb734ce458263585_prof);

        
        $__internal_805d8f9966219b512233fca1e3fcf3dbb4ceeaa61fc58c4a8c304052f0195152->leave($__internal_805d8f9966219b512233fca1e3fcf3dbb4ceeaa61fc58c4a8c304052f0195152_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25df6b6396e7d2ed1fc0e8bfb4a822cd2bf09b513cfcdb3b7727aa67700576f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25df6b6396e7d2ed1fc0e8bfb4a822cd2bf09b513cfcdb3b7727aa67700576f1->enter($__internal_25df6b6396e7d2ed1fc0e8bfb4a822cd2bf09b513cfcdb3b7727aa67700576f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_081b9161ae853e9f4b6c53e39239cfdc74cc774fedc539f48f72692acaef67cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081b9161ae853e9f4b6c53e39239cfdc74cc774fedc539f48f72692acaef67cc->enter($__internal_081b9161ae853e9f4b6c53e39239cfdc74cc774fedc539f48f72692acaef67cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_081b9161ae853e9f4b6c53e39239cfdc74cc774fedc539f48f72692acaef67cc->leave($__internal_081b9161ae853e9f4b6c53e39239cfdc74cc774fedc539f48f72692acaef67cc_prof);

        
        $__internal_25df6b6396e7d2ed1fc0e8bfb4a822cd2bf09b513cfcdb3b7727aa67700576f1->leave($__internal_25df6b6396e7d2ed1fc0e8bfb4a822cd2bf09b513cfcdb3b7727aa67700576f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c45ee9bebab7b5098341a476f07ba1a1567ec54f38f7b5714c70945bc7b2e2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45ee9bebab7b5098341a476f07ba1a1567ec54f38f7b5714c70945bc7b2e2b9->enter($__internal_c45ee9bebab7b5098341a476f07ba1a1567ec54f38f7b5714c70945bc7b2e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c23b3d8cfb7f2561df8b0f064ef0c713c353f1519f34c3af816aa4bf84f4acc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23b3d8cfb7f2561df8b0f064ef0c713c353f1519f34c3af816aa4bf84f4acc8->enter($__internal_c23b3d8cfb7f2561df8b0f064ef0c713c353f1519f34c3af816aa4bf84f4acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c23b3d8cfb7f2561df8b0f064ef0c713c353f1519f34c3af816aa4bf84f4acc8->leave($__internal_c23b3d8cfb7f2561df8b0f064ef0c713c353f1519f34c3af816aa4bf84f4acc8_prof);

        
        $__internal_c45ee9bebab7b5098341a476f07ba1a1567ec54f38f7b5714c70945bc7b2e2b9->leave($__internal_c45ee9bebab7b5098341a476f07ba1a1567ec54f38f7b5714c70945bc7b2e2b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
