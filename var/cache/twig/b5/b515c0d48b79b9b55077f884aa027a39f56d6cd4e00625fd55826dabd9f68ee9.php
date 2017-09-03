<?php

/* admin/show_all_training_days.html.twig */
class __TwigTemplate_cc5e8cb2d2bb27261b2825ba55d9f846b8856d334080d7a84a2b0add2adf6d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/show_all_training_days.html.twig", 1);
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
        $__internal_a2c9c56ff23773170edebca56738ff428059e54602174ff2fe58aa06799ae3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c9c56ff23773170edebca56738ff428059e54602174ff2fe58aa06799ae3c5->enter($__internal_a2c9c56ff23773170edebca56738ff428059e54602174ff2fe58aa06799ae3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_training_days.html.twig"));

        $__internal_0e77959ec8015c9c4896789756c62542131ff515d16ee9adc511f69c8cc1167e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e77959ec8015c9c4896789756c62542131ff515d16ee9adc511f69c8cc1167e->enter($__internal_0e77959ec8015c9c4896789756c62542131ff515d16ee9adc511f69c8cc1167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_training_days.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c9c56ff23773170edebca56738ff428059e54602174ff2fe58aa06799ae3c5->leave($__internal_a2c9c56ff23773170edebca56738ff428059e54602174ff2fe58aa06799ae3c5_prof);

        
        $__internal_0e77959ec8015c9c4896789756c62542131ff515d16ee9adc511f69c8cc1167e->leave($__internal_0e77959ec8015c9c4896789756c62542131ff515d16ee9adc511f69c8cc1167e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70862e0644a82a38e6fffba044cfab3cf5089daa170a592fa9886d148c61a807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70862e0644a82a38e6fffba044cfab3cf5089daa170a592fa9886d148c61a807->enter($__internal_70862e0644a82a38e6fffba044cfab3cf5089daa170a592fa9886d148c61a807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_760e68bdb9b8068a2ddac3ee604aaae776966d575b2e100da574f92ed1817953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760e68bdb9b8068a2ddac3ee604aaae776966d575b2e100da574f92ed1817953->enter($__internal_760e68bdb9b8068a2ddac3ee604aaae776966d575b2e100da574f92ed1817953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "'To Twoi użytkownicy";
        
        $__internal_760e68bdb9b8068a2ddac3ee604aaae776966d575b2e100da574f92ed1817953->leave($__internal_760e68bdb9b8068a2ddac3ee604aaae776966d575b2e100da574f92ed1817953_prof);

        
        $__internal_70862e0644a82a38e6fffba044cfab3cf5089daa170a592fa9886d148c61a807->leave($__internal_70862e0644a82a38e6fffba044cfab3cf5089daa170a592fa9886d148c61a807_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_216476ab90fdd7b78b41cb648a75600abff488d52a4dccbc980073eee20e7077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216476ab90fdd7b78b41cb648a75600abff488d52a4dccbc980073eee20e7077->enter($__internal_216476ab90fdd7b78b41cb648a75600abff488d52a4dccbc980073eee20e7077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6d49a3a8167992be6f7001703903e5e434a3db162100c5fe4ec0b34ede138dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d49a3a8167992be6f7001703903e5e434a3db162100c5fe4ec0b34ede138dea->enter($__internal_6d49a3a8167992be6f7001703903e5e434a3db162100c5fe4ec0b34ede138dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_all_training_days"), "html", null, true);
        echo "</h1>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.training_day"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.user_id"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.edit"), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.delete"), "html", null, true);
        echo "</th>

        </tr>
        </thead>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Training_day_day_number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "User_ID", array()), "html", null, true);
            echo "</td>


                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_training_day", array("id" => $this->getAttribute($context["data"], "Training_day_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
            echo "
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_training_day", array("id" => $this->getAttribute($context["data"], "Training_day_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.delete"), "html", null, true);
            echo "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    </table>

";
        
        $__internal_6d49a3a8167992be6f7001703903e5e434a3db162100c5fe4ec0b34ede138dea->leave($__internal_6d49a3a8167992be6f7001703903e5e434a3db162100c5fe4ec0b34ede138dea_prof);

        
        $__internal_216476ab90fdd7b78b41cb648a75600abff488d52a4dccbc980073eee20e7077->leave($__internal_216476ab90fdd7b78b41cb648a75600abff488d52a4dccbc980073eee20e7077_prof);

    }

    public function getTemplateName()
    {
        return "admin/show_all_training_days.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  136 => 34,  130 => 33,  122 => 28,  116 => 27,  109 => 23,  105 => 22,  102 => 21,  98 => 20,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}'To Twoi użytkownicy{% endblock %}

{% block content %}
    <h1>{{'title.list_all_training_days'|trans }}</h1>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>{{ 'table.training_day'|trans }}</th>
            <th>{{ 'table.user_id'|trans }}</th>
            <th>{{ 'table.edit'|trans }}</th>
            <th>{{ 'table.delete'|trans }}</th>

        </tr>
        </thead>

        {% for data in table %}
            <tr>
                <td>{{ data.Training_day_day_number }}</td>
                <td>{{ data.User_ID }}</td>


                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('edit_training_day', {'id': data.Training_day_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.change'|trans }}
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('delete_training_day', {'id': data.Training_day_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.delete'|trans }}
                    </a>
                </td>
            </tr>
        {% endfor %}

    </table>

{% endblock %}", "admin/show_all_training_days.html.twig", "/home/kasia/public_html/SI/templates/admin/show_all_training_days.html.twig");
    }
}
