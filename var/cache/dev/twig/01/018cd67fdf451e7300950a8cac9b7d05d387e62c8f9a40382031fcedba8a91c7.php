<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a56c91343557e811f71047386e2197086e8a9c76280c2861b492901f81f793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a56c91343557e811f71047386e2197086e8a9c76280c2861b492901f81f793->enter($__internal_28a56c91343557e811f71047386e2197086e8a9c76280c2861b492901f81f793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a4a325e84b7b4182cb8dd2cad71fff0cf5c02e40a2c76af2a04f6799b2246d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a325e84b7b4182cb8dd2cad71fff0cf5c02e40a2c76af2a04f6799b2246d04->enter($__internal_a4a325e84b7b4182cb8dd2cad71fff0cf5c02e40a2c76af2a04f6799b2246d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <li class=\"navbar-brand\">Covoiturage</li>
            </div>
          </div>
        </nav>
        
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>


";
        
        $__internal_28a56c91343557e811f71047386e2197086e8a9c76280c2861b492901f81f793->leave($__internal_28a56c91343557e811f71047386e2197086e8a9c76280c2861b492901f81f793_prof);

        
        $__internal_a4a325e84b7b4182cb8dd2cad71fff0cf5c02e40a2c76af2a04f6799b2246d04->leave($__internal_a4a325e84b7b4182cb8dd2cad71fff0cf5c02e40a2c76af2a04f6799b2246d04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82115b91d668de41452c8a19ee7c703971eaa4f7906538f9ed39db874f56c413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82115b91d668de41452c8a19ee7c703971eaa4f7906538f9ed39db874f56c413->enter($__internal_82115b91d668de41452c8a19ee7c703971eaa4f7906538f9ed39db874f56c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d87768bf212cb968f3c0e5737a3ffcd6445a976b8eb960e49d64985f31cc7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d87768bf212cb968f3c0e5737a3ffcd6445a976b8eb960e49d64985f31cc7d4->enter($__internal_1d87768bf212cb968f3c0e5737a3ffcd6445a976b8eb960e49d64985f31cc7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d87768bf212cb968f3c0e5737a3ffcd6445a976b8eb960e49d64985f31cc7d4->leave($__internal_1d87768bf212cb968f3c0e5737a3ffcd6445a976b8eb960e49d64985f31cc7d4_prof);

        
        $__internal_82115b91d668de41452c8a19ee7c703971eaa4f7906538f9ed39db874f56c413->leave($__internal_82115b91d668de41452c8a19ee7c703971eaa4f7906538f9ed39db874f56c413_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6de2b81ba84ce2fe6ff2ea2bd6faad9ce4d5ce5c305d0bd221eadcab0e78bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6de2b81ba84ce2fe6ff2ea2bd6faad9ce4d5ce5c305d0bd221eadcab0e78bcd->enter($__internal_b6de2b81ba84ce2fe6ff2ea2bd6faad9ce4d5ce5c305d0bd221eadcab0e78bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aad49e9d4b7c016fe33c014cd90a006fd363bd04c0ff6f7672f39d662102a121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad49e9d4b7c016fe33c014cd90a006fd363bd04c0ff6f7672f39d662102a121->enter($__internal_aad49e9d4b7c016fe33c014cd90a006fd363bd04c0ff6f7672f39d662102a121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_aad49e9d4b7c016fe33c014cd90a006fd363bd04c0ff6f7672f39d662102a121->leave($__internal_aad49e9d4b7c016fe33c014cd90a006fd363bd04c0ff6f7672f39d662102a121_prof);

        
        $__internal_b6de2b81ba84ce2fe6ff2ea2bd6faad9ce4d5ce5c305d0bd221eadcab0e78bcd->leave($__internal_b6de2b81ba84ce2fe6ff2ea2bd6faad9ce4d5ce5c305d0bd221eadcab0e78bcd_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d15efbeaba4f090cc19653391e31e8eef18200efc90aa985a885a0b2c11ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d15efbeaba4f090cc19653391e31e8eef18200efc90aa985a885a0b2c11ede->enter($__internal_06d15efbeaba4f090cc19653391e31e8eef18200efc90aa985a885a0b2c11ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_209f7826de098166e58e0ceb05db2904712842b0673a22f5f1bcd1690819779d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209f7826de098166e58e0ceb05db2904712842b0673a22f5f1bcd1690819779d->enter($__internal_209f7826de098166e58e0ceb05db2904712842b0673a22f5f1bcd1690819779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_209f7826de098166e58e0ceb05db2904712842b0673a22f5f1bcd1690819779d->leave($__internal_209f7826de098166e58e0ceb05db2904712842b0673a22f5f1bcd1690819779d_prof);

        
        $__internal_06d15efbeaba4f090cc19653391e31e8eef18200efc90aa985a885a0b2c11ede->leave($__internal_06d15efbeaba4f090cc19653391e31e8eef18200efc90aa985a885a0b2c11ede_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_650ecd66ec0b459234e9484d0863965c3650e553807ca45c72e6ae30c0632e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650ecd66ec0b459234e9484d0863965c3650e553807ca45c72e6ae30c0632e63->enter($__internal_650ecd66ec0b459234e9484d0863965c3650e553807ca45c72e6ae30c0632e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6032d481ecf5d903625cc78d4dde1935a0ddfe5de66e19d842f1bc1d7d98f0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032d481ecf5d903625cc78d4dde1935a0ddfe5de66e19d842f1bc1d7d98f0a6->enter($__internal_6032d481ecf5d903625cc78d4dde1935a0ddfe5de66e19d842f1bc1d7d98f0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6032d481ecf5d903625cc78d4dde1935a0ddfe5de66e19d842f1bc1d7d98f0a6->leave($__internal_6032d481ecf5d903625cc78d4dde1935a0ddfe5de66e19d842f1bc1d7d98f0a6_prof);

        
        $__internal_650ecd66ec0b459234e9484d0863965c3650e553807ca45c72e6ae30c0632e63->leave($__internal_650ecd66ec0b459234e9484d0863965c3650e553807ca45c72e6ae30c0632e63_prof);

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
        return array (  150 => 25,  145 => 24,  136 => 23,  126 => 21,  117 => 20,  104 => 7,  95 => 6,  77 => 5,  63 => 27,  61 => 23,  58 => 22,  56 => 20,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap.min.css')}}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <li class=\"navbar-brand\">Covoiturage</li>
            </div>
          </div>
        </nav>
        
        {% block body %}
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>


", "base.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\app\\Resources\\views\\base.html.twig");
    }
}
