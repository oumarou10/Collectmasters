<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5d9619064b47f980bf9b20baae172c416c7e76a81ff46a601d325b0fcfcea076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9619064b47f980bf9b20baae172c416c7e76a81ff46a601d325b0fcfcea076->enter($__internal_5d9619064b47f980bf9b20baae172c416c7e76a81ff46a601d325b0fcfcea076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_795bb577c8d2bef2f6aec99981b903b097ab61999a681d244842109c884766fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795bb577c8d2bef2f6aec99981b903b097ab61999a681d244842109c884766fc->enter($__internal_795bb577c8d2bef2f6aec99981b903b097ab61999a681d244842109c884766fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9619064b47f980bf9b20baae172c416c7e76a81ff46a601d325b0fcfcea076->leave($__internal_5d9619064b47f980bf9b20baae172c416c7e76a81ff46a601d325b0fcfcea076_prof);

        
        $__internal_795bb577c8d2bef2f6aec99981b903b097ab61999a681d244842109c884766fc->leave($__internal_795bb577c8d2bef2f6aec99981b903b097ab61999a681d244842109c884766fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_903a515bab688f2e61ec0b6f01c09caac7f101c4d7bcbfa0afa0760d28f17de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903a515bab688f2e61ec0b6f01c09caac7f101c4d7bcbfa0afa0760d28f17de4->enter($__internal_903a515bab688f2e61ec0b6f01c09caac7f101c4d7bcbfa0afa0760d28f17de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36444dee261a3ee4087e78c326947b43d9d014278a40fcafe24232669d302500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36444dee261a3ee4087e78c326947b43d9d014278a40fcafe24232669d302500->enter($__internal_36444dee261a3ee4087e78c326947b43d9d014278a40fcafe24232669d302500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36444dee261a3ee4087e78c326947b43d9d014278a40fcafe24232669d302500->leave($__internal_36444dee261a3ee4087e78c326947b43d9d014278a40fcafe24232669d302500_prof);

        
        $__internal_903a515bab688f2e61ec0b6f01c09caac7f101c4d7bcbfa0afa0760d28f17de4->leave($__internal_903a515bab688f2e61ec0b6f01c09caac7f101c4d7bcbfa0afa0760d28f17de4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7e4ad06a2ca9c38c730e12c539ddf26abecccee10be6dda7485cab867839f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e4ad06a2ca9c38c730e12c539ddf26abecccee10be6dda7485cab867839f32->enter($__internal_f7e4ad06a2ca9c38c730e12c539ddf26abecccee10be6dda7485cab867839f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fad0444a37de3c8ba609ff0235e324d9ad3f241af2ff73dbb5698b50805ecb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad0444a37de3c8ba609ff0235e324d9ad3f241af2ff73dbb5698b50805ecb7a->enter($__internal_fad0444a37de3c8ba609ff0235e324d9ad3f241af2ff73dbb5698b50805ecb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fad0444a37de3c8ba609ff0235e324d9ad3f241af2ff73dbb5698b50805ecb7a->leave($__internal_fad0444a37de3c8ba609ff0235e324d9ad3f241af2ff73dbb5698b50805ecb7a_prof);

        
        $__internal_f7e4ad06a2ca9c38c730e12c539ddf26abecccee10be6dda7485cab867839f32->leave($__internal_f7e4ad06a2ca9c38c730e12c539ddf26abecccee10be6dda7485cab867839f32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f90a8d512e8c8d6a17bdd43487714288d1874c95e2d317afb35496a95678e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f90a8d512e8c8d6a17bdd43487714288d1874c95e2d317afb35496a95678e28->enter($__internal_7f90a8d512e8c8d6a17bdd43487714288d1874c95e2d317afb35496a95678e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fea8df46d86d8c2c444c2ab1a5d58443667c89b29964a90d206d88190ffa960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fea8df46d86d8c2c444c2ab1a5d58443667c89b29964a90d206d88190ffa960->enter($__internal_5fea8df46d86d8c2c444c2ab1a5d58443667c89b29964a90d206d88190ffa960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5fea8df46d86d8c2c444c2ab1a5d58443667c89b29964a90d206d88190ffa960->leave($__internal_5fea8df46d86d8c2c444c2ab1a5d58443667c89b29964a90d206d88190ffa960_prof);

        
        $__internal_7f90a8d512e8c8d6a17bdd43487714288d1874c95e2d317afb35496a95678e28->leave($__internal_7f90a8d512e8c8d6a17bdd43487714288d1874c95e2d317afb35496a95678e28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
