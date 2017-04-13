<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4660c2b476a4d8e552bbbad06d46e96f6d3618f16a4a5a6665582057d24a9f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99705b55b80803a8c86c8d03d60f319bb706d499f2af894845f7cebc437e3b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99705b55b80803a8c86c8d03d60f319bb706d499f2af894845f7cebc437e3b2c->enter($__internal_99705b55b80803a8c86c8d03d60f319bb706d499f2af894845f7cebc437e3b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9dda338b1d0bf5a9980ae45aa415b7983b649af8aa0365947395165bf49d88c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dda338b1d0bf5a9980ae45aa415b7983b649af8aa0365947395165bf49d88c2->enter($__internal_9dda338b1d0bf5a9980ae45aa415b7983b649af8aa0365947395165bf49d88c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99705b55b80803a8c86c8d03d60f319bb706d499f2af894845f7cebc437e3b2c->leave($__internal_99705b55b80803a8c86c8d03d60f319bb706d499f2af894845f7cebc437e3b2c_prof);

        
        $__internal_9dda338b1d0bf5a9980ae45aa415b7983b649af8aa0365947395165bf49d88c2->leave($__internal_9dda338b1d0bf5a9980ae45aa415b7983b649af8aa0365947395165bf49d88c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6af8643f83287929126ff1872a00118436d1f689bd12445a84e2c6f7a0e11df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6af8643f83287929126ff1872a00118436d1f689bd12445a84e2c6f7a0e11df->enter($__internal_a6af8643f83287929126ff1872a00118436d1f689bd12445a84e2c6f7a0e11df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f897851e045e87cd01c4422e576bcb44598402dc6ad6ee1677824012e91b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f897851e045e87cd01c4422e576bcb44598402dc6ad6ee1677824012e91b1ce->enter($__internal_4f897851e045e87cd01c4422e576bcb44598402dc6ad6ee1677824012e91b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f897851e045e87cd01c4422e576bcb44598402dc6ad6ee1677824012e91b1ce->leave($__internal_4f897851e045e87cd01c4422e576bcb44598402dc6ad6ee1677824012e91b1ce_prof);

        
        $__internal_a6af8643f83287929126ff1872a00118436d1f689bd12445a84e2c6f7a0e11df->leave($__internal_a6af8643f83287929126ff1872a00118436d1f689bd12445a84e2c6f7a0e11df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
