<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_434cbc1dc4208e2e87eb63eb82f9b29f08d494530be71b33ee1724ab6490430a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_68f98bf0bd01e3a1093571f4b2a82fd811e990290b8aa10e27e357dac97c3695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f98bf0bd01e3a1093571f4b2a82fd811e990290b8aa10e27e357dac97c3695->enter($__internal_68f98bf0bd01e3a1093571f4b2a82fd811e990290b8aa10e27e357dac97c3695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c976f73dc6e9795b6fa77dc639add30282f1d736bdc47902fe4e682bc028113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c976f73dc6e9795b6fa77dc639add30282f1d736bdc47902fe4e682bc028113->enter($__internal_8c976f73dc6e9795b6fa77dc639add30282f1d736bdc47902fe4e682bc028113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f98bf0bd01e3a1093571f4b2a82fd811e990290b8aa10e27e357dac97c3695->leave($__internal_68f98bf0bd01e3a1093571f4b2a82fd811e990290b8aa10e27e357dac97c3695_prof);

        
        $__internal_8c976f73dc6e9795b6fa77dc639add30282f1d736bdc47902fe4e682bc028113->leave($__internal_8c976f73dc6e9795b6fa77dc639add30282f1d736bdc47902fe4e682bc028113_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c190a87f4fca60ccd746733ef23e93a99b0057532b8a265b87f933f0a9047c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c190a87f4fca60ccd746733ef23e93a99b0057532b8a265b87f933f0a9047c4f->enter($__internal_c190a87f4fca60ccd746733ef23e93a99b0057532b8a265b87f933f0a9047c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb94037867e0edb78e1978e6f8a17da30bfe5b657dd6ffb721b359c4ab7949e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb94037867e0edb78e1978e6f8a17da30bfe5b657dd6ffb721b359c4ab7949e8->enter($__internal_fb94037867e0edb78e1978e6f8a17da30bfe5b657dd6ffb721b359c4ab7949e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb94037867e0edb78e1978e6f8a17da30bfe5b657dd6ffb721b359c4ab7949e8->leave($__internal_fb94037867e0edb78e1978e6f8a17da30bfe5b657dd6ffb721b359c4ab7949e8_prof);

        
        $__internal_c190a87f4fca60ccd746733ef23e93a99b0057532b8a265b87f933f0a9047c4f->leave($__internal_c190a87f4fca60ccd746733ef23e93a99b0057532b8a265b87f933f0a9047c4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baf0b3f25b675d3378187f1150525e048db20faa293ae250753f865c9c8866a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf0b3f25b675d3378187f1150525e048db20faa293ae250753f865c9c8866a8->enter($__internal_baf0b3f25b675d3378187f1150525e048db20faa293ae250753f865c9c8866a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad7a6b483d1b4a7b930338b99f417e6866cbe3536c3e7aeb1b54175fd076aefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7a6b483d1b4a7b930338b99f417e6866cbe3536c3e7aeb1b54175fd076aefe->enter($__internal_ad7a6b483d1b4a7b930338b99f417e6866cbe3536c3e7aeb1b54175fd076aefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad7a6b483d1b4a7b930338b99f417e6866cbe3536c3e7aeb1b54175fd076aefe->leave($__internal_ad7a6b483d1b4a7b930338b99f417e6866cbe3536c3e7aeb1b54175fd076aefe_prof);

        
        $__internal_baf0b3f25b675d3378187f1150525e048db20faa293ae250753f865c9c8866a8->leave($__internal_baf0b3f25b675d3378187f1150525e048db20faa293ae250753f865c9c8866a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c346cbe2c2ea7f0b1bf0178c47f209cbcc0fe032a336ee7e4bb91368e85cf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c346cbe2c2ea7f0b1bf0178c47f209cbcc0fe032a336ee7e4bb91368e85cf67->enter($__internal_2c346cbe2c2ea7f0b1bf0178c47f209cbcc0fe032a336ee7e4bb91368e85cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_339f468360b92f07af9f1688adb1d549856f645e2f193b29097dd65d390d50eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339f468360b92f07af9f1688adb1d549856f645e2f193b29097dd65d390d50eb->enter($__internal_339f468360b92f07af9f1688adb1d549856f645e2f193b29097dd65d390d50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_339f468360b92f07af9f1688adb1d549856f645e2f193b29097dd65d390d50eb->leave($__internal_339f468360b92f07af9f1688adb1d549856f645e2f193b29097dd65d390d50eb_prof);

        
        $__internal_2c346cbe2c2ea7f0b1bf0178c47f209cbcc0fe032a336ee7e4bb91368e85cf67->leave($__internal_2c346cbe2c2ea7f0b1bf0178c47f209cbcc0fe032a336ee7e4bb91368e85cf67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
