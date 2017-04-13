<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dbfcbe26133f194d7bb714ae3eef8d24cbb4f433d42f0426ea504544b2a32467 extends Twig_Template
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
        $__internal_70678418ad5c91fe821d9283249a6c6774ac616015f2046bd03f4a240c15c495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70678418ad5c91fe821d9283249a6c6774ac616015f2046bd03f4a240c15c495->enter($__internal_70678418ad5c91fe821d9283249a6c6774ac616015f2046bd03f4a240c15c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f1bede96ca0f27d994b340b349ded84c7160a6b786179d662c7fa348d9348f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bede96ca0f27d994b340b349ded84c7160a6b786179d662c7fa348d9348f84->enter($__internal_f1bede96ca0f27d994b340b349ded84c7160a6b786179d662c7fa348d9348f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_70678418ad5c91fe821d9283249a6c6774ac616015f2046bd03f4a240c15c495->leave($__internal_70678418ad5c91fe821d9283249a6c6774ac616015f2046bd03f4a240c15c495_prof);

        
        $__internal_f1bede96ca0f27d994b340b349ded84c7160a6b786179d662c7fa348d9348f84->leave($__internal_f1bede96ca0f27d994b340b349ded84c7160a6b786179d662c7fa348d9348f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
