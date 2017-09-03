<?php

/* training_day/training_day_edit.html.twig */
class __TwigTemplate_c673de5b16fb0aa142aa9358da279283a4136c5e6f7a4e18ac3b11194a4307a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training_day/training_day_edit.html.twig", 1);
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
        $__internal_7566d1d5144f6730bb3fcb687f9881043fa16f8614e95597f122b4e369550916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7566d1d5144f6730bb3fcb687f9881043fa16f8614e95597f122b4e369550916->enter($__internal_7566d1d5144f6730bb3fcb687f9881043fa16f8614e95597f122b4e369550916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_edit.html.twig"));

        $__internal_91788849c4dee51e31a47fa218a5493fb92935c4aecad97a1fff4099c5530c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91788849c4dee51e31a47fa218a5493fb92935c4aecad97a1fff4099c5530c8b->enter($__internal_91788849c4dee51e31a47fa218a5493fb92935c4aecad97a1fff4099c5530c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training_day/training_day_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7566d1d5144f6730bb3fcb687f9881043fa16f8614e95597f122b4e369550916->leave($__internal_7566d1d5144f6730bb3fcb687f9881043fa16f8614e95597f122b4e369550916_prof);

        
        $__internal_91788849c4dee51e31a47fa218a5493fb92935c4aecad97a1fff4099c5530c8b->leave($__internal_91788849c4dee51e31a47fa218a5493fb92935c4aecad97a1fff4099c5530c8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3db54bd23c050a3cccc8e61c6cfd36f293cbff27634f6ef2a2fd375ee6d201d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db54bd23c050a3cccc8e61c6cfd36f293cbff27634f6ef2a2fd375ee6d201d2->enter($__internal_3db54bd23c050a3cccc8e61c6cfd36f293cbff27634f6ef2a2fd375ee6d201d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8167bf67db0139686d949c34f7d46d3280a0a5fdffc72e0b18470f1dc03c3fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8167bf67db0139686d949c34f7d46d3280a0a5fdffc72e0b18470f1dc03c3fab->enter($__internal_8167bf67db0139686d949c34f7d46d3280a0a5fdffc72e0b18470f1dc03c3fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training_days"), "html", null, true);
        
        $__internal_8167bf67db0139686d949c34f7d46d3280a0a5fdffc72e0b18470f1dc03c3fab->leave($__internal_8167bf67db0139686d949c34f7d46d3280a0a5fdffc72e0b18470f1dc03c3fab_prof);

        
        $__internal_3db54bd23c050a3cccc8e61c6cfd36f293cbff27634f6ef2a2fd375ee6d201d2->leave($__internal_3db54bd23c050a3cccc8e61c6cfd36f293cbff27634f6ef2a2fd375ee6d201d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ae7700dcf315048dc507d20941b56cf3ce892d11d613624cfa529605f36ed99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae7700dcf315048dc507d20941b56cf3ce892d11d613624cfa529605f36ed99->enter($__internal_6ae7700dcf315048dc507d20941b56cf3ce892d11d613624cfa529605f36ed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_973bf33dd8faca765e3d2806c6e4a43be7a49eb1da1a1be2b20aae94a8e65aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973bf33dd8faca765e3d2806c6e4a43be7a49eb1da1a1be2b20aae94a8e65aaa->enter($__internal_973bf33dd8faca765e3d2806c6e4a43be7a49eb1da1a1be2b20aae94a8e65aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training_days"), "html", null, true);
        echo "</h1>
    <h2></h2>

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_training_day", array("id" => ($context["id"] ?? $this->getContext($context, "id"))))));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    ";
        // line 20
        if (($context["status"] ?? $this->getContext($context, "status"))) {
            // line 21
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sent_to_database"), "html", null, true);
            echo "</h2>
    ";
        }
        
        $__internal_973bf33dd8faca765e3d2806c6e4a43be7a49eb1da1a1be2b20aae94a8e65aaa->leave($__internal_973bf33dd8faca765e3d2806c6e4a43be7a49eb1da1a1be2b20aae94a8e65aaa_prof);

        
        $__internal_6ae7700dcf315048dc507d20941b56cf3ce892d11d613624cfa529605f36ed99->leave($__internal_6ae7700dcf315048dc507d20941b56cf3ce892d11d613624cfa529605f36ed99_prof);

    }

    public function getTemplateName()
    {
        return "training_day/training_day_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  105 => 20,  99 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 12,  77 => 10,  75 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.edit_training_days'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.edit_training_days'|trans }}</h1>
    <h2></h2>

    {% if error is defined and error|length %}
        {{ error }}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('edit_training_day', {'id':id})}) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.change'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>

    {% if status %}
        <h2>{{ 'sent_to_database'|trans }}</h2>
    {% endif %}
{% endblock %}



{#{% block content %}#}
{#<h1>Czesc, Twój kalendarz działa!</h1>#}

{#{{ dump(calendar) }}#}

{#<h1>Dni treningu</h1>#}
{#<tr>#}
    {#{% for data in calendar %}#}
    {#<h2>dzien treningu</h2>#}
    {#<td>{{ data.Training_day_day_number }}</td>#}
    {#<br>#}
    {#{% endfor %}#}
    {#</tr>#}

{#{% endblock %}#}", "training_day/training_day_edit.html.twig", "/home/kasia/public_html/SI/templates/training_day/training_day_edit.html.twig");
    }
}
