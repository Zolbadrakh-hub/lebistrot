<?php
add_action('init','init_visual_composer_custom',1000);
function init_visual_composer_custom(){
    if(function_exists('vc_map')){

vc_map( array(
	 "name" => esc_html__("Begin", 'fable'),
	 "base" => "fable_begin",
	 "class" => "",
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	
	 	array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Choose Image",'fable'),
			"param_name" => "image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Title",'fable'),
			"param_name" => "title",
			"value" => ""
		),
		array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "heading" => __("target",'fable'),
            "param_name" => "style",
            "value" => array(
            	esc_html__('Scroll', 'fable') => 'scrool',
                esc_html__('New window', 'fable') => '_blank',
                esc_html__('Same window', 'fable') => '_self'
            ),
            "default"  => 'scrool'
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Link",'fable'),
			"param_name" => "link",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Class",'fable'),
			"param_name" => "class",
			"value" => "",
			"description" => 'Insert class to use for your style'
		)

	 
)));


vc_map( array(
	 "name" => esc_html__("Heading", 'fable'),
	 "base" => "fable_heading",
	 "class" => "",
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	
	 	array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Comic text",'fable'),
			"param_name" => "comic_text",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Animate Comic text",'fable'),
			"description" => esc_html__("Access https://daneden.github.io/animate.css/ and find animation class. For example: fadeIn", 'fable'),
			"param_name" => "animate_comic_text",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Title",'fable'),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Animate Title",'fable'),
			"description" => esc_html__("Access https://daneden.github.io/animate.css/ and find animation class. For example: fadeIn", 'fable'),
			"param_name" => "animate_title",
			"value" => ""
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Description",'fable'),
			"param_name" => "desc",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Animate Description",'fable'),
			"description" => esc_html__("Access https://daneden.github.io/animate.css/ and find animation class. For example: fadeIn", 'fable'),
			"param_name" => "animate_desc",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Text link",'fable'),
			"param_name" => "text_link",
			"value" => ""
		),
		array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "heading" => __("Target",'fable'),
            "param_name" => "target",
            "value" => array(
            	esc_html__('Same window', 'fable') => '_self',
                esc_html__('New window', 'fable') => '_blank',
            ),
            "default"  => '_self'
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Button link",'fable'),
			"param_name" => "button_link",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Animate Link",'fable'),
			"description" => esc_html__("Access https://daneden.github.io/animate.css/ and find animation class. For example: fadeIn", 'fable'),
			"param_name" => "animate_link",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Class",'fable'),
			"param_name" => "class",
			"value" => "",
			"description" => 'Insert class to use for your style'
		)

	 
)));



vc_map( array(
	 "name" => esc_html__("Daily Menu", 'fable'),
	 "base" => "fable_daily_menu",
	 "class" => "",
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	array(
	       "type" => "label",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Menu have to choose Daily Menu in setting: Restaurant menu >> choose a menu click edit >> Daily Menu: Yes",'fable'),
	       "param_name" => "label",
	       "value"	=> ""
	    ),
	 	array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("order by",'fable'),
	       "param_name" => "order_by",
	       "value" => array(   
		            esc_html__('id', 'fable') => 'ID',
		            esc_html__('slug', 'fable') => 'slug',
		            esc_html__('date', 'fable') => 'date',
		            esc_html__('modified', 'fable') => 'modified',
		            esc_html__('rand', 'fable') => 'rand',
		            ),
		    "default" => 'ID'
	    ),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Order",'fable'),
	       "param_name" => "order",
	       "value" => array(
	       		esc_html__('DESC', 'fable') => "DESC",
	       		esc_html__('ASC', 'fable') => "ASC",
	       	),
	       "default"	=> "DESC"
	    ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Count item",'fable'),
	       "param_name" => "count",
	       "value"	=> "100"
	    ),

	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show link",'fable'),
	       "param_name" => "show_link",
	       "value" => array(
	       		esc_html__('No', 'fable') => "no",
	       		esc_html__('Yes', 'fable') => "yes",
	       	),
	       "default"	=> "no"
	    ),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Class",'fable'),
			"param_name" => "class",
			"value" => ""
		),
		

	 
)));

vc_map( array(
	 "name" => esc_html__("Best Recipes", 'fable'),
	 "base" => "fable_best_recipes",
	 "class" => "",
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	
	 	array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Id of menu",'fable'),
			"description" => esc_html__("Restaurant Menu >>  All Restaurant Menu >> Click a menu >> See in address taskbar like post=107 => ID is 107", 'fable'),
			"param_name" => "id",
			"value" => ""
		),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show link",'fable'),
	       "param_name" => "show_link",
	       "value" => array(
	       		esc_html__('No', 'fable') => "no",
	       		esc_html__('Yes', 'fable') => "yes",
	       	),
	       "default"	=> "no"
	    ),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Class",'fable'),
			"param_name" => "class",
			"value" => ""
		),
		

	 
)));







