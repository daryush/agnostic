<?php

/* base.html.twig */
class __TwigTemplate_0ca029efa2f16d3a6c52882ce783eb0b7d025ee0e87994b3ba616052232e629b extends Twig_Template
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
        $__internal_dc6a339245b3b9c078c9fb5e4d5818fe9b11586d9bdb0a1f3a8e5a8b4639f34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6a339245b3b9c078c9fb5e4d5818fe9b11586d9bdb0a1f3a8e5a8b4639f34e->enter($__internal_dc6a339245b3b9c078c9fb5e4d5818fe9b11586d9bdb0a1f3a8e5a8b4639f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a15a1be13f9a4397e170a69f0266814a8c26e461a9af449f3768c799552c5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a15a1be13f9a4397e170a69f0266814a8c26e461a9af449f3768c799552c5f5->enter($__internal_1a15a1be13f9a4397e170a69f0266814a8c26e461a9af449f3768c799552c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dc6a339245b3b9c078c9fb5e4d5818fe9b11586d9bdb0a1f3a8e5a8b4639f34e->leave($__internal_dc6a339245b3b9c078c9fb5e4d5818fe9b11586d9bdb0a1f3a8e5a8b4639f34e_prof);

        
        $__internal_1a15a1be13f9a4397e170a69f0266814a8c26e461a9af449f3768c799552c5f5->leave($__internal_1a15a1be13f9a4397e170a69f0266814a8c26e461a9af449f3768c799552c5f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28afdaffbf1029af22f66e1c7fd06d05794253eb005ff2476f3a898c26e336c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28afdaffbf1029af22f66e1c7fd06d05794253eb005ff2476f3a898c26e336c3->enter($__internal_28afdaffbf1029af22f66e1c7fd06d05794253eb005ff2476f3a898c26e336c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbfba87bb21768fb07924a4a6b2d62d9c37a4914035090b34368a3da5218daf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfba87bb21768fb07924a4a6b2d62d9c37a4914035090b34368a3da5218daf2->enter($__internal_bbfba87bb21768fb07924a4a6b2d62d9c37a4914035090b34368a3da5218daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bbfba87bb21768fb07924a4a6b2d62d9c37a4914035090b34368a3da5218daf2->leave($__internal_bbfba87bb21768fb07924a4a6b2d62d9c37a4914035090b34368a3da5218daf2_prof);

        
        $__internal_28afdaffbf1029af22f66e1c7fd06d05794253eb005ff2476f3a898c26e336c3->leave($__internal_28afdaffbf1029af22f66e1c7fd06d05794253eb005ff2476f3a898c26e336c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4543e3cdc50aefbf1bb33886cbf8d8927d228692675be753cb85b5fb211c021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4543e3cdc50aefbf1bb33886cbf8d8927d228692675be753cb85b5fb211c021->enter($__internal_c4543e3cdc50aefbf1bb33886cbf8d8927d228692675be753cb85b5fb211c021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3fa804beffe2be1982a8b2cbb1f7bdeafbeabcca47fc32de1275193fd505bf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa804beffe2be1982a8b2cbb1f7bdeafbeabcca47fc32de1275193fd505bf06->enter($__internal_3fa804beffe2be1982a8b2cbb1f7bdeafbeabcca47fc32de1275193fd505bf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3fa804beffe2be1982a8b2cbb1f7bdeafbeabcca47fc32de1275193fd505bf06->leave($__internal_3fa804beffe2be1982a8b2cbb1f7bdeafbeabcca47fc32de1275193fd505bf06_prof);

        
        $__internal_c4543e3cdc50aefbf1bb33886cbf8d8927d228692675be753cb85b5fb211c021->leave($__internal_c4543e3cdc50aefbf1bb33886cbf8d8927d228692675be753cb85b5fb211c021_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fc02334d07dc8f6cb86d2fdce06983ac2ca12b0943888d10371220aa22942a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc02334d07dc8f6cb86d2fdce06983ac2ca12b0943888d10371220aa22942a7->enter($__internal_7fc02334d07dc8f6cb86d2fdce06983ac2ca12b0943888d10371220aa22942a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a617a14d5614c807be3b1aa06bab87c7ef4fd31f7bd2ea4e0dcabcb9042b33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a617a14d5614c807be3b1aa06bab87c7ef4fd31f7bd2ea4e0dcabcb9042b33d->enter($__internal_9a617a14d5614c807be3b1aa06bab87c7ef4fd31f7bd2ea4e0dcabcb9042b33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a617a14d5614c807be3b1aa06bab87c7ef4fd31f7bd2ea4e0dcabcb9042b33d->leave($__internal_9a617a14d5614c807be3b1aa06bab87c7ef4fd31f7bd2ea4e0dcabcb9042b33d_prof);

        
        $__internal_7fc02334d07dc8f6cb86d2fdce06983ac2ca12b0943888d10371220aa22942a7->leave($__internal_7fc02334d07dc8f6cb86d2fdce06983ac2ca12b0943888d10371220aa22942a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ea3018f807a8990fa33ab1e84b578787fdb27a59ccfb6cecf92fa97b27ce36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea3018f807a8990fa33ab1e84b578787fdb27a59ccfb6cecf92fa97b27ce36f->enter($__internal_6ea3018f807a8990fa33ab1e84b578787fdb27a59ccfb6cecf92fa97b27ce36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_366b5dea92d2994a5db30d7ce3d698ee5a4dd3c1b7ed1ea89adf22afc0e7500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366b5dea92d2994a5db30d7ce3d698ee5a4dd3c1b7ed1ea89adf22afc0e7500f->enter($__internal_366b5dea92d2994a5db30d7ce3d698ee5a4dd3c1b7ed1ea89adf22afc0e7500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_366b5dea92d2994a5db30d7ce3d698ee5a4dd3c1b7ed1ea89adf22afc0e7500f->leave($__internal_366b5dea92d2994a5db30d7ce3d698ee5a4dd3c1b7ed1ea89adf22afc0e7500f_prof);

        
        $__internal_6ea3018f807a8990fa33ab1e84b578787fdb27a59ccfb6cecf92fa97b27ce36f->leave($__internal_6ea3018f807a8990fa33ab1e84b578787fdb27a59ccfb6cecf92fa97b27ce36f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "/var/www/agnostic/app/Resources/views/base.html.twig");
    }
}
