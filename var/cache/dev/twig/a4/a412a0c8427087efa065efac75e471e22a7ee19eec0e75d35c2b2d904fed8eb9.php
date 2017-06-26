<?php

/* homepage/index.html.twig */
class __TwigTemplate_f33f93adcfe57764c3fb9fa299e00654016d9be5b33d26708e4a470e8d3bfaaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
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
        $__internal_da8b1396ba86d687bbed35618c8a622fa5f9176c2f287b11f6fd019a35570ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8b1396ba86d687bbed35618c8a622fa5f9176c2f287b11f6fd019a35570ab6->enter($__internal_da8b1396ba86d687bbed35618c8a622fa5f9176c2f287b11f6fd019a35570ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_75dcd7af5cc870d2df25a794bd6a77353cf2e91f589d45f0ec0e2acbbe12be88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dcd7af5cc870d2df25a794bd6a77353cf2e91f589d45f0ec0e2acbbe12be88->enter($__internal_75dcd7af5cc870d2df25a794bd6a77353cf2e91f589d45f0ec0e2acbbe12be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8b1396ba86d687bbed35618c8a622fa5f9176c2f287b11f6fd019a35570ab6->leave($__internal_da8b1396ba86d687bbed35618c8a622fa5f9176c2f287b11f6fd019a35570ab6_prof);

        
        $__internal_75dcd7af5cc870d2df25a794bd6a77353cf2e91f589d45f0ec0e2acbbe12be88->leave($__internal_75dcd7af5cc870d2df25a794bd6a77353cf2e91f589d45f0ec0e2acbbe12be88_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_849a74beb665e37197df86588339eb25d5f2693d79898b345867ee68db380b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849a74beb665e37197df86588339eb25d5f2693d79898b345867ee68db380b63->enter($__internal_849a74beb665e37197df86588339eb25d5f2693d79898b345867ee68db380b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fc2d0c5955b86895a49147aa0b1adf16c73dc6cc16f95d7ba81230504014f4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2d0c5955b86895a49147aa0b1adf16c73dc6cc16f95d7ba81230504014f4d4->enter($__internal_fc2d0c5955b86895a49147aa0b1adf16c73dc6cc16f95d7ba81230504014f4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"jumbotron\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque consectetur, culpa deleniti distinctio dolore eaque eius ex, illo labore maxime nemo obcaecati quis quisquam, saepe similique sint unde!
    </div>
";
        
        $__internal_fc2d0c5955b86895a49147aa0b1adf16c73dc6cc16f95d7ba81230504014f4d4->leave($__internal_fc2d0c5955b86895a49147aa0b1adf16c73dc6cc16f95d7ba81230504014f4d4_prof);

        
        $__internal_849a74beb665e37197df86588339eb25d5f2693d79898b345867ee68db380b63->leave($__internal_849a74beb665e37197df86588339eb25d5f2693d79898b345867ee68db380b63_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"jumbotron\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque consectetur, culpa deleniti distinctio dolore eaque eius ex, illo labore maxime nemo obcaecati quis quisquam, saepe similique sint unde!
    </div>
{% endblock %}", "homepage/index.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/app/Resources/views/homepage/index.html.twig");
    }
}
