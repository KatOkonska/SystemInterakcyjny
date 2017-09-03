<?php

/* training_day/training_day_show_all.html.twig */
class __TwigTemplate_ac90f25d4eb5866457a5eef804c94cfb30f7dc1f950c1ec361fd85e601e049f2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.list_training_days"), "html", null, true);
        echo "i";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["table"] ?? null));
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
        return array (  108 => 35,  97 => 30,  91 => 29,  83 => 24,  77 => 23,  71 => 20,  68 => 19,  64 => 18,  56 => 13,  52 => 12,  48 => 11,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "training_day/training_day_show_all.html.twig", "/home/kasia/public_html/SI/templates/training_day/training_day_show_all.html.twig");
    }
}
