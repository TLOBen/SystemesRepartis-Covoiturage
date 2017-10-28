<?php

/* default/index.html.twig */
class __TwigTemplate_65d87c3f9022c20ccd1994a53497b1a778e94a59350b8e518f344f5da5e8c04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3141c2f002f3b13594eb701f8d9643424aff14d6bfecf01027046ab038366ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3141c2f002f3b13594eb701f8d9643424aff14d6bfecf01027046ab038366ce8->enter($__internal_3141c2f002f3b13594eb701f8d9643424aff14d6bfecf01027046ab038366ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_33a97d978eae4f3ee0a1071576fde08642c4fba32dc3084529721c390455e45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a97d978eae4f3ee0a1071576fde08642c4fba32dc3084529721c390455e45e->enter($__internal_33a97d978eae4f3ee0a1071576fde08642c4fba32dc3084529721c390455e45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3141c2f002f3b13594eb701f8d9643424aff14d6bfecf01027046ab038366ce8->leave($__internal_3141c2f002f3b13594eb701f8d9643424aff14d6bfecf01027046ab038366ce8_prof);

        
        $__internal_33a97d978eae4f3ee0a1071576fde08642c4fba32dc3084529721c390455e45e->leave($__internal_33a97d978eae4f3ee0a1071576fde08642c4fba32dc3084529721c390455e45e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5754c38f4434c4f04cc801f026f0d9a8a2cd3bf97bff3e21e9544c458781ce2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5754c38f4434c4f04cc801f026f0d9a8a2cd3bf97bff3e21e9544c458781ce2c->enter($__internal_5754c38f4434c4f04cc801f026f0d9a8a2cd3bf97bff3e21e9544c458781ce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75cc788708ed4cd113e2896938ca948eed396163b63529614c69104b66b5884c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cc788708ed4cd113e2896938ca948eed396163b63529614c69104b66b5884c->enter($__internal_75cc788708ed4cd113e2896938ca948eed396163b63529614c69104b66b5884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Success</strong>
                    </div>
                    
                    <div class=\"panel-body\">
                        <a class=\"btn btn-primary\" href=\"logout\">
                            <i class=\"glyphicon glyphicon-log-out\"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_75cc788708ed4cd113e2896938ca948eed396163b63529614c69104b66b5884c->leave($__internal_75cc788708ed4cd113e2896938ca948eed396163b63529614c69104b66b5884c_prof);

        
        $__internal_5754c38f4434c4f04cc801f026f0d9a8a2cd3bf97bff3e21e9544c458781ce2c->leave($__internal_5754c38f4434c4f04cc801f026f0d9a8a2cd3bf97bff3e21e9544c458781ce2c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Success</strong>
                    </div>
                    
                    <div class=\"panel-body\">
                        <a class=\"btn btn-primary\" href=\"logout\">
                            <i class=\"glyphicon glyphicon-log-out\"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\app\\Resources\\views\\default\\index.html.twig");
    }
}
