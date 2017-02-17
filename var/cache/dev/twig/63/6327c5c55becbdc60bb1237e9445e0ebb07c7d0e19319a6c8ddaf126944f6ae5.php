<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3db08fefbf09f00337971162aff8f02fdc2047a922e2d94eb3645d4a9b103c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3db08fefbf09f00337971162aff8f02fdc2047a922e2d94eb3645d4a9b103c2->enter($__internal_a3db08fefbf09f00337971162aff8f02fdc2047a922e2d94eb3645d4a9b103c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b85259fc40788ff40f95d011dbfae61663e2e7c5b861eacc20dbfe95d3f8b34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85259fc40788ff40f95d011dbfae61663e2e7c5b861eacc20dbfe95d3f8b34a->enter($__internal_b85259fc40788ff40f95d011dbfae61663e2e7c5b861eacc20dbfe95d3f8b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3db08fefbf09f00337971162aff8f02fdc2047a922e2d94eb3645d4a9b103c2->leave($__internal_a3db08fefbf09f00337971162aff8f02fdc2047a922e2d94eb3645d4a9b103c2_prof);

        
        $__internal_b85259fc40788ff40f95d011dbfae61663e2e7c5b861eacc20dbfe95d3f8b34a->leave($__internal_b85259fc40788ff40f95d011dbfae61663e2e7c5b861eacc20dbfe95d3f8b34a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_56d7c4bee103df27e9224e26179ce4508f4ac68c693a4a6af2f64abc0a8618e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d7c4bee103df27e9224e26179ce4508f4ac68c693a4a6af2f64abc0a8618e8->enter($__internal_56d7c4bee103df27e9224e26179ce4508f4ac68c693a4a6af2f64abc0a8618e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3bbd95385905058fe539271756bef84ee5d4fa43a60f3c518f880c1beb8f76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bbd95385905058fe539271756bef84ee5d4fa43a60f3c518f880c1beb8f76f->enter($__internal_e3bbd95385905058fe539271756bef84ee5d4fa43a60f3c518f880c1beb8f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e3bbd95385905058fe539271756bef84ee5d4fa43a60f3c518f880c1beb8f76f->leave($__internal_e3bbd95385905058fe539271756bef84ee5d4fa43a60f3c518f880c1beb8f76f_prof);

        
        $__internal_56d7c4bee103df27e9224e26179ce4508f4ac68c693a4a6af2f64abc0a8618e8->leave($__internal_56d7c4bee103df27e9224e26179ce4508f4ac68c693a4a6af2f64abc0a8618e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
