<?php
get_header();

$main_layout = get_theme_mod( 'fable_cus_main_layout', 'right_sidebar' );

$width_sidebar = "col-lg-3 col-md-4 col-sm-12";
$width_main_content = ( $main_layout == "fullwidth" ) ? "col-md-12" : " col-lg-9 col-md-8 col-sm-12 ";

?>

<?php if(get_theme_mod('fable_cus_show_bg_seach_page','false') == 'true'){ ?>
	<?php 
	$fable_cus_header_bg_search = '';
	$fable_cus_header_bg_search =  get_theme_mod('fable_cus_header_bg_search',''); ?>
	<section id="hero-section" class="about-hero-section" style="background: url(<?php echo esc_url($fable_cus_header_bg_search); ?>)">
	    <div class="image-overlay"></div>
	    <div class="container image-section-inside">
	        <div class="row">
	            <div class="col-md-10 col-md-offset-1 text-center">
	                <span class="comic-text wow fadeIn" data-wow-delay="0.5s"><?php esc_html_e('Search Result', 'fable'); ?></span>
		            <h2 class="section-title white wow bounceIn" data-wow-delay="1s"></h2>
		            <p class="hero-text wow fadeInUp" data-wow-delay="2s"></p>


	            </div>
	        </div>
	    </div>
	</section>
<?php } ?>
        
<section class="page-section">
    <div class="container">
        <div class="row">

    		<!-- Display sidebar at left  -->
			<?php if($main_layout == "left_sidebar"){ ?>
				<div class="<?php echo esc_attr($width_sidebar); ?>">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>

			<!-- Display content  -->
			<div class="<?php echo esc_attr($width_main_content); ?>">

				<header class="page-header">
					<h2 class="page-title">
						<?php printf( __( 'Search Results for: <span>%s</span>', 'fable' ), get_search_query() ); ?>
					</h2>
				</header>

				<!-- Display content  -->
		        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content/content', 'search' ); ?>
		        <?php endwhile; ?>
		        <div class="pagination-wrapper">
		            <?php fable_ovatheme::fable_pagination_theme(); ?>
				</div>
		        <?php else : ?>
		                <?php get_template_part( 'content/content', 'none' ); ?>
		        <?php endif; ?>

			</div>

			<!-- Display sidebar at right  -->	
			<?php if($main_layout == "right_sidebar"){ ?>
				<div class="<?php echo esc_attr($width_sidebar); ?>">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>

        </div>
    </div>
</section>
    
<?php get_footer(); ?>