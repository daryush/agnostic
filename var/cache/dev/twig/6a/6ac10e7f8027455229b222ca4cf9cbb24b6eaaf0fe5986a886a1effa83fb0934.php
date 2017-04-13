<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66fd9627c54cd328689ebea5112e35a4f0321f3002c86154ee2c9366ed12733a extends Twig_Template
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
        $__internal_6c83021bd7913baa365d7cc7eefefa2bccf27ff70311db32d138663120e3392a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c83021bd7913baa365d7cc7eefefa2bccf27ff70311db32d138663120e3392a->enter($__internal_6c83021bd7913baa365d7cc7eefefa2bccf27ff70311db32d138663120e3392a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_df29afd16b0c2c0b4d14a9a62c30187bdae672e55461a9031c9d8444c900513f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df29afd16b0c2c0b4d14a9a62c30187bdae672e55461a9031c9d8444c900513f->enter($__internal_df29afd16b0c2c0b4d14a9a62c30187bdae672e55461a9031c9d8444c900513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6c83021bd7913baa365d7cc7eefefa2bccf27ff70311db32d138663120e3392a->leave($__internal_6c83021bd7913baa365d7cc7eefefa2bccf27ff70311db32d138663120e3392a_prof);

        
        $__internal_df29afd16b0c2c0b4d14a9a62c30187bdae672e55461a9031c9d8444c900513f->leave($__internal_df29afd16b0c2c0b4d14a9a62c30187bdae672e55461a9031c9d8444c900513f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
