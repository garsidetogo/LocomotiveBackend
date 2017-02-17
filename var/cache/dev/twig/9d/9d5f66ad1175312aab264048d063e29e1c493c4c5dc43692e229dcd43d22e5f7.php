<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5de2ae60d963ffd709502d1d47de88d3e59c032ef0c3e3e2cde3a871c2462f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5de2ae60d963ffd709502d1d47de88d3e59c032ef0c3e3e2cde3a871c2462f6->enter($__internal_b5de2ae60d963ffd709502d1d47de88d3e59c032ef0c3e3e2cde3a871c2462f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b5cfccca091816f9c0817f20db1c77db2489f48642294d974586eb34b4d5cf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cfccca091816f9c0817f20db1c77db2489f48642294d974586eb34b4d5cf04->enter($__internal_b5cfccca091816f9c0817f20db1c77db2489f48642294d974586eb34b4d5cf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b5de2ae60d963ffd709502d1d47de88d3e59c032ef0c3e3e2cde3a871c2462f6->leave($__internal_b5de2ae60d963ffd709502d1d47de88d3e59c032ef0c3e3e2cde3a871c2462f6_prof);

        
        $__internal_b5cfccca091816f9c0817f20db1c77db2489f48642294d974586eb34b4d5cf04->leave($__internal_b5cfccca091816f9c0817f20db1c77db2489f48642294d974586eb34b4d5cf04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_daee4abcdb731c7837796db59988db2ac2fd9ebbfd647dd8016c597d2a067aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daee4abcdb731c7837796db59988db2ac2fd9ebbfd647dd8016c597d2a067aee->enter($__internal_daee4abcdb731c7837796db59988db2ac2fd9ebbfd647dd8016c597d2a067aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82b3c71ab1edf3d8dada7d4d44ce55bbc5dca5b4538d5bb1e72a52d30363e13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b3c71ab1edf3d8dada7d4d44ce55bbc5dca5b4538d5bb1e72a52d30363e13c->enter($__internal_82b3c71ab1edf3d8dada7d4d44ce55bbc5dca5b4538d5bb1e72a52d30363e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82b3c71ab1edf3d8dada7d4d44ce55bbc5dca5b4538d5bb1e72a52d30363e13c->leave($__internal_82b3c71ab1edf3d8dada7d4d44ce55bbc5dca5b4538d5bb1e72a52d30363e13c_prof);

        
        $__internal_daee4abcdb731c7837796db59988db2ac2fd9ebbfd647dd8016c597d2a067aee->leave($__internal_daee4abcdb731c7837796db59988db2ac2fd9ebbfd647dd8016c597d2a067aee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94afd979d21fffbc8b0c93b7dd493f0c83847565fea8c705b2e5f00ecbbf95eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94afd979d21fffbc8b0c93b7dd493f0c83847565fea8c705b2e5f00ecbbf95eb->enter($__internal_94afd979d21fffbc8b0c93b7dd493f0c83847565fea8c705b2e5f00ecbbf95eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_925257e03878bd1912b2614ed85fd6c513e67683e340c0d7439b4ae9d4581926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925257e03878bd1912b2614ed85fd6c513e67683e340c0d7439b4ae9d4581926->enter($__internal_925257e03878bd1912b2614ed85fd6c513e67683e340c0d7439b4ae9d4581926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_925257e03878bd1912b2614ed85fd6c513e67683e340c0d7439b4ae9d4581926->leave($__internal_925257e03878bd1912b2614ed85fd6c513e67683e340c0d7439b4ae9d4581926_prof);

        
        $__internal_94afd979d21fffbc8b0c93b7dd493f0c83847565fea8c705b2e5f00ecbbf95eb->leave($__internal_94afd979d21fffbc8b0c93b7dd493f0c83847565fea8c705b2e5f00ecbbf95eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41c35a2ff1c8c9b61d38f91d4b8450f4a5ee87da97b3a45fc8cc94d33c449b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c35a2ff1c8c9b61d38f91d4b8450f4a5ee87da97b3a45fc8cc94d33c449b28->enter($__internal_41c35a2ff1c8c9b61d38f91d4b8450f4a5ee87da97b3a45fc8cc94d33c449b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e081768ae054604caac6c857b912073ce50070a158ff092fbf6ff46b2412cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e081768ae054604caac6c857b912073ce50070a158ff092fbf6ff46b2412cf5->enter($__internal_0e081768ae054604caac6c857b912073ce50070a158ff092fbf6ff46b2412cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e081768ae054604caac6c857b912073ce50070a158ff092fbf6ff46b2412cf5->leave($__internal_0e081768ae054604caac6c857b912073ce50070a158ff092fbf6ff46b2412cf5_prof);

        
        $__internal_41c35a2ff1c8c9b61d38f91d4b8450f4a5ee87da97b3a45fc8cc94d33c449b28->leave($__internal_41c35a2ff1c8c9b61d38f91d4b8450f4a5ee87da97b3a45fc8cc94d33c449b28_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5a32580fa0d2d20e5f2e6244acbe36b01817025ee3d2505edb9e0b47dbf166f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a32580fa0d2d20e5f2e6244acbe36b01817025ee3d2505edb9e0b47dbf166f->enter($__internal_c5a32580fa0d2d20e5f2e6244acbe36b01817025ee3d2505edb9e0b47dbf166f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e2643de98ba2c730524e15545d023439db6af9f728b76cece14a9631aaf9416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2643de98ba2c730524e15545d023439db6af9f728b76cece14a9631aaf9416f->enter($__internal_e2643de98ba2c730524e15545d023439db6af9f728b76cece14a9631aaf9416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2643de98ba2c730524e15545d023439db6af9f728b76cece14a9631aaf9416f->leave($__internal_e2643de98ba2c730524e15545d023439db6af9f728b76cece14a9631aaf9416f_prof);

        
        $__internal_c5a32580fa0d2d20e5f2e6244acbe36b01817025ee3d2505edb9e0b47dbf166f->leave($__internal_c5a32580fa0d2d20e5f2e6244acbe36b01817025ee3d2505edb9e0b47dbf166f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/ben/projects/LocomotiveBackend/app/Resources/views/base.html.twig");
    }
}
