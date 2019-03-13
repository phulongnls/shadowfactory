<?php

/* @Page:/var/www/html/shadowfactory/user/pages/02.work */
class __TwigTemplate_0f6cac21ecfe256091481f26e53c746b637a44ade1b8c336d86163903b16fa7e extends Twig_Template
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
        echo "<style type=\"text/css\">
    body {
        margin: 0;
    }
    .outer-grid {
        display: grid;
        grid-template-columns: [viewport-start] minmax(0,1fr) [container-start] minmax(100px,1600px) [container-end] minmax(0,1fr) [viewport-end];
    }
    .banner-page.work {
        height: 70vh;
    }
    .banner-page video {
        width: 100%;
        height: 100%;
        object-position: 50% 50%;
        object-fit: cover;
        pointer-events: none;
    }
    .banner-page .full {
        height: 70vh;
        width: 100%;
        overflow: hidden;
        background: #1d1d1d;
        grid-column: viewport;
    }
    .banner-page .bg {
        grid-column: viewport;
        height: 100vh;
    }
    .list-works {
        grid-column: container;
        display: grid;
        grid-gap: 24px;
        grid-template-rows: 100px 1fr;
    }
    .list-works .filter {
        display: flex;
        justify-content: flex-start;
    }
    .list-works .filter button {
        font-size: 20px;
        border: none;
        outline: none;
        color: #656363;
        background: transparent;
        padding: 6px 24px;
        cursor: pointer;
    }
    .list-works .filter button.active {
        color: #ffcc04;
    }
    .list-works .grid-item {
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-auto-rows: minmax(15vw,350px);
        grid-gap: 12px 12px;
    }
    .row1 {
        grid-row-end: span 1;
    }
    .row2 {
        grid-row-end: span 2;
    }
    .col1 {
        grid-column-end: span 1;
    }
    .col2 {
        grid-column-end: span 2;
    }
    .list-works .grid-item .item {
        display: flex;
    }
</style>
<div class=\"outer-grid banner-page work\">
    <div class=\"full\">
        <div class=\"bg\">
            <video autoplay=\"true\" loop src=\"http://www.shadowfactory.io.s3-website.ap-southeast-1.amazonaws.com/static/SF_Web_Video-b547a86b7807f25832d44d64749b7d75.mp4\"></video>
        </div>
    </div>
</div>
<div class=\"outer-grid\">
    <div class=\"list-works grid\">
        <div class=\"filter\">
            <button class=\"active\">All</button>
            <button>AR / VR</button>
            <button>APPS</button>
            <button>INTERACTIVE</button>
            <button>VIDEO</button>
        </div>
        <div class=\"grid-item\">
            <div class=\"item row1 col2\">
                ";
        // line 92
        $context["listWorks"] = [];
        // line 93
        echo "                ";
        $context["works"] = $this->getAttribute($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method"), "category", [], "array");
        // line 94
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 95
            echo "                    ";
            $context["listWorks"] = twig_array_merge(($context["listWorks"] ?? null), [0 => $context["key"]]);
            // line 96
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["category" => ($context["listWorks"] ?? null)]], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 98
            echo "                    ";
            $context["image"] = $this->getAttribute($this->getAttribute($context["work"], "header", []), "media_order", []);
            // line 99
            echo "                    <img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "media", []), ($context["image"] ?? null), [], "array"), "url", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["work"], "title", []);
            echo "\">
                    <h4 class=\"title\"><a href=\"#\">";
            // line 100
            echo $this->getAttribute($context["work"], "title", []);
            echo "</a></h4>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/shadowfactory/user/pages/02.work";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 102,  146 => 100,  139 => 99,  136 => 98,  131 => 97,  125 => 96,  122 => 95,  117 => 94,  114 => 93,  112 => 92,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    body {
        margin: 0;
    }
    .outer-grid {
        display: grid;
        grid-template-columns: [viewport-start] minmax(0,1fr) [container-start] minmax(100px,1600px) [container-end] minmax(0,1fr) [viewport-end];
    }
    .banner-page.work {
        height: 70vh;
    }
    .banner-page video {
        width: 100%;
        height: 100%;
        object-position: 50% 50%;
        object-fit: cover;
        pointer-events: none;
    }
    .banner-page .full {
        height: 70vh;
        width: 100%;
        overflow: hidden;
        background: #1d1d1d;
        grid-column: viewport;
    }
    .banner-page .bg {
        grid-column: viewport;
        height: 100vh;
    }
    .list-works {
        grid-column: container;
        display: grid;
        grid-gap: 24px;
        grid-template-rows: 100px 1fr;
    }
    .list-works .filter {
        display: flex;
        justify-content: flex-start;
    }
    .list-works .filter button {
        font-size: 20px;
        border: none;
        outline: none;
        color: #656363;
        background: transparent;
        padding: 6px 24px;
        cursor: pointer;
    }
    .list-works .filter button.active {
        color: #ffcc04;
    }
    .list-works .grid-item {
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-auto-rows: minmax(15vw,350px);
        grid-gap: 12px 12px;
    }
    .row1 {
        grid-row-end: span 1;
    }
    .row2 {
        grid-row-end: span 2;
    }
    .col1 {
        grid-column-end: span 1;
    }
    .col2 {
        grid-column-end: span 2;
    }
    .list-works .grid-item .item {
        display: flex;
    }
</style>
<div class=\"outer-grid banner-page work\">
    <div class=\"full\">
        <div class=\"bg\">
            <video autoplay=\"true\" loop src=\"http://www.shadowfactory.io.s3-website.ap-southeast-1.amazonaws.com/static/SF_Web_Video-b547a86b7807f25832d44d64749b7d75.mp4\"></video>
        </div>
    </div>
</div>
<div class=\"outer-grid\">
    <div class=\"list-works grid\">
        <div class=\"filter\">
            <button class=\"active\">All</button>
            <button>AR / VR</button>
            <button>APPS</button>
            <button>INTERACTIVE</button>
            <button>VIDEO</button>
        </div>
        <div class=\"grid-item\">
            <div class=\"item row1 col2\">
                {% set listWorks = [] %}
                {% set works = taxonomylist.get()['category'] %}
                {% for key, item in works %}
                    {% set listWorks = listWorks|merge([key]) %}
                {% endfor %}
                {% for work in taxonomy.findTaxonomy({'category':listWorks}) %}
                    {% set image = work.header.media_order %}
                    <img src=\"{{ work.media[image].url }}\" alt=\"{{ work.title }}\">
                    <h4 class=\"title\"><a href=\"#\">{{ work.title }}</a></h4>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "@Page:/var/www/html/shadowfactory/user/pages/02.work", "");
    }
}
