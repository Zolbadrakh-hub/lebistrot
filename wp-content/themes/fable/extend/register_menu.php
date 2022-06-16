<?php	
function fable_register_menus() {
  register_nav_menus( array(
    'primary'   => esc_html__( 'Primary Menu', 'fable' )

  ) );
}
add_action( 'init', 'fable_register_menus' );

add_filter( 'wp_nav_menu_items', 'fable_add_custom_li', 10, 2 );
function fable_add_custom_li( $items, $args ) {
    if ($args->theme_location == 'primary' && get_theme_mod('fable_cus_header_social','')) {
        	$items .= get_theme_mod('fable_cus_header_social','');
    }
    return $items;
}
