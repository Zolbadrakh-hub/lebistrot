<?php

/* This is functions define blocks to display post */

if ( ! function_exists( 'fable_content_thumbnail' ) ) {
  function fable_content_thumbnail( $size ) {
    if ( has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image') )  :
      the_post_thumbnail( $size, array('class'=> 'img-responsive' ));
    endif;
  }
}

if ( ! function_exists( 'fable_postformat_video' ) ) {
  function fable_postformat_video( ) { ?>
    <?php if(has_post_format('video') && wp_oembed_get(get_post_meta(get_the_id(), "fable_met_embed_media", true))){ ?>
	    <div class="js-video postformat_video">
	        <?php echo wp_oembed_get(get_post_meta(get_the_id(), "fable_met_embed_media", true)); ?>
	    </div>
    <?php } ?>
  <?php }
}

if ( ! function_exists( 'fable_postformat_audio ') ) {
  function fable_postformat_audio( ) { ?>
    <?php if(has_post_format('audio') && wp_oembed_get(get_post_meta(get_the_id(), "fable_met_embed_media", true))){ ?>
	    <div class="js-video postformat_audio">
	        <?php echo wp_oembed_get(get_post_meta(get_the_id(), "fable_met_embed_media", true)); ?>
	    </div>
    <?php } ?>
  <?php }
}

if ( ! function_exists( 'fable_content_title' ) ) {
  function fable_content_title() { ?>

    <?php if ( is_single() ) : ?>
      <h2 class="blog-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
    <?php else : ?>
      <h2 class="blog-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php endif; ?>

 <?php }
}


if ( ! function_exists( 'fable_content_meta' ) ) {
  function fable_content_meta( ) { ?>

  		<!-- <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a> -->
  		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="blog-icons"><i class="fa fa-user"></i><?php the_author_meta( 'display_name' ); ?></a>
        <a href="#" class="blog-icons"><i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ));?></a>
        <!-- <a href="#" class="blog-icons last"><i class="fa fa-comments"></i> 10 Comments</a> -->
        <i class="fa fa-comments meta_comment"></i>
		            <?php comments_popup_link(
		            	esc_html__(' 0 comment', 'fable'), 
		            	esc_html__(' 1 comment', 'fable'), 
		            	' % comments'.esc_html__('', 'fable')
		            ); ?>
		
	    
  <?php }
}

if ( ! function_exists( 'fable_content_body' ) ) {
  function fable_content_body( ) { ?>
  	<div class="post-excerpt">
		<?php if(is_single()){
		    the_content();
		    wp_link_pages();                
		}else{
			the_excerpt();
		}?>
	</div>

	<?php 
	}
}

if ( ! function_exists( 'fable_content_readmore' ) ) {
  function fable_content_readmore( ) { ?>
  	<div class="post-footer">
		<div class="post-readmore">
		    <a class="btn btn-lg btn-yellow-small scrool" href="<?php the_permalink(); ?>"><?php  _e('Read more', 'fable'); ?></a>
		</div>
	</div>
 <?php }
}

if ( ! function_exists( 'fable_content_tag' ) ) {
  function fable_content_tag( ) { ?>
	
	    <footer class="post-tag">
	        <?php if(has_tag()){ ?>
	            <span class="post-tags"><i class="fa fa-tag"></i> 
	                <?php the_tags('',',&nbsp;',''); ?>
	            </span> &nbsp;
	        <?php } ?>
	        <?php if(has_category( )){ ?>
	            <span class="post-categories"><i class="fa fa-folder-open"></i> 
	                <?php the_category(','); ?>
	            </span>
	        <?php } ?>
	    </footer>
	
 <?php }
}

if ( ! function_exists( 'fable_content_gallery' ) ) {
 	function fable_content_gallery( ) {

		if(has_post_format('gallery')){

			$gallery = get_post_meta(get_the_ID(), 'fable_met_file_list', true)?get_post_meta(get_the_ID(), 'fable_met_file_list', true):'';


		    $k = 0;
		    if($gallery){
		        $i=0;

		        ?>

		        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				  	<?php foreach ($gallery as $key => $value) { ?>
				    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo esc_attr($i); ?>" class="<?php echo ($i==0) ? 'active':''; ?>"></li>
				    <?php $i++; } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  	<?php foreach ($gallery as $key => $value) { ?>
					    <div class="item <?php echo esc_attr($k==0)?'active':'';$k++; ?>">
					      <img class="img-responsive" src="<?php  echo esc_attr($value); ?>" alt="<?php echo get_the_title(); ?>">
					    </div>
				   	<?php } ?>
				   </div>

				</div>

		       
		        <?php
		    }
		}

	}
}



//Custom comment List:
if ( ! function_exists( 'fable_theme_comment' ) ) {
function fable_theme_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>   
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <article class="comment_item" id="comment-<?php comment_ID(); ?>">


     	<div class="comments_box">
                    
	        <!-- <img src="images/founder2.jpg" alt="Picture" class="comments_pic"> -->
	        <span class="comments_pic">
	        	<?php echo get_avatar($comment,$size='70',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70' ); ?>
        	</span>
	        <!--begin post_text -->
	        <div class="post_text">
	        
	            <h5><?php printf('%s', get_comment_author_link()) ?><br/></h5>
	        
	            <ul class="post_info">
	                <li>
	                    <a href="#"><?php printf(get_comment_date()) ?></a>
	                </li>
	                <li class="last">
	                    <span><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
	                </li>
	            
	            </ul>
	            
	            <?php comment_text() ?>
	                         
	        </div>
	        <!--end post_text -->
	    
	    </div>

          <?php if ($comment->comment_approved == '0') : ?>
             <em><?php esc_html_e('Your comment is awaiting moderation.', 'fable') ?></em>
             <br />
          <?php endif; ?>
      
        
     </article>
<?php
}
}






