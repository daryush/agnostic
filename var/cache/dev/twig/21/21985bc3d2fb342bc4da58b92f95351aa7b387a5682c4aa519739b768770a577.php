<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f27c8debd19860825aee8b3d62c715f7eb76166999b890960aad1e24e1969e81 extends Twig_Template
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
        $__internal_ef5e9801a73974e5d7715a283348915f0f01196430f9e3a3699cf3b84db52e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5e9801a73974e5d7715a283348915f0f01196430f9e3a3699cf3b84db52e09->enter($__internal_ef5e9801a73974e5d7715a283348915f0f01196430f9e3a3699cf3b84db52e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a7d96869bbd46c9600bc7c7214d2794ccddf2b1fb26d26e47f81dc95c53ce3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d96869bbd46c9600bc7c7214d2794ccddf2b1fb26d26e47f81dc95c53ce3e3->enter($__internal_a7d96869bbd46c9600bc7c7214d2794ccddf2b1fb26d26e47f81dc95c53ce3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ef5e9801a73974e5d7715a283348915f0f01196430f9e3a3699cf3b84db52e09->leave($__internal_ef5e9801a73974e5d7715a283348915f0f01196430f9e3a3699cf3b84db52e09_prof);

        
        $__internal_a7d96869bbd46c9600bc7c7214d2794ccddf2b1fb26d26e47f81dc95c53ce3e3->leave($__internal_a7d96869bbd46c9600bc7c7214d2794ccddf2b1fb26d26e47f81dc95c53ce3e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
