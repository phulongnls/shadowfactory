<?php

/* partials/shadowfactory.html.twig */
class __TwigTemplate_89e6fb2b6a68418976369808f5d3537c8007b7fa1f758a8de800cb0f85a2a989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</head>

<body id=\"top\">

    ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('hero', $context, $blocks);
        // line 75
        echo "
        <div id=\"start\">

        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
        </div>

    ";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 164
        echo "

";
        // line 166
        $this->displayBlock('bottom', $context, $blocks);
        // line 169
        echo "
</body>

<script type=\"text/javascript\">

    \$(document).ready(function() {
  
       \$( \".footer-title\" ).click(function() {
            var footer = \$('#footer');
            // console.log(footer); 
            var height_footer = footer.height();
            // console.log(height_footer);
            if(height_footer == 1003){
                footer.animate({
                    height: 270
                }, 500, \"linear\" , function() {
                // Animation complete.
                
              });
                \$(\".footer-title span\").toggleClass('glyphicon-minus glyphicon-plus ');
               
                \$(\".footer-title span\").css({
                    'transform' :  'rotate(-270deg)',
                });

            }else{
             footer.animate({
                height: 1003
              }, 500, \"linear\", function() {
                // Animation complete.
                var targetOffset = footer.offset().top;
                 
              });
               \$(\".footer-title span\").toggleClass('glyphicon-plus glyphicon-minus');
                   \$(\".footer-title span\").css({
                'transform' :  'rotate(180deg)',
             });
             
            } 

            var targetOffset = footer.offset().top;
            \$('html, body').animate({scrollTop: targetOffset}, 500);

         
      

         
       });

        \$('.ul-filter-gallery li').click(function(e) { 
            // alert(\"wtf\");
            // Process select catagory
            var select_class = \$(this).text().toLowerCase().split(\" \")[0];

            \$(\".grid-our-work  .grid-item\").each(function( index ) {

                var class_tag = \$(this).attr('class').toLowerCase().split(\" \");
                class_tag = class_tag[class_tag.length-1]
                console.log(class_tag);
              if(class_tag == select_class || select_class == \"all\"){

                \$(this).fadeIn(\"slow\");
                \$(this).show();

              }else{

                \$(this).fadeIn(\"slow\");
                \$(this).hide();

              }

            });

            \$('.ul-filter-gallery li').css({

                'border-bottom': 'none',

            });


            \$(this).css({

                'border-bottom': '3px solid #01c6d9',

            });


        });

   

    });
</script>

</html>";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/shadowfactory.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

  <!--   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"> -->



    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js\"></script>
  
    ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 32
        echo "   
        ";
        // line 33
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/shadow_factory_home.css"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/shadow_factory_blog.css"], "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/shadow_factory_general.css"], "method");
        // line 36
        echo "    ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 43
        echo "    ";
    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        // line 52
        echo "        <div id=\"header\">

            <div class=\"navigation\">
        
                <div class=\"logo\">
                   
                    <img src=\"";
        // line 58
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/afereri.jpg");
        echo "\" alt=\"Smiley face\" height=\"47.72\" width=\"133.18\">
                </div>

                <div class=\"desktop-menu\">

                    ";
        // line 63
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 66
        echo "               
                </div>
            </div>

        </div>

    ";
    }

    // line 63
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 64
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/shadowfactory.html.twig", 64)->display($context);
        // line 65
        echo "                    ";
    }

    // line 74
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        // line 79
        echo "            <div id=\"body-wrapper\">
              
                    ";
        // line 81
        $this->displayBlock('messages', $context, $blocks);
        // line 84
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "          
            </div>
        ";
    }

    // line 81
    public function block_messages($context, array $blocks = [])
    {
        // line 82
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/shadowfactory.html.twig", 82)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 83
        echo "                    ";
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
    }

    // line 91
    public function block_footer($context, array $blocks = [])
    {
        // line 92
        echo "
        <div id=\"footer\">
           
            <div class=\"footer-title\">
                <h3>Tell us your idea,<br> we'll make it work.</h3>
                <span class=\"glyphicon glyphicon-plus icon-colour\"></span>
            </div>
         
            <!-- <div class=\"content-footer collapse show\" id=\"collapseOne\" data-parent=\"#footer\"> -->
            <div class=\"content-footer\"> 
                <div class=\"left-section\">
                   

                    <form class=\"form_footer\" action=\"https://shadowfactory.us18.list-manage.com/subscribe/post\" method=\"POST\" novalidate=\"\">
                        <h6 class=\"label_form black\">Email</h6>
                        <input class=\"input-form\" type=\"email\" name=\"EMAIL\" id=\"\" value=\"\" autocapitalize=\"off\" autocorrect=\"off\">
                        <h6 class=\"label_form black\">Name</h6>
                        <input class=\"input-form\" type=\"text\" name=\"NAME\" id=\"\" value=\"\">
                        <h6 class=\"label-form black\">Message</h6>
                        <textarea class=\"input-form\" type=\"text\" name=\"MESSAGE\" id=\"\" row=\"4\"></textarea>

                        <input id=\"submit-footer-form\" type=\"submit\" value=\"submit\" name=\"subscribe\" class=\"button-factory button-yellow\">


                    </form>
                </div>

                <div class=\"right-section\">
                
                    <div class=\"socials\">
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-facebook-f\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-twitter\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-linkedin-in\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-instagram\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fas fa-envelope\"></a>
                    </div>

                    <p>Where to find us</p>
                    <p>Where to find us</p>
                    <button data-toggle=\"modal\" data-target=\"#modal-privaci-policy\">Privacy Policy</button>

             
                </div>

            </div>

        </div>

               <!-- Modal -->
                    <div class=\"modal fade\" id=\"modal-privaci-policy\" role=\"dialog\">
                        <div class=\"modal-dialog modal-privacy-policy-dialog\">
                            
                          <!-- Modal content-->
                            <div class=\"modal-content modal-privacy-policy-content\">
                            <!-- <div class=\"modal-header no-border\"> -->
                              <button type=\"button\" class=\"close close-privacy-policy\" data-dismiss=\"modal\">&times;</button>
                              <!-- <h4 class=\"modal-title\">Modal Header</h4> -->
                            <!-- </div> -->
                                <div class=\"modal-body\">
                                    <div class=\"privacyContent\"><h4>1. Terms</h4><p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, applicable laws and regulations and their compliance. If you disagree with any of the stated terms and conditions, you are prohibited from using or accessing this site. The materials contained in this site are secured by relevant copyright and trade mark law.</p><h4>2. Use License</h4><ul class=\"lowerAlpha\"><li><p>Permission is allowed to temporarily download one duplicate of the materials (data or programming) on Shadow Factory Limited's site for individual and non-business use only. This is the just a permit of license and not an exchange of title, and under this permit you may not:</p></li><ul class=\"upperRoman\"><li><p>modify or copy the materials;</p></li><li><p>use the materials for any commercial use , or for any public presentation (business or non-business);</p></li><li><p>attempt to decompile or rebuild any product or material contained on Shadow Factory Limited's site;</p></li><li><p>remove any copyright or other restrictive documentations from the materials; or</p></li><li><p>transfer the materials to someone else or even \"mirror\" the materials on other server.</p></li></ul><li><p>This permit might consequently be terminated if you disregard any of these confinements and may be ended by Shadow Factory Limited whenever deemed. After permit termination or when your viewing permit is terminated, you must destroy any downloaded materials in your ownership whether in electronic or printed form.</p></li></ul><h4>3. Disclaimer</h4><p>The materials on Shadow Factory Limited's site are given \"as is\". Shadow Factory Limited makes no guarantees, communicated or suggested, and thus renounces and nullifies every single other warranties, including without impediment, inferred guarantees or states of merchantability, fitness for a specific reason, or non-encroachment of licensed property or other infringement of rights. Further, Shadow Factory Limited does not warrant or make any representations concerning the precision, likely results, or unwavering quality of the utilization of the materials on its Internet site or generally identifying with such materials or on any destinations connected to this website.</p><h4>4. Constraints</h4><p>In no occasion should Shadow Factory Limited or its suppliers subject for any harms (counting, without constraint, harms for loss of information or benefit, or because of business interference,) emerging out of the utilization or powerlessness to utilize the materials on Shadow Factory Limited's Internet webpage, regardless of the possibility that Shadow Factory Limited or a Shadow Factory Limited approved agent has been told orally or in written of the likelihood of such harm. Since a few purviews don't permit constraints on inferred guarantees, or impediments of obligation for weighty or coincidental harms, these confinements may not make a difference to you.</p><h4>5. Amendments and Errata</h4><p>The materials showing up on Shadow Factory Limited's site could incorporate typographical, or photographic mistakes. Shadow Factory Limited does not warrant that any of the materials on its site are exact, finished, or current. Shadow Factory Limited may roll out improvements to the materials contained on its site whenever without notification. Shadow Factory Limited does not, then again, make any dedication to update the materials.</p><h4>6. Links</h4><p>Shadow Factory Limited has not checked on the majority of the websites or links connected to its website and is not in charge of the substance of any such connected webpage. The incorporation of any connection does not infer support by Shadow Factory Limited of the site. Utilization of any such connected site is at the user's own risk.</p><h4>7. Site Terms of Use Modifications</h4><p>Shadow Factory Limited may update these terms of utilization for its website whenever without notification. By utilizing this site you are consenting to be bound by the then current form of these Terms and Conditions of Use.</p><h4>8. Governing Law</h4><p>Any case identifying with Shadow Factory Limited's site should be administered by the laws of the country of Hong Kong without respect to its contention of law provisions.</p><p>General Terms and Conditions applicable to Use of a Web Site.</p><h4 class=\"mt4 pt4\">Privacy Policy</h4><p>Your privacy is critical to us. Likewise, we have built up this Policy with the end goal you should see how we gather, utilize, impart and reveal and make utilization of individual data. The following blueprints our privacy policy.</p><ul class=\"square\"><li><p>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</p></li><li><p>We will gather and utilization of individual data singularly with the target of satisfying those reasons indicated by us and for other good purposes, unless we get the assent of the individual concerned or as required by law.</p></li><li><p>We will just hold individual data the length of essential for the satisfaction of those reasons.</p></li><li><p>We will gather individual data by legal and reasonable means and, where fitting, with the information or assent of the individual concerned.</p></li><li><p>Personal information ought to be important to the reasons for which it is to be utilized, and, to the degree essential for those reasons, ought to be exact, finished, and updated.</p></li><li><p>We will protect individual data by security shields against misfortune or burglary, and also unapproved access, divulgence, duplicating, use or alteration.</p></li><li><p>We will promptly provide customers with access to our policies and procedures for the administration of individual data.</p></li></ul><p>We are focused on leading our business as per these standards with a specific end goal to guarantee that the privacy of individual data is secure and maintained.</p></div>
                                </div>
                           <!--  <div class=\"modal-footer\">
                              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            </div> -->
                          </div>
                          
                        </div>
                    </div>

 
       
    ";
    }

    // line 166
    public function block_bottom($context, array $blocks = [])
    {
        // line 167
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/shadowfactory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 167,  432 => 166,  357 => 92,  354 => 91,  349 => 84,  345 => 83,  337 => 82,  334 => 81,  328 => 85,  325 => 84,  323 => 81,  319 => 79,  316 => 78,  311 => 74,  307 => 65,  304 => 64,  301 => 63,  291 => 66,  289 => 63,  281 => 58,  273 => 52,  270 => 51,  266 => 43,  263 => 42,  260 => 41,  257 => 40,  254 => 39,  250 => 36,  247 => 35,  244 => 34,  242 => 33,  239 => 32,  236 => 31,  228 => 44,  226 => 39,  220 => 37,  218 => 31,  198 => 14,  194 => 13,  191 => 12,  189 => 11,  178 => 7,  175 => 6,  172 => 5,  74 => 169,  72 => 166,  68 => 164,  66 => 91,  61 => 88,  59 => 78,  54 => 75,  52 => 74,  49 => 73,  47 => 51,  41 => 47,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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

  <!--   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"> -->



    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js\"></script>
  
    {% block stylesheets %}
   
        {% do assets.addCss('theme://css/shadow_factory_home.css') %}
        {% do assets.addCss('theme://css/shadow_factory_blog.css') %}
        {% do assets.addCss('theme://css/shadow_factory_general.css') %}
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

<body id=\"top\">

    {% block header %}
        <div id=\"header\">

            <div class=\"navigation\">
        
                <div class=\"logo\">
                   
                    <img src=\"{{ url('theme://assets/afereri.jpg') }}\" alt=\"Smiley face\" height=\"47.72\" width=\"133.18\">
                </div>

                <div class=\"desktop-menu\">

                    {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
               
                </div>
            </div>

        </div>

    {% endblock %}

    {% block hero %}{% endblock %}

        <div id=\"start\">

        {% block body %}
            <div id=\"body-wrapper\">
              
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
          
            </div>
        {% endblock %}

        </div>

    {% block footer %}

        <div id=\"footer\">
           
            <div class=\"footer-title\">
                <h3>Tell us your idea,<br> we'll make it work.</h3>
                <span class=\"glyphicon glyphicon-plus icon-colour\"></span>
            </div>
         
            <!-- <div class=\"content-footer collapse show\" id=\"collapseOne\" data-parent=\"#footer\"> -->
            <div class=\"content-footer\"> 
                <div class=\"left-section\">
                   

                    <form class=\"form_footer\" action=\"https://shadowfactory.us18.list-manage.com/subscribe/post\" method=\"POST\" novalidate=\"\">
                        <h6 class=\"label_form black\">Email</h6>
                        <input class=\"input-form\" type=\"email\" name=\"EMAIL\" id=\"\" value=\"\" autocapitalize=\"off\" autocorrect=\"off\">
                        <h6 class=\"label_form black\">Name</h6>
                        <input class=\"input-form\" type=\"text\" name=\"NAME\" id=\"\" value=\"\">
                        <h6 class=\"label-form black\">Message</h6>
                        <textarea class=\"input-form\" type=\"text\" name=\"MESSAGE\" id=\"\" row=\"4\"></textarea>

                        <input id=\"submit-footer-form\" type=\"submit\" value=\"submit\" name=\"subscribe\" class=\"button-factory button-yellow\">


                    </form>
                </div>

                <div class=\"right-section\">
                
                    <div class=\"socials\">
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-facebook-f\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-twitter\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-linkedin-in\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-instagram\"></a>
                        <a href=\"#\" target=\"_blank\" class=\"fas fa-envelope\"></a>
                    </div>

                    <p>Where to find us</p>
                    <p>Where to find us</p>
                    <button data-toggle=\"modal\" data-target=\"#modal-privaci-policy\">Privacy Policy</button>

             
                </div>

            </div>

        </div>

               <!-- Modal -->
                    <div class=\"modal fade\" id=\"modal-privaci-policy\" role=\"dialog\">
                        <div class=\"modal-dialog modal-privacy-policy-dialog\">
                            
                          <!-- Modal content-->
                            <div class=\"modal-content modal-privacy-policy-content\">
                            <!-- <div class=\"modal-header no-border\"> -->
                              <button type=\"button\" class=\"close close-privacy-policy\" data-dismiss=\"modal\">&times;</button>
                              <!-- <h4 class=\"modal-title\">Modal Header</h4> -->
                            <!-- </div> -->
                                <div class=\"modal-body\">
                                    <div class=\"privacyContent\"><h4>1. Terms</h4><p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, applicable laws and regulations and their compliance. If you disagree with any of the stated terms and conditions, you are prohibited from using or accessing this site. The materials contained in this site are secured by relevant copyright and trade mark law.</p><h4>2. Use License</h4><ul class=\"lowerAlpha\"><li><p>Permission is allowed to temporarily download one duplicate of the materials (data or programming) on Shadow Factory Limited's site for individual and non-business use only. This is the just a permit of license and not an exchange of title, and under this permit you may not:</p></li><ul class=\"upperRoman\"><li><p>modify or copy the materials;</p></li><li><p>use the materials for any commercial use , or for any public presentation (business or non-business);</p></li><li><p>attempt to decompile or rebuild any product or material contained on Shadow Factory Limited's site;</p></li><li><p>remove any copyright or other restrictive documentations from the materials; or</p></li><li><p>transfer the materials to someone else or even \"mirror\" the materials on other server.</p></li></ul><li><p>This permit might consequently be terminated if you disregard any of these confinements and may be ended by Shadow Factory Limited whenever deemed. After permit termination or when your viewing permit is terminated, you must destroy any downloaded materials in your ownership whether in electronic or printed form.</p></li></ul><h4>3. Disclaimer</h4><p>The materials on Shadow Factory Limited's site are given \"as is\". Shadow Factory Limited makes no guarantees, communicated or suggested, and thus renounces and nullifies every single other warranties, including without impediment, inferred guarantees or states of merchantability, fitness for a specific reason, or non-encroachment of licensed property or other infringement of rights. Further, Shadow Factory Limited does not warrant or make any representations concerning the precision, likely results, or unwavering quality of the utilization of the materials on its Internet site or generally identifying with such materials or on any destinations connected to this website.</p><h4>4. Constraints</h4><p>In no occasion should Shadow Factory Limited or its suppliers subject for any harms (counting, without constraint, harms for loss of information or benefit, or because of business interference,) emerging out of the utilization or powerlessness to utilize the materials on Shadow Factory Limited's Internet webpage, regardless of the possibility that Shadow Factory Limited or a Shadow Factory Limited approved agent has been told orally or in written of the likelihood of such harm. Since a few purviews don't permit constraints on inferred guarantees, or impediments of obligation for weighty or coincidental harms, these confinements may not make a difference to you.</p><h4>5. Amendments and Errata</h4><p>The materials showing up on Shadow Factory Limited's site could incorporate typographical, or photographic mistakes. Shadow Factory Limited does not warrant that any of the materials on its site are exact, finished, or current. Shadow Factory Limited may roll out improvements to the materials contained on its site whenever without notification. Shadow Factory Limited does not, then again, make any dedication to update the materials.</p><h4>6. Links</h4><p>Shadow Factory Limited has not checked on the majority of the websites or links connected to its website and is not in charge of the substance of any such connected webpage. The incorporation of any connection does not infer support by Shadow Factory Limited of the site. Utilization of any such connected site is at the user's own risk.</p><h4>7. Site Terms of Use Modifications</h4><p>Shadow Factory Limited may update these terms of utilization for its website whenever without notification. By utilizing this site you are consenting to be bound by the then current form of these Terms and Conditions of Use.</p><h4>8. Governing Law</h4><p>Any case identifying with Shadow Factory Limited's site should be administered by the laws of the country of Hong Kong without respect to its contention of law provisions.</p><p>General Terms and Conditions applicable to Use of a Web Site.</p><h4 class=\"mt4 pt4\">Privacy Policy</h4><p>Your privacy is critical to us. Likewise, we have built up this Policy with the end goal you should see how we gather, utilize, impart and reveal and make utilization of individual data. The following blueprints our privacy policy.</p><ul class=\"square\"><li><p>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</p></li><li><p>We will gather and utilization of individual data singularly with the target of satisfying those reasons indicated by us and for other good purposes, unless we get the assent of the individual concerned or as required by law.</p></li><li><p>We will just hold individual data the length of essential for the satisfaction of those reasons.</p></li><li><p>We will gather individual data by legal and reasonable means and, where fitting, with the information or assent of the individual concerned.</p></li><li><p>Personal information ought to be important to the reasons for which it is to be utilized, and, to the degree essential for those reasons, ought to be exact, finished, and updated.</p></li><li><p>We will protect individual data by security shields against misfortune or burglary, and also unapproved access, divulgence, duplicating, use or alteration.</p></li><li><p>We will promptly provide customers with access to our policies and procedures for the administration of individual data.</p></li></ul><p>We are focused on leading our business as per these standards with a specific end goal to guarantee that the privacy of individual data is secure and maintained.</p></div>
                                </div>
                           <!--  <div class=\"modal-footer\">
                              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            </div> -->
                          </div>
                          
                        </div>
                    </div>

 
       
    {% endblock %}


{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>

<script type=\"text/javascript\">

    \$(document).ready(function() {
  
       \$( \".footer-title\" ).click(function() {
            var footer = \$('#footer');
            // console.log(footer); 
            var height_footer = footer.height();
            // console.log(height_footer);
            if(height_footer == 1003){
                footer.animate({
                    height: 270
                }, 500, \"linear\" , function() {
                // Animation complete.
                
              });
                \$(\".footer-title span\").toggleClass('glyphicon-minus glyphicon-plus ');
               
                \$(\".footer-title span\").css({
                    'transform' :  'rotate(-270deg)',
                });

            }else{
             footer.animate({
                height: 1003
              }, 500, \"linear\", function() {
                // Animation complete.
                var targetOffset = footer.offset().top;
                 
              });
               \$(\".footer-title span\").toggleClass('glyphicon-plus glyphicon-minus');
                   \$(\".footer-title span\").css({
                'transform' :  'rotate(180deg)',
             });
             
            } 

            var targetOffset = footer.offset().top;
            \$('html, body').animate({scrollTop: targetOffset}, 500);

         
      

         
       });

        \$('.ul-filter-gallery li').click(function(e) { 
            // alert(\"wtf\");
            // Process select catagory
            var select_class = \$(this).text().toLowerCase().split(\" \")[0];

            \$(\".grid-our-work  .grid-item\").each(function( index ) {

                var class_tag = \$(this).attr('class').toLowerCase().split(\" \");
                class_tag = class_tag[class_tag.length-1]
                console.log(class_tag);
              if(class_tag == select_class || select_class == \"all\"){

                \$(this).fadeIn(\"slow\");
                \$(this).show();

              }else{

                \$(this).fadeIn(\"slow\");
                \$(this).hide();

              }

            });

            \$('.ul-filter-gallery li').css({

                'border-bottom': 'none',

            });


            \$(this).css({

                'border-bottom': '3px solid #01c6d9',

            });


        });

   

    });
</script>

</html>", "partials/shadowfactory.html.twig", "/var/www/shadowfactory/user/themes/quark/templates/partials/shadowfactory.html.twig");
    }
}
