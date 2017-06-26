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
        $__internal_ada2feaebb0e55b1f5c37b84fa2ce8b90322eb249abdb15cc1cf49c4f779020b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada2feaebb0e55b1f5c37b84fa2ce8b90322eb249abdb15cc1cf49c4f779020b->enter($__internal_ada2feaebb0e55b1f5c37b84fa2ce8b90322eb249abdb15cc1cf49c4f779020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b26cf43cc2e83273d4526d45702f6a58d9c33102c73595ca1d9838c2aef98d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26cf43cc2e83273d4526d45702f6a58d9c33102c73595ca1d9838c2aef98d3c->enter($__internal_b26cf43cc2e83273d4526d45702f6a58d9c33102c73595ca1d9838c2aef98d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ada2feaebb0e55b1f5c37b84fa2ce8b90322eb249abdb15cc1cf49c4f779020b->leave($__internal_ada2feaebb0e55b1f5c37b84fa2ce8b90322eb249abdb15cc1cf49c4f779020b_prof);

        
        $__internal_b26cf43cc2e83273d4526d45702f6a58d9c33102c73595ca1d9838c2aef98d3c->leave($__internal_b26cf43cc2e83273d4526d45702f6a58d9c33102c73595ca1d9838c2aef98d3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9586eb755db51bf44060eb9d6c66aea8f53e2a82f5b3eb2c780527adccc702d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9586eb755db51bf44060eb9d6c66aea8f53e2a82f5b3eb2c780527adccc702d6->enter($__internal_9586eb755db51bf44060eb9d6c66aea8f53e2a82f5b3eb2c780527adccc702d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4fc84e5258e1d0cd52df37f8eff04e1d6196a385d95be87a16ae099988c5217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fc84e5258e1d0cd52df37f8eff04e1d6196a385d95be87a16ae099988c5217->enter($__internal_f4fc84e5258e1d0cd52df37f8eff04e1d6196a385d95be87a16ae099988c5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f4fc84e5258e1d0cd52df37f8eff04e1d6196a385d95be87a16ae099988c5217->leave($__internal_f4fc84e5258e1d0cd52df37f8eff04e1d6196a385d95be87a16ae099988c5217_prof);

        
        $__internal_9586eb755db51bf44060eb9d6c66aea8f53e2a82f5b3eb2c780527adccc702d6->leave($__internal_9586eb755db51bf44060eb9d6c66aea8f53e2a82f5b3eb2c780527adccc702d6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_074b63f16fdf932d53939ecf8a9c76b2aa51d38db40b566f3f71bfbd3f3bc0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074b63f16fdf932d53939ecf8a9c76b2aa51d38db40b566f3f71bfbd3f3bc0d6->enter($__internal_074b63f16fdf932d53939ecf8a9c76b2aa51d38db40b566f3f71bfbd3f3bc0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9a38bbe8b16fbc54afacefb7ace14f45ce5bbb9cb650d6cdd261f2b16000ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a38bbe8b16fbc54afacefb7ace14f45ce5bbb9cb650d6cdd261f2b16000ff3->enter($__internal_e9a38bbe8b16fbc54afacefb7ace14f45ce5bbb9cb650d6cdd261f2b16000ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e9a38bbe8b16fbc54afacefb7ace14f45ce5bbb9cb650d6cdd261f2b16000ff3->leave($__internal_e9a38bbe8b16fbc54afacefb7ace14f45ce5bbb9cb650d6cdd261f2b16000ff3_prof);

        
        $__internal_074b63f16fdf932d53939ecf8a9c76b2aa51d38db40b566f3f71bfbd3f3bc0d6->leave($__internal_074b63f16fdf932d53939ecf8a9c76b2aa51d38db40b566f3f71bfbd3f3bc0d6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e6d05161435e72828bb68d3bd80dc204003df46e40194c14d4f1592f851981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e6d05161435e72828bb68d3bd80dc204003df46e40194c14d4f1592f851981->enter($__internal_67e6d05161435e72828bb68d3bd80dc204003df46e40194c14d4f1592f851981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_093492c45de57eb1fe21825b14c93795a627e93e6d89445385f4567068e73303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093492c45de57eb1fe21825b14c93795a627e93e6d89445385f4567068e73303->enter($__internal_093492c45de57eb1fe21825b14c93795a627e93e6d89445385f4567068e73303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_093492c45de57eb1fe21825b14c93795a627e93e6d89445385f4567068e73303->leave($__internal_093492c45de57eb1fe21825b14c93795a627e93e6d89445385f4567068e73303_prof);

        
        $__internal_67e6d05161435e72828bb68d3bd80dc204003df46e40194c14d4f1592f851981->leave($__internal_67e6d05161435e72828bb68d3bd80dc204003df46e40194c14d4f1592f851981_prof);

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
