<?php
// Create sidebar
function fable_second_widgets_init() {
  
  $args_blog = array(
    'name' => esc_html__( 'Main Sidebar', 'fable'),
    'id' => "main-sidebar",
    'description' => esc_html__( 'Main Sidebar', 'fable' ),
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => "</h4>",
  );
  register_sidebar( $args_blog );


  $footer1 = array(
    'name' => esc_html__( 'Widget Footer 1', 'fable'),
    'id' => "widget_footer1",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer1 );


  $footer2 = array(
    'name' => esc_html__( 'Widget Footer 2', 'fable'),
    'id' => "widget_footer2",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer2 );


  $footer3 = array(
    'name' => esc_html__( 'Widget Footer 3', 'fable'),
    'id' => "widget_footer3",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer3 );

  

  $footer_bottom_left = array(
    'name' => esc_html__( 'Footer bottom left', 'fable'),
    'id' => "footer_bottom_left",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer_bottom_left );

  $footer_bottom_center = array(
    'name' => esc_html__( 'Footer bottom center', 'fable'),
    'id' => "footer_bottom_center",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer_bottom_center );

  $footer_bottom_right = array(
    'name' => esc_html__( 'Footer bottom right', 'fable'),
    'id' => "footer_bottom_right",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $footer_bottom_right );


   $woo_sidebar = array(
    'name' => esc_html__( 'Woo Sidebar', 'fable'),
    'id' => "woo-sidebar",
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title-footer">',
    'after_title' => "</h4>",
  );
  register_sidebar( $woo_sidebar );

  

  

}
add_action( 'widgets_init', 'fable_second_widgets_init' );



