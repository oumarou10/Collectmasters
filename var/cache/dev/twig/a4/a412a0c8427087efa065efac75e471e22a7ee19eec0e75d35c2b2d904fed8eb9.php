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
        $__internal_daf49c52b783df98b74f1067c6573c9bfbfedfbf0eb8c806e4e6daec12376cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf49c52b783df98b74f1067c6573c9bfbfedfbf0eb8c806e4e6daec12376cbd->enter($__internal_daf49c52b783df98b74f1067c6573c9bfbfedfbf0eb8c806e4e6daec12376cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_de07e3bfb9c0daf05ac997ad07e5c74b69042fbccf4ada4f3e513c296e941085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de07e3bfb9c0daf05ac997ad07e5c74b69042fbccf4ada4f3e513c296e941085->enter($__internal_de07e3bfb9c0daf05ac997ad07e5c74b69042fbccf4ada4f3e513c296e941085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf49c52b783df98b74f1067c6573c9bfbfedfbf0eb8c806e4e6daec12376cbd->leave($__internal_daf49c52b783df98b74f1067c6573c9bfbfedfbf0eb8c806e4e6daec12376cbd_prof);

        
        $__internal_de07e3bfb9c0daf05ac997ad07e5c74b69042fbccf4ada4f3e513c296e941085->leave($__internal_de07e3bfb9c0daf05ac997ad07e5c74b69042fbccf4ada4f3e513c296e941085_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c80a3bacd6d243688619ab780e62f89fc2626e6d99e1bf0c8e1a52e1f8f0c7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80a3bacd6d243688619ab780e62f89fc2626e6d99e1bf0c8e1a52e1f8f0c7ad->enter($__internal_c80a3bacd6d243688619ab780e62f89fc2626e6d99e1bf0c8e1a52e1f8f0c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_68ef95ac1877b57e7a18704829594e261d7866770df25f54f46485fc6b66192d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef95ac1877b57e7a18704829594e261d7866770df25f54f46485fc6b66192d->enter($__internal_68ef95ac1877b57e7a18704829594e261d7866770df25f54f46485fc6b66192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"jumbotron\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque consectetur, culpa deleniti distinctio dolore eaque eius ex, illo labore maxime nemo obcaecati quis quisquam, saepe similique sint unde!
    </div>
";
        
        $__internal_68ef95ac1877b57e7a18704829594e261d7866770df25f54f46485fc6b66192d->leave($__internal_68ef95ac1877b57e7a18704829594e261d7866770df25f54f46485fc6b66192d_prof);

        
        $__internal_c80a3bacd6d243688619ab780e62f89fc2626e6d99e1bf0c8e1a52e1f8f0c7ad->leave($__internal_c80a3bacd6d243688619ab780e62f89fc2626e6d99e1bf0c8e1a52e1f8f0c7ad_prof);

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
{% endblock %}", "homepage/index.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/homepage/index.html.twig");
    }
}
