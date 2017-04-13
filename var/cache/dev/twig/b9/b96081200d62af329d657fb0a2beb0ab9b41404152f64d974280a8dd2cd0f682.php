<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b4ea193716cf163d54ad328a50c950c40eb77846405f0ec1e1ddb9f76f45abb9 extends Twig_Template
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
        $__internal_5a2673b89fb0298509ebd91973d5aeaad1ad0165c0b2c4ee6fef1f238efe6fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2673b89fb0298509ebd91973d5aeaad1ad0165c0b2c4ee6fef1f238efe6fec->enter($__internal_5a2673b89fb0298509ebd91973d5aeaad1ad0165c0b2c4ee6fef1f238efe6fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0e28e73908ea2fcffce3f02024ad61e2be6e3aa4bd0e18931afa94a1c342ed6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e28e73908ea2fcffce3f02024ad61e2be6e3aa4bd0e18931afa94a1c342ed6e->enter($__internal_0e28e73908ea2fcffce3f02024ad61e2be6e3aa4bd0e18931afa94a1c342ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5a2673b89fb0298509ebd91973d5aeaad1ad0165c0b2c4ee6fef1f238efe6fec->leave($__internal_5a2673b89fb0298509ebd91973d5aeaad1ad0165c0b2c4ee6fef1f238efe6fec_prof);

        
        $__internal_0e28e73908ea2fcffce3f02024ad61e2be6e3aa4bd0e18931afa94a1c342ed6e->leave($__internal_0e28e73908ea2fcffce3f02024ad61e2be6e3aa4bd0e18931afa94a1c342ed6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
