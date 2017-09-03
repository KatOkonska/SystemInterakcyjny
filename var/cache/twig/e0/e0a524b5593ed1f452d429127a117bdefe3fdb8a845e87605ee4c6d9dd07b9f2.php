<?php

/* training_day/training_day_delete.html.twig */
class __TwigTemplate_6491fc7f40fa5a7c90ec3f55d86f76d8e6236a2642aa34b0f93e8ddd1b38ed90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training_day/training_day_delete.html.twig", 1);
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
        $__internal_bd1680cf398f4554e11c76873d4cbe0e842bf722a4558b163bbbb11ea8f085af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1680cf398f4554e11c76873d4cbe0e842bf722a4558b163bbbb11ea8f085af->enter($__internal_bd1680cf398f4554e11c76873d4cbe0e842bf722a4558b163bbbb11ea8f085af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_delete.html.twig"));

        $__internal_d1a4419c564d8a2d9538e8cea16f01401f57ee8b8f72a065a3bc1ae7ffdc56cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a4419c564d8a2d9538e8cea16f01401f57ee8b8f72a065a3bc1ae7ffdc56cc->enter($__internal_d1a4419c564d8a2d9538e8cea16f01401f57ee8b8f72a065a3bc1ae7ffdc56cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1680cf398f4554e11c76873d4cbe0e842bf722a4558b163bbbb11ea8f085af->leave($__internal_bd1680cf398f4554e11c76873d4cbe0e842bf722a4558b163bbbb11ea8f085af_prof);

        
        $__internal_d1a4419c564d8a2d9538e8cea16f01401f57ee8b8f72a065a3bc1ae7ffdc56cc->leave($__internal_d1a4419c564d8a2d9538e8cea16f01401f57ee8b8f72a065a3bc1ae7ffdc56cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baa6a580cd0a2a484251d6c44b9325a0a488f1ff3949b0c633c44e7843940f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa6a580cd0a2a484251d6c44b9325a0a488f1ff3949b0c633c44e7843940f87->enter($__internal_baa6a580cd0a2a484251d6c44b9325a0a488f1ff3949b0c633c44e7843940f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e2c4348a013cac53a592b2b230435496620cf271277bdad1a1dd77841a7d06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2c4348a013cac53a592b2b230435496620cf271277bdad1a1dd77841a7d06e->enter($__internal_5e2c4348a013cac53a592b2b230435496620cf271277bdad1a1dd77841a7d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_training_days"), "html", null, true);
        
        $__internal_5e2c4348a013cac53a592b2b230435496620cf271277bdad1a1dd77841a7d06e->leave($__internal_5e2c4348a013cac53a592b2b230435496620cf271277bdad1a1dd77841a7d06e_prof);

        
        $__internal_baa6a580cd0a2a484251d6c44b9325a0a488f1ff3949b0c633c44e7843940f87->leave($__internal_baa6a580cd0a2a484251d6c44b9325a0a488f1ff3949b0c633c44e7843940f87_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b80d1c294eec599a1c2ad80f001f46b1ae9f04dd46b37e8105da37c3f3e51ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80d1c294eec599a1c2ad80f001f46b1ae9f04dd46b37e8105da37c3f3e51ae4->enter($__internal_b80d1c294eec599a1c2ad80f001f46b1ae9f04dd46b37e8105da37c3f3e51ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4d1d2db197d2472b35c816604b7dddf304c04e483e3c3807a99d1a7d9141d917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1d2db197d2472b35c816604b7dddf304c04e483e3c3807a99d1a7d9141d917->enter($__internal_4d1d2db197d2472b35c816604b7dddf304c04e483e3c3807a99d1a7d9141d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_training_days"), "html", null, true);
        echo "</h1>
    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.delete_training_day"), "html", null, true);
        echo "</h2>

    ";
        // line 9
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? $this->getContext($context, "error"))))) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "
    <div>
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_training_day", array("id" => ($context["id"] ?? $this->getContext($context, "id"))))));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.delete"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_4d1d2db197d2472b35c816604b7dddf304c04e483e3c3807a99d1a7d9141d917->leave($__internal_4d1d2db197d2472b35c816604b7dddf304c04e483e3c3807a99d1a7d9141d917_prof);

        
        $__internal_b80d1c294eec599a1c2ad80f001f46b1ae9f04dd46b37e8105da37c3f3e51ae4->leave($__internal_b80d1c294eec599a1c2ad80f001f46b1ae9f04dd46b37e8105da37c3f3e51ae4_prof);

    }

    public function getTemplateName()
    {
        return "training_day/training_day_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 17,  98 => 16,  94 => 15,  90 => 14,  86 => 12,  80 => 10,  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.delete_training_days'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.delete_training_days'|trans }}</h1>
    <h2>{{ 'header.delete_training_day'|trans}}</h2>

    {% if error is defined and error|length %}
        {{ error }}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('delete_training_day', {'id':id})}) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.delete'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>
{% endblock %}

", "training_day/training_day_delete.html.twig", "/home/kasia/public_html/SI/templates/training_day/training_day_delete.html.twig");
    }
}
