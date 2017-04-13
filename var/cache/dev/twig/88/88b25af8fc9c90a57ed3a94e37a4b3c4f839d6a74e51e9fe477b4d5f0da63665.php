<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b6f484abde8b39d61bcb24a258d6009fe5d27643a636677547d03cb8089b6d9a extends Twig_Template
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
        $__internal_2a8c791d776f3964019b7554c338679e1a87652a277aa8d3f718e76ddac27e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8c791d776f3964019b7554c338679e1a87652a277aa8d3f718e76ddac27e40->enter($__internal_2a8c791d776f3964019b7554c338679e1a87652a277aa8d3f718e76ddac27e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_496db4fb98fdfc48e2885ea9d04d88bc0b749b9445d8f0bea9f79d23011a7d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496db4fb98fdfc48e2885ea9d04d88bc0b749b9445d8f0bea9f79d23011a7d40->enter($__internal_496db4fb98fdfc48e2885ea9d04d88bc0b749b9445d8f0bea9f79d23011a7d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2a8c791d776f3964019b7554c338679e1a87652a277aa8d3f718e76ddac27e40->leave($__internal_2a8c791d776f3964019b7554c338679e1a87652a277aa8d3f718e76ddac27e40_prof);

        
        $__internal_496db4fb98fdfc48e2885ea9d04d88bc0b749b9445d8f0bea9f79d23011a7d40->leave($__internal_496db4fb98fdfc48e2885ea9d04d88bc0b749b9445d8f0bea9f79d23011a7d40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
