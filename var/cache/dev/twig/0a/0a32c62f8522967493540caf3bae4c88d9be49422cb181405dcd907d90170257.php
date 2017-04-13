<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_37d932e3ceb9537846c577b297307e9816af9cdcd549d8de7c919d853677a625 extends Twig_Template
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
        $__internal_ec8b3b780c13776a4eef6f1383658efd0be5486f10f36ec8b59e4e934c768dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8b3b780c13776a4eef6f1383658efd0be5486f10f36ec8b59e4e934c768dc0->enter($__internal_ec8b3b780c13776a4eef6f1383658efd0be5486f10f36ec8b59e4e934c768dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b3cf57b4bb9ba25877def11f1ba87a757c42394d416c66239437b5a04885d7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cf57b4bb9ba25877def11f1ba87a757c42394d416c66239437b5a04885d7b7->enter($__internal_b3cf57b4bb9ba25877def11f1ba87a757c42394d416c66239437b5a04885d7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ec8b3b780c13776a4eef6f1383658efd0be5486f10f36ec8b59e4e934c768dc0->leave($__internal_ec8b3b780c13776a4eef6f1383658efd0be5486f10f36ec8b59e4e934c768dc0_prof);

        
        $__internal_b3cf57b4bb9ba25877def11f1ba87a757c42394d416c66239437b5a04885d7b7->leave($__internal_b3cf57b4bb9ba25877def11f1ba87a757c42394d416c66239437b5a04885d7b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
