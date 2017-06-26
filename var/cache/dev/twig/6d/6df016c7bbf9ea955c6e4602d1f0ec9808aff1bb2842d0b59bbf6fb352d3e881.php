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
        $__internal_b90df7a27d5e78c2545f0064e3de14eed603536e64ed8ec021a9fdc76b903558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90df7a27d5e78c2545f0064e3de14eed603536e64ed8ec021a9fdc76b903558->enter($__internal_b90df7a27d5e78c2545f0064e3de14eed603536e64ed8ec021a9fdc76b903558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9cd26babb6fc9c03c8d0fc60ba7c5d518468e7f1d55e9278fb8e21ef2ee62311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd26babb6fc9c03c8d0fc60ba7c5d518468e7f1d55e9278fb8e21ef2ee62311->enter($__internal_9cd26babb6fc9c03c8d0fc60ba7c5d518468e7f1d55e9278fb8e21ef2ee62311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90df7a27d5e78c2545f0064e3de14eed603536e64ed8ec021a9fdc76b903558->leave($__internal_b90df7a27d5e78c2545f0064e3de14eed603536e64ed8ec021a9fdc76b903558_prof);

        
        $__internal_9cd26babb6fc9c03c8d0fc60ba7c5d518468e7f1d55e9278fb8e21ef2ee62311->leave($__internal_9cd26babb6fc9c03c8d0fc60ba7c5d518468e7f1d55e9278fb8e21ef2ee62311_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fb7401b14d08a08a24a7de4716cb4fcf5fd6a0109bb3108f50e9bf47375cad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb7401b14d08a08a24a7de4716cb4fcf5fd6a0109bb3108f50e9bf47375cad5->enter($__internal_9fb7401b14d08a08a24a7de4716cb4fcf5fd6a0109bb3108f50e9bf47375cad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e8317dcce93d96e2abf58a5facc36cb8e73de90ef18fba6dd4d4d5bef59d9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8317dcce93d96e2abf58a5facc36cb8e73de90ef18fba6dd4d4d5bef59d9da->enter($__internal_4e8317dcce93d96e2abf58a5facc36cb8e73de90ef18fba6dd4d4d5bef59d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e8317dcce93d96e2abf58a5facc36cb8e73de90ef18fba6dd4d4d5bef59d9da->leave($__internal_4e8317dcce93d96e2abf58a5facc36cb8e73de90ef18fba6dd4d4d5bef59d9da_prof);

        
        $__internal_9fb7401b14d08a08a24a7de4716cb4fcf5fd6a0109bb3108f50e9bf47375cad5->leave($__internal_9fb7401b14d08a08a24a7de4716cb4fcf5fd6a0109bb3108f50e9bf47375cad5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8690fb30a11fd0a7c6c76ac8e675c39429f45f185cd4cee95fae2a7a04667c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8690fb30a11fd0a7c6c76ac8e675c39429f45f185cd4cee95fae2a7a04667c07->enter($__internal_8690fb30a11fd0a7c6c76ac8e675c39429f45f185cd4cee95fae2a7a04667c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ece4d748f3c49923b9aae7c878fad57cbe33bfbf178ef176f2b4469b1e250e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ece4d748f3c49923b9aae7c878fad57cbe33bfbf178ef176f2b4469b1e250e2->enter($__internal_9ece4d748f3c49923b9aae7c878fad57cbe33bfbf178ef176f2b4469b1e250e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9ece4d748f3c49923b9aae7c878fad57cbe33bfbf178ef176f2b4469b1e250e2->leave($__internal_9ece4d748f3c49923b9aae7c878fad57cbe33bfbf178ef176f2b4469b1e250e2_prof);

        
        $__internal_8690fb30a11fd0a7c6c76ac8e675c39429f45f185cd4cee95fae2a7a04667c07->leave($__internal_8690fb30a11fd0a7c6c76ac8e675c39429f45f185cd4cee95fae2a7a04667c07_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ae5410ed94387bbb79d062339519be13353d074093e21628d7d4ccbe9607cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae5410ed94387bbb79d062339519be13353d074093e21628d7d4ccbe9607cbf->enter($__internal_2ae5410ed94387bbb79d062339519be13353d074093e21628d7d4ccbe9607cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddda3f25b000529df4a8aadd03d4203f37eba9f584cc16cc2cf5b7543e3a195f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda3f25b000529df4a8aadd03d4203f37eba9f584cc16cc2cf5b7543e3a195f->enter($__internal_ddda3f25b000529df4a8aadd03d4203f37eba9f584cc16cc2cf5b7543e3a195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ddda3f25b000529df4a8aadd03d4203f37eba9f584cc16cc2cf5b7543e3a195f->leave($__internal_ddda3f25b000529df4a8aadd03d4203f37eba9f584cc16cc2cf5b7543e3a195f_prof);

        
        $__internal_2ae5410ed94387bbb79d062339519be13353d074093e21628d7d4ccbe9607cbf->leave($__internal_2ae5410ed94387bbb79d062339519be13353d074093e21628d7d4ccbe9607cbf_prof);

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
