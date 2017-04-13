<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7a81fc6b25fbb04300e031fda32d9c3b3031694321a3c64e783d76f652bc7003 extends Twig_Template
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
        $__internal_ad8ddd0408c0086a5cfc341d5f83f35c35c40e203141cb8bc305c52a9fd5aaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8ddd0408c0086a5cfc341d5f83f35c35c40e203141cb8bc305c52a9fd5aaad->enter($__internal_ad8ddd0408c0086a5cfc341d5f83f35c35c40e203141cb8bc305c52a9fd5aaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_113248d089ae67a1334937f399a1cb8a4734511db3fee31d1c790b4972939f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113248d089ae67a1334937f399a1cb8a4734511db3fee31d1c790b4972939f31->enter($__internal_113248d089ae67a1334937f399a1cb8a4734511db3fee31d1c790b4972939f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ad8ddd0408c0086a5cfc341d5f83f35c35c40e203141cb8bc305c52a9fd5aaad->leave($__internal_ad8ddd0408c0086a5cfc341d5f83f35c35c40e203141cb8bc305c52a9fd5aaad_prof);

        
        $__internal_113248d089ae67a1334937f399a1cb8a4734511db3fee31d1c790b4972939f31->leave($__internal_113248d089ae67a1334937f399a1cb8a4734511db3fee31d1c790b4972939f31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
