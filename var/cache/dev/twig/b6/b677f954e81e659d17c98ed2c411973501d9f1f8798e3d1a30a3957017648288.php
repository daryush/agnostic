<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d7314b5e29ce5dad46c3691caca1b7a6e6a032237ce3151a72d331275452f661 extends Twig_Template
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
        $__internal_57f44ca0d2ceead461d98094471e9f0ff6391eb381ae929cd8b4cde132f752f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f44ca0d2ceead461d98094471e9f0ff6391eb381ae929cd8b4cde132f752f5->enter($__internal_57f44ca0d2ceead461d98094471e9f0ff6391eb381ae929cd8b4cde132f752f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_602440c91c5221fa4b2dd11eda99832caaf31d0a4e7793ef3e97ba9c1282dea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602440c91c5221fa4b2dd11eda99832caaf31d0a4e7793ef3e97ba9c1282dea1->enter($__internal_602440c91c5221fa4b2dd11eda99832caaf31d0a4e7793ef3e97ba9c1282dea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_57f44ca0d2ceead461d98094471e9f0ff6391eb381ae929cd8b4cde132f752f5->leave($__internal_57f44ca0d2ceead461d98094471e9f0ff6391eb381ae929cd8b4cde132f752f5_prof);

        
        $__internal_602440c91c5221fa4b2dd11eda99832caaf31d0a4e7793ef3e97ba9c1282dea1->leave($__internal_602440c91c5221fa4b2dd11eda99832caaf31d0a4e7793ef3e97ba9c1282dea1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
