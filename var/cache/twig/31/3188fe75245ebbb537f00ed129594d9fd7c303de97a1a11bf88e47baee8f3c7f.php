<?php

/* layout.html.twig */
class __TwigTemplate_a2353155f2362cae74b4a4886051198dd33a37caa6dc7f720200329c0867181d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b72bcbff9dd0d9e090094d89d089679662e952e2554e608baea698c8477997d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72bcbff9dd0d9e090094d89d089679662e952e2554e608baea698c8477997d9->enter($__internal_b72bcbff9dd0d9e090094d89d089679662e952e2554e608baea698c8477997d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_0c5d97524647e019a41fc57bb31864f849b3d4eb9743d4a545b4f76b838d959c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5d97524647e019a41fc57bb31864f849b3d4eb9743d4a545b4f76b838d959c->enter($__internal_0c5d97524647e019a41fc57bb31864f849b3d4eb9743d4a545b4f76b838d959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.Sport_application"), "html", null, true);
        echo "</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>

    ";
        // line 22
        $this->loadTemplate("default/_flash_messages.html.twig", "layout.html.twig", 22)->display($context);
        // line 23
        echo "        <nav class=\"navbar navbar-default\">

            <ul>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home"), "html", null, true);
        echo "</a></li>
                ";
        // line 28
        echo "
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.login"), "html", null, true);
        echo "</a></li>

                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.register"), "html", null, true);
        echo "</a></li>

            </ul>


                ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 37
            echo "
                    <ul>
                        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\">Logout</a></li>
                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_edit_own_password");
            echo "\">Change password</a></li>
                        ";
            // line 42
            echo "
                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0)\" class=\"dropbtn\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.training"), "html", null, true);
            echo "</a>
                        <div class=\"dropdown-content\">
                            <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_week_training");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_last_5_trainings"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_training");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_trainings"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_training");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.add_training"), "html", null, true);
            echo "</a>

                        </div>
                    </li>


                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0)\" class=\"dropbtn\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.training_day"), "html", null, true);
            echo "</a>
                        <div class=\"dropdown-content\">
                            <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_training_day");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.add_training_day"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_training_day");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_training_day"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                    </ul>

                ";
            // line 64
            echo "                <ul>

                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropbtn\">Admin</a>
                    <div class=\"dropdown-content\">
                        <a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_sport");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.add_sport"), "html", null, true);
            echo "</a>
                        <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_users");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_users"), "html", null, true);
            echo "</a>
                        <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_trainings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_trainings"), "html", null, true);
            echo "</a>
                        <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_training_days");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_training_days"), "html", null, true);
            echo "</a>
                        <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_all_sport_names");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.show_all_sport_names"), "html", null, true);
            echo "</a>

                    </div>
                </li>

                </ul>

                ";
        }
        // line 81
        echo "

            <h1>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.Sport_application"), "html", null, true);
        echo "</h1>

            <h3>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.Budda_quote"), "html", null, true);
        echo " <br> ~Buddha</h3>


            <div class=\"parallax\"></div>

            <div style=\"height:50px;\">

            </div>

            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 95
            echo "                <div class=\"error-message\">
                    <div class=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "type", array()), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["message"], "message", array())), "html", null, true);
            echo "</strong></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
        </nav>

        ";
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "
    <br>
    <br>
    <br>
    <br>

    <footer> Autor: Katarzyna Okońska 2017</footer>
    </body>
