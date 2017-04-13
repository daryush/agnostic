<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d303f0f13021cea0641fd13b278e93ca1104e42fe92495c16f43a1d18b0dc216 extends Twig_Template
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
        $__internal_a964b2bfc3afff981f16818d86dbecb3bf04e969903c693a48f01c7f6e6eec05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a964b2bfc3afff981f16818d86dbecb3bf04e969903c693a48f01c7f6e6eec05->enter($__internal_a964b2bfc3afff981f16818d86dbecb3bf04e969903c693a48f01c7f6e6eec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c645f76d697f6667f9a124e86ab33a8f386c77339854327c15bf39a572d87a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645f76d697f6667f9a124e86ab33a8f386c77339854327c15bf39a572d87a61->enter($__internal_c645f76d697f6667f9a124e86ab33a8f386c77339854327c15bf39a572d87a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_a964b2bfc3afff981f16818d86dbecb3bf04e969903c693a48f01c7f6e6eec05->leave($__internal_a964b2bfc3afff981f16818d86dbecb3bf04e969903c693a48f01c7f6e6eec05_prof);

        
        $__internal_c645f76d697f6667f9a124e86ab33a8f386c77339854327c15bf39a572d87a61->leave($__internal_c645f76d697f6667f9a124e86ab33a8f386c77339854327c15bf39a572d87a61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
