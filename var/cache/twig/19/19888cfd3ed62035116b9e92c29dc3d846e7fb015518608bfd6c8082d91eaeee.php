<?php

/* default/_single_alert_message.html.twig */
class __TwigTemplate_74a17b1e68e2559efb8b437a403c2da3529a8e19263084a270e7be1706902e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cbe2a3fba46dd870ce8e0f980d09a44d77ae89bdc66bc6b2a892b3d562cd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbe2a3fba46dd870ce8e0f980d09a44d77ae89bdc66bc6b2a892b3d562cd38f->enter($__internal_5cbe2a3fba46dd870ce8e0f980d09a44d77ae89bdc66bc6b2a892b3d562cd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        $__internal_27e809962114eb575dc617b5e0a72f7577cf640346a53ea8937c47427dbcea76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e809962114eb575dc617b5e0a72f7577cf640346a53ea8937c47427dbcea76->enter($__internal_27e809962114eb575dc617b5e0a72f7577cf640346a53ea8937c47427dbcea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        // line 8
        echo "
";
        // line 10
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter(($context["is_single_message"] ?? $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 11
            echo "<div class=\"x_content bs-example-popovers\">
    ";
        }
        // line 13
        echo "    <div class=\"alert alert-dismissible alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" role=\"alert\">
        ";
        // line 15
        echo "            ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["message"] ?? $this->getContext($context, "message"))) === ($context["message"] ?? $this->getContext($context, "message")))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["message"] ?? $this->getContext($context, "message"))), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter(($context["is_single_message"] ?? $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 24
            echo "</div>
";
        }
        
        $__internal_5cbe2a3fba46dd870ce8e0f980d09a44d77ae89bdc66bc6b2a892b3d562cd38f->leave($__internal_5cbe2a3fba46dd870ce8e0f980d09a44d77ae89bdc66bc6b2a892b3d562cd38f_prof);

        
        $__internal_27e809962114eb575dc617b5e0a72f7577cf640346a53ea8937c47427dbcea76->leave($__internal_27e809962114eb575dc617b5e0a72f7577cf640346a53ea8937c47427dbcea76_prof);

    }

    public function getTemplateName()
    {
        return "default/_single_alert_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 23,  58 => 22,  52 => 20,  46 => 18,  43 => 17,  41 => 16,  39 => 15,  34 => 13,  30 => 11,  28 => 10,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    Single alert message.

    parameters:
        * `type`: message type (success|info|warning|danger)
        * `message`: message
#}

{# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
{% if is_single_message|default(true) %}
<div class=\"x_content bs-example-popovers\">
    {% endif %}
    <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
        {#<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">#}
            {#<span aria-hidden=\"true\">&times;</span>#}
        {#</button>#}
        {% if message|trans is not same as(message) %}
            {{ message|trans }}
        {% else %}
            {{ message }}
        {% endif %}
    </div>
    {% if is_single_message|default(true) %}
</div>
{% endif %}", "default/_single_alert_message.html.twig", "/home/kasia/public_html/SI/templates/default/_single_alert_message.html.twig");
    }
}
