<?php

/* @Page:/var/www/html/shadowfactory/user/pages/02.work */
class __TwigTemplate_cbe06612866bed20545e948ae4435428a45b19c2beadb538db06d91b876d3712 extends Twig_Template
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
            <ul>
                ";
        // line 71
        echo var_dump($this->getAttribute($this->getAttribute(($context["taxonomylist"] ?? null), "get", [0 => "category"], "method"), "category", [], "array"));
        echo "
            </ul>
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
        return array (  91 => 71,  19 => 1,);
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
            <ul>
                {{ var_dump(taxonomylist.get('category')['category']) }}
            </ul>
        </div>
    </div>
</div>", "@Page:/var/www/html/shadowfactory/user/pages/02.work", "");
    }
}
