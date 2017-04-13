<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d17f409a0920ce998e34cfa2be6592af899faa25b8974c520b33e484cd1717a4 extends Twig_Template
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
        $__internal_0ac08021506f23dbac3ef8bcc9800a5baf4fd5ecdf86d6278d9e379ce81b3468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac08021506f23dbac3ef8bcc9800a5baf4fd5ecdf86d6278d9e379ce81b3468->enter($__internal_0ac08021506f23dbac3ef8bcc9800a5baf4fd5ecdf86d6278d9e379ce81b3468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9d0d3ba2c926944ae6b7f71049eb246821739c4b275201acee84e0bb409d177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0d3ba2c926944ae6b7f71049eb246821739c4b275201acee84e0bb409d177f->enter($__internal_9d0d3ba2c926944ae6b7f71049eb246821739c4b275201acee84e0bb409d177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0ac08021506f23dbac3ef8bcc9800a5baf4fd5ecdf86d6278d9e379ce81b3468->leave($__internal_0ac08021506f23dbac3ef8bcc9800a5baf4fd5ecdf86d6278d9e379ce81b3468_prof);

        
        $__internal_9d0d3ba2c926944ae6b7f71049eb246821739c4b275201acee84e0bb409d177f->leave($__internal_9d0d3ba2c926944ae6b7f71049eb246821739c4b275201acee84e0bb409d177f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
