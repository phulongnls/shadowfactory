<?php

/* partials/footer.html.twig */
class __TwigTemplate_76a22c7b6b5bb15e18c13329facde9d11818dfea76aac0e48a8c0ae3dcf5a63c extends Twig_Template
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
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
    </section>
</section>
", "partials/footer.html.twig", "/opt/lampp/htdocs/shadowfactory/user/themes/quark/templates/partials/footer.html.twig");
    }
}
