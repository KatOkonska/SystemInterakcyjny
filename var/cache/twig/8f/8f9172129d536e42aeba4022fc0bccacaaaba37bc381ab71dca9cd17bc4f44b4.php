<?php

/* training/training_delete.html.twig */
class __TwigTemplate_fb03051d081f81b761b42484110f4f87d4d18cc299446163ae526cb664ef2341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training/training_delete.html.twig", 1);
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
        $__internal_c820e00002b9881c13cf97e4f14935ae30218ea8c47cffa91cdc4b8d738cb205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c820e00002b9881c13cf97e4f14935ae30218ea8c47cffa91cdc4b8d738cb205->enter($__internal_c820e00002b9881c13cf97e4f14935ae30218ea8c47cffa91cdc4b8d738cb205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_delete.html.twig"));

        $__internal_08d101ef9ff0b813c6f83ee7694bd96b577378fc3e2371bb306aaeaed1124d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d101ef9ff0b813c6f83ee7694bd96b577378fc3e2371bb306aaeaed1124d23->enter($__internal_08d101ef9ff0b813c6f83ee7694bd96b577378fc3e2371bb306aaeaed1124d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c820e00002b9881c13cf97e4f14935ae30218ea8c47cffa91cdc4b8d738cb205->leave($__internal_c820e00002b9881c13cf97e4f14935ae30218ea8c47cffa91cdc4b8d738cb205_prof);

        
        $__internal_08d101ef9ff0b813c6f83ee7694bd96b577378fc3e2371bb306aaeaed1124d23->leave($__internal_08d101ef9ff0b813c6f83ee7694bd96b577378fc3e2371bb306aaeaed1124d23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2b656cb6b34355fc80e5fa67b2749ff6426763a52ebba81fb0e9c9a237575cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b656cb6b34355fc80e5fa67b2749ff6426763a52ebba81fb0e9c9a237575cd->enter($__internal_f2b656cb6b34355fc80e5fa67b2749ff6426763a52ebba81fb0e9c9a237575cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f511a85eadb287ec6395295ca1ef2747495a09c270918c73947f03710321311c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f511a85eadb287ec6395295ca1ef2747495a09c270918c73947f03710321311c->enter($__internal_f511a85eadb287ec6395295ca1ef2747495a09c270918c73947f03710321311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.delete_training"), "html", null, true);
        
        $__internal_f511a85eadb287ec6395295ca1ef2747495a09c270918c73947f03710321311c->leave($__internal_f511a85eadb287ec6395295ca1ef2747495a09c270918c73947f03710321311c_prof);

        
        $__internal_f2b656cb6b34355fc80e5fa67b2749ff6426763a52ebba81fb0e9c9a237575cd->leave($__internal_f2b656cb6b34355fc80e5fa67b2749ff6426763a52ebba81fb0e9c9a237575cd_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7190ba4ed4dec64082bf8715c0701499e2fdccb3b3e9ef27f62eef7d71a4fc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7190ba4ed4dec64082bf8715c0701499e2fdccb3b3e9ef27f62eef7d71a4fc1e->enter($__internal_7190ba4ed4dec64082bf8715c0701499e2fdccb3b3e9ef27f62eef7d71a4fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_97ef0c86399f5365fc77977f7a732d5acc03bfa0d1cff7139ad61c600580b953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ef0c86399f5365fc77977f7a732d5acc03bfa0d1cff7139ad61c600580b953->enter($__internal_97ef0c86399f5365fc77977f7a732d5acc03bfa0d1cff7139ad61c600580b953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.delete_training"), "html", null, true);
        echo "</h1>
<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_training"), "html", null, true);
        echo "</h2>

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_training", array("id" => ($context["id"] ?? $this->getContext($context, "id"))))));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.delete"), "html", null, true);
        echo "\" class=\"button\" />
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_97ef0c86399f5365fc77977f7a732d5acc03bfa0d1cff7139ad61c600580b953->leave($__internal_97ef0c86399f5365fc77977f7a732d5acc03bfa0d1cff7139ad61c600580b953_prof);

        
        $__internal_7190ba4ed4dec64082bf8715c0701499e2fdccb3b3e9ef27f62eef7d71a4fc1e->leave($__internal_7190ba4ed4dec64082bf8715c0701499e2fdccb3b3e9ef27f62eef7d71a4fc1e_prof);

    }

    public function getTemplateName()
    {
        return "training/training_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 12,  80 => 10,  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'header.delete_training'|trans}}{% endblock %}

{% block content %}
<h1>{{ 'header.delete_training'|trans}}</h1>
<h2>{{ 'title.delete_training'|trans}}</h2>

{% if error is defined and error|length %}
{{error }}
{% endif %}

<div>
    {{ form_start(form, { method: 'post', action: path('delete_training', {'id':id})}) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'button.delete'|trans }}\" class=\"button\" />
    {{ form_end(form) }}
</div>
{% endblock %}
", "training/training_delete.html.twig", "/home/kasia/public_html/SI/templates/training/training_delete.html.twig");
    }
}
