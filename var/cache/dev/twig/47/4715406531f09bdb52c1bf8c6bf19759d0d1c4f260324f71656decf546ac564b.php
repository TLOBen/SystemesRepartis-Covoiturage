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
        $__internal_58a1b25099233fc4a414efdc96f716cec511b6e547e50957285b6b4751aeaa84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a1b25099233fc4a414efdc96f716cec511b6e547e50957285b6b4751aeaa84->enter($__internal_58a1b25099233fc4a414efdc96f716cec511b6e547e50957285b6b4751aeaa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6d43aef4820fff14565fa2f7339af9589ef3094eb5bebb7ffb9f1eb609742e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d43aef4820fff14565fa2f7339af9589ef3094eb5bebb7ffb9f1eb609742e70->enter($__internal_6d43aef4820fff14565fa2f7339af9589ef3094eb5bebb7ffb9f1eb609742e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a1b25099233fc4a414efdc96f716cec511b6e547e50957285b6b4751aeaa84->leave($__internal_58a1b25099233fc4a414efdc96f716cec511b6e547e50957285b6b4751aeaa84_prof);

        
        $__internal_6d43aef4820fff14565fa2f7339af9589ef3094eb5bebb7ffb9f1eb609742e70->leave($__internal_6d43aef4820fff14565fa2f7339af9589ef3094eb5bebb7ffb9f1eb609742e70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2163babb3570b813083c6d2d5039b84efc353cceabf4ef52ac9bd0afc793bb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2163babb3570b813083c6d2d5039b84efc353cceabf4ef52ac9bd0afc793bb1f->enter($__internal_2163babb3570b813083c6d2d5039b84efc353cceabf4ef52ac9bd0afc793bb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b96505ef86352fb03b895d987f8ec2ac88a8b45c52fd1c15929c7a26165dc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b96505ef86352fb03b895d987f8ec2ac88a8b45c52fd1c15929c7a26165dc90->enter($__internal_4b96505ef86352fb03b895d987f8ec2ac88a8b45c52fd1c15929c7a26165dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b96505ef86352fb03b895d987f8ec2ac88a8b45c52fd1c15929c7a26165dc90->leave($__internal_4b96505ef86352fb03b895d987f8ec2ac88a8b45c52fd1c15929c7a26165dc90_prof);

        
        $__internal_2163babb3570b813083c6d2d5039b84efc353cceabf4ef52ac9bd0afc793bb1f->leave($__internal_2163babb3570b813083c6d2d5039b84efc353cceabf4ef52ac9bd0afc793bb1f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2622cc9a4cab7fe2b01e31110e5dc57085ace0a1ba2b390dd4e372a22e7573cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2622cc9a4cab7fe2b01e31110e5dc57085ace0a1ba2b390dd4e372a22e7573cc->enter($__internal_2622cc9a4cab7fe2b01e31110e5dc57085ace0a1ba2b390dd4e372a22e7573cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_253ff945db8c452f775e6d2da27a674b844ba626142e7ae0ae44bdaf192c34c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253ff945db8c452f775e6d2da27a674b844ba626142e7ae0ae44bdaf192c34c5->enter($__internal_253ff945db8c452f775e6d2da27a674b844ba626142e7ae0ae44bdaf192c34c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_253ff945db8c452f775e6d2da27a674b844ba626142e7ae0ae44bdaf192c34c5->leave($__internal_253ff945db8c452f775e6d2da27a674b844ba626142e7ae0ae44bdaf192c34c5_prof);

        
        $__internal_2622cc9a4cab7fe2b01e31110e5dc57085ace0a1ba2b390dd4e372a22e7573cc->leave($__internal_2622cc9a4cab7fe2b01e31110e5dc57085ace0a1ba2b390dd4e372a22e7573cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_879e989b97f63ca200b27d7a998548f93b0bbc95729f4677d596e2ae63c14c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879e989b97f63ca200b27d7a998548f93b0bbc95729f4677d596e2ae63c14c4b->enter($__internal_879e989b97f63ca200b27d7a998548f93b0bbc95729f4677d596e2ae63c14c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff63a6b1c7ee7047b65c0c538eacf4357d448a36a6e4f83370675b784d5888e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff63a6b1c7ee7047b65c0c538eacf4357d448a36a6e4f83370675b784d5888e3->enter($__internal_ff63a6b1c7ee7047b65c0c538eacf4357d448a36a6e4f83370675b784d5888e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ff63a6b1c7ee7047b65c0c538eacf4357d448a36a6e4f83370675b784d5888e3->leave($__internal_ff63a6b1c7ee7047b65c0c538eacf4357d448a36a6e4f83370675b784d5888e3_prof);

        
        $__internal_879e989b97f63ca200b27d7a998548f93b0bbc95729f4677d596e2ae63c14c4b->leave($__internal_879e989b97f63ca200b27d7a998548f93b0bbc95729f4677d596e2ae63c14c4b_prof);

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
