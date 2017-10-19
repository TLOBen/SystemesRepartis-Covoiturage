<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e4a05660518e91d63f78d357111edebd725fead9b8f498a5a0f224398a4b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e4a05660518e91d63f78d357111edebd725fead9b8f498a5a0f224398a4b04->enter($__internal_15e4a05660518e91d63f78d357111edebd725fead9b8f498a5a0f224398a4b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_69a953629cc2c799c253fd05c9ee86207a46901cb38ee1c1fd8b088535c0ccdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a953629cc2c799c253fd05c9ee86207a46901cb38ee1c1fd8b088535c0ccdd->enter($__internal_69a953629cc2c799c253fd05c9ee86207a46901cb38ee1c1fd8b088535c0ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e4a05660518e91d63f78d357111edebd725fead9b8f498a5a0f224398a4b04->leave($__internal_15e4a05660518e91d63f78d357111edebd725fead9b8f498a5a0f224398a4b04_prof);

        
        $__internal_69a953629cc2c799c253fd05c9ee86207a46901cb38ee1c1fd8b088535c0ccdd->leave($__internal_69a953629cc2c799c253fd05c9ee86207a46901cb38ee1c1fd8b088535c0ccdd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a1a1e0c2b274b123968cd7eab9d70222d1c1b9dcb647a1f005c875b9b62c525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1a1e0c2b274b123968cd7eab9d70222d1c1b9dcb647a1f005c875b9b62c525->enter($__internal_8a1a1e0c2b274b123968cd7eab9d70222d1c1b9dcb647a1f005c875b9b62c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3508b8984be0982569e4ff6f0abf78b7a5d15a03546701dfea2af037b6c14eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3508b8984be0982569e4ff6f0abf78b7a5d15a03546701dfea2af037b6c14eb2->enter($__internal_3508b8984be0982569e4ff6f0abf78b7a5d15a03546701dfea2af037b6c14eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3508b8984be0982569e4ff6f0abf78b7a5d15a03546701dfea2af037b6c14eb2->leave($__internal_3508b8984be0982569e4ff6f0abf78b7a5d15a03546701dfea2af037b6c14eb2_prof);

        
        $__internal_8a1a1e0c2b274b123968cd7eab9d70222d1c1b9dcb647a1f005c875b9b62c525->leave($__internal_8a1a1e0c2b274b123968cd7eab9d70222d1c1b9dcb647a1f005c875b9b62c525_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc3e2fa231bf5c95d646366304fca3094c7d2e141c2ffe8dda0a1c6ec67c1ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3e2fa231bf5c95d646366304fca3094c7d2e141c2ffe8dda0a1c6ec67c1ad5->enter($__internal_dc3e2fa231bf5c95d646366304fca3094c7d2e141c2ffe8dda0a1c6ec67c1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a22b7b6211b25f9bcdec6efdc07ebc62cdf52325709c44a05824da545cebdc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22b7b6211b25f9bcdec6efdc07ebc62cdf52325709c44a05824da545cebdc78->enter($__internal_a22b7b6211b25f9bcdec6efdc07ebc62cdf52325709c44a05824da545cebdc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a22b7b6211b25f9bcdec6efdc07ebc62cdf52325709c44a05824da545cebdc78->leave($__internal_a22b7b6211b25f9bcdec6efdc07ebc62cdf52325709c44a05824da545cebdc78_prof);

        
        $__internal_dc3e2fa231bf5c95d646366304fca3094c7d2e141c2ffe8dda0a1c6ec67c1ad5->leave($__internal_dc3e2fa231bf5c95d646366304fca3094c7d2e141c2ffe8dda0a1c6ec67c1ad5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87f0eca0c9ea2b03627b8822a1c11d337542838014e3bfd3c1c460a5da6d6639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f0eca0c9ea2b03627b8822a1c11d337542838014e3bfd3c1c460a5da6d6639->enter($__internal_87f0eca0c9ea2b03627b8822a1c11d337542838014e3bfd3c1c460a5da6d6639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_786c1ecc1befc1e5a8c4a60057b25d76f1a418ecf46a3a804ac543e856d1cb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786c1ecc1befc1e5a8c4a60057b25d76f1a418ecf46a3a804ac543e856d1cb6c->enter($__internal_786c1ecc1befc1e5a8c4a60057b25d76f1a418ecf46a3a804ac543e856d1cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_786c1ecc1befc1e5a8c4a60057b25d76f1a418ecf46a3a804ac543e856d1cb6c->leave($__internal_786c1ecc1befc1e5a8c4a60057b25d76f1a418ecf46a3a804ac543e856d1cb6c_prof);

        
        $__internal_87f0eca0c9ea2b03627b8822a1c11d337542838014e3bfd3c1c460a5da6d6639->leave($__internal_87f0eca0c9ea2b03627b8822a1c11d337542838014e3bfd3c1c460a5da6d6639_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
