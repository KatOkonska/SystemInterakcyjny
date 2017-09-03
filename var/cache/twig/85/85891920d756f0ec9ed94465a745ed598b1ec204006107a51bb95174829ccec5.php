<?php

/* admin/show_all_trainings.html.twig */
class __TwigTemplate_85d93b2d1822bc3bf22fbe7096b3fade34f45cb2d5440b65fce95b13eb52e895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/show_all_trainings.html.twig", 1);
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
        $__internal_01267db275d9c61406707bccd890c27aaf83f22f7ba1578e95f5805ec6344a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01267db275d9c61406707bccd890c27aaf83f22f7ba1578e95f5805ec6344a91->enter($__internal_01267db275d9c61406707bccd890c27aaf83f22f7ba1578e95f5805ec6344a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_trainings.html.twig"));

        $__internal_220f25e7ad0e1504f6c7b8e805d98a11c937c6a3ff57ff84c6567cbd8a39cb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220f25e7ad0e1504f6c7b8e805d98a11c937c6a3ff57ff84c6567cbd8a39cb0d->enter($__internal_220f25e7ad0e1504f6c7b8e805d98a11c937c6a3ff57ff84c6567cbd8a39cb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_trainings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01267db275d9c61406707bccd890c27aaf83f22f7ba1578e95f5805ec6344a91->leave($__internal_01267db275d9c61406707bccd890c27aaf83f22f7ba1578e95f5805ec6344a91_prof);

        
        $__internal_220f25e7ad0e1504f6c7b8e805d98a11c937c6a3ff57ff84c6567cbd8a39cb0d->leave($__internal_220f25e7ad0e1504f6c7b8e805d98a11c937c6a3ff57ff84c6567cbd8a39cb0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03412a9cfa1d6205b15bb1426dd489b18e45b99141aeeb4dc958de47559847ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03412a9cfa1d6205b15bb1426dd489b18e45b99141aeeb4dc958de47559847ab->enter($__internal_03412a9cfa1d6205b15bb1426dd489b18e45b99141aeeb4dc958de47559847ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a61d124615824db32c41fffdb5d9a74103c92bed0b22913f85a0d6c1e4a0524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a61d124615824db32c41fffdb5d9a74103c92bed0b22913f85a0d6c1e4a0524->enter($__internal_6a61d124615824db32c41fffdb5d9a74103c92bed0b22913f85a0d6c1e4a0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_all_trainings"), "html", null, true);
        
        $__internal_6a61d124615824db32c41fffdb5d9a74103c92bed0b22913f85a0d6c1e4a0524->leave($__internal_6a61d124615824db32c41fffdb5d9a74103c92bed0b22913f85a0d6c1e4a0524_prof);

        
        $__internal_03412a9cfa1d6205b15bb1426dd489b18e45b99141aeeb4dc958de47559847ab->leave($__internal_03412a9cfa1d6205b15bb1426dd489b18e45b99141aeeb4dc958de47559847ab_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d4280edba4488d5e7eb25bc10132d3c8e4a5dfa096fc36284e5d430234c61df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4280edba4488d5e7eb25bc10132d3c8e4a5dfa096fc36284e5d430234c61df->enter($__internal_9d4280edba4488d5e7eb25bc10132d3c8e4a5dfa096fc36284e5d430234c61df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9b1351a9c3461ddf9dfc739b71adb1e2669baedce4942b52145ba563bf217800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1351a9c3461ddf9dfc739b71adb1e2669baedce4942b52145ba563bf217800->enter($__internal_9b1351a9c3461ddf9dfc739b71adb1e2669baedce4942b52145ba563bf217800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_all_trainings"), "html", null, true);
        echo "</h1>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_time"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_kcal"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_distance"), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_name"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.user_id"), "html", null, true);
        echo "</th>
            <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.edit"), "html", null, true);
        echo "</th>
            <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.delete"), "html", null, true);
        echo "</th>

        </tr>
        </thead>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_time", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_kcal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_distance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_Name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "User_ID", array()), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_training", array("id" => $this->getAttribute($context["data"], "Sport_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
            echo "
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_training", array("id" => $this->getAttribute($context["data"], "Sport_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 39
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
        // line 44
        echo "
    </table>

";
        
        $__internal_9b1351a9c3461ddf9dfc739b71adb1e2669baedce4942b52145ba563bf217800->leave($__internal_9b1351a9c3461ddf9dfc739b71adb1e2669baedce4942b52145ba563bf217800_prof);

        
        $__internal_9d4280edba4488d5e7eb25bc10132d3c8e4a5dfa096fc36284e5d430234c61df->leave($__internal_9d4280edba4488d5e7eb25bc10132d3c8e4a5dfa096fc36284e5d430234c61df_prof);

    }

    public function getTemplateName()
    {
        return "admin/show_all_trainings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  159 => 39,  153 => 38,  145 => 33,  139 => 32,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{'title.list_all_trainings'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.list_all_trainings'|trans }}</h1>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>{{ 'table.sport_time'|trans }}</th>
            <th>{{ 'table.sport_kcal'|trans }}</th>
            <th>{{ 'table.sport_distance'|trans }}</th>
            <th>{{ 'table.sport_name'|trans }}</th>
            <th>{{ 'table.user_id'|trans }}</th>
            <th>{{ 'table.edit'|trans }}</th>
            <th>{{ 'table.delete'|trans }}</th>

        </tr>
        </thead>

        {% for data in table %}
            <tr>
                <td>{{ data.Sport_time }}</td>
                <td>{{ data.Sport_kcal }}</td>
                <td>{{ data.Sport_distance }}</td>
                <td>{{ data.Sport_Name }}</td>
                <td>{{ data.User_ID }}</td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('edit_training', {'id': data.Sport_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.change'|trans }}
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('delete_training', {'id':data.Sport_ID})}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.delete'|trans }}
                    </a>
                </td>
            </tr>
        {% endfor %}

    </table>

{% endblock %}", "admin/show_all_trainings.html.twig", "/home/kasia/public_html/SI/templates/admin/show_all_trainings.html.twig");
    }
}
