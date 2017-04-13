<?php

/* default/new.html.twig */
class __TwigTemplate_71d692e5802e7c5dfdd901203e33ae0ca515c95cbe210da10465681aa92867f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_574906e361df47e03a6b7ce09612ab9a1291e5babadad6e4a26c415ddbb59171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574906e361df47e03a6b7ce09612ab9a1291e5babadad6e4a26c415ddbb59171->enter($__internal_574906e361df47e03a6b7ce09612ab9a1291e5babadad6e4a26c415ddbb59171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $__internal_059d41313242903ec3525031e56c9f51cadf7a63b711e1d1b709b9a6373a7091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059d41313242903ec3525031e56c9f51cadf7a63b711e1d1b709b9a6373a7091->enter($__internal_059d41313242903ec3525031e56c9f51cadf7a63b711e1d1b709b9a6373a7091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574906e361df47e03a6b7ce09612ab9a1291e5babadad6e4a26c415ddbb59171->leave($__internal_574906e361df47e03a6b7ce09612ab9a1291e5babadad6e4a26c415ddbb59171_prof);

        
        $__internal_059d41313242903ec3525031e56c9f51cadf7a63b711e1d1b709b9a6373a7091->leave($__internal_059d41313242903ec3525031e56c9f51cadf7a63b711e1d1b709b9a6373a7091_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2400d6c6ae951c1f33d2fedb454eeadd951e542c9246ee37c63191ce14b0370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2400d6c6ae951c1f33d2fedb454eeadd951e542c9246ee37c63191ce14b0370->enter($__internal_b2400d6c6ae951c1f33d2fedb454eeadd951e542c9246ee37c63191ce14b0370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_156f21444b6e2174dffb1dd303f98ed3735dbff06d8db3bb380a1a5f5ea9c813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156f21444b6e2174dffb1dd303f98ed3735dbff06d8db3bb380a1a5f5ea9c813->enter($__internal_156f21444b6e2174dffb1dd303f98ed3735dbff06d8db3bb380a1a5f5ea9c813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_156f21444b6e2174dffb1dd303f98ed3735dbff06d8db3bb380a1a5f5ea9c813->leave($__internal_156f21444b6e2174dffb1dd303f98ed3735dbff06d8db3bb380a1a5f5ea9c813_prof);

        
        $__internal_b2400d6c6ae951c1f33d2fedb454eeadd951e542c9246ee37c63191ce14b0370->leave($__internal_b2400d6c6ae951c1f33d2fedb454eeadd951e542c9246ee37c63191ce14b0370_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "default/new.html.twig", "/var/www/agnostic/app/Resources/views/default/new.html.twig");
    }
}
