<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <?php wp_head(); ?>
</head>

<?php


// Get version layout in each page or post
$fable_met_version_layout = (get_post_meta($wp_query->get_queried_object_id(), "fable_met_version_layout", true) != 'global') ? get_post_meta($wp_query->get_queried_object_id(), "fable_met_version_layout", true) : get_theme_mod("fable_cus_version_layout", 'wide');
$page_text_direction = ( is_rtl() ) ? 'rtl' : 'ltr';

$fable_met_border_layout = (get_post_meta($wp_query->get_queried_object_id(), "fable_met_border_layout", true) != '') ? get_post_meta($wp_query->get_queried_object_id(), "fable_met_border_layout", true) : 'no';
$menu_style = 'no_padding';
?>

<body <?php body_class(); ?>>

    <div class="container_boxed <?php echo esc_attr($fable_met_version_layout.' '.$page_text_direction); ?>">
        <div class="wrapper">

            <!--begin borders -->
            <?php if($fable_met_border_layout == 'yes'){ ?>
                <div id="border-left"></div>
                <div id="border-right"></div>
                <?php $menu_style = ''; ?>
            <?php } ?>
            <!--end borders -->

            <!--begin loader -->
            <?php if( get_theme_mod("fable_cus_display_spin","yes") != "no" ){  ?>
                <div id="loader">
                    <div class="sk-three-bounce">
                        <div class="sk-child sk-bounce1"></div>
                        <div class="sk-child sk-bounce2"></div>
                        <div class="sk-child sk-bounce3"></div>
                    </div>
                </div>
            <?php } ?>
            <!--end loader -->

            <!--begin header -->
            <header class="header <?php echo esc_attr($menu_style); ?>">

                <!--begin nav -->
                <nav class="navbar navbar-default navbar-fixed-top">
                    
                    <!--begin container -->
                    <div class="container">
                        
                    
                            <!--begin navbar -->
                            <div class="navbar-header">
                                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only"><?php esc_html_e('Toggle navigation','fable'); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                                                                    
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand brand scrool">
                                    <img  class="width-100" src="<?php  echo esc_url( get_theme_mod('fable_cus_logo', OVA_THEME_URI.'/framework/customizer/images/logo.png') ); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>"/>    
                                </a>
                            </div>
                                    
                            <div id="navbar-collapse-02" class="collapse navbar-collapse">
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => '',
                                        'theme_location'    => 'primary',
                                        'depth'             => 3,
                                        'container'         => '',
                                        'container_class'   => '',
                                        'container_id'      => '',
                                        'menu_class'        => 'nav navbar-nav navbar-right',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker()
                                    ));
                                ?>
                            </div>
                            <!--end navbar -->
                        
                                            
                    </div>
                    <!--end container -->
                    
                </nav>
                <!--end nav -->
                
            </header>
            <!--end header -->

            
            
            

            