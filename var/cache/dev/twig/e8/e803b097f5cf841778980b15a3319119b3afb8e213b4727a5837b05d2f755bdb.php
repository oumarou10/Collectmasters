<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_516e269c86ccf40cbe577d545e1c637ea0a44deb19c6abcabb7b750b11e3d9f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86daca730e48816ad590c54ba2101673693af7aded0e728779d53b01a709d4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86daca730e48816ad590c54ba2101673693af7aded0e728779d53b01a709d4b7->enter($__internal_86daca730e48816ad590c54ba2101673693af7aded0e728779d53b01a709d4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e44516018b797f60935a1a49d4aa06c1be0de7ae7532656dd2e227ccb45ae276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44516018b797f60935a1a49d4aa06c1be0de7ae7532656dd2e227ccb45ae276->enter($__internal_e44516018b797f60935a1a49d4aa06c1be0de7ae7532656dd2e227ccb45ae276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_86daca730e48816ad590c54ba2101673693af7aded0e728779d53b01a709d4b7->leave($__internal_86daca730e48816ad590c54ba2101673693af7aded0e728779d53b01a709d4b7_prof);

        
        $__internal_e44516018b797f60935a1a49d4aa06c1be0de7ae7532656dd2e227ccb45ae276->leave($__internal_e44516018b797f60935a1a49d4aa06c1be0de7ae7532656dd2e227ccb45ae276_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
