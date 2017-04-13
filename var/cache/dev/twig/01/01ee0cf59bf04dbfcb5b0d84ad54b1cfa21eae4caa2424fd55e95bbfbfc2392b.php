<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_a451d0fc2d8fe7e1b698b83d97703c076d1ffd814cd2f098a3380292d1af4124 extends Twig_Template
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
        $__internal_4fa77762675d4bd37e084ad2462fe90ee4486a43ca57429d5222a3126684c6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa77762675d4bd37e084ad2462fe90ee4486a43ca57429d5222a3126684c6fb->enter($__internal_4fa77762675d4bd37e084ad2462fe90ee4486a43ca57429d5222a3126684c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8476e0ef1dae16cd2824db425a0eb901c5617e68ff3fb7dcf4f3f8056ff465ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8476e0ef1dae16cd2824db425a0eb901c5617e68ff3fb7dcf4f3f8056ff465ff->enter($__internal_8476e0ef1dae16cd2824db425a0eb901c5617e68ff3fb7dcf4f3f8056ff465ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa77762675d4bd37e084ad2462fe90ee4486a43ca57429d5222a3126684c6fb->leave($__internal_4fa77762675d4bd37e084ad2462fe90ee4486a43ca57429d5222a3126684c6fb_prof);

        
        $__internal_8476e0ef1dae16cd2824db425a0eb901c5617e68ff3fb7dcf4f3f8056ff465ff->leave($__internal_8476e0ef1dae16cd2824db425a0eb901c5617e68ff3fb7dcf4f3f8056ff465ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2baab58ea07491a07de245087f1c69beb716f41afa2b73361282eeb1cf53ecc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baab58ea07491a07de245087f1c69beb716f41afa2b73361282eeb1cf53ecc1->enter($__internal_2baab58ea07491a07de245087f1c69beb716f41afa2b73361282eeb1cf53ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0085e25fe681c2531b54e086f741eb81321af3098abef339cec29055a85a2211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0085e25fe681c2531b54e086f741eb81321af3098abef339cec29055a85a2211->enter($__internal_0085e25fe681c2531b54e086f741eb81321af3098abef339cec29055a85a2211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0085e25fe681c2531b54e086f741eb81321af3098abef339cec29055a85a2211->leave($__internal_0085e25fe681c2531b54e086f741eb81321af3098abef339cec29055a85a2211_prof);

        
        $__internal_2baab58ea07491a07de245087f1c69beb716f41afa2b73361282eeb1cf53ecc1->leave($__internal_2baab58ea07491a07de245087f1c69beb716f41afa2b73361282eeb1cf53ecc1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71852c3a524ea15455a105e2b9499bbcb0081ee62522f8e9d7bbca51e4a3f59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71852c3a524ea15455a105e2b9499bbcb0081ee62522f8e9d7bbca51e4a3f59b->enter($__internal_71852c3a524ea15455a105e2b9499bbcb0081ee62522f8e9d7bbca51e4a3f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70cd3acc45ec74015226951fdbbc7e66c2f29af39f5f58ed2b6192095bdfc888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cd3acc45ec74015226951fdbbc7e66c2f29af39f5f58ed2b6192095bdfc888->enter($__internal_70cd3acc45ec74015226951fdbbc7e66c2f29af39f5f58ed2b6192095bdfc888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_70cd3acc45ec74015226951fdbbc7e66c2f29af39f5f58ed2b6192095bdfc888->leave($__internal_70cd3acc45ec74015226951fdbbc7e66c2f29af39f5f58ed2b6192095bdfc888_prof);

        
        $__internal_71852c3a524ea15455a105e2b9499bbcb0081ee62522f8e9d7bbca51e4a3f59b->leave($__internal_71852c3a524ea15455a105e2b9499bbcb0081ee62522f8e9d7bbca51e4a3f59b_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
