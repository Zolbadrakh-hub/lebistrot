<?php
/* Begin Shortcode */
add_shortcode('fable_begin', 'fable_begin');
function fable_begin($atts, $content = null) {

    $atts = shortcode_atts(
    array(
    	'image'	=> '',
    	'title' => '',
    	'style' => 'scrool',
    	'link' => '',
		'class' => '',
    ), $atts);

    $html = '';

    if($atts['image']) $image_info = wp_get_attachment_image_src($atts['image'], 'full');
    if($image_info[0]){
    	$link_img = $image_info[0];
    }else{
    	$link_img = $atts['image'];
    }
    $target = $class = '';

    if($atts['style'] == '_blank'){
    	$target = '_blank';
    	$class = '';
    }else if($atts['style'] == 'scrool'){
    	$class = 'scrool';
    }
    
    $html .= '<div class="blog-item '.$atts['class'].'">
			    <div class="popup-wrapper">
			        <div class="popup-gallery">
			            <a href="'.$atts['link'].'" target="'.$target.'" class="'.$class.'"><img src="'.$link_img.'" class="width-100" alt="'.$atts['title'].'"><span class="eye-wrapper"></span><span class="text">'.$atts['title'].'</span></a>
			        </div>
			    </div>
			</div>';
    return $html;

}

// Heading shortcode
add_shortcode('fable_heading', 'fable_heading');
function fable_heading($atts, $content = null) {

    $atts = shortcode_atts(
    array(
    	'comic_text' => '',
        'animate_comic_text' => '',
    	'title' => '',
        'animate_title' => '',
    	'desc' => '',
        'animate_desc' => '',
    	'text_link' => '',
    	'target' => '_self',
    	'button_link' => '',
        'animate_link' => '',
		'class' => '',
    ), $atts);
    $animate_comic_text = ($atts['animate_comic_text']) ? 'wow '.$atts['animate_comic_text'] : '';
    $animate_title = ($atts['animate_title']) ? 'wow '.$atts['animate_title'] : '';
    $animate_desc  = ($atts['animate_desc']) ? 'wow '.$atts['animate_desc'] : '';
    $animate_link = ($atts['animate_link']) ? 'wow '.$atts['animate_link'] : '';
    $html = '<div class="'.$atts['class'].'">';
	    $html .= ($atts['comic_text'] != '') ? '<span class="comic-text '.$animate_comic_text.'">'.$atts['comic_text'].'</span>':'';
	    $html .= ($atts['title'] != '') ? '<h2 class="section-title  '.$animate_title.'">'.$atts['title'].'</h2>':'';
	    $html .= ($atts['desc'] != '') ? '<p class="'.$animate_desc.'">'.$atts['desc'].'</p>':'';
	    $html .= ($atts['text_link'] != '') ? '<a href="'.$atts['button_link'].'" target="'.$atts['target'].'" class="btn btn-lg btn-yellow '.$animate_link.'">'.$atts['text_link'].'</a>':'';
	$html .= '</div>';		

    return $html;

}


// Daily Menu
add_shortcode('fable_daily_menu', 'fable_daily_menu');
function fable_daily_menu($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'order_by' => 'ID',
        'order' => 'DESC',
        'count' => '100',
        'show_link' => 'no',
        'class' => '',
    ), $atts);

    $args = array('post_type' => 'restaurant_menu',
                  'orderby'=> $atts['order_by'], 
                  'order'=> $atts['order'], 
                  'posts_per_page'=> $atts['count'],
                  'meta_query' => array(
                    array(
                    'key' => 'fable_met_daily_menu',
                    'value' => 'yes',
                   ))

                );
    $html = '';
    $daily_menu = new WP_QUery($args);
    if($daily_menu->have_posts()):
        while($daily_menu->have_posts()): $daily_menu->the_post();
            global $post;
            $price = get_post_meta($post->ID, "fable_met_price_menu", true);
            $url_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

            $html .= '<div class="col-md-6">
                        <div class="menu-wrapper">
                            
                            <div class="menu-image">
                                <img src="'.$url_img.'" class="width-100" alt="food">
                            </div>

                            <div class="menu-description">
                                <div class="menu-list">';
                                    $html .= ($atts['show_link'] == 'yes') ? '<h5><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5>':'<h5>'.get_the_title().'</h5>';
                                    
                                    
                                    $html.= '<p class="price">'.$price.'</p>
                                    <span class="menu-dot-line"></span>
                                </div>
                                <p class="menu-ingredients">'. get_the_excerpt() .'</p>
                            </div>

                        </div>
                    </div>';    
        endwhile;
    endif;
    wp_reset_postdata();

    return $html;

}


