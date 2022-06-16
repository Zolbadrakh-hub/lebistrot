<?php 

add_action('wp_enqueue_scripts', 'fable_script_ie');
add_action('wp_enqueue_scripts', 'fable_theme_scripts_styles');
add_action('wp_enqueue_scripts', 'fable_google_fonts');
add_action('wp_head', 'fable_primary_color');



function fable_theme_scripts_styles() {

    
    /* Add Javascript bellow - use fable_add_js() to add: $name - unique, $url - path of javascript */

    // Loading Bootstrap
    fable_add_js('bootstrap', OVA_THEME_URI.'/assets/js/bootstrap.min.js');
    fable_add_js('bootstrap-select', OVA_THEME_URI.'/assets/js/bootstrap-select.js');
    fable_add_js('jquery-magnific-popup', OVA_THEME_URI.'/assets/js/jquery.magnific-popup.min.js');
    fable_add_js('jquery-nav', OVA_THEME_URI.'/assets/js/jquery.nav.js');
    fable_add_js('jquery-scrollto-min', OVA_THEME_URI.'/assets/js/jquery.scrollTo-min.js');
    fable_add_js('SmoothScroll', OVA_THEME_URI.'/assets/js/SmoothScroll.js');
    fable_add_js('wow', OVA_THEME_URI.'/assets/js/wow.js');
    fable_add_js('instafeed', OVA_THEME_URI.'/assets/js/instafeed.js');

    fable_add_js('custom', OVA_THEME_URI.'/assets/js/custom.js');
    fable_add_js('plugins_js', OVA_THEME_URI.'/assets/js/plugins.js');

    /* Add Css bellow - uyse fable_add_css to add: $name - unique, $url - path of css*/
    fable_add_css('bootstrap-3.3.5-dist', OVA_THEME_URI.'/assets/plugins/bootstrap/css/bootstrap.css');
    fable_add_css('animate', OVA_THEME_URI.'/assets/css/animate.css');
    fable_add_css('style-magnific-popup', OVA_THEME_URI.'/assets/css/style-magnific-popup.css');
    fable_add_css('font-awesome', OVA_THEME_URI.'/assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css');
    fable_add_css('icons-main', OVA_THEME_URI.'/assets/css/icons-main.css');
    fable_add_css('icons-helper', OVA_THEME_URI.'/assets/css/icons-helper.css');
    
    fable_add_css('fix', OVA_THEME_URI.'/assets/css/fix.css');

    if ( is_child_theme() ) {
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }


    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), 'fable' );

}

