<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b2197243782dde2f19f85e0953cec96c2391e2bb3911c046539757d8efebd91d extends Twig_Template
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
        $__internal_6ce30c98b17ef642a52a191a0b6dc0e9144e99dd840f55cf7a67456a528cefa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce30c98b17ef642a52a191a0b6dc0e9144e99dd840f55cf7a67456a528cefa1->enter($__internal_6ce30c98b17ef642a52a191a0b6dc0e9144e99dd840f55cf7a67456a528cefa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_39520a4df3ffb0771d6b0d5f1e02ad129273e409b01e60fc71223dc57fe39413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39520a4df3ffb0771d6b0d5f1e02ad129273e409b01e60fc71223dc57fe39413->enter($__internal_39520a4df3ffb0771d6b0d5f1e02ad129273e409b01e60fc71223dc57fe39413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_6ce30c98b17ef642a52a191a0b6dc0e9144e99dd840f55cf7a67456a528cefa1->leave($__internal_6ce30c98b17ef642a52a191a0b6dc0e9144e99dd840f55cf7a67456a528cefa1_prof);

        
        $__internal_39520a4df3ffb0771d6b0d5f1e02ad129273e409b01e60fc71223dc57fe39413->leave($__internal_39520a4df3ffb0771d6b0d5f1e02ad129273e409b01e60fc71223dc57fe39413_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
