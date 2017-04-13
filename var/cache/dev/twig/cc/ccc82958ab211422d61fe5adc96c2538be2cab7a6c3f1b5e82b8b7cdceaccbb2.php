<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_09cae572357efee47a086c26b50a455c1e3add23816d9c8b78290a347065cb70 extends Twig_Template
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
        $__internal_cea56b6e9043f570c34dd14f865235c79e80fb2752ff358310fe2fbb22f90969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea56b6e9043f570c34dd14f865235c79e80fb2752ff358310fe2fbb22f90969->enter($__internal_cea56b6e9043f570c34dd14f865235c79e80fb2752ff358310fe2fbb22f90969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3058cbffb695e67b81b6e1a6a9a05ab25b05fc39af283932133e5c86b1d49301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3058cbffb695e67b81b6e1a6a9a05ab25b05fc39af283932133e5c86b1d49301->enter($__internal_3058cbffb695e67b81b6e1a6a9a05ab25b05fc39af283932133e5c86b1d49301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cea56b6e9043f570c34dd14f865235c79e80fb2752ff358310fe2fbb22f90969->leave($__internal_cea56b6e9043f570c34dd14f865235c79e80fb2752ff358310fe2fbb22f90969_prof);

        
        $__internal_3058cbffb695e67b81b6e1a6a9a05ab25b05fc39af283932133e5c86b1d49301->leave($__internal_3058cbffb695e67b81b6e1a6a9a05ab25b05fc39af283932133e5c86b1d49301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
