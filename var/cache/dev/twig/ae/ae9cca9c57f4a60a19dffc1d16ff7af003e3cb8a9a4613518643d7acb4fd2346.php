<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ac094ed54282c68baa2a6e0f820551977a89d6e7f47e5e7fbd5fa236732f679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac094ed54282c68baa2a6e0f820551977a89d6e7f47e5e7fbd5fa236732f679->enter($__internal_5ac094ed54282c68baa2a6e0f820551977a89d6e7f47e5e7fbd5fa236732f679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_58a39e083e5ea232cdcff010af8879187c5ccc3f851eeeca9634230a32afa8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a39e083e5ea232cdcff010af8879187c5ccc3f851eeeca9634230a32afa8e2->enter($__internal_58a39e083e5ea232cdcff010af8879187c5ccc3f851eeeca9634230a32afa8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac094ed54282c68baa2a6e0f820551977a89d6e7f47e5e7fbd5fa236732f679->leave($__internal_5ac094ed54282c68baa2a6e0f820551977a89d6e7f47e5e7fbd5fa236732f679_prof);

        
        $__internal_58a39e083e5ea232cdcff010af8879187c5ccc3f851eeeca9634230a32afa8e2->leave($__internal_58a39e083e5ea232cdcff010af8879187c5ccc3f851eeeca9634230a32afa8e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3db312e973858f06c33e49b508b25cefefd15543a2e8753d944213e4b6b1edd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db312e973858f06c33e49b508b25cefefd15543a2e8753d944213e4b6b1edd0->enter($__internal_3db312e973858f06c33e49b508b25cefefd15543a2e8753d944213e4b6b1edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ee45889ce694ab1a29ff21e8a6e7bd440cd9e49f2629c127fbf46768c9efaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee45889ce694ab1a29ff21e8a6e7bd440cd9e49f2629c127fbf46768c9efaa7->enter($__internal_9ee45889ce694ab1a29ff21e8a6e7bd440cd9e49f2629c127fbf46768c9efaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9ee45889ce694ab1a29ff21e8a6e7bd440cd9e49f2629c127fbf46768c9efaa7->leave($__internal_9ee45889ce694ab1a29ff21e8a6e7bd440cd9e49f2629c127fbf46768c9efaa7_prof);

        
        $__internal_3db312e973858f06c33e49b508b25cefefd15543a2e8753d944213e4b6b1edd0->leave($__internal_3db312e973858f06c33e49b508b25cefefd15543a2e8753d944213e4b6b1edd0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6031985178c12214c8f49689e2c770dc82f17c93226461195e85c6d2c1b9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6031985178c12214c8f49689e2c770dc82f17c93226461195e85c6d2c1b9ac->enter($__internal_7f6031985178c12214c8f49689e2c770dc82f17c93226461195e85c6d2c1b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c435023f5c6007c3806bba0312f385d1fc14db974f08a15947cc88aaae4c2cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c435023f5c6007c3806bba0312f385d1fc14db974f08a15947cc88aaae4c2cbf->enter($__internal_c435023f5c6007c3806bba0312f385d1fc14db974f08a15947cc88aaae4c2cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c435023f5c6007c3806bba0312f385d1fc14db974f08a15947cc88aaae4c2cbf->leave($__internal_c435023f5c6007c3806bba0312f385d1fc14db974f08a15947cc88aaae4c2cbf_prof);

        
        $__internal_7f6031985178c12214c8f49689e2c770dc82f17c93226461195e85c6d2c1b9ac->leave($__internal_7f6031985178c12214c8f49689e2c770dc82f17c93226461195e85c6d2c1b9ac_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0f573da1360eb777c398b9e4db4fdd4618dee87622d737c6e70b80188f5ef5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f573da1360eb777c398b9e4db4fdd4618dee87622d737c6e70b80188f5ef5d->enter($__internal_e0f573da1360eb777c398b9e4db4fdd4618dee87622d737c6e70b80188f5ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ac0e2d9f0110dbc66e41ea7db9fb48f14089732f28a121ef1f03fd4d595ba7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac0e2d9f0110dbc66e41ea7db9fb48f14089732f28a121ef1f03fd4d595ba7d->enter($__internal_3ac0e2d9f0110dbc66e41ea7db9fb48f14089732f28a121ef1f03fd4d595ba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3ac0e2d9f0110dbc66e41ea7db9fb48f14089732f28a121ef1f03fd4d595ba7d->leave($__internal_3ac0e2d9f0110dbc66e41ea7db9fb48f14089732f28a121ef1f03fd4d595ba7d_prof);

        
        $__internal_e0f573da1360eb777c398b9e4db4fdd4618dee87622d737c6e70b80188f5ef5d->leave($__internal_e0f573da1360eb777c398b9e4db4fdd4618dee87622d737c6e70b80188f5ef5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
