<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6819f33ac33588477f454a688767cdf6592ab120f2d12b1375a1cf411d438ea6 extends Twig_Template
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
        $__internal_bbc406b7801ce23fc41ce324f2d9ef071540dc4e3584e8d256eb2c73ab2fecd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc406b7801ce23fc41ce324f2d9ef071540dc4e3584e8d256eb2c73ab2fecd6->enter($__internal_bbc406b7801ce23fc41ce324f2d9ef071540dc4e3584e8d256eb2c73ab2fecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6118bd55c9dbfa81d79a0c348c06b3c9515518cb0cd30485be67de15e00203ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6118bd55c9dbfa81d79a0c348c06b3c9515518cb0cd30485be67de15e00203ff->enter($__internal_6118bd55c9dbfa81d79a0c348c06b3c9515518cb0cd30485be67de15e00203ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bbc406b7801ce23fc41ce324f2d9ef071540dc4e3584e8d256eb2c73ab2fecd6->leave($__internal_bbc406b7801ce23fc41ce324f2d9ef071540dc4e3584e8d256eb2c73ab2fecd6_prof);

        
        $__internal_6118bd55c9dbfa81d79a0c348c06b3c9515518cb0cd30485be67de15e00203ff->leave($__internal_6118bd55c9dbfa81d79a0c348c06b3c9515518cb0cd30485be67de15e00203ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
