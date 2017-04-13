<?php

/* default/items.html.twig */
class __TwigTemplate_6b000eb0a3ea62b9007cfe6292f95a72ef5b50652bc49e64e885de4571c97236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/items.html.twig", 1);
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
        $__internal_ee946c6008a3b69119d521e103b8f1ed354fa697123534d6f3f0cdc1ef82b4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee946c6008a3b69119d521e103b8f1ed354fa697123534d6f3f0cdc1ef82b4be->enter($__internal_ee946c6008a3b69119d521e103b8f1ed354fa697123534d6f3f0cdc1ef82b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/items.html.twig"));

        $__internal_dab8cc1b41f63319a9dc8d132c561005e7261596f70368c78fe713958f8c885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab8cc1b41f63319a9dc8d132c561005e7261596f70368c78fe713958f8c885b->enter($__internal_dab8cc1b41f63319a9dc8d132c561005e7261596f70368c78fe713958f8c885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/items.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee946c6008a3b69119d521e103b8f1ed354fa697123534d6f3f0cdc1ef82b4be->leave($__internal_ee946c6008a3b69119d521e103b8f1ed354fa697123534d6f3f0cdc1ef82b4be_prof);

        
        $__internal_dab8cc1b41f63319a9dc8d132c561005e7261596f70368c78fe713958f8c885b->leave($__internal_dab8cc1b41f63319a9dc8d132c561005e7261596f70368c78fe713958f8c885b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3af6faafc3a4871d0f148ed9f0f230faad23f5b9ebf3d92ba0e02dbe398a9ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af6faafc3a4871d0f148ed9f0f230faad23f5b9ebf3d92ba0e02dbe398a9ec9->enter($__internal_3af6faafc3a4871d0f148ed9f0f230faad23f5b9ebf3d92ba0e02dbe398a9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57b05066e8498136c71ef8fabb36cbc9b4c5eaa68df0406482a969ca19d8bbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b05066e8498136c71ef8fabb36cbc9b4c5eaa68df0406482a969ca19d8bbce->enter($__internal_57b05066e8498136c71ef8fabb36cbc9b4c5eaa68df0406482a969ca19d8bbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "name", array()), "html", null, true);
            echo " owned by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ownerEmail", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
";
        
        $__internal_57b05066e8498136c71ef8fabb36cbc9b4c5eaa68df0406482a969ca19d8bbce->leave($__internal_57b05066e8498136c71ef8fabb36cbc9b4c5eaa68df0406482a969ca19d8bbce_prof);

        
        $__internal_3af6faafc3a4871d0f148ed9f0f230faad23f5b9ebf3d92ba0e02dbe398a9ec9->leave($__internal_3af6faafc3a4871d0f148ed9f0f230faad23f5b9ebf3d92ba0e02dbe398a9ec9_prof);

    }

    public function getTemplateName()
    {
        return "default/items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <ul>
        {% for item in items %}
            <li>{{ item.name }} owned by {{ item.ownerEmail }}</li>
        {% endfor %}
    </ul>
{% endblock %}", "default/items.html.twig", "/var/www/agnostic/app/Resources/views/default/items.html.twig");
    }
}
