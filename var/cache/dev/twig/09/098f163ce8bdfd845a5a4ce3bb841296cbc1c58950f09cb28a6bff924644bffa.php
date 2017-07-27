<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2f348a818d194e0adcc9fd1e1824921338c52b3f7439f0614c4ea34ba75ec8db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d16d8130eededceb3dd9acbaf6bd6c1aafce8c0174827befa6d7181b957f709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d16d8130eededceb3dd9acbaf6bd6c1aafce8c0174827befa6d7181b957f709->enter($__internal_5d16d8130eededceb3dd9acbaf6bd6c1aafce8c0174827befa6d7181b957f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_90c594f531e67a18b4dc7a555e5b39595fd95536d7cff60dbd0c62704a2cd7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c594f531e67a18b4dc7a555e5b39595fd95536d7cff60dbd0c62704a2cd7fb->enter($__internal_90c594f531e67a18b4dc7a555e5b39595fd95536d7cff60dbd0c62704a2cd7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d16d8130eededceb3dd9acbaf6bd6c1aafce8c0174827befa6d7181b957f709->leave($__internal_5d16d8130eededceb3dd9acbaf6bd6c1aafce8c0174827befa6d7181b957f709_prof);

        
        $__internal_90c594f531e67a18b4dc7a555e5b39595fd95536d7cff60dbd0c62704a2cd7fb->leave($__internal_90c594f531e67a18b4dc7a555e5b39595fd95536d7cff60dbd0c62704a2cd7fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9bcd395814b348a1b6522fba499d09ce064e80cfe0822bcfff48e12f45ac739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bcd395814b348a1b6522fba499d09ce064e80cfe0822bcfff48e12f45ac739->enter($__internal_c9bcd395814b348a1b6522fba499d09ce064e80cfe0822bcfff48e12f45ac739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a10a04253a5341d8fb657cab3a1985c0bdebbb5a2a022961c92a8114477891dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10a04253a5341d8fb657cab3a1985c0bdebbb5a2a022961c92a8114477891dc->enter($__internal_a10a04253a5341d8fb657cab3a1985c0bdebbb5a2a022961c92a8114477891dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a10a04253a5341d8fb657cab3a1985c0bdebbb5a2a022961c92a8114477891dc->leave($__internal_a10a04253a5341d8fb657cab3a1985c0bdebbb5a2a022961c92a8114477891dc_prof);

        
        $__internal_c9bcd395814b348a1b6522fba499d09ce064e80cfe0822bcfff48e12f45ac739->leave($__internal_c9bcd395814b348a1b6522fba499d09ce064e80cfe0822bcfff48e12f45ac739_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
