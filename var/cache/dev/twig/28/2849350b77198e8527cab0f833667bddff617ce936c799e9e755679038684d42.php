<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8e64ba0966c81175d541f2b4fb9bd0d0d5b8ed2bbf5fcdf74bc03a61f00b5375 extends Twig_Template
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
        $__internal_00e44d8fc1ee798d7a0c385c3c136168c61231de87259c99f666609aad9baf12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e44d8fc1ee798d7a0c385c3c136168c61231de87259c99f666609aad9baf12->enter($__internal_00e44d8fc1ee798d7a0c385c3c136168c61231de87259c99f666609aad9baf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_972c3cafb24d36f98205d7796f124a70b8e47ff25e19a9f1a3fbf3b6b2ee9c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972c3cafb24d36f98205d7796f124a70b8e47ff25e19a9f1a3fbf3b6b2ee9c99->enter($__internal_972c3cafb24d36f98205d7796f124a70b8e47ff25e19a9f1a3fbf3b6b2ee9c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00e44d8fc1ee798d7a0c385c3c136168c61231de87259c99f666609aad9baf12->leave($__internal_00e44d8fc1ee798d7a0c385c3c136168c61231de87259c99f666609aad9baf12_prof);

        
        $__internal_972c3cafb24d36f98205d7796f124a70b8e47ff25e19a9f1a3fbf3b6b2ee9c99->leave($__internal_972c3cafb24d36f98205d7796f124a70b8e47ff25e19a9f1a3fbf3b6b2ee9c99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
