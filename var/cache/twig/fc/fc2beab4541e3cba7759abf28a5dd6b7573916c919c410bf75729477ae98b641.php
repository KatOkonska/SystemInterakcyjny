<?php

/* training_day/training_day_add.html.twig */
class __TwigTemplate_e7d1e7fdbee326202d9f2885938b81954271ccb7f0bb5f3230cbb7b0b2c22452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training_day/training_day_add.html.twig", 1);
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
        $__internal_03d49673d98b57f9bd617bca9f1bf9c376e4f78b2505f24cf5d71967b082b7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d49673d98b57f9bd617bca9f1bf9c376e4f78b2505f24cf5d71967b082b7f0->enter($__internal_03d49673d98b57f9bd617bca9f1bf9c376e4f78b2505f24cf5d71967b082b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_add.html.twig"));

        $__internal_23e3e97555aa529a5a0956dc6b38b022411e56cd6fccafcdb4034879995083f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e3e97555aa529a5a0956dc6b38b022411e56cd6fccafcdb4034879995083f8->enter($__internal_23e3e97555aa529a5a0956dc6b38b022411e56cd6fccafcdb4034879995083f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d49673d98b57f9bd617bca9f1bf9c376e4f78b2505f24cf5d71967b082b7f0->leave($__internal_03d49673d98b57f9bd617bca9f1bf9c376e4f78b2505f24cf5d71967b082b7f0_prof);

        
        $__internal_23e3e97555aa529a5a0956dc6b38b022411e56cd6fccafcdb4034879995083f8->leave($__internal_23e3e97555aa529a5a0956dc6b38b022411e56cd6fccafcdb4034879995083f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6702657b3b4a34fe5b0c44a0c07093b63a13f2db91181154c999db1993d44c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6702657b3b4a34fe5b0c44a0c07093b63a13f2db91181154c999db1993d44c8->enter($__internal_a6702657b3b4a34fe5b0c44a0c07093b63a13f2db91181154c999db1993d44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d50ff306d72f562cbf6dccc5edc18a30524329c230cf0c3d50c935395022f3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50ff306d72f562cbf6dccc5edc18a30524329c230cf0c3d50c935395022f3dd->enter($__internal_d50ff306d72f562cbf6dccc5edc18a30524329c230cf0c3d50c935395022f3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_training_days"), "html", null, true);
        
        $__internal_d50ff306d72f562cbf6dccc5edc18a30524329c230cf0c3d50c935395022f3dd->leave($__internal_d50ff306d72f562cbf6dccc5edc18a30524329c230cf0c3d50c935395022f3dd_prof);

        
        $__internal_a6702657b3b4a34fe5b0c44a0c07093b63a13f2db91181154c999db1993d44c8->leave($__internal_a6702657b3b4a34fe5b0c44a0c07093b63a13f2db91181154c999db1993d44c8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_13c710a775b7685c3628ead006a5af67afe470bd19b4e8d6c19f3182847ef43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c710a775b7685c3628ead006a5af67afe470bd19b4e8d6c19f3182847ef43a->enter($__internal_13c710a775b7685c3628ead006a5af67afe470bd19b4e8d6c19f3182847ef43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a88304c19a87fa1ea03f6ad1af76fa84ad9e976668066290ca8c1b605540351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a88304c19a87fa1ea03f6ad1af76fa84ad9e976668066290ca8c1b605540351->enter($__internal_2a88304c19a87fa1ea03f6ad1af76fa84ad9e976668066290ca8c1b605540351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_training_days"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? $this->getContext($context, "error"))))) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
    ";
        }
        // line 11
        echo "
    <div>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_training_day")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.add"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    ";
        // line 19
        if (($context["status"] ?? $this->getContext($context, "status"))) {
            // line 20
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sent_to_database"), "html", null, true);
            echo "</h2>
    ";
        }
        
        $__internal_2a88304c19a87fa1ea03f6ad1af76fa84ad9e976668066290ca8c1b605540351->leave($__internal_2a88304c19a87fa1ea03f6ad1af76fa84ad9e976668066290ca8c1b605540351_prof);

        
        $__internal_13c710a775b7685c3628ead006a5af67afe470bd19b4e8d6c19f3182847ef43a->leave($__internal_13c710a775b7685c3628ead006a5af67afe470bd19b4e8d6c19f3182847ef43a_prof);

    }

    public function getTemplateName()
    {
        return "training_day/training_day_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 11,  76 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{'title.add_training_days'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.add_training_days'|trans }}</h1>

    {% if error is defined and error|length %}
        {{ error }}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('add_training_day') }) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.add'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>

    {% if status %}
        <h2>{{ 'sent_to_database'|trans }}</h2>
    {% endif %}
{% endblock %}
", "training_day/training_day_add.html.twig", "/home/kasia/public_html/SI/templates/training_day/training_day_add.html.twig");
    }
}
