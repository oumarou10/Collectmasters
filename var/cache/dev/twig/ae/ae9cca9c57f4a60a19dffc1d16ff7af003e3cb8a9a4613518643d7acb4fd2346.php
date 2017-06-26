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
        $__internal_0226ec7064a2607ca7be7ab0a70b27a0aef9118aabb088eac03508e6c846c1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0226ec7064a2607ca7be7ab0a70b27a0aef9118aabb088eac03508e6c846c1c5->enter($__internal_0226ec7064a2607ca7be7ab0a70b27a0aef9118aabb088eac03508e6c846c1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f05cda1fcb18ae56457c341757f9be6eb53cc0bd164eb2a026edcc4e0efe29d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05cda1fcb18ae56457c341757f9be6eb53cc0bd164eb2a026edcc4e0efe29d9->enter($__internal_f05cda1fcb18ae56457c341757f9be6eb53cc0bd164eb2a026edcc4e0efe29d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0226ec7064a2607ca7be7ab0a70b27a0aef9118aabb088eac03508e6c846c1c5->leave($__internal_0226ec7064a2607ca7be7ab0a70b27a0aef9118aabb088eac03508e6c846c1c5_prof);

        
        $__internal_f05cda1fcb18ae56457c341757f9be6eb53cc0bd164eb2a026edcc4e0efe29d9->leave($__internal_f05cda1fcb18ae56457c341757f9be6eb53cc0bd164eb2a026edcc4e0efe29d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4534eb042d6f5433e48dc7c25be87188d9a5872f988601bf835c0a5622db319f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4534eb042d6f5433e48dc7c25be87188d9a5872f988601bf835c0a5622db319f->enter($__internal_4534eb042d6f5433e48dc7c25be87188d9a5872f988601bf835c0a5622db319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4314101cc224b2e92ccae33839a4de62660743edd2627388722558a47aa79de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4314101cc224b2e92ccae33839a4de62660743edd2627388722558a47aa79de7->enter($__internal_4314101cc224b2e92ccae33839a4de62660743edd2627388722558a47aa79de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4314101cc224b2e92ccae33839a4de62660743edd2627388722558a47aa79de7->leave($__internal_4314101cc224b2e92ccae33839a4de62660743edd2627388722558a47aa79de7_prof);

        
        $__internal_4534eb042d6f5433e48dc7c25be87188d9a5872f988601bf835c0a5622db319f->leave($__internal_4534eb042d6f5433e48dc7c25be87188d9a5872f988601bf835c0a5622db319f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbcf63d3b172416236ab796bb9e0c064ca08148a2641cf56294e1a365fa8dadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcf63d3b172416236ab796bb9e0c064ca08148a2641cf56294e1a365fa8dadb->enter($__internal_cbcf63d3b172416236ab796bb9e0c064ca08148a2641cf56294e1a365fa8dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3902c0e7d03d4bb032a760bdbe4ac0afe27fd2e569bbf21e6364e1892e90cec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3902c0e7d03d4bb032a760bdbe4ac0afe27fd2e569bbf21e6364e1892e90cec2->enter($__internal_3902c0e7d03d4bb032a760bdbe4ac0afe27fd2e569bbf21e6364e1892e90cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3902c0e7d03d4bb032a760bdbe4ac0afe27fd2e569bbf21e6364e1892e90cec2->leave($__internal_3902c0e7d03d4bb032a760bdbe4ac0afe27fd2e569bbf21e6364e1892e90cec2_prof);

        
        $__internal_cbcf63d3b172416236ab796bb9e0c064ca08148a2641cf56294e1a365fa8dadb->leave($__internal_cbcf63d3b172416236ab796bb9e0c064ca08148a2641cf56294e1a365fa8dadb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da360148f419c2001035c349863dd03608c3d2f7bd095000f525f60bf4b03de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da360148f419c2001035c349863dd03608c3d2f7bd095000f525f60bf4b03de->enter($__internal_8da360148f419c2001035c349863dd03608c3d2f7bd095000f525f60bf4b03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7ac7638812e8880fc3cc583b8e714609bfe981a08abba8d5bd81ec563d29b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ac7638812e8880fc3cc583b8e714609bfe981a08abba8d5bd81ec563d29b47->enter($__internal_e7ac7638812e8880fc3cc583b8e714609bfe981a08abba8d5bd81ec563d29b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e7ac7638812e8880fc3cc583b8e714609bfe981a08abba8d5bd81ec563d29b47->leave($__internal_e7ac7638812e8880fc3cc583b8e714609bfe981a08abba8d5bd81ec563d29b47_prof);

        
        $__internal_8da360148f419c2001035c349863dd03608c3d2f7bd095000f525f60bf4b03de->leave($__internal_8da360148f419c2001035c349863dd03608c3d2f7bd095000f525f60bf4b03de_prof);

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
