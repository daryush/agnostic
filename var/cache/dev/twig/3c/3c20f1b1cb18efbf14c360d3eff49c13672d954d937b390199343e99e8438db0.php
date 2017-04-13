<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5934cbc817bc2a70bd3293770277d1458e677bed7644d382543622b39783f02e extends Twig_Template
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
        $__internal_f82ee27cddc2c8533ce4d49c6f65a7f12938d90e29d41e7e2397a7a1d35190e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82ee27cddc2c8533ce4d49c6f65a7f12938d90e29d41e7e2397a7a1d35190e6->enter($__internal_f82ee27cddc2c8533ce4d49c6f65a7f12938d90e29d41e7e2397a7a1d35190e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a380a048f8d43d88dd5ca3175b658270b1bcbeed15cac77378afb0c5e2974cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a380a048f8d43d88dd5ca3175b658270b1bcbeed15cac77378afb0c5e2974cd5->enter($__internal_a380a048f8d43d88dd5ca3175b658270b1bcbeed15cac77378afb0c5e2974cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f82ee27cddc2c8533ce4d49c6f65a7f12938d90e29d41e7e2397a7a1d35190e6->leave($__internal_f82ee27cddc2c8533ce4d49c6f65a7f12938d90e29d41e7e2397a7a1d35190e6_prof);

        
        $__internal_a380a048f8d43d88dd5ca3175b658270b1bcbeed15cac77378afb0c5e2974cd5->leave($__internal_a380a048f8d43d88dd5ca3175b658270b1bcbeed15cac77378afb0c5e2974cd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
