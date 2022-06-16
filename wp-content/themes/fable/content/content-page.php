<?php 
$show_page_heading = get_post_meta($wp_query->get_queried_object_id(), "fable_met_page_heading", true)?get_post_meta($wp_query->get_queried_object_id(), "fable_met_page_heading", true):'yes';
 ?>
<?php if($show_page_heading == 'yes'){ ?>
    <h2 class="post-title">
    	<a href="<?php esc_url(the_permalink());?>" title="<?php the_title();?>">
    		<?php the_title();?>
    	</a>
    </h2>
<?php } ?>

<?php 
	the_content();
	wp_link_pages();
?>
