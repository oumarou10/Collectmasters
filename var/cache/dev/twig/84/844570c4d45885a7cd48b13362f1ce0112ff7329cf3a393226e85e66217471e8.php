<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29bd614129da73f24e37dfad0c3935d838b2edeecc0b9fd2c060481fdd48d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29bd614129da73f24e37dfad0c3935d838b2edeecc0b9fd2c060481fdd48d26->enter($__internal_a29bd614129da73f24e37dfad0c3935d838b2edeecc0b9fd2c060481fdd48d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_6e9597508226ba6cd814be168781ef6c9d6eddb53f107e82da1f664a22c2c886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9597508226ba6cd814be168781ef6c9d6eddb53f107e82da1f664a22c2c886->enter($__internal_6e9597508226ba6cd814be168781ef6c9d6eddb53f107e82da1f664a22c2c886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a29bd614129da73f24e37dfad0c3935d838b2edeecc0b9fd2c060481fdd48d26->leave($__internal_a29bd614129da73f24e37dfad0c3935d838b2edeecc0b9fd2c060481fdd48d26_prof);

        
        $__internal_6e9597508226ba6cd814be168781ef6c9d6eddb53f107e82da1f664a22c2c886->leave($__internal_6e9597508226ba6cd814be168781ef6c9d6eddb53f107e82da1f664a22c2c886_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20ae860ff131af54b13ea5ec48a5c5749411a6c6b95dbb14efcda71c5de05db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ae860ff131af54b13ea5ec48a5c5749411a6c6b95dbb14efcda71c5de05db1->enter($__internal_20ae860ff131af54b13ea5ec48a5c5749411a6c6b95dbb14efcda71c5de05db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36ba7d0ab160e6f81ce6bdfaaec76f0aef409ce5820c028cbaba927dbe1983d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ba7d0ab160e6f81ce6bdfaaec76f0aef409ce5820c028cbaba927dbe1983d1->enter($__internal_36ba7d0ab160e6f81ce6bdfaaec76f0aef409ce5820c028cbaba927dbe1983d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36ba7d0ab160e6f81ce6bdfaaec76f0aef409ce5820c028cbaba927dbe1983d1->leave($__internal_36ba7d0ab160e6f81ce6bdfaaec76f0aef409ce5820c028cbaba927dbe1983d1_prof);

        
        $__internal_20ae860ff131af54b13ea5ec48a5c5749411a6c6b95dbb14efcda71c5de05db1->leave($__internal_20ae860ff131af54b13ea5ec48a5c5749411a6c6b95dbb14efcda71c5de05db1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
