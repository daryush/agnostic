<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a47d8fe9dcfb022ab229580c1b58818009597a91cd3dc6d953e2dd1e72b503ed extends Twig_Template
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
        $__internal_eda1a40161547042aab6264ca12c1e464e8da8c968560a9f260820b4a4c66ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda1a40161547042aab6264ca12c1e464e8da8c968560a9f260820b4a4c66ddc->enter($__internal_eda1a40161547042aab6264ca12c1e464e8da8c968560a9f260820b4a4c66ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d09c544a43bb58d29e07fee92bd7236a191657c96b794cdd6c77440d4e529e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09c544a43bb58d29e07fee92bd7236a191657c96b794cdd6c77440d4e529e5a->enter($__internal_d09c544a43bb58d29e07fee92bd7236a191657c96b794cdd6c77440d4e529e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eda1a40161547042aab6264ca12c1e464e8da8c968560a9f260820b4a4c66ddc->leave($__internal_eda1a40161547042aab6264ca12c1e464e8da8c968560a9f260820b4a4c66ddc_prof);

        
        $__internal_d09c544a43bb58d29e07fee92bd7236a191657c96b794cdd6c77440d4e529e5a->leave($__internal_d09c544a43bb58d29e07fee92bd7236a191657c96b794cdd6c77440d4e529e5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
