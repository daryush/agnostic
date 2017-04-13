<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d0612a7d12aa1836daf9b6c8a70fb33b55e8854a7a020fee774f567d2828148d extends Twig_Template
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
        $__internal_386b2ad81563dfb8ebc64060016be57f30434c327fbeb9f1403dd9010ffa2bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386b2ad81563dfb8ebc64060016be57f30434c327fbeb9f1403dd9010ffa2bb2->enter($__internal_386b2ad81563dfb8ebc64060016be57f30434c327fbeb9f1403dd9010ffa2bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b3fed443857de091370948968ce18b6166b5bbd85b8600ba064b1eedad4e8dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fed443857de091370948968ce18b6166b5bbd85b8600ba064b1eedad4e8dfb->enter($__internal_b3fed443857de091370948968ce18b6166b5bbd85b8600ba064b1eedad4e8dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_386b2ad81563dfb8ebc64060016be57f30434c327fbeb9f1403dd9010ffa2bb2->leave($__internal_386b2ad81563dfb8ebc64060016be57f30434c327fbeb9f1403dd9010ffa2bb2_prof);

        
        $__internal_b3fed443857de091370948968ce18b6166b5bbd85b8600ba064b1eedad4e8dfb->leave($__internal_b3fed443857de091370948968ce18b6166b5bbd85b8600ba064b1eedad4e8dfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
