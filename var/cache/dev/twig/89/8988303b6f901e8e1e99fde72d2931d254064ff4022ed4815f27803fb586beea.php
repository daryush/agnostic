<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc3fae97b3ee0e0ae96a07fbc461f82a22836aabbda4728740370d34b2e4505e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522921f280e83af52ebe19e62b7906c2e70e8ef0227cb13ca9518e80a0bfd8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522921f280e83af52ebe19e62b7906c2e70e8ef0227cb13ca9518e80a0bfd8fd->enter($__internal_522921f280e83af52ebe19e62b7906c2e70e8ef0227cb13ca9518e80a0bfd8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a0b6263032e7d54ca55e9de8f6f68b920c19941072790e6c85482c5baac24b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0b6263032e7d54ca55e9de8f6f68b920c19941072790e6c85482c5baac24b2->enter($__internal_3a0b6263032e7d54ca55e9de8f6f68b920c19941072790e6c85482c5baac24b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522921f280e83af52ebe19e62b7906c2e70e8ef0227cb13ca9518e80a0bfd8fd->leave($__internal_522921f280e83af52ebe19e62b7906c2e70e8ef0227cb13ca9518e80a0bfd8fd_prof);

        
        $__internal_3a0b6263032e7d54ca55e9de8f6f68b920c19941072790e6c85482c5baac24b2->leave($__internal_3a0b6263032e7d54ca55e9de8f6f68b920c19941072790e6c85482c5baac24b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d84404b6c42184e83ec830e62955c751b5730b7926a01cc91feff3ca06e806d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84404b6c42184e83ec830e62955c751b5730b7926a01cc91feff3ca06e806d9->enter($__internal_d84404b6c42184e83ec830e62955c751b5730b7926a01cc91feff3ca06e806d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b478cae83bbd70b83a8cfd02344360dcefc569c86bbed5061939a6e2eb0239fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b478cae83bbd70b83a8cfd02344360dcefc569c86bbed5061939a6e2eb0239fa->enter($__internal_b478cae83bbd70b83a8cfd02344360dcefc569c86bbed5061939a6e2eb0239fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b478cae83bbd70b83a8cfd02344360dcefc569c86bbed5061939a6e2eb0239fa->leave($__internal_b478cae83bbd70b83a8cfd02344360dcefc569c86bbed5061939a6e2eb0239fa_prof);

        
        $__internal_d84404b6c42184e83ec830e62955c751b5730b7926a01cc91feff3ca06e806d9->leave($__internal_d84404b6c42184e83ec830e62955c751b5730b7926a01cc91feff3ca06e806d9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bf93aaf84dd4c832352350bcd89d8fca5f800db85efb202b3c40a7ba162e78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf93aaf84dd4c832352350bcd89d8fca5f800db85efb202b3c40a7ba162e78f->enter($__internal_9bf93aaf84dd4c832352350bcd89d8fca5f800db85efb202b3c40a7ba162e78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4be9b16360271f3b7c830bb482b87169e3bb88f54bfc3f63eda66b5dc1a0c10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be9b16360271f3b7c830bb482b87169e3bb88f54bfc3f63eda66b5dc1a0c10a->enter($__internal_4be9b16360271f3b7c830bb482b87169e3bb88f54bfc3f63eda66b5dc1a0c10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4be9b16360271f3b7c830bb482b87169e3bb88f54bfc3f63eda66b5dc1a0c10a->leave($__internal_4be9b16360271f3b7c830bb482b87169e3bb88f54bfc3f63eda66b5dc1a0c10a_prof);

        
        $__internal_9bf93aaf84dd4c832352350bcd89d8fca5f800db85efb202b3c40a7ba162e78f->leave($__internal_9bf93aaf84dd4c832352350bcd89d8fca5f800db85efb202b3c40a7ba162e78f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d55bb55681217aa7b0fc1ef229a3b9e514c7306f0a18680d455bc8187e94b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d55bb55681217aa7b0fc1ef229a3b9e514c7306f0a18680d455bc8187e94b93->enter($__internal_2d55bb55681217aa7b0fc1ef229a3b9e514c7306f0a18680d455bc8187e94b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_354abdab6f116a2347aeb3435a25d40e1c25099bb6b957e1f445e96b072570e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354abdab6f116a2347aeb3435a25d40e1c25099bb6b957e1f445e96b072570e2->enter($__internal_354abdab6f116a2347aeb3435a25d40e1c25099bb6b957e1f445e96b072570e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_354abdab6f116a2347aeb3435a25d40e1c25099bb6b957e1f445e96b072570e2->leave($__internal_354abdab6f116a2347aeb3435a25d40e1c25099bb6b957e1f445e96b072570e2_prof);

        
        $__internal_2d55bb55681217aa7b0fc1ef229a3b9e514c7306f0a18680d455bc8187e94b93->leave($__internal_2d55bb55681217aa7b0fc1ef229a3b9e514c7306f0a18680d455bc8187e94b93_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
