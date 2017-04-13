<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a70a7f0196116ed28003df92b50e7960069b1c6df5cd7c8ceccdff92e833771e extends Twig_Template
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
        $__internal_abfc74b6fa51c6aa7f80bf10606656f96bce6bc3882e0494ad50b7809491cb81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfc74b6fa51c6aa7f80bf10606656f96bce6bc3882e0494ad50b7809491cb81->enter($__internal_abfc74b6fa51c6aa7f80bf10606656f96bce6bc3882e0494ad50b7809491cb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_765a0d77a32af229668034a5ab2ae7bc53d646cf710de9a5684df58589b0c2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765a0d77a32af229668034a5ab2ae7bc53d646cf710de9a5684df58589b0c2ee->enter($__internal_765a0d77a32af229668034a5ab2ae7bc53d646cf710de9a5684df58589b0c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_abfc74b6fa51c6aa7f80bf10606656f96bce6bc3882e0494ad50b7809491cb81->leave($__internal_abfc74b6fa51c6aa7f80bf10606656f96bce6bc3882e0494ad50b7809491cb81_prof);

        
        $__internal_765a0d77a32af229668034a5ab2ae7bc53d646cf710de9a5684df58589b0c2ee->leave($__internal_765a0d77a32af229668034a5ab2ae7bc53d646cf710de9a5684df58589b0c2ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
