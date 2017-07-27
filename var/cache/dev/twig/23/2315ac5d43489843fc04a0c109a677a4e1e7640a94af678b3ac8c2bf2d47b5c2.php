<?php

/* item/one.html.twig */
class __TwigTemplate_6f7bf66e8559599aa2d0984e2bbd9088959f0a73e5953dc5929deb52d0c992a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/one.html.twig", 1);
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
        $__internal_e00f00e781b2bca6d4ca42888bd04d1450e84a0741da2d45a8ae085072b5713d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00f00e781b2bca6d4ca42888bd04d1450e84a0741da2d45a8ae085072b5713d->enter($__internal_e00f00e781b2bca6d4ca42888bd04d1450e84a0741da2d45a8ae085072b5713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/one.html.twig"));

        $__internal_e728a084c6fb32b683190c3716eb80827721aad8ab469c8a60c3b7a8fed4c547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e728a084c6fb32b683190c3716eb80827721aad8ab469c8a60c3b7a8fed4c547->enter($__internal_e728a084c6fb32b683190c3716eb80827721aad8ab469c8a60c3b7a8fed4c547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00f00e781b2bca6d4ca42888bd04d1450e84a0741da2d45a8ae085072b5713d->leave($__internal_e00f00e781b2bca6d4ca42888bd04d1450e84a0741da2d45a8ae085072b5713d_prof);

        
        $__internal_e728a084c6fb32b683190c3716eb80827721aad8ab469c8a60c3b7a8fed4c547->leave($__internal_e728a084c6fb32b683190c3716eb80827721aad8ab469c8a60c3b7a8fed4c547_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5f15ec85d74a72808aa8899983b04aaa6830d1322cba5740d8e7d495ee734163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f15ec85d74a72808aa8899983b04aaa6830d1322cba5740d8e7d495ee734163->enter($__internal_5f15ec85d74a72808aa8899983b04aaa6830d1322cba5740d8e7d495ee734163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5df8c18c4c49ad8cf73f547afafb82a181c28d1d32b58448b0fb49bd64f853ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df8c18c4c49ad8cf73f547afafb82a181c28d1d32b58448b0fb49bd64f853ae->enter($__internal_5df8c18c4c49ad8cf73f547afafb82a181c28d1d32b58448b0fb49bd64f853ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
       <h3> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "title", array()), "html", null, true);
        echo "  by <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "collection", array()), "html", null, true);
        echo " </strong><br /> </h3>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "description", array()), "html", null, true);
        echo " </p><br />

       <div>
          <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("items");
        echo "\"> <button type=\"button\" class=\"btn btn-primary\"> Retour liste item </button> </a>
       </div>

    </div>
";
        
        $__internal_5df8c18c4c49ad8cf73f547afafb82a181c28d1d32b58448b0fb49bd64f853ae->leave($__internal_5df8c18c4c49ad8cf73f547afafb82a181c28d1d32b58448b0fb49bd64f853ae_prof);

        
        $__internal_5f15ec85d74a72808aa8899983b04aaa6830d1322cba5740d8e7d495ee734163->leave($__internal_5f15ec85d74a72808aa8899983b04aaa6830d1322cba5740d8e7d495ee734163_prof);

    }

    public function getTemplateName()
    {
        return "item/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  58 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
       <h3> {{ item.title }}  by <strong>{{ item.collection }} </strong><br /> </h3>
        <p>{{ item.description }} </p><br />

       <div>
          <a href=\"{{ path('items') }}\"> <button type=\"button\" class=\"btn btn-primary\"> Retour liste item </button> </a>
       </div>

    </div>
{% endblock %}", "item/one.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/item/one.html.twig");
    }
}
