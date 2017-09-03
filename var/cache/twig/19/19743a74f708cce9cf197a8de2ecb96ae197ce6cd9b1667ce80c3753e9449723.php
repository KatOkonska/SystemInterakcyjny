<?php

/* training/training_edit.html.twig */
class __TwigTemplate_009c168c9ac23ab3cb82a6f4f1fed6996b85a31073fc924a37aa134344734163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training/training_edit.html.twig", 1);
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
        $__internal_cfde37f2b38acf89442fcf818da46538493ce79765882a3c2821eb136e2dbbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfde37f2b38acf89442fcf818da46538493ce79765882a3c2821eb136e2dbbff->enter($__internal_cfde37f2b38acf89442fcf818da46538493ce79765882a3c2821eb136e2dbbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_edit.html.twig"));

        $__internal_451ffb9fd3ecd2e198c104b3330c2ebf5cf2c99439121a4bed0180e5787e1d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451ffb9fd3ecd2e198c104b3330c2ebf5cf2c99439121a4bed0180e5787e1d4e->enter($__internal_451ffb9fd3ecd2e198c104b3330c2ebf5cf2c99439121a4bed0180e5787e1d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/training_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfde37f2b38acf89442fcf818da46538493ce79765882a3c2821eb136e2dbbff->leave($__internal_cfde37f2b38acf89442fcf818da46538493ce79765882a3c2821eb136e2dbbff_prof);

        
        $__internal_451ffb9fd3ecd2e198c104b3330c2ebf5cf2c99439121a4bed0180e5787e1d4e->leave($__internal_451ffb9fd3ecd2e198c104b3330c2ebf5cf2c99439121a4bed0180e5787e1d4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_417bedf2193e8cb2a97ec452b2a37c581cb7837e1f1eff7ca5e737d4825d4bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417bedf2193e8cb2a97ec452b2a37c581cb7837e1f1eff7ca5e737d4825d4bdc->enter($__internal_417bedf2193e8cb2a97ec452b2a37c581cb7837e1f1eff7ca5e737d4825d4bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3013540a4a1e998ed8e0966fccf05de1ea9fc3d65892811b38eb4bbe7c6db5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3013540a4a1e998ed8e0966fccf05de1ea9fc3d65892811b38eb4bbe7c6db5e->enter($__internal_f3013540a4a1e998ed8e0966fccf05de1ea9fc3d65892811b38eb4bbe7c6db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training"), "html", null, true);
        
        $__internal_f3013540a4a1e998ed8e0966fccf05de1ea9fc3d65892811b38eb4bbe7c6db5e->leave($__internal_f3013540a4a1e998ed8e0966fccf05de1ea9fc3d65892811b38eb4bbe7c6db5e_prof);

        
        $__internal_417bedf2193e8cb2a97ec452b2a37c581cb7837e1f1eff7ca5e737d4825d4bdc->leave($__internal_417bedf2193e8cb2a97ec452b2a37c581cb7837e1f1eff7ca5e737d4825d4bdc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b892891c82110576c851b9ef63cd6e25468f3d861087a28dd12d019d861cac3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b892891c82110576c851b9ef63cd6e25468f3d861087a28dd12d019d861cac3f->enter($__internal_b892891c82110576c851b9ef63cd6e25468f3d861087a28dd12d019d861cac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0f2ef4cb2dacd8d6489058f3a1f9df79d1dfa95b39836025d7e1576cd1737d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f2ef4cb2dacd8d6489058f3a1f9df79d1dfa95b39836025d7e1576cd1737d7->enter($__internal_d0f2ef4cb2dacd8d6489058f3a1f9df79d1dfa95b39836025d7e1576cd1737d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_training", array("id" => ($context["id"] ?? $this->getContext($context, "id"))))));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_d0f2ef4cb2dacd8d6489058f3a1f9df79d1dfa95b39836025d7e1576cd1737d7->leave($__internal_d0f2ef4cb2dacd8d6489058f3a1f9df79d1dfa95b39836025d7e1576cd1737d7_prof);

        
        $__internal_b892891c82110576c851b9ef63cd6e25468f3d861087a28dd12d019d861cac3f->leave($__internal_b892891c82110576c851b9ef63cd6e25468f3d861087a28dd12d019d861cac3f_prof);

    }

    public function getTemplateName()
    {
        return "training/training_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 11,  76 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ 'title.edit_training'|trans }}{% endblock %}

{% block content %}
    <h1>{{ 'title.edit_training'|trans }}</h1>

    {% if error is defined and error|length %}
        {{ error}}
    {% endif %}

    <div>
        {{ form_start(form, { method: 'post', action: path('edit_training', {'id': id}) }) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{ 'button.change'|trans }}\" class=\"button\" />
        {{ form_end(form) }}
    </div>

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

{#{% endblock %}#}", "training/training_edit.html.twig", "/home/kasia/public_html/SI/templates/training/training_edit.html.twig");
    }
}
