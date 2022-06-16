<?php $sticky_class = is_sticky()?'sticky':''; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-wrap '. $sticky_class); ?>  >
		
		<?php if(has_post_thumbnail()){ ?>
        <div class="post-media">
        	<div class="popup-wrapper">
                <div class="popup-gallery">
                    <a class="blog-item-pic" href="<?php the_permalink(); ?>">
                    <?php fable_content_thumbnail('full'); /* Display thumbnail of post */ ?>
                    <span class="eye-wrapper"><i class="pe-7s-link eye-icon"></i></span></a>
                </div>
            </div>

        	
        </div>
        <?php } ?>

        <div class="post-title">
	            <?php fable_content_title(); /* Display title of post */ ?>
	    </div>

        <div class="post-meta">
	        <?php fable_content_meta(); /* Display Date, Author, Comment */ ?>
	    </div>

	    <div class="post-body">
	    	<div class="post-excerpt">
	            <?php fable_content_body(); /* Display content of post or intro in category page */ ?>
	        </div>
	    </div>

	    <?php if(!is_single()){ ?> 
	            <?php fable_content_readmore(); /* Display read more button in category page */ ?>
	    <?php }?>

	    <?php if(is_single()){ ?>
	    <?php fable_content_tag(); /* Display tags, category */ ?>
	    <?php } ?>

</article>