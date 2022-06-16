<?php 
if (post_password_required()) return; 

?>

<div class="container-fluid">
    <div class="row">
        
        <div class="content_comments">
            <div id="comments" class="comments">

                <?php if(have_comments()){ ?>
                    <div>
                        <h4 class="block-title"> 
                            <?php comments_number( esc_html__('0 Comment', 'fable'), esc_html__( '1 Comment', 'fable' ), esc_html__( '% Comments', 'fable' ) ); ?>
                        </h4>
                    </div>

                <?php } ?>

                <?php if (have_comments()) { ?>
                    <ul class="commentlists">
                        <?php wp_list_comments('callback=fable_theme_comment'); ?>
                    </ul>
                    <?php
                    // Are there comments to navigate through?

                    if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
                        <footer class="navigation comment-navigation" role="navigation">
                            <?php esc_html_e( 'Comment navigation', 'fable' ); ?>
                            <div class="previous"><?php previous_comments_link(__('&larr; Older Comments', 'fable')); ?></div>
                            <div class="next right"><?php next_comments_link(__('Newer Comments &rarr;', 'fable')); ?></div>
                        </footer><!-- .comment-navigation -->
                    <?php endif; // Check for comment navigation ?>

                    <?php if (!comments_open() && get_comments_number()) : ?>
                        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fable' ); ?></p>
                    <?php endif; ?>
                <?php } ?>

                <?php

                $aria_req = ($req ? " aria-required='true'" : '');
                $comment_args = array(
                    'title_reply' => wp_kses('<h4 class="block-title">' . esc_html__( 'Leave a reply', 'fable' ) . '</h4>', true),
                    'fields' => apply_filters('comment_form_default_fields', array(
                        'author' => '<div class="col-md-129 comment_right"><input type="text" name="author" value="' . esc_attr($commenter['comment_author']) . '" ' . esc_attr($aria_req) . ' class="form-control comments_input" placeholder="'. esc_html__('Name','fable') .'" />',
                        'email' => '<input type="text" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" ' . esc_attr($aria_req) . ' class="form-control comments_input" placeholder="'. esc_html__('Email','fable') .'" /></div>',
                        'phone' => '<input type="text" name="url" value="' . esc_url($commenter['comment_author_url']) . '" ' . esc_attr($aria_req) . ' class="form-control comments_input" placeholder="'. esc_html__('Website','fable') .'" />',            
                        
                    )),
                    'comment_field' => '<div class="col-md-120 comment_left ">                               
                                                <textarea class="form-control comments_text" rows="7" name="comment" placeholder="'. esc_html__('Your Comment ...','fable') .'"></textarea>
                                        </div>',
                    'label_submit' => esc_html__('Submit Comment','fable'),
                    'comment_notes_before' => '',
                    'comment_notes_after' => '',
                );
                ?>

                <?php global $post; ?>
                <?php if ('open' == $post->comment_status) { ?>
                    <div class="commentform">
                        
                            <?php comment_form($comment_args); ?>
                        
                    </div><!-- end commentform -->
                <?php } ?>


            </div><!-- end comments -->
        </div>
        
    </div>
</div>


