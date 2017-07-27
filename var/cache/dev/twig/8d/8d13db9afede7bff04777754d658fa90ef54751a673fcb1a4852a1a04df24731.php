<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4a3e394b110a22f3ed3504c792840f183d7eb413178ee0569e2c0c304c60e964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_31a1422c0d4537462a40f620c16c1ebfd1e701936513c13dae0930cf16f08314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a1422c0d4537462a40f620c16c1ebfd1e701936513c13dae0930cf16f08314->enter($__internal_31a1422c0d4537462a40f620c16c1ebfd1e701936513c13dae0930cf16f08314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f8fa301b948f4b9b5bdb8dbc47595d192a80f6d8878c25d5918f75389f1d8fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fa301b948f4b9b5bdb8dbc47595d192a80f6d8878c25d5918f75389f1d8fed->enter($__internal_f8fa301b948f4b9b5bdb8dbc47595d192a80f6d8878c25d5918f75389f1d8fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a1422c0d4537462a40f620c16c1ebfd1e701936513c13dae0930cf16f08314->leave($__internal_31a1422c0d4537462a40f620c16c1ebfd1e701936513c13dae0930cf16f08314_prof);

        
        $__internal_f8fa301b948f4b9b5bdb8dbc47595d192a80f6d8878c25d5918f75389f1d8fed->leave($__internal_f8fa301b948f4b9b5bdb8dbc47595d192a80f6d8878c25d5918f75389f1d8fed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bbf49daaa7c004cec1687a460201d8e6769cb34f5b4764eabe6ae0d80893ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbf49daaa7c004cec1687a460201d8e6769cb34f5b4764eabe6ae0d80893ff7->enter($__internal_8bbf49daaa7c004cec1687a460201d8e6769cb34f5b4764eabe6ae0d80893ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad5a8f50fac5fbb97f3c432353b3372726abf14bc66d9f3ea9fae2e7caac624b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5a8f50fac5fbb97f3c432353b3372726abf14bc66d9f3ea9fae2e7caac624b->enter($__internal_ad5a8f50fac5fbb97f3c432353b3372726abf14bc66d9f3ea9fae2e7caac624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ad5a8f50fac5fbb97f3c432353b3372726abf14bc66d9f3ea9fae2e7caac624b->leave($__internal_ad5a8f50fac5fbb97f3c432353b3372726abf14bc66d9f3ea9fae2e7caac624b_prof);

        
        $__internal_8bbf49daaa7c004cec1687a460201d8e6769cb34f5b4764eabe6ae0d80893ff7->leave($__internal_8bbf49daaa7c004cec1687a460201d8e6769cb34f5b4764eabe6ae0d80893ff7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
