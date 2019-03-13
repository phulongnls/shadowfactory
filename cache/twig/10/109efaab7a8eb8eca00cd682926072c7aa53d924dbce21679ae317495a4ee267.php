<?php

/* @Page:/var/www/html/shadowfactory/user/pages/02.work */
class __TwigTemplate_78ba4363cfe36e7a23053b9aa940d5286481c1ded9c1e7883f04a054699549b7 extends Twig_Template
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
        background: #010101;
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
        margin-bottom: 30px;
        padding-bottom: 18px;
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
        display: flex;
    }
    .col1 {
        width: calc(25% - 12px);
    }
    .col2 {
        width: calc(50% - 12px);
    }
    .col3 {
        width: calc(75% - 12px);
    }
    .col4 {
        width: 100%;
    }
    .row1 {
        height: 350px;
    }
    .row2 {
        height: 712px;
    }
    .list-works .grid-item .item {
        display: flex;
        overflow: hidden;
        position: relative;
        margin-bottom: 12px;
    }
    .list-works .grid-item .item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    .list-works .grid-item .item.objBottom img {
        object-position: bottom;
    }
    .list-works .grid-item .item .title {
        width: 100%;
        height: 100%;
        position: absolute;
        margin: 0;
        background: rgba(0,0,0,.65);
        transition: all .8s ease-in-out;
    }
    .list-works .grid-item .item .title a {
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: flex-start;
        align-items: flex-end;
        position: absolute;
        padding: 12px;
        top: 300px;
        transition: all .25s ease-in;
        text-decoration: none;
        color: #f1f1f1;
    }
    .list-works .grid-item .item:hover .title {
        background: linear-gradient(transparent,transparent,rgba(0,0,0,.8));
        transition: all .8s ease-in-out;
    }
    .list-works .grid-item .item:hover a {
        top: 0;
        transition: all .25s ease-out;
    }
</style>
<script src=\"https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js\"></script>
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
            ";
        // line 131
        $context["listWorks"] = [];
        // line 132
        echo "            ";
        $context["works"] = $this->getAttribute($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method"), "category", [], "array");
        // line 133
        echo "            <button class=\"active\" data-filter=\"*\">ALL</button>
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 135
            echo "                <button data-filter=\".";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $context["key"]);
            echo "\">";
            echo $context["key"];
            echo "</button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        </div>
        <div class=\"grid-item\">
            <div class=\"grid-sizer row1 col1\"></div>
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 141
            echo "                ";
            $context["listWorks"] = twig_array_merge(($context["listWorks"] ?? null), [0 => $context["key"]]);
            // line 142
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["category" => ($context["listWorks"] ?? null)], 1 => "or"], "method"), "order", [0 => "folder", 1 => "asc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 144
            echo "                ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->vardumpFunc($context["work"]);
            echo "
                ";
            // line 145
            $context["image"] = $this->getAttribute($this->getAttribute($context["work"], "header", []), "media_order", []);
            // line 146
            echo "                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "metadata", []), "classall", [], "array"), "content", [], "array")) {
                // line 147
                echo "                    ";
                $context["classSize"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "metadata", []), "classall", [], "array"), "content", [], "array");
                // line 148
                echo "                ";
            } else {
                // line 149
                echo "                    ";
                $context["classSize"] = "row1 col1";
                // line 150
                echo "                ";
            }
            // line 151
            echo "                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "metadata", []), "classtype", [], "array"), "content", [], "array")) {
                // line 152
                echo "                    ";
                $context["classSize1"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "metadata", []), "classtype", [], "array"), "content", [], "array");
                // line 153
                echo "                ";
            } else {
                // line 154
                echo "                    ";
                $context["classSize1"] = "row1 col1";
                // line 155
                echo "                ";
            }
            // line 156
            echo "                <div class=\"item ";
            echo ($context["classSize"] ?? null);
            echo " ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "taxonomy", []), "category", [], "array"), 0, [], "array"));
            echo "\" data-all=\"";
            echo ($context["classSize"] ?? null);
            echo "\" data-type=\"";
            echo ($context["classSize1"] ?? null);
            echo "\">
                    <img src=\"";
            // line 157
            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["work"], "media", []), ($context["image"] ?? null), [], "array"), "url", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["work"], "title", []);
            echo "\">
                    <h4 class=\"title\"><a href=\"#\">";
            // line 158
            echo $this->getAttribute($context["work"], "title", []);
            echo "</a></h4>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$('.list-works .grid-item').isotope({
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
            \$('.list-works .grid-item').isotope({ filter: filterValue });
        }
    });
