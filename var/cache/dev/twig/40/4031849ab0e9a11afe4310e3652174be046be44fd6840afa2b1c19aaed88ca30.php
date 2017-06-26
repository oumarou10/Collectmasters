<?php

/* item/list.html.twig */
class __TwigTemplate_c74f3265e6270b2e70c1a6122b2d11d213ded7aa369d701b07b5eccd000e57f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/list.html.twig", 1);
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
        $__internal_7f32c632696a75a573789bcda7910301fd3f7cdcff171884e537c9ca0bf31f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f32c632696a75a573789bcda7910301fd3f7cdcff171884e537c9ca0bf31f4e->enter($__internal_7f32c632696a75a573789bcda7910301fd3f7cdcff171884e537c9ca0bf31f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $__internal_3f9766c9153f5eed172167e5dba2e2cfde203bc1554a5d06b2b8e3b830a3df06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9766c9153f5eed172167e5dba2e2cfde203bc1554a5d06b2b8e3b830a3df06->enter($__internal_3f9766c9153f5eed172167e5dba2e2cfde203bc1554a5d06b2b8e3b830a3df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f32c632696a75a573789bcda7910301fd3f7cdcff171884e537c9ca0bf31f4e->leave($__internal_7f32c632696a75a573789bcda7910301fd3f7cdcff171884e537c9ca0bf31f4e_prof);

        
        $__internal_3f9766c9153f5eed172167e5dba2e2cfde203bc1554a5d06b2b8e3b830a3df06->leave($__internal_3f9766c9153f5eed172167e5dba2e2cfde203bc1554a5d06b2b8e3b830a3df06_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_096a286b7e69bc62a5ab204b17ad17859c76e7917b9a242eda1ddbf7847f5d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096a286b7e69bc62a5ab204b17ad17859c76e7917b9a242eda1ddbf7847f5d6f->enter($__internal_096a286b7e69bc62a5ab204b17ad17859c76e7917b9a242eda1ddbf7847f5d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_655f882e3dd99186f8c73b957f5612ebfa0f7bfffba8ee284cd726b3d1ce461d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655f882e3dd99186f8c73b957f5612ebfa0f7bfffba8ee284cd726b3d1ce461d->enter($__internal_655f882e3dd99186f8c73b957f5612ebfa0f7bfffba8ee284cd726b3d1ce461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneItem", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">View</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeItem", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Remove</a><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
        
        $__internal_655f882e3dd99186f8c73b957f5612ebfa0f7bfffba8ee284cd726b3d1ce461d->leave($__internal_655f882e3dd99186f8c73b957f5612ebfa0f7bfffba8ee284cd726b3d1ce461d_prof);

        
        $__internal_096a286b7e69bc62a5ab204b17ad17859c76e7917b9a242eda1ddbf7847f5d6f->leave($__internal_096a286b7e69bc62a5ab204b17ad17859c76e7917b9a242eda1ddbf7847f5d6f_prof);

    }

    public function getTemplateName()
    {
        return "item/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {% for item in items %}
            {{ item.title }} | <a href=\"{{ path('oneItem', {id: item.id}) }}\">View</a> | <a href=\"{{ path('removeItem', {id: item.id}) }}\">Remove</a><br />
        {% endfor %}
    </div>
{% endblock %}", "item/list.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/app/Resources/views/item/list.html.twig");
    }
}
