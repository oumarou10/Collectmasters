<?php

/* item/add.html.twig */
class __TwigTemplate_286a6e8c4c66e69734d6d5e79e8a73e5fc48946776e3bc759e073c1c97653acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/add.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b993f3db8a9a4f1949654e4f6285d7eb8ecf485f67265c208324c25cc32e4a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b993f3db8a9a4f1949654e4f6285d7eb8ecf485f67265c208324c25cc32e4a1a->enter($__internal_b993f3db8a9a4f1949654e4f6285d7eb8ecf485f67265c208324c25cc32e4a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/add.html.twig"));

        $__internal_c4d7dca61e83be8fdb76fe7e9a7104e3326288e78c2f99b5a0dfbfb7960155ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d7dca61e83be8fdb76fe7e9a7104e3326288e78c2f99b5a0dfbfb7960155ad->enter($__internal_c4d7dca61e83be8fdb76fe7e9a7104e3326288e78c2f99b5a0dfbfb7960155ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b993f3db8a9a4f1949654e4f6285d7eb8ecf485f67265c208324c25cc32e4a1a->leave($__internal_b993f3db8a9a4f1949654e4f6285d7eb8ecf485f67265c208324c25cc32e4a1a_prof);

        
        $__internal_c4d7dca61e83be8fdb76fe7e9a7104e3326288e78c2f99b5a0dfbfb7960155ad->leave($__internal_c4d7dca61e83be8fdb76fe7e9a7104e3326288e78c2f99b5a0dfbfb7960155ad_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1fa2960d36ff5184553d4568e52ee31f64678c36b4a07e0606d94420cdd82349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa2960d36ff5184553d4568e52ee31f64678c36b4a07e0606d94420cdd82349->enter($__internal_1fa2960d36ff5184553d4568e52ee31f64678c36b4a07e0606d94420cdd82349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_48d53339b1f8d6d00b52eebd25ff2c068e14b89cf8972309e8ef4a6b7dafd01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d53339b1f8d6d00b52eebd25ff2c068e14b89cf8972309e8ef4a6b7dafd01a->enter($__internal_48d53339b1f8d6d00b52eebd25ff2c068e14b89cf8972309e8ef4a6b7dafd01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_48d53339b1f8d6d00b52eebd25ff2c068e14b89cf8972309e8ef4a6b7dafd01a->leave($__internal_48d53339b1f8d6d00b52eebd25ff2c068e14b89cf8972309e8ef4a6b7dafd01a_prof);

        
        $__internal_1fa2960d36ff5184553d4568e52ee31f64678c36b4a07e0606d94420cdd82349->leave($__internal_1fa2960d36ff5184553d4568e52ee31f64678c36b4a07e0606d94420cdd82349_prof);

    }

    public function getTemplateName()
    {
        return "item/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container\">
        {{ form(form) }}
    </div>
{% endblock %}", "item/add.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/item/add.html.twig");
    }
}
