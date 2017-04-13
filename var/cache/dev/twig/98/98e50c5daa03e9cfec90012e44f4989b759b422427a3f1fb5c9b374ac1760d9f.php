<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1db0ce9d80403c466613e887fe55d7b7213659895e0e6c5c5189801cd22775f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62668c87015d69e5df6769923fc522296b1ef36817f55dcc890f214c3d5045bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62668c87015d69e5df6769923fc522296b1ef36817f55dcc890f214c3d5045bd->enter($__internal_62668c87015d69e5df6769923fc522296b1ef36817f55dcc890f214c3d5045bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_dd1ee665f75a76f8602f0a2647c6f40d4e3b4806a6e52b59a79b337f49104fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1ee665f75a76f8602f0a2647c6f40d4e3b4806a6e52b59a79b337f49104fff->enter($__internal_dd1ee665f75a76f8602f0a2647c6f40d4e3b4806a6e52b59a79b337f49104fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_62668c87015d69e5df6769923fc522296b1ef36817f55dcc890f214c3d5045bd->leave($__internal_62668c87015d69e5df6769923fc522296b1ef36817f55dcc890f214c3d5045bd_prof);

        
        $__internal_dd1ee665f75a76f8602f0a2647c6f40d4e3b4806a6e52b59a79b337f49104fff->leave($__internal_dd1ee665f75a76f8602f0a2647c6f40d4e3b4806a6e52b59a79b337f49104fff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
