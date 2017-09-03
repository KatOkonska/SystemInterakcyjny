<?php

/* training/training_add.html.twig */
class __TwigTemplate_5906344493d542e7c89715ee37bb60f86b9c3f601bc1e85091e2c79b37ff17c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training/training_add.html.twig", 1);
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
        $__internal_03bd55e7046a248aed0833b5f6089846b199faadb1fac259255f7cb69bf60a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bd55e7046a248aed0833b5f6089846b199faadb1fac259255f7cb69bf60a3e->enter($__internal_03bd55e7046a248aed0833b5f6089846b199faadb1fac259255f7cb69bf60a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_add.html.twig"));

        $__internal_22b23ca229c1d38f1e69649873e70a679fdcac72cb6c170946d549b19e595357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b23ca229c1d38f1e69649873e70a679fdcac72cb6c170946d549b19e595357->enter($__internal_22b23ca229c1d38f1e69649873e70a679fdcac72cb6c170946d549b19e595357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03bd55e7046a248aed0833b5f6089846b199faadb1fac259255f7cb69bf60a3e->leave($__internal_03bd55e7046a248aed0833b5f6089846b199faadb1fac259255f7cb69bf60a3e_prof);

        
        $__internal_22b23ca229c1d38f1e69649873e70a679fdcac72cb6c170946d549b19e595357->leave($__internal_22b23ca229c1d38f1e69649873e70a679fdcac72cb6c170946d549b19e595357_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a49e19d1ab568a0407340f51a295139ebc722e9e1c0a3bffeaf9d128461815ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49e19d1ab568a0407340f51a295139ebc722e9e1c0a3bffeaf9d128461815ec->enter($__internal_a49e19d1ab568a0407340f51a295139ebc722e9e1c0a3bffeaf9d128461815ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ade32d88295645c4f30256b37940674b316a9a7a52c8c4f77fd9360720e29e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ade32d88295645c4f30256b37940674b316a9a7a52c8c4f77fd9360720e29e2->enter($__internal_5ade32d88295645c4f30256b37940674b316a9a7a52c8c4f77fd9360720e29e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training"), "html", null, true);
        
        $__internal_5ade32d88295645c4f30256b37940674b316a9a7a52c8c4f77fd9360720e29e2->leave($__internal_5ade32d88295645c4f30256b37940674b316a9a7a52c8c4f77fd9360720e29e2_prof);

        
        $__internal_a49e19d1ab568a0407340f51a295139ebc722e9e1c0a3bffeaf9d128461815ec->leave($__internal_a49e19d1ab568a0407340f51a295139ebc722e9e1c0a3bffeaf9d128461815ec_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4d6b7132345e94f9449fdb8e4e3b74ec7ef5e9fe0c859bb5a5bc16627f02cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d6b7132345e94f9449fdb8e4e3b74ec7ef5e9fe0c859bb5a5bc16627f02cb1->enter($__internal_e4d6b7132345e94f9449fdb8e4e3b74ec7ef5e9fe0c859bb5a5bc16627f02cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6766d1c47cb3e8379e41217b5edb43fb3dff3049be52bfd2f4edf1f63ab5d2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6766d1c47cb3e8379e41217b5edb43fb3dff3049be52bfd2f4edf1f63ab5d2e4->enter($__internal_6766d1c47cb3e8379e41217b5edb43fb3dff3049be52bfd2f4edf1f63ab5d2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.add_training"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_training")));
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
        
        $__internal_6766d1c47cb3e8379e41217b5edb43fb3dff3049be52bfd2f4edf1f63ab5d2e4->leave($__internal_6766d1c47cb3e8379e41217b5edb43fb3dff3049be52bfd2f4edf1f63ab5d2e4_prof);

        
        $__internal_e4d6b7132345e94f9449fdb8e4e3b74ec7ef5e9fe0c859bb5a5bc16627f02cb1->leave($__internal_e4d6b7132345e94f9449fdb8e4e3b74ec7ef5e9fe0c859bb5a5bc16627f02cb1_prof);

    }

    public function getTemplateName()
    {
        return "training/training_add.html.twig";
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

{% block title %}{{  'title.edit_training'|trans }}{% endblock %}

{% block content %}
    <h1>{{  'header.add_training'|trans }}</h1>

    {% if error is defined and error|length %}
        {{ error }}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('add_training') }) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.add'|trans}}\" class=\"button\" />
        {{ form_end(form) }}
    </div>

    {% if status %}
        <h2>{{ 'sent_to_database'|trans }}</h2>
    {% endif %}
{% endblock %}
", "training/training_add.html.twig", "/home/kasia/public_html/SI/templates/training/training_add.html.twig");
    }
}
