<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7cb441df93c234af808532da60b5267c440e8438e539c7ad19558bbf8b4fa1fb extends Twig_Template
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
        $__internal_8867e17c334e8ca830fcb76d59d806b96d47b0212f201266c616853231813e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8867e17c334e8ca830fcb76d59d806b96d47b0212f201266c616853231813e9d->enter($__internal_8867e17c334e8ca830fcb76d59d806b96d47b0212f201266c616853231813e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_27520696e7832871ff881a213bc17a84e422676e6d31c7497fe80e7206ccd04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27520696e7832871ff881a213bc17a84e422676e6d31c7497fe80e7206ccd04c->enter($__internal_27520696e7832871ff881a213bc17a84e422676e6d31c7497fe80e7206ccd04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8867e17c334e8ca830fcb76d59d806b96d47b0212f201266c616853231813e9d->leave($__internal_8867e17c334e8ca830fcb76d59d806b96d47b0212f201266c616853231813e9d_prof);

        
        $__internal_27520696e7832871ff881a213bc17a84e422676e6d31c7497fe80e7206ccd04c->leave($__internal_27520696e7832871ff881a213bc17a84e422676e6d31c7497fe80e7206ccd04c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
