<?php

/* auth/register.html.twig */
class __TwigTemplate_b2206703281cd84340fb9270f35989a659d70f604b1ce725daf7b5edd888c197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "auth/register.html.twig", 1);
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
        $__internal_1bc2185203eae494d056e90fd738b7232f49682c825b36a18a247de836798006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc2185203eae494d056e90fd738b7232f49682c825b36a18a247de836798006->enter($__internal_1bc2185203eae494d056e90fd738b7232f49682c825b36a18a247de836798006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_18e268c93bd9d5b22b819e1ede809c9bb01ccc3cc36a9a224ee8265a80f1631d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e268c93bd9d5b22b819e1ede809c9bb01ccc3cc36a9a224ee8265a80f1631d->enter($__internal_18e268c93bd9d5b22b819e1ede809c9bb01ccc3cc36a9a224ee8265a80f1631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc2185203eae494d056e90fd738b7232f49682c825b36a18a247de836798006->leave($__internal_1bc2185203eae494d056e90fd738b7232f49682c825b36a18a247de836798006_prof);

        
        $__internal_18e268c93bd9d5b22b819e1ede809c9bb01ccc3cc36a9a224ee8265a80f1631d->leave($__internal_18e268c93bd9d5b22b819e1ede809c9bb01ccc3cc36a9a224ee8265a80f1631d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_280a19994ab8859d240b1ff72178f2ba2acc99211780d8ca75e634350a3d36b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280a19994ab8859d240b1ff72178f2ba2acc99211780d8ca75e634350a3d36b0->enter($__internal_280a19994ab8859d240b1ff72178f2ba2acc99211780d8ca75e634350a3d36b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d0097860a032e539eca834a75322cd52d7a34d75ac2f46d488b3a8abb7db18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0097860a032e539eca834a75322cd52d7a34d75ac2f46d488b3a8abb7db18e->enter($__internal_1d0097860a032e539eca834a75322cd52d7a34d75ac2f46d488b3a8abb7db18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register"), "html", null, true);
        
        $__internal_1d0097860a032e539eca834a75322cd52d7a34d75ac2f46d488b3a8abb7db18e->leave($__internal_1d0097860a032e539eca834a75322cd52d7a34d75ac2f46d488b3a8abb7db18e_prof);

        
        $__internal_280a19994ab8859d240b1ff72178f2ba2acc99211780d8ca75e634350a3d36b0->leave($__internal_280a19994ab8859d240b1ff72178f2ba2acc99211780d8ca75e634350a3d36b0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a67c5f26c021dc44100c57d3a8c89aa90d3aac99610f6b913a08b346892efe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c5f26c021dc44100c57d3a8c89aa90d3aac99610f6b913a08b346892efe60->enter($__internal_a67c5f26c021dc44100c57d3a8c89aa90d3aac99610f6b913a08b346892efe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_94e3a4166a1e005753c200b3ecbd423f20fbdbc3c6a46ec75840ac56190a759b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e3a4166a1e005753c200b3ecbd423f20fbdbc3c6a46ec75840ac56190a759b->enter($__internal_94e3a4166a1e005753c200b3ecbd423f20fbdbc3c6a46ec75840ac56190a759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_register")));
        echo "
        <br>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.register"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    ";
        // line 21
        if (($context["status"] ?? $this->getContext($context, "status"))) {
            // line 22
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sent_to_database"), "html", null, true);
            echo "</h2>
    ";
        }
        // line 24
        echo "
";
        
        $__internal_94e3a4166a1e005753c200b3ecbd423f20fbdbc3c6a46ec75840ac56190a759b->leave($__internal_94e3a4166a1e005753c200b3ecbd423f20fbdbc3c6a46ec75840ac56190a759b_prof);

        
        $__internal_a67c5f26c021dc44100c57d3a8c89aa90d3aac99610f6b913a08b346892efe60->leave($__internal_a67c5f26c021dc44100c57d3a8c89aa90d3aac99610f6b913a08b346892efe60_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  108 => 22,  106 => 21,  100 => 18,  96 => 17,  91 => 15,  86 => 13,  82 => 11,  76 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.register'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.register'|trans }}</h1>

    {% if error is defined and error|length %}
        {{ error }}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('auth_register') }) }}
        <br>
        {{ form_widget(form) }}
        <br>
        <input type=\"submit\" value=\"{{ 'button.register'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>

    {% if status %}
        <h2>{{ 'sent_to_database'|trans }}</h2>
    {% endif %}

{% endblock %}", "auth/register.html.twig", "/home/kasia/public_html/SI/templates/auth/register.html.twig");
    }
}
