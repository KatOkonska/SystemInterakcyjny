<?php

/* training_day/training_day_show_all.html.twig */
class __TwigTemplate_177b43a97becf0d9cff32c46cd2828b728ae0c9f2fc92b0b02ad397b44c14449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training_day/training_day_show_all.html.twig", 1);
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
        $__internal_c89e75f39d409036d9225f7c73a043bdb7a803beb8cc992970332565b858ffae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89e75f39d409036d9225f7c73a043bdb7a803beb8cc992970332565b858ffae->enter($__internal_c89e75f39d409036d9225f7c73a043bdb7a803beb8cc992970332565b858ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_show_all.html.twig"));

        $__internal_e10a6bbefb46d699884c114b7f30882d9d9031dbf87475e959cd28cc1e64ad3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10a6bbefb46d699884c114b7f30882d9d9031dbf87475e959cd28cc1e64ad3b->enter($__internal_e10a6bbefb46d699884c114b7f30882d9d9031dbf87475e959cd28cc1e64ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89e75f39d409036d9225f7c73a043bdb7a803beb8cc992970332565b858ffae->leave($__internal_c89e75f39d409036d9225f7c73a043bdb7a803beb8cc992970332565b858ffae_prof);

        
        $__internal_e10a6bbefb46d699884c114b7f30882d9d9031dbf87475e959cd28cc1e64ad3b->leave($__internal_e10a6bbefb46d699884c114b7f30882d9d9031dbf87475e959cd28cc1e64ad3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49a12e96486fb8cf5f416bbb68f8cedc50ec40f0a8fcefff09d8436154c8cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49a12e96486fb8cf5f416bbb68f8cedc50ec40f0a8fcefff09d8436154c8cf6->enter($__internal_f49a12e96486fb8cf5f416bbb68f8cedc50ec40f0a8fcefff09d8436154c8cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9926a333bd522d7d4f4038836e38614815742c3c5fc058963849b2d1951fb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9926a333bd522d7d4f4038836e38614815742c3c5fc058963849b2d1951fb7a->enter($__internal_f9926a333bd522d7d4f4038836e38614815742c3c5fc058963849b2d1951fb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training_days"), "html", null, true);
        echo "i";
        
        $__internal_f9926a333bd522d7d4f4038836e38614815742c3c5fc058963849b2d1951fb7a->leave($__internal_f9926a333bd522d7d4f4038836e38614815742c3c5fc058963849b2d1951fb7a_prof);

        
        $__internal_f49a12e96486fb8cf5f416bbb68f8cedc50ec40f0a8fcefff09d8436154c8cf6->leave($__internal_f49a12e96486fb8cf5f416bbb68f8cedc50ec40f0a8fcefff09d8436154c8cf6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b1b8fe12bc95cef2d34d618938950db98021b9ef3c0d7e753a7494b888dac550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b8fe12bc95cef2d34d618938950db98021b9ef3c0d7e753a7494b888dac550->enter($__internal_b1b8fe12bc95cef2d34d618938950db98021b9ef3c0d7e753a7494b888dac550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_896f597702fcb202805ab6579068494c0a84655f191080566ed21e83bfc23a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896f597702fcb202805ab6579068494c0a84655f191080566ed21e83bfc23a1c->enter($__internal_896f597702fcb202805ab6579068494c0a84655f191080566ed21e83bfc23a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training_days"), "html", null, true);
        echo "</h1>

    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.training_day"), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.edit"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.delete"), "html", null, true);
        echo "</th>

        </tr>
        </thead>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Training_day_day_number", array()), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_training_day", array("id" => $this->getAttribute($context["data"], "Training_day_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit_training_day"), "html", null, true);
            echo "
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_training_day", array("id" => $this->getAttribute($context["data"], "Training_day_ID", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_training_day"), "html", null, true);
            echo "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </table>

";
        
        $__internal_896f597702fcb202805ab6579068494c0a84655f191080566ed21e83bfc23a1c->leave($__internal_896f597702fcb202805ab6579068494c0a84655f191080566ed21e83bfc23a1c_prof);

        
        $__internal_b1b8fe12bc95cef2d34d618938950db98021b9ef3c0d7e753a7494b888dac550->leave($__internal_b1b8fe12bc95cef2d34d618938950db98021b9ef3c0d7e753a7494b888dac550_prof);

    }

    public function getTemplateName()
    {
        return "training_day/training_day_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  127 => 30,  121 => 29,  113 => 24,  107 => 23,  101 => 20,  98 => 19,  94 => 18,  86 => 13,  82 => 12,  78 => 11,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.list_training_days'|trans }}i{% endblock %}

{% block content %}
    <h1>{{ 'title.list_training_days'|trans }}</h1>

    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>{{  'table.training_day'|trans }}</th>
            <th>{{  'table.edit'|trans }}</th>
            <th>{{  'table.delete'|trans }}</th>

        </tr>
        </thead>

        {% for data in table %}
            <tr>
                <td>{{ data.Training_day_day_number}}</td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('edit_training_day', {'id': data.Training_day_ID})}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'edit_training_day'|trans }}
                    </a>
                </td>

                <td>
                    <a class=\"btn btn-default\" href=\"{{ url('delete_training_day', {'id': data.Training_day_ID})}}\" title=\"{{ 'auth.logout.label'|trans }}\">
                        {{ 'delete_training_day'|trans }}
                    </a>
                </td>
            </tr>
        {% endfor %}

    </table>

{% endblock %}", "training_day/training_day_show_all.html.twig", "/home/kasia/public_html/SI/templates/training_day/training_day_show_all.html.twig");
    }
}
