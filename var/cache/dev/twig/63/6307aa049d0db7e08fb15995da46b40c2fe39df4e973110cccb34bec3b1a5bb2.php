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
        $__internal_c0da351288958c3bff01946b23a12c6aad320deaa50b8e8ba6c8ced8dac7b2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0da351288958c3bff01946b23a12c6aad320deaa50b8e8ba6c8ced8dac7b2e5->enter($__internal_c0da351288958c3bff01946b23a12c6aad320deaa50b8e8ba6c8ced8dac7b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/add.html.twig"));

        $__internal_4debcb5c773adcda7d23350b0e8a88d570ef0fff8c455268684533f418d50af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4debcb5c773adcda7d23350b0e8a88d570ef0fff8c455268684533f418d50af5->enter($__internal_4debcb5c773adcda7d23350b0e8a88d570ef0fff8c455268684533f418d50af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0da351288958c3bff01946b23a12c6aad320deaa50b8e8ba6c8ced8dac7b2e5->leave($__internal_c0da351288958c3bff01946b23a12c6aad320deaa50b8e8ba6c8ced8dac7b2e5_prof);

        
        $__internal_4debcb5c773adcda7d23350b0e8a88d570ef0fff8c455268684533f418d50af5->leave($__internal_4debcb5c773adcda7d23350b0e8a88d570ef0fff8c455268684533f418d50af5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3e34eb028cc8e522553ba84610e4fb3c8babc63a6b45388ab279c7c2591041f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e34eb028cc8e522553ba84610e4fb3c8babc63a6b45388ab279c7c2591041f4->enter($__internal_3e34eb028cc8e522553ba84610e4fb3c8babc63a6b45388ab279c7c2591041f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_49d9fcef2cc6ea171fb1cdeefcc53657edaa1242d8f60cb7573f3cc01c9f6cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d9fcef2cc6ea171fb1cdeefcc53657edaa1242d8f60cb7573f3cc01c9f6cf1->enter($__internal_49d9fcef2cc6ea171fb1cdeefcc53657edaa1242d8f60cb7573f3cc01c9f6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_49d9fcef2cc6ea171fb1cdeefcc53657edaa1242d8f60cb7573f3cc01c9f6cf1->leave($__internal_49d9fcef2cc6ea171fb1cdeefcc53657edaa1242d8f60cb7573f3cc01c9f6cf1_prof);

        
        $__internal_3e34eb028cc8e522553ba84610e4fb3c8babc63a6b45388ab279c7c2591041f4->leave($__internal_3e34eb028cc8e522553ba84610e4fb3c8babc63a6b45388ab279c7c2591041f4_prof);

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
{% endblock %}", "item/add.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/app/Resources/views/item/add.html.twig");
    }
}
