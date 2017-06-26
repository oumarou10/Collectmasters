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
        $__internal_3c9d0fdda41be6eb6520b13257e01250525b950791a1216b9ce3607cfe2f42b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9d0fdda41be6eb6520b13257e01250525b950791a1216b9ce3607cfe2f42b4->enter($__internal_3c9d0fdda41be6eb6520b13257e01250525b950791a1216b9ce3607cfe2f42b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $__internal_493e90cab431dfb1b99758f94373a9b04f9fb31f5c4ec9d5549e4c362ef6df94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493e90cab431dfb1b99758f94373a9b04f9fb31f5c4ec9d5549e4c362ef6df94->enter($__internal_493e90cab431dfb1b99758f94373a9b04f9fb31f5c4ec9d5549e4c362ef6df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9d0fdda41be6eb6520b13257e01250525b950791a1216b9ce3607cfe2f42b4->leave($__internal_3c9d0fdda41be6eb6520b13257e01250525b950791a1216b9ce3607cfe2f42b4_prof);

        
        $__internal_493e90cab431dfb1b99758f94373a9b04f9fb31f5c4ec9d5549e4c362ef6df94->leave($__internal_493e90cab431dfb1b99758f94373a9b04f9fb31f5c4ec9d5549e4c362ef6df94_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_dcd9fb2f336450e5e2ed869a7614912532d13fa4ee8fc73b629d59fd7e4ac574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd9fb2f336450e5e2ed869a7614912532d13fa4ee8fc73b629d59fd7e4ac574->enter($__internal_dcd9fb2f336450e5e2ed869a7614912532d13fa4ee8fc73b629d59fd7e4ac574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f1066b2d724177042697b3604731d07c86f7cd49ea918847202aab06f0c528b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1066b2d724177042697b3604731d07c86f7cd49ea918847202aab06f0c528b4->enter($__internal_f1066b2d724177042697b3604731d07c86f7cd49ea918847202aab06f0c528b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_f1066b2d724177042697b3604731d07c86f7cd49ea918847202aab06f0c528b4->leave($__internal_f1066b2d724177042697b3604731d07c86f7cd49ea918847202aab06f0c528b4_prof);

        
        $__internal_dcd9fb2f336450e5e2ed869a7614912532d13fa4ee8fc73b629d59fd7e4ac574->leave($__internal_dcd9fb2f336450e5e2ed869a7614912532d13fa4ee8fc73b629d59fd7e4ac574_prof);

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
