<?php

/* training/training_edit.html.twig */
class __TwigTemplate_91bd3a49c34cda5f024d5df05644c4faa32190d15eec43963a6c7fc6aecc2dd1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_training"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? null)))) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 11
        echo "
    <div>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_training", array("id" => ($context["id"] ?? null)))));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.change"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

    ";
        // line 19
        if (($context["status"] ?? null)) {
            // line 20
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sent_to_database"), "html", null, true);
            echo "</h2>
    ";
        }
        // line 22
        echo "


";
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
        return array (  82 => 22,  76 => 20,  74 => 19,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 11,  46 => 9,  44 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "training/training_edit.html.twig", "/home/kasia/public_html/SI/templates/training/training_edit.html.twig");
    }
}
