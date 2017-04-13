<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1512afcace4310102bd8c071c7f72d36c326bc876e70a519be3104323009e2ff extends Twig_Template
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
        $__internal_d37f7dae30b8908499fa8e4d5c18265a1af584eb3842fb0c32d82a471f2a5570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37f7dae30b8908499fa8e4d5c18265a1af584eb3842fb0c32d82a471f2a5570->enter($__internal_d37f7dae30b8908499fa8e4d5c18265a1af584eb3842fb0c32d82a471f2a5570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7320d8b7e6440ced76878595b56bb73eaa5ec08c6be786d95fe064b506f484d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7320d8b7e6440ced76878595b56bb73eaa5ec08c6be786d95fe064b506f484d9->enter($__internal_7320d8b7e6440ced76878595b56bb73eaa5ec08c6be786d95fe064b506f484d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d37f7dae30b8908499fa8e4d5c18265a1af584eb3842fb0c32d82a471f2a5570->leave($__internal_d37f7dae30b8908499fa8e4d5c18265a1af584eb3842fb0c32d82a471f2a5570_prof);

        
        $__internal_7320d8b7e6440ced76878595b56bb73eaa5ec08c6be786d95fe064b506f484d9->leave($__internal_7320d8b7e6440ced76878595b56bb73eaa5ec08c6be786d95fe064b506f484d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
