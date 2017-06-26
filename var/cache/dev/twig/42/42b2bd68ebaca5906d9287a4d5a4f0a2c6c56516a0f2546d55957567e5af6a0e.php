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
        $__internal_775cdb482675b28172133997ca7b40d9c84531ef9abe5f3611a44a13a810a918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775cdb482675b28172133997ca7b40d9c84531ef9abe5f3611a44a13a810a918->enter($__internal_775cdb482675b28172133997ca7b40d9c84531ef9abe5f3611a44a13a810a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2be903a342f5cfc06eb7fa108e1674b719bac90cdc156f34b1252907dc8d3543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be903a342f5cfc06eb7fa108e1674b719bac90cdc156f34b1252907dc8d3543->enter($__internal_2be903a342f5cfc06eb7fa108e1674b719bac90cdc156f34b1252907dc8d3543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_775cdb482675b28172133997ca7b40d9c84531ef9abe5f3611a44a13a810a918->leave($__internal_775cdb482675b28172133997ca7b40d9c84531ef9abe5f3611a44a13a810a918_prof);

        
        $__internal_2be903a342f5cfc06eb7fa108e1674b719bac90cdc156f34b1252907dc8d3543->leave($__internal_2be903a342f5cfc06eb7fa108e1674b719bac90cdc156f34b1252907dc8d3543_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41ca875acd0b570622974c6058a7e7bae6848b4f22c3b665d70f1f6ccbaf53e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ca875acd0b570622974c6058a7e7bae6848b4f22c3b665d70f1f6ccbaf53e3->enter($__internal_41ca875acd0b570622974c6058a7e7bae6848b4f22c3b665d70f1f6ccbaf53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_054c4b0e3119b8c35f613d5641610fbbe3ab5c41413522c0d7b76590e412fa5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054c4b0e3119b8c35f613d5641610fbbe3ab5c41413522c0d7b76590e412fa5a->enter($__internal_054c4b0e3119b8c35f613d5641610fbbe3ab5c41413522c0d7b76590e412fa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collectmaster!";
        
        $__internal_054c4b0e3119b8c35f613d5641610fbbe3ab5c41413522c0d7b76590e412fa5a->leave($__internal_054c4b0e3119b8c35f613d5641610fbbe3ab5c41413522c0d7b76590e412fa5a_prof);

        
        $__internal_41ca875acd0b570622974c6058a7e7bae6848b4f22c3b665d70f1f6ccbaf53e3->leave($__internal_41ca875acd0b570622974c6058a7e7bae6848b4f22c3b665d70f1f6ccbaf53e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_631d359d9a474c255833f029b6c79f3ed2370feda74d3612308a9c757ff764f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631d359d9a474c255833f029b6c79f3ed2370feda74d3612308a9c757ff764f6->enter($__internal_631d359d9a474c255833f029b6c79f3ed2370feda74d3612308a9c757ff764f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0957833959629d3800d96d640ca14f4dc52edccb220824e3da188e08e1e95138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0957833959629d3800d96d640ca14f4dc52edccb220824e3da188e08e1e95138->enter($__internal_0957833959629d3800d96d640ca14f4dc52edccb220824e3da188e08e1e95138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/vendors/bootstrap/dist/css/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"/css/collectmaster.css\">
        ";
        
        $__internal_0957833959629d3800d96d640ca14f4dc52edccb220824e3da188e08e1e95138->leave($__internal_0957833959629d3800d96d640ca14f4dc52edccb220824e3da188e08e1e95138_prof);

        
        $__internal_631d359d9a474c255833f029b6c79f3ed2370feda74d3612308a9c757ff764f6->leave($__internal_631d359d9a474c255833f029b6c79f3ed2370feda74d3612308a9c757ff764f6_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0e8da91db2862648c6c43e6e22ff49373a3e45f3c2b07a8e6e51da8e5d8a08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e8da91db2862648c6c43e6e22ff49373a3e45f3c2b07a8e6e51da8e5d8a08b->enter($__internal_b0e8da91db2862648c6c43e6e22ff49373a3e45f3c2b07a8e6e51da8e5d8a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55cd07e75fe596031f25e681b94b1725bad3351797e8df783b458312ed87f819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cd07e75fe596031f25e681b94b1725bad3351797e8df783b458312ed87f819->enter($__internal_55cd07e75fe596031f25e681b94b1725bad3351797e8df783b458312ed87f819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_55cd07e75fe596031f25e681b94b1725bad3351797e8df783b458312ed87f819->leave($__internal_55cd07e75fe596031f25e681b94b1725bad3351797e8df783b458312ed87f819_prof);

        
        $__internal_b0e8da91db2862648c6c43e6e22ff49373a3e45f3c2b07a8e6e51da8e5d8a08b->leave($__internal_b0e8da91db2862648c6c43e6e22ff49373a3e45f3c2b07a8e6e51da8e5d8a08b_prof);

    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        $__internal_d62c8d3ffa0fb7bba1ea325e845877a94687d000f4b69d73ede45289bd9ddebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62c8d3ffa0fb7bba1ea325e845877a94687d000f4b69d73ede45289bd9ddebc->enter($__internal_d62c8d3ffa0fb7bba1ea325e845877a94687d000f4b69d73ede45289bd9ddebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_31ba00fa8f484485118481fd6b474b28ab85075e2c081968a786c0d665bca371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ba00fa8f484485118481fd6b474b28ab85075e2c081968a786c0d665bca371->enter($__internal_31ba00fa8f484485118481fd6b474b28ab85075e2c081968a786c0d665bca371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_31ba00fa8f484485118481fd6b474b28ab85075e2c081968a786c0d665bca371->leave($__internal_31ba00fa8f484485118481fd6b474b28ab85075e2c081968a786c0d665bca371_prof);

        
        $__internal_d62c8d3ffa0fb7bba1ea325e845877a94687d000f4b69d73ede45289bd9ddebc->leave($__internal_d62c8d3ffa0fb7bba1ea325e845877a94687d000f4b69d73ede45289bd9ddebc_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9dd4bbc2031773c1ab9e4ee3106e51f93382e7a94370aeea3d24381254bf346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dd4bbc2031773c1ab9e4ee3106e51f93382e7a94370aeea3d24381254bf346->enter($__internal_d9dd4bbc2031773c1ab9e4ee3106e51f93382e7a94370aeea3d24381254bf346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e13e9b9a36e198fc49a575ff4a508a9da678464f8f362c21c8eeb031e89203d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e13e9b9a36e198fc49a575ff4a508a9da678464f8f362c21c8eeb031e89203d->enter($__internal_5e13e9b9a36e198fc49a575ff4a508a9da678464f8f362c21c8eeb031e89203d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "        ";
        
        $__internal_5e13e9b9a36e198fc49a575ff4a508a9da678464f8f362c21c8eeb031e89203d->leave($__internal_5e13e9b9a36e198fc49a575ff4a508a9da678464f8f362c21c8eeb031e89203d_prof);

        
        $__internal_d9dd4bbc2031773c1ab9e4ee3106e51f93382e7a94370aeea3d24381254bf346->leave($__internal_d9dd4bbc2031773c1ab9e4ee3106e51f93382e7a94370aeea3d24381254bf346_prof);

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
