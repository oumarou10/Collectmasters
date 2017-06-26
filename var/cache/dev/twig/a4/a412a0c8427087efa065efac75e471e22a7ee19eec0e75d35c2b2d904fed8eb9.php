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
        $__internal_c182e315b3c6551a3b77e92201e01df21c9582e97852edbb50f9af59f094edb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c182e315b3c6551a3b77e92201e01df21c9582e97852edbb50f9af59f094edb1->enter($__internal_c182e315b3c6551a3b77e92201e01df21c9582e97852edbb50f9af59f094edb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_8ad3d8f0c018fbe169eab449194f5527f11a94f37ca5ad3de05d4ae2841a1d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad3d8f0c018fbe169eab449194f5527f11a94f37ca5ad3de05d4ae2841a1d71->enter($__internal_8ad3d8f0c018fbe169eab449194f5527f11a94f37ca5ad3de05d4ae2841a1d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c182e315b3c6551a3b77e92201e01df21c9582e97852edbb50f9af59f094edb1->leave($__internal_c182e315b3c6551a3b77e92201e01df21c9582e97852edbb50f9af59f094edb1_prof);

        
        $__internal_8ad3d8f0c018fbe169eab449194f5527f11a94f37ca5ad3de05d4ae2841a1d71->leave($__internal_8ad3d8f0c018fbe169eab449194f5527f11a94f37ca5ad3de05d4ae2841a1d71_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4be3f1cdce5366b106502e0e1904dc03ecc76dc0b1fba2d9fec0df4746074590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be3f1cdce5366b106502e0e1904dc03ecc76dc0b1fba2d9fec0df4746074590->enter($__internal_4be3f1cdce5366b106502e0e1904dc03ecc76dc0b1fba2d9fec0df4746074590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1419555530a068f9059d756760a587e57e008d608fd0656d6a440e4c489efc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1419555530a068f9059d756760a587e57e008d608fd0656d6a440e4c489efc06->enter($__internal_1419555530a068f9059d756760a587e57e008d608fd0656d6a440e4c489efc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"jumbotron\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque consectetur, culpa deleniti distinctio dolore eaque eius ex, illo labore maxime nemo obcaecati quis quisquam, saepe similique sint unde!
    </div>
";
        
        $__internal_1419555530a068f9059d756760a587e57e008d608fd0656d6a440e4c489efc06->leave($__internal_1419555530a068f9059d756760a587e57e008d608fd0656d6a440e4c489efc06_prof);

        
        $__internal_4be3f1cdce5366b106502e0e1904dc03ecc76dc0b1fba2d9fec0df4746074590->leave($__internal_4be3f1cdce5366b106502e0e1904dc03ecc76dc0b1fba2d9fec0df4746074590_prof);

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
