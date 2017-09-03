<?php

/* calendar.html.twig */
class __TwigTemplate_913f88625e5c1c76297ab89f216a401c720bf160f7a1e9c18eba9288bf5fc78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "calendar.html.twig", 1);
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
        $__internal_39c854f1dfb6da6cf446026a8cfbcc802b23845e079b7db258de3557d5ef2fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c854f1dfb6da6cf446026a8cfbcc802b23845e079b7db258de3557d5ef2fdd->enter($__internal_39c854f1dfb6da6cf446026a8cfbcc802b23845e079b7db258de3557d5ef2fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        $__internal_bc1bc3b4eddb1bb7a7f8313dc4d1da1eb8516412205870372717afa011431920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1bc3b4eddb1bb7a7f8313dc4d1da1eb8516412205870372717afa011431920->enter($__internal_bc1bc3b4eddb1bb7a7f8313dc4d1da1eb8516412205870372717afa011431920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c854f1dfb6da6cf446026a8cfbcc802b23845e079b7db258de3557d5ef2fdd->leave($__internal_39c854f1dfb6da6cf446026a8cfbcc802b23845e079b7db258de3557d5ef2fdd_prof);

        
        $__internal_bc1bc3b4eddb1bb7a7f8313dc4d1da1eb8516412205870372717afa011431920->leave($__internal_bc1bc3b4eddb1bb7a7f8313dc4d1da1eb8516412205870372717afa011431920_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6338ca7a800231cf73805433cd6d26c6276e201eb2a713d69f4ce0b5d84abacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6338ca7a800231cf73805433cd6d26c6276e201eb2a713d69f4ce0b5d84abacf->enter($__internal_6338ca7a800231cf73805433cd6d26c6276e201eb2a713d69f4ce0b5d84abacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edbea90ed400650754d55c5dbc01dd6da14167a78886808798c36e2c8e72a4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbea90ed400650754d55c5dbc01dd6da14167a78886808798c36e2c8e72a4b6->enter($__internal_edbea90ed400650754d55c5dbc01dd6da14167a78886808798c36e2c8e72a4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "'To Twój Kalendarz'";
        
        $__internal_edbea90ed400650754d55c5dbc01dd6da14167a78886808798c36e2c8e72a4b6->leave($__internal_edbea90ed400650754d55c5dbc01dd6da14167a78886808798c36e2c8e72a4b6_prof);

        
        $__internal_6338ca7a800231cf73805433cd6d26c6276e201eb2a713d69f4ce0b5d84abacf->leave($__internal_6338ca7a800231cf73805433cd6d26c6276e201eb2a713d69f4ce0b5d84abacf_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d96769d6868fe9629ad90a97746f4c89c1384f6d0753276700e3077fa1927ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d96769d6868fe9629ad90a97746f4c89c1384f6d0753276700e3077fa1927ef->enter($__internal_1d96769d6868fe9629ad90a97746f4c89c1384f6d0753276700e3077fa1927ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_871730eee0d2590de8a7a61f1f2b75022eb2e2fffb0f71c946097c6d62060463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871730eee0d2590de8a7a61f1f2b75022eb2e2fffb0f71c946097c6d62060463->enter($__internal_871730eee0d2590de8a7a61f1f2b75022eb2e2fffb0f71c946097c6d62060463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Oto Twój kalendarz treningów z ostatniego miesiąca</h1>

";
        // line 9
        echo "
    <h2>Dni treningu</h2>
    <tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendar"] ?? $this->getContext($context, "calendar")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 13
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.training_day"), "html", null, true);
            echo "</h3>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Training_day_day_number", array()), "html", null, true);
            echo "</td>
             <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tr>

";
        // line 20
        echo "
";
        
        $__internal_871730eee0d2590de8a7a61f1f2b75022eb2e2fffb0f71c946097c6d62060463->leave($__internal_871730eee0d2590de8a7a61f1f2b75022eb2e2fffb0f71c946097c6d62060463_prof);

        
        $__internal_1d96769d6868fe9629ad90a97746f4c89c1384f6d0753276700e3077fa1927ef->leave($__internal_1d96769d6868fe9629ad90a97746f4c89c1384f6d0753276700e3077fa1927ef_prof);

    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 17,  86 => 14,  81 => 13,  77 => 12,  72 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}'To Twój Kalendarz'{% endblock %}

{% block content %}
    <h1>Oto Twój kalendarz treningów z ostatniego miesiąca</h1>

{#{{ dump(calendar) }}#}

    <h2>Dni treningu</h2>
    <tr>
        {% for data in calendar %}
            <h3>{{  'table.training_day'|trans }}</h3>
            <td>{{ data.Training_day_day_number }}</td>
             <br>
        {% endfor %}
    </tr>

{#{{ currentDate}}#}

{% endblock %}", "calendar.html.twig", "/home/kasia/public_html/SI/templates/calendar.html.twig");
    }
}
