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
        $__internal_c07ddae7366b0f74919ec1600b41e52f426fe612e3b782e6e4d00cf6f744421c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07ddae7366b0f74919ec1600b41e52f426fe612e3b782e6e4d00cf6f744421c->enter($__internal_c07ddae7366b0f74919ec1600b41e52f426fe612e3b782e6e4d00cf6f744421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ac39bed0d47ae4a778bf0fec40cc9b3b06166dc8725e1ea0ce5841fb51963a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac39bed0d47ae4a778bf0fec40cc9b3b06166dc8725e1ea0ce5841fb51963a5c->enter($__internal_ac39bed0d47ae4a778bf0fec40cc9b3b06166dc8725e1ea0ce5841fb51963a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c07ddae7366b0f74919ec1600b41e52f426fe612e3b782e6e4d00cf6f744421c->leave($__internal_c07ddae7366b0f74919ec1600b41e52f426fe612e3b782e6e4d00cf6f744421c_prof);

        
        $__internal_ac39bed0d47ae4a778bf0fec40cc9b3b06166dc8725e1ea0ce5841fb51963a5c->leave($__internal_ac39bed0d47ae4a778bf0fec40cc9b3b06166dc8725e1ea0ce5841fb51963a5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa9b9f59d809c809aa2305c513d0823d5c5b352c46d8ecb15275fee9033c5f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9b9f59d809c809aa2305c513d0823d5c5b352c46d8ecb15275fee9033c5f1b->enter($__internal_aa9b9f59d809c809aa2305c513d0823d5c5b352c46d8ecb15275fee9033c5f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a567b736cac8a9b27de8777a0136bcb55c1c84889ad1761d7c57fbc0f8a797b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a567b736cac8a9b27de8777a0136bcb55c1c84889ad1761d7c57fbc0f8a797b->enter($__internal_9a567b736cac8a9b27de8777a0136bcb55c1c84889ad1761d7c57fbc0f8a797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a567b736cac8a9b27de8777a0136bcb55c1c84889ad1761d7c57fbc0f8a797b->leave($__internal_9a567b736cac8a9b27de8777a0136bcb55c1c84889ad1761d7c57fbc0f8a797b_prof);

        
        $__internal_aa9b9f59d809c809aa2305c513d0823d5c5b352c46d8ecb15275fee9033c5f1b->leave($__internal_aa9b9f59d809c809aa2305c513d0823d5c5b352c46d8ecb15275fee9033c5f1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81eebcceaf258bc1347f9b16c79453e7d5a3d454cb815a81714a6b8f81d7b99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81eebcceaf258bc1347f9b16c79453e7d5a3d454cb815a81714a6b8f81d7b99c->enter($__internal_81eebcceaf258bc1347f9b16c79453e7d5a3d454cb815a81714a6b8f81d7b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_754d3f5b4965efcc35d8e45b10c161cfe21106b693e097fbe19dabf6d49b5dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754d3f5b4965efcc35d8e45b10c161cfe21106b693e097fbe19dabf6d49b5dd6->enter($__internal_754d3f5b4965efcc35d8e45b10c161cfe21106b693e097fbe19dabf6d49b5dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_754d3f5b4965efcc35d8e45b10c161cfe21106b693e097fbe19dabf6d49b5dd6->leave($__internal_754d3f5b4965efcc35d8e45b10c161cfe21106b693e097fbe19dabf6d49b5dd6_prof);

        
        $__internal_81eebcceaf258bc1347f9b16c79453e7d5a3d454cb815a81714a6b8f81d7b99c->leave($__internal_81eebcceaf258bc1347f9b16c79453e7d5a3d454cb815a81714a6b8f81d7b99c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6064b7b82cf588886200a01650c353b8bcb3769f2192aa0a340ba6b3b1dd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6064b7b82cf588886200a01650c353b8bcb3769f2192aa0a340ba6b3b1dd87->enter($__internal_8b6064b7b82cf588886200a01650c353b8bcb3769f2192aa0a340ba6b3b1dd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8243d9013ccab50daeeeec134b781299f31c2a94fde630a1057a9c04a7749c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8243d9013ccab50daeeeec134b781299f31c2a94fde630a1057a9c04a7749c7a->enter($__internal_8243d9013ccab50daeeeec134b781299f31c2a94fde630a1057a9c04a7749c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8243d9013ccab50daeeeec134b781299f31c2a94fde630a1057a9c04a7749c7a->leave($__internal_8243d9013ccab50daeeeec134b781299f31c2a94fde630a1057a9c04a7749c7a_prof);

        
        $__internal_8b6064b7b82cf588886200a01650c353b8bcb3769f2192aa0a340ba6b3b1dd87->leave($__internal_8b6064b7b82cf588886200a01650c353b8bcb3769f2192aa0a340ba6b3b1dd87_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1ba8b693d232d8402be1560b4dcd017b33c8ceb931fba546079bf4bbe4c7f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ba8b693d232d8402be1560b4dcd017b33c8ceb931fba546079bf4bbe4c7f72->enter($__internal_d1ba8b693d232d8402be1560b4dcd017b33c8ceb931fba546079bf4bbe4c7f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4361e06902011bd69000c65404091ef82e6d23debbe742bbfbfc8b881787d3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4361e06902011bd69000c65404091ef82e6d23debbe742bbfbfc8b881787d3ce->enter($__internal_4361e06902011bd69000c65404091ef82e6d23debbe742bbfbfc8b881787d3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4361e06902011bd69000c65404091ef82e6d23debbe742bbfbfc8b881787d3ce->leave($__internal_4361e06902011bd69000c65404091ef82e6d23debbe742bbfbfc8b881787d3ce_prof);

        
        $__internal_d1ba8b693d232d8402be1560b4dcd017b33c8ceb931fba546079bf4bbe4c7f72->leave($__internal_d1ba8b693d232d8402be1560b4dcd017b33c8ceb931fba546079bf4bbe4c7f72_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\app\\Resources\\views\\base.html.twig");
    }
}
