<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd5938f749f8cf4680e0cf1a1f2d05a39c0b5e3270a4c96f8415a16051a37e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aefb9e5bd3b87645124734f823c9a8be627011b3eca0026f98f04020496598a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefb9e5bd3b87645124734f823c9a8be627011b3eca0026f98f04020496598a2->enter($__internal_aefb9e5bd3b87645124734f823c9a8be627011b3eca0026f98f04020496598a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c669211b270c4efa4cc513fc08c9c82304a96659bbd986490ab782c66852acbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c669211b270c4efa4cc513fc08c9c82304a96659bbd986490ab782c66852acbe->enter($__internal_c669211b270c4efa4cc513fc08c9c82304a96659bbd986490ab782c66852acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefb9e5bd3b87645124734f823c9a8be627011b3eca0026f98f04020496598a2->leave($__internal_aefb9e5bd3b87645124734f823c9a8be627011b3eca0026f98f04020496598a2_prof);

        
        $__internal_c669211b270c4efa4cc513fc08c9c82304a96659bbd986490ab782c66852acbe->leave($__internal_c669211b270c4efa4cc513fc08c9c82304a96659bbd986490ab782c66852acbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec00f53ea62e202b4cd93af39768b297ea733b861d3011914b82de0fc6fc671c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec00f53ea62e202b4cd93af39768b297ea733b861d3011914b82de0fc6fc671c->enter($__internal_ec00f53ea62e202b4cd93af39768b297ea733b861d3011914b82de0fc6fc671c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_009f86897669603140d7e1441e8a23b8c98d5aea89c78e8686c7d1772819f0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009f86897669603140d7e1441e8a23b8c98d5aea89c78e8686c7d1772819f0c4->enter($__internal_009f86897669603140d7e1441e8a23b8c98d5aea89c78e8686c7d1772819f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_009f86897669603140d7e1441e8a23b8c98d5aea89c78e8686c7d1772819f0c4->leave($__internal_009f86897669603140d7e1441e8a23b8c98d5aea89c78e8686c7d1772819f0c4_prof);

        
        $__internal_ec00f53ea62e202b4cd93af39768b297ea733b861d3011914b82de0fc6fc671c->leave($__internal_ec00f53ea62e202b4cd93af39768b297ea733b861d3011914b82de0fc6fc671c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb319f7a23df8c8d87ce0c0c31664434740b6fda0964e121d873726fe91c49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb319f7a23df8c8d87ce0c0c31664434740b6fda0964e121d873726fe91c49f->enter($__internal_9fb319f7a23df8c8d87ce0c0c31664434740b6fda0964e121d873726fe91c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44559a97ecc45250e4f56e848658f820a437a8da0128b8e3b5417bfe51fa1938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44559a97ecc45250e4f56e848658f820a437a8da0128b8e3b5417bfe51fa1938->enter($__internal_44559a97ecc45250e4f56e848658f820a437a8da0128b8e3b5417bfe51fa1938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_44559a97ecc45250e4f56e848658f820a437a8da0128b8e3b5417bfe51fa1938->leave($__internal_44559a97ecc45250e4f56e848658f820a437a8da0128b8e3b5417bfe51fa1938_prof);

        
        $__internal_9fb319f7a23df8c8d87ce0c0c31664434740b6fda0964e121d873726fe91c49f->leave($__internal_9fb319f7a23df8c8d87ce0c0c31664434740b6fda0964e121d873726fe91c49f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_50127da5b7dbb7a0eb234e3be941f6f8299e015c0d48ee8748f98cbf3b47147c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50127da5b7dbb7a0eb234e3be941f6f8299e015c0d48ee8748f98cbf3b47147c->enter($__internal_50127da5b7dbb7a0eb234e3be941f6f8299e015c0d48ee8748f98cbf3b47147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6d7757136f402cec2382d0245e7bfc769b7061951394419d2af65f39d6a4c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d7757136f402cec2382d0245e7bfc769b7061951394419d2af65f39d6a4c70->enter($__internal_b6d7757136f402cec2382d0245e7bfc769b7061951394419d2af65f39d6a4c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b6d7757136f402cec2382d0245e7bfc769b7061951394419d2af65f39d6a4c70->leave($__internal_b6d7757136f402cec2382d0245e7bfc769b7061951394419d2af65f39d6a4c70_prof);

        
        $__internal_50127da5b7dbb7a0eb234e3be941f6f8299e015c0d48ee8748f98cbf3b47147c->leave($__internal_50127da5b7dbb7a0eb234e3be941f6f8299e015c0d48ee8748f98cbf3b47147c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
