<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

if ( file_exists( OVA_THEME_URL.'/framework/metabox/init.php' ) ) {
	require_once (OVA_THEME_URL.'/framework/metabox/init.php');
}

add_action( 'cmb2_init', 'fable_metaboxes' );
function fable_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = 'fable_met_';

    

    /* Page settings */
    $cmb = new_cmb2_box( array(
        'id'            => 'page_heading_settings',
        'title'         => esc_html__( 'Show Page Heading', 'fable' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        
    ) );

            // Display title of page
            $cmb->add_field( array(
                'name'       => esc_html__( 'Show title of page', 'fable' ),
                'desc'       => esc_html__( 'Allow display title of page', 'fable' ),
                'id'         => $prefix . 'page_heading',
                'type'             => 'select',
                'show_option_none' => false,
                'options'          => array(
                    'show' => esc_html__( 'Show', 'fable' ),
                    'hide'   => esc_html__('Hide', 'fable' )
                ),
                'default' => 'show',
                
            ) );




    /* Post settings */
    $cmb = new_cmb2_box( array(
        'id'            => 'post_video',
        'title'         => esc_html__( 'Post Settings', 'fable' ),
        'object_types'  => array( 'post'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );

            // Video or Audio
            $cmb->add_field( array(
                'name'       => esc_html__( 'Link audio or video', 'fable' ),
                'desc'       => esc_html__( 'Insert link audio or video use for video/audio post-format', 'fable' ),
                'id'         => $prefix . 'embed_media',
                'type'             => 'oembed',
            ) );

            // Gallery image
            $cmb->add_field( array(
                'name'       => esc_html__( 'Gallery image', 'fable' ),
                'desc'       => esc_html__( 'image in gallery post format', 'fable' ),
                'id'         => $prefix . 'file_list',
                'type'             => 'file_list',
            ) );


    

    /* General Settings */
    $cmb = new_cmb2_box( array(
        'id'            => 'layout_settings',
        'title'         => esc_html__( 'General Settings', 'fable' ),
        'object_types'  => array( 'page', 'post'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );

            $cmb->add_field( array(
                'name'       => esc_html__( 'Main Layout', 'fable' ),
                'desc'       => esc_html__( 'This value will override value in theme customizer', 'fable' ),
                'id'         => $prefix . 'main_layout',
                'type'             => 'select',
                'show_option_none' => false,
                'options'          => array(
                    'global'   => esc_html__('Global in customizer', 'fable' ),
                    'right_sidebar' => esc_html__( 'Right Sidebar', 'fable' ),
                    'left_sidebar'   => esc_html__('Left Sidebar', 'fable' ),
                    'fullwidth'   => esc_html__('No Sidebar', 'fable' ),
                ),
                'default' => 'global',
                
            ) );


            $cmb->add_field( array(
                'name'       => esc_html__( 'Width of site', 'fable' ),
                'desc'       => esc_html__( 'This value will override value in theme customizer', 'fable' ),
                'id'         => $prefix . 'version_layout',
                'type'             => 'select',
                'show_option_none' => false,
                'options'          => array(
                    'global'    => esc_html__('Global in customizer', 'fable'),
                    'wide' => esc_html__( 'Wide', 'fable' ),
                    'boxed'   => esc_html__('Boxed', 'fable' ),
                ),
                'default' => 'global',
                
            ) );

            $cmb->add_field( array(
                'name'       => esc_html__( 'Show border layout', 'fable' ),
                'id'         => $prefix . 'border_layout',
                'type'             => 'select',
                'show_option_none' => false,
                'options'          => array(
                    'no' => esc_html__( 'No', 'fable' ),
                    'yes'   => esc_html__('Yes', 'fable' ),
                ),
                'default' => 'no',
                
            ) );

            // Seo keywords
            $cmb->add_field( array(
                'name'       => esc_html__( 'SEO Keywords', 'fable' ),
                'desc'       => esc_html__( '(optional). This value will override value in global seo keyword of theme customizer.', 'fable' ),
                'id'         => $prefix . 'seo_key',
                'type'       => 'text',
                
            ) );

            // Seo description
            $cmb->add_field( array(
                'name'       => esc_html__( 'SEO Description', 'fable' ),
                'desc'       => esc_html__( '(optional). This value will override value in global seo description of theme customizer.', 'fable' ),
                'id'         => $prefix . 'seo_desc',
                'type'       => 'textarea',
            ) );

    /* Header Settings */
    $cmb = new_cmb2_box( array(
        'id'            => 'header_settings',
        'title'         => esc_html__( 'Header Settings', 'fable' ),
        'object_types'  => array( 'page', 'post', 'restaurant_menu'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
        $cmb->add_field( array(
                'name'       => esc_html__( 'Background', 'fable' ),
                'desc'       => esc_html__( 'Choose background', 'fable' ),
                'id'         => $prefix . 'header_bg',
                'type'             => 'file',
            ) );

        $cmb->add_field( array(
                'name'       => esc_html__( 'Comic text', 'fable' ),
                'id'         => $prefix . 'header_comic_text',
                'type'             => 'text',
            ) );
        $cmb->add_field( array(
                'name'       => esc_html__( 'Title text', 'fable' ),
                'id'         => $prefix . 'header_title_text',
                'type'             => 'text',
            ) );

        $cmb->add_field( array(
                'name'       => esc_html__( 'Description', 'fable' ),
                'id'         => $prefix . 'header_description_text',
                'type'             => 'textarea_code',
            ) );


    /* Restaurant menu */
    $cmb = new_cmb2_box( array(
        'id'            => 'restaurant_menu',
        'title'         => esc_html__( 'General Settings', 'fable' ),
        'object_types'  => array( 'restaurant_menu'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );

            $cmb->add_field( array(
                'name'       => esc_html__( 'Price', 'fable' ),
                'desc'       => esc_html__( 'Insert price', 'fable' ),
                'id'         => $prefix . 'price_menu',
                'type'             => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => esc_html__( 'Daily Menu', 'fable' ),
                'id'         => $prefix . 'daily_menu',
                'type'             => 'select',
                'show_option_none' => false,
                'options'          => array(
                    'no'   => esc_html__('No', 'fable' ),
                    'yes' => esc_html__( 'Yes', 'fable' ),
                ),
                'default' => 'no',
                
            ) );




}

