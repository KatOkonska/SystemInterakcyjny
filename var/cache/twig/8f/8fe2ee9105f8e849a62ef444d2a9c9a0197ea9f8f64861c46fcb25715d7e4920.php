<?php

/* index.html.twig */
class __TwigTemplate_65b11247c93289f2d3cb143cbeff0762495e9ff4f0059117e8a8de5a74dde868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32b5e009538f128d25386016db8c9d3fe200fae6bdcc04430e848147ac120522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b5e009538f128d25386016db8c9d3fe200fae6bdcc04430e848147ac120522->enter($__internal_32b5e009538f128d25386016db8c9d3fe200fae6bdcc04430e848147ac120522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_51b6d0c61f1db2396877374a2a5397f0c075cd80503018ac94cc5e0b9502a43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b6d0c61f1db2396877374a2a5397f0c075cd80503018ac94cc5e0b9502a43c->enter($__internal_51b6d0c61f1db2396877374a2a5397f0c075cd80503018ac94cc5e0b9502a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b5e009538f128d25386016db8c9d3fe200fae6bdcc04430e848147ac120522->leave($__internal_32b5e009538f128d25386016db8c9d3fe200fae6bdcc04430e848147ac120522_prof);

        
        $__internal_51b6d0c61f1db2396877374a2a5397f0c075cd80503018ac94cc5e0b9502a43c->leave($__internal_51b6d0c61f1db2396877374a2a5397f0c075cd80503018ac94cc5e0b9502a43c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_81c835e19e04e3e958b7bb99bacf536eb05ca7e7280ad00d23f5e3c5355f4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c835e19e04e3e958b7bb99bacf536eb05ca7e7280ad00d23f5e3c5355f4e7f->enter($__internal_81c835e19e04e3e958b7bb99bacf536eb05ca7e7280ad00d23f5e3c5355f4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_09cee5ed7dca03d0199d43866b717617cdabc2ab7cbf3ae62bc73567dc37dfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cee5ed7dca03d0199d43866b717617cdabc2ab7cbf3ae62bc73567dc37dfca->enter($__internal_09cee5ed7dca03d0199d43866b717617cdabc2ab7cbf3ae62bc73567dc37dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 6
            echo "       <h1>
           ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " !
       </h1>
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "        <h1>
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello"), "html", null, true);
            echo " Admin!
        </h1>
    ";
        } else {
            // line 14
            echo "        <h1>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stranger"), "html", null, true);
            echo "
        </h1>
  ";
        }
        // line 18
        echo "

";
        
        $__internal_09cee5ed7dca03d0199d43866b717617cdabc2ab7cbf3ae62bc73567dc37dfca->leave($__internal_09cee5ed7dca03d0199d43866b717617cdabc2ab7cbf3ae62bc73567dc37dfca_prof);

        
        $__internal_81c835e19e04e3e958b7bb99bacf536eb05ca7e7280ad00d23f5e3c5355f4e7f->leave($__internal_81c835e19e04e3e958b7bb99bacf536eb05ca7e7280ad00d23f5e3c5355f4e7f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  77 => 15,  74 => 14,  68 => 11,  65 => 10,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}

    {% if is_granted (\"ROLE_USER\") %}
       <h1>
           {{  'hello'|trans }} {{ app.user.username }} !
       </h1>
    {% elseif  is_granted (\"ROLE_ADMIN\") %}
        <h1>
            {{  'hello'|trans }} Admin!
        </h1>
    {%  else %}
        <h1>
            {{  'hello'|trans }} {{  'stranger'|trans }}
        </h1>
  {% endif %}


{% endblock %}
", "index.html.twig", "/home/kasia/public_html/SI/templates/index.html.twig");
    }
}
