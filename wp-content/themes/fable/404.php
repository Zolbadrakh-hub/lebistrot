<?php get_header(); ?>

<?php if(get_theme_mod('fable_cus_show_404_page','false') == 'true'){ ?>
    <?php 
    $fable_cus_header_bg_404 = '';
    $fable_cus_header_bg_404 =  get_theme_mod('fable_cus_header_bg_404',''); ?>
    <section id="hero-section" class="about-hero-section" style="background: url(<?php echo esc_url($fable_cus_header_bg_404); ?>)">
        <div class="image-overlay"></div>
        <div class="container image-section-inside">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <span class="comic-text wow fadeIn" data-wow-delay="0.5s"><?php esc_html_e('Not Founnd', 'fable'); ?></span>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="page-section page404a color">
    <div class="container">

        <div id="main-slider">

            <!-- Slide -->
            <div class="item page text-center">
                <div class="caption">
                    <div class="container">
                        <div class="div-table">
                            <div class="div-cell">
                                <div class="caption-subtitle" ><i class="fa fa-warning"></i></div>
                                <h3 class="caption-subtitle"><?php esc_html_e( 'Error 404','fable' ); ?></h3>
                                <h2 class="caption-title"><?php esc_html_e( 'Page not Found', 'fable' ); ?></h2>
                                <p class="caption-text">
                                    <a class="btn btn-theme btn-theme-xl scroll-to" href="<?php echo esc_url( home_url( '/' ) );  ?>" > <?php esc_html_e('Go to Homepage','fable') ?> <i class="fa fa-arrow-circle-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

	</div>
</section>

<?php get_footer(); ?>