// Best Recipes
add_shortcode('fable_best_recipes', 'fable_best_recipes');
function fable_best_recipes($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'id' => 'ID',
        'show_link' => 'no',
        'class' => '',
    ), $atts);

    $args = array('post_type' => 'restaurant_menu',
                  'p'   => $atts['id']
                );
    $html = '';
    $daily_menu = new WP_QUery($args);
    if($daily_menu->have_posts()):
        while($daily_menu->have_posts()): $daily_menu->the_post();
            global $post;
            $price = get_post_meta($post->ID, "fable_met_price_menu", true);
            

            $html .= '<div class="menu-wrapper '.$atts['class'].'">
                        <div class="home-menu-list">';
                            if($atts['show_link'] == 'yes'){
                                $html .= '<h5 class="white"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5>';
                            }else{
                                $html .= '<h5 class="white">'.get_the_title().'</h5>';
                            }

                            $html .= '<p class="price">'.$price.'</p>
                            <span class="dot-line"></span>
                        </div>
                        <p class="home-menu-ingredients">'.get_the_excerpt().'</p>
                            
                    </div>';    
        endwhile;
    endif;
    wp_reset_postdata();

    return $html;

}


/*Blog*/
  add_shortcode('fable_from_our_blog', 'fable_from_our_blog');
  function fable_from_our_blog($atts, $content = null) {

      $atts = shortcode_atts(
      array( 
        'category'=>'',
        'total_count'=>'20',
        'order_by' => 'ID',
        'order'     => 'DESC',
        'cols_count'=>'col-md-12',
        'show_thumb'=>'',
        'show_title'=>'',
        'show_desc'=>'',
        'name_readmore'=>'',
        'show_readmore'=>'',
        'class' => '',
      ), $atts);

      

      $args =array();
      if ($atts['category']=='all') {
        $args=array('post_type' => 'post', 'posts_per_page' => $atts['total_count'], 'orderby'=> $atts['order_by'], 'order'=> $atts['order']  );
      }else{
        $args=array('post_type' => 'post', 'cat'=>$atts['category'],'posts_per_page' => $atts['total_count'], 'orderby'=> $atts['order_by'], 'order'=> $atts['order'] );
      }
     
      $blog = new WP_Query($args);
      
      ob_start(); ?>

        <?php while($blog->have_posts()) : $blog->the_post(); ?>
           
            <div class="<?php echo esc_attr($atts['cols_count']); ?> wow bounceInUp <?php echo esc_attr($atts['class']); ?>">
                <div class="blog-item">

                    <?php if($atts['show_thumb']){ ?>
                        <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($blog->ID)); ?>
                        <div class="popup-wrapper">
                            <div class="popup-gallery">
                                <a class="popup3 blog-item-pic" href="<?php echo esc_attr($thumbnail_url); ?>">
                                    <img src="<?php echo esc_attr($thumbnail_url); ?>" class="width-100" alt="<?php the_title( ); ?>">
                                    <span class="eye-wrapper"><i class="pe-7s-expand1 eye-icon"></i></span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="blog-item-inner">
                        <?php if($atts['show_title']){ ?>
                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php } ?>
                        <?php if($atts['show_desc']){ ?>
                            <?php the_excerpt();?>
                        <?php } ?>
                        <?php if($atts['show_readmore']){ ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-yellow-small scrool"><?php echo esc_html($atts['name_readmore']); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
           
        <?php endwhile; ?>
      
      <?php
         wp_reset_postdata();
          return ob_get_clean();
      }

/* /Blog */


// Menu category
add_shortcode('fable_menu_cat', 'fable_menu_cat');
function fable_menu_cat($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'title' => '',
        'category' => 'all',
        'order_by' => 'ID',
        'order' => 'DESC',
        'count' => '100',
        'show_link' => 'no',
        'style_thumbnail' => 'style1',
        'class' => '',
    ), $atts);

    $args = array('post_type' => 'restaurant_menu',
                  'orderby' => $atts['order_by'], 
                  'order' => $atts['order'], 
                  'posts_per_page' => $atts['count'],
                  'tax_query' => array(
                        array(
                            'taxonomy' => 'categories',
                            'field'    => 'term_id',
                            'terms'    => $atts['category'],
                        ),
                    ),
                );

    $html = '<h2 class="menu-section-title">'.$atts['title'].'</h2>';

    $menu_cat = new WP_QUery($args);
    if($menu_cat->have_posts()):
        while($menu_cat->have_posts()): $menu_cat->the_post();
            global $post;
            $price = get_post_meta($post->ID, "fable_met_price_menu", true);
            $url_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

            $html .= '

                    <div class="menu-wrapper '.$atts['class'].'">
                            
                            <div class="menu-image '.$atts['style_thumbnail'].'">';
                            if( $url_img ){
                                $html .= '<img src="'.$url_img.'" class="width-100" alt="food">';
                            }
                            $html .= '</div>

                            <div class="menu-description">
                                <div class="menu-list">';
                                    $html .= ($atts['show_link'] == 'yes') ? '<h5><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5>':'<h5>'.get_the_title().'</h5>';
                                    
                                    
                                    $html.= '<p class="price">'.$price.'</p>
                                    <span class="menu-dot-line"></span>
                                </div>
                                <p class="menu-ingredients">'. get_the_excerpt() .'</p>
                            </div>

                        </div>
                    ';    
        endwhile;
    endif;
    wp_reset_postdata();

    return $html;

}


