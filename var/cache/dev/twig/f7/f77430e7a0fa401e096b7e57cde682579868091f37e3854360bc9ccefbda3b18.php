<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_218402e721ceafeef6a8f1506bb68f089bb629d193a53b694487955a75a2a935 extends Twig_Template
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
        $__internal_58862ca95fb189fbf15bd1a74d796d4e699c466bc32df812b71ca0ec6c8addcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58862ca95fb189fbf15bd1a74d796d4e699c466bc32df812b71ca0ec6c8addcb->enter($__internal_58862ca95fb189fbf15bd1a74d796d4e699c466bc32df812b71ca0ec6c8addcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c6934aa77e33851a50eb9e86ddcb07eaa49e953108e671b344412c4032bda977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6934aa77e33851a50eb9e86ddcb07eaa49e953108e671b344412c4032bda977->enter($__internal_c6934aa77e33851a50eb9e86ddcb07eaa49e953108e671b344412c4032bda977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_58862ca95fb189fbf15bd1a74d796d4e699c466bc32df812b71ca0ec6c8addcb->leave($__internal_58862ca95fb189fbf15bd1a74d796d4e699c466bc32df812b71ca0ec6c8addcb_prof);

        
        $__internal_c6934aa77e33851a50eb9e86ddcb07eaa49e953108e671b344412c4032bda977->leave($__internal_c6934aa77e33851a50eb9e86ddcb07eaa49e953108e671b344412c4032bda977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
