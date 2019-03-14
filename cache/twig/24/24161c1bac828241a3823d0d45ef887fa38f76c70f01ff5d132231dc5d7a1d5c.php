<?php

/* default.html.twig */
class __TwigTemplate_df42d1f22ebfc4c42cae5552f98024db3b556bb45e1f05316a6bc42733ae2cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/shadowfactory.html.twig", "default.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/shadowfactory.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "
\t   \t<div class=\"video_background\">
        <video autoplay=\"true\" controls=\"\" loop=\"\" src=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/nav_background.mp4");
        echo "\"></video>
    </div>

    ";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 9,  31 => 7,  28 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/shadowfactory.html.twig' %}

       


{% block content %}

\t   \t<div class=\"video_background\">
        <video autoplay=\"true\" controls=\"\" loop=\"\" src=\"{{ url('theme://assets/nav_background.mp4') }}\"></video>
    </div>

    {{ page.content|raw }}
{% endblock %}
", "default.html.twig", "/var/www/shadowfactory/user/themes/quark/templates/default.html.twig");
    }
}
