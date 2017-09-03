<?php

/* admin/edit_password.html.twig */
class __TwigTemplate_846aa98cc8c0e51b33b01e75b58651d62f00b558364573809f52af9807180ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/edit_password.html.twig", 1);
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
        $__internal_c07cc60211e5edaae074c3ed727ac337c72cef0f4dce6d2a2c045df89962f442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07cc60211e5edaae074c3ed727ac337c72cef0f4dce6d2a2c045df89962f442->enter($__internal_c07cc60211e5edaae074c3ed727ac337c72cef0f4dce6d2a2c045df89962f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_password.html.twig"));

        $__internal_8219af54de5c5b34dbb3e2acfb13dd7835400dfb4428e163e1d0ddd2a4f8dc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8219af54de5c5b34dbb3e2acfb13dd7835400dfb4428e163e1d0ddd2a4f8dc74->enter($__internal_8219af54de5c5b34dbb3e2acfb13dd7835400dfb4428e163e1d0ddd2a4f8dc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c07cc60211e5edaae074c3ed727ac337c72cef0f4dce6d2a2c045df89962f442->leave($__internal_c07cc60211e5edaae074c3ed727ac337c72cef0f4dce6d2a2c045df89962f442_prof);

        
        $__internal_8219af54de5c5b34dbb3e2acfb13dd7835400dfb4428e163e1d0ddd2a4f8dc74->leave($__internal_8219af54de5c5b34dbb3e2acfb13dd7835400dfb4428e163e1d0ddd2a4f8dc74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d678e0fd50b771901e3b991ae8cc79b9d05045437ace9cffdfccebbb15f1104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d678e0fd50b771901e3b991ae8cc79b9d05045437ace9cffdfccebbb15f1104->enter($__internal_4d678e0fd50b771901e3b991ae8cc79b9d05045437ace9cffdfccebbb15f1104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dc6d742352bbb7d95455bddbf35b738db3a38c3f239c0e9c5f4ae2a7e2e3da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc6d742352bbb7d95455bddbf35b738db3a38c3f239c0e9c5f4ae2a7e2e3da7->enter($__internal_8dc6d742352bbb7d95455bddbf35b738db3a38c3f239c0e9c5f4ae2a7e2e3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.auth_add_training"), "html", null, true);
        
        $__internal_8dc6d742352bbb7d95455bddbf35b738db3a38c3f239c0e9c5f4ae2a7e2e3da7->leave($__internal_8dc6d742352bbb7d95455bddbf35b738db3a38c3f239c0e9c5f4ae2a7e2e3da7_prof);

        
        $__internal_4d678e0fd50b771901e3b991ae8cc79b9d05045437ace9cffdfccebbb15f1104->leave($__internal_4d678e0fd50b771901e3b991ae8cc79b9d05045437ace9cffdfccebbb15f1104_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_12575537e5b05084950aaaa4f6fe6e51e0bdf3b7d363b82b38ee45ecd48e380d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12575537e5b05084950aaaa4f6fe6e51e0bdf3b7d363b82b38ee45ecd48e380d->enter($__internal_12575537e5b05084950aaaa4f6fe6e51e0bdf3b7d363b82b38ee45ecd48e380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9ebaad6d1456ef041e3d786ddc43149d534d89b0bc83f404a0bd705441b22d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ebaad6d1456ef041e3d786ddc43149d534d89b0bc83f404a0bd705441b22d6->enter($__internal_f9ebaad6d1456ef041e3d786ddc43149d534d89b0bc83f404a0bd705441b22d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_password"), "html", null, true);
        echo "</h1>
<h2></h2>

";
        // line 9
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? $this->getContext($context, "error"))))) {
            // line 10
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
";
        }
        // line 12
        echo "
<div>
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_password", array("id" => ($context["id"] ?? $this->getContext($context, "id"))))));
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
        
        $__internal_f9ebaad6d1456ef041e3d786ddc43149d534d89b0bc83f404a0bd705441b22d6->leave($__internal_f9ebaad6d1456ef041e3d786ddc43149d534d89b0bc83f404a0bd705441b22d6_prof);

        
        $__internal_12575537e5b05084950aaaa4f6fe6e51e0bdf3b7d363b82b38ee45ecd48e380d->leave($__internal_12575537e5b05084950aaaa4f6fe6e51e0bdf3b7d363b82b38ee45ecd48e380d_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  104 => 20,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 12,  77 => 10,  75 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.auth_add_training'|trans }}{% endblock %}

{% block content %}
<h1>{{ 'title.edit_password'|trans }}</h1>
<h2></h2>

{% if error is defined and error|length %}
{{ error }}
{% endif %}

<div>
    {{ form_start(form, { method: 'post', action: path('edit_password', {'id':id})}) }}
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

{#{% endblock %}#}", "admin/edit_password.html.twig", "/home/kasia/public_html/SI/templates/admin/edit_password.html.twig");
    }
}
