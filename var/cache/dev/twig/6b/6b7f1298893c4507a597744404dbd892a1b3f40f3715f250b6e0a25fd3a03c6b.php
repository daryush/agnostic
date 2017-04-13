<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b07121b20286106d2ce8012391357dd8560380b25fd2987213bdc12fa82d311f extends Twig_Template
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
        $__internal_b1f789bb69ee8342e1c84c8e05e07be167a64eb1818dc8ec56b16520b971dd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f789bb69ee8342e1c84c8e05e07be167a64eb1818dc8ec56b16520b971dd3a->enter($__internal_b1f789bb69ee8342e1c84c8e05e07be167a64eb1818dc8ec56b16520b971dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a0aa0c6e8cda933985d29959aedec2454c0d47e61237e48626815c6b4cc18fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0aa0c6e8cda933985d29959aedec2454c0d47e61237e48626815c6b4cc18fb6->enter($__internal_a0aa0c6e8cda933985d29959aedec2454c0d47e61237e48626815c6b4cc18fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b1f789bb69ee8342e1c84c8e05e07be167a64eb1818dc8ec56b16520b971dd3a->leave($__internal_b1f789bb69ee8342e1c84c8e05e07be167a64eb1818dc8ec56b16520b971dd3a_prof);

        
        $__internal_a0aa0c6e8cda933985d29959aedec2454c0d47e61237e48626815c6b4cc18fb6->leave($__internal_a0aa0c6e8cda933985d29959aedec2454c0d47e61237e48626815c6b4cc18fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
