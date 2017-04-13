<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f13c07aa2f04d59ae1f223a3f452919b40e812985035c356858946d2b65da843 extends Twig_Template
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
        $__internal_693cb97ff9c72d95a7a401b4f7d3839b6e0b9501e27355c9ecc305e3765b85d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693cb97ff9c72d95a7a401b4f7d3839b6e0b9501e27355c9ecc305e3765b85d3->enter($__internal_693cb97ff9c72d95a7a401b4f7d3839b6e0b9501e27355c9ecc305e3765b85d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_2d26ddacf322b1346c2fda78e63f2310228bf456b9ecf8c95a51d1995854c3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d26ddacf322b1346c2fda78e63f2310228bf456b9ecf8c95a51d1995854c3ea->enter($__internal_2d26ddacf322b1346c2fda78e63f2310228bf456b9ecf8c95a51d1995854c3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_693cb97ff9c72d95a7a401b4f7d3839b6e0b9501e27355c9ecc305e3765b85d3->leave($__internal_693cb97ff9c72d95a7a401b4f7d3839b6e0b9501e27355c9ecc305e3765b85d3_prof);

        
        $__internal_2d26ddacf322b1346c2fda78e63f2310228bf456b9ecf8c95a51d1995854c3ea->leave($__internal_2d26ddacf322b1346c2fda78e63f2310228bf456b9ecf8c95a51d1995854c3ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
