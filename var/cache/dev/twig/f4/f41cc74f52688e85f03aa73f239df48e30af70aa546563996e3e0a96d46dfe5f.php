<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a586ef09828509327df3491d14b38d3b7bbb5b107525a7a826a0ccbc686803d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a586ef09828509327df3491d14b38d3b7bbb5b107525a7a826a0ccbc686803d8->enter($__internal_a586ef09828509327df3491d14b38d3b7bbb5b107525a7a826a0ccbc686803d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_59dffb7fb94a31f49504818581f7c5aeddce278531b7093548637a4409dabd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dffb7fb94a31f49504818581f7c5aeddce278531b7093548637a4409dabd4a->enter($__internal_59dffb7fb94a31f49504818581f7c5aeddce278531b7093548637a4409dabd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a586ef09828509327df3491d14b38d3b7bbb5b107525a7a826a0ccbc686803d8->leave($__internal_a586ef09828509327df3491d14b38d3b7bbb5b107525a7a826a0ccbc686803d8_prof);

        
        $__internal_59dffb7fb94a31f49504818581f7c5aeddce278531b7093548637a4409dabd4a->leave($__internal_59dffb7fb94a31f49504818581f7c5aeddce278531b7093548637a4409dabd4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05220b1cd30e53aef71d7da40bd699b427cc8fef46eb7e75e234efb9f2b41076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05220b1cd30e53aef71d7da40bd699b427cc8fef46eb7e75e234efb9f2b41076->enter($__internal_05220b1cd30e53aef71d7da40bd699b427cc8fef46eb7e75e234efb9f2b41076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc0bb5cf344d74b38ca620ba7501bfeed30874a024fdfa8a620918613d3206a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0bb5cf344d74b38ca620ba7501bfeed30874a024fdfa8a620918613d3206a8->enter($__internal_cc0bb5cf344d74b38ca620ba7501bfeed30874a024fdfa8a620918613d3206a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cc0bb5cf344d74b38ca620ba7501bfeed30874a024fdfa8a620918613d3206a8->leave($__internal_cc0bb5cf344d74b38ca620ba7501bfeed30874a024fdfa8a620918613d3206a8_prof);

        
        $__internal_05220b1cd30e53aef71d7da40bd699b427cc8fef46eb7e75e234efb9f2b41076->leave($__internal_05220b1cd30e53aef71d7da40bd699b427cc8fef46eb7e75e234efb9f2b41076_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_28db5143af984e71115a2bec99e95332f8efb539d2f686abd064627f3488931e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28db5143af984e71115a2bec99e95332f8efb539d2f686abd064627f3488931e->enter($__internal_28db5143af984e71115a2bec99e95332f8efb539d2f686abd064627f3488931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53bd05b099307541e208c828e78014f7e370780a4728bda738ea229dcccb6e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bd05b099307541e208c828e78014f7e370780a4728bda738ea229dcccb6e4b->enter($__internal_53bd05b099307541e208c828e78014f7e370780a4728bda738ea229dcccb6e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53bd05b099307541e208c828e78014f7e370780a4728bda738ea229dcccb6e4b->leave($__internal_53bd05b099307541e208c828e78014f7e370780a4728bda738ea229dcccb6e4b_prof);

        
        $__internal_28db5143af984e71115a2bec99e95332f8efb539d2f686abd064627f3488931e->leave($__internal_28db5143af984e71115a2bec99e95332f8efb539d2f686abd064627f3488931e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e297487cd36dc4e75f1c12cb85646f51d67f8202901778a8ef24401a414d023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e297487cd36dc4e75f1c12cb85646f51d67f8202901778a8ef24401a414d023->enter($__internal_3e297487cd36dc4e75f1c12cb85646f51d67f8202901778a8ef24401a414d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fad9c8b10e4fbb86e2305f0e728561163ca08d7501cf196b9d58d47bb380a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad9c8b10e4fbb86e2305f0e728561163ca08d7501cf196b9d58d47bb380a3ec->enter($__internal_fad9c8b10e4fbb86e2305f0e728561163ca08d7501cf196b9d58d47bb380a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fad9c8b10e4fbb86e2305f0e728561163ca08d7501cf196b9d58d47bb380a3ec->leave($__internal_fad9c8b10e4fbb86e2305f0e728561163ca08d7501cf196b9d58d47bb380a3ec_prof);

        
        $__internal_3e297487cd36dc4e75f1c12cb85646f51d67f8202901778a8ef24401a414d023->leave($__internal_3e297487cd36dc4e75f1c12cb85646f51d67f8202901778a8ef24401a414d023_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ben/projects/LocomotiveBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