</html>
";
        
        $__internal_b72bcbff9dd0d9e090094d89d089679662e952e2554e608baea698c8477997d9->leave($__internal_b72bcbff9dd0d9e090094d89d089679662e952e2554e608baea698c8477997d9_prof);

        
        $__internal_0c5d97524647e019a41fc57bb31864f849b3d4eb9743d4a545b4f76b838d959c->leave($__internal_0c5d97524647e019a41fc57bb31864f849b3d4eb9743d4a545b4f76b838d959c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0b1896895600f9ac5ebf9a698c4e1ac8ac3d89111e5d893aa979b7c9fcc6b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b1896895600f9ac5ebf9a698c4e1ac8ac3d89111e5d893aa979b7c9fcc6b7c->enter($__internal_f0b1896895600f9ac5ebf9a698c4e1ac8ac3d89111e5d893aa979b7c9fcc6b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00fa387213cefdf32148bd6b14975d1e8e7bd5092ee9f852016ecd4ce83007c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fa387213cefdf32148bd6b14975d1e8e7bd5092ee9f852016ecd4ce83007c4->enter($__internal_00fa387213cefdf32148bd6b14975d1e8e7bd5092ee9f852016ecd4ce83007c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_00fa387213cefdf32148bd6b14975d1e8e7bd5092ee9f852016ecd4ce83007c4->leave($__internal_00fa387213cefdf32148bd6b14975d1e8e7bd5092ee9f852016ecd4ce83007c4_prof);

        
        $__internal_f0b1896895600f9ac5ebf9a698c4e1ac8ac3d89111e5d893aa979b7c9fcc6b7c->leave($__internal_f0b1896895600f9ac5ebf9a698c4e1ac8ac3d89111e5d893aa979b7c9fcc6b7c_prof);

    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd5ca0cb7bbf7e2e69f982663a63f308f0222650ae85060d5a77a806cb3ba04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5ca0cb7bbf7e2e69f982663a63f308f0222650ae85060d5a77a806cb3ba04d->enter($__internal_dd5ca0cb7bbf7e2e69f982663a63f308f0222650ae85060d5a77a806cb3ba04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4ce76b588e8df7ef15df8487225a35d564450a39f1b8bbbbf787d361c4d3e748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce76b588e8df7ef15df8487225a35d564450a39f1b8bbbbf787d361c4d3e748->enter($__internal_4ce76b588e8df7ef15df8487225a35d564450a39f1b8bbbbf787d361c4d3e748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4ce76b588e8df7ef15df8487225a35d564450a39f1b8bbbbf787d361c4d3e748->leave($__internal_4ce76b588e8df7ef15df8487225a35d564450a39f1b8bbbbf787d361c4d3e748_prof);

        
        $__internal_dd5ca0cb7bbf7e2e69f982663a63f308f0222650ae85060d5a77a806cb3ba04d->leave($__internal_dd5ca0cb7bbf7e2e69f982663a63f308f0222650ae85060d5a77a806cb3ba04d_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 104,  270 => 4,  251 => 105,  249 => 104,  246 => 103,  241 => 99,  230 => 96,  227 => 95,  223 => 94,  211 => 85,  206 => 83,  202 => 81,  189 => 73,  183 => 72,  177 => 71,  171 => 70,  165 => 69,  158 => 64,  148 => 58,  142 => 57,  137 => 55,  125 => 48,  119 => 47,  113 => 46,  108 => 44,  104 => 42,  100 => 40,  96 => 39,  92 => 37,  90 => 36,  80 => 31,  73 => 29,  70 => 28,  64 => 26,  59 => 23,  57 => 22,  38 => 6,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %}{{ 'title.Sport_application'|trans }}</title>

        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>

    {% include 'default/_flash_messages.html.twig' %}
        <nav class=\"navbar navbar-default\">

            <ul>
                <li><a href=\"{{ url('index')}}\">{{  'menu.home'|trans }}</a></li>
                {#bind#}

                <li><a href=\"{{ url('auth_login') }}\">{{  'menu.login'|trans }}</a></li>

                <li><a href=\"{{ url('auth_register') }}\">{{  'menu.register'|trans }}</a></li>

            </ul>


                {% if is_granted(\"ROLE_USER\") %}

                    <ul>
                        <li><a href=\"{{ url('auth_logout') }}\">Logout</a></li>
                        <li><a href=\"{{ url('auth_edit_own_password') }}\">Change password</a></li>
                        {#<li><a href=\"{{ url('calendar') }}\">Calendar</a></li>#}

                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0)\" class=\"dropbtn\">{{  'menu.training'|trans }}</a>
                        <div class=\"dropdown-content\">
                            <a href=\"{{ url('show_week_training') }}\">{{  'menu.show_last_5_trainings'|trans }}</a>
                            <a href=\"{{ url('show_all_training') }}\">{{  'menu.show_all_trainings'|trans }}</a>
                            <a href=\"{{ url('add_training') }}\">{{  'menu.add_training'|trans }}</a>

                        </div>
                    </li>


                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0)\" class=\"dropbtn\">{{  'menu.training_day'|trans }}</a>
                        <div class=\"dropdown-content\">
                            <a href=\"{{ url('add_training_day') }}\">{{  'menu.add_training_day'|trans }}</a>
                            <a href=\"{{ url('show_all_training_day') }}\">{{ 'menu.show_all_training_day'|trans }}</a>
                        </div>
                    </li>
                    </ul>

                {#{% elseif  is_granted(\"ROLE_ADMIN\") %}#}
                <ul>

                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropbtn\">Admin</a>
                    <div class=\"dropdown-content\">
                        <a href=\"{{ url('add_sport') }}\">{{  'menu.add_sport'|trans }}</a>
                        <a href=\"{{ url('show_all_users') }}\">{{ 'menu.show_all_users'|trans }}</a>
                        <a href=\"{{ url('show_all_trainings') }}\">{{ 'menu.show_all_trainings'|trans }}</a>
                        <a href=\"{{ url('show_all_training_days') }}\">{{  'menu.show_all_training_days'|trans }}</a>
                        <a href=\"{{ url('show_all_sport_names') }}\">{{ 'menu.show_all_sport_names'|trans }}</a>

                    </div>
                </li>

                </ul>

                {% endif %}


            <h1>{{\"title.Sport_application\" |trans }}</h1>

            <h3>{{\"title.Budda_quote\" |trans }} <br> ~Buddha</h3>


            <div class=\"parallax\"></div>

            <div style=\"height:50px;\">

            </div>

            {% for message in app.session.flashbag.get('messages') %}
                <div class=\"error-message\">
                    <div class=\"{{ message.type }}\"><strong>{{message.message|trans}}</strong></div>
                </div>
            {% endfor %}

        </nav>

        {#{% include 'default/_flash_messages.html.twig' %}#}

        {% block content %}{% endblock %}

    <br>
    <br>
    <br>
    <br>

    <footer> Autor: Katarzyna Okońska 2017</footer>
    </body>
</html>
", "layout.html.twig", "/home/kasia/public_html/SI/templates/layout.html.twig");
    }
}
