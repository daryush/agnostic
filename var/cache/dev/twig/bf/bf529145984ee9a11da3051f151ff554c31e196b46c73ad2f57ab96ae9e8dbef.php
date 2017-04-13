<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ed41b91cad6b47e3630f2373c2209c90b1bca28debc7b5f4f043535c0d2938ef extends Twig_Template
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
        $__internal_454f77e94cbb730de07dffa007f2d42b04f7cac98c80f3bbc46c36808a858686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454f77e94cbb730de07dffa007f2d42b04f7cac98c80f3bbc46c36808a858686->enter($__internal_454f77e94cbb730de07dffa007f2d42b04f7cac98c80f3bbc46c36808a858686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_359503be91099340828021ccab2cf7d4641118a3c672fce9f3d39d066f9e7f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359503be91099340828021ccab2cf7d4641118a3c672fce9f3d39d066f9e7f86->enter($__internal_359503be91099340828021ccab2cf7d4641118a3c672fce9f3d39d066f9e7f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_454f77e94cbb730de07dffa007f2d42b04f7cac98c80f3bbc46c36808a858686->leave($__internal_454f77e94cbb730de07dffa007f2d42b04f7cac98c80f3bbc46c36808a858686_prof);

        
        $__internal_359503be91099340828021ccab2cf7d4641118a3c672fce9f3d39d066f9e7f86->leave($__internal_359503be91099340828021ccab2cf7d4641118a3c672fce9f3d39d066f9e7f86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
