<?php

/* partials/navigation.html.twig */
class __TwigTemplate_4d91f82ea52130e6d672cd7cc37c53e39379915aed417c18f8e87661dafdde70 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1);
        // line 2
        echo "
<ul ";
        // line 3
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 4
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "
</ul>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'macros/macros.html.twig' as macros %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ macros.nav_loop(pages) }}
</ul>

", "partials/navigation.html.twig", "/opt/lampp/htdocs/shadowfactory/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
