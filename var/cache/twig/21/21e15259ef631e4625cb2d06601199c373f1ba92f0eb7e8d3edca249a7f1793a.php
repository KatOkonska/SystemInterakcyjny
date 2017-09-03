<?php

/* calendar.html.twig */
class __TwigTemplate_d2a4ef6974da5b451d32455b070850c8304c54e2162383e22d84bf3428a9e361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "calendar.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "'To Twój Kalendarz'";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Oto Twój kalendarz treningów z ostatniego miesiąca</h1>

";
        // line 9
        echo "
    <h2>Dni treningu</h2>
    <tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 13
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.training_day"), "html", null, true);
            echo "</h3>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Training_day_day_number", array()), "html", null, true);
            echo "</td>
             <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tr>

";
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  65 => 17,  56 => 14,  51 => 13,  47 => 12,  42 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "calendar.html.twig", "/home/kasia/public_html/SI/templates/calendar.html.twig");
    }
}
