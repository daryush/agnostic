<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3b5f09609e3df75c3e90dfb900eec4f624a0c0c86c0c5d8d9311c801130e04d2 extends Twig_Template
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
        $__internal_cd6a84b2c5a2a81fc4dfe43cbf49969314f40b9a0201bb2eac97558037f5cb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6a84b2c5a2a81fc4dfe43cbf49969314f40b9a0201bb2eac97558037f5cb82->enter($__internal_cd6a84b2c5a2a81fc4dfe43cbf49969314f40b9a0201bb2eac97558037f5cb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b9a09fe1dfa3d2ab493d7e02f43852c05ce6112341c7fe78477ffdb4aa94814f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a09fe1dfa3d2ab493d7e02f43852c05ce6112341c7fe78477ffdb4aa94814f->enter($__internal_b9a09fe1dfa3d2ab493d7e02f43852c05ce6112341c7fe78477ffdb4aa94814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cd6a84b2c5a2a81fc4dfe43cbf49969314f40b9a0201bb2eac97558037f5cb82->leave($__internal_cd6a84b2c5a2a81fc4dfe43cbf49969314f40b9a0201bb2eac97558037f5cb82_prof);

        
        $__internal_b9a09fe1dfa3d2ab493d7e02f43852c05ce6112341c7fe78477ffdb4aa94814f->leave($__internal_b9a09fe1dfa3d2ab493d7e02f43852c05ce6112341c7fe78477ffdb4aa94814f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
