<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e2c9662e542d6d6e699bb9566ad89c9b28ed112347d2befc3f224eb52483b5b8 extends Twig_Template
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
        $__internal_f668bd8f82b8c88202a4604640a773ef162700e3109a962f2e51a616ac183d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f668bd8f82b8c88202a4604640a773ef162700e3109a962f2e51a616ac183d5b->enter($__internal_f668bd8f82b8c88202a4604640a773ef162700e3109a962f2e51a616ac183d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4f18cce0f91bbe155819e391cc14a86f1bc0dfe2f6053ded6b9ddea15495dbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f18cce0f91bbe155819e391cc14a86f1bc0dfe2f6053ded6b9ddea15495dbfd->enter($__internal_4f18cce0f91bbe155819e391cc14a86f1bc0dfe2f6053ded6b9ddea15495dbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f668bd8f82b8c88202a4604640a773ef162700e3109a962f2e51a616ac183d5b->leave($__internal_f668bd8f82b8c88202a4604640a773ef162700e3109a962f2e51a616ac183d5b_prof);

        
        $__internal_4f18cce0f91bbe155819e391cc14a86f1bc0dfe2f6053ded6b9ddea15495dbfd->leave($__internal_4f18cce0f91bbe155819e391cc14a86f1bc0dfe2f6053ded6b9ddea15495dbfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
