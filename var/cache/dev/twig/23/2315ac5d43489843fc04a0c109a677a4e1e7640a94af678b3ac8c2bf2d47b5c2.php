<?php

/* item/one.html.twig */
class __TwigTemplate_6f7bf66e8559599aa2d0984e2bbd9088959f0a73e5953dc5929deb52d0c992a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/one.html.twig", 1);
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
        $__internal_0e21ce4bdbcdc58d962cd5aaa724136a2de666d11683f7f883aa2efcb2641431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e21ce4bdbcdc58d962cd5aaa724136a2de666d11683f7f883aa2efcb2641431->enter($__internal_0e21ce4bdbcdc58d962cd5aaa724136a2de666d11683f7f883aa2efcb2641431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/one.html.twig"));

        $__internal_a40041fa6d791ddf0dc8e8455d497fa226bfe9abbdc7300170ff3ff07d82305b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40041fa6d791ddf0dc8e8455d497fa226bfe9abbdc7300170ff3ff07d82305b->enter($__internal_a40041fa6d791ddf0dc8e8455d497fa226bfe9abbdc7300170ff3ff07d82305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e21ce4bdbcdc58d962cd5aaa724136a2de666d11683f7f883aa2efcb2641431->leave($__internal_0e21ce4bdbcdc58d962cd5aaa724136a2de666d11683f7f883aa2efcb2641431_prof);

        
        $__internal_a40041fa6d791ddf0dc8e8455d497fa226bfe9abbdc7300170ff3ff07d82305b->leave($__internal_a40041fa6d791ddf0dc8e8455d497fa226bfe9abbdc7300170ff3ff07d82305b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_83acbd1f49286bf50947469405c1d1e44295026145ec564e2ea41d0eb05229c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83acbd1f49286bf50947469405c1d1e44295026145ec564e2ea41d0eb05229c3->enter($__internal_83acbd1f49286bf50947469405c1d1e44295026145ec564e2ea41d0eb05229c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3d7c8e61c6e200b922275b72dd03861984e898ddcafd5d2347acac48856e67e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7c8e61c6e200b922275b72dd03861984e898ddcafd5d2347acac48856e67e1->enter($__internal_3d7c8e61c6e200b922275b72dd03861984e898ddcafd5d2347acac48856e67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "title", array()), "html", null, true);
        echo " <br />
    </div>
";
        
        $__internal_3d7c8e61c6e200b922275b72dd03861984e898ddcafd5d2347acac48856e67e1->leave($__internal_3d7c8e61c6e200b922275b72dd03861984e898ddcafd5d2347acac48856e67e1_prof);

        
        $__internal_83acbd1f49286bf50947469405c1d1e44295026145ec564e2ea41d0eb05229c3->leave($__internal_83acbd1f49286bf50947469405c1d1e44295026145ec564e2ea41d0eb05229c3_prof);

    }

    public function getTemplateName()
    {
        return "item/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        {{ item.title }} <br />
    </div>
{% endblock %}", "item/one.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/app/Resources/views/item/one.html.twig");
    }
}