</script>";
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
        return array (  260 => 161,  251 => 158,  245 => 157,  234 => 156,  231 => 155,  228 => 154,  225 => 153,  222 => 152,  219 => 151,  216 => 150,  213 => 149,  210 => 148,  207 => 147,  204 => 146,  202 => 145,  197 => 144,  192 => 143,  186 => 142,  183 => 141,  179 => 140,  174 => 137,  163 => 135,  159 => 134,  156 => 133,  153 => 132,  151 => 131,  19 => 1,);
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
        background: #010101;
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
        margin-bottom: 30px;
        padding-bottom: 18px;
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
        display: flex;
    }
    .col1 {
        width: calc(25% - 12px);
    }
    .col2 {
        width: calc(50% - 12px);
    }
    .col3 {
        width: calc(75% - 12px);
    }
    .col4 {
        width: 100%;
    }
    .row1 {
        height: 350px;
    }
    .row2 {
        height: 712px;
    }
    .list-works .grid-item .item {
        display: flex;
        overflow: hidden;
        position: relative;
        margin-bottom: 12px;
    }
    .list-works .grid-item .item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    .list-works .grid-item .item.objBottom img {
        object-position: bottom;
    }
    .list-works .grid-item .item .title {
        width: 100%;
        height: 100%;
        position: absolute;
        margin: 0;
        background: rgba(0,0,0,.65);
        transition: all .8s ease-in-out;
    }
    .list-works .grid-item .item .title a {
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: flex-start;
        align-items: flex-end;
        position: absolute;
        padding: 12px;
        top: 300px;
        transition: all .25s ease-in;
        text-decoration: none;
        color: #f1f1f1;
    }
    .list-works .grid-item .item:hover .title {
        background: linear-gradient(transparent,transparent,rgba(0,0,0,.8));
        transition: all .8s ease-in-out;
    }
    .list-works .grid-item .item:hover a {
        top: 0;
        transition: all .25s ease-out;
    }
</style>
<script src=\"https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js\"></script>
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
            {% set listWorks = [] %}
            {% set works = taxonomylist.get()['category'] %}
            <button class=\"active\" data-filter=\"*\">ALL</button>
            {% for key, item in works %}
                <button data-filter=\".{{ key|camelize }}\">{{ key }}</button>
            {% endfor %}
        </div>
        <div class=\"grid-item\">
            <div class=\"grid-sizer row1 col1\"></div>
            {% for key, item in works %}
                {% set listWorks = listWorks|merge([key]) %}
            {% endfor %}
            {% for work in taxonomy.findTaxonomy({'category':listWorks}, 'or').order('folder','asc') %}
                {{ vardump(work) }}
                {% set image = work.header.media_order %}
                {% if (work.metadata['classall']['content']) %}
                    {% set classSize = work.metadata['classall']['content'] %}
                {% else %}
                    {% set classSize = 'row1 col1' %}
                {% endif %}
                {% if (work.metadata['classtype']['content']) %}
                    {% set classSize1 = work.metadata['classtype']['content'] %}
                {% else %}
                    {% set classSize1 = 'row1 col1' %}
                {% endif %}
                <div class=\"item {{ classSize }} {{ work.taxonomy['category'][0]|camelize }}\" data-all=\"{{ classSize }}\" data-type=\"{{ classSize1 }}\">
                    <img src=\"{{ work.media[image].url }}\" alt=\"{{ work.title }}\">
                    <h4 class=\"title\"><a href=\"#\">{{ work.title }}</a></h4>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$('.list-works .grid-item').isotope({
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
            \$('.list-works .grid-item').isotope({ filter: filterValue });
        }
    });
</script>", "@Page:/var/www/html/shadowfactory/user/pages/02.work", "");
    }
}
