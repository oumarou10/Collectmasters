<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3506c81a2ebe7d0a39bbc7c81938da523b8914b40181bb3c0b23b48868f64ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3506c81a2ebe7d0a39bbc7c81938da523b8914b40181bb3c0b23b48868f64ca5->enter($__internal_3506c81a2ebe7d0a39bbc7c81938da523b8914b40181bb3c0b23b48868f64ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5bf70c0b70c4344695a443773d83b434cb98ed1737b249ec3289c800d3b955f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf70c0b70c4344695a443773d83b434cb98ed1737b249ec3289c800d3b955f0->enter($__internal_5bf70c0b70c4344695a443773d83b434cb98ed1737b249ec3289c800d3b955f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 30
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "        </div>
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_3506c81a2ebe7d0a39bbc7c81938da523b8914b40181bb3c0b23b48868f64ca5->leave($__internal_3506c81a2ebe7d0a39bbc7c81938da523b8914b40181bb3c0b23b48868f64ca5_prof);

        
        $__internal_5bf70c0b70c4344695a443773d83b434cb98ed1737b249ec3289c800d3b955f0->leave($__internal_5bf70c0b70c4344695a443773d83b434cb98ed1737b249ec3289c800d3b955f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5e5c96ffc168d28f35aa280c23e02ca90f3926d72a0b61114e11308e3996827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e5c96ffc168d28f35aa280c23e02ca90f3926d72a0b61114e11308e3996827->enter($__internal_e5e5c96ffc168d28f35aa280c23e02ca90f3926d72a0b61114e11308e3996827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e6e82d4bf6e2a1a1726d9b5a3a42ecbed8d997f2e7d242fa047a099ed942a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6e82d4bf6e2a1a1726d9b5a3a42ecbed8d997f2e7d242fa047a099ed942a32->enter($__internal_0e6e82d4bf6e2a1a1726d9b5a3a42ecbed8d997f2e7d242fa047a099ed942a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collectmaster!";
        
        $__internal_0e6e82d4bf6e2a1a1726d9b5a3a42ecbed8d997f2e7d242fa047a099ed942a32->leave($__internal_0e6e82d4bf6e2a1a1726d9b5a3a42ecbed8d997f2e7d242fa047a099ed942a32_prof);

        
        $__internal_e5e5c96ffc168d28f35aa280c23e02ca90f3926d72a0b61114e11308e3996827->leave($__internal_e5e5c96ffc168d28f35aa280c23e02ca90f3926d72a0b61114e11308e3996827_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cffac4f15ed98889d30f3a0404f559e47d1e2b40f36851b2e0fdd7463fcd5045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffac4f15ed98889d30f3a0404f559e47d1e2b40f36851b2e0fdd7463fcd5045->enter($__internal_cffac4f15ed98889d30f3a0404f559e47d1e2b40f36851b2e0fdd7463fcd5045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e39f6a2d2f968981ad533d7fdc880dd0bb03184e7856687a3ceb0e94a63d8f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39f6a2d2f968981ad533d7fdc880dd0bb03184e7856687a3ceb0e94a63d8f9d->enter($__internal_e39f6a2d2f968981ad533d7fdc880dd0bb03184e7856687a3ceb0e94a63d8f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/vendors/bootstrap/dist/css/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"/css/collectmaster.css\">
        ";
        
        $__internal_e39f6a2d2f968981ad533d7fdc880dd0bb03184e7856687a3ceb0e94a63d8f9d->leave($__internal_e39f6a2d2f968981ad533d7fdc880dd0bb03184e7856687a3ceb0e94a63d8f9d_prof);

        
        $__internal_cffac4f15ed98889d30f3a0404f559e47d1e2b40f36851b2e0fdd7463fcd5045->leave($__internal_cffac4f15ed98889d30f3a0404f559e47d1e2b40f36851b2e0fdd7463fcd5045_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fe18d3c279da6802a4dd4a0c47e424d26920d5ccaa1c6b15ef97e43dd5011ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe18d3c279da6802a4dd4a0c47e424d26920d5ccaa1c6b15ef97e43dd5011ca->enter($__internal_5fe18d3c279da6802a4dd4a0c47e424d26920d5ccaa1c6b15ef97e43dd5011ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8dad839a5266105d7bb6d96909c475a0170a14ad104f6d3826eb4c117d92054c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dad839a5266105d7bb6d96909c475a0170a14ad104f6d3826eb4c117d92054c->enter($__internal_8dad839a5266105d7bb6d96909c475a0170a14ad104f6d3826eb4c117d92054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">CollectMaster</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Collection</a></li>
                            </ul>
                            <a class=\"pull-right btn btn-info account\" href=\"#\">Account</a>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            ";
        
        $__internal_8dad839a5266105d7bb6d96909c475a0170a14ad104f6d3826eb4c117d92054c->leave($__internal_8dad839a5266105d7bb6d96909c475a0170a14ad104f6d3826eb4c117d92054c_prof);

        
        $__internal_5fe18d3c279da6802a4dd4a0c47e424d26920d5ccaa1c6b15ef97e43dd5011ca->leave($__internal_5fe18d3c279da6802a4dd4a0c47e424d26920d5ccaa1c6b15ef97e43dd5011ca_prof);

    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        $__internal_27f65603b8afb6ed4997985d91ff763779630f466a38dc9f207f500610d96793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f65603b8afb6ed4997985d91ff763779630f466a38dc9f207f500610d96793->enter($__internal_27f65603b8afb6ed4997985d91ff763779630f466a38dc9f207f500610d96793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2547f776e089c2c7ecbadf0b8e8c14289e6d31ad16e0804f768ae66507e7a98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2547f776e089c2c7ecbadf0b8e8c14289e6d31ad16e0804f768ae66507e7a98d->enter($__internal_2547f776e089c2c7ecbadf0b8e8c14289e6d31ad16e0804f768ae66507e7a98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2547f776e089c2c7ecbadf0b8e8c14289e6d31ad16e0804f768ae66507e7a98d->leave($__internal_2547f776e089c2c7ecbadf0b8e8c14289e6d31ad16e0804f768ae66507e7a98d_prof);

        
        $__internal_27f65603b8afb6ed4997985d91ff763779630f466a38dc9f207f500610d96793->leave($__internal_27f65603b8afb6ed4997985d91ff763779630f466a38dc9f207f500610d96793_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_678c91783bd522aba2e67f4e27f7ea7a1f533b1984b5eb81c4dfca85eccf23f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678c91783bd522aba2e67f4e27f7ea7a1f533b1984b5eb81c4dfca85eccf23f2->enter($__internal_678c91783bd522aba2e67f4e27f7ea7a1f533b1984b5eb81c4dfca85eccf23f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5cdc468781e87471c6a46b39c7a2b8b783c01517a408b7a2ae9a7cab830df59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cdc468781e87471c6a46b39c7a2b8b783c01517a408b7a2ae9a7cab830df59->enter($__internal_c5cdc468781e87471c6a46b39c7a2b8b783c01517a408b7a2ae9a7cab830df59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "        ";
        
        $__internal_c5cdc468781e87471c6a46b39c7a2b8b783c01517a408b7a2ae9a7cab830df59->leave($__internal_c5cdc468781e87471c6a46b39c7a2b8b783c01517a408b7a2ae9a7cab830df59_prof);

        
        $__internal_678c91783bd522aba2e67f4e27f7ea7a1f533b1984b5eb81c4dfca85eccf23f2->leave($__internal_678c91783bd522aba2e67f4e27f7ea7a1f533b1984b5eb81c4dfca85eccf23f2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 33,  161 => 32,  144 => 30,  120 => 15,  111 => 14,  99 => 7,  90 => 6,  72 => 5,  60 => 34,  58 => 32,  55 => 31,  52 => 30,  50 => 14,  42 => 10,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Collectmaster!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"/vendors/bootstrap/dist/css/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"/css/collectmaster.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block menu %}
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"#\">CollectMaster</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Collection</a></li>
                            </ul>
                            <a class=\"pull-right btn btn-info account\" href=\"#\">Account</a>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            {% endblock %}
            {% block main %}{% endblock %}
        </div>
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmaster/app/Resources/views/base.html.twig");
    }
}