function fable_primary_color(){ ?>

         <style type="text/css">

            <?php
                $main_color = get_theme_mod('fable_cus_main_color', '#E67E22');
                $fable_cus_body_font = get_theme_mod('fable_cus_body_font', 'Lora');
                $fable_cus_title_font = get_theme_mod('fable_cus_title_font', 'Montserrat');
                $fable_cus_comic_font = get_theme_mod('fable_cus_comic_font', 'Tangerine');
                
                $main_color_rgb = fable_hex2rgb($main_color);
                $fable_cus_button_hover_color = get_theme_mod('fable_cus_button_hover_color', '#cb6912');
            ?>

            /* Font familly */

            /* Lora */
            body,
            .menu-list h5
            {
                font-family: <?php echo esc_attr($fable_cus_body_font); ?>, serif;
            }

            /* Montserrat */
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6,
            .nav > li,
            .popup-gallery a span.text,
            .btn-yellow, .btn-yellow-small, .btn-yellow-x-small,
            h3.blog-title a,
            h2.blog-title a,
            #commentform #submit.submit
            {
                font-family: <?php echo esc_attr($fable_cus_title_font); ?>, serif;
            }

            /* Tangerine */
            span.comic-text{
                    font-family: <?php echo esc_attr($fable_cus_comic_font); ?>, serif;
            }

            

            /* /Font familly */

            /* Menu */
                <?php 
                    $fable_cus_menu_bg_color = get_theme_mod('fable_cus_menu_bg_color', '');
                    $fable_cus_menu_bg_color_opacity = get_theme_mod('fable_cus_menu_bg_color_opacity', '');

                    $fable_cus_menu_bg_color_scroll = get_theme_mod('fable_cus_menu_bg_color_scroll', '');
                    $fable_cus_menu_bg_color_scroll_opacity = get_theme_mod('fable_cus_menu_bg_color_scroll_opacity', '');

                    $fable_cus_menu_link_color = get_theme_mod('fable_cus_menu_link_color', '');
                    $fable_cus_menu_link_color_hover = get_theme_mod('fable_cus_menu_link_color_hover', '');
                    $fable_cus_menu_link_color_active = get_theme_mod('fable_cus_menu_link_color_active', '');
                    $fable_cus_menu_link_color_scroll = get_theme_mod('fable_cus_menu_link_color_scroll', '');

                ?>
                <?php if($fable_cus_menu_bg_color_opacity == '' || $fable_cus_menu_bg_color_opacity == 1){ ?>
                    .navbar-fixed-top{
                        background-color: <?php echo esc_attr($fable_cus_menu_bg_color); ?>!important;
                    }
                <?php }else{ ?>
                    <?php $fable_cus_menu_bg_color_rgb =  fable_hex2rgb($fable_cus_menu_bg_color); ?>
                    .navbar-fixed-top{
                        background-color: rgba(<?php echo esc_attr($fable_cus_menu_bg_color_rgb[0]); ?>,<?php echo esc_attr($fable_cus_menu_bg_color_rgb[1]); ?>, <?php echo esc_attr($fable_cus_menu_bg_color_rgb[2]); ?>, <?php echo esc_attr($fable_cus_menu_bg_color_opacity); ?>);  
                    }
                <?php } ?>


                .navbar-fixed-top ul li,
                .navbar-default .navbar-nav > li > a,
                .navbar-default .navbar-nav > li.social > a i{
                    color: <?php echo esc_attr($fable_cus_menu_link_color); ?>;   
                }

                .navbar-fixed-top.navbar-default .navbar-nav > li.social > a.first{
                    border-left-color: <?php echo esc_attr($fable_cus_menu_link_color); ?>;
                }
                .navbar-fixed-top.navbar-default .navbar-nav > li > a.purchase{
                    color: <?php echo esc_attr($fable_cus_menu_link_color); ?>;   
                    border-color: <?php echo esc_attr($fable_cus_menu_link_color); ?>;
                }

                /*header when scroll*/
                <?php if($fable_cus_menu_bg_color_scroll_opacity == '' || $fable_cus_menu_bg_color_scroll_opacity == 1){ ?>
                    .navbar-fixed-top.opaque{
                        background-color: <?php echo esc_attr($fable_cus_menu_bg_color_scroll); ?>!important;
                    }
                <?php }else{ ?>
                    <?php $fable_cus_menu_bg_color_scroll_rgba =  fable_hex2rgb($fable_cus_menu_bg_color_scroll); ?>
                    .navbar-fixed-top.opaque{
                        background-color: rgba(<?php echo esc_attr($fable_cus_menu_bg_color_scroll_rgba[0]); ?>,<?php echo esc_attr($fable_cus_menu_bg_color_scroll_rgba[1]); ?>, <?php echo esc_attr($fable_cus_menu_bg_color_scroll_rgba[2]); ?>, <?php echo esc_attr($fable_cus_menu_bg_color_scroll_opacity); ?>);  
                    }
                <?php } ?>
                
                .navbar-fixed-top.opaque ul li,
                .navbar-default.opaque .navbar-nav > li > a,
                .navbar-default.opaque .navbar-nav > li.social > a i{
                    color: <?php echo esc_attr($fable_cus_menu_link_color_scroll); ?>;   
                }
                .navbar-fixed-top.opaque.navbar-default .navbar-nav > li.social > a.first{
                    border-left-color: <?php echo esc_attr($fable_cus_menu_link_color_scroll); ?>;
                }
                .navbar-fixed-top.opaque.navbar-default .navbar-nav > li > a.purchase{
                    color: <?php echo esc_attr($fable_cus_menu_link_color_scroll); ?>;   
                    border-color: <?php echo esc_attr($fable_cus_menu_link_color_scroll); ?>;   ;
                }

                .navbar-default .navbar-nav > li > a:hover,
                .navbar-default .navbar-nav > li.social > a:hover i{
                    color: <?php echo esc_attr($fable_cus_menu_link_color_hover); ?>!important;
                }
                .navbar-default .navbar-nav > li > a.purchase:hover{
                    color: <?php echo esc_attr($fable_cus_menu_link_color_hover); ?>!important;
                    border: 2px solid <?php echo esc_attr($fable_cus_menu_link_color_hover); ?>!important;
                }

                .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
                    color: <?php echo esc_attr($fable_cus_menu_link_color_active); ?>!important;
                }

                .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{
                    color: <?php echo esc_attr($main_color); ?>!important;
                }

            /* /Menu */

            /* Button */
            .btn-yellow, .btn-yellow-small, .btn-yellow-x-small{
                background-color: <?php echo esc_attr($main_color); ?>;
                border-color: <?php echo esc_attr($main_color); ?>;
            }
            .btn-yellow:hover, 
            .btn-yellow:focus, 
            .btn-yellow:active, 
            .btn-yellow.active, 
            .open .dropdown-toggle.btn-yellow, 
            .btn-yellow-small:hover, 
            .btn-yellow-small:focus, 
            .btn-yellow-small:active, 
            .btn-yellow-small.active, 
            .open .dropdown-toggle.btn-yellow-small, 
            .btn-yellow-x-small:hover, 
            .btn-yellow-x-small:focus, 
            .btn-yellow-x-small:active, 
            .btn-yellow-x-small.active, 
            .open .dropdown-toggle.btn-yellow-x-small{
                background-color: <?php echo esc_attr($fable_cus_button_hover_color); ?>;
                border: 1px solid <?php echo esc_attr($fable_cus_button_hover_color); ?>;
            }

            .btn-white-transparent:hover, .btn-white-transparent:focus, .btn-white-transparent:active, .btn-white-transparent.active, .open .dropdown-toggle.btn-white-transparent{
                color: <?php echo esc_attr($main_color); ?>; 
            }
            /* /Button */

            /* Loading */
            .sk-three-bounce .sk-child{
                background-color: <?php echo esc_attr($main_color); ?>; 
            }


            /* Begin */
            .popup-gallery a span.eye-wrapper, .popup-gallery a span.eye-wrapper2{
                background-color: rgba(<?php echo esc_attr($main_color_rgb[0]); ?>,<?php echo esc_attr($main_color_rgb[1]); ?>, <?php echo esc_attr($main_color_rgb[2]); ?>, 0.7);  
            }
            
            /* /Begin */

            /* heading */
            span.comic-text{
                color: <?php echo esc_attr($main_color); ?>;
            }
            p.hero-text:before{
                background-color: <?php echo esc_attr($main_color); ?>; 
            }
            /* /heading */

            /* Restaurant menu */
            .menu-list h5 a:hover{
                color: <?php echo esc_attr($main_color); ?>;
            }
            .menu-list p.price{
                color: <?php echo esc_attr($main_color); ?>;   
            }
            .menu-dot-line{
                border-bottom-color: <?php echo esc_attr($main_color); ?>;    
            }
            /* /Restaurant menu */

            /* Blog */
            h3.blog-title a:hover{
                color: <?php echo esc_attr($main_color); ?>;   
            }

            /* Footer */
            .footer h4::after{
                background-color: <?php echo esc_attr($main_color); ?>;      
            }
            ul.footer-gallery li:hover{
                border-color: <?php echo esc_attr($main_color); ?>;      
            }
            a.top-scroll{
                background-color: <?php echo esc_attr($main_color); ?>; 
                border-color: <?php echo esc_attr($main_color); ?>; 
            }
            a.top-scroll:hover{
                background-color: <?php echo esc_attr($fable_cus_button_hover_color); ?>; 
                border-color: <?php echo esc_attr($fable_cus_button_hover_color); ?>; 
            }
            .footer p a:hover{
                color: <?php echo esc_attr($main_color); ?>; 
            }
            ul.footer_social li a i:hover{
                color: <?php echo esc_attr($main_color); ?>; 
            }

            /* Restaurant category */
            h2.menu-section-title::after{
                background-color: <?php echo esc_attr($main_color); ?>; 
            }

            /* Form booking */
            input.register-submit{
                border: 1px solid <?php echo esc_attr($main_color); ?>; 
                background-color: <?php echo esc_attr($main_color); ?>; 
            }

            /* Carousel */
            .carousel.carousel1 .carousel-indicators li{
                border: 2px solid <?php echo esc_attr($main_color); ?>;
            }
            .carousel.carousel1 .carousel-indicators li.active{
                background-color: <?php echo esc_attr($main_color); ?>;
            }

            /* Contact form 7 */
            input.contact-submit{
                border: 2px solid <?php echo esc_attr($main_color); ?>; 
                background-color: <?php echo esc_attr($main_color); ?>;
            }
            input.contact-submit:hover{
                color: <?php echo esc_attr($main_color); ?>; 
                border: 2px solid <?php echo esc_attr($main_color); ?>; 
            }

            /* Blog */
            h2.blog-title a:hover{
                color: <?php echo esc_attr($main_color); ?>; 
            }
            i.meta_comment,
            a.blog-icons i{
                color: <?php echo esc_attr($main_color); ?>;    
            }
            i.meta_comment:hover,
            a.blog-icons:hover{
                color: <?php echo esc_attr($main_color); ?>;    
            }
            .post-meta a:hover{
                color: <?php echo esc_attr($main_color); ?>;    
            }
            .post-tag span.post-tags a:hover,
            .post-tag span.post-tags i{
                color: <?php echo esc_attr($main_color); ?>;    
            }
            .post-tag .post-categories a:hover,
            .post-tag .post-categories i{
                color: <?php echo esc_attr($main_color); ?>;
            }
            article.comment_item .comments_box .post_text h5 a:hover{
                color: <?php echo esc_attr($main_color); ?>;
            }
            a.comment-reply-link:hover{
                color: <?php echo esc_attr($main_color); ?>;   
            }
            #commentform #submit.submit{
                border: 1px solid <?php echo esc_attr($main_color); ?>;
                background-color: <?php echo esc_attr($main_color); ?>;
            }
            #commentform #submit.submit:hover {
                color: <?php echo esc_attr($main_color); ?>;
            }


            /* Pagination */
            .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
                background-color: <?php echo esc_attr($main_color); ?>;
                border-color: <?php echo esc_attr($main_color); ?>;
            }
            .pagination > li > a, .pagination > li > span{
                color: <?php echo esc_attr($main_color); ?>;
            }
            .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus{
                color: <?php echo esc_attr($fable_cus_button_hover_color); ?>;
            }
            .pagination > li > a, .pagination > li > span{
                margin: 5px;
            }

            /* Widget */
            #sidebar .widget a:hover{
                color: <?php echo esc_attr($main_color); ?>;
            }
            #sidebar .widget_tag_cloud .tagcloud a:hover{
                background-color: <?php echo esc_attr($main_color); ?>;   
                border-color: <?php echo esc_attr($main_color); ?>;   
            }


            /* Best menu */
            .home-menu-list p.price{
                color: <?php echo esc_attr($main_color); ?>;
            }




         </style>
    <?php
}




