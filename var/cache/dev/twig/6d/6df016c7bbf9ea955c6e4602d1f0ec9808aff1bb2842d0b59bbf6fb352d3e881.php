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
        $__internal_8277ba08ab6c5b7ccd7db05e4e4776443d44215ce93d81c1b0e292eaf374de4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8277ba08ab6c5b7ccd7db05e4e4776443d44215ce93d81c1b0e292eaf374de4e->enter($__internal_8277ba08ab6c5b7ccd7db05e4e4776443d44215ce93d81c1b0e292eaf374de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0ecc3d4019926488d73673e358910f4c6e0468b94565add540f228877e5059c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ecc3d4019926488d73673e358910f4c6e0468b94565add540f228877e5059c->enter($__internal_e0ecc3d4019926488d73673e358910f4c6e0468b94565add540f228877e5059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8277ba08ab6c5b7ccd7db05e4e4776443d44215ce93d81c1b0e292eaf374de4e->leave($__internal_8277ba08ab6c5b7ccd7db05e4e4776443d44215ce93d81c1b0e292eaf374de4e_prof);

        
        $__internal_e0ecc3d4019926488d73673e358910f4c6e0468b94565add540f228877e5059c->leave($__internal_e0ecc3d4019926488d73673e358910f4c6e0468b94565add540f228877e5059c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ef36f6bc275a6b3a2df123bfb53caa030ef484b6ef498a10fb61fe96e0661e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef36f6bc275a6b3a2df123bfb53caa030ef484b6ef498a10fb61fe96e0661e1->enter($__internal_3ef36f6bc275a6b3a2df123bfb53caa030ef484b6ef498a10fb61fe96e0661e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6733f38083c522a42829196fa008171534f03c5a98a9e6f7a1e66c79ec1edf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6733f38083c522a42829196fa008171534f03c5a98a9e6f7a1e66c79ec1edf7->enter($__internal_d6733f38083c522a42829196fa008171534f03c5a98a9e6f7a1e66c79ec1edf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d6733f38083c522a42829196fa008171534f03c5a98a9e6f7a1e66c79ec1edf7->leave($__internal_d6733f38083c522a42829196fa008171534f03c5a98a9e6f7a1e66c79ec1edf7_prof);

        
        $__internal_3ef36f6bc275a6b3a2df123bfb53caa030ef484b6ef498a10fb61fe96e0661e1->leave($__internal_3ef36f6bc275a6b3a2df123bfb53caa030ef484b6ef498a10fb61fe96e0661e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e08c9e07505ddd5d7831f9c2e560e29f84c37e32ffbceaa4fd9ae078c582e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e08c9e07505ddd5d7831f9c2e560e29f84c37e32ffbceaa4fd9ae078c582e2d->enter($__internal_9e08c9e07505ddd5d7831f9c2e560e29f84c37e32ffbceaa4fd9ae078c582e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b5ff661b1c6ec9ed109d4460f7da1b2a56901ed1e4da52d78ee95a5e982ca742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ff661b1c6ec9ed109d4460f7da1b2a56901ed1e4da52d78ee95a5e982ca742->enter($__internal_b5ff661b1c6ec9ed109d4460f7da1b2a56901ed1e4da52d78ee95a5e982ca742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b5ff661b1c6ec9ed109d4460f7da1b2a56901ed1e4da52d78ee95a5e982ca742->leave($__internal_b5ff661b1c6ec9ed109d4460f7da1b2a56901ed1e4da52d78ee95a5e982ca742_prof);

        
        $__internal_9e08c9e07505ddd5d7831f9c2e560e29f84c37e32ffbceaa4fd9ae078c582e2d->leave($__internal_9e08c9e07505ddd5d7831f9c2e560e29f84c37e32ffbceaa4fd9ae078c582e2d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eaf95b5826bc600cc8fc55e710c677c211bdeb0aade4e02a8bdb49eba7e7e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eaf95b5826bc600cc8fc55e710c677c211bdeb0aade4e02a8bdb49eba7e7e4a->enter($__internal_0eaf95b5826bc600cc8fc55e710c677c211bdeb0aade4e02a8bdb49eba7e7e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4ba75138e23ea282b9cad1506330379a408ba38efb96176b8a9a8f76d9df7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ba75138e23ea282b9cad1506330379a408ba38efb96176b8a9a8f76d9df7b3->enter($__internal_e4ba75138e23ea282b9cad1506330379a408ba38efb96176b8a9a8f76d9df7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e4ba75138e23ea282b9cad1506330379a408ba38efb96176b8a9a8f76d9df7b3->leave($__internal_e4ba75138e23ea282b9cad1506330379a408ba38efb96176b8a9a8f76d9df7b3_prof);

        
        $__internal_0eaf95b5826bc600cc8fc55e710c677c211bdeb0aade4e02a8bdb49eba7e7e4a->leave($__internal_0eaf95b5826bc600cc8fc55e710c677c211bdeb0aade4e02a8bdb49eba7e7e4a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
