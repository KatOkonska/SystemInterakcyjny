<?php

/* training/training_show_week.html.twig */
class __TwigTemplate_698f0dc9587f485708d3e230c85e30e1e89be22d96400784b95e29921a35b0c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "training/training_show_week.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training_5"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training_5"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "

    <table class=\"vitamins\" width=\"50%\" align=\"center\" text-align=\"center\">
        <thead>
        <tr>
            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_time"), "html", null, true);
        echo "</th>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_kcal"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_distance"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.sport_name"), "html", null, true);
        echo "</th>

        </tr>
        </thead>

        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_time", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_kcal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_distance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "Sport_name_ID", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    </table>

";
    }

    public function getTemplateName()
    {
        return "training/training_show_week.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  98 => 35,  94 => 34,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "training/training_show_week.html.twig", "/home/kasia/public_html/SI/templates/training/training_show_week.html.twig");
    }
}
