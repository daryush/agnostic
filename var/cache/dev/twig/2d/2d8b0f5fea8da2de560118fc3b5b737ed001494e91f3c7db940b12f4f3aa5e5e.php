<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2f1c03d6d16d08e456183a1c61186a9389052b09e1f98ae5dee616e66b7ca8f1 extends Twig_Template
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
        $__internal_5afc689ea7721cd4c13204e0d2c5caba35ed842780d6ef2048993fde95aa32a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afc689ea7721cd4c13204e0d2c5caba35ed842780d6ef2048993fde95aa32a7->enter($__internal_5afc689ea7721cd4c13204e0d2c5caba35ed842780d6ef2048993fde95aa32a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7314377b433d7b92dcc879bca98a77e6f920eeaf25be0c2888972af470801875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314377b433d7b92dcc879bca98a77e6f920eeaf25be0c2888972af470801875->enter($__internal_7314377b433d7b92dcc879bca98a77e6f920eeaf25be0c2888972af470801875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5afc689ea7721cd4c13204e0d2c5caba35ed842780d6ef2048993fde95aa32a7->leave($__internal_5afc689ea7721cd4c13204e0d2c5caba35ed842780d6ef2048993fde95aa32a7_prof);

        
        $__internal_7314377b433d7b92dcc879bca98a77e6f920eeaf25be0c2888972af470801875->leave($__internal_7314377b433d7b92dcc879bca98a77e6f920eeaf25be0c2888972af470801875_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
