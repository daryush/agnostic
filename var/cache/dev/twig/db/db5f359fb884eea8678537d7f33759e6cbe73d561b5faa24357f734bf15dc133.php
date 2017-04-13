<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c1a50a4b0412d807cffdd1566ca5fa4e90fdc7eb5a0107f0bd7c82b8dfff7ef6 extends Twig_Template
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
        $__internal_eed7e1bf7e2de7687ff8d62a6330d9acf27055281fa471d79c8ca25ec899130b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed7e1bf7e2de7687ff8d62a6330d9acf27055281fa471d79c8ca25ec899130b->enter($__internal_eed7e1bf7e2de7687ff8d62a6330d9acf27055281fa471d79c8ca25ec899130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ed249008402153e6203cd7edeeaf2914d2beded0207bf17fbc79928f5b3da3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed249008402153e6203cd7edeeaf2914d2beded0207bf17fbc79928f5b3da3ca->enter($__internal_ed249008402153e6203cd7edeeaf2914d2beded0207bf17fbc79928f5b3da3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_eed7e1bf7e2de7687ff8d62a6330d9acf27055281fa471d79c8ca25ec899130b->leave($__internal_eed7e1bf7e2de7687ff8d62a6330d9acf27055281fa471d79c8ca25ec899130b_prof);

        
        $__internal_ed249008402153e6203cd7edeeaf2914d2beded0207bf17fbc79928f5b3da3ca->leave($__internal_ed249008402153e6203cd7edeeaf2914d2beded0207bf17fbc79928f5b3da3ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