/*Blog*/
$args = array(
  'orderby' => 'name',
  'order' => 'ASC'
  );

$categories=get_categories($args);
$cate_array = array();$arrayCateAll = array('All categories ' => 'all' );
if ($categories) {
	foreach ( $categories as $cate ) {
		$cate_array[$cate->cat_name] = $cate->cat_ID;
	}
} else {
	$cate_array["No content Category found"] = 0;
}
vc_map( array(
	 "name" => esc_html__("Blog", 'fable'),
	 "base" => "fable_from_our_blog",
	 "class" => "",
	 
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Category",'fable'),
	       "param_name" => "category",
	       "value" => array_merge($arrayCateAll,$cate_array),
	       "description" => esc_html__("Choose a Content Category from the drop down list.", 'fable')
	    ),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("order by",'fable'),
	       "param_name" => "order_by",
	       "value" => array(   
		            esc_html__('ID', 'fable') => 'ID',
		            esc_html__('Slug', 'fable') => 'slug',
		            esc_html__('Date', 'fable') => 'date',
		            esc_html__('Modified', 'fable') => 'modified',
		            esc_html__('Rand', 'fable') => 'rand',
		            ),
		    "default" => 'ID'
	    ),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Order",'fable'),
	       "param_name" => "order",
	       "value" => array(
	       		esc_html__('DESC', 'fable') => "DESC",
	       		esc_html__('ASC', 'fable') => "ASC",
	       	),
	       "default"	=> "DESC"
	    ),
	    array(
    	   "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Total item show",'fable'),
	       "param_name" => "total_count",
	       "value" => "20",
	       "description" => esc_html__('For example: 10','events')
	    ),
	    array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Columns show",'fable'),
			"param_name" => "cols_count",
			"value" => array(
					esc_html__('1 Columns', 'fable') => "col-md-12",
					esc_html__('2 Columns', 'fable') => "col-md-6",
					esc_html__('3 Columns', 'fable') => "col-md-4",
					esc_html__('4 Columns', 'fable') => "col-md-3",
					esc_html__('6 Columns', 'fable') => "col-md-2"
					
				),
			"default"	=> "col-md-12"
		),
		array(
    	   "type" => "checkbox",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show image thumbnail",'fable'),
	       "param_name" => "show_thumb",
	       'value' => array( esc_html__( 'Yes', 'js_composerp' ) => true ),
	     ),
		array(
    	   "type" => "checkbox",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show title",'fable'),
	       "param_name" => "show_title",
	       'value' => array( esc_html__( 'Yes', 'js_composerp' ) => true ),
	     ),
	     array(
    	   "type" => "checkbox",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show description",'fable'),
	       "param_name" => "show_desc",
	       'value' => array( esc_html__( 'Yes', 'js_composerp' ) => true ),
	     ),
	     array(
    	   "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Text readmore",'fable'),
	       "param_name" => "name_readmore",
	       "value" => "",
	       "description" => esc_html__('For example: Read more','fable')
	     ),
	     array(
    	   "type" => "checkbox",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show read more",'fable'),
	       "param_name" => "show_readmore",
	       'value' => array( esc_html__( 'Yes', 'js_composerp' ) => true ),
	     ),
	     array(
    	   "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Class",'fable'),
	       "param_name" => "class",
	       "value" => ""
	     )
)));
/* /Blog */

/* Menu category */
// $args = array(
//   'orderby' => 'name',
//   'order' => 'ASC'
//   );

//$menu_categories=get_categories($args);

// $args_tax = array(
// 	'name' => 'categories'
// );
$taxonomies = get_terms('categories');


$cate_menu_array = array();
$array_menu_CateAll = array('All categories ' => 'all' );

if ($taxonomies) {
	foreach ( $taxonomies as $tax ) {
		$cate_menu_array[$tax->name] = $tax->term_id;
	}
} else {
	$cate_menu_array["No content Category found"] = 0;
}


