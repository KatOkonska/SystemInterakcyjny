<?php

/* training/training_show_all.html.twig */
class __TwigTemplate_309576752c3a25d950f13f572376e528d6433ae7d928db5a7632430d49f7238e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training/training_show_all.html.twig", 1);
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
        $__internal_c4b553e356abd38215589616de75f52e3417ce12b5c884bc0e0665921d365f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b553e356abd38215589616de75f52e3417ce12b5c884bc0e0665921d365f0b->enter($__internal_c4b553e356abd38215589616de75f52e3417ce12b5c884bc0e0665921d365f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_show_all.html.twig"));

        $__internal_4f47cc3dafef9784d5b22f625cc3df07816ecb649c8599d94f55e2035d45e406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f47cc3dafef9784d5b22f625cc3df07816ecb649c8599d94f55e2035d45e406->enter($__internal_4f47cc3dafef9784d5b22f625cc3df07816ecb649c8599d94f55e2035d45e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b553e356abd38215589616de75f52e3417ce12b5c884bc0e0665921d365f0b->leave($__internal_c4b553e356abd38215589616de75f52e3417ce12b5c884bc0e0665921d365f0b_prof);

        
        $__internal_4f47cc3dafef9784d5b22f625cc3df07816ecb649c8599d94f55e2035d45e406->leave($__internal_4f47cc3dafef9784d5b22f625cc3df07816ecb649c8599d94f55e2035d45e406_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2aa31a46a1837567ff4c549373688ff538eaef659fce8c612ada432087092bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2aa31a46a1837567ff4c549373688ff538eaef659fce8c612ada432087092bb->enter($__internal_f2aa31a46a1837567ff4c549373688ff538eaef659fce8c612ada432087092bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6bd14ade0800593ea3b9c9ca4ac28c8eb8ff8ff8950eb678084008b1e71b533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bd14ade0800593ea3b9c9ca4ac28c8eb8ff8ff8950eb678084008b1e71b533->enter($__internal_d6bd14ade0800593ea3b9c9ca4ac28c8eb8ff8ff8950eb678084008b1e71b533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training"), "html", null, true);
        
        $__internal_d6bd14ade0800593ea3b9c9ca4ac28c8eb8ff8ff8950eb678084008b1e71b533->leave($__internal_d6bd14ade0800593ea3b9c9ca4ac28c8eb8ff8ff8950eb678084008b1e71b533_prof);

        
        $__internal_f2aa31a46a1837567ff4c549373688ff538eaef659fce8c612ada432087092bb->leave($__internal_f2aa31a46a1837567ff4c549373688ff538eaef659fce8c612ada432087092bb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5f77a348bdc7959dac904564dad84c5f030d62282dbd1ef0caf0cb33ecef5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f77a348bdc7959dac904564dad84c5f030d62282dbd1ef0caf0cb33ecef5e3->enter($__internal_c5f77a348bdc7959dac904564dad84c5f030d62282dbd1ef0caf0cb33ecef5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_286be219c80d2b4259f500bf19f952c4c6cf50b27ff148fd119ad26194753085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286be219c80d2b4259f500bf19f952c4c6cf50b27ff148fd119ad26194753085->enter($__internal_286be219c80d2b4259f500bf19f952c4c6cf50b27ff148fd119ad26194753085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        // line 12
        echo "        ";
        // line 13
        echo "            ";
        // line 14
        echo "            ";
        // line 15
        echo "            ";
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        // line 18
        echo "            ";
        // line 19
        echo "        ";
        // line 20
        echo "    ";
        // line 21
        echo "

    <article>

    <table class=\"vitamins\" width=\"80%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_time"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_kcal"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_distance"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_name"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.edit"), "html", null, true);
        echo "</th>
            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.delete"), "html", null, true);
        echo "</th>
        </tr>
        </thead>

            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 38
            echo "                <tr>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_time", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_kcal", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_distance", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_Name", array()), "html", null, true);
            echo "</td>

                    <td>
                        <a class=\"btn btn-default\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_training", array("id" => $this->getAttribute($context["data"], "Sport_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
            echo "
                        </a>
                    </td>


                    <td>
                        <a class=\"btn btn-default\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_training", array("id" => $this->getAttribute($context["data"], "Sport_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                            ";
            // line 53
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
        // line 59
        echo "
    </table>

    </article>


";
        
        $__internal_286be219c80d2b4259f500bf19f952c4c6cf50b27ff148fd119ad26194753085->leave($__internal_286be219c80d2b4259f500bf19f952c4c6cf50b27ff148fd119ad26194753085_prof);

        
        $__internal_c5f77a348bdc7959dac904564dad84c5f030d62282dbd1ef0caf0cb33ecef5e3->leave($__internal_c5f77a348bdc7959dac904564dad84c5f030d62282dbd1ef0caf0cb33ecef5e3_prof);

    }

    public function getTemplateName()
    {
        return "training/training_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  179 => 53,  173 => 52,  164 => 46,  158 => 45,  152 => 42,  148 => 41,  144 => 40,  140 => 39,  137 => 38,  133 => 37,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  89 => 17,  87 => 16,  85 => 15,  83 => 14,  81 => 13,  79 => 12,  77 => 11,  74 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{'title.list_training'|trans }}{% endblock %}

{% block content %}
    <h1>{{'title.list_training'|trans }}</h1>

    {#{{ dump(table) }}#}

    {#<h1>Dni treningu</h1>#}
    {#<tr>#}
        {#{% for data in table %}#}
            {#<h2>dzien treningu</h2>#}
            {#<td>{{ data.Sport_time }}</td>#}
            {#<td>{{ data.Sport_kcal }}</td>#}
            {#<td>{{ data.Sport_distance }}</td>#}
            {#<td>{{ data.Sport_name_ID }}</td>#}
            {#<br>#}
        {#{% endfor %}#}
    {#</tr>#}


    <article>

    <table class=\"vitamins\" width=\"80%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>{{ 'table.sport_time'|trans }}</th>
            <th>{{ 'table.sport_kcal'|trans }}</th>
            <th>{{ 'table.sport_distance'|trans }}</th>
            <th>{{ 'table.sport_name'|trans }}</th>
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

                    <td>
                        <a class=\"btn btn-default\" href=\"{{ url('edit_training', {'id': data.Sport_ID})}}\" title=\"{{ 'auth.logout.label'|trans }}\">
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

    </article>


{% endblock %}", "training/training_show_all.html.twig", "/home/kasia/public_html/SI/templates/training/training_show_all.html.twig");
    }
}
