<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2834389332d7e8020e43598d5a15de922a59f2ed7a8ddc024d5f0831826d0cc extends Twig_Template
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
        $__internal_b8c6fb600c27d526e837d6aafb9915cb3191cbf3491675cc621e3f22832d14d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c6fb600c27d526e837d6aafb9915cb3191cbf3491675cc621e3f22832d14d8->enter($__internal_b8c6fb600c27d526e837d6aafb9915cb3191cbf3491675cc621e3f22832d14d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d2ed80b20f546bd5856da494991b6b99f102c9935373bfe2f77783bfea283dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ed80b20f546bd5856da494991b6b99f102c9935373bfe2f77783bfea283dec->enter($__internal_d2ed80b20f546bd5856da494991b6b99f102c9935373bfe2f77783bfea283dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b8c6fb600c27d526e837d6aafb9915cb3191cbf3491675cc621e3f22832d14d8->leave($__internal_b8c6fb600c27d526e837d6aafb9915cb3191cbf3491675cc621e3f22832d14d8_prof);

        
        $__internal_d2ed80b20f546bd5856da494991b6b99f102c9935373bfe2f77783bfea283dec->leave($__internal_d2ed80b20f546bd5856da494991b6b99f102c9935373bfe2f77783bfea283dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
