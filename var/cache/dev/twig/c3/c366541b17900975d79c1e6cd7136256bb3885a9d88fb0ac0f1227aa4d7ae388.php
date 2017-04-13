<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d63b5df01471e05ea220c6624aa585e55d4409e16615fa803f38782e6fedd7a9 extends Twig_Template
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
        $__internal_f254d53196f727cdf2c4e8c5b84ffba94e7213fa7688affdc7c580523b052c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f254d53196f727cdf2c4e8c5b84ffba94e7213fa7688affdc7c580523b052c8a->enter($__internal_f254d53196f727cdf2c4e8c5b84ffba94e7213fa7688affdc7c580523b052c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0b63894eee031145684315648aec0d1538b32cfbbaea2c4653ca190c6a6486ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b63894eee031145684315648aec0d1538b32cfbbaea2c4653ca190c6a6486ba->enter($__internal_0b63894eee031145684315648aec0d1538b32cfbbaea2c4653ca190c6a6486ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f254d53196f727cdf2c4e8c5b84ffba94e7213fa7688affdc7c580523b052c8a->leave($__internal_f254d53196f727cdf2c4e8c5b84ffba94e7213fa7688affdc7c580523b052c8a_prof);

        
        $__internal_0b63894eee031145684315648aec0d1538b32cfbbaea2c4653ca190c6a6486ba->leave($__internal_0b63894eee031145684315648aec0d1538b32cfbbaea2c4653ca190c6a6486ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
