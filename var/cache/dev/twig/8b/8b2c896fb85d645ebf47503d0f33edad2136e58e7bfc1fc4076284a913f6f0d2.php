<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4a55f6bbb4677fe553495c88fcf06148f6989ccc3e76eb389fe6bcb85eaf5ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0d3444c93ea3bd93915d72827019cd5bf4741a84e0551764b383f15a1db3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0d3444c93ea3bd93915d72827019cd5bf4741a84e0551764b383f15a1db3f0->enter($__internal_6d0d3444c93ea3bd93915d72827019cd5bf4741a84e0551764b383f15a1db3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7b3bdd162f9f306fbf206f5291ddabe35bab80205f337bcc0f5e545b977d75c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3bdd162f9f306fbf206f5291ddabe35bab80205f337bcc0f5e545b977d75c9->enter($__internal_7b3bdd162f9f306fbf206f5291ddabe35bab80205f337bcc0f5e545b977d75c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0d3444c93ea3bd93915d72827019cd5bf4741a84e0551764b383f15a1db3f0->leave($__internal_6d0d3444c93ea3bd93915d72827019cd5bf4741a84e0551764b383f15a1db3f0_prof);

        
        $__internal_7b3bdd162f9f306fbf206f5291ddabe35bab80205f337bcc0f5e545b977d75c9->leave($__internal_7b3bdd162f9f306fbf206f5291ddabe35bab80205f337bcc0f5e545b977d75c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3afde2e56fa88f50d5d6a69c9118768a77095361e9c7850dfeb8c9726741431c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afde2e56fa88f50d5d6a69c9118768a77095361e9c7850dfeb8c9726741431c->enter($__internal_3afde2e56fa88f50d5d6a69c9118768a77095361e9c7850dfeb8c9726741431c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a839433c5ddf4babea553ece3cd3a7e84bb13733703aadcf8581e92e8d438bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a839433c5ddf4babea553ece3cd3a7e84bb13733703aadcf8581e92e8d438bca->enter($__internal_a839433c5ddf4babea553ece3cd3a7e84bb13733703aadcf8581e92e8d438bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a839433c5ddf4babea553ece3cd3a7e84bb13733703aadcf8581e92e8d438bca->leave($__internal_a839433c5ddf4babea553ece3cd3a7e84bb13733703aadcf8581e92e8d438bca_prof);

        
        $__internal_3afde2e56fa88f50d5d6a69c9118768a77095361e9c7850dfeb8c9726741431c->leave($__internal_3afde2e56fa88f50d5d6a69c9118768a77095361e9c7850dfeb8c9726741431c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa4262b2f4996a7929380faa87bbe06e114543dded0fc823d9c691639f4396c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa4262b2f4996a7929380faa87bbe06e114543dded0fc823d9c691639f4396c->enter($__internal_dfa4262b2f4996a7929380faa87bbe06e114543dded0fc823d9c691639f4396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5375d15c7e6cb5a15a46e5bb12733642aa4cd88dd1288b2d5b5d03dd2369f80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5375d15c7e6cb5a15a46e5bb12733642aa4cd88dd1288b2d5b5d03dd2369f80a->enter($__internal_5375d15c7e6cb5a15a46e5bb12733642aa4cd88dd1288b2d5b5d03dd2369f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5375d15c7e6cb5a15a46e5bb12733642aa4cd88dd1288b2d5b5d03dd2369f80a->leave($__internal_5375d15c7e6cb5a15a46e5bb12733642aa4cd88dd1288b2d5b5d03dd2369f80a_prof);

        
        $__internal_dfa4262b2f4996a7929380faa87bbe06e114543dded0fc823d9c691639f4396c->leave($__internal_dfa4262b2f4996a7929380faa87bbe06e114543dded0fc823d9c691639f4396c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
