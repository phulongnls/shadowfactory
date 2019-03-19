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
        // line 183
        echo "

";
        // line 185
        $this->displayBlock('bottom', $context, $blocks);
        // line 188
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


        function getArrayRowCol(class_name){
           
            var array_row_col = [];
    
            let arr_len = \$(\".grid-blog-content .grid-item\").length;

            for(let i = 0; i < arr_len; i++){
                let str = \$(\$(\".grid-blog-content .grid-item\")[i]).attr(\"class\");
      
                if(str){
                    // console.log(\"wtfffffffffffffff\");
                    // console.log(str);
                    // console.log(class_name);
                    // console.log(str.search(class_name));

                    if(str.search(class_name)!=-1){
                        let index_str_row = str.search(\"row\");
                        let index_str_col = str.search(\"col\");

                        let num_row = str[index_str_row+3];
                        let num_col = str[index_str_col+3];

                        let point = {
                            cow: num_col,
                            row: num_row,
                        };

                        array_row_col.push(point);
                    }
                  
                }
      
            }

            return array_row_col;

            // console.log(\"hello\");
            // console.log(array_row_col);
        }

        \$('.ul-filter-gallery li').click(function(e) { 
           
            // Process select catagory
            var select_class = \$(this).text().toLowerCase().split(\" \")[0];

            \$(\".grid-blog-content .grid-item\").each(function( index ) {

                var class_tag = \$(this).attr('class').toLowerCase().split(\" \");
                class_tag = class_tag[class_tag.length-1]
                // console.log(class_tag);
              if(class_tag == select_class || select_class == \"all\"){

              
                \$(this).fadeIn(\"slow\");
                \$(this).show();

              }else{


                // test(select_class);
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

            test(select_class);
        });

        \$.fn.swapWith = function(that) {
          var \$this = this;
          var \$that = \$(that);

          // create temporary placeholder
          var \$temp = \$(\"<div>\");

          // 3-step swap
          \$this.before(\$temp);
          \$that.before(\$this);
          \$temp.after(\$that).remove();

          return \$this;
        }



        var count = 0;
        // var arr_len = \$(\".grid-blog-content .grid-item\").length;
        // console.log(\"arr_len\");
        // console.log(arr_len);

         // \$(\".grid-blog-content .grid-item\")[0].replaceWith( \$(\".grid-blog-content .grid-item\")[1] );

        function test(select_class){

            if(select_class == \"all\"){
                select_class = \"\";
            }else{
                select_class = \".\"+select_class;
            }

             var arr_len = \$(\".grid-blog-content .grid-item\"+select_class).length;
            \$(\".grid-blog-content .grid-item.design\").each(function( index ) {
                console.log();
                console.log(this);
                // let str = \$(\$(\".grid-blog-content .grid-item\")[index]).attr(\"class\");

                // console.log(\"test function\");
                // console.log(str);
                // console.log(str.search(select_class));

                // if(str.search(select_class) != -1){

                    let count = 0;
                    let j_index;
           
                    for(let i = index; i < arr_len; i++){
                        if(count == 4){
                            j_index = i - 1;
                            // console.log('j index  = 4');
                            // console.log(index);
                            // console.log(j_index);

                            // getArrayRowCol(select_class);
                            break;
                        }else{

                            let row_col = getRowCol(i,select_class);
                            let tmp = count + parseInt(row_col[0]);
                            let count_before = count;

                            if(tmp>4){
                                tmp = count_before;
                            }
                            count += parseInt(row_col[0]);

                            if(count > 4){
                                count = 0;
                                j_index = i;

                                
                                for(let z = j_index; z < arr_len; z++){
                                    // console.log(\"z\")
                                    // console.log(z);
                                    // console.log(arr_len);
                                    if(z != arr_len){
                                        let row_col = getRowCol(z,select_class);
                                        if(count_before + parseInt(row_col[0]) == 4){
                                            // console.log(\"change j_index z\");
                                            // console.log(j_index);
                                            // console.log(z);

                                            // console.log(\$(\".grid-blog-content .grid-item\")[j_index]);
                                            // console.log(\$(\".grid-blog-content .grid-item\")[z]);
                                            \$(\$(\".grid-blog-content .grid-item\"+select_class)[j_index]).swapWith(\$(\".grid-blog-content .grid-item\"+select_class)[z]);
                 
                                            break;
                                        } 
                                    }

                                    if(z == arr_len-1){
                                        \$(\$(\".grid-blog-content .grid-item\"+select_class)[z]).swapWith(\$(\".grid-blog-content .grid-item\"+select_class)[z-1]);
                                    }
                                  
                                } 
                            
                                // console.log(\"j_index > 4\");
                                // console.log(index);
                                // console.log( j_index);

                                break;
                            }else{
                              
                                
                            }
                        }
                    }
                    // console.log(num_row);
                    // console.log(num_col);
               

                // }
            });

        }

        function getRowCol(index, select_class){
            // console.log(\"getRowCol\");
            // console.log(index);
            let str = \$(\$(\".grid-blog-content .grid-item\"+select_class)[index]).attr(\"class\");
            // console.log(str);

            if(str){
                let index_str_row = str.search(\"row\");
                let index_str_col = str.search(\"col\");

                let num_row = str[index_str_row+3];
                let num_col = str[index_str_col+3];

                  return [num_col, num_row];
            }else{
                return false;
            }
      

          
        }


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
                        <h6 class=\"label_form white\">Email</h6>
                        <input class=\"input-form\" type=\"email\" name=\"EMAIL\" id=\"\" value=\"\" autocapitalize=\"off\" autocorrect=\"off\">
                        <h6 class=\"label_form white\">Name</h6>
                        <input class=\"input-form\" type=\"text\" name=\"NAME\" id=\"\" value=\"\">
                        <h6 class=\"label-form white\">Message</h6>
                        <textarea class=\"input-form\" type=\"text\" name=\"MESSAGE\" id=\"\" row=\"4\"></textarea>

                        <input id=\"submit-footer-form\" type=\"submit\" value=\"submit\" name=\"subscribe\" class=\"button-factory button-yellow\">


                    </form>
                </div>

                <div class=\"right-section\">
                
                    <div class=\"socials\">
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-facebook-f\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"twitter\" class=\"svg-inline--fa fa-twitter fa-w-16 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-twitter\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"facebook-f\" class=\"svg-inline--fa fa-facebook-f fa-w-9 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 264 512\"><path fill=\"currentColor\" d=\"M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-linkedin-in\">
                           <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"instagram\" class=\"svg-inline--fa fa-instagram fa-w-14 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-instagram\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"linkedin-in\" class=\"svg-inline--fa fa-linkedin-in fa-w-14 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z\"></path></svg>

                        </a>
               
                    </div>

                    <div class=\"rights-reserved-section\">
                        <p>@ 2009 Shadow Factory</p>
                        <p>All Rights Reserved.</p>
                    </div>

                

                    <button id=\"btn-privacy-policy\" data-toggle=\"modal\" data-target=\"#modal-privacy-policy\">
                        <div id=\"icon-arrow\">
                            <svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"chevron-right\" class=\"svg-inline--fa fa-chevron-right fa-w-10 textYellow\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><path fill=\"currentColor\" d=\"M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z\"></path>
                            </svg>
                        </div>
                        <p>Privacy Policy</p>
                    </button>

                </div>

            </div>

        </div>

               <!-- Modal -->
                    <div class=\"modal fade\" id=\"modal-privacy-policy\" role=\"dialog\">
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

    // line 185
    public function block_bottom($context, array $blocks = [])
    {
        // line 186
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
        return array (  636 => 186,  633 => 185,  539 => 92,  536 => 91,  531 => 84,  527 => 83,  519 => 82,  516 => 81,  510 => 85,  507 => 84,  505 => 81,  501 => 79,  498 => 78,  493 => 74,  489 => 65,  486 => 64,  483 => 63,  473 => 66,  471 => 63,  463 => 58,  455 => 52,  452 => 51,  448 => 43,  445 => 42,  442 => 41,  439 => 40,  436 => 39,  432 => 36,  429 => 35,  426 => 34,  424 => 33,  421 => 32,  418 => 31,  410 => 44,  408 => 39,  402 => 37,  400 => 31,  380 => 14,  376 => 13,  373 => 12,  371 => 11,  360 => 7,  357 => 6,  354 => 5,  74 => 188,  72 => 185,  68 => 183,  66 => 91,  61 => 88,  59 => 78,  54 => 75,  52 => 74,  49 => 73,  47 => 51,  41 => 47,  39 => 5,  34 => 3,  30 => 1,);
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
                        <h6 class=\"label_form white\">Email</h6>
                        <input class=\"input-form\" type=\"email\" name=\"EMAIL\" id=\"\" value=\"\" autocapitalize=\"off\" autocorrect=\"off\">
                        <h6 class=\"label_form white\">Name</h6>
                        <input class=\"input-form\" type=\"text\" name=\"NAME\" id=\"\" value=\"\">
                        <h6 class=\"label-form white\">Message</h6>
                        <textarea class=\"input-form\" type=\"text\" name=\"MESSAGE\" id=\"\" row=\"4\"></textarea>

                        <input id=\"submit-footer-form\" type=\"submit\" value=\"submit\" name=\"subscribe\" class=\"button-factory button-yellow\">


                    </form>
                </div>

                <div class=\"right-section\">
                
                    <div class=\"socials\">
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-facebook-f\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"twitter\" class=\"svg-inline--fa fa-twitter fa-w-16 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-twitter\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"facebook-f\" class=\"svg-inline--fa fa-facebook-f fa-w-9 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 264 512\"><path fill=\"currentColor\" d=\"M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-linkedin-in\">
                           <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"instagram\" class=\"svg-inline--fa fa-instagram fa-w-14 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z\"></path></svg>
                        </a>
                        <a href=\"#\" target=\"_blank\" class=\"fab fa-instagram\">
                            <svg aria-hidden=\"true\" data-prefix=\"fab\" data-icon=\"linkedin-in\" class=\"svg-inline--fa fa-linkedin-in fa-w-14 \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z\"></path></svg>

                        </a>
               
                    </div>

                    <div class=\"rights-reserved-section\">
                        <p>@ 2009 Shadow Factory</p>
                        <p>All Rights Reserved.</p>
                    </div>

                

                    <button id=\"btn-privacy-policy\" data-toggle=\"modal\" data-target=\"#modal-privacy-policy\">
                        <div id=\"icon-arrow\">
                            <svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"chevron-right\" class=\"svg-inline--fa fa-chevron-right fa-w-10 textYellow\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><path fill=\"currentColor\" d=\"M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z\"></path>
                            </svg>
                        </div>
                        <p>Privacy Policy</p>
                    </button>

                </div>

            </div>

        </div>

               <!-- Modal -->
                    <div class=\"modal fade\" id=\"modal-privacy-policy\" role=\"dialog\">
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


        function getArrayRowCol(class_name){
           
            var array_row_col = [];
    
            let arr_len = \$(\".grid-blog-content .grid-item\").length;

            for(let i = 0; i < arr_len; i++){
                let str = \$(\$(\".grid-blog-content .grid-item\")[i]).attr(\"class\");
      
                if(str){
                    // console.log(\"wtfffffffffffffff\");
                    // console.log(str);
                    // console.log(class_name);
                    // console.log(str.search(class_name));

                    if(str.search(class_name)!=-1){
                        let index_str_row = str.search(\"row\");
                        let index_str_col = str.search(\"col\");

                        let num_row = str[index_str_row+3];
                        let num_col = str[index_str_col+3];

                        let point = {
                            cow: num_col,
                            row: num_row,
                        };

                        array_row_col.push(point);
                    }
                  
                }
      
            }

            return array_row_col;

            // console.log(\"hello\");
            // console.log(array_row_col);
        }

        \$('.ul-filter-gallery li').click(function(e) { 
           
            // Process select catagory
            var select_class = \$(this).text().toLowerCase().split(\" \")[0];

            \$(\".grid-blog-content .grid-item\").each(function( index ) {

                var class_tag = \$(this).attr('class').toLowerCase().split(\" \");
                class_tag = class_tag[class_tag.length-1]
                // console.log(class_tag);
              if(class_tag == select_class || select_class == \"all\"){

              
                \$(this).fadeIn(\"slow\");
                \$(this).show();

              }else{


                // test(select_class);
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

            test(select_class);
        });

        \$.fn.swapWith = function(that) {
          var \$this = this;
          var \$that = \$(that);

          // create temporary placeholder
          var \$temp = \$(\"<div>\");

          // 3-step swap
          \$this.before(\$temp);
          \$that.before(\$this);
          \$temp.after(\$that).remove();

          return \$this;
        }



        var count = 0;
        // var arr_len = \$(\".grid-blog-content .grid-item\").length;
        // console.log(\"arr_len\");
        // console.log(arr_len);

         // \$(\".grid-blog-content .grid-item\")[0].replaceWith( \$(\".grid-blog-content .grid-item\")[1] );

        function test(select_class){

            if(select_class == \"all\"){
                select_class = \"\";
            }else{
                select_class = \".\"+select_class;
            }

             var arr_len = \$(\".grid-blog-content .grid-item\"+select_class).length;
            \$(\".grid-blog-content .grid-item.design\").each(function( index ) {
                console.log();
                console.log(this);
                // let str = \$(\$(\".grid-blog-content .grid-item\")[index]).attr(\"class\");

                // console.log(\"test function\");
                // console.log(str);
                // console.log(str.search(select_class));

                // if(str.search(select_class) != -1){

                    let count = 0;
                    let j_index;
           
                    for(let i = index; i < arr_len; i++){
                        if(count == 4){
                            j_index = i - 1;
                            // console.log('j index  = 4');
                            // console.log(index);
                            // console.log(j_index);

                            // getArrayRowCol(select_class);
                            break;
                        }else{

                            let row_col = getRowCol(i,select_class);
                            let tmp = count + parseInt(row_col[0]);
                            let count_before = count;

                            if(tmp>4){
                                tmp = count_before;
                            }
                            count += parseInt(row_col[0]);

                            if(count > 4){
                                count = 0;
                                j_index = i;

                                
                                for(let z = j_index; z < arr_len; z++){
                                    // console.log(\"z\")
                                    // console.log(z);
                                    // console.log(arr_len);
                                    if(z != arr_len){
                                        let row_col = getRowCol(z,select_class);
                                        if(count_before + parseInt(row_col[0]) == 4){
                                            // console.log(\"change j_index z\");
                                            // console.log(j_index);
                                            // console.log(z);

                                            // console.log(\$(\".grid-blog-content .grid-item\")[j_index]);
                                            // console.log(\$(\".grid-blog-content .grid-item\")[z]);
                                            \$(\$(\".grid-blog-content .grid-item\"+select_class)[j_index]).swapWith(\$(\".grid-blog-content .grid-item\"+select_class)[z]);
                 
                                            break;
                                        } 
                                    }

                                    if(z == arr_len-1){
                                        \$(\$(\".grid-blog-content .grid-item\"+select_class)[z]).swapWith(\$(\".grid-blog-content .grid-item\"+select_class)[z-1]);
                                    }
                                  
                                } 
                            
                                // console.log(\"j_index > 4\");
                                // console.log(index);
                                // console.log( j_index);

                                break;
                            }else{
                              
                                
                            }
                        }
                    }
                    // console.log(num_row);
                    // console.log(num_col);
               

                // }
            });

        }

        function getRowCol(index, select_class){
            // console.log(\"getRowCol\");
            // console.log(index);
            let str = \$(\$(\".grid-blog-content .grid-item\"+select_class)[index]).attr(\"class\");
            // console.log(str);

            if(str){
                let index_str_row = str.search(\"row\");
                let index_str_col = str.search(\"col\");

                let num_row = str[index_str_row+3];
                let num_col = str[index_str_col+3];

                  return [num_col, num_row];
            }else{
                return false;
            }
      

          
        }


    });
</script>

</html>", "partials/shadowfactory.html.twig", "/var/www/shadowfactory/user/themes/quark/templates/partials/shadowfactory.html.twig");
    }
}
