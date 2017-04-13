<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b8f66d4df6272d36166b0d972f21ac429639e9d596866eb45a0bcada9afcdd9b extends Twig_Template
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
        $__internal_ee41dfc1b20ca3c6f87f921d88ae4420a0067453424816c5568468508ca0f45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee41dfc1b20ca3c6f87f921d88ae4420a0067453424816c5568468508ca0f45e->enter($__internal_ee41dfc1b20ca3c6f87f921d88ae4420a0067453424816c5568468508ca0f45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b00317bd2566f551e7420ec1942c4f0ca27091d40242d0ff0202beea1ea19138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00317bd2566f551e7420ec1942c4f0ca27091d40242d0ff0202beea1ea19138->enter($__internal_b00317bd2566f551e7420ec1942c4f0ca27091d40242d0ff0202beea1ea19138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ee41dfc1b20ca3c6f87f921d88ae4420a0067453424816c5568468508ca0f45e->leave($__internal_ee41dfc1b20ca3c6f87f921d88ae4420a0067453424816c5568468508ca0f45e_prof);

        
        $__internal_b00317bd2566f551e7420ec1942c4f0ca27091d40242d0ff0202beea1ea19138->leave($__internal_b00317bd2566f551e7420ec1942c4f0ca27091d40242d0ff0202beea1ea19138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
