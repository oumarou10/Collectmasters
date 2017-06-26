<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dceb34e11b64ac20e321b6c8659c3b92ad5ea2a09b9551ca31f3b602475b1c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dceb34e11b64ac20e321b6c8659c3b92ad5ea2a09b9551ca31f3b602475b1c4e->enter($__internal_dceb34e11b64ac20e321b6c8659c3b92ad5ea2a09b9551ca31f3b602475b1c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3501f64a6bf695912c992163d7d8a8023c9122f7927f754844f8f7d52d1a3943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3501f64a6bf695912c992163d7d8a8023c9122f7927f754844f8f7d52d1a3943->enter($__internal_3501f64a6bf695912c992163d7d8a8023c9122f7927f754844f8f7d52d1a3943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dceb34e11b64ac20e321b6c8659c3b92ad5ea2a09b9551ca31f3b602475b1c4e->leave($__internal_dceb34e11b64ac20e321b6c8659c3b92ad5ea2a09b9551ca31f3b602475b1c4e_prof);

        
        $__internal_3501f64a6bf695912c992163d7d8a8023c9122f7927f754844f8f7d52d1a3943->leave($__internal_3501f64a6bf695912c992163d7d8a8023c9122f7927f754844f8f7d52d1a3943_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_136a9dc281323ddcf172da7bea463cca856dc2628a537b9c518bb5afcfa695d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136a9dc281323ddcf172da7bea463cca856dc2628a537b9c518bb5afcfa695d0->enter($__internal_136a9dc281323ddcf172da7bea463cca856dc2628a537b9c518bb5afcfa695d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73ef23e34c9f0b72adf65ffa89310ea8660a78ba9f50e3bc3b1f743b6f429100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ef23e34c9f0b72adf65ffa89310ea8660a78ba9f50e3bc3b1f743b6f429100->enter($__internal_73ef23e34c9f0b72adf65ffa89310ea8660a78ba9f50e3bc3b1f743b6f429100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_73ef23e34c9f0b72adf65ffa89310ea8660a78ba9f50e3bc3b1f743b6f429100->leave($__internal_73ef23e34c9f0b72adf65ffa89310ea8660a78ba9f50e3bc3b1f743b6f429100_prof);

        
        $__internal_136a9dc281323ddcf172da7bea463cca856dc2628a537b9c518bb5afcfa695d0->leave($__internal_136a9dc281323ddcf172da7bea463cca856dc2628a537b9c518bb5afcfa695d0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05d7160767a7566633863c1b922d2cf9a9f109e80055bb928f58419901adec70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d7160767a7566633863c1b922d2cf9a9f109e80055bb928f58419901adec70->enter($__internal_05d7160767a7566633863c1b922d2cf9a9f109e80055bb928f58419901adec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89ebc1e253fa4f842360f78eeb016bd92e34b08f1d41f8d9b15740ece717a66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ebc1e253fa4f842360f78eeb016bd92e34b08f1d41f8d9b15740ece717a66a->enter($__internal_89ebc1e253fa4f842360f78eeb016bd92e34b08f1d41f8d9b15740ece717a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_89ebc1e253fa4f842360f78eeb016bd92e34b08f1d41f8d9b15740ece717a66a->leave($__internal_89ebc1e253fa4f842360f78eeb016bd92e34b08f1d41f8d9b15740ece717a66a_prof);

        
        $__internal_05d7160767a7566633863c1b922d2cf9a9f109e80055bb928f58419901adec70->leave($__internal_05d7160767a7566633863c1b922d2cf9a9f109e80055bb928f58419901adec70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9bfe240b828e8dc226a8dc7c7d58dc4a3849344990a01f55a6aa5fbf2499453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bfe240b828e8dc226a8dc7c7d58dc4a3849344990a01f55a6aa5fbf2499453->enter($__internal_b9bfe240b828e8dc226a8dc7c7d58dc4a3849344990a01f55a6aa5fbf2499453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc2790a9fbdfba53bc59fa8be013fe9db1c23a2db229520c0ecf304041e6a8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2790a9fbdfba53bc59fa8be013fe9db1c23a2db229520c0ecf304041e6a8c9->enter($__internal_fc2790a9fbdfba53bc59fa8be013fe9db1c23a2db229520c0ecf304041e6a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc2790a9fbdfba53bc59fa8be013fe9db1c23a2db229520c0ecf304041e6a8c9->leave($__internal_fc2790a9fbdfba53bc59fa8be013fe9db1c23a2db229520c0ecf304041e6a8c9_prof);

        
        $__internal_b9bfe240b828e8dc226a8dc7c7d58dc4a3849344990a01f55a6aa5fbf2499453->leave($__internal_b9bfe240b828e8dc226a8dc7c7d58dc4a3849344990a01f55a6aa5fbf2499453_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
