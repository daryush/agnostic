<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8e3e85c467d3dc34205ec7300800cf435cf15a73ae151b68a0fc20432d2bbad6 extends Twig_Template
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
        $__internal_e7dccf4e395ceaf36337199384b5518353ae2b60448eeace9fe49b3b049b47dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7dccf4e395ceaf36337199384b5518353ae2b60448eeace9fe49b3b049b47dc->enter($__internal_e7dccf4e395ceaf36337199384b5518353ae2b60448eeace9fe49b3b049b47dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_318d03e1386fa0170773e43bcedf2329aa77a51bfc9c62c7fd4852ea301ad5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318d03e1386fa0170773e43bcedf2329aa77a51bfc9c62c7fd4852ea301ad5b2->enter($__internal_318d03e1386fa0170773e43bcedf2329aa77a51bfc9c62c7fd4852ea301ad5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e7dccf4e395ceaf36337199384b5518353ae2b60448eeace9fe49b3b049b47dc->leave($__internal_e7dccf4e395ceaf36337199384b5518353ae2b60448eeace9fe49b3b049b47dc_prof);

        
        $__internal_318d03e1386fa0170773e43bcedf2329aa77a51bfc9c62c7fd4852ea301ad5b2->leave($__internal_318d03e1386fa0170773e43bcedf2329aa77a51bfc9c62c7fd4852ea301ad5b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
