<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cacec8a6468ec84429ae604e55ef351dc9821f54762ebd41b4b78f35cdc435a1 extends Twig_Template
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
        $__internal_742e788dded191fc6285e5166cdb6dd5cba9f6e0acd5bbd374af91d22942e447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742e788dded191fc6285e5166cdb6dd5cba9f6e0acd5bbd374af91d22942e447->enter($__internal_742e788dded191fc6285e5166cdb6dd5cba9f6e0acd5bbd374af91d22942e447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_545e86c2b82c88165867e99c78d6213bfc0ca51799383647a706c0c2e23e7972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545e86c2b82c88165867e99c78d6213bfc0ca51799383647a706c0c2e23e7972->enter($__internal_545e86c2b82c88165867e99c78d6213bfc0ca51799383647a706c0c2e23e7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_742e788dded191fc6285e5166cdb6dd5cba9f6e0acd5bbd374af91d22942e447->leave($__internal_742e788dded191fc6285e5166cdb6dd5cba9f6e0acd5bbd374af91d22942e447_prof);

        
        $__internal_545e86c2b82c88165867e99c78d6213bfc0ca51799383647a706c0c2e23e7972->leave($__internal_545e86c2b82c88165867e99c78d6213bfc0ca51799383647a706c0c2e23e7972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
