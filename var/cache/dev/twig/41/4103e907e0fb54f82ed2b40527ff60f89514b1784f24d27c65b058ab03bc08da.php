<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7ce237f741954adafaa83bde1cfada518cf456eae5b2dacc0ea5a0cf04ad8cc4 extends Twig_Template
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
        $__internal_17218d95ea44a8db632563ea296ab3c53f73a43a97ea0357a8f516c8c74718da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17218d95ea44a8db632563ea296ab3c53f73a43a97ea0357a8f516c8c74718da->enter($__internal_17218d95ea44a8db632563ea296ab3c53f73a43a97ea0357a8f516c8c74718da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_073affa3988c2614ae55d4e0b76e79301d13f2151e8085ec0fe635125710743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073affa3988c2614ae55d4e0b76e79301d13f2151e8085ec0fe635125710743f->enter($__internal_073affa3988c2614ae55d4e0b76e79301d13f2151e8085ec0fe635125710743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17218d95ea44a8db632563ea296ab3c53f73a43a97ea0357a8f516c8c74718da->leave($__internal_17218d95ea44a8db632563ea296ab3c53f73a43a97ea0357a8f516c8c74718da_prof);

        
        $__internal_073affa3988c2614ae55d4e0b76e79301d13f2151e8085ec0fe635125710743f->leave($__internal_073affa3988c2614ae55d4e0b76e79301d13f2151e8085ec0fe635125710743f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
