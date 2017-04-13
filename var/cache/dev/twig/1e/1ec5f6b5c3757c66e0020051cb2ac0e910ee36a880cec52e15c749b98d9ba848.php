<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fde5518d00a510730911519e56baeb90b043a5992478c1d12426485ca628920b extends Twig_Template
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
        $__internal_240ba5526a782ede7279b79c6a1f4408bbb90e44ce4606435a5e7af6c701e8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240ba5526a782ede7279b79c6a1f4408bbb90e44ce4606435a5e7af6c701e8f9->enter($__internal_240ba5526a782ede7279b79c6a1f4408bbb90e44ce4606435a5e7af6c701e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6669dafff4120c53be5d36b8f56bd21c7773870eb0ff8314910b1c52a3259573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6669dafff4120c53be5d36b8f56bd21c7773870eb0ff8314910b1c52a3259573->enter($__internal_6669dafff4120c53be5d36b8f56bd21c7773870eb0ff8314910b1c52a3259573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_240ba5526a782ede7279b79c6a1f4408bbb90e44ce4606435a5e7af6c701e8f9->leave($__internal_240ba5526a782ede7279b79c6a1f4408bbb90e44ce4606435a5e7af6c701e8f9_prof);

        
        $__internal_6669dafff4120c53be5d36b8f56bd21c7773870eb0ff8314910b1c52a3259573->leave($__internal_6669dafff4120c53be5d36b8f56bd21c7773870eb0ff8314910b1c52a3259573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
