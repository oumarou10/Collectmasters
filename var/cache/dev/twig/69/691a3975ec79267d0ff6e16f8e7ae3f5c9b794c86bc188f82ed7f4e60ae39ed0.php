<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9ccef2ccdcd63730e4b49d5d36d4335b8121e225508512d987be3b6fceeda176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_777c28ad1c8dd7ca3ce8e6d8298905138cf3e87ff3d0b907c20a3a8e281bb9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777c28ad1c8dd7ca3ce8e6d8298905138cf3e87ff3d0b907c20a3a8e281bb9a9->enter($__internal_777c28ad1c8dd7ca3ce8e6d8298905138cf3e87ff3d0b907c20a3a8e281bb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_647fb9cabab42cd25da5a0bb1eed76ca6c3614184cfbad74022307b19f64b9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647fb9cabab42cd25da5a0bb1eed76ca6c3614184cfbad74022307b19f64b9e8->enter($__internal_647fb9cabab42cd25da5a0bb1eed76ca6c3614184cfbad74022307b19f64b9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777c28ad1c8dd7ca3ce8e6d8298905138cf3e87ff3d0b907c20a3a8e281bb9a9->leave($__internal_777c28ad1c8dd7ca3ce8e6d8298905138cf3e87ff3d0b907c20a3a8e281bb9a9_prof);

        
        $__internal_647fb9cabab42cd25da5a0bb1eed76ca6c3614184cfbad74022307b19f64b9e8->leave($__internal_647fb9cabab42cd25da5a0bb1eed76ca6c3614184cfbad74022307b19f64b9e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b62157df58f3cae37d73cf3a7f8a90799bf8de8aa55481c2a99737c27efbf4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62157df58f3cae37d73cf3a7f8a90799bf8de8aa55481c2a99737c27efbf4a1->enter($__internal_b62157df58f3cae37d73cf3a7f8a90799bf8de8aa55481c2a99737c27efbf4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ccb6e0cf57b58b4e36fe6799d684e80ba15bb2cc0ab745aa0ab7d1eb1c67316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccb6e0cf57b58b4e36fe6799d684e80ba15bb2cc0ab745aa0ab7d1eb1c67316->enter($__internal_7ccb6e0cf57b58b4e36fe6799d684e80ba15bb2cc0ab745aa0ab7d1eb1c67316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7ccb6e0cf57b58b4e36fe6799d684e80ba15bb2cc0ab745aa0ab7d1eb1c67316->leave($__internal_7ccb6e0cf57b58b4e36fe6799d684e80ba15bb2cc0ab745aa0ab7d1eb1c67316_prof);

        
        $__internal_b62157df58f3cae37d73cf3a7f8a90799bf8de8aa55481c2a99737c27efbf4a1->leave($__internal_b62157df58f3cae37d73cf3a7f8a90799bf8de8aa55481c2a99737c27efbf4a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
