<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_919c9a07100c9b28e0d6d8f7a174151686f46f92b03fff793c5147cf58d24e5d extends Twig_Template
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
        $__internal_f54d8b85c1fdced64f055375eadb171ab73a8cfd1aaa2b5d077e107195c30e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54d8b85c1fdced64f055375eadb171ab73a8cfd1aaa2b5d077e107195c30e30->enter($__internal_f54d8b85c1fdced64f055375eadb171ab73a8cfd1aaa2b5d077e107195c30e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4ab4a7f2f7424a0e34b01400e27e74171d111e34d4bb949e5d9e7b678ebfc28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab4a7f2f7424a0e34b01400e27e74171d111e34d4bb949e5d9e7b678ebfc28a->enter($__internal_4ab4a7f2f7424a0e34b01400e27e74171d111e34d4bb949e5d9e7b678ebfc28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f54d8b85c1fdced64f055375eadb171ab73a8cfd1aaa2b5d077e107195c30e30->leave($__internal_f54d8b85c1fdced64f055375eadb171ab73a8cfd1aaa2b5d077e107195c30e30_prof);

        
        $__internal_4ab4a7f2f7424a0e34b01400e27e74171d111e34d4bb949e5d9e7b678ebfc28a->leave($__internal_4ab4a7f2f7424a0e34b01400e27e74171d111e34d4bb949e5d9e7b678ebfc28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
