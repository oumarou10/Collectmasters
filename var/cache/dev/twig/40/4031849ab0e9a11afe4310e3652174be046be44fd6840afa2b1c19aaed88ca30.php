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
        $__internal_f5df46e98a872438e93d03f60278df7598447b263b1206665eea13161cf2ac02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5df46e98a872438e93d03f60278df7598447b263b1206665eea13161cf2ac02->enter($__internal_f5df46e98a872438e93d03f60278df7598447b263b1206665eea13161cf2ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $__internal_8e542c4b757420047c8ba751765b7b7f3c3022544f73e9aade815015b3359622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e542c4b757420047c8ba751765b7b7f3c3022544f73e9aade815015b3359622->enter($__internal_8e542c4b757420047c8ba751765b7b7f3c3022544f73e9aade815015b3359622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5df46e98a872438e93d03f60278df7598447b263b1206665eea13161cf2ac02->leave($__internal_f5df46e98a872438e93d03f60278df7598447b263b1206665eea13161cf2ac02_prof);

        
        $__internal_8e542c4b757420047c8ba751765b7b7f3c3022544f73e9aade815015b3359622->leave($__internal_8e542c4b757420047c8ba751765b7b7f3c3022544f73e9aade815015b3359622_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_354b0884fc0bacce32692808c5b4b2badb0e914074f0614a4ee663b2ce8a2e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354b0884fc0bacce32692808c5b4b2badb0e914074f0614a4ee663b2ce8a2e8a->enter($__internal_354b0884fc0bacce32692808c5b4b2badb0e914074f0614a4ee663b2ce8a2e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_aa6278b0c57044b3c8cca759f0ee6c99556d04d20cca8c234a318860d218a797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6278b0c57044b3c8cca759f0ee6c99556d04d20cca8c234a318860d218a797->enter($__internal_aa6278b0c57044b3c8cca759f0ee6c99556d04d20cca8c234a318860d218a797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"container\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info_remove"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 8
            echo "
                    <div class=\"alert alert-success\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "

                    </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneItem", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">View</a>
            ";
            // line 18
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 19
                echo "              |  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeItem", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">Remove</a>
            ";
            }
            // line 20
            echo " </br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

";
        
        $__internal_aa6278b0c57044b3c8cca759f0ee6c99556d04d20cca8c234a318860d218a797->leave($__internal_aa6278b0c57044b3c8cca759f0ee6c99556d04d20cca8c234a318860d218a797_prof);

        
        $__internal_354b0884fc0bacce32692808c5b4b2badb0e914074f0614a4ee663b2ce8a2e8a->leave($__internal_354b0884fc0bacce32692808c5b4b2badb0e914074f0614a4ee663b2ce8a2e8a_prof);

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
        return array (  102 => 22,  95 => 20,  89 => 19,  87 => 18,  80 => 17,  76 => 16,  73 => 15,  62 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

        {% for flash in app.session.flashbag.get('info_remove') %}

                    <div class=\"alert alert-success\">
                        {{ flash }}

                    </div>

        {% endfor %}

        {% for item in items %}
            {{ item.title }} | <a href=\"{{ path('oneItem', {id: item.id}) }}\">View</a>
            {% if app.user %}
              |  <a href=\"{{ path('removeItem', {id: item.id}) }}\">Remove</a>
            {% endif %} </br>
        {% endfor %}
    </div>

{% endblock %}", "item/list.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/item/list.html.twig");
    }
}
