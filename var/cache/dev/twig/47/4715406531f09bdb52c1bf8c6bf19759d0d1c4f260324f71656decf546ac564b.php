<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1f85c0f2af7439cc8cac00cf32943ab70992278a43a64a08d36b02ffcd11049f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f85c0f2af7439cc8cac00cf32943ab70992278a43a64a08d36b02ffcd11049f->enter($__internal_1f85c0f2af7439cc8cac00cf32943ab70992278a43a64a08d36b02ffcd11049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f161fab023673dd58b4c8d7330fc28d62592b08936718ef26df8a60ba3cee05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f161fab023673dd58b4c8d7330fc28d62592b08936718ef26df8a60ba3cee05a->enter($__internal_f161fab023673dd58b4c8d7330fc28d62592b08936718ef26df8a60ba3cee05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f85c0f2af7439cc8cac00cf32943ab70992278a43a64a08d36b02ffcd11049f->leave($__internal_1f85c0f2af7439cc8cac00cf32943ab70992278a43a64a08d36b02ffcd11049f_prof);

        
        $__internal_f161fab023673dd58b4c8d7330fc28d62592b08936718ef26df8a60ba3cee05a->leave($__internal_f161fab023673dd58b4c8d7330fc28d62592b08936718ef26df8a60ba3cee05a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91905c331b3f20648f655f9675e6a65ec45c9e3a791262ebe7efa60051600a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91905c331b3f20648f655f9675e6a65ec45c9e3a791262ebe7efa60051600a7a->enter($__internal_91905c331b3f20648f655f9675e6a65ec45c9e3a791262ebe7efa60051600a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb075ab1537432ede634a888b61f6bb4d88cc33689fbdae48488751bd978f320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb075ab1537432ede634a888b61f6bb4d88cc33689fbdae48488751bd978f320->enter($__internal_fb075ab1537432ede634a888b61f6bb4d88cc33689fbdae48488751bd978f320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fb075ab1537432ede634a888b61f6bb4d88cc33689fbdae48488751bd978f320->leave($__internal_fb075ab1537432ede634a888b61f6bb4d88cc33689fbdae48488751bd978f320_prof);

        
        $__internal_91905c331b3f20648f655f9675e6a65ec45c9e3a791262ebe7efa60051600a7a->leave($__internal_91905c331b3f20648f655f9675e6a65ec45c9e3a791262ebe7efa60051600a7a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbc3b4463345f91f23bd413be53c45efb272f23af6dd6879749451e59c862d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc3b4463345f91f23bd413be53c45efb272f23af6dd6879749451e59c862d45->enter($__internal_bbc3b4463345f91f23bd413be53c45efb272f23af6dd6879749451e59c862d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_309ad242c9efb86269c7a380d5ada1c076ef4b7534c85b7d2bc6630f41e336ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309ad242c9efb86269c7a380d5ada1c076ef4b7534c85b7d2bc6630f41e336ef->enter($__internal_309ad242c9efb86269c7a380d5ada1c076ef4b7534c85b7d2bc6630f41e336ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_309ad242c9efb86269c7a380d5ada1c076ef4b7534c85b7d2bc6630f41e336ef->leave($__internal_309ad242c9efb86269c7a380d5ada1c076ef4b7534c85b7d2bc6630f41e336ef_prof);

        
        $__internal_bbc3b4463345f91f23bd413be53c45efb272f23af6dd6879749451e59c862d45->leave($__internal_bbc3b4463345f91f23bd413be53c45efb272f23af6dd6879749451e59c862d45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06e9daffc5e1c327fa0dc3ab0ebc51a94e6156bc0a497d3772f9c25762cc958c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e9daffc5e1c327fa0dc3ab0ebc51a94e6156bc0a497d3772f9c25762cc958c->enter($__internal_06e9daffc5e1c327fa0dc3ab0ebc51a94e6156bc0a497d3772f9c25762cc958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2633ab624951b73828d2ca6c9cf5092115e3ab9ffda0b14c8c87bb2b60a4513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2633ab624951b73828d2ca6c9cf5092115e3ab9ffda0b14c8c87bb2b60a4513b->enter($__internal_2633ab624951b73828d2ca6c9cf5092115e3ab9ffda0b14c8c87bb2b60a4513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2633ab624951b73828d2ca6c9cf5092115e3ab9ffda0b14c8c87bb2b60a4513b->leave($__internal_2633ab624951b73828d2ca6c9cf5092115e3ab9ffda0b14c8c87bb2b60a4513b_prof);

        
        $__internal_06e9daffc5e1c327fa0dc3ab0ebc51a94e6156bc0a497d3772f9c25762cc958c->leave($__internal_06e9daffc5e1c327fa0dc3ab0ebc51a94e6156bc0a497d3772f9c25762cc958c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
