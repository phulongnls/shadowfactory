<?php

/* partials/base.html.twig */
class __TwigTemplate_f38cec6094d164dccb26e8c2fc7c7b2a42a192691f3bbc3b4a8cd1a422e86f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('hero', $context, $blocks);
        // line 74
        echo "
        <section id=\"start\">
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        </section>

    </div>

    ";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 97
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 97)->display(array_merge($context, ["mobile" => true]));
        // line 98
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 100
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 100)->display(array_merge($context, ["tree" => true]));
        // line 101
        echo "            </nav>
        </div>
    </div>

";
        // line 105
        $this->displayBlock('bottom', $context, $blocks);
        // line 108
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 25
        echo "
         ";
        // line 26
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/hello.css"], "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "    ";
    }

    // line 39
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        // line 42
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 43
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 46
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 51
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 54
        echo "                        </nav>

                        ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 57
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 57)->display($context);
            echo "</span>
                        ";
        }
        // line 59
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 51
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 52
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "                        ";
    }

    // line 73
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        // line 77
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 78
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 79
        $this->displayBlock('messages', $context, $blocks);
        // line 82
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "                </section>
            </section>
        ";
    }

    // line 79
    public function block_messages($context, array $blocks = [])
    {
        // line 80
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 80)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 81
        echo "                    ";
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        // line 91
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 91)->display($context);
        // line 92
        echo "    ";
    }

    // line 105
    public function block_bottom($context, array $blocks = [])
    {
        // line 106
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 106,  326 => 105,  322 => 92,  319 => 91,  316 => 90,  311 => 82,  307 => 81,  299 => 80,  296 => 79,  290 => 83,  287 => 82,  285 => 79,  281 => 78,  278 => 77,  275 => 76,  270 => 73,  266 => 53,  263 => 52,  260 => 51,  244 => 59,  238 => 57,  236 => 56,  232 => 54,  230 => 51,  224 => 47,  222 => 46,  216 => 43,  213 => 42,  210 => 41,  204 => 39,  200 => 34,  197 => 33,  194 => 32,  191 => 31,  188 => 30,  184 => 27,  182 => 26,  179 => 25,  176 => 24,  173 => 23,  170 => 22,  165 => 21,  160 => 20,  157 => 19,  154 => 18,  146 => 35,  144 => 30,  138 => 28,  136 => 18,  131 => 16,  127 => 15,  124 => 14,  122 => 13,  111 => 9,  108 => 8,  105 => 7,  98 => 108,  96 => 105,  90 => 101,  88 => 100,  84 => 98,  82 => 97,  76 => 93,  74 => 90,  68 => 86,  66 => 76,  62 => 74,  60 => 73,  57 => 72,  55 => 41,  50 => 39,  47 => 38,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}

         {% do assets.addCss('theme://css/hello.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js()|raw }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/shadowfactory/user/themes/quark/templates/partials/base.html.twig");
    }
}
