<?php $sticky_class = is_sticky()?'sticky':''; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-wrap '. $sticky_class); ?>  >
		
        <div class="post-media">
        	<?php //if(!is_single()){ ?>
        	<?php fable_content_gallery(); /* Display gallery of post */ ?>
        	<?php //} ?>
        </div>

        <div class="post-title">
	            <?php fable_content_title(); /* Display title of post */ ?>
	    </div>

        <div class="post-meta">
	        <?php fable_content_meta(); /* Display Date, Author, Comment */ ?>
	    </div>

	    <div class="post-body">
	            <?php fable_content_body(); /* Display content of post or intro in category page */ ?>
	    </div>

	    <?php if(!is_single()){ ?> 
	            <?php fable_content_readmore(); /* Display read more button in category page */ ?>
	    <?php }?>

	    <?php if(is_single()){ ?>
	    <?php fable_content_tag(); /* Display tags, category */ ?>
	    <?php } ?>

</article>