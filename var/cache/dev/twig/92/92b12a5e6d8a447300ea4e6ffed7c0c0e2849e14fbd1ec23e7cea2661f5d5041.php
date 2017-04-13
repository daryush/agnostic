<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_695f7b1bbee9801b6a539d2e71e7d659b7d89172ad939c2a0e1388abcd3fd286 extends Twig_Template
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
        $__internal_5d2b068a48f092796b7db7ff5b1615e6259ed89f4b4456127202060b370bb7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2b068a48f092796b7db7ff5b1615e6259ed89f4b4456127202060b370bb7e5->enter($__internal_5d2b068a48f092796b7db7ff5b1615e6259ed89f4b4456127202060b370bb7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4266e62f441c3e14ff58458d610306650e171a1c002355c86d0c21ae8c12cd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4266e62f441c3e14ff58458d610306650e171a1c002355c86d0c21ae8c12cd25->enter($__internal_4266e62f441c3e14ff58458d610306650e171a1c002355c86d0c21ae8c12cd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5d2b068a48f092796b7db7ff5b1615e6259ed89f4b4456127202060b370bb7e5->leave($__internal_5d2b068a48f092796b7db7ff5b1615e6259ed89f4b4456127202060b370bb7e5_prof);

        
        $__internal_4266e62f441c3e14ff58458d610306650e171a1c002355c86d0c21ae8c12cd25->leave($__internal_4266e62f441c3e14ff58458d610306650e171a1c002355c86d0c21ae8c12cd25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
