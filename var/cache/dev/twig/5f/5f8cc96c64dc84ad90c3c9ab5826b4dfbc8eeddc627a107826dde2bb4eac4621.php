<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f5e33c9d8b58051abf609f4ae99e8d91c7760e1e5fbfddf4f825f716f10a9e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ceb340baf4e9897158aa6f57afc41a1d549dfb9450abc3e70730f785fc934fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb340baf4e9897158aa6f57afc41a1d549dfb9450abc3e70730f785fc934fe1->enter($__internal_ceb340baf4e9897158aa6f57afc41a1d549dfb9450abc3e70730f785fc934fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d166bfebb187b8911ac1f1dec0795ae985f8ef5a725ff677e5eb4b6a243399c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166bfebb187b8911ac1f1dec0795ae985f8ef5a725ff677e5eb4b6a243399c6->enter($__internal_d166bfebb187b8911ac1f1dec0795ae985f8ef5a725ff677e5eb4b6a243399c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb340baf4e9897158aa6f57afc41a1d549dfb9450abc3e70730f785fc934fe1->leave($__internal_ceb340baf4e9897158aa6f57afc41a1d549dfb9450abc3e70730f785fc934fe1_prof);

        
        $__internal_d166bfebb187b8911ac1f1dec0795ae985f8ef5a725ff677e5eb4b6a243399c6->leave($__internal_d166bfebb187b8911ac1f1dec0795ae985f8ef5a725ff677e5eb4b6a243399c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6deb459bf4cd7c1928f0e06ded679eb804077cc1dbf03bb960b4733deb449d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6deb459bf4cd7c1928f0e06ded679eb804077cc1dbf03bb960b4733deb449d8f->enter($__internal_6deb459bf4cd7c1928f0e06ded679eb804077cc1dbf03bb960b4733deb449d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fbaf693f9e112e4cde1bde7a5dfd4c3026b5b30b6491985a15f8ea35ae1ffb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbaf693f9e112e4cde1bde7a5dfd4c3026b5b30b6491985a15f8ea35ae1ffb1->enter($__internal_8fbaf693f9e112e4cde1bde7a5dfd4c3026b5b30b6491985a15f8ea35ae1ffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8fbaf693f9e112e4cde1bde7a5dfd4c3026b5b30b6491985a15f8ea35ae1ffb1->leave($__internal_8fbaf693f9e112e4cde1bde7a5dfd4c3026b5b30b6491985a15f8ea35ae1ffb1_prof);

        
        $__internal_6deb459bf4cd7c1928f0e06ded679eb804077cc1dbf03bb960b4733deb449d8f->leave($__internal_6deb459bf4cd7c1928f0e06ded679eb804077cc1dbf03bb960b4733deb449d8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
