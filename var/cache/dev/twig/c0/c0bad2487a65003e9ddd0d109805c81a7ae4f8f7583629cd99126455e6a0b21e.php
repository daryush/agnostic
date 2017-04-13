<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_8fc49e2878905bf6832afce8ee863c2e1f6362957ff0e9b80d7034d2ea8499f4 extends Twig_Template
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
        $__internal_bca42e81c347e515e0f65795808b17cf36bac5f306e5c592b6886af9f879e254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca42e81c347e515e0f65795808b17cf36bac5f306e5c592b6886af9f879e254->enter($__internal_bca42e81c347e515e0f65795808b17cf36bac5f306e5c592b6886af9f879e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_776841b1286f11fc42d2963c67809b1518522bfcad8883b3efc9f8ab5dbc2830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776841b1286f11fc42d2963c67809b1518522bfcad8883b3efc9f8ab5dbc2830->enter($__internal_776841b1286f11fc42d2963c67809b1518522bfcad8883b3efc9f8ab5dbc2830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_bca42e81c347e515e0f65795808b17cf36bac5f306e5c592b6886af9f879e254->leave($__internal_bca42e81c347e515e0f65795808b17cf36bac5f306e5c592b6886af9f879e254_prof);

        
        $__internal_776841b1286f11fc42d2963c67809b1518522bfcad8883b3efc9f8ab5dbc2830->leave($__internal_776841b1286f11fc42d2963c67809b1518522bfcad8883b3efc9f8ab5dbc2830_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
