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
        $__internal_978d3e890e3d3f11e11ade0bd0d236aaef465b9b0455e417c97f0b3abf372ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978d3e890e3d3f11e11ade0bd0d236aaef465b9b0455e417c97f0b3abf372ef2->enter($__internal_978d3e890e3d3f11e11ade0bd0d236aaef465b9b0455e417c97f0b3abf372ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4ab9df8bab9451cbf469b55b51495589b9aec297cdf58e8aa022599f35f21f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab9df8bab9451cbf469b55b51495589b9aec297cdf58e8aa022599f35f21f64->enter($__internal_4ab9df8bab9451cbf469b55b51495589b9aec297cdf58e8aa022599f35f21f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_978d3e890e3d3f11e11ade0bd0d236aaef465b9b0455e417c97f0b3abf372ef2->leave($__internal_978d3e890e3d3f11e11ade0bd0d236aaef465b9b0455e417c97f0b3abf372ef2_prof);

        
        $__internal_4ab9df8bab9451cbf469b55b51495589b9aec297cdf58e8aa022599f35f21f64->leave($__internal_4ab9df8bab9451cbf469b55b51495589b9aec297cdf58e8aa022599f35f21f64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf314070f652219b52b278b4e85c405d312717cace676625081effb1346d9e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf314070f652219b52b278b4e85c405d312717cace676625081effb1346d9e5d->enter($__internal_bf314070f652219b52b278b4e85c405d312717cace676625081effb1346d9e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5122e95bb53310ac67c32184a3dc9c75881a957e0c8f04d7fce3552cf685d34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5122e95bb53310ac67c32184a3dc9c75881a957e0c8f04d7fce3552cf685d34c->enter($__internal_5122e95bb53310ac67c32184a3dc9c75881a957e0c8f04d7fce3552cf685d34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5122e95bb53310ac67c32184a3dc9c75881a957e0c8f04d7fce3552cf685d34c->leave($__internal_5122e95bb53310ac67c32184a3dc9c75881a957e0c8f04d7fce3552cf685d34c_prof);

        
        $__internal_bf314070f652219b52b278b4e85c405d312717cace676625081effb1346d9e5d->leave($__internal_bf314070f652219b52b278b4e85c405d312717cace676625081effb1346d9e5d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_245afb6ecbfa4ccdae056970e18b9c42a182e21e6862e908bb541981d76aa7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245afb6ecbfa4ccdae056970e18b9c42a182e21e6862e908bb541981d76aa7c2->enter($__internal_245afb6ecbfa4ccdae056970e18b9c42a182e21e6862e908bb541981d76aa7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f43ffd584b4c6dd36b5e8373f98b639b1bdfa9429adfbf235fddb2ad95350ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f43ffd584b4c6dd36b5e8373f98b639b1bdfa9429adfbf235fddb2ad95350ba->enter($__internal_4f43ffd584b4c6dd36b5e8373f98b639b1bdfa9429adfbf235fddb2ad95350ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4f43ffd584b4c6dd36b5e8373f98b639b1bdfa9429adfbf235fddb2ad95350ba->leave($__internal_4f43ffd584b4c6dd36b5e8373f98b639b1bdfa9429adfbf235fddb2ad95350ba_prof);

        
        $__internal_245afb6ecbfa4ccdae056970e18b9c42a182e21e6862e908bb541981d76aa7c2->leave($__internal_245afb6ecbfa4ccdae056970e18b9c42a182e21e6862e908bb541981d76aa7c2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5ea328504cf0c10c52a822fb2616d8053e9c76060a5ea2c4584afb13e9b8b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ea328504cf0c10c52a822fb2616d8053e9c76060a5ea2c4584afb13e9b8b42->enter($__internal_c5ea328504cf0c10c52a822fb2616d8053e9c76060a5ea2c4584afb13e9b8b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13cc112439c5c4fc5714fcbff4a3decf058a35d0b11c54f8287fa46ff6fe67ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cc112439c5c4fc5714fcbff4a3decf058a35d0b11c54f8287fa46ff6fe67ad->enter($__internal_13cc112439c5c4fc5714fcbff4a3decf058a35d0b11c54f8287fa46ff6fe67ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13cc112439c5c4fc5714fcbff4a3decf058a35d0b11c54f8287fa46ff6fe67ad->leave($__internal_13cc112439c5c4fc5714fcbff4a3decf058a35d0b11c54f8287fa46ff6fe67ad_prof);

        
        $__internal_c5ea328504cf0c10c52a822fb2616d8053e9c76060a5ea2c4584afb13e9b8b42->leave($__internal_c5ea328504cf0c10c52a822fb2616d8053e9c76060a5ea2c4584afb13e9b8b42_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
