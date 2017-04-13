<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7f329ba36472e5466b9048adee7e312b4ceb6a8bea6a93a2b650761e6ac57805 extends Twig_Template
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
        $__internal_ae7b98dcc1933c30be46d7c085b0186e9575171bbf98d5a63095991a8d210ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7b98dcc1933c30be46d7c085b0186e9575171bbf98d5a63095991a8d210ff5->enter($__internal_ae7b98dcc1933c30be46d7c085b0186e9575171bbf98d5a63095991a8d210ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_93aa526dbe5911cce887913590165378682905f42abeb931e73bebd4fc617b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93aa526dbe5911cce887913590165378682905f42abeb931e73bebd4fc617b6f->enter($__internal_93aa526dbe5911cce887913590165378682905f42abeb931e73bebd4fc617b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ae7b98dcc1933c30be46d7c085b0186e9575171bbf98d5a63095991a8d210ff5->leave($__internal_ae7b98dcc1933c30be46d7c085b0186e9575171bbf98d5a63095991a8d210ff5_prof);

        
        $__internal_93aa526dbe5911cce887913590165378682905f42abeb931e73bebd4fc617b6f->leave($__internal_93aa526dbe5911cce887913590165378682905f42abeb931e73bebd4fc617b6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
