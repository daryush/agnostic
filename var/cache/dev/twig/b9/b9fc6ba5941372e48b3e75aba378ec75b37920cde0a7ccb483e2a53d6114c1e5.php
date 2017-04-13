<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_acde0e7c5bd74245e1b370e0fc2119796fd157e92a6389e117f7d1283f19824f extends Twig_Template
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
        $__internal_f2234f34d110ae4c13bc24069e29736b6dd2513187a6b311ef03a6bbb2f6c47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2234f34d110ae4c13bc24069e29736b6dd2513187a6b311ef03a6bbb2f6c47d->enter($__internal_f2234f34d110ae4c13bc24069e29736b6dd2513187a6b311ef03a6bbb2f6c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_38aa90e872c4652dbe97eb17f877713714b4784ec89aa064db97a1f6a29ce13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aa90e872c4652dbe97eb17f877713714b4784ec89aa064db97a1f6a29ce13f->enter($__internal_38aa90e872c4652dbe97eb17f877713714b4784ec89aa064db97a1f6a29ce13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f2234f34d110ae4c13bc24069e29736b6dd2513187a6b311ef03a6bbb2f6c47d->leave($__internal_f2234f34d110ae4c13bc24069e29736b6dd2513187a6b311ef03a6bbb2f6c47d_prof);

        
        $__internal_38aa90e872c4652dbe97eb17f877713714b4784ec89aa064db97a1f6a29ce13f->leave($__internal_38aa90e872c4652dbe97eb17f877713714b4784ec89aa064db97a1f6a29ce13f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
