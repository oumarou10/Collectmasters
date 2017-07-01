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
        $__internal_fd6294289fa6c9eabd032f808b59af5640698fbf8a00f4449822faf9606e7673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6294289fa6c9eabd032f808b59af5640698fbf8a00f4449822faf9606e7673->enter($__internal_fd6294289fa6c9eabd032f808b59af5640698fbf8a00f4449822faf9606e7673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_996b755c627d99d34a15081194bfa950b02603af52e9072520567a899a72e6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996b755c627d99d34a15081194bfa950b02603af52e9072520567a899a72e6d0->enter($__internal_996b755c627d99d34a15081194bfa950b02603af52e9072520567a899a72e6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 31
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "        </div>
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_fd6294289fa6c9eabd032f808b59af5640698fbf8a00f4449822faf9606e7673->leave($__internal_fd6294289fa6c9eabd032f808b59af5640698fbf8a00f4449822faf9606e7673_prof);

        
        $__internal_996b755c627d99d34a15081194bfa950b02603af52e9072520567a899a72e6d0->leave($__internal_996b755c627d99d34a15081194bfa950b02603af52e9072520567a899a72e6d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c2e0a4886674db894436ace83e7fe33dd374c9a8017dcfcbe900e44b9e53759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2e0a4886674db894436ace83e7fe33dd374c9a8017dcfcbe900e44b9e53759->enter($__internal_8c2e0a4886674db894436ace83e7fe33dd374c9a8017dcfcbe900e44b9e53759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad21a5dfa6a4d8b9bfa1985f0c16df448c5b2cb8d2645b789ca9cfd00948c278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad21a5dfa6a4d8b9bfa1985f0c16df448c5b2cb8d2645b789ca9cfd00948c278->enter($__internal_ad21a5dfa6a4d8b9bfa1985f0c16df448c5b2cb8d2645b789ca9cfd00948c278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collectmaster!";
        
        $__internal_ad21a5dfa6a4d8b9bfa1985f0c16df448c5b2cb8d2645b789ca9cfd00948c278->leave($__internal_ad21a5dfa6a4d8b9bfa1985f0c16df448c5b2cb8d2645b789ca9cfd00948c278_prof);

        
        $__internal_8c2e0a4886674db894436ace83e7fe33dd374c9a8017dcfcbe900e44b9e53759->leave($__internal_8c2e0a4886674db894436ace83e7fe33dd374c9a8017dcfcbe900e44b9e53759_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7115e0951940df2cf9078008b40dce8979ad06c8ce16470143d2879a9542d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7115e0951940df2cf9078008b40dce8979ad06c8ce16470143d2879a9542d2b->enter($__internal_f7115e0951940df2cf9078008b40dce8979ad06c8ce16470143d2879a9542d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b5fa56b8c2ecd9fcea4d2a82b83e4216167458c5faba80bab770be5bf42e4c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fa56b8c2ecd9fcea4d2a82b83e4216167458c5faba80bab770be5bf42e4c06->enter($__internal_b5fa56b8c2ecd9fcea4d2a82b83e4216167458c5faba80bab770be5bf42e4c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/vendors/bootstrap/dist/css/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"/css/collectmaster.css\">
        ";
        
        $__internal_b5fa56b8c2ecd9fcea4d2a82b83e4216167458c5faba80bab770be5bf42e4c06->leave($__internal_b5fa56b8c2ecd9fcea4d2a82b83e4216167458c5faba80bab770be5bf42e4c06_prof);

        
        $__internal_f7115e0951940df2cf9078008b40dce8979ad06c8ce16470143d2879a9542d2b->leave($__internal_f7115e0951940df2cf9078008b40dce8979ad06c8ce16470143d2879a9542d2b_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6d5aa0263fb7e08ceef385959d14d8f24d48ba458adc94f2c976b3722e44b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d5aa0263fb7e08ceef385959d14d8f24d48ba458adc94f2c976b3722e44b78->enter($__internal_e6d5aa0263fb7e08ceef385959d14d8f24d48ba458adc94f2c976b3722e44b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cdd97028e81d3c598f9f2bb2901016438655a2dd661e94edf2464adafe5fe683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd97028e81d3c598f9f2bb2901016438655a2dd661e94edf2464adafe5fe683->enter($__internal_cdd97028e81d3c598f9f2bb2901016438655a2dd661e94edf2464adafe5fe683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">CollectMaster</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("items");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("item");
        echo "\">Collection</a></li>
                            </ul>
                           ";
        // line 25
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            echo "<a class=\"pull-right btn btn-info account\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a> ";
        }
        // line 26
        echo "                            <a class=\"pull-right btn btn-info account\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Account</a>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            ";
        
        $__internal_cdd97028e81d3c598f9f2bb2901016438655a2dd661e94edf2464adafe5fe683->leave($__internal_cdd97028e81d3c598f9f2bb2901016438655a2dd661e94edf2464adafe5fe683_prof);

        
        $__internal_e6d5aa0263fb7e08ceef385959d14d8f24d48ba458adc94f2c976b3722e44b78->leave($__internal_e6d5aa0263fb7e08ceef385959d14d8f24d48ba458adc94f2c976b3722e44b78_prof);

    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        $__internal_4c9d06768e234aa5280bd4f25bc3d0d733ef209dde702b4e90ff6f5ac5ab4b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9d06768e234aa5280bd4f25bc3d0d733ef209dde702b4e90ff6f5ac5ab4b3d->enter($__internal_4c9d06768e234aa5280bd4f25bc3d0d733ef209dde702b4e90ff6f5ac5ab4b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6798e7cda80bddaa9f7277b31887ec9e4537029511aa2352ae15f54f5cc6e5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6798e7cda80bddaa9f7277b31887ec9e4537029511aa2352ae15f54f5cc6e5f5->enter($__internal_6798e7cda80bddaa9f7277b31887ec9e4537029511aa2352ae15f54f5cc6e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6798e7cda80bddaa9f7277b31887ec9e4537029511aa2352ae15f54f5cc6e5f5->leave($__internal_6798e7cda80bddaa9f7277b31887ec9e4537029511aa2352ae15f54f5cc6e5f5_prof);

        
        $__internal_4c9d06768e234aa5280bd4f25bc3d0d733ef209dde702b4e90ff6f5ac5ab4b3d->leave($__internal_4c9d06768e234aa5280bd4f25bc3d0d733ef209dde702b4e90ff6f5ac5ab4b3d_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11de7a7763a8a3bfc23fc2559d2ac1d085bcfd031d9237396ecb845c38328b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11de7a7763a8a3bfc23fc2559d2ac1d085bcfd031d9237396ecb845c38328b87->enter($__internal_11de7a7763a8a3bfc23fc2559d2ac1d085bcfd031d9237396ecb845c38328b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_05e371f09e457d0c0ce5a950144b36ecce8a05e9c15c0c58ec02834104c70894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e371f09e457d0c0ce5a950144b36ecce8a05e9c15c0c58ec02834104c70894->enter($__internal_05e371f09e457d0c0ce5a950144b36ecce8a05e9c15c0c58ec02834104c70894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "        ";
        
        $__internal_05e371f09e457d0c0ce5a950144b36ecce8a05e9c15c0c58ec02834104c70894->leave($__internal_05e371f09e457d0c0ce5a950144b36ecce8a05e9c15c0c58ec02834104c70894_prof);

        
        $__internal_11de7a7763a8a3bfc23fc2559d2ac1d085bcfd031d9237396ecb845c38328b87->leave($__internal_11de7a7763a8a3bfc23fc2559d2ac1d085bcfd031d9237396ecb845c38328b87_prof);

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
        return array (  189 => 34,  180 => 33,  163 => 31,  147 => 26,  141 => 25,  136 => 23,  132 => 22,  125 => 18,  120 => 15,  111 => 14,  99 => 7,  90 => 6,  72 => 5,  60 => 35,  58 => 33,  55 => 32,  52 => 31,  50 => 14,  42 => 10,  40 => 6,  36 => 5,  30 => 1,);
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
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">CollectMaster</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"{{ path('items') }}\">Home</a></li>
                                <li><a href=\"{{ path('item') }}\">Collection</a></li>
                            </ul>
                           {% if app.user  %}<a class=\"pull-right btn btn-info account\" href=\"{{ path('fos_user_security_logout') }}\">Logout</a> {% endif %}
                            <a class=\"pull-right btn btn-info account\" href=\"{{ path('fos_user_security_login') }}\">Account</a>
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
", "base.html.twig", "/Applications/MAMP/htdocs/Projets Symfony/Video2brain/Collectmasters/app/Resources/views/base.html.twig");
    }
}
