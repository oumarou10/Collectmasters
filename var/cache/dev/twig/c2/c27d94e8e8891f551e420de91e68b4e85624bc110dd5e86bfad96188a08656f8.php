<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_446a4a94bf70a769a8e8991f604e0222b179f9702a2fcdc5a14c939c6f9d8c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446a4a94bf70a769a8e8991f604e0222b179f9702a2fcdc5a14c939c6f9d8c6c->enter($__internal_446a4a94bf70a769a8e8991f604e0222b179f9702a2fcdc5a14c939c6f9d8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dc056a65959814b2c9009a71cef274235088fa3e89f1fe225aa0f7793f3ab8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc056a65959814b2c9009a71cef274235088fa3e89f1fe225aa0f7793f3ab8a6->enter($__internal_dc056a65959814b2c9009a71cef274235088fa3e89f1fe225aa0f7793f3ab8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_446a4a94bf70a769a8e8991f604e0222b179f9702a2fcdc5a14c939c6f9d8c6c->leave($__internal_446a4a94bf70a769a8e8991f604e0222b179f9702a2fcdc5a14c939c6f9d8c6c_prof);

        
        $__internal_dc056a65959814b2c9009a71cef274235088fa3e89f1fe225aa0f7793f3ab8a6->leave($__internal_dc056a65959814b2c9009a71cef274235088fa3e89f1fe225aa0f7793f3ab8a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc619ccc24dcbbd68545eb0a6dea9415acfb3b7f2d8ab18fdaacf4d8e30cf66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc619ccc24dcbbd68545eb0a6dea9415acfb3b7f2d8ab18fdaacf4d8e30cf66a->enter($__internal_cc619ccc24dcbbd68545eb0a6dea9415acfb3b7f2d8ab18fdaacf4d8e30cf66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_683975b024e4654742803cc7ad611b40da61ac29c6d346a6c6ca40c886a06b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683975b024e4654742803cc7ad611b40da61ac29c6d346a6c6ca40c886a06b35->enter($__internal_683975b024e4654742803cc7ad611b40da61ac29c6d346a6c6ca40c886a06b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_683975b024e4654742803cc7ad611b40da61ac29c6d346a6c6ca40c886a06b35->leave($__internal_683975b024e4654742803cc7ad611b40da61ac29c6d346a6c6ca40c886a06b35_prof);

        
        $__internal_cc619ccc24dcbbd68545eb0a6dea9415acfb3b7f2d8ab18fdaacf4d8e30cf66a->leave($__internal_cc619ccc24dcbbd68545eb0a6dea9415acfb3b7f2d8ab18fdaacf4d8e30cf66a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3535ba35da098b39a14cee258018103a8dda37a2e6517abc1138352ea883551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3535ba35da098b39a14cee258018103a8dda37a2e6517abc1138352ea883551->enter($__internal_a3535ba35da098b39a14cee258018103a8dda37a2e6517abc1138352ea883551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4083785ecdfb37b7d254de3faf5511ddc73c29191bef2840ed96df5e5eb861e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4083785ecdfb37b7d254de3faf5511ddc73c29191bef2840ed96df5e5eb861e->enter($__internal_f4083785ecdfb37b7d254de3faf5511ddc73c29191bef2840ed96df5e5eb861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4083785ecdfb37b7d254de3faf5511ddc73c29191bef2840ed96df5e5eb861e->leave($__internal_f4083785ecdfb37b7d254de3faf5511ddc73c29191bef2840ed96df5e5eb861e_prof);

        
        $__internal_a3535ba35da098b39a14cee258018103a8dda37a2e6517abc1138352ea883551->leave($__internal_a3535ba35da098b39a14cee258018103a8dda37a2e6517abc1138352ea883551_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1100dc098891d0ad51561c5b89420c28e3b1c92ebd413f94bdab5a49ed829d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1100dc098891d0ad51561c5b89420c28e3b1c92ebd413f94bdab5a49ed829d2->enter($__internal_c1100dc098891d0ad51561c5b89420c28e3b1c92ebd413f94bdab5a49ed829d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c855227eebaec28d0bb9f890a4e129ce325f2ec9a48b06fd428f998df82ded18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c855227eebaec28d0bb9f890a4e129ce325f2ec9a48b06fd428f998df82ded18->enter($__internal_c855227eebaec28d0bb9f890a4e129ce325f2ec9a48b06fd428f998df82ded18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c855227eebaec28d0bb9f890a4e129ce325f2ec9a48b06fd428f998df82ded18->leave($__internal_c855227eebaec28d0bb9f890a4e129ce325f2ec9a48b06fd428f998df82ded18_prof);

        
        $__internal_c1100dc098891d0ad51561c5b89420c28e3b1c92ebd413f94bdab5a49ed829d2->leave($__internal_c1100dc098891d0ad51561c5b89420c28e3b1c92ebd413f94bdab5a49ed829d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
