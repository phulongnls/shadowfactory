<?php

/* work.html.twig */
class __TwigTemplate_6f98b3ba643f75c64b13ff977d251e3c42bdbe03b9fe4c75b9970a30b58f30dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
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

<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
<script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
<script src=\"https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js\"></script>


";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
<script type=\"text/javascript\">
    \$('.lazy').Lazy();
    var \$grid = \$('.list-works .grid-item').isotope({
            itemSelector: '.item',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer',
                gutter: 12
            }
    });

    \$('.list-works .filter').on( 'click', 'button', function() {
        if (!\$(this).hasClass('active')) {
            \$('.list-works .filter button').removeClass('active');
            \$(this).addClass('active');
            var filterValue = \$( this ).attr('data-filter');
            if (filterValue == '*') {
                \$('.list-works .grid-item .item').each(function(e) {
                    var classAll = \$(this).data('all');
                    var classType = \$(this).data('type');
                    \$(this).removeClass(classType);
                    \$(this).addClass(classAll);
                });
            } else {
                \$('.list-works .grid-item .item').each(function(e) {
                    var classAll = \$(this).data('all');
                    var classType = \$(this).data('type');
                    \$(this).removeClass(classAll);
                    \$(this).addClass(classType);
                });
            }
            \$grid.imagesLoaded().progress( function() {
                \$grid.isotope({ filter: filterValue });
            });
        }
    });
</script>
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
        $this->loadTemplate("partials/metadata.html.twig", "work.html.twig", 13)->display($context);
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/theme.css"], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/work.css"], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
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

    // line 45
    public function block_content($context, array $blocks = [])
    {
        // line 46
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 46,  193 => 45,  189 => 34,  186 => 33,  183 => 32,  180 => 31,  177 => 30,  173 => 27,  170 => 26,  167 => 25,  164 => 24,  161 => 23,  158 => 22,  153 => 21,  148 => 20,  145 => 19,  142 => 18,  134 => 35,  132 => 30,  126 => 28,  124 => 18,  119 => 16,  115 => 15,  112 => 14,  110 => 13,  99 => 9,  96 => 8,  93 => 7,  50 => 48,  48 => 45,  39 => 38,  37 => 7,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
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
        {% do assets.addCss('theme://css-compiled/theme.css') %}
        {% do assets.addCss('theme://css-compiled/work.css') %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
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

<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
<script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
<script src=\"https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js\"></script>


{% block content %}
    {{ page.content|raw }}
{% endblock %}

<script type=\"text/javascript\">
    \$('.lazy').Lazy();
    var \$grid = \$('.list-works .grid-item').isotope({
            itemSelector: '.item',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer',
                gutter: 12
            }
    });

    \$('.list-works .filter').on( 'click', 'button', function() {
        if (!\$(this).hasClass('active')) {
            \$('.list-works .filter button').removeClass('active');
            \$(this).addClass('active');
            var filterValue = \$( this ).attr('data-filter');
            if (filterValue == '*') {
                \$('.list-works .grid-item .item').each(function(e) {
                    var classAll = \$(this).data('all');
                    var classType = \$(this).data('type');
                    \$(this).removeClass(classType);
                    \$(this).addClass(classAll);
                });
            } else {
                \$('.list-works .grid-item .item').each(function(e) {
                    var classAll = \$(this).data('all');
                    var classType = \$(this).data('type');
                    \$(this).removeClass(classAll);
                    \$(this).addClass(classType);
                });
            }
            \$grid.imagesLoaded().progress( function() {
                \$grid.isotope({ filter: filterValue });
            });
        }
    });
</script>
", "work.html.twig", "/var/www/html/shadowfactory/user/themes/quark/templates/work.html.twig");
    }
}
