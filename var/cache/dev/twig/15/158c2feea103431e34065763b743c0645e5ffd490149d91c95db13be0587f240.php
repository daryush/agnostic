<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0ba0d6bdeed6bea8ed207ba0216e0d83479bfeffda0abca115e39f9a3dbcc2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_20fa84f2780b066e6284c4382693347fc45076334d9a66a0c66e0f23150a8137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fa84f2780b066e6284c4382693347fc45076334d9a66a0c66e0f23150a8137->enter($__internal_20fa84f2780b066e6284c4382693347fc45076334d9a66a0c66e0f23150a8137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6fea4dad2f780d795d59742d0baab869b0f350c3c8552f1cca984bc42569f4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fea4dad2f780d795d59742d0baab869b0f350c3c8552f1cca984bc42569f4d5->enter($__internal_6fea4dad2f780d795d59742d0baab869b0f350c3c8552f1cca984bc42569f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20fa84f2780b066e6284c4382693347fc45076334d9a66a0c66e0f23150a8137->leave($__internal_20fa84f2780b066e6284c4382693347fc45076334d9a66a0c66e0f23150a8137_prof);

        
        $__internal_6fea4dad2f780d795d59742d0baab869b0f350c3c8552f1cca984bc42569f4d5->leave($__internal_6fea4dad2f780d795d59742d0baab869b0f350c3c8552f1cca984bc42569f4d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef30e42b63422078da5b1ac3454cae4d72160c7102552986107ca054795fb961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef30e42b63422078da5b1ac3454cae4d72160c7102552986107ca054795fb961->enter($__internal_ef30e42b63422078da5b1ac3454cae4d72160c7102552986107ca054795fb961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9e9534ce31f14e0a6876c7dca5c607a8b2e5731b46c9d02ad975b016b095ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e9534ce31f14e0a6876c7dca5c607a8b2e5731b46c9d02ad975b016b095ed6->enter($__internal_b9e9534ce31f14e0a6876c7dca5c607a8b2e5731b46c9d02ad975b016b095ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b9e9534ce31f14e0a6876c7dca5c607a8b2e5731b46c9d02ad975b016b095ed6->leave($__internal_b9e9534ce31f14e0a6876c7dca5c607a8b2e5731b46c9d02ad975b016b095ed6_prof);

        
        $__internal_ef30e42b63422078da5b1ac3454cae4d72160c7102552986107ca054795fb961->leave($__internal_ef30e42b63422078da5b1ac3454cae4d72160c7102552986107ca054795fb961_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6940e31d42fff47393653685beab5b3eeafe998205db5fd696d59175483dd918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6940e31d42fff47393653685beab5b3eeafe998205db5fd696d59175483dd918->enter($__internal_6940e31d42fff47393653685beab5b3eeafe998205db5fd696d59175483dd918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b31e40cb35c64bb8fe0dfbeb28f83630fb950a72360427c2cb60085bee8288df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e40cb35c64bb8fe0dfbeb28f83630fb950a72360427c2cb60085bee8288df->enter($__internal_b31e40cb35c64bb8fe0dfbeb28f83630fb950a72360427c2cb60085bee8288df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b31e40cb35c64bb8fe0dfbeb28f83630fb950a72360427c2cb60085bee8288df->leave($__internal_b31e40cb35c64bb8fe0dfbeb28f83630fb950a72360427c2cb60085bee8288df_prof);

        
        $__internal_6940e31d42fff47393653685beab5b3eeafe998205db5fd696d59175483dd918->leave($__internal_6940e31d42fff47393653685beab5b3eeafe998205db5fd696d59175483dd918_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4218ad9a59fb7bf124ccfa2aae91e56a8371b952b69e9cfd35a047783f730843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4218ad9a59fb7bf124ccfa2aae91e56a8371b952b69e9cfd35a047783f730843->enter($__internal_4218ad9a59fb7bf124ccfa2aae91e56a8371b952b69e9cfd35a047783f730843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cf7c98cba3af6aa66ff5f6004c75217036f358e72a26a4f14c3f5ea923dd91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf7c98cba3af6aa66ff5f6004c75217036f358e72a26a4f14c3f5ea923dd91a->enter($__internal_8cf7c98cba3af6aa66ff5f6004c75217036f358e72a26a4f14c3f5ea923dd91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8cf7c98cba3af6aa66ff5f6004c75217036f358e72a26a4f14c3f5ea923dd91a->leave($__internal_8cf7c98cba3af6aa66ff5f6004c75217036f358e72a26a4f14c3f5ea923dd91a_prof);

        
        $__internal_4218ad9a59fb7bf124ccfa2aae91e56a8371b952b69e9cfd35a047783f730843->leave($__internal_4218ad9a59fb7bf124ccfa2aae91e56a8371b952b69e9cfd35a047783f730843_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
