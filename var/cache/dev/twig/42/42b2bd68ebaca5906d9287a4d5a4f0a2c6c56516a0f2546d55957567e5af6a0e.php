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
        $__internal_9c9e6e7b0de705f9982e009d0da3d238800a2fbe58bc1a7e881b1ad41889a1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9e6e7b0de705f9982e009d0da3d238800a2fbe58bc1a7e881b1ad41889a1d8->enter($__internal_9c9e6e7b0de705f9982e009d0da3d238800a2fbe58bc1a7e881b1ad41889a1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4a9eb40a995631853be87af0487bdc5b06e6a8ebb728e627209cab9ee9ca0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a9eb40a995631853be87af0487bdc5b06e6a8ebb728e627209cab9ee9ca0f7->enter($__internal_f4a9eb40a995631853be87af0487bdc5b06e6a8ebb728e627209cab9ee9ca0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 63
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 64
        echo "        </div>
        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_9c9e6e7b0de705f9982e009d0da3d238800a2fbe58bc1a7e881b1ad41889a1d8->leave($__internal_9c9e6e7b0de705f9982e009d0da3d238800a2fbe58bc1a7e881b1ad41889a1d8_prof);

        
        $__internal_f4a9eb40a995631853be87af0487bdc5b06e6a8ebb728e627209cab9ee9ca0f7->leave($__internal_f4a9eb40a995631853be87af0487bdc5b06e6a8ebb728e627209cab9ee9ca0f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d37d42abc93329a09e394366048e2fa7273407904209caef7f88de169d05fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d37d42abc93329a09e394366048e2fa7273407904209caef7f88de169d05fe9->enter($__internal_4d37d42abc93329a09e394366048e2fa7273407904209caef7f88de169d05fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9df354978f2d2b20e24954278068e1693edeca12f4323916cbd32e6a6e1e88b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df354978f2d2b20e24954278068e1693edeca12f4323916cbd32e6a6e1e88b9->enter($__internal_9df354978f2d2b20e24954278068e1693edeca12f4323916cbd32e6a6e1e88b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collectmaster!";
        
        $__internal_9df354978f2d2b20e24954278068e1693edeca12f4323916cbd32e6a6e1e88b9->leave($__internal_9df354978f2d2b20e24954278068e1693edeca12f4323916cbd32e6a6e1e88b9_prof);

        
        $__internal_4d37d42abc93329a09e394366048e2fa7273407904209caef7f88de169d05fe9->leave($__internal_4d37d42abc93329a09e394366048e2fa7273407904209caef7f88de169d05fe9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e80145ed7b8db66a960283269618dafe6bb48a9a1e3e32a33831e021683e268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e80145ed7b8db66a960283269618dafe6bb48a9a1e3e32a33831e021683e268->enter($__internal_9e80145ed7b8db66a960283269618dafe6bb48a9a1e3e32a33831e021683e268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b552313fed5e786b9acee756ea2ddff977762f64613d84651ba59bdffab891ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b552313fed5e786b9acee756ea2ddff977762f64613d84651ba59bdffab891ee->enter($__internal_b552313fed5e786b9acee756ea2ddff977762f64613d84651ba59bdffab891ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/vendors/bootstrap/dist/css/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"/css/collectmaster.css\">
        ";
        
        $__internal_b552313fed5e786b9acee756ea2ddff977762f64613d84651ba59bdffab891ee->leave($__internal_b552313fed5e786b9acee756ea2ddff977762f64613d84651ba59bdffab891ee_prof);

        
        $__internal_9e80145ed7b8db66a960283269618dafe6bb48a9a1e3e32a33831e021683e268->leave($__internal_9e80145ed7b8db66a960283269618dafe6bb48a9a1e3e32a33831e021683e268_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a52eae05b2c78dcd8349292dbabbcb484614f4fe172328c0f5af97477c74fd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52eae05b2c78dcd8349292dbabbcb484614f4fe172328c0f5af97477c74fd5b->enter($__internal_a52eae05b2c78dcd8349292dbabbcb484614f4fe172328c0f5af97477c74fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e477b62785331533bbdfd9226f9c3583a6b83f572bd227fcaa7b724d3fc009f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e477b62785331533bbdfd9226f9c3583a6b83f572bd227fcaa7b724d3fc009f9->enter($__internal_e477b62785331533bbdfd9226f9c3583a6b83f572bd227fcaa7b724d3fc009f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
                                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("items");
        echo "\">Liste des items</a></li>

                                ";
        // line 24
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 25
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("item");
            echo "\">Ajouter un item </a></li>
                                ";
        }
        // line 27
        echo "                            </ul>

                           ";
        // line 29
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "                               <a class=\"pull-right btn btn-info account\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                           ";
        } else {
            // line 32
            echo "                               <a class=\"pull-right btn btn-info account\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Account</a>
                           ";
        }
        // line 34
        echo "                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>

                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info_form"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 39
            echo "
                    <div class=\"alert alert-success\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info_remove"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 47
            echo "
                    <div class=\"alert alert-success\">
                        ";
            // line 49
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info_remove_bad_user"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 55
            echo "
                    <div class=\"alert alert-danger\">
                        ";
            // line 57
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            ";
        
        $__internal_e477b62785331533bbdfd9226f9c3583a6b83f572bd227fcaa7b724d3fc009f9->leave($__internal_e477b62785331533bbdfd9226f9c3583a6b83f572bd227fcaa7b724d3fc009f9_prof);

        
        $__internal_a52eae05b2c78dcd8349292dbabbcb484614f4fe172328c0f5af97477c74fd5b->leave($__internal_a52eae05b2c78dcd8349292dbabbcb484614f4fe172328c0f5af97477c74fd5b_prof);

    }

    // line 63
    public function block_main($context, array $blocks = array())
    {
        $__internal_a561be58fc2a9892151114788c65b2592213c386d258bc58390beebf6fc33597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a561be58fc2a9892151114788c65b2592213c386d258bc58390beebf6fc33597->enter($__internal_a561be58fc2a9892151114788c65b2592213c386d258bc58390beebf6fc33597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_98599549bda9cb11d55c1628292f11f3cebdbfee88a17a15af1c0c4dbe7e6b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98599549bda9cb11d55c1628292f11f3cebdbfee88a17a15af1c0c4dbe7e6b86->enter($__internal_98599549bda9cb11d55c1628292f11f3cebdbfee88a17a15af1c0c4dbe7e6b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_98599549bda9cb11d55c1628292f11f3cebdbfee88a17a15af1c0c4dbe7e6b86->leave($__internal_98599549bda9cb11d55c1628292f11f3cebdbfee88a17a15af1c0c4dbe7e6b86_prof);

        
        $__internal_a561be58fc2a9892151114788c65b2592213c386d258bc58390beebf6fc33597->leave($__internal_a561be58fc2a9892151114788c65b2592213c386d258bc58390beebf6fc33597_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_488f99b03f0ba27822bdef0e68e9446cff1bce434f7113dedc5b66419e5d144d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488f99b03f0ba27822bdef0e68e9446cff1bce434f7113dedc5b66419e5d144d->enter($__internal_488f99b03f0ba27822bdef0e68e9446cff1bce434f7113dedc5b66419e5d144d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f8bb0ac0b4b3cfe5d3e5d6349ec35a450718d4131e7614ed5f16049bc9e9eb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bb0ac0b4b3cfe5d3e5d6349ec35a450718d4131e7614ed5f16049bc9e9eb3c->enter($__internal_f8bb0ac0b4b3cfe5d3e5d6349ec35a450718d4131e7614ed5f16049bc9e9eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "        ";
        
        $__internal_f8bb0ac0b4b3cfe5d3e5d6349ec35a450718d4131e7614ed5f16049bc9e9eb3c->leave($__internal_f8bb0ac0b4b3cfe5d3e5d6349ec35a450718d4131e7614ed5f16049bc9e9eb3c_prof);

        
        $__internal_488f99b03f0ba27822bdef0e68e9446cff1bce434f7113dedc5b66419e5d144d->leave($__internal_488f99b03f0ba27822bdef0e68e9446cff1bce434f7113dedc5b66419e5d144d_prof);

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
        return array (  266 => 66,  257 => 65,  240 => 63,  229 => 61,  219 => 57,  215 => 55,  211 => 54,  208 => 53,  198 => 49,  194 => 47,  190 => 46,  187 => 45,  177 => 41,  173 => 39,  169 => 38,  163 => 34,  157 => 32,  151 => 30,  149 => 29,  145 => 27,  139 => 25,  137 => 24,  132 => 22,  125 => 18,  120 => 15,  111 => 14,  99 => 7,  90 => 6,  72 => 5,  60 => 67,  58 => 65,  55 => 64,  52 => 63,  50 => 14,  42 => 10,  40 => 6,  36 => 5,  30 => 1,);
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
                                <li><a href=\"{{ path('items') }}\">Liste des items</a></li>

                                {% if app.user %}
                                    <li><a href=\"{{ path('item') }}\">Ajouter un item </a></li>
                                {% endif %}
                            </ul>

                           {% if app.user  %}
                               <a class=\"pull-right btn btn-info account\" href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                           {% else %}
                               <a class=\"pull-right btn btn-info account\" href=\"{{ path('fos_user_security_login') }}\">Account</a>
                           {% endif %}
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>

                {% for flash in app.session.flashbag.get('info_form') %}

                    <div class=\"alert alert-success\">
                        {{ flash }}
                    </div>

                {% endfor %}

                {% for flash in app.session.flashbag.get('info_remove') %}

                    <div class=\"alert alert-success\">
                        {{ flash }}
                    </div>

                {% endfor %}

                {% for flash in app.session.flashbag.get('info_remove_bad_user') %}

                    <div class=\"alert alert-danger\">
                        {{ flash }}
                    </div>

                {% endfor %}

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
