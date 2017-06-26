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
        $__internal_189f2cffb27f71fe24ea8b0b892792e9bb5574317980eae3cfeb70e41aff4a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189f2cffb27f71fe24ea8b0b892792e9bb5574317980eae3cfeb70e41aff4a05->enter($__internal_189f2cffb27f71fe24ea8b0b892792e9bb5574317980eae3cfeb70e41aff4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_991fb9393488b283fac4abdd408c4dea443e514d27cf1de9cb3ef22fd1584640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991fb9393488b283fac4abdd408c4dea443e514d27cf1de9cb3ef22fd1584640->enter($__internal_991fb9393488b283fac4abdd408c4dea443e514d27cf1de9cb3ef22fd1584640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189f2cffb27f71fe24ea8b0b892792e9bb5574317980eae3cfeb70e41aff4a05->leave($__internal_189f2cffb27f71fe24ea8b0b892792e9bb5574317980eae3cfeb70e41aff4a05_prof);

        
        $__internal_991fb9393488b283fac4abdd408c4dea443e514d27cf1de9cb3ef22fd1584640->leave($__internal_991fb9393488b283fac4abdd408c4dea443e514d27cf1de9cb3ef22fd1584640_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e4c27131d254a372d3c5e796eba29ac0e6d05cf34b78cb15b3e94bc54d606bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4c27131d254a372d3c5e796eba29ac0e6d05cf34b78cb15b3e94bc54d606bf->enter($__internal_2e4c27131d254a372d3c5e796eba29ac0e6d05cf34b78cb15b3e94bc54d606bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80702f3aa857a6ccdaee2d4ba3746f5b4628feebe7bf569cc88ea2ef3f78c077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80702f3aa857a6ccdaee2d4ba3746f5b4628feebe7bf569cc88ea2ef3f78c077->enter($__internal_80702f3aa857a6ccdaee2d4ba3746f5b4628feebe7bf569cc88ea2ef3f78c077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80702f3aa857a6ccdaee2d4ba3746f5b4628feebe7bf569cc88ea2ef3f78c077->leave($__internal_80702f3aa857a6ccdaee2d4ba3746f5b4628feebe7bf569cc88ea2ef3f78c077_prof);

        
        $__internal_2e4c27131d254a372d3c5e796eba29ac0e6d05cf34b78cb15b3e94bc54d606bf->leave($__internal_2e4c27131d254a372d3c5e796eba29ac0e6d05cf34b78cb15b3e94bc54d606bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14d315a450ab2dc73f9193ddfb624970b69ee8063101e50d4589d56c8dec33ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d315a450ab2dc73f9193ddfb624970b69ee8063101e50d4589d56c8dec33ce->enter($__internal_14d315a450ab2dc73f9193ddfb624970b69ee8063101e50d4589d56c8dec33ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df967db485a4354b90f49c3b273d72aa0734328efd7034ffbf5cd3debe249fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df967db485a4354b90f49c3b273d72aa0734328efd7034ffbf5cd3debe249fec->enter($__internal_df967db485a4354b90f49c3b273d72aa0734328efd7034ffbf5cd3debe249fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df967db485a4354b90f49c3b273d72aa0734328efd7034ffbf5cd3debe249fec->leave($__internal_df967db485a4354b90f49c3b273d72aa0734328efd7034ffbf5cd3debe249fec_prof);

        
        $__internal_14d315a450ab2dc73f9193ddfb624970b69ee8063101e50d4589d56c8dec33ce->leave($__internal_14d315a450ab2dc73f9193ddfb624970b69ee8063101e50d4589d56c8dec33ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c71842ef187ba4ebf5305ddb7e84e0f30bb0567db6a196fbecefbe4b0fa55a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c71842ef187ba4ebf5305ddb7e84e0f30bb0567db6a196fbecefbe4b0fa55a5->enter($__internal_1c71842ef187ba4ebf5305ddb7e84e0f30bb0567db6a196fbecefbe4b0fa55a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb1aa81b8e4243c6d0c59b543b127402882462da692ffc05f2ee3e8980ef0422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1aa81b8e4243c6d0c59b543b127402882462da692ffc05f2ee3e8980ef0422->enter($__internal_fb1aa81b8e4243c6d0c59b543b127402882462da692ffc05f2ee3e8980ef0422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb1aa81b8e4243c6d0c59b543b127402882462da692ffc05f2ee3e8980ef0422->leave($__internal_fb1aa81b8e4243c6d0c59b543b127402882462da692ffc05f2ee3e8980ef0422_prof);

        
        $__internal_1c71842ef187ba4ebf5305ddb7e84e0f30bb0567db6a196fbecefbe4b0fa55a5->leave($__internal_1c71842ef187ba4ebf5305ddb7e84e0f30bb0567db6a196fbecefbe4b0fa55a5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
