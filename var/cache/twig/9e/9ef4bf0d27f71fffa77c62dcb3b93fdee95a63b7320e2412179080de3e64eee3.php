<?php

/* auth/login.html.twig */
class __TwigTemplate_4292f2cd530b91312d20b1b7c4ed81aaeaad54369b7c2dc0c05faad049e5e54d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "auth/login.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, ($context["error"] ?? null)))) {
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            // line 13
            echo "        ";
            // line 14
            echo "        ";
            // line 15
            echo "        ";
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "
    <div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login_check")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.login"), "html", null, true);
        echo "\" class=\"button\" />
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 18,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 9,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.html.twig", "/home/kasia/public_html/SI/templates/auth/login.html.twig");
    }
}
