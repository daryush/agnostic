<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0c12d4233f05285fc3a5a85aad610e32f867acebe0543cfedfa1950b7aa5e3f0 extends Twig_Template
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
        $__internal_a959210289bbea2c144b332c9f2f042196c6f293267b87b2da873ae7766f6784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a959210289bbea2c144b332c9f2f042196c6f293267b87b2da873ae7766f6784->enter($__internal_a959210289bbea2c144b332c9f2f042196c6f293267b87b2da873ae7766f6784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_db5c182834ab59581ccb550523cf373ea50dc6d61cf1b7bccc44c1ee52c81d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5c182834ab59581ccb550523cf373ea50dc6d61cf1b7bccc44c1ee52c81d76->enter($__internal_db5c182834ab59581ccb550523cf373ea50dc6d61cf1b7bccc44c1ee52c81d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a959210289bbea2c144b332c9f2f042196c6f293267b87b2da873ae7766f6784->leave($__internal_a959210289bbea2c144b332c9f2f042196c6f293267b87b2da873ae7766f6784_prof);

        
        $__internal_db5c182834ab59581ccb550523cf373ea50dc6d61cf1b7bccc44c1ee52c81d76->leave($__internal_db5c182834ab59581ccb550523cf373ea50dc6d61cf1b7bccc44c1ee52c81d76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
