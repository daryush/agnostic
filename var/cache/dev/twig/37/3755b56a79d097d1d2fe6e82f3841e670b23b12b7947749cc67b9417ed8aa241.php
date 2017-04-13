<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e2bc5c4c960f06cc3da4b5fcc94c47a93a34b2ac96cc7f1add5dc4744509448e extends Twig_Template
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
        $__internal_483c825f52a67153ce6b4a17cfe9d102908ecef9440f0b98b286a01c229d46b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483c825f52a67153ce6b4a17cfe9d102908ecef9440f0b98b286a01c229d46b1->enter($__internal_483c825f52a67153ce6b4a17cfe9d102908ecef9440f0b98b286a01c229d46b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_66c79285d157918e40538a1b5c22b7eff9d88036a62dc7906665df19e5050d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c79285d157918e40538a1b5c22b7eff9d88036a62dc7906665df19e5050d4e->enter($__internal_66c79285d157918e40538a1b5c22b7eff9d88036a62dc7906665df19e5050d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_483c825f52a67153ce6b4a17cfe9d102908ecef9440f0b98b286a01c229d46b1->leave($__internal_483c825f52a67153ce6b4a17cfe9d102908ecef9440f0b98b286a01c229d46b1_prof);

        
        $__internal_66c79285d157918e40538a1b5c22b7eff9d88036a62dc7906665df19e5050d4e->leave($__internal_66c79285d157918e40538a1b5c22b7eff9d88036a62dc7906665df19e5050d4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