/* carousel image */
add_shortcode('carousel_image', 'carousel_image');
function carousel_image($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'class' => '',
    ), $atts);

    $rand = rand();

    $html = '<div id="'.$rand.'" class="carousel carousel1 slide '.$atts['class'].'" data-interval="true">
            <div class="carousel-inner">
                '.do_shortcode($content).'
            </div>
            <ol class="carousel-indicators">
                <li data-target="#'.$rand.'" data-slide-to="0" class="active"></li>
                <li data-target="#'.$rand.'" data-slide-to="1"></li>
            </ol>
        </div>';

    return $html;

}


/* carousel item */
add_shortcode('carousel_item', 'carousel_item');
function carousel_item($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'thumbnail' => '',
        'alt' => '',
        'class' => '',
    ), $atts);

    if(wp_get_attachment_image_src($atts['thumbnail'], 'full')){
        $obj_thumbnail = wp_get_attachment_image_src($atts['thumbnail'], 'full');
        $thumbnail = $obj_thumbnail['0'];
    }else if($atts['thumbnail']!= ''){
        $thumbnail = $atts['thumbnail'];
    }

    $html = '<div class="item '.$atts['class'].'">
                <div class="image-wrapper">
                    <img src="'.$thumbnail.'" alt="'.$atts['alt'].'" class="width-100">
                </div>
            </div>';

    return $html;

}

/* image popup */
add_shortcode('img_popup', 'img_popup');
function img_popup($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'thumbnail' => '',
        'alt' => '',
        'class' => '',
    ), $atts);

    if(wp_get_attachment_image_src($atts['thumbnail'], 'full')){
        $obj_thumbnail = wp_get_attachment_image_src($atts['thumbnail'], 'full');
        $thumbnail = $obj_thumbnail['0'];
    }else if($atts['thumbnail']!= ''){
        $thumbnail = $atts['thumbnail'];
    }

    $html = '<div class="popup-wrapper '.$atts['class'].'">
                <div class="popup-gallery">
                    <a class="popup3" href="'.$thumbnail.'">
                        <img src="'.$thumbnail.'" class="width-100" alt="'.$atts['alt'].'">
                        <span class="eye-wrapper"><i class="pe-7s-expand1 eye-icon"></i></span>
                        </a>
                </div>
            </div>';

    return $html;

}


/* installgram  */
add_shortcode('fable_instagram', 'fable_instagram');
function fable_instagram($atts, $content = null) {

    $atts = shortcode_atts(
    array(
        'userid' => '',
        'accesstoken' => '',
        'desc' => '',
        'link' => '',
        'class' => '',
    ), $atts);

    
    $html = '<div id="instafeed" class="'.$atts['class'].'" data-userid="'.$atts['userid'].'" data-accesstoken="'.$atts['accesstoken'].'">
            <div class="instagram-text">';

                if($atts['link']){
                    $html .= '<a href="'.$atts['link'].'"  target="_blank" class="instagram-icon">
                    <i class="fa fa-instagram"></i></a>';
                }
                $html .= '<p>'.$atts['desc'].'</p>';

            $html .= '</div>
            </div>';

    return $html;

}





?>