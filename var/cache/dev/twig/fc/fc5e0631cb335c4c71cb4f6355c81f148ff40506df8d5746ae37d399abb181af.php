<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c59d01c2a3369d4e74631bb0e4361d2999c59e993bf6abf915becf26e9baa94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59d01c2a3369d4e74631bb0e4361d2999c59e993bf6abf915becf26e9baa94a->enter($__internal_c59d01c2a3369d4e74631bb0e4361d2999c59e993bf6abf915becf26e9baa94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d722829aef2e53d703fa23ce53ebde97d9a2bf54127a1030aa44d5bb687bbf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d722829aef2e53d703fa23ce53ebde97d9a2bf54127a1030aa44d5bb687bbf23->enter($__internal_d722829aef2e53d703fa23ce53ebde97d9a2bf54127a1030aa44d5bb687bbf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c59d01c2a3369d4e74631bb0e4361d2999c59e993bf6abf915becf26e9baa94a->leave($__internal_c59d01c2a3369d4e74631bb0e4361d2999c59e993bf6abf915becf26e9baa94a_prof);

        
        $__internal_d722829aef2e53d703fa23ce53ebde97d9a2bf54127a1030aa44d5bb687bbf23->leave($__internal_d722829aef2e53d703fa23ce53ebde97d9a2bf54127a1030aa44d5bb687bbf23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90bff738286c91dd31d251d4a3bc515fe9817d0c3d79a967d34075ef06f5b1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bff738286c91dd31d251d4a3bc515fe9817d0c3d79a967d34075ef06f5b1c4->enter($__internal_90bff738286c91dd31d251d4a3bc515fe9817d0c3d79a967d34075ef06f5b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_346e0e20eec15d6f410c745f6bcaf676da990ad0f5336dd8a1214eed21d40141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346e0e20eec15d6f410c745f6bcaf676da990ad0f5336dd8a1214eed21d40141->enter($__internal_346e0e20eec15d6f410c745f6bcaf676da990ad0f5336dd8a1214eed21d40141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_346e0e20eec15d6f410c745f6bcaf676da990ad0f5336dd8a1214eed21d40141->leave($__internal_346e0e20eec15d6f410c745f6bcaf676da990ad0f5336dd8a1214eed21d40141_prof);

        
        $__internal_90bff738286c91dd31d251d4a3bc515fe9817d0c3d79a967d34075ef06f5b1c4->leave($__internal_90bff738286c91dd31d251d4a3bc515fe9817d0c3d79a967d34075ef06f5b1c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7848fe1eb93ed5376140610f6a579f64c0cc5d627886b04a4c59329f57c88bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7848fe1eb93ed5376140610f6a579f64c0cc5d627886b04a4c59329f57c88bd4->enter($__internal_7848fe1eb93ed5376140610f6a579f64c0cc5d627886b04a4c59329f57c88bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfd3eb83e3e3839efcb651f4a3c7ff7216aece4791ea9999f454099b8b2b1b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd3eb83e3e3839efcb651f4a3c7ff7216aece4791ea9999f454099b8b2b1b0f->enter($__internal_cfd3eb83e3e3839efcb651f4a3c7ff7216aece4791ea9999f454099b8b2b1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cfd3eb83e3e3839efcb651f4a3c7ff7216aece4791ea9999f454099b8b2b1b0f->leave($__internal_cfd3eb83e3e3839efcb651f4a3c7ff7216aece4791ea9999f454099b8b2b1b0f_prof);

        
        $__internal_7848fe1eb93ed5376140610f6a579f64c0cc5d627886b04a4c59329f57c88bd4->leave($__internal_7848fe1eb93ed5376140610f6a579f64c0cc5d627886b04a4c59329f57c88bd4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2f8b9fcc6f9d14cdb8c021549347f8950d595b8ede33c84c7e16105438e900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2f8b9fcc6f9d14cdb8c021549347f8950d595b8ede33c84c7e16105438e900->enter($__internal_0c2f8b9fcc6f9d14cdb8c021549347f8950d595b8ede33c84c7e16105438e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5218823f588588d708ae7888a29b7333a23e9390149c1693734839d45f6696b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5218823f588588d708ae7888a29b7333a23e9390149c1693734839d45f6696b3->enter($__internal_5218823f588588d708ae7888a29b7333a23e9390149c1693734839d45f6696b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5218823f588588d708ae7888a29b7333a23e9390149c1693734839d45f6696b3->leave($__internal_5218823f588588d708ae7888a29b7333a23e9390149c1693734839d45f6696b3_prof);

        
        $__internal_0c2f8b9fcc6f9d14cdb8c021549347f8950d595b8ede33c84c7e16105438e900->leave($__internal_0c2f8b9fcc6f9d14cdb8c021549347f8950d595b8ede33c84c7e16105438e900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\SystemesRepartis-Covoiturage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
