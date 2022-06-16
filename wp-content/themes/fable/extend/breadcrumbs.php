<?php 
function fable_breadcrumbs() { 
global $wp_query;


ob_start();

global $post; ?>
<div id="breadcrumbs" >
        <?php
      
        if(in_array("search-no-results",get_body_class())){ ?>
           <div class="breadcrumbs" class="col-sm-12">
           <a href="<?php get_template_directory_uri().'/'; ?>"><?php esc_html__('Home', 'fable'); ?></a>
           <span class="separator">/</span>
           <span class="current"><?php esc_html__('Search results for', 'fable'); ?> "<?php echo get_search_query(); ?>"</span> </div>
        <?php
            }else{
            	$separator = '<span class="separator">>></span>';
		        $home = esc_html__('Home', 'fable');
		        $before = '<li>';
		        $after = '</li>'; 
		?>


		            <div class="breadcrumbs">
						<div class="breadcrumbs-pattern">
							<div class="container">
								<div class="row">
									<ul class="breadcrumb"><?php
		        global $post;
		        global $wp_query;
		        $homeLink = home_url('/');
		        $type=get_post_type();


		        echo '<li><a href="' . $homeLink . '">' . $home . '</a></li> ' . $separator . ' ';
		        if ( is_category() ) {
			        global $wp_query;
			        $cat_obj = $wp_query->get_queried_object();
			        $thisCat = $cat_obj->term_id;
			        $thisCat = get_category($thisCat);
			        $parentCat = get_category($thisCat->parent);
			        if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' '));
			        print $before . '' . single_cat_title('', false) . '' . $after;
		        } elseif ( is_day() ) {
			        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $separator . ' ';
			        echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $separator . ' ';
			        print $before . esc_html__('Archive by date', 'fable').' "' . get_the_time('d') . '"' . $after;
		        } elseif ( is_month() ) {
			        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $separator . ' ';
			        print $before . esc_html__('Archive by month', 'fable').' "' . get_the_time('F') . '"' . $after;
		        } elseif ( is_year() ) {
		        	print $before . esc_html__('Archive by year', 'fable').'"' . get_the_time('Y') . '"' . $after;
		        } elseif ( is_single() && !is_attachment() ) {
			        if ( get_post_type() != 'post' ) {
				        $post_type = get_post_type_object(get_post_type());
				        $slug = $post_type->rewrite;
				        echo '<a href="' . $homeLink .  $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $separator . ' ';
				        print $before . get_the_title() . $after;
			        } else {
				        $cat = get_the_category(); $cat = $cat[0];
				        echo ' ' . get_category_parents($cat, TRUE, ' ' . $separator . ' ') . ' ';
				        print $before . '' . get_the_title() . '' . $after;
			        }
		        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			        $post_type = get_post_type_object(get_post_type());
			        print $before . $post_type->labels->singular_name . $after;
		        } elseif ( is_attachment() ) {
			        $parent_id  = $post->post_parent;
			        $breadcrumbs = array();
			        while ($parent_id) {
				        $page = get_page($parent_id);
				        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				        $parent_id    = $page->post_parent;
			        }
			        $breadcrumbs = array_reverse($breadcrumbs);
			        foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $separator . ' ';
			        print $before . '' . get_the_title() . '' . $after;
		        } elseif ( is_page() && !$post->post_parent ) {
		        	print $before . '' . get_the_title() . '' . $after;
		        } elseif ( is_page() && $post->post_parent ) {
			        $parent_id  = $post->post_parent;
			        $breadcrumbs = array();
			        while ($parent_id) {
				        $page = get_page($parent_id);
				        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				        $parent_id    = $page->post_parent;
			        }
			        $breadcrumbs = array_reverse($breadcrumbs);
			        foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $separator . ' ';
		        	print $before . '' . get_the_title() . '"' . $after;
		        } elseif ( is_search()) {
		            print $before . esc_html__('Search results for', 'fable').' "' . get_search_query() . '"' . $after;
		        } elseif ( is_tag() ) {
		        	print $before . esc_html__('Archive by tag', 'fable').' "' . single_tag_title('', false) . '"' . $after;
		        } elseif ( is_author() ) {
		        global $author;
		        $userdata = get_userdata($author);
		        	print $before . esc_html__('Articles posted by', 'fable').' "' . $userdata->display_name . '"' . $after;
		        } elseif ( is_404() ) {
		        	print $before . esc_html__('You got it Error 404 not Found', 'fable').'&nbsp;' . $after;
		        }
		        if ( get_query_var('paged') ) {
			        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' ';
			        //echo ('Page') . ' ' . get_query_var('paged');
			        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '';
		        }
								        echo '</ul>
										</div>
									</div>
								</div>
							</div>';
            }
        ?>
</div>
<?php 

$list_post2 = ob_get_contents();ob_end_clean();?>
 <?php print  $list_post2; 
} ?>