vc_map( array(
	 "name" => esc_html__("Menu Category", 'fable'),
	 "base" => "fable_menu_cat",
	 "class" => "",
	 "category" => esc_html__("FABLE Shortcode", 'fable'),
	 "icon" => "icon-qk",   
	 "params" => array(
	 	
	 	array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Category",'fable'),
	       "param_name" => "category",
	       "value" => array_merge($array_menu_CateAll,$cate_menu_array),
	       "description" => esc_html__("Choose a Content Category from the drop down list.", 'fable'),
	       "default" => "all"
	    ),
        array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Title",'fable'),
			"param_name" => "title",
			"value" => ""
		),
	 	array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("order by",'fable'),
	       "param_name" => "order_by",
	       "value" => array(   
		            esc_html__('ID', 'fable') => 'ID',
		            esc_html__('Slug', 'fable') => 'slug',
		            esc_html__('Date', 'fable') => 'date',
		            esc_html__('Modified', 'fable') => 'modified',
		            esc_html__('Random', 'fable') => 'rand',
		            ),
		    "default" => 'ID'
	    ),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Order",'fable'),
	       "param_name" => "order",
	       "value" => array(
	       		esc_html__('DESC', 'fable') => "DESC",
	       		esc_html__('ASC', 'fable') => "ASC",
	       	),
	       "default"	=> "DESC"
	    ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Count item",'fable'),
	       "param_name" => "count",
	       "value"	=> "100"
	    ),

	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => esc_html__("Show link",'fable'),
	       "param_name" => "show_link",
	       "value" => array(
	       		esc_html__('No', 'fable') => "no",
	       		esc_html__('Yes', 'fable') => "yes",
	       	),
	       "default"	=> "no"
	    ),
	    array(
	       "type" => "dropdown",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Style thumbnail",'fable'),
	       "param_name" => "style_thumbnail",
	       "value" => array(
	       		esc_html__('Style1', 'fable') => "style1",
	       		esc_html__('Style2', 'fable') => "style2"
	       	),
	       'default' => 'style1'
	    ),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Class",'fable'),
			"param_name" => "class",
			"value" => ""
		)
		

	 
)));


	// Carousel
	vc_map( array(
       "name" => __("Slider image", 'fable'),
       "base" => "carousel_image",
       "class" => "",
       "category" => esc_html__("FABLE Shortcode", 'fable'),
       "as_parent" => array('only' => 'carousel_item'),
       "js_view" => 'VcColumnView',
       "icon" => "icon-qk",   
       "params" => array(
          array(
               "type" => "textfield",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Class",'fable'),
               "param_name" => "class",
               "value" => "",
               "description" => esc_html__('Insert class to use for your style','fable')
          )
       
      )));

      vc_map( array(
       "name" => __("Slide item", 'fable'),
       "base" => "carousel_item",
       "class" => "",
       "category" => esc_html__("FABLE Shortcode", 'fable'),
       "as_child" => array('only' => 'carousel_image'),
       "icon" => "icon-qk",   
       "params" => array(

        array(
             "type" => "attach_image",
             "holder" => "div",
             "class" => "",
             "heading" => __("Thumbnail",'fable'),
             "param_name" => "thumbnail",
             "value" => ""
        ),
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Alt",'fable'),
             "param_name" => "alt",
             "value" => ""
        ),
        
          array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Class",'fable'),
             "param_name" => "Class",
             "value" => ""
             
        ),
        
       
      )));

      if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
          class WPBakeryShortCode_carousel_image extends WPBakeryShortCodesContainer {
          }
      }
      if ( class_exists( 'WPBakeryShortCode' ) ) {
          class WPBakeryShortCode_carousel_item extends WPBakeryShortCode {
          }
      }		


// Img popup
vc_map( array(
   "name" => __("Image popup", 'fable'),
   "base" => "img_popup",
   "class" => "",
   "category" => esc_html__("FABLE Shortcode", 'fable'),
   "icon" => "icon-qk",   
   "params" => array(
		array(
             "type" => "attach_image",
             "holder" => "div",
             "class" => "",
             "heading" => __("Thumbnail",'fable'),
             "param_name" => "thumbnail",
             "value" => ""
        ),
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Alt",'fable'),
             "param_name" => "alt",
             "value" => ""
        ),			
		array(
		   "type" => "textfield",
		   "holder" => "div",
		   "class" => "",
		   "heading" => esc_html__("Class",'fable'),
		   "param_name" => "class",
		   "value" => "",
		   "description" => esc_html__('Insert class to use for your style','fable')
		)
   
  )));


// Img popup
vc_map( array(
   "name" => __("Instagram", 'fable'),
   "base" => "fable_instagram",
   "class" => "",
   "category" => esc_html__("FABLE Shortcode", 'fable'),
   "icon" => "icon-qk",   
   "params" => array(
		
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("User id",'fable'),
             "description" => __("Find user ID: https://smashballoon.com/instagram-feed/find-instagram-user-id/", 'fable'),
             "param_name" => "userid",
             "value" => ""
        ),
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Access Token",'fable'),
             "description" => __( "Fin Access Token: https://www.instagram.com/developer/authentication/", 'fable' ),
             "param_name" => "accesstoken",
             "value" => ""
        ),	
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Description",'fable'),
             "param_name" => "desc",
             "value" => ""
        ),
        array(
             "type" => "textfield",
             "holder" => "div",
             "class" => "",
             "heading" => __("Link",'fable'),
             "param_name" => "link",
             "value" => ""
        ),
		array(
		   "type" => "textfield",
		   "holder" => "div",
		   "class" => "",
		   "heading" => esc_html__("Class",'fable'),
		   "param_name" => "class",
		   "value" => "",
		   "description" => esc_html__('Insert class to use for your style','fable')
		)
   
  )));


}} /* /if //function */
?>