<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_518e1f2639556c537e4ed50dcf8fb5d5f4856f03e7208270d112315b79de8649 extends Twig_Template
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
        $__internal_b1ba9cd204c38d964ed3bac6a43b77171f5cb6a4b5e41732fb987b0f3ba2694c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ba9cd204c38d964ed3bac6a43b77171f5cb6a4b5e41732fb987b0f3ba2694c->enter($__internal_b1ba9cd204c38d964ed3bac6a43b77171f5cb6a4b5e41732fb987b0f3ba2694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e9bd348d6915a01246ae53522320b3416cdbbfae28bff26777c3ba32787663ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bd348d6915a01246ae53522320b3416cdbbfae28bff26777c3ba32787663ff->enter($__internal_e9bd348d6915a01246ae53522320b3416cdbbfae28bff26777c3ba32787663ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b1ba9cd204c38d964ed3bac6a43b77171f5cb6a4b5e41732fb987b0f3ba2694c->leave($__internal_b1ba9cd204c38d964ed3bac6a43b77171f5cb6a4b5e41732fb987b0f3ba2694c_prof);

        
        $__internal_e9bd348d6915a01246ae53522320b3416cdbbfae28bff26777c3ba32787663ff->leave($__internal_e9bd348d6915a01246ae53522320b3416cdbbfae28bff26777c3ba32787663ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
