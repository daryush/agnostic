<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1c02e8359102a992fe9a681fd5d014e2cc77562869938c9b2244b75a6cbcbd3d extends Twig_Template
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
        $__internal_17d198b01af1100d67e992b24cf0462834f77dab9ad5d40642519a36ce8caff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d198b01af1100d67e992b24cf0462834f77dab9ad5d40642519a36ce8caff8->enter($__internal_17d198b01af1100d67e992b24cf0462834f77dab9ad5d40642519a36ce8caff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6a4c58495de6bd125816f0bcfe42bc15e7147263e5e9e5850f803f33145571c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4c58495de6bd125816f0bcfe42bc15e7147263e5e9e5850f803f33145571c9->enter($__internal_6a4c58495de6bd125816f0bcfe42bc15e7147263e5e9e5850f803f33145571c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_17d198b01af1100d67e992b24cf0462834f77dab9ad5d40642519a36ce8caff8->leave($__internal_17d198b01af1100d67e992b24cf0462834f77dab9ad5d40642519a36ce8caff8_prof);

        
        $__internal_6a4c58495de6bd125816f0bcfe42bc15e7147263e5e9e5850f803f33145571c9->leave($__internal_6a4c58495de6bd125816f0bcfe42bc15e7147263e5e9e5850f803f33145571c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