/* Google Font */
function fable_customize_google_fonts() {
    $fonts_url = '';

    $fable_cus_body_font = get_theme_mod('fable_cus_body_font', 'Lora');
    $fable_cus_title_font = get_theme_mod('fable_cus_title_font', 'Montserrat');
    $fable_cus_comic_font = get_theme_mod('fable_cus_comic_font', 'Tangerine');

    $cusbodyfont_c = _x( 'on', $fable_cus_body_font.': on or off', 'fable' );
    $cusheading1_c = _x( 'on', $fable_cus_title_font.': on or off', 'fable' );
    $cusheading2_c = _x( 'on', $fable_cus_comic_font.': on or off', 'fable' );

 
    if ( 'off' !== $cusbodyfont_c || 'off' !== $cusheading1_c || 'off' !== $cusheading2_c ) {
        $font_families = array();
 
        if ( 'off' !== $cusbodyfont_c ) {
            $font_families[] = $fable_cus_body_font.':100,200,300,400,500,600,700,800,900"';
        }
 
        if ( 'off' !== $cusheading1_c ) {
            $font_families[] = $fable_cus_title_font.':100,200,300,400,500,600,700,800,900';
        }

        if ( 'off' !== $cusheading2_c ) {
            $font_families[] = $fable_cus_comic_font.':100,200,300,400,500,600,700,800,900';
        }
        
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}


function fable_google_fonts() {
    wp_enqueue_style( 'fable-fonts', fable_customize_google_fonts(), array(), null );
}


function fable_add_js($name, $url){
    /* enqueue javascript */
    wp_enqueue_script($name,$url,array('jquery'),false,true);
}


function fable_add_css($name, $url){
    /* enqueue css*/
    wp_enqueue_style( $name,$url);
}

function fable_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);
   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return $rgb; // returns an array with the rgb values
}


function fable_script_ie(){

    wp_enqueue_script( 'html5shiv', OVA_THEME_URI.'/framework/script/html5shiv.js', array(), '4.5' );
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', OVA_THEME_URI.'/framework/script/respond.min.js', array(), '4.5' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}

function fable_wpadminjs() {

    wp_enqueue_script( 'wpadminjs', OVA_THEME_URI.'/extend/wpadmin.js', array('jquery'),false,true );
    wp_enqueue_style('fixcssadmin', OVA_THEME_URI.'/assets/css/fixcssadmin.css',  false, '1.0');
}
add_action( 'admin_enqueue_scripts', 'fable_wpadminjs' );



