<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9b216d2529a5220a197ca216e33c905c2428f043114274de56ce2ebed55d0996 extends Twig_Template
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
        $__internal_dfac64f559311664b139d9e66f4476975e369eb4e2fd08070d508349186baef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfac64f559311664b139d9e66f4476975e369eb4e2fd08070d508349186baef5->enter($__internal_dfac64f559311664b139d9e66f4476975e369eb4e2fd08070d508349186baef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e24f5d12cd357c2546f8b481c145bfa493cbe6192ef105d8ce4d93f06f26c0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24f5d12cd357c2546f8b481c145bfa493cbe6192ef105d8ce4d93f06f26c0c0->enter($__internal_e24f5d12cd357c2546f8b481c145bfa493cbe6192ef105d8ce4d93f06f26c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dfac64f559311664b139d9e66f4476975e369eb4e2fd08070d508349186baef5->leave($__internal_dfac64f559311664b139d9e66f4476975e369eb4e2fd08070d508349186baef5_prof);

        
        $__internal_e24f5d12cd357c2546f8b481c145bfa493cbe6192ef105d8ce4d93f06f26c0c0->leave($__internal_e24f5d12cd357c2546f8b481c145bfa493cbe6192ef105d8ce4d93f06f26c0c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
