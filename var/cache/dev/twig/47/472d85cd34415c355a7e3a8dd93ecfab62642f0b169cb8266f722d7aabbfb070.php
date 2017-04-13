<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_387f9c2b00931b70ea50633657aa808e0349c2164cda894bae2f47208dfd577c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_492120b81051e79ec5435e3adb82d20dbd8441a91d80d4b25d1ea4389a686326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492120b81051e79ec5435e3adb82d20dbd8441a91d80d4b25d1ea4389a686326->enter($__internal_492120b81051e79ec5435e3adb82d20dbd8441a91d80d4b25d1ea4389a686326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6d049b408412c6ee0ac06f4c36599e5b83e0a2d3c3f93ca444d828703f5c2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d049b408412c6ee0ac06f4c36599e5b83e0a2d3c3f93ca444d828703f5c2b4->enter($__internal_d6d049b408412c6ee0ac06f4c36599e5b83e0a2d3c3f93ca444d828703f5c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492120b81051e79ec5435e3adb82d20dbd8441a91d80d4b25d1ea4389a686326->leave($__internal_492120b81051e79ec5435e3adb82d20dbd8441a91d80d4b25d1ea4389a686326_prof);

        
        $__internal_d6d049b408412c6ee0ac06f4c36599e5b83e0a2d3c3f93ca444d828703f5c2b4->leave($__internal_d6d049b408412c6ee0ac06f4c36599e5b83e0a2d3c3f93ca444d828703f5c2b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb2b0e0bd2b0b3e02a3a294555ce9bcb3920540dce53192efed15c7108588807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2b0e0bd2b0b3e02a3a294555ce9bcb3920540dce53192efed15c7108588807->enter($__internal_fb2b0e0bd2b0b3e02a3a294555ce9bcb3920540dce53192efed15c7108588807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_757736f39571277b4261f037f0798b2c0843389bfc6494d4aff2878f5073af0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757736f39571277b4261f037f0798b2c0843389bfc6494d4aff2878f5073af0c->enter($__internal_757736f39571277b4261f037f0798b2c0843389bfc6494d4aff2878f5073af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_757736f39571277b4261f037f0798b2c0843389bfc6494d4aff2878f5073af0c->leave($__internal_757736f39571277b4261f037f0798b2c0843389bfc6494d4aff2878f5073af0c_prof);

        
        $__internal_fb2b0e0bd2b0b3e02a3a294555ce9bcb3920540dce53192efed15c7108588807->leave($__internal_fb2b0e0bd2b0b3e02a3a294555ce9bcb3920540dce53192efed15c7108588807_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
