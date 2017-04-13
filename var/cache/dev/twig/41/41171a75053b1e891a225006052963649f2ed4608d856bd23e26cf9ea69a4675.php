<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2e32b41e65e701d4411eee772d8ab7c188959292f619b85f26cf9372740c1da2 extends Twig_Template
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
        $__internal_b0ea861be8b1cb056a384910416e42c2d61249deecffb5ca6c725eca0fececd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ea861be8b1cb056a384910416e42c2d61249deecffb5ca6c725eca0fececd1->enter($__internal_b0ea861be8b1cb056a384910416e42c2d61249deecffb5ca6c725eca0fececd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9deac72f9e9a12b0872f7b69fed35e020ccbf16d8a3f24cb2313f4a3500614ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9deac72f9e9a12b0872f7b69fed35e020ccbf16d8a3f24cb2313f4a3500614ed->enter($__internal_9deac72f9e9a12b0872f7b69fed35e020ccbf16d8a3f24cb2313f4a3500614ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b0ea861be8b1cb056a384910416e42c2d61249deecffb5ca6c725eca0fececd1->leave($__internal_b0ea861be8b1cb056a384910416e42c2d61249deecffb5ca6c725eca0fececd1_prof);

        
        $__internal_9deac72f9e9a12b0872f7b69fed35e020ccbf16d8a3f24cb2313f4a3500614ed->leave($__internal_9deac72f9e9a12b0872f7b69fed35e020ccbf16d8a3f24cb2313f4a3500614ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
