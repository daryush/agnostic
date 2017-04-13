<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9dd1e4d5f433fb6b2bfc308ecc2822a448755d30e1e92d53d5b30100d4ae3005 extends Twig_Template
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
        $__internal_4c2afea57a9d52b0f7745a4e0aea62308eed5f375d58f8dcd01d61209fdd6251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2afea57a9d52b0f7745a4e0aea62308eed5f375d58f8dcd01d61209fdd6251->enter($__internal_4c2afea57a9d52b0f7745a4e0aea62308eed5f375d58f8dcd01d61209fdd6251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fde5782f2b320afaa8f83f4d3b9bf8fb81b59b138a1b9092ba3ce733fc7389e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde5782f2b320afaa8f83f4d3b9bf8fb81b59b138a1b9092ba3ce733fc7389e2->enter($__internal_fde5782f2b320afaa8f83f4d3b9bf8fb81b59b138a1b9092ba3ce733fc7389e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4c2afea57a9d52b0f7745a4e0aea62308eed5f375d58f8dcd01d61209fdd6251->leave($__internal_4c2afea57a9d52b0f7745a4e0aea62308eed5f375d58f8dcd01d61209fdd6251_prof);

        
        $__internal_fde5782f2b320afaa8f83f4d3b9bf8fb81b59b138a1b9092ba3ce733fc7389e2->leave($__internal_fde5782f2b320afaa8f83f4d3b9bf8fb81b59b138a1b9092ba3ce733fc7389e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
