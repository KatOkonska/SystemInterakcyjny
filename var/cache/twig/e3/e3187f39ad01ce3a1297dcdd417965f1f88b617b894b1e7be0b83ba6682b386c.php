<?php

/* auth/login.html.twig */
class __TwigTemplate_5315114a6934440a80aa342a99e1b1b7f9808b683bb5533a60c18832468b31ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "auth/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beaee503d3dac33e56d692c4e7370afec14ef73ac1bdb7dd6ccd18dbae3d04a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaee503d3dac33e56d692c4e7370afec14ef73ac1bdb7dd6ccd18dbae3d04a0->enter($__internal_beaee503d3dac33e56d692c4e7370afec14ef73ac1bdb7dd6ccd18dbae3d04a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_5d84998f1b4b31ba67f914a4d266412ddf5d3858ba6d03afcaf7e1638f058d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d84998f1b4b31ba67f914a4d266412ddf5d3858ba6d03afcaf7e1638f058d96->enter($__internal_5d84998f1b4b31ba67f914a4d266412ddf5d3858ba6d03afcaf7e1638f058d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beaee503d3dac33e56d692c4e7370afec14ef73ac1bdb7dd6ccd18dbae3d04a0->leave($__internal_beaee503d3dac33e56d692c4e7370afec14ef73ac1bdb7dd6ccd18dbae3d04a0_prof);

        
        $__internal_5d84998f1b4b31ba67f914a4d266412ddf5d3858ba6d03afcaf7e1638f058d96->leave($__internal_5d84998f1b4b31ba67f914a4d266412ddf5d3858ba6d03afcaf7e1638f058d96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb3f8091ceee399ebf562596f27636b5ea8d887034852c696279b898299e6a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3f8091ceee399ebf562596f27636b5ea8d887034852c696279b898299e6a78->enter($__internal_bb3f8091ceee399ebf562596f27636b5ea8d887034852c696279b898299e6a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_221584ee349e8bef462922ed526b1210514fb58dd41e15b283a37d3bbc86773c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221584ee349e8bef462922ed526b1210514fb58dd41e15b283a37d3bbc86773c->enter($__internal_221584ee349e8bef462922ed526b1210514fb58dd41e15b283a37d3bbc86773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
        
        $__internal_221584ee349e8bef462922ed526b1210514fb58dd41e15b283a37d3bbc86773c->leave($__internal_221584ee349e8bef462922ed526b1210514fb58dd41e15b283a37d3bbc86773c_prof);

        
        $__internal_bb3f8091ceee399ebf562596f27636b5ea8d887034852c696279b898299e6a78->leave($__internal_bb3f8091ceee399ebf562596f27636b5ea8d887034852c696279b898299e6a78_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed1d1d823290d56f2e64084f831c9ce8f434eda601b805b41df49e1b496af1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1d1d823290d56f2e64084f831c9ce8f434eda601b805b41df49e1b496af1f0->enter($__internal_ed1d1d823290d56f2e64084f831c9ce8f434eda601b805b41df49e1b496af1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f73babd5dddd8cfc48aa0c3f3c299b8778da683a08d4596c352cf6dab80b6dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73babd5dddd8cfc48aa0c3f3c299b8778da683a08d4596c352cf6dab80b6dc0->enter($__internal_f73babd5dddd8cfc48aa0c3f3c299b8778da683a08d4596c352cf6dab80b6dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        // line 7
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? $this->getContext($context, "error"))))) {
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            // line 13
            echo "        ";
            // line 14
            echo "        ";
            // line 15
            echo "        ";
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "
    <div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login_check")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_f73babd5dddd8cfc48aa0c3f3c299b8778da683a08d4596c352cf6dab80b6dc0->leave($__internal_f73babd5dddd8cfc48aa0c3f3c299b8778da683a08d4596c352cf6dab80b6dc0_prof);

        
        $__internal_ed1d1d823290d56f2e64084f831c9ce8f434eda601b805b41df49e1b496af1f0->leave($__internal_ed1d1d823290d56f2e64084f831c9ce8f434eda601b805b41df49e1b496af1f0_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 18,  90 => 16,  88 => 15,  86 => 14,  84 => 13,  82 => 12,  80 => 11,  78 => 10,  76 => 9,  70 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ 'button.login'|trans}}{% endblock %}

{% block content %}
    {#{% form_theme form with ['bootstrap_3_horizontal_layout.html.twig', 'form/form_errors.html.twig'] %}#}
    <h1>{{ 'button.login'|trans}}</h1>

    {% if error is defined and error|length %}
        {#{% include 'default/_single_alert_message.html.twig' with {#}
        {#is_single_message: true,#}
        {#is_dismissible: false,#}
        {#type: 'danger',#}
        {#message: error,#}
        {#} %}#}
        {{error}}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('auth_login_check') }) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.login'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>
{% endblock %}

", "auth/login.html.twig", "/home/kasia/public_html/SI/templates/auth/login.html.twig");
    }
}
