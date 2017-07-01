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
        $__internal_d6ed34b36f22a561a63a72099f7e93ef10efd7feeb22ba88ff86e31d5569f1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ed34b36f22a561a63a72099f7e93ef10efd7feeb22ba88ff86e31d5569f1a1->enter($__internal_d6ed34b36f22a561a63a72099f7e93ef10efd7feeb22ba88ff86e31d5569f1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $__internal_88113dba9f5964faed26c82e16452bb8db1ed8f286c73d153cf5a160c2be122f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88113dba9f5964faed26c82e16452bb8db1ed8f286c73d153cf5a160c2be122f->enter($__internal_88113dba9f5964faed26c82e16452bb8db1ed8f286c73d153cf5a160c2be122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ed34b36f22a561a63a72099f7e93ef10efd7feeb22ba88ff86e31d5569f1a1->leave($__internal_d6ed34b36f22a561a63a72099f7e93ef10efd7feeb22ba88ff86e31d5569f1a1_prof);

        
        $__internal_88113dba9f5964faed26c82e16452bb8db1ed8f286c73d153cf5a160c2be122f->leave($__internal_88113dba9f5964faed26c82e16452bb8db1ed8f286c73d153cf5a160c2be122f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_28f47127b2d61e63981482869367633642e87c636efe5c4141247356be92143e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f47127b2d61e63981482869367633642e87c636efe5c4141247356be92143e->enter($__internal_28f47127b2d61e63981482869367633642e87c636efe5c4141247356be92143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8addc39118ce5c13ceb8014b4958720cc87a9e9b78ec810b63b11aa17eb5212f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8addc39118ce5c13ceb8014b4958720cc87a9e9b78ec810b63b11aa17eb5212f->enter($__internal_8addc39118ce5c13ceb8014b4958720cc87a9e9b78ec810b63b11aa17eb5212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            echo "\">View</a> ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
                echo "| <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeItem", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">Remove</a><br /> ";
            }
            echo " </br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
        
        $__internal_8addc39118ce5c13ceb8014b4958720cc87a9e9b78ec810b63b11aa17eb5212f->leave($__internal_8addc39118ce5c13ceb8014b4958720cc87a9e9b78ec810b63b11aa17eb5212f_prof);

        
        $__internal_28f47127b2d61e63981482869367633642e87c636efe5c4141247356be92143e->leave($__internal_28f47127b2d61e63981482869367633642e87c636efe5c4141247356be92143e_prof);

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
        return array (  73 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
            {{ item.title }} | <a href=\"{{ path('oneItem', {id: item.id}) }}\">View</a> {% if app.user.hasRole('ROLE_ADMIN') %}| <a href=\"{{ path('removeItem', {id: item.id}) }}\">Remove</a><br /> {% endif %} </br>
        {% endfor %}
    </div>
{% endblock %}", "item/list.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/item/list.html.twig");
    }
}
