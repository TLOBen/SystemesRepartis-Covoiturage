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
        $__internal_80a199e976d5435c4507d4efada53953bae3ba67b63574a9aaa78c6d0bd838f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a199e976d5435c4507d4efada53953bae3ba67b63574a9aaa78c6d0bd838f3->enter($__internal_80a199e976d5435c4507d4efada53953bae3ba67b63574a9aaa78c6d0bd838f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a7cb0634b75eefc315c4b7d68f13a6f15ea81c32e99b8c4fb3a399f2b973751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7cb0634b75eefc315c4b7d68f13a6f15ea81c32e99b8c4fb3a399f2b973751->enter($__internal_9a7cb0634b75eefc315c4b7d68f13a6f15ea81c32e99b8c4fb3a399f2b973751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a199e976d5435c4507d4efada53953bae3ba67b63574a9aaa78c6d0bd838f3->leave($__internal_80a199e976d5435c4507d4efada53953bae3ba67b63574a9aaa78c6d0bd838f3_prof);

        
        $__internal_9a7cb0634b75eefc315c4b7d68f13a6f15ea81c32e99b8c4fb3a399f2b973751->leave($__internal_9a7cb0634b75eefc315c4b7d68f13a6f15ea81c32e99b8c4fb3a399f2b973751_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf0d3d01a0268d6ee0ca22197901d323e7ab3b1cd4daefe9ca82948262f4455f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0d3d01a0268d6ee0ca22197901d323e7ab3b1cd4daefe9ca82948262f4455f->enter($__internal_cf0d3d01a0268d6ee0ca22197901d323e7ab3b1cd4daefe9ca82948262f4455f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed13b4e8bbdc02d155188fb64812f04e4e0bf0ce1d661e74feb02afd46de3b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed13b4e8bbdc02d155188fb64812f04e4e0bf0ce1d661e74feb02afd46de3b31->enter($__internal_ed13b4e8bbdc02d155188fb64812f04e4e0bf0ce1d661e74feb02afd46de3b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed13b4e8bbdc02d155188fb64812f04e4e0bf0ce1d661e74feb02afd46de3b31->leave($__internal_ed13b4e8bbdc02d155188fb64812f04e4e0bf0ce1d661e74feb02afd46de3b31_prof);

        
        $__internal_cf0d3d01a0268d6ee0ca22197901d323e7ab3b1cd4daefe9ca82948262f4455f->leave($__internal_cf0d3d01a0268d6ee0ca22197901d323e7ab3b1cd4daefe9ca82948262f4455f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51da323c3c1bc628105c4c183131f8b2cfeab4087a66a35a8e78a047a646d326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51da323c3c1bc628105c4c183131f8b2cfeab4087a66a35a8e78a047a646d326->enter($__internal_51da323c3c1bc628105c4c183131f8b2cfeab4087a66a35a8e78a047a646d326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d84da5a2208ca1437c78a1a443d237e3eaa384d50b20a00b583dba7fd420c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d84da5a2208ca1437c78a1a443d237e3eaa384d50b20a00b583dba7fd420c41->enter($__internal_8d84da5a2208ca1437c78a1a443d237e3eaa384d50b20a00b583dba7fd420c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d84da5a2208ca1437c78a1a443d237e3eaa384d50b20a00b583dba7fd420c41->leave($__internal_8d84da5a2208ca1437c78a1a443d237e3eaa384d50b20a00b583dba7fd420c41_prof);

        
        $__internal_51da323c3c1bc628105c4c183131f8b2cfeab4087a66a35a8e78a047a646d326->leave($__internal_51da323c3c1bc628105c4c183131f8b2cfeab4087a66a35a8e78a047a646d326_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1e9b446848b0e59d7583e0251d71cf6b78310e6dc06ba5e7059faec8f73749b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e9b446848b0e59d7583e0251d71cf6b78310e6dc06ba5e7059faec8f73749b->enter($__internal_b1e9b446848b0e59d7583e0251d71cf6b78310e6dc06ba5e7059faec8f73749b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0415d194065f9df584b73080e34e9da7a964884d15dd33a53682db624343a6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0415d194065f9df584b73080e34e9da7a964884d15dd33a53682db624343a6f3->enter($__internal_0415d194065f9df584b73080e34e9da7a964884d15dd33a53682db624343a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0415d194065f9df584b73080e34e9da7a964884d15dd33a53682db624343a6f3->leave($__internal_0415d194065f9df584b73080e34e9da7a964884d15dd33a53682db624343a6f3_prof);

        
        $__internal_b1e9b446848b0e59d7583e0251d71cf6b78310e6dc06ba5e7059faec8f73749b->leave($__internal_b1e9b446848b0e59d7583e0251d71cf6b78310e6dc06ba5e7059faec8f73749b_prof);

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
