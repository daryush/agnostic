<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2886ac4c908a39b4375428f42eac781535be1235324851d944b2fe9485da71a5 extends Twig_Template
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
        $__internal_62c923f0618d6bd2c125d99a8121df2f2d7b4be1a91975069edba0103d6deb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c923f0618d6bd2c125d99a8121df2f2d7b4be1a91975069edba0103d6deb5d->enter($__internal_62c923f0618d6bd2c125d99a8121df2f2d7b4be1a91975069edba0103d6deb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0df56675adf9601e4640fc22b92860b0036f737f0a17dba6a1bc5fe3e2124998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df56675adf9601e4640fc22b92860b0036f737f0a17dba6a1bc5fe3e2124998->enter($__internal_0df56675adf9601e4640fc22b92860b0036f737f0a17dba6a1bc5fe3e2124998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_62c923f0618d6bd2c125d99a8121df2f2d7b4be1a91975069edba0103d6deb5d->leave($__internal_62c923f0618d6bd2c125d99a8121df2f2d7b4be1a91975069edba0103d6deb5d_prof);

        
        $__internal_0df56675adf9601e4640fc22b92860b0036f737f0a17dba6a1bc5fe3e2124998->leave($__internal_0df56675adf9601e4640fc22b92860b0036f737f0a17dba6a1bc5fe3e2124998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
