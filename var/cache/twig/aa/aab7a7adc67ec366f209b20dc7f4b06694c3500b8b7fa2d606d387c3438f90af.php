<?php

/* training/training_show_all.html.twig */
class __TwigTemplate_ba559a051b21eacf44c68b8760298383e8cdb5a67c158bc5450bea284c36ae91 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? null));
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
        return array (  161 => 59,  149 => 53,  143 => 52,  134 => 46,  128 => 45,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  107 => 38,  103 => 37,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  44 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "training/training_show_all.html.twig", "/home/kasia/public_html/SI/templates/training/training_show_all.html.twig");
    }
}
