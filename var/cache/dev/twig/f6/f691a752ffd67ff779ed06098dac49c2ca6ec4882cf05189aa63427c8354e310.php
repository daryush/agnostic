<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8621dc51f29a404b6e62b6c052fc97bbae2683ffe751a70e3668547c39275f1c extends Twig_Template
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
        $__internal_26fb6dc6ebed650a1d6318746a408532f80f6643a970802ca91899a41e35b993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fb6dc6ebed650a1d6318746a408532f80f6643a970802ca91899a41e35b993->enter($__internal_26fb6dc6ebed650a1d6318746a408532f80f6643a970802ca91899a41e35b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d56d7bad5b747d46846dbb7a9c8caee618426a6389c391ec571f99a9e0611c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56d7bad5b747d46846dbb7a9c8caee618426a6389c391ec571f99a9e0611c6c->enter($__internal_d56d7bad5b747d46846dbb7a9c8caee618426a6389c391ec571f99a9e0611c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_26fb6dc6ebed650a1d6318746a408532f80f6643a970802ca91899a41e35b993->leave($__internal_26fb6dc6ebed650a1d6318746a408532f80f6643a970802ca91899a41e35b993_prof);

        
        $__internal_d56d7bad5b747d46846dbb7a9c8caee618426a6389c391ec571f99a9e0611c6c->leave($__internal_d56d7bad5b747d46846dbb7a9c8caee618426a6389c391ec571f99a9e0611c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
