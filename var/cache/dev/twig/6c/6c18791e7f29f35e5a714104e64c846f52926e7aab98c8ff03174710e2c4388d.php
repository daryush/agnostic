<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8701ce545bdd53a6a10a24eaba153fa986dbb03fcf38b2900c47b920a2e53bb3 extends Twig_Template
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
        $__internal_fe07ece3970f166bcd62878ca38d4bc44d2cf4e5c654f8be0bce2ed9a65a6d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe07ece3970f166bcd62878ca38d4bc44d2cf4e5c654f8be0bce2ed9a65a6d61->enter($__internal_fe07ece3970f166bcd62878ca38d4bc44d2cf4e5c654f8be0bce2ed9a65a6d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ef7a4e76dad84716c1095a9d241a889c6f636a80142f1cc9fa5243dd2ee35373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7a4e76dad84716c1095a9d241a889c6f636a80142f1cc9fa5243dd2ee35373->enter($__internal_ef7a4e76dad84716c1095a9d241a889c6f636a80142f1cc9fa5243dd2ee35373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fe07ece3970f166bcd62878ca38d4bc44d2cf4e5c654f8be0bce2ed9a65a6d61->leave($__internal_fe07ece3970f166bcd62878ca38d4bc44d2cf4e5c654f8be0bce2ed9a65a6d61_prof);

        
        $__internal_ef7a4e76dad84716c1095a9d241a889c6f636a80142f1cc9fa5243dd2ee35373->leave($__internal_ef7a4e76dad84716c1095a9d241a889c6f636a80142f1cc9fa5243dd2ee35373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
