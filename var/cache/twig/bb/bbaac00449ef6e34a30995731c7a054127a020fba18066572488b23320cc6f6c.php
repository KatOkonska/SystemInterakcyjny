<?php

/* admin/show_all_users.html.twig */
class __TwigTemplate_c683226428a223baa957bf19a45046d4a02b1d7062bfd40b2b26ffaf0769a224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/show_all_users.html.twig", 1);
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
        $__internal_4176d4457498f7b928a3fd8861bfcfeddac10d9a789b0bcd38c6f727685031f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4176d4457498f7b928a3fd8861bfcfeddac10d9a789b0bcd38c6f727685031f2->enter($__internal_4176d4457498f7b928a3fd8861bfcfeddac10d9a789b0bcd38c6f727685031f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_users.html.twig"));

        $__internal_318195c56499df3ba7b46bb4b5a400736403f8f895040f15076a1e3d9b34c072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318195c56499df3ba7b46bb4b5a400736403f8f895040f15076a1e3d9b34c072->enter($__internal_318195c56499df3ba7b46bb4b5a400736403f8f895040f15076a1e3d9b34c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_all_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4176d4457498f7b928a3fd8861bfcfeddac10d9a789b0bcd38c6f727685031f2->leave($__internal_4176d4457498f7b928a3fd8861bfcfeddac10d9a789b0bcd38c6f727685031f2_prof);

        
        $__internal_318195c56499df3ba7b46bb4b5a400736403f8f895040f15076a1e3d9b34c072->leave($__internal_318195c56499df3ba7b46bb4b5a400736403f8f895040f15076a1e3d9b34c072_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_657c19be946ab56b20c898135337244ed369912f70055a2db692aef11f7aa72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657c19be946ab56b20c898135337244ed369912f70055a2db692aef11f7aa72e->enter($__internal_657c19be946ab56b20c898135337244ed369912f70055a2db692aef11f7aa72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f3d17bc154c082a65547f29defe2e2529b0d77e9f66cad814de35d9cd966f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3d17bc154c082a65547f29defe2e2529b0d77e9f66cad814de35d9cd966f03->enter($__internal_5f3d17bc154c082a65547f29defe2e2529b0d77e9f66cad814de35d9cd966f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_all_users"), "html", null, true);
        
        $__internal_5f3d17bc154c082a65547f29defe2e2529b0d77e9f66cad814de35d9cd966f03->leave($__internal_5f3d17bc154c082a65547f29defe2e2529b0d77e9f66cad814de35d9cd966f03_prof);

        
        $__internal_657c19be946ab56b20c898135337244ed369912f70055a2db692aef11f7aa72e->leave($__internal_657c19be946ab56b20c898135337244ed369912f70055a2db692aef11f7aa72e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ba3759dd33e55d655af8cc2286a3c1864fb5c4edf65bf7dd6ff15a7080c3a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba3759dd33e55d655af8cc2286a3c1864fb5c4edf65bf7dd6ff15a7080c3a07->enter($__internal_8ba3759dd33e55d655af8cc2286a3c1864fb5c4edf65bf7dd6ff15a7080c3a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b2e268ba263e77fcf5f885ed79d35bcc7002d2c45e59dff29b21c9c0b9301c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e268ba263e77fcf5f885ed79d35bcc7002d2c45e59dff29b21c9c0b9301c26->enter($__internal_b2e268ba263e77fcf5f885ed79d35bcc7002d2c45e59dff29b21c9c0b9301c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_all_users"), "html", null, true);
        echo "</h1>
    <br>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.user_id"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.login"), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.password"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.role"), "html", null, true);
        echo "</th>
            <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.edit"), "html", null, true);
        echo "</th>
            <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.change_password"), "html", null, true);
        echo "</th>
            <th>";
        // line 19
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "User_ID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "User_login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "User_password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Role_ID", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_user", array("id" => $this->getAttribute($context["data"], "User_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_password", array("id" => $this->getAttribute($context["data"], "User_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
            echo "
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_user", array("id" => $this->getAttribute($context["data"], "User_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 42
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
        // line 47
        echo "
    </table>

";
        
        $__internal_b2e268ba263e77fcf5f885ed79d35bcc7002d2c45e59dff29b21c9c0b9301c26->leave($__internal_b2e268ba263e77fcf5f885ed79d35bcc7002d2c45e59dff29b21c9c0b9301c26_prof);

        
        $__internal_8ba3759dd33e55d655af8cc2286a3c1864fb5c4edf65bf7dd6ff15a7080c3a07->leave($__internal_8ba3759dd33e55d655af8cc2286a3c1864fb5c4edf65bf7dd6ff15a7080c3a07_prof);

    }

    public function getTemplateName()
    {
        return "admin/show_all_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 47,  167 => 42,  161 => 41,  153 => 36,  147 => 35,  140 => 31,  134 => 30,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{'title.list_all_users'|trans }}{% endblock %}

{% block content %}
    <h1>{{'title.list_all_users'|trans }}</h1>
    <br>


    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>{{'table.user_id'|trans }}</th>
            <th>{{'table.login'|trans }}</th>
            <th>{{'table.password'|trans }}</th>
            <th>{{'table.role'|trans }}</th>
            <th>{{'table.edit'|trans }}</th>
            <th>{{'table.change_password'|trans }}</th>
            <th>{{'table.delete'|trans }}</th>
        </tr>
        </thead>

        {% for data in table %}
            <tr>
                <td>{{ data.User_ID }}</td>
                <td>{{ data.User_login }}</td>
                <td>{{ data.User_password }}</td>
                <td>{{ data.Role_ID }}</td>
                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('edit_user',{'id':data.User_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.change'|trans }}
                    </a>
                </td>
                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('edit_password',{'id':data.User_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.change'|trans }}
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('delete_user',{'id':data.User_ID} )}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'button.delete'|trans }}
                    </a>
                </td>
            </tr>
        {% endfor %}

    </table>

{% endblock %}", "admin/show_all_users.html.twig", "/home/kasia/public_html/SI/templates/admin/show_all_users.html.twig");
    }
}
