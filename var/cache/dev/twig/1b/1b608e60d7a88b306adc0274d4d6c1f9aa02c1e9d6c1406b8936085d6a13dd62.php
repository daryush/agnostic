<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_43d1244d9defdd87ee9f00425532facc2832624da58ace5b7ca0109f41cb51d2 extends Twig_Template
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
        $__internal_639bfb10cce65aa3a86292dcb1d54974c6ec121907f3ab696cf5b99057452905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639bfb10cce65aa3a86292dcb1d54974c6ec121907f3ab696cf5b99057452905->enter($__internal_639bfb10cce65aa3a86292dcb1d54974c6ec121907f3ab696cf5b99057452905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a4aa0e8a42faece9d81e846916ac0db6f1c80f5d16d80bff815631cd20da944c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aa0e8a42faece9d81e846916ac0db6f1c80f5d16d80bff815631cd20da944c->enter($__internal_a4aa0e8a42faece9d81e846916ac0db6f1c80f5d16d80bff815631cd20da944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_639bfb10cce65aa3a86292dcb1d54974c6ec121907f3ab696cf5b99057452905->leave($__internal_639bfb10cce65aa3a86292dcb1d54974c6ec121907f3ab696cf5b99057452905_prof);

        
        $__internal_a4aa0e8a42faece9d81e846916ac0db6f1c80f5d16d80bff815631cd20da944c->leave($__internal_a4aa0e8a42faece9d81e846916ac0db6f1c80f5d16d80bff815631cd20da944c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
