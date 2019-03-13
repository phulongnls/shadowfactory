<?php

/* partials/nav-user-details.html.twig */
class __TwigTemplate_10ea366401a91291157a81bbd9cfc7f0f5ae0bc97626aae26f5e1c2f3d6ab43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
<div id=\"admin-user-details\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/user/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", []), "username", []));
        echo "\">
        ";
        // line 6
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", []), "fullname", []));
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", []), "twofa_enabled", [])) {
            echo "<span class=\"badge\">2FA</span>";
        }
        echo "</h4>
            <h5>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", []), "title", []));
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  37 => 9,  33 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
<div id=\"admin-user-details\">
    <a href=\"{{ base_url_relative }}/user/{{ admin.user.username|e }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ admin.user.fullname|e }} {% if admin.user.twofa_enabled %}<span class=\"badge\">2FA</span>{% endif %}</h4>
            <h5>{{ admin.user.title|e }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "/opt/lampp/htdocs/shadowfactory/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}
