<?php 
/** Template Name: Visual Composer Template */
?>

<?php 
	$main_layout = ( get_post_meta( get_the_id(), "fable_met_main_layout", true ) != 'global' ) ? get_post_meta( get_the_id(), "fable_met_main_layout", true ) : get_theme_mod( 'fable_cus_main_layout', 'right_sidebar' );

	$width_sidebar = "col-lg-3 col-md-4 col-sm-12";
	$width_main_content = ( $main_layout == "fullwidth" ) ? "col-md-12" : " col-lg-9 col-md-8 col-sm-12 ";
?>

<?php get_header(); ?>

<?php
	$header_bg = get_post_meta( get_the_id(), "fable_met_header_bg", true )?get_post_meta( get_the_id(), "fable_met_header_bg", true ):'';
	$header_comic_text = get_post_meta( get_the_id(), "fable_met_header_comic_text", true )?get_post_meta( get_the_id(), "fable_met_header_comic_text", true ):'';
	$header_title_text = get_post_meta( get_the_id(), "fable_met_header_title_text", true )?get_post_meta( get_the_id(), "fable_met_header_title_text", true ):'';
	$header_description_text = get_post_meta( get_the_id(), "fable_met_header_description_text", true )?get_post_meta( get_the_id(), "fable_met_header_description_text", true ):'';
?>
<?php if($header_bg || $header_comic_text || $header_title_text || $header_description_text) { ?>
<section id="hero-section" class="about-hero-section" style="background: url(<?php echo esc_url($header_bg); ?>)">
	<div class="image-overlay"></div>
	<div class="container image-section-inside">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1 text-center">
	            <span class="comic-text wow fadeIn" data-wow-delay="0.5s"><?php echo esc_html($header_comic_text); ?></span>
	            <h2 class="section-title white wow bounceIn" data-wow-delay="1s"><?php echo esc_html($header_title_text); ?></h2>
	            <p class="hero-text wow fadeInUp" data-wow-delay="2s"><?php echo esc_html($header_description_text); ?></p>
	        </div>
	    </div>
	</div>
</section>
<?php } ?>

	<?php $show_page_heading = get_post_meta(get_the_id(), "fable_met_page_heading", true); ?>
	<?php if($show_page_heading == 'show'){ ?>
		<div class="container">
	    	<h2 class="post-title"><?php the_title();?> </h2>
	    </div>
	<?php } ?>

	<!-- Display sidebar at left  -->
	<?php if($main_layout == "left_sidebar" || $main_layout == "right_sidebar"){ ?>

		<div class="container">
			<div class="row">
				<?php if($main_layout == "left_sidebar"){ ?>
					<div class="<?php echo esc_attr($width_sidebar); ?>">
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>

				<div class="<?php echo esc_attr($width_main_content); ?>">
					<?php while(have_posts()): the_post(); ?>
						<div class="row">
								<?php the_content( ); ?>
						</div>
				    <?php endwhile; ?>		
				</div>

				<!-- Display sidebar at right  -->	
				<?php if($main_layout == "right_sidebar"){ ?>
					<div class="<?php echo esc_attr($width_sidebar); ?>">
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
		</div>

	<?php }else{ ?>

		<?php while(have_posts()): the_post(); ?>
			<!-- <div class="<?php echo esc_attr($width_main_content); ?>">
				<div class="row"> -->
					<?php the_content( ); ?>
				<!-- </div>	
			</div> -->
	    <?php endwhile; ?>

	<?php } ?>


	

<?php get_footer(); ?>
	