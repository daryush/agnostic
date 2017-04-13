<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_282cee9caa42d7367bc581e99894714f4d24749431694dde9e977b33976eb392 extends Twig_Template
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
        $__internal_66eaa78bdab783fd8e0e7df6f1ced8c4fdda889b56089419a44303cb8b0240e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66eaa78bdab783fd8e0e7df6f1ced8c4fdda889b56089419a44303cb8b0240e2->enter($__internal_66eaa78bdab783fd8e0e7df6f1ced8c4fdda889b56089419a44303cb8b0240e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_63d2e5200297bc332ba8c6d2a175c0593e8c3419f84048342d19c87a9d62e36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d2e5200297bc332ba8c6d2a175c0593e8c3419f84048342d19c87a9d62e36a->enter($__internal_63d2e5200297bc332ba8c6d2a175c0593e8c3419f84048342d19c87a9d62e36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_66eaa78bdab783fd8e0e7df6f1ced8c4fdda889b56089419a44303cb8b0240e2->leave($__internal_66eaa78bdab783fd8e0e7df6f1ced8c4fdda889b56089419a44303cb8b0240e2_prof);

        
        $__internal_63d2e5200297bc332ba8c6d2a175c0593e8c3419f84048342d19c87a9d62e36a->leave($__internal_63d2e5200297bc332ba8c6d2a175c0593e8c3419f84048342d19c87a9d62e36a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
