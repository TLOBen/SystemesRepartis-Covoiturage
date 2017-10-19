<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffc82e9b1ebc9beb056557a5603bc220df57c1b905af50300f98324ed1d87fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc82e9b1ebc9beb056557a5603bc220df57c1b905af50300f98324ed1d87fe5->enter($__internal_ffc82e9b1ebc9beb056557a5603bc220df57c1b905af50300f98324ed1d87fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4725eb35279cddca766b515d18823ef68630faf38b27cf0659fcb2c5ff3270ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4725eb35279cddca766b515d18823ef68630faf38b27cf0659fcb2c5ff3270ed->enter($__internal_4725eb35279cddca766b515d18823ef68630faf38b27cf0659fcb2c5ff3270ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc82e9b1ebc9beb056557a5603bc220df57c1b905af50300f98324ed1d87fe5->leave($__internal_ffc82e9b1ebc9beb056557a5603bc220df57c1b905af50300f98324ed1d87fe5_prof);

        
        $__internal_4725eb35279cddca766b515d18823ef68630faf38b27cf0659fcb2c5ff3270ed->leave($__internal_4725eb35279cddca766b515d18823ef68630faf38b27cf0659fcb2c5ff3270ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12db497b589034f8d9348303ad430f48b0930c89401e444e4242442f6b520e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12db497b589034f8d9348303ad430f48b0930c89401e444e4242442f6b520e6e->enter($__internal_12db497b589034f8d9348303ad430f48b0930c89401e444e4242442f6b520e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12e8e0ec1a4b14ed79072f072256f035107e8a96ec25954eff29d2273a77c778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e8e0ec1a4b14ed79072f072256f035107e8a96ec25954eff29d2273a77c778->enter($__internal_12e8e0ec1a4b14ed79072f072256f035107e8a96ec25954eff29d2273a77c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_12e8e0ec1a4b14ed79072f072256f035107e8a96ec25954eff29d2273a77c778->leave($__internal_12e8e0ec1a4b14ed79072f072256f035107e8a96ec25954eff29d2273a77c778_prof);

        
        $__internal_12db497b589034f8d9348303ad430f48b0930c89401e444e4242442f6b520e6e->leave($__internal_12db497b589034f8d9348303ad430f48b0930c89401e444e4242442f6b520e6e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
